<?php 
    require '_connectdb.php';

    if(isset($_POST['loginRequest']) && $_POST['loginRequest'] == true)
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //sqlrequest for finding the username and password in the database to checkup if the user has any account or not
        $usernameExists = "SELECT * FROM `cncusers` WHERE username = '$username'";
        $uresults = mysqli_query($conn, $usernameExists);
        $usernamefound = mysqli_num_rows($uresults);

        if($usernamefound == 1)
        {
           $user = mysqli_fetch_assoc($uresults);

           if(password_verify($password, $user['password']))
           {
                echo 'Login Successfull';

                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['gender'] = $user['gender'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['address'] = $user['address'];

                // header("location: ../index.php");
                // exit;
           }
           else{
               echo 'Incorrect Password';
           }
        }
        else{
            echo "Invalid Credentials";
        }
    }
?>