<?php 
    if(isset($_POST['changePassword']) && $_POST['changePassword'] == true)
    {
        require '_connectdb.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // echo $username. "  ". $password. "$hash";

        // query to update password 
        $query = "UPDATE `cncusers` SET `password` = '$hash' WHERE `cncusers`.`username` = '$username'";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            session_start();
            $_SESSION['reset'] = $username.'0';
            echo "Password Updated succesfully";
        }
    }
?>