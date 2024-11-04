<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash'N'Carry: Orders Page</title>
    <link rel="icon" href="img/6.png" type="image/icon type">

    <!-- Css Files -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="responsive.css?v=<?php echo time(); ?>">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .order-table {
        margin: auto;
        text-align: center;
    }

    .order-table h1 {
        font-size: 2.4rem;
        color: orangered;
        margin: 0.5rem auto;
        margin-bottom: 0;
    }

    .order-table table {
        width: 90%;
        margin: 1% auto;
        background-color: antiquewhite;
        padding: 1rem;
        text-align: center;
    }

    .order-table table tr th {
        font-size: 1.2rem;
        font-weight: bold;

    }

    .order-table table tr td {
        font-size: 1rem;
    }

    .order-table table tr td img {
        width: 50px;
        height: 50px;
    }

    @media only screen and (max-width: 600px) {
        .order-table h1 {
            font-size: 2rem;
        }

        .order-table table tr th {
            font-size: 0.8rem;
        }

        .order-table table tr td {
            font-size: 0.6rem;
        }
    }

    @media only screen and (max-width: 400px) {
        .order-table table {
            width: 98%;
            margin: 1% auto;
            padding: 0.3rem;
        }

        .order-table h1 {
            font-size: 1.4rem;
        }

        .order-table table tr th {
            font-size: 0.6rem;
        }

        .order-table table tr td {
            font-size: 0.4rem;
        }

        .order-table table tr td img {
            width: 40px;
            height: 40px;
        }
    }
    </style>
</head>


<body>
    <?php 
            require 'partials/_header.php'; 
            require 'partials/_connectdb.php';

            echo '<div class="order-table">
                <h1>My Orders</h1>
                <table>';
                
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
                    echo '<tr>
                            <th>Order Id</th>
                            <th>Product Id</th>
                            <th>Product Image</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Date</th>
                        </tr>';
                        
                        $username = $_SESSION['username'];
               
                        $sql  = "SELECT * FROM `orders` WHERE `username`='$username'";
                        $result = mysqli_query($conn, $sql);

                        $num = mysqli_num_rows($result);

                        if($num > 0)
                        {
                            while($row = mysqli_fetch_assoc($result)){
                                $pid = $row['pid'];
                                $pqn = $row['pqn'];

                                $sql1 = "SELECT * FROM `products` WHERE `pid`= '$pid'";
                                $result1 = mysqli_query($conn, $sql1);
                                $prdt = mysqli_fetch_assoc($result1);

                                $total = $pqn * $prdt['pprice'];
                                
                                    echo '<tr>
                                            <td>'.$row['orderid'].'</td>
                                            <td>'.$pid.'</td>
                                            <td><img src="'.$prdt['src1'].'" alt="productimage"></td>
                                            <td>'.$pqn.'</td>
                                            <td>'.$total.'</td>
                                            <td>'.$row['date'].'</td>
                                        </tr>';
                            }
                        }
                    echo '</table>
                    </div>';
                }else
                {
                    echo '<h1>You must have to Login First</h1>';
                }
            ?>

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