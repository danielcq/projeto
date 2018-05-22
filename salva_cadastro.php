<?php
include_once('banco.php');

$nome = $_POST['nome'];
$data = $_POST['data'];
$imagem = isset($_FILES['imagem']) ? $_FILES['imagem'] : '';


$result_msg_contato1 = "INSERT INTO cadastro(nome,data)VALUES('$nome','$data')";
$resultado_msg_contato1 = mysqli_query($conn1, $result_msg_contato1) or die(mysqli_error($conn1));
    if ($resultado_msg_contato1 == 1) {

        // pega o id
        $lastid = mysqli_insert_id($conn1);

        // Largura máxima em pixels
        $largura = 15000;
        // Altura máxima em pixels
        $altura = 18000;


        /* alterado............................... */
        /* criei um for para pegar todas as fotos */

        for ($i = 0; $i < count($imagem); $i++) {

            if (!empty($imagem["name"][$i])) {
                $error = array();

                // Verifica se o arquivo é uma imagem
                if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"][$i])) {
                    $error[1] = "Isso não é uma imagem.";
                }

                // Pega as dimensões da imagem
                $dimensoes = getimagesize($imagem["tmp_name"][$i]);

                // Verifica se a largura da imagem é maior que a largura permitida
                if ($dimensoes[0] > $largura) {
                    $error[2] = "A largura da imagem não deve ultrapassar " . $largura . " pixels";
                }

                // Verifica se a altura da imagem é maior que a altura permitida
                if ($dimensoes[1] > $altura) {
                    $error[3] = "Altura da imagem não deve ultrapassar " . $altura . " pixels";
                }

                // Verifica se o tamanho da imagem é maior que o tamanho permitido

                // Se não houver nenhum erro
                if (count($error) == 0) {

                    // Pega extensão da imagem
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"][$i], $ext);

                    // Gera um nome único para a imagem
                    $nome_imagem = md5(uniqid(time()) . rand(0, 100)) . "." . $ext[1];

                    // Caminho de onde ficará a imagem
                    $caminho_imagem = "foto_imagem/" . $nome_imagem;

                    // Faz o upload da imagem para seu respectivo caminho
                    move_uploaded_file($imagem["tmp_name"][$i], $caminho_imagem);

                    // Insere os dados no banco
                    $sql = mysqli_query($conn1, "UPDATE cadastro SET imagem" . ($i + 1) . " = '$caminho_imagem' WHERE id = " . $lastid);

                }

            }


        } // final for...

        // Se os dados forem inseridos com sucesso
        if ($sql) {
            echo
            "<script>
			alert('Cadastro feito com sucesso!');
			window.location.href='index.html';
			</script>";
        }
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "<br />";
            }
        }

    }



?>