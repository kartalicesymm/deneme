<?php
error_reporting(1);
include 'db.php';

function dbconnect(){

    try {
            $dbh = new PDO('mysql:host='. DNS .';port='.PORT.';dbname='.TEST ,USERNAME , PASSWORD);
            echo "<script>console.log('bağlanti basarili..')</script>";
        }catch (PDOException $e) {
            echo $e->getMessage();
        }

    $result =$dbh->query('select * from todo ');
    $result=$result->fetchAll(PDO::FETCH_ASSOC);
    print_r($result) ;
    $dbh=null;
    return $result;
}   
// echo '<pre>';
dbconnect();






// echo "<pre>";
// foreach($d as $key=>$value){
//     echo '$key: '. $key.' $value: '. $value. '<br>';
// }
// array_push()
// $a=array(
//     'baslik'=> $d['title'],
//     'icerik'=> $d['title']
// );

// echo  "<script>console.log('". print_r($a) ."')</script>";
