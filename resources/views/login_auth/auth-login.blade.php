<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Wiser | CRM Dashboard </title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/datum/html/assets/images/favicon.ico" />
      
      <link rel="stylesheet" href="{{asset('assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/backende209.css?v=1.0.0')}}">  
   </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
    <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-md-5">
                  <div class="card p-3">
                     <div class="card-body">
                     
                     @if ($message = Session::get('unsuccess'))
                    <div class="alert alert-danger alert-block">
                     <strong>{{ $message }}</strong>&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="close" data-dismiss="alert">x</button> 
                      </div>
                    @endif

                        <div class="auth-logo">
                           <img src="../assets/images/logo.png" class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                           <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal light-logo" alt="logo">
                        </div>
                        <h3 class="mb-3 font-weight-bold text-center">Sign In</h3>
                        <p class="text-center text-secondary mb-4">Log in to your account to continue</p>
                        <div class="social-btn d-flex justify-content-around align-items-center mb-4">
                           


                        <form method="post" action="auth">
                           @csrf
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="form-group">
                                    <label class="text-secondary"> Email </label>
                                    <input class="form-control" type="email" name="email" placeholder="Enter Email" required>
                                 </div>
                              </div>
                              <div class="col-lg-12 mt-2">
                                 <div class="form-group">
                                     <div class="d-flex justify-content-between align-items-center">
                                         <label class="text-secondary">Password</label>
                                         <label><a href="auth-recover-pwd.html">Forgot Password?</a></label>
                                     </div>
                                    <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                                 </div>   
                              </div>
                           </div>
                           <button type="submit" class="btn btn-primary btn-block mt-2" name="submit">Log In</button>
                         
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <script src="../assets/js/sidebar.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    <script src="../assets/js/charts/01.js"></script>
    <script src="../assets/js/charts/02.js"></script>
    
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    
    <!-- Emoji picker -->
    <script src="../assets/vendor/emoji-picker-element/index.js" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>  </body>


</html>
