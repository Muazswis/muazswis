<?php

$kullanici_adi="b231210577@gmail.com";
$sifre="b231210577";

if($kullanici_adi==$_POST['id'] && $sifre==$_POST['sifre'])
{
    echo "Hoşgeldiniz b231210577 <br/>";
    echo " 7 saniye içinde hakkimda sayfasına yönelendirileceksiniz";
    header("Refresh: 7; url=index.html");

}
else{
    echo "Girilen bilgiler hatalıdır. 3 saniye içinde giriş ekranına yönelendirileceksiniz";
    header("Refresh: 3; url=login.html");
}

?>