<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>mail</title>
</head>
<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "chadblevy@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . " <a href='Home.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
;
?>
	<style>
		body {
			background-image: url("images/desktopBGsmall.png");
		}
	</style>
<body>
</body>
</html>