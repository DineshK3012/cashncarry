<?php 
    require '_connectdb.php';

    session_start();
    
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
        if(isset($_POST['orderRequest']) && $_POST['orderRequest'] == true)
        {
            $username = $_SESSION['username'];
            $cpi = $_POST['cpi'];
            $cpq = $_POST['cpq'];
            $orderid = $_POST['orderid'];

            // for($i = 0; $i < count($cpi); $i++)
            // {
            //     echo $cpi[$i]."  ". $cpq[$i];
            // }
                
            $i = count($cpi) - 1;
                
            while($i >= 0)
            {
                $sql = "INSERT INTO `orders` (`username`, `pid`, `pqn`, `orderid`, `date`) VALUES ('$username', '$cpi[$i]', '$cpq[$i]', '$orderid',current_timestamp())";
                $result = mysqli_query($conn, $sql);

                $i--;
            }

            echo "Your order has been placed";
        }
    }else
    {
        echo "You must have to Login First";
    }
?>