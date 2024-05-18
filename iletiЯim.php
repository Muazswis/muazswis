
<?php
 // Form verilerini işlemek için gerekli kontrolleri yapın
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formun daha önce gönderilip gönderilmediğini kontrol edin
    if (!isset($_POST['submitted'])) {
        // Formun ilk kez gönderildiğini belirtmek için submitted adında bir gizli alan ekleyin
        echo "<input type='hidden' name='submitted' value='true'>";

        // Form verilerini ekrana yazdırın
        echo "Adı:" . $_POST['ad'];
        echo "<br>Soyadı:" . $_POST['soyad'];
        echo "<br>Doğum Tarihi:" . $_POST['doğum'];
        echo "<br>Eğitim Düzeyi:" . $_POST['eğitim'];
        echo "<br>Email:" . $_POST['email'];
        echo "<br>Cinsiyet:" . $_POST['cns'];
        echo "<br>Kullanıcı Mesajı:" . $_POST['mesaj'];
    } else {
        // Formun zaten gönderildiğini belirtir
        echo "Form zaten gönderildi!";
    }
}
?>