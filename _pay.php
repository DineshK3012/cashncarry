<?php
    session_start();

    if(isset($_POST['totalAmount']))
    {
        $grand_total = $_POST['totalAmount'];
        $orderid = "ORDS" . rand(10000,99999999);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash'N'Carry: Checkout</title>
    <link rel="icon" href="img/6.png" type="image/icon type">

    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    /************************ pay section css ************************/
    .details-container {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -30%);
        margin: 1rem auto;
        padding: 1rem;
        width: 75%;
        box-shadow: 0 0 10px 10px rgba(0, 0, 0, 0.2);
    }

    .details-container h1 {
        margin: 0.5rem auto;
        color: orangered;
        text-align: center;
        font-size: 2rem;
    }

    .details-container .userdetails {
        margin: 0.5rem auto;
        width: 90%;
        /* border: 0.2px solid grey; */
        padding: 1rem 1.5rem;
        box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .details-container .userdetails h2 {
        font-size: 1.3rem;
    }

    .details-container .userdetails p {
        font-size: 0.9rem;
        margin: 0.1rem;
    }

    .details-container .userdetails span {
        font-size: 0.8rem;
        margin: 0.4rem auto;
        text-align: center;
        color: red;
    }

    .details-container .orderdetails {
        display: flex;
        justify-content: space-between;
        margin: 1rem auto;
        width: 90%;
        /* border: 0.2px solid grey; */
        padding: 1rem 1.5rem;
        box-shadow: 0 0 1px 2px rgba(0, 0, 0, 0.2);
    }

    .details-container .orderdetails .oid {
        font-weight: 700;
        font-size: 1.2rem;
    }

    .details-container .orderdetails .ta {
        font-weight: bold;
        font-size: 1.4rem;
        color: orangered;
        margin: 0 0.5rem;
    }

    form {
        width: 80%;
        margin: 1rem auto;
        display: flex;
        flex-direction: column;
    }

    form input[type="submit"] {
        width: 50%;
        background-color: orangered;
        color: white;
        margin: auto;
        font-size: 18px;
        font-weight: 600;
        padding: 8px 30px;
        outline: none;
        border: none;
        cursor: pointer;
        transition: 0.3s ease-in-out;
    }

    form input[type="submit"]:hover {
        background-color: rgb(160, 49, 9);
    }

    @media only screen and (max-width: 400px) {

        /************* paying page css *************/
        .details-container h1 {
            font-size: 1.2rem;
        }

        .details-container .userdetails {
            width: 100%;
        }

        .details-container .userdetails h2 {
            font-size: 1.1rem;
        }

        .details-container .userdetails p {
            font-size: 0.7rem;
        }

        .details-container .userdetails span {
            font-size: 0.6rem;
        }

        .details-container .orderdetails {
            flex-direction: column;
            width: 100%;
        }

        .details-container .orderdetails .oid {
            font-size: 0.9rem;
        }

        .details-container .orderdetails .ta {
            font-size: 1.1rem;
            margin: 0;
        }
    }
    </style>

</head>

<body>
    <div class="details-container">
        <h1>Order Summary</h1>
        <div class="userdetails">
            <h2>
                <?php echo $_SESSION['username']; ?>
            </h2>
            <p>
                <?php echo $_SESSION['address']; ?>
            </p>
            <p>+91
                <?php echo $_SESSION['phone']; ?>
            </p>
            <span>Go to Profile to change the Address</span>
        </div>
        <div class="orderdetails">
            <div class="oid">
                <b>Order ID:</b>
                <?php echo $orderid; ?>
            </div>
            <div class="ta">
                <b>₹ </b>
                <?php echo $grand_total; ?>
            </div>
        </div>

        <form method="post" action="PaytmKit\pgRedirect.php">
            <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
                value="<?php echo $orderid; ?>">
            <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off"
                value="CUST001">
            <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID"
                autocomplete="off" value="Retail">
            <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID"
                autocomplete="off" value="WEB">
            <input type="hidden" title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT"
                value="<?php echo $grand_total; ?>">
            <input value="PAY" type="submit">
        </form>
    </div>


    <!-- my javascript -->
    <script src="js/jquery-3.6.0.js"></script>
    <script src="scriptJQ.js"></script>

</body>

</html>