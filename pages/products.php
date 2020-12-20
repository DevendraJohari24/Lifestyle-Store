<?php
 require 'include/common.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../css/cascade.css" type="text/css">

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Products</title>
    </head>
    <body>
        <?php
        include 'include/header.php';
        include 'include/check_if_added.php';
        ?>
        <div class="container" style="margin-top: 90px">
            <div class="jumbotron">
                    <div>
                    <h2>Welcome to our Lifestyle Store!</h2>
                    <p>     We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                    </div>
            </div>
        </div>
        <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/5.jpg">
                    <img src="../image/5.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs.36000.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(1)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/2.jpg">
                    <img src="../image/2.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.40000.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(2)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/3.jpg">
                    <img src="../image/3.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs.50000.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(3)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/4.jpg">
                    <img src="../image/4.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price:Rs.80000.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(4)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/9.jpg">
                    <img src="../image/9.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>Titan Model#301</h3>
                        <p>Price:Rs.13000.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(5)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/10.jpg">
                    <img src="../image/10.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>Titan Model#201</h3>
                        <p>Price:Rs.3000.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(6)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/11.jpg">
                    <img src="../image/11.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price:Rs.8000.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(7)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/12.jpg">
                    <img src="../image/12.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>Faber Luba#111</h3>
                        <p>Price:Rs.18000.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(8)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
            
        
        </div>
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/8.jpg">
                        <img src="../image/8.jpg" alt="Camera" class="img-thumbnail" style="width: 100%; height: 23.5%; display: block">
                    <div class="caption">
                        <h3>H & W</h3>
                        <p>Price:Rs.800.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(9)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/6.jpg">
                    <img src="../image/6.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price:Rs.1000.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(10)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/13.jpg">
                    <img src="../image/13.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price:Rs.1500.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(11)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
             <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="../image/14.jpg">
                    <img src="../image/14.jpg" alt="Camera" class="img-thumbnail">
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price:Rs.1300.00</p>
                    </div>
                    </a>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                    ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php
                    } else { 
                        if (check_if_added_to_cart(12)) 
                        { 
                           echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                        } else 
                        { 
                     ?>
                    <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                    <?php
                           }
                        } 
                    ?>
                </div>
                
            </div>
            
        
        </div>
        </div>
        <?php
            include 'include/footer.php';
        ?>
    </body>
</html>
