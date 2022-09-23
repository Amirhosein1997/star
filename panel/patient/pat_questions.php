<?php
include_once '../function/f-pat.php';
include_once '../function/f-user.php';
$id=$_GET['id'];
$pat_record=get_pati_record($id);
$pat_question=pat_question($pat_record->section);
if (isset($_POST['send'])){

}
?>



<div style="border: 1px solid;
  padding: 10px;
  box-shadow: 5px 5px 8px blue, 10px 10px 8px red, 15px 15px 8px green;
  margin: 20px;">


    <h5>شرح حال بیمار</h5>
    <hr>
    <form method="post" enctype="multipart/form-data">
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th>ردیف</th>
            <th>سوال</th>
            <th>بخش</th>
            <th>پاسخ</th>
            <th>توضیحات</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($pat_question as $key=>$val): ?>
        <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $val->question; ?></td>
            <td><?php echo $val->section; ?></td>
            <td>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="mySwitch" name="select[]" value="yes" checked>
                </div>
            </td>
            <td>
                <textarea class="form-control" rows="2" id="comment" name="desc[]"></textarea>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
        <div class="mb-3 mt-3 col-md-4">
        <label for="comment">دستور دکتر:</label>
        <textarea class="form-control" rows="5" id="comment" name="order"></textarea>
        </div>
        <button name="send" type="button" class="btn btn-success">ثبت</button>
    </form>
</div>


