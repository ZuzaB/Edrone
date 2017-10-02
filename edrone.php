<?php
if (isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['city'], $_POST['country'])){

  function order(){
    $edroneData = 'version=' . '1.0.0' .
       '&app_id=' . '59d1351e2a504' .
       '&email=' . $_POST['firstName'] .
       '&first_name=' . $_POST['firstName'] .
       '&last_name=' . $_POST['lastName'] .
       '&product_ids=' . ''.
       '&product_titles=' . '' .
       '&product_images=' . '' .
       '&order_id=' . '00001' .
       '&country=' . $_POST['country'] .
       '&city=' . $_POST['city'] .
       '&base_currency=' . '' .
       '&order_currency='	.	'' .
       '&base_payment_value='	.	'' .
       '&order_payment_value='	.	'' .
       '&product_urls='	.	'' .
       '&product_counts='	.	'' .
       '&action_type=' . 'order' .
       '&sender_type=' . 'server';
       return $edroneData;
    }

  function httpPost($url, $params) {
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_HEADER, false);
     curl_setopt($ch, CURLOPT_POST, count($params));
     curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
     $output = curl_exec($ch);
     curl_close($ch);
     return $output;
  }
  httpPost('https://api.edrone.me/trace', order());
}
?>
