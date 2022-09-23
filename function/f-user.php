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
function insert_patient($info){
    $name=$info['name'];
    $meli=$info['meli'];
    $age=$info['age'];
    $section=$info['section'];
    $gender=$info['gender'];
    $date=date("Y/m/d");
    $problem=$info['reason'];
    $status=$info['status'];
    $pdo=data_base();
    $query=$pdo->prepare("insert into patient_tbl(full_name, meli_code, age, gender,section, entering_date, exiting_date, problem, status) VALUES('$name','$meli','$age','$gender','$section','$date','null','$problem','$status') ");
    $query->execute();

}

function get_patients_records(){
    $pdo=data_base();
    $query=$pdo->prepare("select * from patient_tbl order by id desc ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;


}

function get_pati_record($id){
    $pdo=data_base();
    $query=$pdo->prepare("select * from patient_tbl where id='$id'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;
}

function update_pati_record($id,$info){
    $name=$info['name'];
    $meli=$info['meli'];
    $age=$info['age'];
    $gender=$info['gender'];
    $section=$info['section'];
    $exit_date=$info['exit_date'];
    $problem=$info['reason'];
    $status=$info['status'];
    $pdo=data_base();
    $query=$pdo->prepare("update patient_tbl set full_name='$name',meli_code='$meli',age='$age',gender='$gender',section='$section',exiting_date='$exit_date',problem='$problem',status='$status' where id='$id'");
    $query->execute();

}