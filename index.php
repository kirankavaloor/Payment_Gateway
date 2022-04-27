<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway</title>
    <style>
        .container {
            margin:100px;
        }

        .container a {
            background-color:green;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php 
        $customerid =('customer'.rand(1000,1000));
        $amount =1;
        // $orderid = 'order'.rand('');
        
    ?>
    <h1>Total Amount: 1</h1>
    <a href="checkout.php?customerid=<?php echo $customerid;?>&am=<?php echo $amount; ?>">PayNow</a>
    </div>
</body>
</html>