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
$query=$pdo->prepare("insert into payment_tbl (name, meli_code, phone, email, amount, description, order_id) VALUES ('$name','$meli','$phone','$email','$amount','$description','$order_id')");
$query->execute();



}