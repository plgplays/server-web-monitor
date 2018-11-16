<?php

//Includes all files within includes directory
foreach (glob("includes/*.php") as $filename) {
    include $filename;
  }

 ?>

 <!DOCTYPE html>

 <head>
   <title>Madison : Sever Monitor </title>

   <link rel='stylesheet' type='text/css' href='assets/style.css'>

 </head>

 <body>

   <div class="server-status">
     <div class="single-server <?php if ( $dev_server_status == 'Online' ) {echo 'online';}else{ echo 'offline';}?>">
       <h3>Development Server</h3>
       <p>Server Status : <?= $dev_server_status ?></p>
      </div>

      <div class="single-server <?php if ( $prod_server_status == 'Online' ) {echo 'online';}else{ echo 'offline';}?>">
        <h3>Test Server</h3>
        <p>Server Status : <?= $prod_server_status ?></p>
       </div>
   </div>
 </body>
