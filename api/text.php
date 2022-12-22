<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $key = "RfhAn2MW3E0WTzMgs9eYzEGR53dZC1a5";
    $iv = "CAZnV9LUBa99botP";
    $mid = "MS146511370";
    $data1 = http_build_query(array(
        'MerchantID' => $mid,
        'TimeStamp' => time(),
        'Version' => '2.0',
        'RespondType' => 'String',
        'MerchantOrderNo' => 'Vanespl_ec_' . time(),
        'Amt' => '30',
        'NotifyURL' => 'https://webhook.site/d4db5ad1-2278-466a-9d66-
        78585c0dbadb',
        'ReturnURL' => '',
        'ItemDesc' => 'test',
    ));
    $edata1 = bin2hex(openssl_encrypt(
        $data1,
        "AES-256-CBC",
        $key,
        OPENSSL_RAW_DATA,
        $iv
    ));
    $hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;
    $hash = strtoupper(hash("sha256", $hashs));
    ?>
    <form method=post action="https://ccore.newebpay.com/MPG/mpg_gateway">

        MID: <input name="MerchantID" value="<?= $mid ?>" readonly><br>
        Version: <input name="Version" value="2.0" readonly><br>

        TradeInfo:<input name="TradeInfo" value="<?= $edata1 ?>" readonly><br>

        TradeSha:<input name="TradeSha" value="<?= $hash ?>" readonly><br>

        <input type="submit">
    </form>
</body>

</html>