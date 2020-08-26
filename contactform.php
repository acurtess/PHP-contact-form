<?php

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "ac1033783@student.francistuttle.edu";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;
 	mail($mailTo, $subject, $txt, $headers);
	$success = "yes"; 	

	}



	

?>


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">

<title>Ashley Curtess's Portfolio</title>
<meta name="description" content="Francis Tuttle Web Development Student Portfolio. Watch me grow into a future web professional.">
<meta name="author" content="Ashley Curtess">

</head>

<body>

<?php if (isset($success) && $success) { ?>

<h1>Thank You</h1>
<p>Your message has been sent.</p>

<?php } else { ?>
<h1>Oops!</h1>
<p>Sorry, there was a problem sending your message</p>
<?php } ?>

</body>
</html>





