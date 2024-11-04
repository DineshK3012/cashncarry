<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash'N'Carry: Reset Password</title>
    <link rel="icon" href="../img/6.png" type="image/icon type">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .resetForm {
        width: 80%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        margin: 0 auto;
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .resetForm h1 {
        font-size: 2rem;
        font-weight: 800;
        margin: 0.5rem auto;
        margin-bottom: 0.1rem;
        color: red;
        text-transform: uppercase;
    }

    .resetForm p {
        font-size: 0.9rem;
        font-weight: 300;
        margin: 0.2rem auto;
    }

    .resetForm input,
    .resetForm textarea {
        margin: 10px 0;
        width: 80%;
        font-size: 17px;
        padding: 6px 8px;
        background-color: rgb(245, 227, 227);
        outline: none;
        border: none;
    }

    .resetForm button {
        margin: 20px 0;
        font-size: 18px;
        font-weight: 400;
        padding: 8px 30px;
        background-color: orangered;
        color: white;
        outline: none;
        border: none;
        cursor: pointer;
        transition: 0.3s ease-in-out;
    }

    .resetForm button:hover {
        background-color: rgb(160, 49, 9);
    }
    </style>
</head>

<?php 
        if(isset($_GET['un']))
        {
            session_start();
            $username = $_GET['un'];

            $x = $username.'1';

            if($_SESSION['reset'] == $x)
            {
                echo '<div class="resetForm">
                        <h1>Reset Password</h1>
                        <p>Please Fill the Details To Reset your password!</p>
                        <input type="hidden" name="rusername" value="'.$username.'"></input>
                        
                        <input type="password" name="rpassword" placeholder="Enter Password"></input>
                        
                        <input type="password" name="rcpassword" placeholder="Confirm Password"></input>
                        
                        <button name="reset" id="resetbtn">Reset Password</button>';
            }else{
                echo '<h1><center>This Link is Expired Now</center></h1>';
            }
        }
    ?>
</div>

<!-- jquery script -->
<script src="../js/jquery-3.6.0.js"></script>
<script src="../scriptJQ.js"></script>
</body>

</html>