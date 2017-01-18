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
					<form method="post" action="mail.php" id="mojaforma">
						<table>
							<tr>
								<td>Name: </td>
								<td><p><input type="text" name="Name" size="20"></p></td>
							</tr>
							<tr>
								<td>Email: </td>
								<td><p><input type="text" name="Email" size="20"></p></td>
							</tr>
							<tr>
								<td><p><input type="submit" value="Submit" name="Submit"></p></td>
							</tr>
						</table>
					</form>	
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