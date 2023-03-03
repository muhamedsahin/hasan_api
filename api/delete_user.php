<?php
  
  include "../conn.php";
  error_log(0);
  $ana_kart_id = $_GET["ana_kart_id"];
  $key = $_GET["key"];

  $sql="SELECT * FROM `keys` WHERE key_name = '".$key."'";
  $sorgu=mysqli_query($baglan,$sql);
  $sec=mysqli_fetch_assoc($sorgu);

  if(!$sec){
    echo "izinsiz giriş algılandı";
  }elseif($sec["key_name"] == $key){
    $sql = "DELETE FROM data_users WHERE ana_kart_id = '".$ana_kart_id."'";
    if(mysqli_query($baglan, $sql)) {
      echo "true";
    } else {
      echo "false";
    }
  }else{
    echo "false";
  }
  //http://localhost/hasan_efe/api/delete_user.php?ana_kart_id=1234&key=kswkfdfkdfk