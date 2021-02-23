<!DOCTYPE html
<html>
	<head>
		<?php include_once('inject_head.php'); ?>
	</head>
	<body>
		<?php include_once 'debug.php'; ?> <!-- Adds debug functions -->
		<?php include_once 'config.php'; ?> <!-- Adds config -->
		<?php include_once 'menu.php'; ?> <!-- Adds a top navbar -->
		
		<div class="w3-container">
			<div class="w3-container w3-dark-grey w3-padding-16 searchContainer">
				<script async src="https://cse.google.com/cse.js?cx=4b363fe1825e25442"></script>
				<div class="gcse-search"></div>
			</div>
		</div>
		
		<footer>
			<?php include 'footer.php'; ?> <!-- Adds a footer -->
		</footer>
	</body>
</html>