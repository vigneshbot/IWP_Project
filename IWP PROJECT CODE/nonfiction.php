<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Non-Fiction</title>
		<link rel = "stylesheet" type = "text/css" href = "design.css" />
		<script src="jsfile.js"></script>
	</head>
	<body>
			<img id="bgstore" src="http://localhost:8080\IWP PROJECT\IMAGES\bookstore.jpg" alt="Bookstore">
		<div id="topmain">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<img id="bgstorelogo" src="http://localhost:8080\IWP PROJECT\IMAGES\iwpbookstore.png" alt="obslogo">
			<ul>
				<li><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
				<li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a></li>
				<li class="dropdown">
				<a class="dropbtn" onClick><i class="fa fa-fw fa-search"></i>Search</a>
				<div class="dropdown-content">
					<a href="searchbn.php">By Book Name</a>
					<a href="searchan.php">By Author Name</a>
					<a href="searchy.php">By Year</a>
				</div>
				</li>
				<li><?php  if (isset($_SESSION['username'])) : ?>
    	<p style="position:relative;top:-5px;color:#ffca85;font-family:Lucida Calligraphy;">Welcome <strong><u><?php echo $_SESSION['username']; ?></strong></u></p></li>
		<li><a href="index.php?logout='1'" style="color: #ffca85;"><i class="fa fa-sign-out"></i>Logout</a>
    <?php endif ?></li>
				<li id="time"><h1 id="demo"></h1></li>
			</ul>
		</div>
		<div class="row">
			<div class="column">
				<div class="vertical-menu">
					<a href="#" class="active">Categories</a>
					<a href="fiction.php"><i class="fa fa-book" aria-hidden="true"></i>Fiction</a>
					<a href="nonfiction.php"><i class="fa fa-book" aria-hidden="true"></i>Non-Fiction</a>
					<a href="selfhelp.php"><i class="fa fa-book" aria-hidden="true"></i>Self-Help</a>
					<a href="Education.php"><i class="fa fa-book" aria-hidden="true"></i>Education</a>
				</div>
			</div>
			<div class="column">
				<a href="nf1.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\nonfiction\nf1.jpg" alt="A Brief History of Time" height="300">
				</a>
				<p class="bookname">A Brief History of Time<p>
			</div>
			<div class="column">
				<a href="nf2.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\nonfiction\nf2.jpg" alt="The Audacity of Hope" height="300" width="200">
				</a>
				<p class="bookname">The Audacity of Hope</p>
			</div>
			<div class="column">
				<a href="nf3.php">
				<img class="books" src="http://localhost:8080\IWP PROJECT\IMAGES\books\nonfiction\nf3.jpg" alt="Wings of Fire" height="300" width="200">
				</a>
				<p class="bookname">Wings of Fire</p>
		</div>
	</body>
</html>