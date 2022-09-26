<?php
include_once '../function/f-med.php';
if (isset($_POST['send'])){
 $info=$_POST['info'];
 insert_med($info);
 header("location:dashboard.php?page=create-med");
}
$meds_records=meds();
?>




<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px blue, 10px 10px red, 15px 15px green;
  margin: 20px;
background-color: #0f6674;">

    <h5>افزودن دارو</h5>
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">نام دارو</label>
                <input name="info[name]" type="text" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">تاریخ تولید</label>
                <input name="info[date_p]" type="date" class="form-control" >
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">تاریخ انقضا</label>
                <input name="info[date_e]" type="date" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="mb-3 mt-3 col-md-6">
                <label for="comment">جزییات دارو</label>
                <textarea name="info[desc]" class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <div class="mb-3 mt-3 col-md-6">
                <label  class="form-label">بخش مورد استفاده</label>
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
  margin: 20px;
background-color: #0f6674;">
    <h5>لیست دارو ها</h5>
    <br>
    <div class="container mt-3">

        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>نام دارو</th>
                <th>جزییات دارو</th>
                <th>بخش مورد استفاده</th>
                <th>تاریخ تولید</th>
                <th>تاریخ انقضا</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($meds_records as $meds_record): ?>
            <tr>
                <td><?php echo $meds_record->name;?></td>
                <td><?php echo $meds_record->description;?></td>
                <td><?php echo $meds_record->section;?></td>
                <td><?php echo $meds_record->date_p;?></td>
                <td><?php echo $meds_record->date_e;?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>


</div>