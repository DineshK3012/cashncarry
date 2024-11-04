<?php 
    require '_connectdb.php';

    if(isset($_POST['contact']) && $_POST['contact'] == true)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $contactQuery = "INSERT INTO `cnccontact` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$message', current_timestamp())";
        $result = mysqli_query($conn, $contactQuery);

        if($result)
        {
            echo "Message sent Successfully";
        }
        else{
            echo "Error in Sending Message. Please Try After sometime!";
        }
    }
?>