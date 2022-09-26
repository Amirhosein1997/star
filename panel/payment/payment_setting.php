<?php
include_once '../function/f-pay.php';
if (isset($_POST['send'])){
    $info=$_POST['info'];
    pay_the_price($info);

}

?>


<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;
  margin: 20px;
background-color: #7d5bb7;">

    <h5>پرداخت دستی</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">نام و نام خانوادگی بیمار</label>
                <input name="info[name]" type="text" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">شماره ملی</label>
                <input name="info[meli]" type="number" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">شماره تماس</label>
                <input name="info[phone]" type="number" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">ایمیل</label>
                <input name="info[email]" type="email" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">مبلغ پرداختی</label>
                <input name="info[money]" type="number" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label for="comment">توضیحات</label>
                <textarea class="form-control" rows="5" id="comment" name="info[desc]"></textarea>
                </select>
            </div>
        </div>
        <button name="send" type="submit" class="btn btn-primary">انتقال به صفحه پرداختی</button>
    </form>


</div>
