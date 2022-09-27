<?php
include_once '../function/f-pay.php';
$status=$_POST['status'];
$track_id=$_POST['track_id'];
$id=$_POST['id'];
$order_id=$_POST['order_id'];
$amount=$_POST['amount'];
$card_no=$_POST['card_no'];
$hashed_card_no=$_POST['hashed_card_no'];
$date=$_POST['date'];
if ($status==10){
    $res=insert_into_pay_list($status,$track_id,$id,$order_id,$amount,$card_no,$hashed_card_no,$date);
    $status=$res->status;
}




 switch ($status){
    case '1':
        echo
        '<div class="alert alert-success">
            پرداخت انجام نشده است
         </div>';
    break;
    case '2':
        echo
        '<div class="alert alert-success">
            پرداخت ناموفق بوده است
         </div>';
        break;
    case '3':
        echo
        '<div class="alert alert-success">
            خطا رخ داده است
         </div>';
        break;
    case '4':
        echo
        '<div class="alert alert-success">
            بلوکه شده
         </div>';
        break;
    case '5':
        echo
        '<div class="alert alert-success">
            برگشت به پرداخت کننده
         </div>';
        break;
    case '6':
        echo
        '<div class="alert alert-success">
            برگشت خورده سیستمی
         </div>';
        break;
    case '7':
        echo
        '<div class="alert alert-success">
            انصراف از پرداخت
         </div>';
        break;
    case '8':
        echo
        '<div class="alert alert-success">
            به درگاه پرداخت منتقل شد
         </div>';
        break;
    case '10':
        echo
        '<div class="alert alert-success">
            در انتظار تایید پرداخت
         </div>';
        break;
    case '100':
        echo
        '<div class="alert alert-success">
            پرداخت تایید شده است
         </div>';
        break;
    case '101':
        echo
        '<div class="alert alert-success">
            پرداخت قبلا تایید شده است
         </div>';
        break;
    case '200':
        echo
        '<div class="alert alert-success">
            به دریافت کننده واریز شد
         </div>';
        break;
}
?>
<a href="dashboard.php?page=payment-setting" class="btn btn-success">تایید</a>




