<?php
$db = new PDO('sqlite:/var/www/multibankfx/database/newdb.sqlite3',"","",array(
    PDO::ATTR_PERSISTENT => TRUE,
    PDO::ERRMODE_EXCEPTION => TRUE));
if ($_POST) {

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone_display']) ? $_POST['phone_display'] : '';
    $contact_type = isset($_POST['account_type']) ? $_POST['account_type'] : '';
    $platform = isset($_POST['platform_version']) ? $_POST['platform_version'] : '';
    $company = isset($_POST['company']) ? $_POST['company'] : '';
    $platform_type =  isset($_POST['platform_type']) ? $_POST['platform_type'] : '';
    $leverage =  isset($_POST['leverage']) ? $_POST['leverage'] : '';
    $client_type =  isset($_POST['client_type']) ? $_POST['client_type'] : '';
    $lei_code =  isset($_POST['lei_code']) ? $_POST['lei_code'] : '';
    $has_tin =  isset($_POST['has_tin']) ? $_POST['has_tin'] : '';
    $tin_number =  isset($_POST['tin_number']) ? $_POST['tin_number'] : '';
    $name2 =  isset($_POST['name2']) ? $_POST['name2'] : '';
    $name2 =  isset($_POST['name2']) ? $_POST['name2'] : '';
    $status = 1;
    if (isset($_POST['footer_form'])) {

        //footer from
        $STH = $dbConnection->prepare("INSERT INTO myadmin_call_back (name,email,phone,status) VALUES ('$name', '$email','$phone','$status')");
        $result =$STH->execute();
        echo $result;
        echo "inerted data";
        //........
    }
    if (isset($_POST['partner_form'])) {
        //........
        //partner from

        $query = "INSERT INTO myadmin_partner (name,email,phone,status) VALUES ('$name', '$email','$phone','$status";
        $STH = $dbConnection->prepare($query);
        $result =$STH->execute();
        echo $result;
    }
    if (isset($_POST['account_type'])) {


        //contact us form
        $query = "INSERT INTO myadmin_contact_us (status,fullname,email,phone,contacttype) VALUES ('$status','$name', '$email','$phone','$contact_type')";
        $STH = $dbConnection->prepare($query);
        $result =$STH->execute();
        echo $result;
    }
    }
    if (isset($_POST['platform_version'])) {
        //demo from
        $db->exec("INSERT INTO myadmin_demo_account (name,mobile,email,platform) VALUES ('$name', '$email','$phone','$platform')");
        echo "inerted data";
    }

    if (isset($_POST['company'])) {

        //
        $target_file = "";
        $target_dir = "uploads/";

        $image = $_FILES['filehi']['name'];
        $target_file = $target_dir . basename($_FILES["filehi"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $imagepath = "";

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["filehi"]["tmp_name"], $target_file)) {
                // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $imagepath = basename($_FILES["filehi"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        $db->exec("INSERTINTO myadmin_live_account (company, platform_version, platform_type, leverage, client_type, lei_code, has_tin, tin_number, name, name2, email, phone_display, image)
       VALUES ( '$company', '$platform', '$platform_type', '$leverage', '$client_type', '$lei_code', '$has_tin', '$tin_number', '$name', '$name2', '$email', '$phone', '$imagepath');");
    }
}
