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
    <title>My Bookings</title>
    <!-- ================== BEGIN core-css ================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../styles/style2.css"/>
    <!-- ================== END core-css ================== -->
</head>
<body>
<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
    <div id="sidebar-wrapper">
                    <div class="d-flex pt-3">
                        <img src="../assets/img/user.png" class="rounded-circle ms-4" width="70" alt="Image Not Found">
                        <div class="ms-3 mt-2">
                            <h5>Patient Name</h5>
                            <h6 class="user_email">patient@gmail.com</h6>
                        </div>
                    </div>
                    <div class="mt-3 ms-4">
                        <a href="#" class="btn bg-info px-5 bg-opacity-25 w-75 fw-bold" style="color: rgb(73, 166, 243);">log out</a>
                    </div>
                        <hr>
                        <div class="list-group-flush ms-3 list-group">
                            <a href="dashboardPatient.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/dashboard.svg" alt=""> Home</a>
                            <a href="allDoctors.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/doctors.svg" alt=""> All Doctors</a>
                            <a href="ScheduleSession.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/schedule.svg" alt=""> Scheduled Session</a>
                            <a href="myBooking.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> My Bookings</a>
                            <a href="Settings.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/patients.svg" alt=""> Settings</a>
                        </div>
    </div>
            <!-- Page Content -->
    <div id="page-content-wrapper" class="container-fluid">
        <div class="d-flex justify-content-between px-4 mb-4">
            <div class="d-flex">
                <nav class="navbar navbar-expand-lg bg-transparent py-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                            id="controlPanel" onclick="wrapside()"></i>
                    </div>
                </nav>
                    
                    <div class="py-4 mt-2">
                        <h3>My Bookings history</h3>
                    </div>
            </div>
            <div class="d-flex py-4">
                    <div>
                        <p>Today's Date</p>
                        <h5 style="margin-top: -1rem;">2022-11-01</h5>
                    </div>
                    <div>
                        <img src="../assets//img/calendar.svg" class="rounded p-2 border border-secondary ms-2" alt="calendar image">
                    </div>
            </div>
        </div>
        <h5 class="fw-bold ms-4">My Patients (2)</h5>
        <div class="px-4 py-3">
            <div class="bg-white border rounded p-1">
                <table class="" border="0" >
                    <tr>
                        <td width="10%"></td> 
                        <td  class="fs-5" width="5%" style="text-align: center;">Date:</td>
                        <td width="25%">
                        <form action="" method="post">
                            <input type="date" class="p-2" style="width: 95%;">
                        </td>
                        <td width="12%">
                                <button class="btn bg-info bg-opacity-50 px-4 ms-5 fw-bold" style="color: #03639f;"><img src="../assets//img/icons/filter-iceblue.svg" alt=""> Filter</button>
                        </form>
                        </td>
                    </tr>
                </table>
            </div>
           <div class="d-flex justify-content-between mt-4">
                <div class="border rounded" style="width: 49%;">
                    <div class="p-5">
                        <p>booking date 2022-10-31</p>
                        <p>reference number: OC-000-2</p>
                        <h4 class="text-info">Test Session</h4>
                        <p>Appointment Number</p>
                        <p class="fw-bold">02</p>
                        <h6>test Doctor</h6>
                        <p>lorem 2050-01-01</p>
                        <p>start@18:00 (24h)</p>
                        <button class="btn bg-info bg-opacity-50 form-control" style="color: #03639f;">Cancel Booking</button>
                    </div>
                </div>
                <div class="border rounded" style="width: 49%;">
                    <div class="p-5">
                        <p>booking date 2022-10-31</p>
                        <p>reference number: OC-000-2</p>
                        <h4 class="text-info">Test Session</h4>
                        <p>Appointment Number</p>
                        <p class="fw-bold">02</p>
                        <h6>test Doctor</h6>
                        <p>lorem 2050-01-01</p>
                        <p>start@18:00 (24h)</p>
                        <button class="btn bg-info bg-opacity-50 form-control" style="color: #03639f;">Cancel Booking</button>
                    </div>
                </div>
           </div>
        </div>
        </div>
    </div>  
</div>
<!-- ================== BEGIN core-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="../scripts/scripts.js"></script>
<!-- ================== END core-js ================== -->
</html>




