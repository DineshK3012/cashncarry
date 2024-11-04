<?php 
    session_start();
    require '_connectdb.php';

    if(isset($_POST['pid']))
    {
        echo "increasing quantity";
        
        $username = $_SESSION['username'];
        $proId = $_POST['pid'];
        $pqn = $_POST['pqn'];

        $upqn = "UPDATE `ucart` SET `pqn` = '$pqn' WHERE `ucart`.`username` = '$username' AND `ucart`.`pid`='$proId'";
        $rupqn = mysqli_query($conn, $upqn); 
        if($rupqn)
        {
            echo "Product quantity increased";
        }
        else{
            echo "Error in updating product quantity";
        }
    }

?>