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
				<h1 background="vinil.jpg">Audio Production Cent</h1>
			</header>
			<?php include "menu.php"; ?>
			<section>
				<article>
				<h1><a>Playlist</a></h1>
				</article>
				<div style="padding: 20px 100px;">
					<p><h1>G-Dynamic</h1></p>
					<p><img src="images/studio2.jpg" width="90%" height="100" alt="">
					
					<audio id="audio" controls>
						<source src="GDynamicDemo.mp3" type="audio/mpeg">
					</audio>
				</div>
				<div style="padding: 20px 100px;">
					<p><h1>G-Dynamic</h1></p>
					<p><img src="images/studio3.jpg" width="90%" height="90%" alt="">
					
					<audio id="audio" controls>
						<source src="GDynamicDemo.mp3" type="audio/mpeg">
					</audio>
				</div>	
			</section>
			<aside>
				<div class="image">
				<img src="images/vinil.png" width="300" height="300" alt="">
			</div>
			</aside>
			<div style="clear:both;"></div>
			<footer>Copyrigh&copy: Html 2016</footer>
		</div>
	</body>
</html>