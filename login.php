<?php include('include/header.php'); ?>
            <div class="breadcrumb-container" style="margin-top:80px;">
                <div class="container">
                    <div class="row">
                       
                    </div>
                </div>
            </div>
            <div class="xs-margin half"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                       
                    </div>
                    <div class="xlg-margin visible-xs clearfix"></div>
                    <div class="col-sm-6 padding-left-md">
                     <!---  Login form Start here    --->
                        <form  action="index.php" method="post"  role="form"  id="login-form">
                            <h1>Login</h1>
                            <div class="form-group">
                                <label for="email" class="form-label">Enter your e-mail<span class="required">*</span>
                                </label>
                                <input type="email" name="email" id="email" class="form-control input-lg" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Enter your password<span class="required">*</span>
                                </label>
                                <input type="password" name="password" id="password" class="form-control input-lg" required>
                            </div><span class="help-block text-right"><a href="forgot.php">Forgot your password?</a></span>
                            <div class="xs-margin"></div>
                            <input type="submit" name="login"  class="btn btn-custom btn-lg min-width" value="Login">
                        </form>
                         <!---  Login form End here    --->
                    </div>
                    <div class="col-sm-3">
                       
                    </div>
                </div>
            </div>
            <div class="lg-margin2x"></div>
<?php include('include/footer.php'); ?>