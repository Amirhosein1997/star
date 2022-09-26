<?php
include_once 'database_connect.php';


function insert_question($info){
    $question=$info['text'];
    $section=$info['section'];
    $pdo=data_base();
    $query=$pdo->prepare("insert into questions_list(question, section) VALUES ('$question','$section')");
    $query->execute();
}


function questions_records(){
    $pdo=data_base();
    $query=$pdo->prepare("select * from questions_list order by id desc ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;

}
function pat_question($sec){
    $pdo=data_base();
    $query=$pdo->prepare("select * from questions_list where section='$sec'");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}

function insert_pat_desc($order,$select,$description,$id){
    $imploded_select=implode(",",$select);
    $imploded_desc=implode(",",$description);
    $pdo=data_base();
    $query=$pdo->prepare("update patient_tbl set answers='$imploded_select',description='$imploded_desc',doctor_order='$order' where id='$id' ");
    $query->execute();


}

function insert_birth($info){
    $name=$info['name'];
    $hospital=$info['hospital'];
    $nurse=$info['nurse'];
    $time=$info['time'];
    $date=$info['date'];
    $gender=$info['gender'];
    $pdo=data_base();
    $query=$pdo->prepare("insert into birth_tbl (name, hospital, nurse, time, date, gender) VALUES ('$name','$hospital','$nurse','$time','$date','$gender')");
    $query->execute();
}
function birth_records(){
    $pdo=data_base();
    $query=$pdo->prepare("select * from birth_tbl order by id desc ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}