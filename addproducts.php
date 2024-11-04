<?php
require 'partials/_connectdb.php';

if(isset($_POST['submit'])){
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pname = $_POST['pname'];
        $punit = $_POST['punit'];
        $pprice = $_POST['pprice'];
        $pcate = $_POST['pcate'];
        $pstock = $_POST['pstock'];
        $file1 = $_FILES['psrc1'];
        $file2 = $_FILES['psrc2'];
        $file3 = $_FILES['psrc3'];
        $file4 = $_FILES['psrc4'];
        $pdesc = $_POST['pdesc'];

        $filename1 = $file1['name'];
        $filepath1 = $file1['tmp_name'];
        $fileerror1 = $file1['error'];

        $filename2 = $file2['name'];
        $filepath2 = $file2['tmp_name'];
        $fileerror2 = $file2['error'];

        $filename3 = $file3['name'];
        $filepath3 = $file3['tmp_name'];
        $fileerror3 = $file3['error'];

        $filename4 = $file4['name'];
        $filepath4 = $file4['tmp_name'];
        $fileerror4 = $file4['error'];

        
        $destfile1='upload/'.$filename1;
        move_uploaded_file($filepath1,$destfile1);
        $destfile2='upload/'.$filename2;
        move_uploaded_file($filepath2,$destfile2);
        $destfile3='upload/'.$filename3;
        move_uploaded_file($filepath3,$destfile3);
        $destfile4='upload/'.$filename4;
        move_uploaded_file($filepath4,$destfile4);

        //submit these to a database
        //sql query to be executed
        $sql = "INSERT INTO `products` (`pname`, `pprice`, `punit`, `pstock`, `pcategory`,`pdesc`, `src1`, `src2`, `src3`, `src4`) VALUES ('$pname', '$pprice', '$punit','$pstock', '$pcate', '$pdesc', '$destfile1', '$destfile2', '$destfile3', '$destfile4')";

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

    label {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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

    .productform form .button {
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

    .productform form .button:hover {
        background-color: rgb(170, 52, 9);
        transition: 0.6s ease-in-out;
    }
    </style>
</head>

<body>
    <div class="productform">
        <form action="/cashncarry/addproducts.php" method="post" enctype="multipart/form-data">

            <input type="text" name="pname" id="pname" placeholder="Enter Product Name"></input>

            <input type="text" name="punit" id="punit" placeholder="Enter Unit"></input>

            <input type="number" name="pprice" id="pprice" placeholder="Enter Price"></input>

            <input type="number" name="pstock" id="pstock" placeholder="Enter Product Stock Quantity"></input>

            <input type="text" name="pcate" id="pcate" placeholder="Enter Product category"></input>

            <h3><br>Upload Product Images<br><br></h3>

            <label for="psrc1">Add product image 1</label>
            <input type="file" name="psrc1" id="psrc1"></input>

            <label for="2">Add product image 2</label>
            <input type="file" name="psrc2" id="psrc2"></input>

            <label for="psrc3">Add product image 3</label>
            <input type="file" name="psrc3" id="psrc3"></input>

            <label for="psrc4">Add product image 4</label>
            <input type="file" name="psrc4" id="psrc4"></input>

            <textarea type="text" name="pdesc" id="pdesc" placeholder="Enter Product Description"></textarea>
            <input type="submit" value="Add Product" class="button" name="submit"></input>
        </form>
    </div>
</body>

</html>