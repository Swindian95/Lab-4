<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="lab1.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<?php include("config.php"); ?>
	<title>Lab 1 PHP</title>
</head>
<body>
	<header>
		<ul>
			<li><a class="<?php echo ($current_page == "index.php" || $current_page == "") ? "active" : NULL ?>" href="index.php">Home</a></li>
			<li><a class="<?php echo $current_page == "aboutus.php" ? "active" : NULL ?>" href="aboutus.php">About Us</a></li>
			<li><a class="<?php echo $current_page == "browsebooks.php" ? "active" : NULL ?>" href="browsebooks.php">Browse Books</a></li>
			<li><a class="<?php echo $current_page == "mybooks.php" ? "active" : NULL ?>" href="mybooks.php">My Books</a></li>
			<li><a class="<?php echo $current_page == "gallery.php" ? "active" : NULL ?>" href="gallery.php">Gallery</a></li>
			<li><a class="<?php echo $current_page == "contactus.php" ? "active" : NULL ?>" href="contactus.php">Contact Us</a></li>
		</ul>
	</header>



