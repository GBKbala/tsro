<?php
session_start();
require 'config.php';
require 'vendor/razorpay/razorpay/Razorpay.php';
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{

    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }

    if ($success === true)
    {
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $question = $_POST['question'];
        $amount = $_POST['amount']/100;

        $razorpay_order_id = $_SESSION['razorpay_order_id'];
        $razorpay_payment_id = $_POST['razorpay_payment_id'];
        $email = $_POST['email'];
        $sql = "INSERT INTO register (firstname, middlename, lastname, email, phone, gender, question, order_id, razorpay_payment_id, amount,`status`) VALUES ('$firstname','$middlename','$lastname','$email','$phone','$gender','$question','$razorpay_order_id','$razorpay_payment_id','$amount','success')";
        // echo $sql;
        if(mysqli_query($conn, $sql)){
            // echo "You have Registered Successfully";
            $_SESSION['registration_status'] = 'success';
            $_SESSION['messege'] = 'Your payment was successful.Payment ID: '.$razorpay_payment_id.'';
            header("Location: index.php");
            exit();
        }    
    }
    else
    {
        $_SESSION['registration_status'] = 'error';
        $_SESSION['messege'] = 'Your payment failed';
        header("Location: index.php");
        exit();
    }
}else
{
    $_SESSION['registration_status'] = 'error';
    $_SESSION['messege'] = 'Something Went Wrong.';
    header("Location: index.php");
    exit();
}
mysqli_close($conn);
?>