<!-- <?php
include 'scripts.php';
?> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register</title>
    <!-- ================== BEGIN core-css ================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <!-- ================== END core-css ================== -->
  </head>

<body style="background-color: #eee;">
   
   <section >
       <div class="container py-5 h-100">
         <div class="row justify-content-center align-items-center">
           <div class="col-lg-12 col-xl-11">
             <div class="card text-black" style=" border-radius: 10px; height: 690px;">
               <div class="card-body p-md-5">
                 <div class="row justify-content-center">
                   <div class=" col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
     
                     <h1 class="text-center fw-bold mb-4 mx-1 mx-md-4 mt-4">Let's Get Started</h1>
                     <p class="text-center h6 text-muted mb-5 mx-1 mx-md-4 mt-4"> Add your personal details to continue </p>

                   <form class="mx-1 mx-md-4" action="" method="post" >
      
                             <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">

                                <div class="col-md-6 d-flex flex-row align-items-center mb-4">
                                
                                <div class="flex-fill mb-0">
                                    <i class="fas fa-user fa me-3 fa-fw pt-4 " ></i>
                                        <label class="form-label fw-bold" for="fname">First name:</label>
                                        <input type="text" name="Firstname"  id="fname" class="form-control" /> 
                                    </div>

                                    </div>
                                    <div class="col-md-6 d-flex flex-row align-items-center mb-4">
                                        
                                        <div class="flex-fill mb-0">
                                            <i class="fas fa-user fa me-3 fa-fw pt-4 "></i>
                                          <label class="form-label fw-bold" for="lname">Last name:</label>
                                        <input type="text" name="Lastname" id="lname" class="form-control" />
                                        
                                    </div>

                                    </div>
                                </div>
                                <div class=" mb-4">
                                    <i class="fas fa-home fa me-2 fa-fw pt-4"></i>
                                    <label class="form-label fw-bold" for="address ">Address :</label>
                                      <input type="text" id="address" name="address" class="form-control form-control"/>
                                    </div>

                                    <div class=" mb-4">
                                        <i class="fa fa-address-card fa me-2 fa-fw pt-4"></i>
                                        <label class="form-label fw-bold" for="CIN ">CIN :</label>
                                          <input type="CIN" id="CIN" name="CIN" class="form-control form-control"  />
                                        </div>
                        
                                    <div class=" mb-4">
                                    <i class="fas fa-calendar fa me-2 fa-fw pt-4"></i>
                                    <label class="form-label fw-bold" for="date">date of Birth :</label>
                                      <input type="date" id="lpassword" name="date" class="form-control form-control" />
                                      
                                    </div>
                   
                                    <div class="pt-1 mb-4 row justify-content-between">
                                      <button class="btn btn-primary btn btn-block col-5 " type="submit"  name="register" >Register</button>
                                      <button class="btn btn-primary btn btn-block col-5 " type="submit"  name="register" >Next</button>
                                    </div>
                        
                                    <p class="text-center">Already have an account? <a href="" class="fw-bold text-black  text-decoration-none">Log in</a></p>

          
                          </form>
     
                   </div>
                  
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>   
</body>
    <!-- ================== BEGIN core-js ================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
    <!-- ================== END core-js ================== -->
</html>