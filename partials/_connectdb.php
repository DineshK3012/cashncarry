<?php 
    //connecting to the database
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "cashncarry";

    //create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    //die if connection if not successful
    // if(!$conn)
    // {
    //     // die("Sorry we failed to connect: ". mysqli_connect_error());
    // }
    // else{
    //     // echo 'connected to db';
    // }
?>