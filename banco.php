<?php
$servidor = "localhost";
$usuario ="root";
$senha = "";
$dbname = "evento";


$conn1 = mysqli_connect($servidor,$usuario,$senha,$dbname)or die("Erro ao conectar");
mysqli_select_db($conn1,$dbname);

?>