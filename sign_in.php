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
        <title>Sign in</title>
    <!-- ================== BEGIN core-css ================== -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <!-- <link href="assets/css/default/app.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <!-- ================== END core-css ================== -->
  </head>

<body style="background-color: #f1f2f3">
<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
          Flowbite    
      </a>
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  Sign in to your account
              </h1>
              <form class="space-y-4 md:space-y-6" action="#">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                  </div>
                  <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      Don’t have an account yet? <a href="#" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
</body>
    <!-- ================== BEGIN core-js ================== -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
    <script src="scripts.js"></script>
    <!-- ================== END core-js ================== -->
</html>

<!-- <section>
       <div class="container py-5 h-100">
         <div class="row justify-content-center align-items-center">
           <div class="col-lg-12 col-xl-9">
             <div class="card text-black" style=" border-radius: 10px; height: 490px;">
               <div class="card-body p-md-5">
                 <div class="row justify-content-center">
                   <div class=" col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
     
                     <h1 class="text-center fw-bold mb-4 mx-1 mx-md-4 mt-4">Welcome Back!</h1>
                     <p class="text-center h6 text-muted mb-5 mx-1 mx-md-4 mt-4"> Login with your details to continue </p>

                   
                     <form  method="post"  data-parsley-validate >

                 To show errors is user put wrong data -->

                 <!-- <div class=" mb-4">
                 <i class="fa fa-address-card fa me-2 fa-fw pt-4"></i>
                 <label class="form-label fw-bold" for="Logemail ">Email address :</label>
                   <input type="email" id="Logemail" name="email" class="form-control form-control"  />
                 </div>
     
                 <div class=" mb-4">
                 <i class="fas fa-lock fa me-2 fa-fw pt-4"></i>
                 <label class="form-label fw-bold" for="lpassword">Password :</label>
                   <input type="password" id="lpassword" name="password" class="form-control form-control"  />
                   
                 </div>

                 <div class="pt-1 mb-4">
                   <button class="btn btn-primary btn btn-block container fluid " type="submit"  name="logIn" >Login</button>
                 </div>
     
                 <p class="text-center">Don't have an account? <a href="./sign_up.php" class="fw-bold text-black  text-decoration-none">Sign Up</a></p>
     
               </form>
     
                   </div>
                  
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section> -->