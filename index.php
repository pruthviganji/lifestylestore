<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle Store</title>
    </head>
    <body>
        <div id="wrapper">
        <?php
        require 'includes/header.php';
        ?>
        
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                    <a href="products.php" class="btn btn-danger btn-lg">Shop Now</a>
                </div>
            </div>
        </div>
        
        <?php
        require 'includes/footer.php';
        ?>
        </div>
    </body>
</html>