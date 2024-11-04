<?php
require 'partials/_connectdb.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $pname = $_POST['pname'];
    $punit = $_POST['punit'];
    $pprice = $_POST['pprice'];
    $pcate = $_POST['pcate'];
    $pstock = $_POST['pstock'];
    $psrc1 = $_POST['psrc1'];
    $psrc2 = $_POST['psrc2'];
    $psrc3 = $_POST['psrc3'];
    $psrc4 = $_POST['psrc4'];
    $pdesc = $_POST['pdesc'];
    
    //submit these to a database
    //sql query to be executed
    $sql = "INSERT INTO `products` (`pname`, `pprice`, `punit`, `pstock`, `pcategory`,`pdesc`, `src1`, `src2`, `src3`, `src4`) VALUES ('$pname', '$pprice', '$punit','$pstock', '$pcate', '$pdesc', '$psrc1', '$psrc2', '$psrc3', '$psrc4')";

    $result = mysqli_query($conn, $sql);

    echo "<br>";

    //checking if the data inserted in the table successfully or not
    if($result)
    {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success:</strong> Product has been submitted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="Close"></button>
            </div>';
    }
    else{

        // echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //         <strong>Failed:</strong> Product is not being submitted succesfully.
        //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        echo "The record was not inserted successfully because of this error --> ".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products to Database</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .productform {
        width: 80%;
        margin: 0% auto;
    }

    .productform form {
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .productform form input,
    .productform form textarea {
        margin: 10px 0;
        width: 60%;
        font-size: 17px;
        padding: 6px 8px;
    }

    .productform form button {
        margin: 20px 0;
        font-size: 18px;
        font-weight: bold;
        padding: 8px 30px;
        background-color: orangered;
        color: white;
        outline: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .productform form button:hover {
        background-color: rgb(170, 52, 9);
        transition: 0.6s ease-in-out;
    }
    </style>
</head>

<body>
    <div class="productform">
        <form action="/cashncarry/addproducts.php" method="post">
            <input type="text" name="pname" id="pname" placeholder="Enter Product Name"></input>

            <input type="text" name="punit" id="punit" placeholder="Enter Unit"></input>

            <input type="number" name="pprice" id="pprice" placeholder="Enter Price"></input>

            <input type="number" name="pstock" id="pstock" placeholder="Enter Product Stock Quantity"></input>

            <input type="text" name="pcate" id="pcate" placeholder="Enter Product category"></input>

            <input type="text" name="psrc1" id="psrc1" placeholder="Enter image 1 src"></input>

            <input type="text" name="psrc2" id="psrc2" placeholder="Enter image 2 src"></input>

            <input type="text" name="psrc3" id="psrc3" placeholder="Enter image 3 src"></input>

            <input type="text" name="psrc4" id="psrc4" placeholder="Enter image 4 src"></input>

            <textarea type="text" name="pdesc" id="pdesc" placeholder="Enter Product Description"></textarea>

            <button>Add Product</button>

        </form>
    </div>
</body>

</html>