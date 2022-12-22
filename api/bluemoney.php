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
    //將商店之 API 串接金鑰(Hash Key, Hash IV) 及商店代號(Merchant ID) 複製至原始碼
    $key = "t5EcjkcgTP2n546HaNF6sc6PCzrbj3CJ";
    $iv = "Ca2CcKlE44iZHO2P";
    $mid = "MS146499137";

    //1.生成請求字串，以 http encode 方式生成 URL 字串
    $data1 = http_build_query(array(
        'MerchantID' => $mid,
        'TimeStamp' => time(),
        'Version' => '2.0',
        'RespondType' => 'String',
        'MerchantOrderNo' => 'Vanespl_ec_' . time(),
        'Amt' => '30',
        'NotifyURL' => 'https://peoplestore.com',
        'ReturnURL' => '',
        'ItemDesc' => 'test',
    ));


    //印出encode後的字串
    // echo "${data1}";

    // Step2: 將請求字串加密
    // 為防止信用卡號等重要交易訊息洩漏，需於加密前使用商店之 Hash Key 及 Hash IV 對上述字串執行 AES-256-CBC (使用 PKCS7 填充)，並將結果轉換至十六進制。

    $edata1 = bin2hex(openssl_encrypt(
        $data1,
        "AES-256-CBC",
        $key,
        OPENSSL_RAW_DATA,
        $iv
    ));

    // echo "${edata1}";

    //Step3:將 AES 加密字串產生檢查碼
    // 於加密字串前加上: HashKey=(the HashKey)&
    // 於加密字串後加上: HashIV=(the HashIV)

    $hashs = "HashKey=" . $key . "&" . $edata1 . "&HashIV=" . $iv;

    // echo "${hashs}";

    //將字串使用 SHA256 壓碼轉換為大寫，以下為 PHP 範例：
    $hash = strtoupper(hash("sha256", $hashs));

    // echo "${hash}";
    ?>

    <!-- 傳送表單 -->
    <form method=post action="https://ccore.newebpay.com/MPG/mpg_gateway">

        MIN: <input name="MerchantID" value="<?= $mid ?>" readonly><br>
        Version: <input name="Version" value="2.0" readonly><br>

        TradeInfo:
        <input name="TradeInfo" value="<?= $edata1 ?>" readonly><br>

        TradeSha:
        <input name="TradeSha" value="<?= $hash ?>" readonly><br>

        <input type=submit>
    </form>


</body>

<!-- http://127.0.0.1/bulemoney/bluemoney.php -->

</html>