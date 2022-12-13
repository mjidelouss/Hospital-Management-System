<?php
    include "../includes/autoloader.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Appointments</title>
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
                        <?php
                        $db = new DbConnection;
                        $sql = "SELECT * FROM admin";
                        $stmt = $db->connect()->query($sql);
                        $row = $stmt->fetch();
                        $name = ''.$row["First_name"]." ".$row["Last_name"].'';
                        $email = $row['Email'];
                        echo '<h5>'.$name.'</h5>';
                        echo '<h6 class="user_email">'.$email.'</h6>';
                    ?>
                        </div>
                    </div>
                    <div class="mt-3 ms-4"><a href="../sign_in.php" class="btn bg-info px-5 bg-opacity-25 w-75 fw-bold" style="color: #03639f;">Log out</a></div>
                        <hr>
                        <div class="list-group-flush ms-3 list-group">
                            <a href="dashboardAdmin.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/dashboard.svg" alt=""> Dashboard</a>
                            <a href="doctor.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/doctors.svg" alt=""> Doctors</a>
                            <a href="Schedule.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/schedule.svg" alt=""> Schedule</a>
                            <a href="appointment.php" class="list-group-item bbg-info bg-opacity-50 border-3 border-blue border-end"><img src="../assets/img/icons/book.svg" alt=""> Appointment</a>
                            <a href="patient.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/patients.svg" alt=""> Patient</a>
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
                        <h3>Appointement Manager</h3>
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
        <h5 class="fw-bold ms-4">All Appointments (3)</h5>
        <div class="px-4 py-3">
            <div class="bg-white row border rounded">
                <table>
                        <tr>
                           <td width="10%"></td> 
                            <td class="fs-5" width="5%" style="text-align: center;"> Date:</td>
                            <td width="30%">
                            <form action="" method="post">
                            <input type="date" class="p-2" style="width: 95%;">
                            </td>
                            <td class="fs-5" width="5%" style="text-align: center;"> Doctor:</td>
                            <td width="30%">
                            <select name="docid" id="" class="box filter-container-items" style="width:90% ;height: 37px;margin: 0;" >
                                <option value="" disabled selected hidden>Choose Doctor Name from the list</option>  
                                <option value="">doc1</option>
                                <option value="">doc2</option>
                                <option value="">doc3</option>
                            </select>
                            </td>
                            <td width="12%">
                            <button class="btn bg-info bg-opacity-50 px-4 fw-bold" style="color: #03639f;"><img src="../assets//img/icons/filter-iceblue.svg" alt=""> Filter</button>
                            </form>
                            </td>
                        </tr>
                            </table>
            </div>
            <div class="mt-4 table-responsive">
                <table class="table" border="1">
                    <thead class="border-bottom border-info bg-secondary bg-opacity-25">
                    <tr>
                        <th scope="col">Patient name</th>
                        <th scope="col">Appointment number</th>
                        <th scope="col">Doctor</th>
                        <th scope="col">Session Title</th>
                        <th scope="col">Session Date & Time</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Events</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">lorem</th>
                        <td>1</td>
                        <td>docA</td>
                        <td>test session</td>
                        <td>2015-04-03 18:00</td>
                        <td>2015-04-03</td>
                        <td><button class="btn bg-info bg-opacity-50 fw-bold" style="color: #03639f;"><img src="../assets//img/icons/delete-iceblue.svg" alt=""> Cancel</button></td>
                    </tr>
                    <tr>
                        <th scope="row">lorem</th>
                        <td>1</td>
                        <td>docA</td>
                        <td>test session</td>
                        <td>2015-04-03 18:00</td>
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




