<?php 
  $vt_sunucu= "localhost";
  $vt_kullanici= "root";
  $vt_sifre= "";
  $vt_adi= "hasan";
  
  // Bağlantıyı oluştur
  $baglan= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
  
  // Bağlantıyı Kontrol Et
  if (!$baglan) {
    die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
  }