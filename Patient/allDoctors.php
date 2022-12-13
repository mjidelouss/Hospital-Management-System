<?php
    include "../includes/autoloader.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content=""/>
    <meta name="author" content="" />
    <title>Dashboard</title>
    <!-- ================== BEGIN core-css ================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="../assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../styles/allDoctorstyle.css"/>
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
                        $sql = "SELECT * FROM patient";
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
                            <a href="dashboardPatient.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/home.svg" alt=""> Home</a>
                            <a href="allDoctors.php" class="list-group-item bg-info bg-opacity-50 border-3 border-blue border-end"><img src="../assets/img/icons/doctors.svg" alt=""> All Doctors</a>
                            <a href="ScheduleSession.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/session.svg" alt=""> Scheduled Sessions</a>
                            <a href="myBooking.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> My Bookings</a>
                            <a href="Settings.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/settings.svg" alt=""> Settings</a>
                        </div>
                </div>
            <!-- Page Content -->
        <div id="page-content-wrapper">
        <div class="d-flex justify-content-between">
            <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4">
                <div class="d-flex align-items-center" style="margin-top: 1rem;">
                    <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                        id="controlPanel" onclick="wrapside()"></i>
                        <h2 class="fs-2 m-0">All Doctors</h2>
                </div>
            </nav>
            <form method="POST">
                <div class="input-group d-flex" style="margin-top: 2.2rem;">
                    <div class="form-outline">
                    <img id="search-img" src="../assets/img/search.svg">
                        <input id="search-bar" type="search" name="searchDoc" placeholder="Search Doctor Name or Email" class="form-control"/>
                    </div>
                    <button type="submit" name="search" class="btn btn-primary ms-2 rounded">Search</button>
                  </form>
                </div>
            <div class="me-4 mt-4 d-flex">
                <div class="">
                <p class="" style="margin-top: 0.3rem;">Today's Date</p>
                <?php echo '<h4 class="fw-bold" style="margin-top: -1rem;">'.date("Y-m-d").'</h4>'?>
                 </div>
                 <div><img class="rounded p-2 border border-secondary ms-2" src="../assets/img/calendar.svg" alt=""></div>
               </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
            </div>
            <?php
            $db = new DbConnection;
            $sql = "SELECT COUNT(*) FROM doctor";
            $stmt = $db->connect()->query($sql);
            $row = $stmt->fetch();
            $docCount = $row['COUNT(*)'];
            echo '<h5 class="fw-bold ms-4 mt-3">All Doctors ('.$docCount.')</h5>';
            ?>
            <div class="container">
            <div class="col table-responsive mt-3 rounded">
                        <table class="table table-bordered bg-white rounded shadow-sm table-hover">
                            <thead class="">
                                <tr class="">
                                    <th scope="col" class="">Doctor Name</th>
                                    <th scope="col" class="">Email</th>
                                    <th scope="col" class="">Specialties</th>
                                    <th scope="col" class="text-center">Events</th>
                                </tr>
                            </thead>
                            <tbody id="doctor-table">
                            <?php
                            $doc = new Doctor;
                            if (isset($_POST['search'])) {
                                $doc->searchDoctor($_POST['searchDoc']);
                            }
                            else
                            {
                                $doc->displayDoctors();
                            }
                            ?>
</div>
<!-- VIEW MODAL -->
<div class="modal fade" id="modal-view">
            <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center" style="border: none;"></div>
                        <h1 class="text-center fw-bold">Details</h1>
                        <div class="modal-body">
                        <h5 class="text-info fw-bold">Name :</h5>
                        <h5 class="text-info fw-bold">Email :</h5>
                        <h5 class="text-info fw-bold">Specialties :</h5>
                        </div>
                        <div class="modal-footer" style="border: none">
                            <button type="button" class="btn btn-primary border rounded" data-bs-dismiss="modal">
                                OK
                            </button>
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