<?php 
    require '_connectdb.php';

    if(isset($_POST['signupRequest']) && $_POST['signupRequest'] == true)
    {
        $username = $_POST["username"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $password = $_POST["password"];

        $usernameExists = "SELECT * FROM `cncusers` WHERE username = '$username'";
        $uresults = mysqli_query($conn, $usernameExists);
        $commonUsernames = mysqli_num_rows($uresults);

        $emailExists = "SELECT * FROM `cncusers` WHERE email = '$email'";
        $eresults = mysqli_query($conn, $emailExists);
        $commonEmails = mysqli_num_rows($eresults);


        if($commonUsernames>0 && $commonEmails>0)
        {
            echo "Username And Email Already Exists";
        }
        else if($commonUsernames>0)
        {
            echo "Username Already Exists";
        }
        else if($commonEmails>0){
            echo "Email Already Exists";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $signupsql = "INSERT INTO `cncusers` (`gender`, `email`, `phone`, `address`, `password`, `username`, `date`) VALUES ('$gender', '$email', '$phone', '$address', '$hash', '$username', current_timestamp())";

            $signupresult = mysqli_query($conn, $signupsql);

            if($signupresult){
                echo "Account Created Succesfully";
            }
        }
    }
?>