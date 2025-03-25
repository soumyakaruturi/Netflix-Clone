<?php

session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($mobileno) && !empty($email) && !empty($password)) {

        $query = "INSERT INTO test(name,mobileno,Email,password) VALUES ('$name','$mobileno','$email','$password')";

        mysqli_query($con,$query);

        echo "<script type='text/javascript'> alert('Succesful Registration')</script>";



    } 
    else {
        echo "<script type='text/javascript'> alert('Please Enter Valid Details')</script>";
    }
    header("location: index.php");
    

}

?>