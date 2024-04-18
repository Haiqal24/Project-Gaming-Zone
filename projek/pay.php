<?php
    $name=$_POST['name'];
    $price=$_POST['price'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    include 'instamojo/Instamojo.php';
    $api = new Instamojo\Instamojo('test_5483dd6930f2658c21cb856', 'test_48a4724123b670ff25b240c4169','https://test.instamojo.com/api/1.1');

    try{
        $response = $api->paymentRequestCreate(array(
            "purpose"=>$product_name,
            "amount"=>$price,
            "send_email"=>true,
            "email"=>$email,
            "buyer_name"=>$name,
            "phone"=> true,
            "allow_repeated_payment"=> false,
            "redirect_url" => "http://localhost/shopping/thankyou.php"
        ));
        
    }