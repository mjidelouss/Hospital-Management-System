<?php
    include "../includes/autoloader.php";
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
    <link rel="stylesheet" href="../styles/doctorstyle.css"/>
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
                            <a href="doctor.php" class="list-group-item bg-info bg-opacity-50 border-3 border-blue border-end"><img src="../assets/img/icons/doctors.svg" alt=""> Doctors</a>
                            <a href="Schedule.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/schedule.svg" alt=""> Schedule</a>
                            <a href="appointment.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/book.svg" alt=""> Appointment</a>
                            <a href="patient.php" class="list-group-item bg-transparent"><img src="../assets/img/icons/patients.svg" alt=""> Patient</a>
                        </div>
                </div>
            <!-- Page Content -->
        <div id="page-content-wrapper">
        <div class="d-flex justify-content-between">
            <nav class="navbar navbar-expand-lg bg-transparent py-4 px-4">
                <div class="d-flex align-items-center" style="margin-top: 1rem;">
                    <i class="fas fa-bars primary-text fs-4 me-3" style="color: black; cursor: pointer;"
                        id="controlPanel" onclick="wrapside()"></i>
                        <h2 class="fs-2 m-0">Doctors</h2>
                </div>
            </nav>
            <form method="POST">
                <div class="input-group d-flex" style="margin-top: 2.2rem;">
                    <div class="form-outline">
                    <img id="search-img" src="../assets/img/search.svg">
                        <input id="search-bar" type="search" name="searchDoctor" placeholder="Search Doctor Name or Email" class="form-control"/>
                    </div>
                    <button type="submit" name="searchDoc" class="btn btn-primary ms-2 rounded">Search</button>
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
            <h4 class="fw-bold ms-4 mt-3">Add New Doctor</h4>
            <button class="px-4 text-white rounded-pill bg-primary border border-none me-4" data-bs-toggle="modal" data-bs-target="#modal-doctor">
              <i class="bi bi-plus-lg me-2"></i>Add New
            </button>
            </div>
            <?php
            $doct = new Doctor;
            $doct->countDoctors();
            ?>
            <div class="container">
            <div class="col table-responsive mt-3 rounded">
                        <table class="table table-bordered bg-white rounded shadow-sm table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="">Doctor Name</th>
                                    <th scope="col" class="">Email</th>
                                    <th scope="col" class="">Specialties</th>
                                    <th scope="col" class="text-center">Events</th>
                                </tr>
                            </thead>
                            <tbody id="doctor-table">
                            <?php
                            if (isset($_POST['save']))
                            {
                                $admin = new Admin;
                                $admin->createDoctor($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['speciality'], $_POST['pass']);
                            }
                            $doc = new Doctor;
                            if (isset($_POST['update']))
                            {
                                $doc->updateDoctor($_POST['docId'], $_POST['editFirstName'], $_POST['editLastName'], $_POST['editEmail'], $_POST['editPassword'], $_POST['editSpeciality']);
                            }
                            if (isset($_POST['searchDoc'])) {
                                $doc->searchDoctors($_POST['searchDoctor']);
                            }
                            else
                            {
                                $doc->displayDoctor();
                            }
                            ?>
</div>
<!-- DOCTOR MODAL -->
<div class="modal fade" id="modal-doctor">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" id="form-doctor">
                <div class="modal-header d-flex justify-content-center" style="background-color: #f1f2f3; border: none;">
                    <img src="../assets/img/user.png" class="rounded-circle" width="70" alt="Image Not Found">
                </div>
                <div class="modal-body" style="background-color: #f1f2f3;">
                    <div class="" id="">
                        <label class="col-form-label text-black">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required />
                </div>
                <div class="" id="">
                    <label class="col-form-label text-black">Last Name</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" required />
                </div>
                <div class="" id="">
                    <label class="col-form-label text-black">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required />
                </div>
                <div class="" id="">
                    <label class="col-form-label text-black">Speciality</label>
                    <input type="text" class="form-control" id="speciality" name="speciality" required />
                </div>
                <div class="" id="">
                    <label class="col-form-label text-black">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" required />
                </div>
                </div>
                <div class="modal-footer" style="background-color: #f1f2f3; border: none">
                    <button type="button" class="btn btn-primary border rounded-pill" data-bs-dismiss="modal">Cancel
                    </button>
                    <button type="submit" class="btn btn-danger rounded-pill text-white" name="save" id="save">Save
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
<!-- EDIT MODAL -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" id="form-edit">
                <div class="modal-header d-flex justify-content-center" style="background-color: #f1f2f3; border: none;">
                    <img src="../assets/img/user.png" class="rounded-circle" width="70" alt="Image Not Found">
                </div>
                <div class="modal-body" style="background-color: #f1f2f3;">
                    <div class="" id="">
                        <input type="text" id="docId" name="docId" style="display: none">
                        <label class="col-form-label text-black">First Name</label>
                        <input type="text" class="form-control" id="editFirstName" name="editFirstName"/>
                </div>
                <div class="" id="">
                    <label class="col-form-label text-black">Last Name</label>
                    <input type="text" class="form-control" id="editLastName" name="editLastName"/>
                </div>
                <div class="" id="">
                    <label class="col-form-label text-black">Email</label>
                    <input type="text" class="form-control" id="editEmail" name="editEmail"/>
                </div>
                <div class="" id="">
                    <label class="col-form-label text-black">Speciality</label>
                    <input type="text" class="form-control" id="editSpeciality" name="editSpeciality"/>
                </div>
                <div class="" id="">
                    <label class="col-form-label text-black">Password</label>
                    <input type="password" class="form-control" id="editPassword" name="editPassword" required/>
                </div>
                </div>
                <div class="modal-footer" style="background-color: #f1f2f3; border: none">
                    <button type="button" class="btn btn-primary border rounded-pill" data-bs-dismiss="modal">Cancel
                    </button>
                    <button type="submit" class="btn btn-success rounded-pill text-white" name="update">Update
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
<!-- VIEW MODAL -->
<div class="modal fade" id="modal-view">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #f1f2f3;">
                        <div class="modal-header d-flex justify-content-center" style="background-color: #f1f2f3; border: none;"></div>
                        <h1 class="text-center fw-bold">Details</h1>
                        <div class="modal-body" id="view-body" style="background-color: #f1f2f3;">
                        </div>
                        <div class="modal-footer" style="background-color: #f1f2f3; border: none">
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
<!-- ================== END core-js ================== -->
</body>
</html>