<?php
include_once '../function/f-user.php';
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
            <input type="text" class="form-control" >
        </div>
        <div class="mb-3 mt-3 col-md-4">
            <label  class="form-label">شماره ملی</label>
            <input type="number" class="form-control" >
        </div>
        <div class="mb-3 mt-3 col-md-4">
            <label  class="form-label">سن</label>
            <input type="number" class="form-control" >
        </div>
        </div>
        <div class="row">
            <div class="mb-3 mt-3 col-md-4">
                <label for="comment">علت مراجعه</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">وضعیت بیمار</label>
                <select class="form-select">
                    <option>__نیاز به بستری</option>
                    <option>__در وضعیت بستری</option>
                    <option>__ترخیص</option>
                </select>
            </div>
            <div class="mb-3 mt-3 col-md-4">
                <label  class="form-label">جنسیت</label>
                <select class="form-select">
                    <option>__مرد</option>
                    <option>__زن</option>

                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">ثبت</button>
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
                <th>وضعیت</th>
                <th>ویرایش</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
                <td>#</td>
            </tr>

            </tbody>
        </table>
    </div>

</div>

