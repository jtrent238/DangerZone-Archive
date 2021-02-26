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
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM " .$tablename ." WHERE isDeleted='false';";
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
								$ownerID = $row["ownerID"];
								$fType = $row["fileType"];
								$fDate = $row["fileUploadDate"];
								$fSize = $row["fileSize"];
								echo '<div class="w3-quarter">';
								echo '<div class="w3-card w3-green w3-margin" id="imageCard">';
								echo '<img src="uploads/' .$fName .'" class="adminImage">';
								echo '<div class="w3-container">';
								echo '<p><a href="uploads/'.$fName .'">' .$fName .'</a></p>';
								echo '<p>File ID: ' .$fID .'</br>';
								echo 'File Type: ' .$fType .'</br>';
								echo 'Upload Date: ' .$fDate .'</br>';
								echo 'File Size: ' .$fSize .' Bytes</p>';
								echo '<a href="javascript:manageFile(`delete`, `' .$fName .'`)" class="w3-btn w3-red w3-margin">Delete</a>';
								echo '</div>';
								echo '</div>';
								echo '</div>';
							}
							echo '</div>';
						} else {
							echo "";
						}

			?>

			<header class="w3-container w3-dark-grey w3-display-container">
			  <h2 class="w3-left"><a href="./mods/architect.html">Architect</a></h2>
			  <h2 class="w3-right">By: <a href="#">InvalidName</a>&nbsp;<a href="https://invalid2.github.io/"><i class="fa fa-globe" aria-hidden="true"></i></a></h2>
			</header>

			<div class="w3-container w3-grey">
				<div class="thumnailContainer">
					<img src="./assets/img/placeholder.png" class="modThumbnail"/>
				</div>
					
				<div class="descriptionContainer">
					<p>Description Goes Here!</p>
				</div>
				<div class="downloadButtonContainer w3-center">
					<a href="./mods/architect.html#Downloads" class="w3-button w3-blue">Downloads</button><a>
				</div>
				

			  </div>
			</div>

			<footer class="w3-container w3-dark-grey">
			  <div class="w3-container"> 
				<!-- Versions Tags -->
				<button class="w3-button">DZ 1.9</button>
				<button class="w3-button">DZ 2.1</button>
			  </div>
			</footer>

			</div>
		</div>
		<!-- Architect End -->
	</div>
	<!-- MODS CONTAINER END-->
		<footer>
			<?php include 'footer.php'; ?> <!-- Adds a footer -->
		</footer>
	</body>
</html>