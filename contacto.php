<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];

		$to = "josesbran@gmail.com";
		$subject 	= "Nuevo Mensaje de " . $name;
		$headers 	= "From: Website <info@website.com>\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$email_body = "";
		$email_body .= "Nombre: " . $name . "<br>";
		$email_body .= "Email: " . $email . "<br>";
		$email_body .= "Mensaje: " . $message;

		//Send the email
		mail($to, $subject, $message, $headers);

		header("Location: contacto.php?status=gracias");
		exit;
	}
?>

<?php include 'header.php'; ?>
<title>Contacto</title>
</head>

<body id="contacto">
<?php include 'top.php'; ?>
<div class="wrapper">

	<section id="main">

		<div class="sidebar">
		</div>

		<div class="content">
			<h1>Contacto</h1>
			<?php if (isset($_GET["status"]) && $_GET["status"] == "gracias") { ?>
				<p class="info success">Gracias por su mensaje.</p>
			<?php } ?>

			<form id="contacto-form" name="contacto-form" action="contacto.php" method="POST">
				<label for="name"><span>Nombre: </span><input type="text" name="name" id="name" /></label>
				<label for="email"><span>Email: </span><input type="email" name="email" id="email" /></label>
				<label for="message"><span>Mensaje: </span><textarea name="message" id="message" rows="10" cols="50"></textarea></label>
				<label for="submit"><span><input type="submit" value="Enviar" /></span></label>
			</form>
		</div>

	</section>
</div>
<?php include 'footer.php'; ?>
