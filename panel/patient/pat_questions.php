<?php
include_once '../function/f-pat.php';
include_once '../function/f-user.php';
$id=$_GET['id'];
$pat_record=get_pati_record($id);
$pat_question=pat_question($pat_record->section);
if (isset($_POST['send'])){
$order=$_POST['order'];
$select=$_POST['select'];
$description=$_POST['desc'];
insert_pat_desc($order,$select,$description,$id);
header("location:dashboard.php?page=pat-question&id={$id}");
}

if ($pat_record->answers !==" "){
$exploded_answers=explode(",",$pat_record->answers);
$answers_counts=count($exploded_answers);
}
if ($pat_record->description !==" "){
    $exploded_desc=explode(",",$pat_record->description);
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
                <div class="form-check">
                    <input <?php if ($answers_counts > $key){if ($exploded_answers[$key]=='yes'){echo ' checked';}} ?> type="radio" class="form-check-input" id="radio1" name="select[<?php echo $key; ?>]" value="yes">
                    <label class="form-check-label" for="radio1">بله</label>
                </div>
                <div class="form-check">
                    <input <?php if ($answers_counts > $key){if ($exploded_answers[$key]=='no'){echo ' checked';}} ?> type="radio" class="form-check-input" id="radio2" name="select[<?php echo $key; ?>]" value="no">
                    <label class="form-check-label" for="radio2">خیر</label>
                </div>
            </td>
            <td>
                <textarea class="form-control" rows="2" id="comment" name="desc[]">
                    <?php
                    if ($answers_counts > $key){
                        echo $exploded_desc[$key];
                    }
                    ?>
                </textarea>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
    </table>
        <div class="mb-3 mt-3 col-md-4">
        <label for="comment">دستور دکتر:</label>
        <textarea class="form-control" rows="5" id="comment" name="order">
            <?php
            if ($pat_record->doctor_order){
                echo $pat_record->doctor_order;
            }
            ?>
        </textarea>
        </div>
        <button name="send" type="submit" class="btn btn-success">ثبت</button>
    </form>
</div>


