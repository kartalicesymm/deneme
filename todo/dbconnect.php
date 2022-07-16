<?php
error_reporting(1);
include 'db.php';
Class Dbconnect{
    public function __construct($dns,$port,$dbname ,$username , $password){
        try {
            $dbh = new PDO('mysql:host='.$dns.';port='.$port.';dbname='.$dbname ,$username , $password);
            echo "<script>console.log('bağlanti basarili..')</script>";
        }catch (PDOException $e) {
            echo $e->getMessage();
         }
    }
    public function todo(){
        $q=$dbh->query('select title, content from todo');
        $d=$q->fetchAll(PDO::FETCH_ASSOC);

    }
}
$db= new Dbconnect($dns,$port,$dbname ,$username , $password);
$db->todo();



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
