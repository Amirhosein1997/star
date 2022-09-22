<?php
include_once 'database_connect.php';

function insert_employe($info){
$name=$info['name'];
$meli=$info['meli'];
$password=sha1($meli);
$position=$info['roll'];
$section=$info['section'];
$status=$info['status'];
$date=date("Y/m/d");
$perm=$info['perm'];
    $pdo=data_base();
    $query=$pdo->prepare("insert into employe_tbl (full_name, meli_code, password, position, section, status, date, permition) VALUES ('$name','$meli','$password','$position','$section','$status','$date','$perm')");
    $query->execute();

}
function get_employes_records(){
    $pdo=data_base();
    $query=$pdo->prepare("select * from employe_tbl order by id desc ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}

function get_emp_record($id){
    $pdo=data_base();
    $query=$pdo->prepare("select * from employe_tbl where id='$id'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}
function update_emp_record($id,$info){
    $name=$info['name'];
    $meli=$info['meli'];
    $password=sha1($meli);
    $position=$info['roll'];
    $section=$info['section'];
    $status=$info['status'];
    $date=date("Y/m/d");
    $perm=$info['perm'];
    $pdo=data_base();
    $query=$pdo->prepare("update employe_tbl set full_name='$name',meli_code='$meli',password='$password',position='$position',section='$section',status='$status',date='$date',permition='$perm' where id='$id'");
    $query->execute();

}