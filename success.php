<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
    $user_id = $_SESSION['user_id'];
    $items_ids_string = $_GET['item_id'];
    //$query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
    //mysqli_query($con, $query) or die(mysqli_error($con));
?>
<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>Success | Lifestyle Store</title>
     </head>
     <body>
         <?php require 'includes/header.php'; ?>
         <div class="container-fluid" id="success">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
         </div>
         <?php require 'includes/footer.php'; ?>
     </body>
</html>