<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "teste";
$conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

$codigo=$_POST['codigo'];
$nome=$_POST['nome'];
$resultado=mysqli_query($conecta,"INSERT INTO cliente (codigo, nome) VALUES ('$codigo', '$nome')");
mysqli_close($conecta);
echo "<center>CADASTRO EFETUADO COM SUCESSO!</center>";
?>