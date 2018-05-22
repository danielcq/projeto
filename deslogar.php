<?php

//starta a session, independente de onde esteja
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
session_destroy();

header('location:index.html?deslogado=true');


?>