<?php
include_once('banco.php');

$nome = $_POST['nome'];
$senha = $_POST['senha'];


$sql = "Select * FROM usuario WHERE nome = '$nome' AND senha = '$senha'" ;
//var_dump($sql);

$result = mysqli_query($conn1,$sql);
$exibe = mysqli_fetch_array($result);
//var_dump($exibe);

if(mysqli_num_rows($result)> 0) {
    session_start();
    $_SESSION['userid'] = $exibe['id'];
    $_SESSION['nome'] = $exibe['nome'];
    $_SESSION['logado'] = true;
    header('Location: cadastrar.php');
}


else
{
    print "<META HTTP-EQUIV=REFRESH CONTENT ='0;URL=index.html'>
        
        <script type='text/javascript'> alert('Login ou senha não encontrado, tente novamente !')</script>";
}

?>