<?php //Conexão com banco de Dados
$servername= "Localhost";
$username="root";
$password="";
$db_name="crud";

$connect =  mysqli_connect($servername,$username,$password,$db_name);

if(mysqli_connect_error()){
    echo "Erro na coneção com banco de dados:".mysqli_connect_error();
}

?>
