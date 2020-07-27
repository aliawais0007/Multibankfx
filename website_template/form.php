  
<?php

//start session
$err="";
$obj = new stdClass();
//Check if inputs are empty before submission
if ((isset($_POST['fullname']) && isset($_POST['email']))) {
    //Get input values
    $username = $_POST['fullname'];
    $email = $_POST['email'];	
    // get the admin by username and password
    $obj->name=$username;
    $obj->email=$email;
    echo json_encode($obj); 
}
else {
    $err = "Some Issue";
    echo json_encode($err); 
}

   
?>