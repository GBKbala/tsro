<?php
session_start();
require 'config.php';
require 'vendor/razorpay/razorpay/Razorpay.php';
use Razorpay\Api\Api;

if(isset($_POST['submit'])){
    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['gender'])){

        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $question = $_POST['question'];
        $amount;

        if($_POST['gender'] == 'male'){
            $amount= 100;
        }else{
            $amount= 60;
        }

        $api = new Api($keyId, $keySecret);
        $orderData = [
            // 'receipt'         => 3456,
            'amount'          => $amount * 100,
            'currency'        => $displayCurrency,
            'payment_capture' => 1
        ];
        $razorpayOrder = $api->order->create($orderData);
        $razorpayOrderId = $razorpayOrder['id'];
        $_SESSION['razorpay_order_id'] = $razorpayOrderId;
        $displayAmount = $amount = $orderData['amount'];

        if ($displayCurrency !== 'INR')
        {
            $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
            $exchange = json_decode(file_get_contents($url), true);

            $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
        }

        $data = [
            "key"               => $keyId,
            "amount"            => $amount,
            "name"              => $firstname .' '. $middlename.' '.$lastname,
            "description"       => "Registration Fee for Marathon",
            "image"             => "https://razorpay.com/assets/razorpay-glyph.svg",
            "prefill"           => [
            "name"              => $firstname.' '. $middlename.' '.$lastname,
            "email"             => $email,
            "contact"           => $phone,
            ],
            // "notes"             => [
            // "address"           => "Hello World",
            // "merchant_order_id" => "12312321",
            // ],
            "theme"             => [
            "color"             => "#F37254"
            ],
            "order_id"          => $razorpayOrderId,
        ];

        if ($displayCurrency !== 'INR')
        {
            $data['display_currency']  = $displayCurrency;
            $data['display_amount']    = $displayAmount;
        }

        $json = json_encode($data);

    }
}
?>


<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="firstname" id="firstname" value="<?php echo $firstname; ?>">
  <input type="hidden" name="middlename" id="middlename" value="<?php echo $middlename; ?>">
  <input type="hidden" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
  <input type="hidden" name="phone" id="phone" value="<?php echo $phone; ?>">
  <input type="hidden" name="gender" id="gender" value="<?php echo $gender; ?>">

  <input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
  <input type="hidden" name="amount" id="amount" value="<?php echo $amount; ?>">
  <textarea name="question" id="question" style="display:none;"><?php echo $question; ?></textarea>
</form>