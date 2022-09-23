<?php
include_once '../function/f-user.php';
$id=$_GET['id'];
$emp_record=get_emp_record($id);
if (isset($_POST['update'])){
    $info=$_POST['info'];
    update_emp_record($id,$info);
    header("location:dashboard.php?page=employes-records");


}



?>
<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green;
  margin: 20px;
background-color: #0f6674;">

    <h5> ویرایش اطلاعات پرسنل</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">نام و نام خانوادگی</label>
                <input value="<?php echo $emp_record->full_name; ?>" name="info[name]" type="text" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">شماره ملی</label>
                <input value="<?php echo $emp_record->meli_code; ?>" name="info[meli]" type="number" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">مجوز دسترسی</label>
                <select name="info[perm]" class="form-select">
                    <option <?php if ($emp_record->permition==1){echo "selected";} ?> value="1">__1</option>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">بخش فعالیت</label>
                <select name="info[section]" class="form-select">
                    <option <?php if ($emp_record->section=="زنان"){echo "selected";} ?> value="زنان">__زنان</option>
                    <option <?php if ($emp_record->section=="جراحی مردان"){echo "selected";} ?> value="جراحی مردان">__جراحی مردان</option>
                    <option <?php if ($emp_record->section=="اورژانس"){echo "selected";} ?> value="اورژانس">__اورژانس</option>
                    <option <?php if ($emp_record->section=="اتاق عمل"){echo "selected";} ?> value="اتاق عمل">__اتاق عمل</option>
                    <option <?php if ($emp_record->section=="زایشگاه"){echo "selected";} ?> value="زایشگاه">__زایشگاه</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">وضعیت کارمند</label>
                <select name="info[status]" class="form-select">
                    <option <?php if ($emp_record->status=="on"){echo "selected";} ?> value="on">__فعال</option>
                    <option <?php if ($emp_record->status=="off"){echo "selected";} ?> value="off">__غیره فعال</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">سمت در بیمارستان</label>
                <select name="info[roll]" class="form-select">
                    <option <?php if ($emp_record->position=="پرستار"){echo "selected";} ?> value="پرستار">__پرستار</option>
                    <option <?php if ($emp_record->position=="ماما"){echo "selected";} ?> value="ماما">__ماما</option>
                    <option <?php if ($emp_record->position=="پزشک"){echo "selected";} ?> value="پزشک">__پزشک</option>
                    <option <?php if ($emp_record->position=="بهیار"){echo "selected";} ?> value="بهیار">__بهیار</option>
                    <option <?php if ($emp_record->position=="خدمه"){echo "selected";} ?> value="خدمه">__خدمه</option>
                </select>
            </div>
        </div>
        <button name="update" type="submit" class="btn btn-primary">ویرایش</button>
        <a href="dashboard.php?page=employes-records" class="btn btn-success">بازگشت</a>
    </form>
</div>
