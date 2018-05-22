<?php
include_once('banco.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];



$result_msg_contato = "INSERT INTO usuario(nome,senha)VALUES('$nome','$senha')";
$resultado_msg_contato= mysqli_query($conn1,$result_msg_contato)or die(mysqli_error($conn1));
if($resultado_msg_contato == 1){
    echo
    "<script>   
alert('Cadastro feito com sucesso!');
window.location.href='index.html';
</script>";
}
?>