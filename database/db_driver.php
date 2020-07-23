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
    global $dbConnection;

    $link_parts=explode('/',$_SERVER['PHP_SELF']);
    $last_url_part = array_pop($link_parts);
    $page_name= $page_name==''? $last_url_part:$page_name;


    $original_text_key=str_replace(['"',"'"],['',''],$text);
    $original_text_key=strtolower($original_text_key);
    $exist=db_select($dbConnection,"select * from language where original_text_key='".$original_text_key."'");
    $row = $exist->fetch();
   
    if(isset($row['id'])){
        echo $row['en'];
      
    }else{
        db_insert($dbConnection,'language',[
            'page_name'=>$page_name,
            'original_text_key'=>$original_text_key,
            'en'=>$text,
            'ar'=>'',

        ]);
        echo $text;
    }
}

function get_news($dbConnection){
    $db = $dbConnection;
    return $db;
    exit();
    $stmt = $db -> prepare("SELECT * from company_news");
    $stmt -> execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($res as $row){
        extract($row);
        echo $title." | ".$status."<br>";
    }
            
   
        

}
