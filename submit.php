<?php include_once 'debug.php'; ?> <!-- Adds debug functions -->
<?php include_once 'config.php'; ?> <!-- Adds config -->
<?php
	debug_to_console("Mod Name: " .$modName);
	debug_to_console("Mod Description: " .$modDesc);

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO Mods (ownerID, modName, modDesc)
	VALUES ('1', '" .$modName ."', '" .$modDesc ."')";

	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();


?>