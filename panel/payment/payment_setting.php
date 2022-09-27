<?php
include_once '../function/f-pay.php';
if (isset($_POST['send'])){
    $info=$_POST['info'];
    $res=pay_the_price($info);
    header("location:{$res->link}");
}
$pay_records=get_pays_records();
$res_per_page=5;
$number_of_pages=ceil(count($pay_records)/$res_per_page);
if (!isset($_GET['pagination'])){
    $_GET['pagination']=1;
}

$paginated_records=pagination($_GET['pagination'],$res_per_page);




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
                <label  class="form-label">نام و نام خانوادگی </label>
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
<br>
<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;
  margin: 20px;
background-color: #67543a;">

    <div class="container mt-3">
        <h5>لیست پرداخت ها</h5>
        <br>
        <ul class="pagination justify-content-center" style="margin:20px 0">
            <li class="page-item <?php if($_GET['pagination']==1){echo  'disabled';} ?>"><a class="page-link" href="dashboard.php?page=payment-setting&pagination=<?php echo $_GET['pagination']-1;?>">قبلی</a></li>

            <?php for ($i=0;$i<$number_of_pages;$i++): ?>
            <li class="page-item <?php if ($_GET['pagination']==$i+1){echo ' active';} ?>"><a class="page-link" href="dashboard.php?page=payment-setting&pagination=<?php echo $i+1; ?>"><?php echo $i+1; ?></a></li>
            <?php endfor;?>

            <li class="page-item <?php if($_GET['pagination']==$number_of_pages){echo  'disabled';} ?>"><a class="page-link" href="dashboard.php?page=payment-setting&pagination=<?php echo $_GET['pagination']+1;?>">بعدی</a></li>
        </ul>
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>پرداخت کننده</th>
                <th>کد ملی</th>
                <th>شماره تماس</th>
                <th>ایمیل</th>
                <th>مبلغ</th>
                <th>توضیحات</th>
                <th>جزییات پرداخت</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($paginated_records as $key=>$val): ?>
            <tr>
                <td><?php echo $key+(($_GET['pagination']-1)*$res_per_page)+1; ?></td>
                <td><?php echo $val->name; ?></td>
                <td><?php echo $val->meli_code; ?></td>
                <td><?php echo $val->phone; ?></td>
                <td><?php echo $val->email; ?></td>
                <td><?php echo $val->amount; ?></td>
                <td><?php echo $val->description; ?></td>
                <td><a href="dashboard.php?page=payment-details&order_id=<?php echo $val->order_id; ?>" class="btn btn-success">مشاهده جزییات</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

