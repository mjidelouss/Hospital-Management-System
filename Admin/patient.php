<?php
require_once('../includes/autoloader.php');
require_once('../classes/DbConnection.class.php');

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
                            <h5>Admin</h5>
                            <h6 class="user_email">admin@gmail.com</h6>
                        </div>
                    </div>
                    <div class="mt-3 ms-4"><a href="../sign_in.php" class="btn bg-info px-5 bg-opacity-25 w-75 fw-bold" style="color: #03639f;">Log out</a></div>
                    <hr>
                        <div class="list-group-flush ms-3 list-group">
                            <a href="dashboardAdmin.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/dashboard.svg" alt=""> Dashboard</a>
                            <a href="doctor.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/doctors.svg" alt=""> Doctors</a>
                            <a href="Schedule.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/schedule.svg" alt=""> Schedule</a>
                            <a href="appointment.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> Appointment</a>
                            <a href="patient.php" class="list-group-item bg-info bg-opacity-50 border-3 border-blue border-end"><img src="../assets/img/icons/patients.svg" alt=""> Patient</a>
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
                <div class=" p-1 ms-4 fs-4 fw-800  me-auto d-flex justify-content-between w-50" >
                        
                      <input type="text" placeholder="Search Patient name or Email" class="w-75 border border-info rounded p-1 form-control">  
                      <button class="btn btn-primary">Search</button>
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
            <h5 class="fw-bold ms-4 d-inline-block py-5">All Patients ()</h5>
            <div class="container-fluid px-4">
                
                <div class="border border-info rounded" style="width: 95%;">
   <table class="text-center my-2 w-100">
                <tr style="border-bottom: solid #1253B8;">
                    <th class="py-3">ID</th>
                    <th class="py-3">First Name</th>
                    <th>Last Name</th>
                    <th>CIN</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                    <th>Date of Birth</th>
                    <th>Events</th>
                    
                </tr>
                <tbody>
                    <?php

                    $patient = new DbConnection();

                    $query = "SELECT * FROM `patient`";
                    $statement = $patient->connect()->prepare($query);
                    $statement -> execute();

                    $result = $statement->fetchAll();
                    if ($result) {
                        foreach ($result as $row) {
                            ?>
                        <tr>
                            <td class="py-4"><?= $row['id'] ?></td>
                            <input type="hidden" id="<?= $row['id'] ?>" value="<?= $row['id'] ?>">
                            
                            <td class="py-4"><?= $row['First_name'] ?></td>
                            <input type="hidden" id="fname-<?= $row['id'] ?>" value="<?= $row['First_name'] ?>">
                            
                            <td><?= $row['Last_name'] ?></td>
                            <input id="lname-<?= $row['id'] ?>" type="hidden" value="<?= $row['Last_name'] ?>">
                            
                            <td><?= $row['Cin'] ?></td>
                            <input id="cin-<?= $row['id'] ?>" type="hidden" value="<?= $row['Cin'] ?>">
                            
                            <td><?= $row['Phone_number'] ?></td>
                            <input id="phoneNumber-<?= $row['id'] ?>" type="hidden" value="<?= $row['Phone_number'] ?>">
                            
                            <td><?= $row['Email'] ?></td>
                            <input id="email-<?= $row['id'] ?>" type="hidden" value="<?= $row['Email'] ?>">
                            
                            <td><?= $row['Birth_date'] ?></td>
                            <input id="birthday-<?= $row['id'] ?>" type="hidden" value="<?= $row['Birth_date'] ?>">
                            
                            <td><button class="btn bg-info fw-bold rounded bg-opacity-25" data-bs-toggle="modal" data-bs-target="#pateintModal" onclick="getData(<?= $row['id'] ?>)" id="<?= $row['id'] ?>" style="color: #03639f;"><img src="../assets/img/icons/view-iceblue.svg" alt=""> View </button></td>
                            <input id="viewBtn-<?= $row['id'] ?>" type="hidden" value="<?= $row['id'] ?>">
                            
                        </tr>
                            <?php
                        }
                    }                    
                    ?>
                </tbody>
                
    </table> 
    </div>
    
            </div>
        </div>
</div>

<div class="modal fade" id="pateintModal" tabindex="-1" role="dialog" aria-labelledby="pateintModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header bg-primary text-white">
                  <div class="d-flex m-auto justify-content-center w-100">
                        <img src="../assets/img/icons/patients.svg" alt="">
                        <h5 class="modal-title offset-5 mx-3" id="pateintModalLabel">Patients Details</h5>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </button>
				</div>
				<div class="modal-body" style="background-color:#CAEBF2;">
				<form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" disabled="disabled" id="fname_moodle" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" disabled="disabled" id="lname_moodle" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CIN</label>
                            <input type="text" class="form-control" disabled="disabled" id="cin_moodle" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone Number</label>
                            <input type="text" class="form-control" disabled="disabled" id="phoneNumber_moodle" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" disabled="disabled" id="email_moodle"  value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date of Birth</label>
                            <input type="text" class="form-control" disabled="disabled" id="birthday_moodle" value="">
                        </div>
                </form>
					
				</div>
				<div class="modal-footer">
				  	<button type="" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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