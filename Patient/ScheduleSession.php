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
                            <a href="admin.html" class="list-group-item bg-transparent"><img src="../assets/img/icons/home.svg" alt=""> Home</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/doctors.svg" alt=""> All Doctors</a>
                            <a href="#" class="list-group-item bg-transparent text-blue-500 border-3 border-blue border-end "><img src="../assets/img/icons/session-iceblue.svg" alt=""> Scheduled Sessions</a>
                            <a href="#" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> My Bookings</a>
                            <a href="#" class="list-group-item bg-transparent "><img src="../assets/img/icons/settings.svg" alt=""> Settings</a>
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
                <div class=" p-1 ms-4 fs-4 fw-800 " >
                        
                    <form class="d-flex" role="search">
                        <input class="form-control me-2  " type="search" placeholder="Search" aria-label="Search" style=" width:40vw;   ">
                        <button class="btn btn-outline-blue" type="submit">Search</button>
                      </form>
                        
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
            <div class="container-fluid ">
                <h4> All Sessions( 1 ) </h4>
               <div class=" p-3 border-1 border rounded-2">
                 
                <div>
                 <h1 class=" text-blue-600"> Test Session </h1>
                 <h5> Test Doctor</h5>
                 <span> 2050-01-01</span>
                 <p>Starts: <b> @18:00</b> (24h)</p>
                 <a href="#" class="d-flex justify-content-center fs-5 fw-800 text-blue-700 list-group-item d-flex  bg-blue-100 rounded-2 "> Book Now </a>
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