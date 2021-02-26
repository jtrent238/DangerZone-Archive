<!DOCTYPE html>
<html>
	<head>
  		<title>Add Records in Database</title>
		<?php include_once('inject_head.php'); ?>
	</head>
	<body>
		<?php include_once 'debug.php'; ?> <!-- Adds debug functions -->
		<?php include_once 'config.php'; ?> <!-- Adds config -->
		<?php include_once 'menu.php'; ?> <!-- Adds a top navbar -->
<div class="w3-container w3-yellow w3-padding-32">		

	<h3>Submit a mod</h3>
		<h4>****THIS IS FOR TESTING PURPOSES****</h4>

	<form action="submit.php" method="post" enctype="multipart/form-data">
	  Mod Name : <input type="text" name="modName" placeholder="Enter Mod Name" Required>
	  <br/>
	  Mod Description : <input type="text" name="modDesc" placeholder="Enter Mod Description" Required>
	  <br/>
	  <input type="submit" name="submit" value="Submit">
		
	</form>
			</div>
</body>
</html>
<footer>
			<?php include 'footer.php'; ?> <!-- Adds a footer -->
		</footer>
	</body>
</html>