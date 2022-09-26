<?php
include_once 'database_connect.php';

function insert_med($info){
$name=$info['name'];
$date_p=$info['date_p'];
$date_e=$info['date_e'];
$description=$info['desc'];
$section=$info['section'];
$pdo=data_base();
$query=$pdo->prepare("insert into med_tbl(name, date_p, date_e, description, section) VALUES ('$name','$date_p','$date_e','$description','$section')");
$query->execute();
}
function meds(){
    $pdo=data_base();
    $query=$pdo->prepare("select * from med_tbl order by date_e");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}