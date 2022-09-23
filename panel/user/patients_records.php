<?php
include_once '../function/f-user.php';
if (isset($_POST['send'])){
    $info=$_POST['info'];
    insert_patient($info);
    header("location:dashboard.php?page=patients-records");
}
    $patient_records=get_patients_records();
?>
<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green;
  margin: 20px;
background-color: #0f6674;">

    <h5>افزودن بیمار</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="mb-3 mt-3 col-md-4">
            <label  class="form-label">نام کامل</label>
            <input name="info[name]" type="text" class="form-control" >
        </div>
        <div class="mb-3 mt-3 col-md-4">
            <label  class="form-label">شماره ملی</label>
            <input name="info[meli]" type="number" class="form-control" >
        </div>
        <div class="mb-3 mt-3 col-md-4">
            <label  class="form-label">سن</label>
            <input name="info[age]" type="number" class="form-control" >
        </div>
        </div>
        <div class="row">
            <div class="mb-3 mt-3 col-md-3">
                <label for="comment">علت مراجعه</label>
                <textarea name="info[reason]" class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">وضعیت بیمار</label>
                <select name="info[status]" class="form-select">
                    <option value="نیاز به بستری">__نیاز به بستری</option>
                    <option value="در وضعیت بستری">__در وضعیت بستری</option>
                    <option value="ترخیص">__ترخیص</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">جنسیت</label>
                <select name="info[gender]" class="form-select">
                    <option value="مرد">__مرد</option>
                    <option value="زن">__زن</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col-md-3">
                <label  class="form-label">بخش ارجاع</label>
                <select name="info[section]" class="form-select">
                    <option value="زنان">__زنان</option>
                    <option value="جراحی مردان">__جراحی مردان</option>
                    <option value="اورژانس">__اورژانس</option>
                    <option value="اتاق عمل">__اتاق عمل</option>
                    <option value="زایشگاه">__زایشگاه</option>
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
    <h5>لیست بیماران</h5>
    <div class="container mt-3">
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>نام کامل</th>
                <th>کد ملی</th>
                <th>سن</th>
                <th>جنسیت</th>
                <th>تاریخ ورود</th>
                <th>تاریخ خروج</th>
                <th>مشکل</th>
                <th>بخش</th>
                <th>وضعیت</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($patient_records as $patient_record):?>
            <tr>
                <td><?php echo $patient_record->full_name; ?></td>
                <td><?php echo $patient_record->meli_code; ?></td>
                <td><?php echo $patient_record->age; ?></td>
                <td><?php echo $patient_record->gender; ?></td>
                <td><?php echo $patient_record->entering_date; ?></td>
                <td><?php echo $patient_record->exiting_date; ?></td>
                <td><?php echo $patient_record->problem; ?></td>
                <td><?php echo $patient_record->section; ?></td>
                <td><?php echo $patient_record->status; ?></td>
                <td> <a href="dashboard.php?page=edit-patients&id=<?php echo $patient_record->id; ?>" class="btn btn-success">ویرایش</a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>

