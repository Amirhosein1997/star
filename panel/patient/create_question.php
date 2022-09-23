<?php
include_once '../function/f-pat.php';
if (isset($_POST['send'])){
    $info=$_POST['info'];
    insert_question($info);
    header("location:dashboard.php?page=create-question");
}
$questions_records=questions_records();

?>


<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;
  margin: 20px;">
    <h5>ایجاد سوال</h5>
    <hr>
    <form method="post" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label for="comment">متن سوال</label>
            <textarea class="form-control" rows="5" id="comment" name="info[text]"></textarea>
        </div>
        <div class="mb-3">
            <label  class="form-label">بخش مربوطه</label>
            <select name="info[section]" class="form-select">
                <option value="زنان">__زنان</option>
                <option value="جراحی مردان">__جراحی مردان</option>
                <option value="اورژانس">__اورژانس</option>
                <option value="اتاق عمل">__اتاق عمل</option>
                <option value="زایشگاه">__زایشگاه</option>
            </select>
        </div>

        <button name="send" type="submit" class="btn btn-primary">ثبت</button>
    </form>


</div>
<br>
<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;
  margin: 20px;">

    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>متن سوال</th>
            <th>بخش مربوطه</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($questions_records as $key=>$questions_record): ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $questions_record->question; ?></td>
            <td><?php echo $questions_record->section; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</div>
