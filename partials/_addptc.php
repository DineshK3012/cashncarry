<?php 
    session_start();
    require '_connectdb.php';

    if (isset($_POST['pid']) && $_POST['addptc'] == true){
        $proId = $_POST['pid'];
        $pqn = $_POST['pqn'];

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
        {
            $username = $_SESSION['username'];

            $pexists = "SELECT * FROM `ucart` WHERE `username`='$username' AND `pid` = '$proId'";
            $rpexists = mysqli_query($conn, $pexists);

            $num = mysqli_num_rows($rpexists);
            if($num == 1)
            {
                $row = mysqli_fetch_assoc($rpexists); 
                $pqne = $row['pqn'];
                $pqn = $pqn + $pqne;

                $upqn = "UPDATE `ucart` SET `pqn` = '$pqn' WHERE `ucart`.`username` = '$username' AND `ucart`.`pid`='$proId'";
                $rupqn = mysqli_query($conn, $upqn); 

                if($rupqn)
                {
                    echo "Product quantity updated";
                }
                else{
                    echo "Error in updating product quantity";
                }
            }
            else{
                $sql = "INSERT INTO `ucart` (`pid`, `username`, `pqn`) VALUES ('$proId', '$username', '$pqn')";
                $result = mysqli_query($conn, $sql);
    
                if($result)
                {
                    echo 'Product Successfully Added to Cart';
                }
                else{
    
                    echo "The product not added successfully because of this error --> ".mysqli_error($conn);
                }
            }
        }
        else{
            echo 'You must have to Login First';
        }
    }

?>