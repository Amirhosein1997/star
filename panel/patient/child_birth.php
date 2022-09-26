<?php
include_once '../function/f-pat.php';
if (isset($_POST['send'])){
    $info=$_POST['info'];
    insert_birth($info);
    header("location:dashboard.php?page=child-birth");
}
$birth_records=birth_records();


?>
<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;
  margin: 20px;">
<h5>صدور تولد</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">نام کامل</label>
                <input name="info[name]" type="text" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">نام بیمارستان</label>
                <input name="info[hospital]" type="text" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">نام ماما</label>
                <input name="info[nurse]" type="text" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">زمان</label>
                <input name="info[time]" type="time" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">تاریخ</label>
                <input name="info[date]" type="date" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">جنسیت</label>
                <select name="info[gender]" class="form-select">
                    <option value="مرد">__مرد</option>
                    <option value="زن">__زن</option>
                </select>
            </div>
        </div>
        <button name="send" type="submit" class="btn btn-primary">ثبت</button>
    </form>
</div>

<br>

<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;
  margin: 20px;">

    <div class="container mt-3">
        <h5>لیست متولدین</h5>
        <hr>
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>نام</th>
                <th>بیمارستان</th>
                <th>ماما</th>
                <th>ساعت</th>
                <th>تاریخ</th>
                <th>جنسیت</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($birth_records as $birth_record): ?>
            <tr>
                <td><?php echo $birth_record->name; ?></td>
                <td><?php echo $birth_record->hospital; ?></td>
                <td><?php echo $birth_record->nurse; ?></td>
                <td><?php echo $birth_record->time; ?></td>
                <td><?php echo $birth_record->date; ?></td>
                <td><?php echo $birth_record->gender; ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>