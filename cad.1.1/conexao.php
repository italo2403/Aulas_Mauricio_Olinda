<?php
$servidor ="localhost"; //Localhost é a minha máquina local
$usuario = "root"; //root é usuário padrão
$senha = ""; //senha do banco de dados- definir na instalação do worbench ou deixar vazio
$dbname="divida"; // nome do banco de dados 

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
 die("Houve um erro: ".mysqli_connect_error());
}


?>