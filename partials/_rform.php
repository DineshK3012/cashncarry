<?php 
    if(isset($_POST['resetRequest']) && $_POST['resetRequest']==true)
    {
        require '_connectdb.php';
        session_start();
        
        $email = $_POST['email'];

        //chekcing if there is exists any account with this email or not
        $query = "SELECT * FROM `cncusers` WHERE `cncusers`.`email` = '$email'";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);

        if($num == 1)
        {
            $row = mysqli_fetch_assoc($result);

            $username = $row['username'];
            $subject = "Reset Password";
            $body = 'Hii '.$username.' Click on the Link to Reset Your Password http://localhost/cashncarry/partials/_reset.php?un='.$username;
            $headers = "From: dklyricsking@gmail.com";

            // echo $email.$username.$subject.$body.$headers;

            if (mail($email, $subject, $body, $headers)) {

                echo "Email successfully sent to $email...";
                $_SESSION['reset'] = $username.'1';

            } else {
                echo "Email sending failed...";
            }
        }else
        {
            echo "Sorry, Account with this email doesn't exists";
        } 
    }
?>