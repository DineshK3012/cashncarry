<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="icon" href="img/6.png" type="image/icon type">

    <!-- Css Files -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="responsive.css?v=<?php echo time(); ?>">

    <!-- owl Carousel Css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
</head>

<body>
    <?php require 'partials/_header.php'; ?>

    <!-------------------------- sticky category div -------------------------->
    <div class="stickyDiv">
        <div class="prdct-head">
            <p>Product/Categories</p>
        </div>
        <div class="prdct-cates">
            <div class="prdct-cates-item">
                <a href="Products.php?category=Grocery">Grocery</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Personalcare">Personal</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Breakfast">Breakfast</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Vegetables">Vegetables</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Household">Household</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Kitchen">Kitchen</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Snacks">Snacks</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Beverages">Beverages</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Baby">Baby</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Pet">Pet</a>
            </div>
            <div class="prdct-cates-item">
                <a href="Products.php?category=Cleaning">Cleaning</a>
            </div>
        </div>
    </div>

    <!------------------------ products of the category ------------------------>
    <div class="category-products">
        <?php 
            echo '<h1>';

            if(isset($_GET['category']))
            {
                echo 'Products/Categories/'.$_GET['category']; 
            }
            else if(isset($_GET['search']))
            {
                echo "Search Results";
            }else{
                echo "all";
            } 
            
            echo '<span></span></h1>';
        ?>
        <div class="cate-products">
            <?php
                require 'partials/_connectdb.php';

                if(isset($_GET['search']))
                {
                    $svalue = $_GET['search'];

                    $sql  = "SELECT * FROM `products`";
                    $result = mysqli_query($conn, $sql);

                    //find the number of records returned
                    $num = mysqli_num_rows($result);
                    if($num > 0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            if(is_int(stripos($row['pname'], $svalue)) || is_int(stripos($row['pcategory'], $svalue)))
                            {
                                echo '<div class="prdct">
                                    <div class="prdct-img">
                                            <img src="' . $row['src1'] . '" alt="product-image">
                                    </div>
                                    <div class="prdct-details">
                                        <div>
                                            <p class="prdct-name">' . $row['pname'] . '</p>
                                            <p class="prdct-unit">' . $row['punit'] . '</p>
                                        </div>
                                        <p class="prdct-price">₹' . $row['pprice'] . '</p>
                                    </div>
                                    <input type="hidden" name="pqn" value="1"></input>
                                    <input type="hidden" name="pstock" class="pstock" value="'.$row['pstock'] .'"></input>      
                                    <button class="atc" onclick="atc(this)">Add to Cart</button>
                                    <div class="prdct-desc" onclick="showProductSpecs()">
                                        <input type="hidden" name="proid" class="proid" value="' . $row['pid'] . '"></input>
                                        <a href="#product-specs" class="showprdct" onclick="showproduct(this)">View</a>
                                    </div>
                                </div>';
                            }
                        }
                    }
                }
                else if(isset($_GET['category']))
                {
                    $category = $_GET['category'];

                    $sql  = "SELECT * FROM `products` WHERE `pcategory`='$category'";
                    $result = mysqli_query($conn, $sql);

                    //usage of where clause to fetch data from the database
                    //find the number of records returned
                    $num = mysqli_num_rows($result);

                    //displaying the rows returned by the sql query
                    if ($num > 0) {
                        //now fetching using while loop
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="prdct">
                                    <div class="prdct-img">
                                            <img src="' . $row['src1'] . '" alt="product-image">
                                    </div>
                                    <div class="prdct-details">
                                        <div>
                                            <p class="prdct-name">' . $row['pname'] . '</p>
                                            <p class="prdct-unit">' . $row['punit'] . '</p>
                                        </div>
                                        <p class="prdct-price">₹' . $row['pprice'] . '</p>
                                    </div>
                                    <input type="hidden" name="pqn" value="1"></input>
                                    <input type="hidden" name="pstock" class="pstock" value="'.$row['pstock'] .'"></input>      
                                    <button class="atc" onclick="atc(this)">Add to Cart</button>
                                    <div class="prdct-desc" onclick="showProductSpecs()">
                                        <input type="hidden" name="proid" class="proid" value="' . $row['pid'] . '"></input>
                                        <a href="#product-specs" class="showprdct" onclick="showproduct(this)">View</a>
                                    </div>
                                </div>';
                        }
                    }
                }else
                {
                    $sql  = "SELECT * FROM `products`";
                    $result = mysqli_query($conn, $sql);
                    
                    //usage of where clause to fetch data from the database
                    //find the number of records returned
                    $num = mysqli_num_rows($result);

                    //displaying the rows returned by the sql query
                    if ($num > 0) {
                        //now fetching using while loop
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="prdct">
                                    <div class="prdct-img">
                                            <img src="' . $row['src1'] . '" alt="product-image">
                                    </div>
                                    <div class="prdct-details">
                                        <div>
                                            <p class="prdct-name">' . $row['pname'] . '</p>
                                            <p class="prdct-unit">' . $row['punit'] . '</p>
                                        </div>
                                        <p class="prdct-price">₹' . $row['pprice'] . '</p>
                                    </div>
                                    <input type="hidden" name="pqn" value="1"></input>
                                    <input type="hidden" name="pstock" class="pstock" value="'.$row['pstock'] .'"></input>      
                                    <button class="atc" onclick="atc(this)">Add to Cart</button>
                                    <div class="prdct-desc" onclick="showProductSpecs()">
                                        <input type="hidden" name="proid" class="proid" value="' . $row['pid'] . '"></input>
                                        <a href="#product-specs" class="showprdct" onclick="showproduct(this)">View</a>
                                    </div>
                                </div>';
                        }
                    }
                }
            ?>
        </div>
    </div>

    <?php require 'partials/_productSpecs.php'; ?>

    <?php require 'partials/_footer.php'; ?>

    <!------------------------ Script Section ------------------------>

    <!--------------- Font Awesome Script --------------->
    <script src="https://kit.fontawesome.com/76448c9004.js" crossorigin="anonymous"></script>

    <!-- Jquery & owl Carousel Javascript-->
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/owl.carousel.js"></script>

    <!------------------------ Slider js ------------------------>
    <script src="js/owlSlider.js"></script>

    <!------------------- My Js ------------------->
    <script src="scriptJQ.js"></script>
    <script src="index.js"></script>
</body>

</html>