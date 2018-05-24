<?php 
	curl -v POST https://api.sandbox.paypal.com/v1/payment-experience/web-profiles \
-H 'Content-Type:application/json' \
-H 'Authorization: Bearer Access-Token' \
-d '{
  "name": "Queensland Travel",
  "presentation": {
    "brand_name": "QTA Paypal",
    "logo_image": "QTA.infs3202.com",
    "locale_code": "AUD"
  },
  "input_fields": {
    "no_shipping": 0,
    "address_override": 1
  },
  "flow_config": {
    "landing_page_type": "billing",
    "bank_txn_pending_url": "https://example.com"
  }
}'

?>