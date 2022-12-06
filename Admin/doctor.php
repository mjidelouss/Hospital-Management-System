<?php
    include "../includes/autoloader.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <!-- ================== BEGIN core-css ================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../styles/doctorstyle.css"/>
    <!-- ================== END core-css ================== -->
</head>
<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
                    <div class="d-flex pt-3">
                        <img src="../assets/img/user.png" class="rounded-circle ms-4" width="70" alt="Image Not Found">
                        <div class="ms-3 mt-2">
                            <h5>Admin</h5>
                            <h6 class="user_email">admin@gmail.com</h6>
                        </div>
                    </div>
                    <div class="mt-3 ms-4"><a href="../sign_in.php" class="btn bg-info px-5 bg-opacity-25 w-75 fw-bold" style="color: #03639f;">Log out</a></div>
                    <hr>
                        <div class="list-group-flush ms-3 list-group">
                            <a href="dashboardAdmin.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/dashboard.svg" alt=""> Dashboard</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/doctors.svg" alt=""> Doctors</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/schedule.svg" alt=""> Schedule</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> Appointment</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/patients.svg" alt=""> Patient</a>
                        </div>
                </div>
            <!-- Page Content -->
        <div id="page-content-wrapper">
        <div class="d-flex justify-content-between">
            <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4">
                <div class="d-flex align-items-center" style="margin-top: 1rem;">
                    <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                        id="controlPanel" onclick="wrapside()"></i>
                        <h2 class="fs-2 m-0">Doctors</h2>
                </div>
            </nav>
            <form method="POST">
                <div class="input-group d-flex" style="margin-top: 2.2rem;">
                    <div class="form-outline">
                    <img id="search-img" src="../assets/img/search.svg">
                        <input id="search-bar" type="search" name="searchBook" placeholder="Search Doctor Name or Email" class="form-control"/>
                    </div>
                    <button type="submit" name="search" class="btn btn-primary ms-2 rounded">Search</button>
                  </form>
                </div>
            <div class="me-4 mt-4 d-flex">
                <div class="">
                <p class="" style="margin-top: 0.3rem;">Today's Date</p>
                <h4 class="fw-bold" style="margin-top: -1rem;">2020-05-02</h4>
                 </div>
                 <div><img class="rounded p-2 border border-secondary ms-2" src="../assets/img/calendar.svg" alt=""></div>
               </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
            <h4 class="fw-bold ms-4 mt-3">Add New Doctor</h4>
            <button class="px-4 text-white rounded-pill bg-primary border border-none me-4">
              <i class="bi bi-plus-lg me-2"></i>Add New
            </button>
            </div>
            <h5 class="fw-bold ms-4 mt-5">All Doctors(1)</h5>
            <div class="container">
            <div class="col table-responsive mt-3 rounded">
                        <table class="table table-bordered bg-white rounded shadow-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="">Doctor Name</th>
                                    <th scope="col" class="">Email</th>
                                    <th scope="col" class="">Specialties</th>
                                    <th scope="col" class="text-center">Events</th>
                                </tr>
                            </thead>
                            <tbody id="doctor-table">
                            <tr>
          <th scope="row">Test Doctor</th>
          <td>doctor@youcode.ma</td>
          <td>Accident and Emergencies</td>
          <td class="d-flex justify-content-evenly">
            <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/edit-iceblue.svg">Edit</button>
            <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/view-iceblue.svg">View</button>
            <button type="submit" class="btn bg-info fw-bold rounded bg-opacity-25" style="color: #03639f;"><img class="me-2 mb-1" src="../assets/img/icons/delete-iceblue.svg">Remove</button>
        </td>
          </tr>
</div>
<!-- ================== BEGIN core-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="../scripts/scripts.js"></script>
<!-- ================== END core-js ================== -->
</html>