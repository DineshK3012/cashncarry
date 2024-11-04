<?php 
    session_start();
    require '_connectdb.php';

    if (isset($_POST['pid']) && $_POST['removepfc'] == true){
        $proId = $_POST['pid'];
        $username = $_SESSION['username'];

        $dfc = "DELETE FROM `ucart` WHERE `ucart`.`username` = '$username' AND `ucart`.`pid` = '$proId'";
        $rdfc = mysqli_query($conn, $dfc);

        if($dfc)
        {
            echo "Product deleted from the cart";
        }
        else{
            echo "Error in deleting product from the cart";
        }
    }   
?>    