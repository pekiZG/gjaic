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
				<form method="POST" action="">
					<label>Prva ocjena:<input name="a" type="text"<?php if(isset($_POST['a'])) echo "value='".$_POST['a']."'"; ?>/></label><br>
					<label>Druga ocjena:<input name="b" type="text"<?php if(isset($_POST['b'])) echo "value='".$_POST['b']."'"; ?>/></label><br>
					<input type="submit" value="Izracunaj" /><br>
				</form>
				<?php				
					$prosjek = (($_POST['a']) + ($_POST['b']))/2;
					print '<p>Ocjena I. kolokvija: ' . $_POST['a'] . '</p>';
					print '<p>Ocjena II. kolokvija: ' . $_POST['b'] . '</p>';
					print '<hr>';
					print 'Srednja ocjena iz predmeta: ' . $prosjek . '</p>';
					echo 'Konačna ocjena iz predmeta: ' . round($prosjek) . '</p>';
				?>				
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