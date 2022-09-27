<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="topmenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="#">نمایش سایت</a>
                <a class="btn btn-danger" href="#">خروج</a>

            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="admin-container">
        <div class="row">
            <div class="col-md-2">
                <div class="admin-menu">
                    <ul>
                        <div class="userwel">
                            <img src="../img/uuser.png">
                            <p>
                                WELCOME
                                <br>
                                to
                                <br>
                                سامانه مدیریتی ستاره
                            </p>
                        </div>

                        <li class="dash">
                            <a href="dashboard.php?page=homepage">
                                <svg class="bi bi-gear-wide-connected" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10.932 2.724c-.243-.97-1.621-.97-1.864 0l-.072.286a.96.96 0 01-1.622.434l-.205-.211c-.695-.72-1.889-.03-1.614.932l.08.283a.96.96 0 01-1.187 1.188l-.283-.081c-.962-.275-1.651.919-.932 1.614l.211.205a.96.96 0 01-.434 1.622l-.286.072c-.97.243-.97 1.621 0 1.864l.286.072a.96.96 0 01.434 1.622l-.211.205c-.72.695-.03 1.889.932 1.614l.283-.08a.96.96 0 011.188 1.187l-.081.283c-.275.962.919 1.651 1.614.932l.205-.211a.96.96 0 011.622.434l.072.286c.243.97 1.621.97 1.864 0l.072-.286a.96.96 0 011.622-.434l.205.211c.695.72 1.889.03 1.614-.932l-.08-.283a.96.96 0 011.187-1.188l.283.081c.962.275 1.651-.919.932-1.614l-.211-.205a.96.96 0 01.434-1.622l.286-.072c.97-.243.97-1.621 0-1.864l-.286-.072a.96.96 0 01-.434-1.622l.211-.205c.72-.695.03-1.889-.932-1.614l-.283.08a.96.96 0 01-1.188-1.187l.081-.283c.275-.962-.919-1.651-1.614-.932l-.205.211a.96.96 0 01-1.622-.434l-.072-.286zM10 15a5 5 0 100-10 5 5 0 000 10z"
                                          clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                          d="M9.375 10L6.6 6.3l.8-.6 2.85 3.8H15v1h-4.75L7.4 14.3l-.8-.6L9.375 10z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                پیشخوان
                            </a>
                        </li>


                        <li class="sec1">
                            <a href="javascript:;">
                                <svg class="bi bi-book-half-fill" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.214 3.072c1.599-.32 3.702-.363 5.14 1.074a.5.5 0 01.146.354v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 012 15.5v-11a.5.5 0 01.276-.447L2.5 4.5l-.224-.447.002-.001.004-.002.013-.006a5.116 5.116 0 01.22-.103 12.958 12.958 0 012.7-.869zM3 4.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V4.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 003 4.82z"
                                          clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                          d="M14.786 3.072c-1.598-.32-3.702-.363-5.14 1.074A.5.5 0 009.5 4.5v11a.5.5 0 00.854.354c.844-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0018 15.5v-11a.5.5 0 00-.276-.447L17.5 4.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                مدیریت حساب کاربری
                                <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-sec1">
                            <li><a href="dashboard.php?page=patients-records">بخش بیماران</a></li>
                            <li><a href="dashboard.php?page=employes-records">بخش کارکنان</a></li>
                        </ul>

                        <li class="sec2">
                            <a href="javascript:;">
                                <svg class="bi bi-book-half-fill" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.214 3.072c1.599-.32 3.702-.363 5.14 1.074a.5.5 0 01.146.354v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 012 15.5v-11a.5.5 0 01.276-.447L2.5 4.5l-.224-.447.002-.001.004-.002.013-.006a5.116 5.116 0 01.22-.103 12.958 12.958 0 012.7-.869zM3 4.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V4.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 003 4.82z"
                                          clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                          d="M14.786 3.072c-1.598-.32-3.702-.363-5.14 1.074A.5.5 0 009.5 4.5v11a.5.5 0 00.854.354c.844-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0018 15.5v-11a.5.5 0 00-.276-.447L17.5 4.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                مدیریت امور بیمار
                                <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-sec2">
                            <li><a href="dashboard.php?page=create-question">ایجاد پرسش نامه</a></li>
                            <li><a href="dashboard.php?page=patients-desc">بخش شرح حال بیمار</a></li>
                            <li><a href="dashboard.php?page=child-birth">بخش صدور گواهی تولد</a></li>
                        </ul>

                        <li class="sec3">
                            <a href="javascript:;">
                                <svg class="bi bi-book-half-fill" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.214 3.072c1.599-.32 3.702-.363 5.14 1.074a.5.5 0 01.146.354v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 012 15.5v-11a.5.5 0 01.276-.447L2.5 4.5l-.224-.447.002-.001.004-.002.013-.006a5.116 5.116 0 01.22-.103 12.958 12.958 0 012.7-.869zM3 4.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V4.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 003 4.82z"
                                          clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                          d="M14.786 3.072c-1.598-.32-3.702-.363-5.14 1.074A.5.5 0 009.5 4.5v11a.5.5 0 00.854.354c.844-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0018 15.5v-11a.5.5 0 00-.276-.447L17.5 4.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                مدیریت امور دارو
                                <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-sec3">
                            <li><a href="dashboard.php?page=create-med">بخش دارو</a></li>

                        </ul>

                        <li class="sec4">
                            <a href="javascript:;">
                                <svg class="bi bi-book-half-fill" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.214 3.072c1.599-.32 3.702-.363 5.14 1.074a.5.5 0 01.146.354v11a.5.5 0 01-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 012 15.5v-11a.5.5 0 01.276-.447L2.5 4.5l-.224-.447.002-.001.004-.002.013-.006a5.116 5.116 0 01.22-.103 12.958 12.958 0 012.7-.869zM3 4.82v9.908c.846-.343 1.944-.672 3.074-.788 1.143-.118 2.387-.023 3.426.56V4.718c-1.063-.929-2.631-.956-4.09-.664A11.958 11.958 0 003 4.82z"
                                          clip-rule="evenodd"></path>
                                    <path fill-rule="evenodd"
                                          d="M14.786 3.072c-1.598-.32-3.702-.363-5.14 1.074A.5.5 0 009.5 4.5v11a.5.5 0 00.854.354c.844-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0018 15.5v-11a.5.5 0 00-.276-.447L17.5 4.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 00-.799-.34 12.96 12.96 0 00-2.073-.609z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                مدیریت حسابداری
                                <span style="float: left;">
                                <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 20 20"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M3.646 6.646a.5.5 0 01.708 0L10 12.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z"
                                      clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            </a>
                        </li>
                        <ul class="sub-sec4">
                            <li><a href="dashboard.php?page=payment-setting">پرداخت دستی</a></li>

                        </ul>

                    </ul>
                </div>
            </div>

        <div class="col-md-10">
            <div class="content-panel">
                <div class="container-fluid">

                    <?php
                    if (isset($_GET['page'])){
                        switch ($_GET['page']){
                            case 'homepage':
                                echo "<img src='../img/HIM.jpg' style='width: 100%;height: auto;'>";
                            break;
                            case 'patients-records':
                                include_once 'user/patients_records.php';
                            break;
                            case 'employes-records':
                                include_once 'user/employes_records.php';
                            break;
                            case 'edit-employe':
                                include_once 'user/edit_employes.php';
                            break;
                            case 'edit-patients':
                                include_once 'user/edit_patients.php';
                            break;
                            case 'patients-desc':
                                include_once 'patient/patients_description.php';
                            break;
                            case 'pat-question':
                                include_once 'patient/pat_questions.php';
                            break;
                            case 'create-question':
                                include_once 'patient/create_question.php';
                            break;
                            case 'child-birth':
                                include_once 'patient/child_birth.php';
                            break;
                            case 'create-med':
                                include_once 'medicine/create_med.php';
                            break;
                            case 'payment-setting':
                                include_once 'payment/payment_setting.php';
                            break;
                            case 'pay-callback-page':
                                include_once 'payment/pay_callback_page.php';
                            break;
                            case 'payment-details':
                                include_once 'payment/payment_details.php';
                            break;
                        }
                    }
                    ?>


				</div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>

<!-- (B) THE JAVASCRIPT -->
<script>
    function printpart () {
        var printwin = window.open("");
        printwin.document.write(document.getElementById("toprint").innerHTML);
        printwin.stop();
        printwin.print();
        printwin.close();
    }
</script>
</body>
</html>