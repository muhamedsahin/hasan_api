<?php
  
  include "../conn.php";
  error_log(0);
  $ana_kart_id = $_GET["ana_kart_id"];

  $sql="SELECT * FROM `data_users` WHERE ana_kart_id = '".$ana_kart_id."'";
  $sorgu=mysqli_query($baglan,$sql);
  $sec=mysqli_fetch_assoc($sorgu);

  if(!$sec){
    echo "false";
  }elseif(strlen($sec["id"]) > 0){
    if($sec["ban"] == 1){
        echo "false";
    }elseif($sec["ban"] == 0){
        echo "true";
    }
  }//http://localhost/hasan_efe/api/search_user.php?ana_kart_id=dsfdf