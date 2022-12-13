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
    <title>Dashboard</title>
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
                        $userid = $_SESSION['user'][0]["id"];
                        $sql = "SELECT * FROM doctor WHERE id = $userid";
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
                            <a href="dashboardDoctor.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/dashboard.svg" alt=""> Dashboard</a>
                            <a href="appointmentManager.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> My Appointments</a>
                            <a href="Schedule.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/session.svg" alt=""> My Sessions</a>
                            <a href="myPatients.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/patients.svg" alt=""> My Patients</a>
                            <a href="Settings.php" class="list-group-item bg-info bg-opacity-50 border-3 border-blue border-end"><img src="../assets/img/icons/settings.svg" alt=""> Settings</a>
                        </div>
                </div>
            <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4 d-flex justify-content-between">
                <div class=" d-flex ">
    
                    <div class="d-flex align-items-center">
                        <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                            id="controlPanel" onclick="wrapside()"></i>
                    </div>
                    
                </div> 
                <div class="p-1 ms-1 mt-1 fs-4 fw-800  me-auto d-flex justify-content-between w-50" >
                      <h4>Settings</h4>
                    </div>


                <div class=" d-flex" >

                    <div class="row flex-column " dir="rtl" >
                    <p class="col m-0 fs-6 fw-600">Today's Date <br><span id="datetime" class="text-secondary"></span></p>
                <script>
                    var dt = new Date();    
                    document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
                </script>

                         </div  >
                             <div class=" p-2 bg-light-600 rounded-1 ms-2 " >

                                 <img src=" ../assets/icon/calendar.svg" >
                        
                             </div>

                </div>
            </nav>
            <div class="container-fluid px-4">
                
            <button class="list-group-item bg-transparent d-flex justify-content-start my-5" style="border:solid #6495ED 1px; border-radius:5px; width: 95%">
                <img src="../assets/img/icons/edit-iceblue.svg" alt="" style="height: 5%; width: 5%">
                <div class="mx-3 text-start">
                    <h4 class="text-primary"> Account Settings </h4>
                    <p>Edit your Account Details & change Password</p>
                </div>
            </button>
            <button class="list-group-item bg-transparent d-flex justify-content-start " style="border:solid #6495ED 1px; border-radius:5px; width: 95%">
                <img src="../assets/img/icons/view-iceblue.svg" alt="" style="height: 5%; width: 5%">
                <div class="mx-3 text-start">
                    <h4 class="text-primary"> View Account Details </h4>
                    <p>View Personal information About Your Account</p>
                </div>
            </button>
            <button class="list-group-item bg-transparent d-flex justify-content-start my-5" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:solid #6495ED 1px; border-radius:5px; width: 95%">
                <img src="../assets/img/icons/delete-iceblue.svg" alt="" style="height: 5%; width: 5%">
                <div class="mx-3 text-start">
                    <h4 class="text-danger"> Delete Account</h4>
                    <p>Will Permanently Remove your Account</p>
                </div>
            </button>
   
    </div>
    
            </div>
        </div>
</div>

<!-- Modal content goes here -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Are you sure ?</h5>
        <button type="button" class="btn-close" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>You want to delete this record ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
<!-- ================== BEGIN core-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="../scripts/scripts.js"></script>
</body>
<!-- ================== END core-js ================== -->
</html>