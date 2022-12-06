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
                    <div class="mt-3 ms-4"><a href="#" class="btn bg-info px-5 bg-opacity-25 w-75 fw-bold" style="color: rgb(73, 166, 243);">log out</a></div>
                    <hr>
                        <div class="list-group-flush ms-3 list-group">
                            <a href="admin.html" class="list-group-item bg-transparent"><img src="../assets/img/icons/dashboard.svg" alt=""> Dashboard</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/doctors.svg" alt=""> Doctors</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/schedule.svg" alt=""> Schedule</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> Appointment</a>
                            <a href="#" class="list-group-item bg-transparent text-blue-500 border-3 border-blue border-end"><img src="../assets/img/icons/patients-hover.svg" alt=""> Patient</a>
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
                    <div class=" row bg-blue-100  rounded-1  p-2" >
                        <img src="../assets/icon/back-iceblue.svg" alt="" class="  col">
                        <p class=" col align-items-center m-0 fw-800 fs-5 text-blue "> Back</p>
    
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
                    <th class="py-3">Name</th>
                    <th>CIN</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                    <th>Date of Birth</th>
                    <th>Events</th>
                    
                </tr>
                <tbody>
                    
                        <tr>
                            <td class="py-5">Abounore</td>
                            <td>K56215</td>
                            <td>32178326</td>
                            <td>ABOU@gmail.com</td>
                            <td>98/02/07</td>
                            <td><button class="btn btn-primary text-light"><img src="../assets/img/icons/view-iceblue.svg" alt=""> View </button></td>                 
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
</body>
<!-- ================== END core-js ================== -->
</html>