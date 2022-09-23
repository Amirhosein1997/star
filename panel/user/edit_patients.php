<?php
include_once '../function/f-user.php';

$id=$_GET['id'];
$patient_record=get_pati_record($id);
if (isset($_POST['update'])){
$info=$_POST['info'];
update_pati_record($id,$info);
header("location:dashboard.php?page=patients-records");


}

?>




<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green;
  margin: 20px;
background-color: #0f6674;">

    <h5>افزودن بیمار</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">نام کامل</label>
                <input value="<?php echo $patient_record->full_name; ?>" name="info[name]" type="text" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">شماره ملی</label>
                <input value="<?php echo $patient_record->meli_code; ?>" name="info[meli]" type="number" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">سن</label>
                <input value="<?php echo $patient_record->age; ?>" name="info[age]" type="number" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">بخش ارجاع</label>
                <select name="info[section]" class="form-select">
                    <option <?php if ($patient_record->section=="زنان"){echo 'selected';} ?> value="زنان">__زنان</option>
                    <option <?php if ($patient_record->section=="جراحی مردان"){echo 'selected';} ?> value="جراحی مردان">__جراحی مردان</option>
                    <option <?php if ($patient_record->section=="اورژانس"){echo 'selected';} ?> value="اورژانس">__اورژانس</option>
                    <option <?php if ($patient_record->section=="اتاق عمل"){echo 'selected';} ?> value="اتاق عمل">__اتاق عمل</option>
                    <option <?php if ($patient_record->section=="زایشگاه"){echo 'selected';} ?> value="زایشگاه">__زایشگاه</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 mt-3 col-md-3">
                <label for="comment">علت مراجعه</label>
                <textarea  name="info[reason]" class="form-control" rows="5" id="comment" name="text"><?php echo $patient_record->problem; ?></textarea>
            </div>
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">وضعیت بیمار</label>
                <select name="info[status]" class="form-select">
                    <option <?php if ($patient_record->status=="نیاز به بستری"){echo 'selected';} ?> value="نیاز به بستری">__نیاز به بستری</option>
                    <option <?php if ($patient_record->status=="در وضعیت بستری"){echo 'selected';} ?> value="در وضعیت بستری">__در وضعیت بستری</option>
                    <option <?php if ($patient_record->status=="ترخیص"){echo 'selected';} ?> value="ترخیص">__ترخیص</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">جنسیت</label>
                <select name="info[gender]" class="form-select">
                    <option <?php if ($patient_record->gender=="مرد"){echo 'selected';} ?> value="مرد">__مرد</option>
                    <option <?php if ($patient_record->gender=="زن"){echo 'selected';} ?> value="زن">__زن</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">تاریخ خروج</label>
                <input  name="info[exit_date]" type="date" class="form-control" >
            </div>
        </div>
        <button name="update" type="submit" class="btn btn-primary">ویرایش</button>
        <a href="dashboard.php?page=patients-records" class="btn btn-success">بازگشت</a>
    </form>
</div>
