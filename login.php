<?php
    require 'includes/common.php';
    if(isset($_SESSION['emial'])){
        header('location: products.php');
    }
?>    
<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <title>Login | Lifestyle Store</title>
    </head>
    <body>
        <?php
            require 'includes/header.php';
        ?>
        <div class="container login">
            <div class="row">
                <div class="col-sm-offset-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <p>Login</p>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase.</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p>Don't have an account? <a href="signup.php">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require 'includes/footer.php';
        ?>  
    </body>
</html>