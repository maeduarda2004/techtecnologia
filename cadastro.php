<?php

$Local= $_POST['Local'];
$Maquina= $_POST['Maquina'];
$Etiqueta = $_POST ['Etiqueta'];
$IP = $_POST ['Ip'];
$strcon = mysqli_connect('localhost','root','','cadastro') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO equipamento VALUES ";
$sql .= "('$Local', '$Maquina', '$Etiqueta', '$IP')"; 
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cadastrado com sucesso!"; 



?>