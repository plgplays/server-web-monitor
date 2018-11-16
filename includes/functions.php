<?php

//Check servers are Online

$port = 80;
$dev_server = '138.68.153.207';

$timeOut = 1;

if ( $fp = fsockopen($dev_server,$port,$errCode,$errStr,$timeOut) ) {
    $dev_server_status = 'Online';
  } else {
    $dev_server_status = 'Offline';
  }
fclose($fp);


$prod_server = '138.68.153.202';

if ( $fp = fsockopen($prod_server,$port,$errCode,$errStr,$timeOut) ) {
    $prod_server_status = 'Online';
  } else {
    $prod_server_status = 'Offline';
  }
fclose($fp);



 ?>
