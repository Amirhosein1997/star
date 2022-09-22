<?php
include_once '../function/f-user.php';
?>
<?php
if (isset($_POST['send'])){
$info=$_POST['info'];
insert_employe($info);
header("location:dashboard.php?page=employes-records");
}
$employes_records=get_employes_records();
?>

<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green;
  margin: 20px;
background-color: #0f6674;">

    <h5>افزودن پرسنل</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">نام و نام خانوادگی</label>
                <input name="info[name]" type="text" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">شماره ملی</label>
                <input name="info[meli]" type="number" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">مجوز دسترسی</label>
                <select name="info[perm]" class="form-select">
                    <option value="1">__1</option>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">بخش فعالیت</label>
                <select name="info[section]" class="form-select">
                    <option value="زنان">__زنان</option>
                    <option value="جراحی مردان">__جراحی مردان</option>
                    <option value="اورژانس">__اورژانس</option>
                    <option value="اتاق عمل">__اتاق عمل</option>
                    <option value="زایشگاه">__زایشگاه</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">وضعیت کارمند</label>
                <select name="info[status]" class="form-select">
                    <option value="on">__فعال</option>
                    <option value="off">__غیره فعال</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">سمت در بیمارستان</label>
                <select name="info[roll]" class="form-select">
                    <option value="پرستار">__پرستار</option>
                    <option value="ماما">__ماما</option>
                    <option value="پزشک">__پزشک</option>
                    <option value="بهیار">__بهیار</option>
                    <option value="خدمه">__خدمه</option>
                </select>
            </div>
        </div>
        <button name="send" type="submit" class="btn btn-primary">ثبت</button>
    </form>
</div>
<br>

<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green;
  margin: 20px;">
    <h5>لیست کارکنان</h5>
    <div class="container mt-3">
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>نام کامل</th>
                <th>کد ملی</th>
                <th>مجوز</th>
                <th>بخش فعالیت</th>
                <th>سمت</th>
                <th>تاریخ</th>
                <th>وضعیت</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($employes_records as $employes_record): ?>
            <tr>
                <td><?php echo $employes_record->full_name;?></td>
                <td><?php echo $employes_record->meli_code;?></td>
                <td><?php echo $employes_record->permition;?></td>
                <td><?php echo $employes_record->section;?></td>
                <td><?php echo $employes_record->position;?></td>
                <td><?php echo $employes_record->date;?></td>
                <td><?php echo $employes_record->status;?></td>
                <td> <a href="dashboard.php?page=edit-employe&id=<?php echo $employes_record->id;?>" class="btn btn-success">ویرایش</a></td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>

</div>

