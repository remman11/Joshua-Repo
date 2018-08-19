<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
        <title>TSMS &rsaquo; Register</title>

        <link rel="stylesheet" href="/others/stisla_admin_v1.0.0/dist/modules/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/others/stisla_admin_v1.0.0/dist/modules/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="/others/stisla_admin_v1.0.0/dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

        <link rel="stylesheet" href="/others/stisla_admin_v1.0.0/dist/css/demo.css">
        <link rel="stylesheet" href="/others/stisla_admin_v1.0.0/dist/css/style.css">
        <link rel="stylesheet" href="/others/stisla_admin_v1.0.0/dist/css/font.css">
        <link rel="stylesheet" href="/others/stisla_admin_v1.0.0/dist/modules/waves/waves.css">
        <link rel="stylesheet" href="/others/stisla_admin_v1.0.0/dist/css/bootstrap-social.css">
        <link rel="stylesheet" href="/others/stisla_admin_v1.0.0/dist/css/cssAll.css">
        <link rel="shortcut icon" href="/others/stisla_admin_v1.0.0/dist/img/tbLogo.png">
    </head>

    <body>
        <div id="app">
            <section class="section">
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                            <div class="login-brand">
                                <a href="index.html">
                                    <img id="footerLogo" src="/others/stisla_admin_v1.0.0/dist/img/tbPageLogoBlack.png" alt="Logo">
                                </a>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Register</h4></div>

                                <div class="card-body">
                                    <form method="POST">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="frist_name">First Name</label>
                                                <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="last_name">Last Name</label>
                                                <input id="last_name" type="text" class="form-control" name="last_name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="password" class="d-block">Password</label>
                                                <input id="password" type="password" class="form-control" name="password">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="password2" class="d-block">Password Confirmation</label>
                                                <input id="password2" type="password" class="form-control" name="password-confirm">
                                            </div>
                                        </div>

                                        <div class="form-divider">
                                            Your Home
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label>Country</label>
                                                <select class="form-control">
                                                    <option>Indonesia</option>
                                                    <option>Palestine</option>
                                                    <option>Syria</option>
                                                    <option>Malaysia</option>
                                                    <option>Thailand</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Province</label>
                                                <select class="form-control">
                                                    <option>West Java</option>
                                                    <option>East Java</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-6">
                                                <label>Postal Code</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                                <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block waves-effect">
                                                Register
                                            </button>
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <strong class="text-muted">&mdash; OR &mdash;</strong>
                                        <div class="text-center mt-3">
                                            <a class=" btn btn-google btn-block text-center text-white waves-effect">
                                                <i class="fab fa-google"></i>&nbsp;&nbsp; Sign in with Google
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 text-muted text-center">
                                Already have an account? <a href="login.html">Login</a>
                            </div>
                            <div class="simple-footer">
                                Copyright &copy; 2018 Team Tugboat
                                <p>
                                    Made with <i class="ion-heart"></i> By Development Team
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="/others/stisla_admin_v1.0.0/dist/modules/jquery.min.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/modules/popper.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/modules/tooltip.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/modules/bootstrap/js/bootstrap.min.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/modules/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/modules/scroll-up-bar/dist/scroll-up-bar.min.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/js/sa-functions.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/modules/waves/waves.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/js/scripts.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/js/custom.js"></script>
        <script src="/others/stisla_admin_v1.0.0/dist/js/demo.js"></script>
    </body>

</html>