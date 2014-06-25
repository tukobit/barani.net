<?php

final class PZ_Config
{
    const MERCHANT_ID = "test_t1242"; // Your Merchant ID
    const SECRET_KEY = "fcae216889d3cd83f53745d1212bf6181c65ba1f0fb35d430a6f450ee9334f8c"; // Your Secret Key. Do not share this.
    const TRANSACTION_TYPE = "SALE";
    const CURRENCY = "INR";
    const UI_MODE = "REDIRECT"; // UI Integration - REDIRECT or IFRAME
    const HASH_METHOD = "SHA256"; // MD5 or SHA256
    const MERCHANT_KEY_ID = "payment"; // Your Merchant Key ID
    const CALLBACK_URL = "http://localhost/php-sdk/examples/response/charging_response.php"; // Your callback URL

    const API_BASE = "https://www.payzippy.com/payment/api/";
    const API_CHARGING = "charging";
    const API_QUERY = "query";
    const API_REFUND = "refund";
    const API_VERSION = "v1";
    const VERIFY_SSL_CERTS = TRUE;
}
?>
