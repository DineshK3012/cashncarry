<?php   
    session_start();
    require '_connectdb.php';

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
        $username = $_SESSION['username'];
        $fci  = "SELECT * FROM `ucart` WHERE `username`= '$username'";
        $resultfci = mysqli_query($conn, $fci);
    
        //find the number of records returned
        $num = mysqli_num_rows($resultfci);

        $_SESSION['count'] = $num;
    }else
    {
        $_SESSION['count'] = 0;
    }

    echo '
    <!------------------------------ Navigation Bar ------------------------------>
    <nav class="nav-bar">
        <div class="menu">
            <i class="fas fa-bars menu-btn" onclick="showMenu()"></i>
        </div>
        <div class="menu-items menu-open" id="menu-bar">
            <div class="logo">
                <a href="index.php"><img src="img/4.png" alt="LOGO_Cash\'N\'Carry"></a>
            </div>
            <h3>Welcome</h3>
            <i class="fas fa-times" onclick="hideMenu()"></i>
            <ul>';
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
                    echo '<li onclick="showProfile()"><a href="#"><i class="fas fa-user-alt"></i> &nbsp;My Profile</a></li>';
                    echo '<li class="logout"><a><i class="fas fa-user"></i> &nbsp;Logout</a></li>'; 
                }
                else{
                    echo '<li onclick="showlsForm()"><a href="#"><i class="fas fa-user"></i> &nbsp;Login</a></li>';
                } 
          echo '<li onclick="cartSlide()"><a href="#"><i class="fas fa-shopping-cart"></i> &nbsp;My Cart</a></li>
                <li><a href="orderspage.php"><i class="fas fa-gift"></i> &nbsp;My Orders</a></li>
                <li onclick="showProfile()"><a href="#"><i class="fas fa-map-marked-alt"></i> &nbsp;My Address</a>
                </li>
                <li><a href="#"><i class="fas fa-percent"></i> &nbsp;Offers</a></li>
            </ul>
        </div>

        <div class="logo">
            <a href="index.php"><img src="img/4.png" alt="LOGO_Cash\'N\'Carry"></a>
        </div>

        <div class="search">
                <form action="Products.php" method="GET" class="search-bar">
                    <input type="search" name="search" placeholder="Search for products">
                    <button type="submit"><i class="fas fa-search" id="sbtn"></i></button>
                </form>
        </div>

        <div class="user">
            <span onclick="dropdownMenu()">
                <h2>My Account </h2>
                <p>Login/SignUp <i class="fas fa-angle-down"></i></p>
            </span>
            <div class="dropdown-usermenu" id="dd-Menu">';

            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
            {
                echo '<div class="dropdown-item"><button class="ls-btn"
                        onclick="showProfile(),dropdownMenu()">Profile</button></div>';
                echo '<div class="dropdown-item logout"><button class="ls-btn">Logout</button></div>';
            }
            else{
                echo '<div class="dropdown-item"><button class="ls-btn" onclick="showlsForm()">Login/Signup</button></div>';
            }
                
            echo '<div class="dropdown-item"><i class="far fa-question-circle"></i> FAQ</div>
                <div class="dropdown-item"><i class="fas fa-percent"></i> Offers</div>
            </div>
        </div>

        <div class="cart">
            <h2 onclick="cartSlide()"><i class="fas fa-shopping-cart"><span class="count">'.$_SESSION['count'].'</span></i> <span>My Cart</span></h2>
        </div>
    </nav>

    <div id="modal-bg">
    </div>

    <!-- sliding cart -->
    <div class="cart-slide" id="sliding-cart">
        <div class="top">
            <h2>My Cart<span></span><i class="fas fa-times" onclick="cartSlide()"></i></h2>
        </div>

        <div class="cart-items">';
           require 'partials/_cart.php';
        echo '</div>

        <div class="bottom">
            <p>Promo code can be applied on payment page</p>
            <form action="_pay.php" method="post">
                <input type="hidden" name="totalAmount" class="totalAmount" value=""></input>
                <button class="proceed-btn" type="submit">Proceed to Checkout<div><b>₹</b><span class="tamount">570</span><i
                            class="fas fa-chevron-right"></i></div>
                </button>
            </form>
        </div>
    </div>

    <!------------------------------ user profile ------------------------------>
    <div class="profile-container">
        <i class="fas fa-times" onclick="showProfile()"></i>
        <h1><i class="fas fa-user-alt"></i> Profile</h1>';
        
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
        {
            echo '<div class="user">
                    <div class="user-vector">';
                        if($_SESSION['gender']== 'male')
                        {
                            echo '<img src="img/muser.png" alt="user-vector">';
                        }
                        else{
                            echo '<img src="img/fuser.png" alt="user-vector">';
                        }
                        echo '<p>'.$_SESSION['username'].'</p>
                    </div>
                    <div class="info">
                        <i class="fas fa-user-edit editbtn"></i>
                        <div class="row">
                            <div class="label">
                                Username
                            </div>
                            <div class="input">
                                '.$_SESSION['username'].'
                            </div>
                        </div>

                        <div class="row">
                            <div class="label">
                                Gender
                            </div>
                            <div class="input">
                                '.$_SESSION['gender'].'
                            </div>
                        </div>

                        <div class="row">
                            <div class="label">
                                Email
                            </div>
                            <div class="input">
                                '.$_SESSION['email'].'
                            </div>
                        </div>

                        <div class="row">
                            <div class="label">
                                Phone No.
                            </div>
                            <div class="input">
                                +91 '.$_SESSION['phone'].'
                            </div>
                        </div>

                        <div class="row">
                            <div class="label">
                                Address
                            </div>
                            <div class="input">
                                '.$_SESSION['address'].'
                            </div>
                        </div>
                        
                        <!-- Editing Profile section -->
                        <div class="eprofile">
                            <i class="fas fa-reply bbtn"></i>
                            <h1>Edit Profile</h1>
                            <input type="text" name="username" class="username" value="'.$_SESSION['username'].'" readonly>

                            <select name="gender" id="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>

                            <input type="email" name="email" id="email" value="'.$_SESSION['email'].'">

                            <input type="tel" name="phone" id="phone" value="'.$_SESSION['phone'].'">

                            <input type="text" name="address" id="address" value="'.$_SESSION['address'].'">

                            <input type="button" value="Save" id="savepbtn">
                        </div>
                    </div>
                </div>';

            echo '';
        }

    echo '<div class="btns">
            <button class="myOrders-btn" onclick="showProfile()"><a href="orderspage.php"><i class="fas fa-gift"></i> &nbsp;My Orders</a></button>
            <button class="myCart-btn" onclick="cartSlide(),showProfile()"><i class="fas fa-shopping-cart"></i> &nbsp;My
                Cart</button>
        </div>  
    </div>

    <!---------------------------- Login/Signup form ---------------------------->
    <div class="ls-container">
        <div class="oraBg">
            <i class="fas fa-times l" onclick="showlsForm()"></i>
            <div class="box signin">
                <h2>Already have an Account</h2>
                <button class="signinBtn">Sign in</button>
            </div>

            <div class="box signup">
                <h2>Don\'t have an Account</h2>
                <button class="signupBtn">Sign up</button>
            </div>
            <i class="fas fa-times r" onclick="showlsForm()"></i>
        </div>

        <div class="formBox">
            <div class="form signinForm">
                <form class="resetForm">
                    <h3>Reset Account Password</h3>
                    <input type="email" name="remail" placeholder="Enter Email">
                    <input type="button" value="Send Mail" id="sendMail">
                </form>
                <form class="lgf">
                    <h3>Sign In</h3>
                    <input type="text" name="lusername" placeholder="Username">
                    <input type="password" name="lpassword" placeholder="Password">
                    <input type="button" value="Login" id="loginbtn">
                    <a href="#" class="forgot" id="forgotbtn">Forgot Password</a>
                </form>
            </div>

            <div class="form signupForm">
                <form>
                    <h3>Sign Up</h3>
                    <input type="text" name="username" class="username" placeholder="Enter Username">
                    <select name="gender" id="gender" placeholder="Select gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    <input type="tel" name="phone" id="phone" placeholder="Enter your phone no.">
                    <input type="text" name="address" id="address" placeholder="Enter your address">
                    <input type="password" name="Crpassword" class="password" placeholder="Create a password">
                    <input type="password" name="Cnpassword" class="cnpassword" placeholder="Confirm the password">
                    <input type="button" value="Sign Up" id="signupbtn">
                </form>
            </div>
        </div>
    </div>';
?>