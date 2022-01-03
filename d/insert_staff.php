<?php
include_once "database/teachers.php";

$inser_staff = new Teachers;

if(isset($_POST['staffname'])){
    $staff_name = $_POST['staffname'];
    $staff_code = rand(222222,999999);
    $gender = $_POST['gender'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm-password'];
    $lab_name = $_POST['lab-name'];
    $auth_token = uniqid();
    if($password === $cpassword){
        $all_info = [$staff_name,$gender,$username,md5($password),$staff_code,$lab_name,"0",$auth_token];
        $inser_staff->insert_staff($all_info);

    }else{
        echo "Your Password does't match.";
    }
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Add Staffs</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.php" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">Dashboard</span>
                                </a>
                            </div><!-- End Logo -->


                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Staff details to store</h5>

                                    <!-- Floating Labels Form -->
                                    <form method="POST" action="" class="row g-3 needs-validation" novalidate>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input name="staffname" type="text" class="form-control" id="floatingName" placeholder="Staff Name" required>
                                                <label for="floatingEmail">Staff Name</label>
                                                <div class="invalid-feedback">Please, enter staff name!</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select class="form-select" name="gender" aria-label="Default select example" required>
                                                    
                                                    <option value="male">male</option>
                                                    <option value="female">female</option>
                                                    <option value="others">others</option>
                                                </select>
                                                <label for="floatingEmail">Gender</label>
                                                <div class="invalid-feedback">Please, select gender</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                
                                                <input type="text" name="username" class="form-control" id="yourUsername" placeholder="Staff Name" required>
                                                <label for="floatingEmail">Username</label>
                                                <div class="invalid-feedback">Please choose a username.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
    
                                                <input type="password" name="password" class="form-control" id="yourpassword" placeholder="Staff Name" required>
                                                <label for="floatingEmail">Password</label>
                                                <div class="invalid-feedback">Please enter password.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-floating">
                                                    <input type="password" name="confirm-password" class="form-control" id="floatingCity" placeholder="City" required>
                                                    <label for="floatingCity">Confirm password</label>
                                                    <div class="invalid-feedback">Please enter password again.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" name="lab-name" id="floatingSelect" aria-label="State" required>
                                                    
                                                    <option value="Architecture and Design Lab">Architecture and Design Lab</option>
                                                    <option value="Cyber Forensics Lab">Cyber Forensics Lab</option>
                                                    <option value="Data Science Lab">Data Science Lab</option>
                                                    <option value="Design and Analysis Lab">Design and Analysis Lab</option>
                                                    <option value="Embedded and IoT Lab">Embedded and IoT Lab</option>
                                                    <option value="Mobile App Development Lab">Mobile App Development Lab</option>
                                                    <option value="Innovation & Product development Lab">Innovation & Product development Lab</option>
                                                    <option value="Programming and Coding Lab">Programming and Coding Lab</option>
                                                    <option value="Robotics and Automation Lab">Robotics and Automation Lab</option>
                                                    <option value="Ideation Lab">Ideation Lab</option>
                                                </select>
                                                <label for="floatingSelect">Select any one the lab</label>
                                                <div class="invalid-feedback">Please select the lab.</div>
                                            </div>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </form><!-- End floating Labels Form -->

                                </div>
                            </div>

                            <div class="credits">
                                
                                Designed and Developed by me
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>