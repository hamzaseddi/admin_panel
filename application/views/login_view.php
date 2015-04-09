    <body class="login">
        <div class="container">
            <div class="row">
                <div class="login-box col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="header">
                        Admin panel
                    </div>
                    <form action="http://localhost/login/sing_in/" method="post">
                        <fieldset>
                            <div class="form-group first">
                                <div class="input-group col-sm-12">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control input-lg" id="username" name ="username" placeholder="Username"/>
                                </div>
                            </div>
                            <div class="form-group last">
                                <div class="input-group col-sm-12">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password"/>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-xs-12">Login</button>
                            <div class="row">
                                <div class="col-xs-12">
                                    <a class="center" href="#">Forgot Password?</a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- start: JavaScript-->
        <!--[if !IE]>-->
        <script src="assets/js/jquery-2.1.1.min.js"></script>
        <!--<![endif]-->
        <!--[if IE]>
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <![endif]-->
        <!--[if !IE]>-->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
        </script>
        <!--<![endif]-->
        <!--[if IE]>

        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
        </script>

        <![endif]-->
        <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- page scripts -->
        <!-- theme scripts -->
        <script src="assets/js/jquery.mmenu.min.js"></script>
        <script src="assets/js/core.min.js"></script>
        <!-- inline scripts related to this page -->
        <script src="assets/js/pages/login.js"></script>
        <script src="assets/plugins/jquery-cookie/jquery.cookie.min.js"></script>
        <script src="assets/js/demo.min.js"></script>
        <!-- end: JavaScript-->
    </body>
</html>
