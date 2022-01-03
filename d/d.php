<?php 
include_once "comman_contents/header.php";
include_once "comman_contents/navbar.php";
include_once "comman_contents/side_bar.php";
include_once "database/session.php";

?>



<main id="main" class="main">
    <div class="pagetitle">
        <h1>Programming and Coding Lab 
            <?php
        

Session::check_user_login("username");
        ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Total  competetions -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">


                            <div class="card-body">
                                <h5 class="card-title">Total Competetion <span>| This year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-bookmark-heart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Sales Card -->

                    <!-- Awards  -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title"> Total Award <span>| This Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-award"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>56</h6>
                                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Award -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title"> Total Students<span> | This Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- End Customers Card -->



                    <!-- Recent competetion -->
                    <div class="col-12">
                        <div class="card recent-sales">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Recent Competetion <span>| This Month</span></h5>

                                <table class="table table-borderless ">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <td scope="col">Name</th>
                                                <th scope="col">Competetion Name</th>
                                                <th scope="col">Members</th>
                                                <th scope="col">status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row ">
                                                <a href="# ">1</a>
                                            </th>
                                            <td>Rahul kumar</td>
                                            <td>
                                                <a href="# " class="text-primary "> mini hackthon </a>
                                            </td>
                                            <td>1</td>
                                            <td><span class="badge bg-warning ">pending</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row "><a href="# ">2</a></th>
                                            <td>ravi</td>
                                            <td>
                                                <a href="# " class="text-primary "> national competetion</a>
                                            </td>
                                            <td>3</td>
                                            <td><span class="badge bg-warning ">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row "><a href="# ">3</a></th>
                                            <td>Ashleigh Langosh</td>
                                            <td><a href="# " class="text-primary ">At recusandae consectetur</a></td>
                                            <td>7</td>
                                            <td><span class="badge bg-success ">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row "><a href="# ">4</a></th>
                                            <td>Angus Grady</td>
                                            <td><a href="# " class="text-primar ">Ut voluptatem id earum et</a></td>
                                            <td>7</td>
                                            <td><span class="badge bg-danger ">Rejected</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row "><a href="# ">5</a></th>
                                            <td>Raheem Lehner</td>
                                            <td><a href="# " class="text-primary ">Sunt similique distinctio</a></td>
                                            <td>5</td>
                                            <td><span class="badge bg-success ">Approved</span></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <!-- End Recent Sales -->

                </div>
            </div>
            <!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4 ">

                <!-- News & Updates Traffic -->
                <div class="card ">
                    <div class="filter ">
                        <a class="icon " href="# " data-bs-toggle="dropdown "><i class="bi bi-three-dots "></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
                            <li class="dropdown-header text-start ">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item " href="# ">Today</a></li>
                            <li><a class="dropdown-item " href="# ">This Month</a></li>
                            <li><a class="dropdown-item " href="# ">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0 ">
                        <h5 class="card-title ">News &amp; Updates <span>| Today</span></h5>

                        <div class="news ">
                            <div class="post-item clearfix ">
                                <img src="assets/img/news-1.jpg " alt=" ">
                                <h4><a href="# ">Nihil blanditiis at in nihil autem</a></h4>
                                <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                            </div>

                            <div class="post-item clearfix ">
                                <img src="assets/img/news-2.jpg " alt=" ">
                                <h4><a href="# ">Quidem autem et impedit</a></h4>
                                <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                            </div>

                            <div class="post-item clearfix ">
                                <img src="assets/img/news-3.jpg " alt=" ">
                                <h4><a href="# ">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                            </div>

                            <div class="post-item clearfix ">
                                <img src="assets/img/news-4.jpg " alt=" ">
                                <h4><a href="# ">Laborum corporis quo dara net para</a></h4>
                                <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                            </div>

                            <div class="post-item clearfix ">
                                <img src="assets/img/news-5.jpg " alt=" ">
                                <h4><a href="# ">Et dolores corrupti quae illo quod dolor</a></h4>
                                <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                            </div>

                        </div>
                        <!-- End sidebar recent posts-->

                    </div>
                </div>
                <!-- End News & Updates -->
            </div>
            <!-- End Right side columns -->

        </div>
    </section>

</main>
<!-- End #main -->

<?php
include_once "comman_contents/footer.php";
?>