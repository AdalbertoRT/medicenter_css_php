<?php
	if(isset($_POST["nome"]))	{
		$nome = $_POST["nome"];
		$pulaNome = $nome."\n";
		file_put_contents("teste.txt", $pulaNome, FILE_APPEND);

		$msg = "O nome é: ".$nome;

		header("Location: index2.php");

	}

?>
<head>
	<script type="text/javascript">
		function sucesso(){
			alert("Nome inserido com sucesso!");
		}
		
	</script>
</head>
<body style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
	<form method="POST" style="background-color: #aeaeae; height: 100px; width: 300px; line-height: 100px; text-align: center; border: 5px solid #000; border-radius: 10px; box-shadow: 5px 5px 5px #5e5e5e">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" autofocus="true">
		<input type="submit" value="Enviar" onclick="sucesso()">
	</form>
</body>
