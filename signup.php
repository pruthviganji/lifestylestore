<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>
<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>Sign Up | Lifestyle Store</title>
    </head>
    <body>
        <?php
            require 'includes/header.php';
        ?>
        <div class="container" id="signup">
            <div class="row">
                <div class="col-sm-offset-4 col-sm-4">
                    <form method="POST" action="signup_script.php">
                        <h2>Sign Up</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="contact" placeholder="Contact">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Sign Up</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
        <?php
            require 'includes/footer.php';
        ?>
        
    </body>
</html>