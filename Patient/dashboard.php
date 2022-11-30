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
    <link rel="stylesheet" href="./style2.css"/>
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
                    <div class="mt-3 ms-4"><a href="#" class="btn bg-info px-5 bg-opacity-25 w-75 fw-bold" style="color: rgb(73, 166, 243);">log out</a></div>
                    <hr>
                        <div class="list-group-flush ms-3 list-group">
                            <a href="admin.html" class="list-group-item bg-transparent"><img src="../assets/img/icons/dashboard.svg" alt=""> Dashboard</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/doctors.svg" alt=""> Doctors</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/schedule.svg" alt=""> Schedule</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> Appointment</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/patients.svg" alt=""> Patient</a>
                        </div>
                </div>
            <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                        id="controlPanel" onclick="wrapside()"></i>
                </div>
            </nav>
            <h5 class="fw-bold ms-4">Status</h5>
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="p-2 bg-white d-flex justify-content-around align-items-center rounded border border-secondary">
                            <div>
                                <h5 class="fs-2">23</h5>
                                <p class="fs-5">Doctors</p>
                            </div>
                            <img class="bg-secondary rounded p-3 bg-opacity-10" src="../assets/img/icons/doctors.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="p-2 bg-light d-flex justify-content-around align-items-center rounded border border-secondary">
                            <div>
                            <h5 class="fs-2">5</h5>
                            <p class="fs-5">Patients</p>
                            </div>
                            <img class="bg-secondary rounded p-3 bg-opacity-10" src="../assets/img/icons/doctors.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="p-2 bg-white d-flex justify-content-around align-items-center rounded border border-secondary">
                            <div>
                                <h5 class="fs-2">12</h5>
                                <p class="fs-5">New Booking</p>
                            </div>
                            <img class="bg-secondary rounded p-3 bg-opacity-10" src="../assets/img/icons/doctors.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="p-2 bg-white d-flex justify-content-around align-items-center rounded border border-secondary">
                            <div>
                            <h5 class="fs-2">9</h5>
                            <p class="fs-5">Today Sessions</p>
                            </div>
                            <img class="bg-secondary rounded p-3 bg-opacity-10" src="../assets/img/icons/doctors.svg" alt="">
                        </div>
                    </div>
                </div>
</div>
<!-- ================== BEGIN core-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="./scripts.js"></script>
<!-- ================== END core-js ================== -->
</html>