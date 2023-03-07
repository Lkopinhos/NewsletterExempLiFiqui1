<!DOCTYPE html>
<html>

<head>
	<title>ExempLiFiqui</title>
	<link rel="stylesheet" href="Assets/css/style.css">
	<script src="Assets/js/script.js"></script>
	<link rel="shortcut icon" href="images/Logo.png" type="image/png">

</head>

<body>
	<img src="images/LogoIf.png" alt="logo-if" class="logo-if">
	<div class="newsletter">
		<img src="images/Logo.png" alt="Logo-exemplifiqui" class="logo-exemplifiqui">
		<h1>ExempLiFiqui</h1>
		<h2>Assine a nossa Newsletter!</h2>
		<form action="#" method="post">
			<input type="email" name="email" placeholder="Seu E-mail principal" required />
			<button type="submit">Assinar</button>
		</form>
	</div>
</body>

</html>

<?php
ini_set("SMTP", "localhost");
ini_set("smtp_port", "25");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = $_POST['email'];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "emails";


	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Falha na conexão com o banco de dados: " . $conn->connect_error);
	}


	$sql = "INSERT INTO emails VALUES ('$email')";


	if ($conn->query($sql) === TRUE) {
		echo '<script> alert(`O e-mail ', $email, ' foi cadastrado com sucesso na newsletter!`); </script>';
	} else {
		echo 'Erro ao cadastrar o e-mail na newsletter: ' . $conn->error;
	}

	$conn->close();
}
?>