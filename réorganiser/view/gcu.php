<?php
session_start();

?>
<html>
	<head>
		<title>10Domotique</title>
		<link rel="stylesheet" href="view/style.css" />
	</head>
	<body>
		<div >
		<div>
		<header>
    		<?php include "template/Header.php" ?>
		</header>
		</div>
		<div class="gcu">
		<p class="textgcu">
			<?php 
			$lines = file('./gcu.txt'); // display file line by line 
			foreach($lines as $line_num => $line) { 
				echo htmlspecialchars($line)."<br />\n"; 
			} ?>
			
			
		</p>
		</div>
		<div>
			<p>
				</br>
				</br>
				</br>
			</p>
		<footer>
			<?php include "template/Footer.php" ?>
		</footer>
		</div>	
		</div>	
	</body>
<html>
