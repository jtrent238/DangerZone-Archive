<!DOCTYPE html
<html>
	<head>
		<?php include_once('inject_head.php'); ?>
	</head>
	<body>
		<?php include_once 'debug.php'; ?> <!-- Adds debug functions -->
		<?php include_once 'config.php'; ?> <!-- Adds config -->
		<?php include_once 'menu.php'; ?> <!-- Adds a top navbar -->
		
<!-- MODS CONTAINER START-->
	<div class="w3-container">
		<!-- Architect Start -->
		<div class="w3-container w3-padding-16">
			<div class="w3-card-4">

			<?php

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				$tableMods = 'Mods';
				$tableUsers = 'Users';

				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				// ***WARNING**** WILL PRINT DATABASE PASSWORD TO CONSOLE!!!
				debug_to_console("Server Name: " .$servername);
				debug_to_console("User Name: " .$username);
				debug_to_console("Password: " .$password);
				debug_to_console("Database Name: " .$dbname);
				debug_to_console("Table Name: " .$tablename);

				//$sql = "USE" .$dbname;
				$sql = "SELECT * FROM Mods, Users";
						$result = $conn->query($sql);

						//$num_rows = mysql_num_rows($sql);
						if ($conn->query($sql) === TRUE) {
							if ($debug == true) {
								debug_to_console($sql);
								//debug_to_console("New record created successfully");
							}

						} else {
							if ($debug == true) {
								debug_to_console("Error: " . $sql . "<br>" . $conn->error);
							}
						}

						if ($result->num_rows > 0) {
							// output data of each row
							echo '<div class="w3-container">';
							while ($row = $result->fetch_assoc()) {
								$modID = $row["modID"];
								$modName = $row["modName"];
								$ownerID = $row["ownerID"];
								$userName = $row["userName"];
								$fDate = $row["fileUploadDate"];
								$fSize = $row["fileSize"];
								//echo '<div class="w3-quarter">';
								//echo '<div class="w3-card w3-green w3-margin" id="imageCard">';
								//echo '<img src="uploads/' .$fName .'" class="adminImage">';
								//echo '<div class="w3-container">';
								//echo '<p><a href="uploads/'.$fName .'">' .$fName .'</a></p>';
								//echo '<p>File ID: ' .$fID .'</br>';
								//echo 'File Type: ' .$fType .'</br>';
								//echo 'Upload Date: ' .$fDate .'</br>';
								//echo 'File Size: ' .$fSize .' Bytes</p>';
								//echo '<a href="javascript:manageFile(`delete`, `' .$fName .'`)" class="w3-btn w3-red w3-margin">Delete</a>';
								//echo '</div>';
								//echo '</div>';
								//echo '</div>';
								echo '<header class="w3-container w3-dark-grey w3-display-container">';
								echo '<h2 class="w3-left"><a href="#">' .$modName .'</a></h2>';
			  					echo '<h2 class="w3-right">By: <a href="#">' .$userName .'</a></h2>';
								echo '</header>';
								echo '<div class="w3-container w3-grey">';
								echo '<div class="thumnailContainer">';
								echo '<img src="./assets/img/placeholder.png" class="modThumbnail"/>';
								echo '</div>';
								echo '<div class="descriptionContainer">';
								echo '<p>Description Goes Here!</p>';
								echo '</div>';
								echo '<div class="downloadButtonContainer w3-center">';
								echo '<a href="./mods/architect.html#Downloads" class="w3-button w3-blue">Downloads</button><a>';
								echo '</div>';
								echo '</div>';
								echo '</div>';
								echo '</div>';
								echo '<footer class="w3-container w3-dark-grey">';
				  				echo '<div class="w3-container">';
								echo '<!-- Versions Tags -->';
								echo '<button class="w3-button">DZ 1.9</button>';
								echo '<button class="w3-button">DZ 2.1</button>';
				  				echo '</div>';
								echo '</footer>';
								echo '</div>';
								echo '</div>';
								echo '<!-- Architect End -->';
								echo '</div>';
								echo '<!-- MODS CONTAINER END-->';
							}

						} else {
							echo "";
						}

			?>
		<footer>
			<?php include 'footer.php'; ?> <!-- Adds a footer -->
		</footer>
	</body>
</html>