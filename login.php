<?php

session_start();

include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $email = $_POST['email'];
    $password = $_POST['password'];


    if(!empty($email) && !empty($password) && !is_numeric($email)) {

        $query = "select * from test where Email ='$email' limit 1 ";
        $result = mysqli_query($con, $query);

        if ($result) 
        {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] == $password) {
                    header("location: index.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'> alert('Wrong Email or Password')</script>";


    }
    else{
        echo "<script type='text/javascript'> alert('Wrong Email or Password')</script>";

    }
}
?>