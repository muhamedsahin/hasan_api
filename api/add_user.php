<?php
  
  include "../conn.php";
  $key = $_GET["key"];
  $ana_kart_id = $_GET["ana_kart_id"];
  $email = $_GET["email"];
  $sifre = $_GET["sifre"];

  $sql="SELECT * FROM `keys` WHERE key_name = '".$key."'";
  $sorgu=mysqli_query($baglan,$sql);
  $sec=mysqli_fetch_assoc($sorgu);

  if($sec["id"] == null){
    echo "izinsiz giriş algılandı";
  }elseif($sec["key_name"] == $key){
    if (strlen($ana_kart_id) > 0 && strlen($email) > 0 && strlen($sifre) > 0) {
    $ekle= "INSERT INTO `data_users` (`ana_kart_id`, `email`, `sifre`, `ban`) VALUES ('".$ana_kart_id."', '".$email."', '".$sifre."', '0');";
    $baglan->query($ekle) === TRUE;
    echo "true";
    }
  }//localhost/hasan_efe/api/add_user.php?key=kswkfdfkdfk&ana_kart_id=dsfdf&email=a@gmail.com&sifre=1234