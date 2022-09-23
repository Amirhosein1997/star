<?php
include_once '../function/f-pat.php';
include_once '../function/f-user.php';
$patient_records=get_patients_records();

?>

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
                <td>بخش</td>
                <th>وضعیت</th>
                <th>پرسش نامه</th>
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
                    <td> <a href="dashboard.php?page=pat-question&id=<?php echo $patient_record->id; ?>" class="btn btn-success">پرسش نامه</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
