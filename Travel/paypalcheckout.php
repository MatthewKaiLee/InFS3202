<?php

$numberofitem = $_GET["item"];
$price = $_GET["price"];
$name = $_GET["name"]

curl -v https://api.sandbox.paypal.com/v1/payments/payment \\
  -H 'Content-Type: application/json' \\
  -H 'Authorization: Bearer access_token$sandbox$ds59v9xzd94xbykc$5f6375dd3009431568d17ffdaf3479ff' \\
  -d '{
  "intent": "sale",
  "experience_profile_id":"paypalprofile.php",
  "redirect_urls":
  {
    "return_url": "https://example.com",
    "cancel_url": "https://example.com"
  },
  "payer":
  {
    "payment_method": "paypal"
  },
  "transactions": [
  {
    "amount":
    {
      "total": "'.($numberofitem*$price).'",
      "currency": "AUD",
      "details":
      {
      }
    },
    "item_list":
    {
      "items": [
      {
        "quantity": "'.$numberofitem.'",
        "name": "'.$name.'",
        "price": "'.$price.'",
        "currency": "AUD",
        "description": "item 1 description",
      }]
    },
    "description": "The payment transaction description.",
    "invoice_number": "merchant invoice",
    "custom": "merchant custom data"
  }]
}'

echo '{
  "id": "PAY-3WY97586JG9277715K3H2SOA",
  "intent": "sale",
  "state": "created",
  "payer":
  {
    "payment_method": "paypal"
  },
  "transactions": [
  {
    "amount":
    {
      "total": "4.00",
      "currency": "USD",
      "details":
      {
        "subtotal": "2.00",
        "tax": "2.00",
        "shipping": "1.00",
        "shipping_discount": "-1.00"
      }
    },
    "description": "This is the payment transaction description.",
    "custom": "merchant custom data",
    "invoice_number": "merchant invoice",
    "item_list":
    {
      "items": [
      {
        "name": "item 1",
        "description": "item 1 description",
        "price": "1.00",
        "currency": "USD",
        "tax": "1.00",
        "quantity": 1
      },
      {
        "name": "item 2",
        "description": "item 2 description",
        "price": "1.00",
        "currency": "USD",
        "tax": "1.00",
        "quantity": 1
      }]
    },
    "related_resources": [

    ]
  }],
  "create_time": "2016-02-26T01:24:08Z",
  "links": [
  {
    "href": "https://api.sandbox.paypal.com/v1/payments/payment/PAY-3WY97586JG9277715K3H2SOA",
    "rel": "self",
    "method": "GET"
  },
  {
    "href": "https://www.sandbox.paypal.com/checkoutnow?token=EC-7YM73725XF342733W",
    "rel": "approval_url",
    "method": "REDIRECT"
  },
  {
    "href": "https://api.sandbox.paypal.com/v1/payments/payment/PAY-3WY97586JG9277715K3H2SOA/execute",
    "rel": "execute",
    "method": "POST"
  }]
}';

?>