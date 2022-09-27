<?php
include_once 'database_connect.php';

function random_code($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}
function pay_the_price($info){
$name=$info['name'];
$meli=$info['meli'];
$phone=$info['phone'];
$email=$info['email'];
$amount=$info['money'];
$description=$info['desc'];
$order_id=random_code(6);
$pdo=data_base();

    $params = array(
        'order_id' => $order_id,
        'amount' => $amount,
        'name' => $name,
        'phone' => $phone,
        'mail' => $email,
        'desc' => $description,
        'callback' => 'http://localhost/star/panel/dashboard.php?page=pay-callback-page',
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.idpay.ir/v1.1/payment');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-API-KEY: 6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
        'X-SANDBOX: 1'
    ));

    $result = curl_exec($ch);
    curl_close($ch);
    $decoded_res=json_decode($result);
    $unic_id=$decoded_res->id;
    $link=$decoded_res->link;
    $query=$pdo->prepare("insert into payment_tbl (name, meli_code, phone, email, amount, description, order_id,uniqe_id,link) VALUES ('$name','$meli','$phone','$email','$amount','$description','$order_id','$unic_id','$link')");
    $query->execute();


    return $decoded_res;


}
function get_order_id($id){
    $pdo=data_base();
    $query=$pdo->prepare("select * from payment_tbl where uniqe_id='$id'");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    return $res;

}

function insert_into_pay_list($status,$track_id,$id,$amount,$card_no,$hashed_card_no,$date){
    $rec=get_order_id($id);
    $order_id=$rec->order_id;
    $pdo=data_base();
    $query=$pdo->prepare("insert into payment_list_tbl(status, track_id, id, order_id, amount, card_no, hashed_card_no, date) VALUES ('$status','$track_id','$id','$order_id','$amount','$card_no','$hashed_card_no','$date')");
    $query->execute();

    $params = array(
        'id' => $id,
        'order_id' => $order_id,
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.idpay.ir/v1.1/payment/verify');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-API-KEY: 6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
        'X-SANDBOX: 1',
    ));

    $result = curl_exec($ch);
    curl_close($ch);
    $decoded_res=json_decode($result);
   // var_dump($result);
     return $decoded_res;

}
function get_pays_records(){
    $pdo=data_base();
    $query=$pdo->prepare("select * from payment_tbl order by id desc ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}

function get_pays_id($order_id){
    $pdo=data_base();
    $query=$pdo->prepare("select * from payment_tbl where order_id='$order_id' ");
    $query->execute();
    $res=$query->fetch(PDO::FETCH_OBJ);
    $id=$res->uniqe_id;
    return $id;
}

function get_pay_details($id,$order_id){

    $params = array(
        'id' => $id,
        'order_id' => $order_id,
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.idpay.ir/v1.1/payment/inquiry');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'X-API-KEY: 6a7f99eb-7c20-4412-a972-6dfb7cd253a4',
        'X-SANDBOX: 1',
    ));

    $result = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

 //   var_dump($httpcode);
 //   var_dump($result);
    $decoded_res=json_decode($result);
    return $decoded_res;

}

function pagination($page,$res_per_page){
    $pdo=data_base();
    $start = ($page-1) * $res_per_page;
    $query=$pdo->prepare("select * from payment_tbl limit $start,$res_per_page ");
    $query->execute();
    $res=$query->fetchAll(PDO::FETCH_OBJ);
    return $res;
}