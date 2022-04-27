<?php
    $customerid=($_REQUEST['customerid']);
    $amount=($_REQUEST['am']);
    $orderid="ORDS" . rand(10000,99999999);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <titl>Checkout</title> -->
    <style>
        .container {
            margin: 100px;
            text-decoronation: none;
        }

        .container a {
            background-color:green;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .checkout {
            padding: 15px;
            font-size: 30px;
            background-color:green;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <div class="container">
      <h2><?php echo $customerid ?></h2>
      <h2><?php echo $orderid ?> </h2>
      <h2><?php echo $amount ?></h2>

    <form method="POST" action="PaytmKit/pgRedirect.php"> 
    <input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  $orderid; ?>">
    <input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php echo $customerid; ?>">   
    
    <input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">

    <input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
    <input type="hidden" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $amount; ?>">
    <input class="checkout" value="CheckOut" type="submit"	onclick="">
    </form>
</div>
</body>
</html>