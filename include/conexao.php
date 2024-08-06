<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "banco";
$port = 3307;

$con = mysqli_connect($hostname, $username, $password, $database, $port);

if(mysqli_connect_errno())
{
    echo("Erro conexão: %s". mysqli_connect_error());
    exit();
}
else
{
    echo("Conexão bem Sucedida");
}
?>