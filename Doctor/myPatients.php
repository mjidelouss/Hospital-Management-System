<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>My Patients</title>
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
                            <h5>Test Doctor</h5>
                            <h6 class="user_email">doctor@gmail.com</h6>
                        </div>
                    </div>
                    <div class="mt-3 ms-4">
                        <a href="#" class="btn bg-info px-5 bg-opacity-25 w-75 fw-bold" style="color: rgb(73, 166, 243);">log out</a>
                    </div>
                        <hr>
                        <div class="list-group-flush ms-3 list-group">
                            <a href="dashboardDoctor.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/dashboard.svg" alt=""> Dashboard</a>
                            <a href="appointmentManager.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt="">My Appointments</a>
                            <a href="Schedule.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/session.svg" alt=""> My Session</a>
                            <a href="myPatients.php" class="list-group-item bg-info bg-opacity-50 border-3 border-blue border-end"><img src="../assets/img/icons/patients.svg" alt=""> My Patients</a>
                            <a href="Settings.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/settings.svg" alt=""> Settings</a>
                        </div>
    </div>
            <!-- Page Content -->
    <div id="page-content-wrapper" class="container-fluid">
        <div class="d-flex justify-content-between px-4 mb-4">
            <!-- <div class="d-flex"> -->
                        <nav class="navbar navbar-expand-lg bg-transparent py-4">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                                    id="controlPanel" onclick="wrapside()"></i>
                            </div>
                        </nav>
                    <div>
                        <div class="d-flex mt-2 py-4">
                            <input type="text" class="form-control p-2 col-5" placeholder="seach patient name or email">
                            <button class="btn bg-info bg-opacity-50 col-5 ms-2" style="color: #03639f;">Search</button>
                        </div>
                    </div>
            <!-- </div> -->
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
            <div class="bg-white border row rounded justify-content-end">
                    <table class="">
                            <tr>
                                <td width="5%"></td> 
                                <td  class="fs-5" width="15%" style="text-align: center;">Show Details About :</td>
                                <td width="25%">
                                <form action="" method="post">
                                    <select class="p-2"  style="width:95%;">
                                        <option class="" value="">My patients Only</option>
                                        <option value="">pat1</option>
                                        <option value="">pat2</option>
                                        <option value="">pat3</option>
                                    </select>
                                </td>
                                <td width="12%">
                                <button class="btn bg-info bg-opacity-50 px-4 ms-5 fw-bold" style="color: #03639f;"><img src="../assets//img/icons/filter-iceblue.svg" alt=""> Filter</button>
                                </form>
                                </td>

                            </tr>
                        </table>
            </div>
            <div class="mt-4 table-responsive">
                <table class="table" border="1">
                    <thead class="border-bottom border-info bg-secondary bg-opacity-25">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">NIC</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Events</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">lorem</th>
                        <td>154</td>
                        <td>0666666666</td>
                        <td>test@gmail.com</td>
                        <td>2015-04-03</td>
                        <td><button class="btn bg-info bg-opacity-50 fw-bold" style="color: #03639f;"><img src="../assets//img/icons/delete-iceblue.svg" alt=""> Cancel</button></td>
                    </tr>
                    <tr>
                        <th scope="row">lorem</th>
                        <td>154</td>
                        <td>0666666666</td>
                        <td>test@gmail.com</td>
                        <td>2015-04-03</td>
                        <td><button class="btn bg-info bg-opacity-50 fw-bold" style="color: #03639f;"><img src="../assets//img/icons/delete-iceblue.svg" alt=""> Cancel</button></td>
                    </tr>
                    </tbody>
                </table>
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




