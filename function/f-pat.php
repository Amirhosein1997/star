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