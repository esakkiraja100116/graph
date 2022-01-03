<?php
include_once "comman_contents/header.php";
include_once "comman_contents/navbar.php";
include_once "comman_contents/side_bar.php";
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add Students to our database</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Students</li>
                <li class="breadcrumb-item active">add users</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Information about the users </h5>

                        <!-- General Form Elements -->
                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Reg Num</label>
                                <div class="col-sm-10">
                                    <input type="number" placeholder="Enter user register number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" placeholder="Enter name of the student" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>select gender</option>
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                        <option value="others">others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input placeholder="Enter user email Id" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input placeholder="Enter password for user" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Phone num</label>
                                <div class="col-sm-10">
                                    <input type="number" placeholder="Enter user phone number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Year</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>select year</option>
                                        <option value="1">1st-year</option>
                                        <option value="2">2nd-year</option>
                                        <option value="3">3rd-year</option>
                                        <option value="4">4th-year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Department</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>select department</option>
                                        <option value="MECH">MECH</option>
                                        <option value="CIVIL">CIVIL</option>
                                        <option value="EEE">EEE</option>
                                        <option value="ECE">ECE</option>
                                        <option value="CSE">CSE</option>
                                        <option value="IT">IT</option>
                                        <option value="CSBS">CSBS</option>
                                        <option value="AI">AI</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Submit Button</label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit Form</button>
                                </div>
                            </div>
                            <input type="text" value="PCL" hidden/>

                        </form>
                        <!-- End General Form Elements -->

                    </div>
                </div>

            </div>


        </div>
    </section>

</main>
<!-- End #main -->

<?php
include_once "comman_contents/footer.php";
?>