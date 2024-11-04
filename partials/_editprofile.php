<?php 
    require '_connectdb.php';

    if(isset($_POST['editpRequest']) && $_POST['editpRequest'] == true)
    {
        $username = $_POST["username"];
        $gender = $_POST["gender"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        $query = "UPDATE `cncusers` SET `gender` = '$gender', `email` = '$email', `phone`='$phone', `address` = '$address' WHERE `cncusers`.`username` = '$username'";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            echo 'Profile Edited Successfully';

            session_start();
            $_SESSION['gender'] = $gender;
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
            $_SESSION['address'] = $address;
        }
    }
?>