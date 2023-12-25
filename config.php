<?php

$env = "local";
$displayCurrency = "INR";

if ($env == "local"){

    $base_url = "http://localhost/tsro";
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "tsro";

    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
        die("Couldn't connect to server".mysqli_connect_error);
    }

    // $keyId="rzp_test_HulsP8GtZeHDzj";
    // $keySecret = "lxiKjEkzRNWSjdsf83Efzr3S";

    $keyId="rzp_live_IcLoc7IU7pnMOh";
    $keySecret = "cTLAFRRQe4AfpySlPxBt9YXb";

}else if($env == "live"){

    $base_url = "http://localhost/tsro";
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "";

    $conn = mysqli_connect($server,$username,$password,$database);

    if(!$conn){
        die("Couldn't connect to server".mysqli_connect_error);
    }
    
    $keyId="rzp_live_IcLoc7IU7pnMOh";
    $keySecret = "cTLAFRRQe4AfpySlPxBt9YXb";
}




?>