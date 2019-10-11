<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="./img/kpicon.ico"/>
	<script src="https://kit.fontawesome.com/8737c6622b.js" crossorigin="anonymous"></script>

	<title>knifepunch records</title>


</head>
<body>
        <!-- DARK PRIMARY COLOR START -->
        <header>
					<div class="social">
						<a href="https://twitter.com/knifepunch"><img src="./img/twitter.png"></a>
	          <a href="https://www.instagram.com/knifepunchrecords/"><img src="./img/instagram.png"></a>
						<a href="https://bandcamp.com/knifepunch"><img src="./img/bandcamp.png"></a>
						<a href="./comingsoon.html"><img src="./img/soundcloud.png"></a>
						<a href="./comingsoon.html"><img src="./img/youtube.png"></a>
						<a href="./comingsoon.html"><img src="./img/spotify.png"></a>
						<a href="./comingsoon.html"><img src="./img/flickr.png"></a>
						<a href="./comingsoon.html"><img src="./img/tumblr.png"></a>
						<a href="./comingsoon.html"><img src="./img/twitch.png"></a>
						<a href="./comingsoon.html"><img src="./img/discord.png"></a>
					</div>
				</header>
        <!-- DARK PRIMARY COLOR END -->

        <!-- PRIMARY COLOR START -->
        <nav>

				<div class="left">
        	<a href="./index.html"><img src="./img/kpRecordsLogo.png" alt="Home" style="width:250px";></a>
				</div>

        <hr>

				<div class="search_box">
					<input class="search_txt" type="text" name="" placeholder="Type to search">
					<a class="search_button" href="#">
						<i class="fas fa-search"></i>
					</a>
				</div>

        <a href="./store.html">Store</a> |
        <a href="./releases.html">Releases</a> |
        <a href="./contact.php">Contact</a> |
        <a href="./about.html">About</a> |

        <hr>

        </nav>
        <!-- PRIMARY COLOR END -->

        <article>

					<h1>Contact!</h1>
					<p>Currently, our webhost doesn't allow PHP code to run, so this form is inactive until we can switch providers!</p>
					<form method="post" action="contact.php">

	<label>Name</label>
	<input name="name" placeholder="Type Here">

	<label>Email</label>
	<input name="email" type="email" placeholder="Type Here">

	<label>Message</label>
	<textarea name="message" placeholder="Type Here"></textarea>

	<input id="submit" name="submit" type="submit" value="Submit">

</form>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: WEBSITE';
    $to = 'knifepunchrecords@gmail.com';
    $subject = 'Contact Form';

		$body = "From: $name\n E-Mail: $email\n Message:\n $message";

?>




        </article>

<footer><br>©2019 Knifepunch Records<br></footer>
</body>
</html>
