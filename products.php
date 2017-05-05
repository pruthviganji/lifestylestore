<?php
    require 'includes/common.php';
?>
<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <title>Products</title>
    </head>
    <body>
        <?php
            require 'includes/header.php';
            require 'includes/check-if-added.php';
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row" id="products">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/canon.jpg" alt="canon">
                        <h3>Canon EOS</h3>
                        <p>Price: Rs.36000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(1)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=1" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/sony1.jpg" alt="cam">
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs. 40000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(2)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=2" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/sony2.jpg" alt="cam">
                        <h3>Sony DSLR</h3>
                        <p>Price: Rs. 50000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(3)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=3" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/olympus.jpg" alt="cam">
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs. 60000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(4)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=4" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
            </div>
            <div class="row" id="products">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/titan1.jpg" alt="canon">
                        <h3>Titan Model #301</h3>
                        <p>Price: Rs. 13000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(5)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=5" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/titan2.jpg" alt="cam">
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs. 3000.00</p>
                       <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(6)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=6" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/hmt.jpg" alt="cam">
                        <h3>HMT Milan</h3>
                        <p>Price: Rs. 8000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(7)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=7" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/faber.jpg" alt="cam">
                        <h3>Faber Luba #111</h3>
                        <p>Price: Rs. 18000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(8)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=8" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
            </div>
            <div class="row" id="products">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt1.jpg" alt="canon">
                        <h3>H&W</h3>
                        <p>Price: Rs. 800.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(9)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=9" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt2.jpg" alt="cam">
                        <h3>Luis Phill</h3>
                        <p>Price: Rs. 1000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(10)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=10" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt3.jpg" alt="cam">
                        <h3>John Zok</h3>
                        <p>Price: Rs. 1500.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(11)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=11" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt4.gif" alt="cam">
                        <h3>Jhalsani</h3>
                        <p>Price: Rs. 1300.00</p>
                        <?php
                        if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        } else {
                            if(check_if_added_to_cart(12)){
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else {
                                ?>
                        <a href="cart-add.php?id=12" name="add" class="btn btn-primary btn-block">Add to cart</a>
                          <?php  }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>