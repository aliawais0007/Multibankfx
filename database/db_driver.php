<?php

 $dbConnection = new PDO('sqlite:/var/www/multibankfx/database/multibankfx.sqlite3',"","",array(
    PDO::ATTR_PERSISTENT => TRUE,
    PDO::ERRMODE_EXCEPTION => TRUE));

function db_select($dbConnection, $query){
    return $dbConnection->query($query);
}

function db_insert($dbConnection, $table,$valuesArray){

    $columns=array_keys($valuesArray);
    $query_text='insert into '.$table.'('.join(',',$columns).') values(:'.join(',:',$columns).')';

//    $valuesArray = array_values($valuesArray);

    $STH = $dbConnection->prepare($query_text);
    $result =$STH->execute(array_values($valuesArray));

//    print_r($STH->errorInfo());
    return $result;

}
function db_update($dbConnection, $table,$id,$valuesArray){

    $columns=array_keys($valuesArray);

    $columns_set_test=[];
    foreach($columns as $column){

        $columns_set_test[]=$column.'=:'.$column;
    }

    $query_text='update  '.$table.' set '.join(',',$columns_set_test).' where id='.$id;

//    $valuesArray = array_values($valuesArray);

    $STH = $dbConnection->prepare($query_text);
    $result =$STH->execute(array_values($valuesArray));

//    print_r($STH->errorInfo());
    return $result;

}



function translate($text,$page_name=''){
    echo $text;
    // global $dbConnection;

    // $link_parts=explode('/',$_SERVER['PHP_SELF']);
    // $last_url_part = array_pop($link_parts);
    // $page_name= $page_name==''? $last_url_part:$page_name;


    // $original_text_key=str_replace(['"',"'"],['',''],$text);
    // $original_text_key=strtolower($original_text_key);
    // $exist=db_select($dbConnection,"select * from language where original_text_key='".$original_text_key."'");
    // $row = $exist->fetch();
   
    // if(isset($row['id'])){
    //     echo $row['en'];
      
    // }else{
    //     db_insert($dbConnection,'language',[
    //         'page_name'=>$page_name,
    //         'original_text_key'=>$original_text_key,
    //         'en'=>$text,
    //         'ar'=>'',

    //     ]);
    //     echo $text;
    // }
}

function get_news(){
	$dbConnection1 = new PDO('sqlite:/var/www/multibankfx/database/db.sqlite3',"","",array(
		PDO::ATTR_PERSISTENT => TRUE,
        PDO::ERRMODE_EXCEPTION => TRUE));
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 7;
        $start_from = ($page-1) * $limit;
        $query = "SELECT * FROM myadmin_company_news LIMIT $start_from, $limit";
        $stmt = $dbConnection1->query($query);
        $company_news = [];
		while ($row = $stmt->fetch()) {
            $object = new stdClass();
            $object->id=$row['id'];
            $object->title=$row['title'];
            $object->post_image=$row['post_image'];
            $object->featured_image=$row['featured_image'];
            $object->date=$row['date'];
            $object->body=$row['body'];
            $object->status=$row['status'];
            $object->classtype=$row['classtype'];
            array_push($company_news, $object);
         
        }
        $dbConnection1=null;
        
        return $company_news;     
}

function get_milestones(){
	$dbConnection1 = new PDO('sqlite:/var/www/multibankfx/database/db.sqlite3',"","",array(
		PDO::ATTR_PERSISTENT => TRUE,
        PDO::ERRMODE_EXCEPTION => TRUE));
        // $page = isset($_GET['page']) ? $_GET['page'] : 1;
        // $limit = 9;
        // $start_from = ($page-1) * $limit;
        $query = "SELECT * FROM myadmin_milestones";
        $stmt = $dbConnection1->query($query);
        $milestones = [];
		while ($row = $stmt->fetch()) {
            $object = new stdClass();
            $object->id=$row['id'];
            $object->title=$row['title'];
            $object->post_image=$row['post_image'];
            $object->featured_image=$row['featured_image'];
            $object->body=$row['body'];
            $object->status=$row['status'];
            $object->date=$row['date'];
            array_push($milestones, $object);
         
        }

        
        return $milestones;     
}

function filtered_news(){
	$dbConnection1 = new PDO('sqlite:/var/www/multibankfx/database/db.sqlite3',"","",array(
		PDO::ATTR_PERSISTENT => TRUE,
        PDO::ERRMODE_EXCEPTION => TRUE));
        $id = 0;
        if(isset($_GET['id'])){
            $id =(int)$_GET['id'];
        } 
        // $limit = 9;
        // $start_from = ($page-1) * $limit;
        $query = "SELECT * FROM myadmin_company_news WHERE id=$id";
        
      
        $stmt = $dbConnection1->query($query);
        $a = $stmt->fetch();
		// while ($row = $stmt->fetch()) {
            $object = new stdClass();
            $object->id=$a['id'];
            $object->title=$a['title'];
            $object->post_image=$a['post_image'];
            $object->featured_image=$a['featured_image'];
            $object->body=$a['body'];
            $object->status=$a['status'];
            $object->date=$a['date'];
            print_r($a);
        // }
       
       
        // return $news;     
}

function filtered_milestone(){
	$dbConnection1 = new PDO('sqlite:/var/www/multibankfx/database/db.sqlite3',"","",array(
		PDO::ATTR_PERSISTENT => TRUE,
        PDO::ERRMODE_EXCEPTION => TRUE));
        $query = "SELECT * FROM myadmin_milestones WHERE id ";
        $stmt = $dbConnection1->query($query);
        $milestones = [];
		while ($row = $stmt->fetch()) {
            $object = new stdClass();
            $object->id=$row['id'];
            $object->title=$row['title'];
            $object->post_image=$row['post_image'];
            $object->featured_image=$row['featured_image'];
            $object->body=$row['body'];
            $object->status=$row['status'];
            $object->date=$row['date'];
            array_push($milestones, $object);
         
        }

        
        return $milestones;     
}
