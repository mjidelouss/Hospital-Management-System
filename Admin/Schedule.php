
<?php 
require_once('../includes/autoloader.php');

function varDamp($param){

    var_dump($param);

}


$doctors = new Schedule();







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
                            <h5>Admin</h5>
                            <h6 class="user_email">admin@gmail.com</h6>
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
                        <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                            id="controlPanel" onclick="wrapside()"></i>
                    </div>

                </div> 
                <div class=" p-1 ms-1 fs-4 fw-800  me-auto" >
                        
                      <p class="my-0">Shedule Manager</p>  
                        
                    </div>


                <div class=" d-flex" >

                    <div class="row flex-column " dir="rtl" >
                        <p class=" col m-0 fs-6 fw-600" > Today'y Date</p>
                        <p class=" col m-0 fs-5 fw-800 " > 2022-11-01</p>

                         </div  >
                             <div class=" p-2 bg-light-600 rounded-1 ms-2 " >

                                 <img src=" ../assets/icon/calendar.svg" >
                        
                             </div>

                </div>
            </nav>
            <div class="d-flex justify-content-between mt-4">
            <h4 class="fw-bold ms-4 mt-3">Schedule a Session</h4>
            <button class="px-4 text-white rounded-pill bg-primary border border-none me-4" data-bs-toggle="modal" data-bs-target="#modal-doctor">
              <i class="bi bi-plus-lg me-2"></i>Add a Session
            </button>
            </div>
            <div class="container-fluid px-4">
                <h4 class="mt-4"> All Session ()</h4>
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
    <div class=" card my-2 shadow">
                <table class="table  m-0 table-card table-borderless  "  >
                    <thead class=" ">
                        <tr class="border-bottom border-blue " >
                        <th scope="col" >Session Title</th>
                        <th scope="col"  >Doctor</th>
                        <th scope="col"   >Schedule Date & Time </th>
                        <th scope="col">Max num that can be booked</th>
                        <th scope="col">Events</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="" >1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td class=" d-flex">
                                <div class=" d-flex bg-blue-100 rounded-1 m-1  ">
                                    <img src="../assets/icon/view-iceblue.svg" alt="" srcset="">
                                    <div class=" p-2  ">
                                          <p class=" m-0 fs-5 fw-600 text-blue-600" >View</p>
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
</div>
<!-- ================== BEGIN core-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<script src="../scripts/scripts.js"></script>
<!-- ================== END core-js ================== -->
</body>
</html>
