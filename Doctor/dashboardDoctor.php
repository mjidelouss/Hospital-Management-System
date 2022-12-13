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
    <link rel="stylesheet" href="../styles/dashdoctorStyle.css" />
    <!-- ================== END core-css ================== -->
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="d-flex pt-3">
                <img src="../assets/img/user.png" class="rounded-circle ms-4" width="70" alt="Image Not Found">
                <div class="ms-3 mt-2">
                    <h5>Doctor</h5>
                    <h6 class="text-muted user_email">admin@gmail.com</h6>
                </div>
            </div>
            <div class="mt-3 d-flex justify-content-center "><a href="#"
                    class="btn bg-info px-5 bg-opacity-25 w-75 fw-bold" style="color: rgb(73, 166, 243);">log out</a>
            </div>
            <hr>
            <div class="list-group-flush ms-3 list-group">
                <a href="dashboardDoctor.php" class="list-group-item bg-info bg-opacity-50 border-3 border-blue border-end"><img src="../assets/img/icons/dashboard.svg" alt=""> Dashboard</a>
                <a href="appointmentManager.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> My appointment</a>
                <a href="Schedule.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/session.svg" alt=""> My sessions</a>
                <a href="myPatients.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/patients.svg" alt=""> My Patients</a>
                <a href="Settings.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/settings.svg" alt=""> Settings</a>
            </div>
        </div>
        <!-- Page Content -->
        <!-- navbar -->
        <div id="page-content-wrapper">
            <div id="page-content-wrapper">
                <div class="d-flex justify-content-between">
                    <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4">
                        <div class="d-flex align-items-center" style="margin-top: 1rem;">
                            <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                                id="controlPanel" onclick="wrapside()"></i>
                            <h2 class="fs-2 m-0">Dashboard</h2>
                        </div>
                    </nav>

                    <div class="me-4 mt-4 d-flex">
                        <div class="">
                            <p class="text-muted" style="margin-top: 0.3rem;">Today's Date</p>
                            <h4 class="fw-bold" style="margin-top: -1rem;">2020-05-02</h4>
                        </div>
                        <div><img class="rounded p-2 border border-secondary ms-2" src="../assets/img/calendar.svg"
                                alt=""></div>
                    </div>
                </div>


            </div>

            <!-- navbar -->

            <!-- Jumbotron -->
            <div class="bg-image p-5 m-3  shadow-1-strong rounded mb-5 "
                style="background-image: url('../assets/img/b8.jpg'); background-size:cover;">
                <p class="mb-3 h4">Welcome!</p>
                <h1 class="mb-3 h2">test Doctor</h1>

                <p class="bold">
                    Thanks for joinnig with us.we are always trying to get you a complete service you can view your
                    dailly sceduale,Reach patiens Appointment at home!
                </p>
                <button type="button" class="btn btn-primary">View My Appointments</button>
            </div>
            <!-- Jumbotron -->

            <div class=" d-grid me-3 " style=" grid-template-columns: repeat(auto-fit,minmax(250px,1fr)); gap: 50px;">

                <section class="">
                    <h3 class=" ps-3 ">Status:</h3>


                    <section class="ps-3 pe-3 ">

                        <div class="part2">


                            <div
                                class="p-2 container-fluid bg-light d-flex justify-content-around align-items-center rounded border border-secondary">
                                <div>
                                    <h5 class="fs-2 text-blue">0</h5>
                                    <p class="fs-4 fw-bold">All Doctors</p>
                                </div>
                                <img class="bg-secondary rounded p-3 bg-opacity-10"
                                    src="../assets/img/icons/doctors-hover.svg" alt="">
                            </div>
                            <div
                                class="p-2 container-fluid bg-light d-flex justify-content-around align-items-center rounded border border-secondary">
                                <div>
                                    <h5 class="fs-2 text-blue">0</h5>
                                    <p class="fs-4 fw-bold">All Patients</p>
                                </div>
                                <img class="bg-secondary rounded p-3 bg-opacity-10"
                                    src="../assets/img/icons/patients-hover.svg" alt="">
                            </div>
                            <div
                                class="p-2 container-fluid bg-light d-flex justify-content-around align-items-center rounded border border-secondary">
                                <div>
                                    <h5 class="fs-2 text-blue">0</h5>
                                    <p class="fs-4 fw-bold">New Booking</p>
                                </div>
                                <img class="bg-secondary rounded p-3 bg-opacity-10"
                                    src="../assets/img/icons/book-hover.svg" alt="">
                            </div>
                            <div
                                class="p-2 container-fluid bg-light d-flex justify-content-around align-items-center rounded border border-secondary">
                                <div>
                                    <h5 class="fs-2 text-blue">0</h5>
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

                    <div class=" table-responsive border border-dark rounded bg-secondary" style=" height: 200px ;">

                        <table class="table   align-middle mb-0 bg-white ">
                            <thead class="bg-light">
                                <tr>
                                    <th>Session Title</th>
                                    <th>Sheduled Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>

                                    <td></td>

                                    <td></td>
                                </tr>


                            </tbody>
                    </div>
                    </table>
            </div>

            </section>

        </div>


    </div>
    <!-- ================== BEGIN core-js ================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="./scripts.js"></script>
    <!-- ================== END core-js ================== -->

</html>