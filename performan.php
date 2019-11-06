<?php
  $data = [
            'fio'=>$_POST['fio'], //Full name
            'utm_source' => $_POST['source'], //first label
            'utm_term' => $_POST['term'], //second label
            'utm_medium' => $_POST['medium'], //third label
            'utm_content' => $_POST['content'], //Fourth label
            'utm_campaign' => $_POST['campaign'], //Fifth Label
            'phone'=>$_POST['phone'], //Phone
            'ip' => $_SERVER[REMOTE_ADDR], //IP Address
            'referer' => $_POST['referer'],//Referer (where the visitor came from)
            'goodID' => $_POST['106657'], //ID
            'quantity' => '1', //Quantity
            'price' => $_POST['490000'] //Price
  ];

$url = 'http://149.28.159.108/61c2d7e/postback?payout=100&status=sale&subid=' . urlencode($_POST['subid']);
 
file_get_contents($url);

  
    $myCurl = curl_init();
    curl_setopt_array($myCurl, [
      CURLOPT_URL => 'https://drcash.leadvertex.ru/api/webmaster/v2/addOrder.html?webmasterID=1&token=tes', //токен в системе
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_POST => true,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_POSTFIELDS => http_build_query($data),
    ]);
    $response = curl_exec($myCurl);
    $arr = json_decode($response, true);
    
    echo $arr;


  header ("Location: https://performanherbal.pw/thanks-"); /*to show success page - if you remove this line, ID of order will be shown.*/


