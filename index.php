<!-- Cash'n'carry ecommerce website 3rd Semester Web development Project
Author - Dinesh Kumar -->

<?php require 'partials/_connectdb.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash'N'Carry: E-commerce Website</title>
    <link rel="icon" href="img/6.png" type="image/icon type">

    <!-- Css Files -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="responsive.css?v=<?php echo time(); ?>">

    <!-- owl Carousel Css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
</head>

<body>
    <!----------------------------- Loader ----------------------------->
    <div id="loader"></div>

    <!-- all the contents of this page in this section -->
    <div class="content">
        <?php require 'partials/_header.php'; ?>

        <!----------------------------- Slider ----------------------------->
        <div class="owl-carousel owl-theme category-slider">
            <div class="slider-item">
                <div class="image">
                    <img src="img/groceries_staples.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Grocery">Grocery & Staples</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/vegetables.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Vegetables">Vegetables & Fruits</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/personal_care.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Personalcare">Personal Care</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/household.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Household">Household Items</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/kitchen.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Kitchen">Kitchen Items</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/snacks.jpg" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Snacks">Snacks & Chocolates</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/beverages.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Beverages">Beverages</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/groceries_staples.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Noodles">Noodles, Sauces & Instant Food</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/breakfast.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Breakfast">Breakfast & Dairy</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/groceries_staples.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Bestvalue">Best Value</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/petcare.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Pet">Pet Care</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/babycare.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Baby">Baby Care</a>
                </div>
            </div>

            <div class="slider-item">
                <div class="image">
                    <img src="img/cleaning.png" alt="">
                </div>
                <div class="slider-item-title">
                    <a href="Products.php?category=Cleaning">Cleaning & Bathroom Essentials</a>
                </div>
            </div>
        </div>
        <div class="owl-nav slider-btns">
            <div class="customPrevBtn prev"><i class="fas fa-chevron-left"></i></div>
            <div class="customNextBtn next"><i class="fas fa-chevron-right"></i></div>
        </div>

        <!------------------------------- Main section ------------------------------->
        <section class="main">
            <div class="main-container">
                <div class="vector">
                    <img src="img/main-vector.png" alt="Vector">
                </div>
                <div class="greetingMsg">
                    <h1>Hello
                        <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        echo $_SESSION['username'];
                    } else {
                        echo 'there!';
                    }
                    ?>
                    </h1>
                    <h2>Welcome to <span>Cash'N'Carry</span></h2>
                    <div class="services">
                        <div class="service">
                            <img src="img/savings.png" alt="Savings">
                            <h4>Best Savings</h4>
                        </div>
                        <div class="service">
                            <img src="img/delivery.png" alt="Delivery">
                            <h4>All time Delivery</h4>
                        </div>
                        <div class="service">
                            <img src="img/freshproducts.png" alt="qualityProducts">
                            <h4>Fresh Products</h4>
                        </div>
                        <div class="service">
                            <img src="img/service.jpg" alt="Services">
                            <h4>Best Service</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!------------------------ shop by category section ------------------------>
        <section class="category">
            <h1>Shop By Category</h1>
            <div class="category-container">
                <div class="category-item">
                    <div class="category-img">
                        <img src="img/groceries_staples.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 50% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Grocery">Grocery & Staples</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/vegetables.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 15% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Vegetables">Vegetables & Fruits</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/personal_care.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 5% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Personalcare">Personal Care</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/household.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 0% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Household">Household Items</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/kitchen.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 10% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Kitchen">Kitchen Items</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/cleaning.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 25% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Cleaning">Cleaning & Bathroom
                                Essentials</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/breakfast.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 5% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Breakfast">Breakfast & Dairy</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/petcare.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 20 OFF</p>
                        <p class="category-name"><a href="Products.php?category=Pet">Pet Care</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/babycare.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 4% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Baby">Baby Care</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>

            <!-------------------- Category Container Slider -------------------->
            <div class="owl-carousel owl-theme category-container-slider">
                <div class="category-item">
                    <div class="category-img">
                        <img src="img/groceries_staples.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 50% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Grocery">Grocery & Staples</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/vegetables.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 15% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Vegetables">Vegetables & Fruits</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/personal_care.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 5% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Personalcare">Personal Care</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/household.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 0% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Household">Household Items</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/kitchen.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 10% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Kitchen">Kitchen Items</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/cleaning.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 25% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Cleaning">Cleaning & Bathroom
                                Essentials</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/breakfast.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 5% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Breakfast">Breakfast & Dairy</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/petcare.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 20 OFF</p>
                        <p class="category-name"><a href="Products.php?category=Pet">Pet Care</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>

                <div class="category-item">
                    <div class="category-img">
                        <img src="img/babycare.png" alt="groceries_staples">
                    </div>
                    <div class="category-detail">
                        <p class="offer">UP TO 4% OFF</p>
                        <p class="category-name"><a href="Products.php?category=Baby">Baby Care</a></p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <div class="owl-nav category-slider-btns">
                <div class="PrevBtn pv"><i class="fas fa-chevron-left"></i></div>
                <div class="NextBtn nt"><i class="fas fa-chevron-right"></i></div>
            </div>
        </section>

        <!---------------------------- products section ---------------------------->
        <section class="products">
            <h1>Products</h1>
            <div class="product-cate">
                <h2>Groceries & Staple Products <span>Swipe <i class="fas fa-chevron-right"></i><i
                            class="fas fa-chevron-right"></i></span></h2>
                <div class="cate-products owl-carousel owl-theme">
                    <?php
                    $category = 'Grocery';
                    $sql  = "SELECT * FROM `products` WHERE `pcategory`='$category'  LIMIT 5";
                    $result = mysqli_query($conn, $sql);

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
                            echo '<div class="prdct">
                                                <p class="seeMore"><a href="Products.php?category='.$category.'">See all<i class="fas fa-angle-double-right"></i></a></p>
                                        </div>';
                    }
                ?>
                </div>
            </div>

            <div class="product-cate">
                <h2>Personal Care <span>Swipe <i class="fas fa-chevron-right"></i><i
                            class="fas fa-chevron-right"></i></span></h2>
                <div class="cate-products owl-carousel owl-theme">
                    <?php
                    $category = 'Personalcare';
                    $sql  = "SELECT * FROM `products` WHERE `pcategory`='$category'  LIMIT 5";
                    $result = mysqli_query($conn, $sql);

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
                            echo '<div class="prdct">
                                                <p class="seeMore"><a href="Products.php?category='.$category.'">See all<i class="fas fa-angle-double-right"></i></a></p>
                                        </div>';
                    }
                ?>
                </div>
            </div>

            <div class="product-cate">
                <h2>Cleaning & Bathroom Essentials <span>Swipe <i class="fas fa-chevron-right"></i><i
                            class="fas fa-chevron-right"></i></span></h2>
                <div class="cate-products owl-carousel owl-theme">
                    <?php
                    $category = 'Cleaning';
                    $sql  = "SELECT * FROM `products` WHERE `pcategory`='$category'  LIMIT 5";
                    $result = mysqli_query($conn, $sql);

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
                            echo '<div class="prdct">
                                                <p class="seeMore"><a href="Products.php?category='.$category.'">See all<i class="fas fa-angle-double-right"></i></a></p>
                                        </div>';
                    }
                ?>
                </div>
            </div>
        </section>

        <!----------------------- Download App Section ----------------------->
        <section class="downloadApp">
            <div class="phone">
                <img src="img/app.png" alt="App-preview">
            </div>
            <div class="app-links">
                <h1><span>Cash'N'Carry</span> is now Available on both Google Playstore and Apple Store</h1>
                <h2>Download the App Now</h2>

                <div class="stores">
                    <a href=""><img src="img/playstore.png" alt="playstore"></a>
                    <a href=""><img src="img/appstore.png" alt="appstore"></a>
                </div>
            </div>
        </section>

        <?php require 'partials/_productSpecs.php'; ?>

        <?php require 'partials/_footer.php'; ?>

    </div>

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