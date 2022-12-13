<?php 
require_once('../includes/autoloader.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);

  $new_session = new Session($session_title,$scheduled_date,$scheduled_time,$patient_number,$doctor_id);

    $new_session->createSession();
    // $sessions = $new_session->displaySession();



   }





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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../styles/style2.css" />
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
                            <a href="Schedule.php" class="list-group-item bg-info bg-opacity-50 border-3 border-blue border-end"><img src="../assets/img/icons/schedule.svg" alt=""> Schedule</a>
                            <a href="appointment.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> Appointment</a>
                            <a href="patient.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/patients.svg" alt=""> Patient</a>
                        </div>
                </div>
            <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4 d-flex justify-content-between">
                <div class=" d-flex ">

                    <div class="d-flex align-items-center">
                        <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;" id="controlPanel" onclick="wrapside()"></i>
                    </div>
                
                </div>
                <div class=" p-1 ms-4 fs-4 fw-800  me-auto">

                    <p class="my-0">Shedule Manager</p>

                </div>


                <div class=" d-flex">

                    <div class="row flex-column " dir="rtl">
                        <p class=" col m-0 fs-6 fw-600"> Today'y Date</p>
                        <p class=" col m-0 fs-5 fw-800 "> 2022-11-01</p>


                </div> 
                <div class=" p-1 ms-1 fs-4 fw-800  me-auto" >
                        
                      <p class="my-0">Shedule Manager</p>  
                        
                    </div>
                    <div class=" p-2 bg-light-600 rounded-1 ms-2 ">

                        <img src=" ../assets/icon/calendar.svg">

                    </div>

                </div>
            </nav>
            <h5 class="fw-bold ms-4 d-inline-block">Schedule a Session</h5>
            <a href="#modal-book" onclick="resit();showBtn('ajouter')" data-bs-toggle="modal" class=" list-group-item  p-2 rounded-1 shadow  d-inline-block bg-blue-500 fs-5 fw-800 text-light ">
                <img src=" ../assets/icon/add.svg"> Add a Session
            </a>


            <div class="container-fluid px-4">
                <h4> All Session </h4>
                <div class=" d-flex p-2 border rounded-1 justify-content-around">
                    <div class=" row" style=" flex-basis:20rem ;">
                        <label for="date" class="d-flex justify-content-center align-items-center col-4 fs-6 fw-600 fw-600"> Date: </label>
                        <input type="date" name="" id="" class=" col-8 border-1 rounded-1 p-1  ">
                    </div>

                    <div class=" row" style=" flex-basis:20rem ;">

                        <label for="Date " class=" d-flex justify-content-center align-items-center col-4 fs-6 fw-600"> Doctor :</label>

                        <select id="Date" class=" rounded-1 p-2  col-8  ">
                            <option value=""> Choose Doctor Name from the list</option>

                        </select>
                    </div>
                    <div class=" d-flex bg-blue-100 rounded-1 " style=" flex-basis:20rem ;">
                        <img src="../assets/icon/filter-iceblue.svg" alt="" srcset="">
                        <div class=" p-3 ">
                            <p class=" m-0 fs-5 fw-600 text-blue-600 ">Filter</p>
                        </div>

                    </div>


                </div>
                <div class=" card my-2 shadow">
                    <table class="table  m-0 table-card table-borderless  ">
                        <thead class=" ">
                            <tr class="border-bottom border-blue ">
                                <th scope="col">Session Title</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Schedule Date & Time </th>
                                <th scope="col">Max num that can be booked</th>
                                <th scope="col">Events</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="">...  </th>
                                <td>doctor</td>
                                <td>/// </td>
                                <td>...</td>
                                <td class=" d-flex">
                                    <div class=" d-flex bg-blue-100 rounded-1 m-1  ">
                                        <img src="../assets/icon/view-iceblue.svg" alt="" srcset="">
                                        <div class=" p-2  ">
                                            <p class=" m-0 fs-5 fw-600 text-blue-600">View</p>
                                        </div>

                                    </div>
                                    <div class=" d-flex bg-blue-100 rounded-1 m-1">
                                        <img src="../assets/icon/delete-iceblue.svg" alt="" srcset="">
                                        <div class=" p-2">
                                            <p class=" m-0 fs-5 fw-600 text-blue-600">Remove</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                                <td>@twitter</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- TASK MODAL -->
    <div class="modal fade" id="modal-book">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="Schedule.php" data-parsley-validate="" enctype="multipart/form-data" method="POST" id="form-task">
                    <div class="modal-header">
                        <h5 class="modal-title"> Add New Session </h5>
                        <a href="#" class="btn-close" data-bs-dismiss="modal"></a>
                    </div>
                    <?php if (isset($_SESSION['form_vide_message'])) : ?>
                        <div class="alert alert-danger alert-dismissible fade show">
                            <strong>wrong!</strong>
                            <?php
                            echo $_SESSION['form_vide_message'];
                            unset($_SESSION['form_vide_message']);
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif ?>

                    <div class="modal-body">

                        <input name="input_hidden" type="hidden" id="book_id" value="">
                        <div class="mb-3">
                            <label class="form-label">Session Title : </label>
                            <input type="text" name="session_title" class="form-control" id="session_Title" data-parsley-maxlength="10" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Doctor:</label>
                            <select name='doctor_id' class="form-select" id="doctor_name" required="">

                                <option value="" disabled="" selected="" hidden="">Choose Doctor Name from the list</option>
                                <option id="" value="1">ahmed </option>
                                <option id="" value="2">omar</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Number of Patients :</label>
                            <input type="number" name="patient_number" class="form-control" id="patient_number" data-parsley-maxlength="30" placeholder="Max num that can be booked" required />
                        </div>


                        <div class="mb-3">
                            <label class="form-label"> Session Date: </label>
                            <input type="date" class="form-control" name="scheduled_date" id="scheduled_date" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Schedule Time:</label>
                            <input type="time" class="form-control" name="scheduled_time" min="2022-12-12" id="scheduled_time" required />
                        </div>


                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>

                        <button type="submit" name="save" value="validate" class=" btn btn-primary task-action-btn" id="task-save-btn">ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ================== BEGIN core-js ================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="../scripts/scripts.js"></script>
    <!-- ================== END core-js ================== -->
</body>

</html>