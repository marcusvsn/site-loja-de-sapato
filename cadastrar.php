<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php
	$link = mysqli_connect("127.0.0.1","root","") or die ("Não foi possível conectar");

	mysqli_select_db($link,"zinu") or die ("Não foi possível selecionar o banco de dados");

	$cnome = $_POST["nome"];
	$cnascimento = $_POST["nascimento"];
	$csexo = $_POST["sexo"];
	$cemail = $_POST["email"];
	$ctelcelular = $_POST["telcelular"];
	$ctelresidencial = $_POST["telresidencial"];
	$crua = $_POST["rua"];
	$cnumero = $_POST["numero"];
	$ccomplemento = $_POST["complemento"];
	$cbairro = $_POST["bairro"];
	$ccidade = $_POST["cidade"];
	$cuf = $_POST["uf"];
	$ctexto = $_POST["texto"];


	$consulta = "INSERT INTO cadastro VALUES
	('$cnome', '$cnascimento', '$csexo', '$cemail', '$ctelcelular', '$ctelresidencial', '$crua', '$cnumero', '$ccomplemento', '$cbairro', '$ccidade', '$cuf', '$ctexto')";

	$resultado = mysqli_query($link,$consulta) or die ("Falha na execução da consulta");
	echo "Dados adicionados com sucesso. Faremos contato em até 2 dias úteis.";

	echo mysql_errno($link) ;

	echo '<br><a href="index.html">Voltar</a><br/>';

	?>
</body>
</html>