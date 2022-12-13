<?php
    include "../includes/autoloader.php";

    $doctor = new user();
    $doctor = $doctor->get_all('doctor');

    $appointment = new user();
    $appointment= $appointment->get_all('appointment');

    $session = new user();
    $session = $session->get_all('session');

    $patient = new user();
    $patient = $patient->get_all('patient');
    
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
    <link rel="stylesheet" href="../styles/dashpatientStyle.css" />
    <!-- ================== END core-css ================== -->
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="d-flex pt-3">
                <img src="../assets/img/user.png" class="rounded-circle ms-4" width="70" alt="Image Not Found">
                <div class="ms-3 mt-2">
                    <h5>patient</h5>
                    <h6 class="user_email text-muted">admin@gmail.com</h6>
                </div>
            </div>
            <div class="mt-3 ms-4"><a href="../sign_in.php" class="btn bg-info px-5 bg-opacity-25 w-75 fw-bold" style="color: #03639f;">Log out</a></div>
            <hr>
            <div class="list-group-flush ms-3 list-group">
                <a href="dashboardPatient.php" class="list-group-item bg-info bg-opacity-50 border-3 border-blue border-end"><img src="../assets/img/icons/home.svg" alt=""> Home</a>
                <a href="allDoctors.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/doctors.svg" alt=""> All Doctors</a>
                <a href="ScheduleSession.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/session.svg" alt=""> Scheduled Sessions</a>
                <a href="myBooking.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> My bookings</a>
                <a href="Settings.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/Settings.svg" alt=""> Settings</a>
            </div>
        </div>
        <!-- Page Content -->

        <!-- navbar -->
        <div id="page-content-wrapper">
            <div id="">
                <div class="d-flex justify-content-between">
                    <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4">
                        <div class="d-flex align-items-center" style="margin-top: 1rem;">
                            <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                                id="controlPanel" onclick="wrapside()"></i>
                            <h2 class="fs-2 m-0">Home</h2>
                        </div>
                    </nav>

                    <div class="me-4 mt-4 d-flex">
                        <div class="">
                            <p class="text-muted" style="margin-top: 0.3rem;">Today's Date</p>
                            <h4 class="fw-bold" style="margin-top: -1rem;">

                                <?php 
                                date_default_timezone_set('Africa/Algiers');
        
                                $today = date('Y-m-d');
                                echo $today;

                                ?>

                            </h4>
                        </div>
                        <div><img class="rounded p-2 border border-secondary ms-2" src="../assets/img/calendar.svg"
                                alt=""></div>
                    </div>
                </div>


            </div>

            <!-- navbar -->

            <!-- Jumbotron -->
            <div class="bg-image p-5 m-3  shadow-1-strong rounded mb-5 "
                style="background-image: url('../assets/img/b3.jpg'); background-size:cover;">
                <p class="mb-3 h4">Welcome!</p>
                <h1 class="mb-3 h2">Patient name</h1>

                <p class="fw-bold">
                    Haven't any idea about doctors ? no problem lets jumping to "All Doctors" section or "Sessions"
                    Track your past and future appointments history.
                </p>
                <p class="fw-bold">
                    alsofind out the expectated arrival time of youe doctor or medical consultatant.
                </p>
                <p class="mb-3 h5">Channel a Doctor Here</p>


                <div class="container-fluid">
                    <form class="d-flex align-items-center " role="search">
                        <input class="form-control sm me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-info" type="submit">Search</button>
                    </form>
                </div>



            </div>
            <!-- Jumbotron -->


            <div class=" d-grid me-3 " style=" grid-template-columns: repeat(auto-fit,minmax(250px,1fr)); gap: 50px;">

                <section class="">
                    <h3 class=" ps-3 ">Status</h3>


                    <section class="ps-3 pe-3 ">

                        <div class="part2">


                            <div
                                class="p-2 container-fluid bg-light d-flex justify-content-around align-items-center rounded border border-secondary">
                                <div>
                                    <h5 class="fs-2 text-blue"><?php echo $doctor;?> </h5>
                                    <p class="fs-4 fw-bold">All Doctors</p>
                                </div>
                                <img class="bg-secondary rounded p-3 bg-opacity-10"
                                    src="../assets/img/icons/doctors-hover.svg" alt="">
                            </div>
                            <div
                                class="p-2 container-fluid bg-light d-flex justify-content-around align-items-center rounded border border-secondary">
                                <div>
                                    <h5 class="fs-2 text-blue"><?php echo $patient;?></h5>
                                    <p class="fs-4 fw-bold">All Patients</p>
                                </div>
                                <img class="bg-secondary rounded p-3 bg-opacity-10"
                                    src="../assets/img/icons/patients-hover.svg" alt="">
                            </div>
                            <div
                                class="p-2 container-fluid bg-light d-flex justify-content-around align-items-center rounded border border-secondary">
                                <div>
                                    <h5 class="fs-2 text-blue"><?php echo $appointment;?></h5>
                                    <p class="fs-4 fw-bold">New Booking</p>
                                </div>
                                <img class="bg-secondary rounded p-3 bg-opacity-10"
                                    src="../assets/img/icons/book-hover.svg" alt="">
                            </div>
                            <div
                                class="p-2 container-fluid bg-light d-flex justify-content-around align-items-center rounded border border-secondary">
                                <div>
                                    <h5 class="fs-2 text-blue"><?php echo $session;?></h5>
                                    <p class="fs-4 fw-bold">Today Sessions</p>
                                </div>
                                <img class="bg-secondary rounded p-3 bg-opacity-10"
                                    src="../assets/img/icons/session-iceblue.svg" alt="">
                            </div>



                        </div>
                    </section>

                </section>

                <section class="ms-3 ">
                    <p class="fw-bold h4 text-blue ">Your Up Coming Session until next week</p>

                    <div class=" table-responsive border border rounded bg-white" style=" height: 200px ;">

                        <table class="table align-middle mb-0 bg-white  ">
                            <thead class="bg-light">
                                <tr>
                                    <th>Appointment Number</th>
                                    <th>Session Title</th>
                                    <th>Doctor</th>
                                    <th>Shedualed Date & Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>

                                    <td></td>

                                    <td></td>

                                    <td></td>

                                </tr>

                            </tbody>
                    </div>
                    </table>
                    <center>
                        <img src="../assets/img/notfound.svg" width="25%">
                        <br>
                        <p class="heading-main12" style="margin-left: 45px;font-size:20px;color:rgb(49, 49, 49)">We
                            couldnt find anything related to your keywords !</p>

                    </center>
            </div>
            <button class="btn btn-primary container-fluid">Show all Appointement</button>


            </section>

        </div>


    </div>
    <!-- ================== BEGIN core-js ================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="../scripts/scripts.js"></script>
    <!-- ================== END core-js ================== -->

</html>