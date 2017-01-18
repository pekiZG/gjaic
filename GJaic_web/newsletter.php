<!DOCTYPE html>

<html>
	<head>
		<title>Created by G. Jaic</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="container">
			<div class="image">
				<img src="images/vinil.png" width="70" height="70" alt="" align="left">
			</div>
			<header>
				<h1 background="vinil.jpg">Audio Production Center</h1>
			</header>
			<?php include "menu.php"; ?>
			<section>
				<article>
				<h1><a>Newsletter</a></h1>
				</article>
				<form action="" method="post" id="mojaforma">
					<table>
						<tr>
							<td>Ime</td>
							<td><input type="text" name="usr_name"  id="usr_name"></td>
						</tr>
						<tr>
							<td>Prezime</td>
							<td><input type="text" name="lastname"  id="lastname"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email_mojaforma"  id="email_mojaforma"></td>
						</tr>					
						<tr>
							<td><input type="submit" name="submit_btn" value="Posalji" id="send"></td>
						</tr>
					</table>
				</form>
				</br>
				<?php
				if (isset($_POST['submit_btn']))
				{
					$error = false;
					
					if(empty($_POST["usr_name"]))
					{
						echo "Upisite ime!";
						$error = true;
					}
					if(empty($_POST["lastname"]))
					{
						echo "Upisite prezime!";
						$error = true;
					}
					if(!$error)
					{
						$name = $_POST['usr_name'];
						$lastname = $_POST['lastname'];
						$mail = $_POST['email_mojaforma'];
						
						
						$subject = "Postovani " . $name . " " . $lastname . ", korisnik<br>";
						$subject .= " prijavljeni ste na naš newsletter s e-mail adresom:" . $mail;
						
						
						echo $subject;
					}
					else
					{
						echo "Krivi unos. Molimo provjerite podatke!";
					}
					
				}	
				?>
				</br>	
			</section>
			<aside>
				<div id="side-top">
					<h1>PARTNER GROUPS</h1>
					<div id="latest-post-list">
						<div class="latest-post"><a href = "http://www.akaipro.com/">AKAI Home Page</a></div>
						<div class="latest-post"><a href = "https://www.native-instruments.com//">Native Instruments Home Page</a></div>
						<div class="latest-post"><a href = "https://www.image-line.com/">Image Line Home Page</a></div>
						<div class="latest-post"><a href = "https://www.steinberg.net/en/home.html">Steinberg Home Page</a></div>
						<div class="latest-post"><a href = "https://www.ableton.com/">Ableton Home Page</a></div>
						<div class="latest-post"><a href = "https://serato.com/">Serato Home Page</a></div>
						<div class="image">
							<img src="images/record.jpg" width="100%" height="100%" alt="" align="center">
						</div>
					</div>
				</div>
			</aside>
			<div style="clear:both;"></div>
			<footer>Copyrigh&copy: Html 2016</footer>
		</div>
	</body>
</html>