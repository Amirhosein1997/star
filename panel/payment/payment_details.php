<?php
include_once '../function/f-pay.php';

$order_id=$_GET['order_id'];
$id=get_pays_id($order_id);
$details=get_pay_details($id,$order_id);
$status=$details->status;
switch ($status){
    case '1':
        $stat='پرداخت انجام نشده است';
        break;
    case '2':
        $stat='پرداخت ناموفق بوده است';
        break;
    case '3':
        $stat='خطا رخ داده است';
        break;
    case '4':
        $stat='بلوکه شده';
        break;
    case '5':
        $stat='برگشت به پرداخت کننده';
        break;
    case '6':
        $stat='برگشت خورده سیستمی';
        break;
    case '7':
        $stat='انصراف از پرداخت';
        break;
    case '8':
        $stat='به درگاه پرداخت منتقل شد';
        break;
    case '10':
        $stat='در انتظار تایید پرداخت';
        break;
    case '100':
        $stat='پرداخت تایید شده است';
        break;
    case '101':
        $stat='پرداخت قبلا تایید شده است';
        break;
    case '200':
        $stat='به دریافت کننده واریز شد';
        break;
}

?>




<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green;
  margin: 20px;">
    <form >
        <h5>جزییات پرداخت</h5>
        <br>
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label class="form-label">نام پرداخت کننده</label>
                <input value="<?php echo $details->payer->name;?>" type="text" class="form-control" readonly>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label class="form-label">شماره کارت</label>
                <input value="<?php echo $details->payment->card_no;?>" type="text" class="form-control" readonly>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label class="form-label">ایمیل</label>
                <input value="<?php echo $details->payer->mail;?>" type="text" class="form-control" readonly>
            </div>
        </div>
        <div class="row">
        <div class="mb-3 mt-3 col-md-4">
            <label class="form-label">وضعیت</label>
            <input value="<?php echo $stat; ?>" type="text" class="form-control" readonly>
        </div>
            <div class="mb-3 mt-3 col-md-4">
                <label class="form-label">کد رهگیری</label>
                <input value="<?php echo $details->track_id; ?>" type="text" class="form-control" readonly>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label class="form-label">ایدی پرداخت</label>
                <input value="<?php echo $details->id; ?>" type="text" class="form-control" readonly>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label class="form-label">کد سفارش</label>
                <input value="<?php echo $details->order_id; ?>" type="text" class="form-control" readonly>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label class="form-label">مبلغ</label>
                <input value="<?php echo $details->amount; ?>" type="text" class="form-control" readonly>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label class="form-label">توضیحات</label>
                <input value="<?php echo $details->payer->desc; ?>" type="text" class="form-control" readonly>
            </div>
        </div>

        <a href="dashboard.php?page=payment-setting" class="btn btn-success">بازگشت</a>
    </form>
</div>