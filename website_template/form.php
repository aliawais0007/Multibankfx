<?php 
	$dbConnection1 = new PDO('sqlite:/var/www/multibankfx/database/newdb.sqlite3',"","",array(
		PDO::ATTR_PERSISTENT => TRUE,
        PDO::ERRMODE_EXCEPTION => TRUE));
        if ((isset($_POST['email']) && isset($_POST['fullname']))) {
            //Get input values
            $username = $_POST['fullname'];
            $email = $_POST['email'];	
            echo json_encode($email);
            // get the admin by username and password
        }
?>