<?php

//Includes all files within includes directory
foreach (glob("includes/*.php") as $filename) {
    include $filename;
  }

 ?>
