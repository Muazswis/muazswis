<?php

$kullanici_adi = "b231210577@gmail.com";
$sifre = "b231210577";

if ($kullanici_adi == $_POST['id'] && $sifre == $_POST['sifre']) {
    header("Refresh: 7; url=hakkimda.html");
    echo "Hoşgeldiniz b231210577 <br/>";
    echo "7 saniye içinde hakkimda sayfasına yönlendirileceksiniz";
    exit(); // Yönlendirme yapıldıktan sonra kodun çalışmasını durdurmak için exit() kullanılmalı
} else {
    header("Refresh: 3; url=login.html");
    echo "Girilen bilgiler hatalıdır. 3 saniye içinde giriş ekranına yönelendirileceksiniz";
    exit(); // Yönlendirme yapıldıktan sonra kodun çalışmasını durdurmak için exit() kullanılmalı
}

?>