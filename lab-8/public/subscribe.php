<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Subscribe | COMP1002 HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<!-- Page-level header -->
		<?php
			include('includes/header.php');
		?>
		<!-- Page-level main content -->
		<main>
			<section>
				<h3>Thank You for Subscribing</h3>
<?php
// Capture the value of the emailAddress INPUT from the index.php page by defining a PHP variable called '$emailAddress' and setting the value to the email address as entered by the user in the FORM on index.php
	$emailAddress = $_GET['emailAddress'];
// Use the PHP function, echo() to create an HTML paragraph element that confirms the user's email address -->
	echo('<p>Your email address, <span id="email-address">'.$emailAddress.'</span> has been added to our list of subscribers.</p>');
?>
			</section>
		</main>
		<!-- Page-level footer -->
		<?php
			include('includes/footer.php');
		?>
	</body>
</html>
