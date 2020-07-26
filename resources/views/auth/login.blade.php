<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesbox.in/admin-templates/orbiter/html/semi-dark-vertical/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2020 22:00:27 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Orbiter - Bootstrap Minimal & Clean Admin Template</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Start css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">


                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-head">
                                            {{-- <a href="index.html" class="logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a> --}}
                                        </div>                                        
                                        <h4 class="text-primary my-4">Log in !</h4>
                                        <div class="form-group">
                                            <span style="float: left; color: black">Email</span>
                                            <input style="border-color:#9794af;" type="text" name="email" class="form-control" id="username" placeholder="Enter email here ..." required>
                                            @error('email')
                                                <span style="align-content: center; color:red">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                        <span style="float: left; color: black">Password</span>
                                            <input style="border-color:#9794af;" type="password" name="password" class="form-control" id="password" placeholder="Enter password here ..." required>
                                        </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox text-left">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Remember Me</label>
                                                </div>                                
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="forgot-psw"> 
                                                <a id="forgot-psw" href="password/reset" class="font-14">Forgot Password?</a>
                                              </div>
                                            </div>
                                        </div>                          
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log in</button>
                                    </form>

                                    {{-- <p class="mb-0 mt-3">Don't have a account? <a href="user-register.html">Sign up</a></p> --}}
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->        
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!-- End js -->
</body>

<!-- Mirrored from themesbox.in/admin-templates/orbiter/html/semi-dark-vertical/user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jun 2020 22:00:27 GMT -->
</html>