<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri</title>
</head>

<body>
    <!-- Açıklama Satırı -->
    <?php
    //Açıklama Satırı 
    /*Açıklama Satırı Bloğu
      Shift+Alt+a
      */
    /* Kullanılan Komutlar
      echo:Ekrana yazdırama işlemi yapar.
      Çift veya tek tırnak ile kullanılabilir
      Çift tırnak içerisinde değişken içerikleri gösterilir.
      nokta işareti ile birleştirilebilir.
      / Kaçış karakteridir özel ifadelerden önce kullanılır.
     */
    echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
    echo '<h4>Aydın Meslek Yüksekokulu</h4>';
    echo  "Bilgisayar Programcılığı" . "Web teknolojileri" . "<br>";
    echo   "Bilgisayar Programcılığı" . "<br>" . "Web Teknolojileri";

    echo   "<hr> <h4> Dğişken Tanımlama Kuralları </h4>";
    echo   "<ol>
            <li> Değişken isimleri $ ile başlar .</li>
            <li> Değişken isimleri sayısal ifade ile kullanılamaz.</li>
            <li> Değişken isimlerinde boşluk kullanılmaz.İki kelime varsa birinci_sinifSinif birinci-sinif örneklerdeki kullanımlar önerilir .</li>
            <li> Değişken ve dosya isimlerinde Türkçe karakter kullanılmamalıdır.</li>
            <li> Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır. /$ sayi !=/$ Sayi </li>
            <li> Değişken içerisinde eğer metinsel bir ifade varsa çift tırnak (\") veya tek tırnak (') kullanılır. </li> 
            <li> Değişken içerisinde eğer sayısal bir ifade varsa tırak kullanılmadan yazılır .</li>
            <li> Değişken ismi, değişkenin içeriğini ifade etmelidir  </li> 
            <li> Değişkenler ekrana echo komutu ile yazdırılır. </li> 
            <li>  </li> 
      </ol>";

    echo "<hr> <h4> Değşken Tanımlama Örnekleri</h4>";



    echo  $isim  . " " . $soyisim;
    echo "<br>";
    echo "$isim $soyisim";
    echo
    /*Uygulama :
     Üniversite-Myo-Ad-Soyad-Numara değişkenlerini oluşturup içeriğni uygun şekilde doldurunuz . 
     Girilen bu değişikenlerin değerlerini bir html tablo içerisinde gösteriniz . 
     */


    $uni = "Adnan Menderes Üniversitesi";
    $ad = "Hazal ";
    $soyad = "Kasımoğlu";
    $no = "216001019";
    $yas = 19;


    ?>
    <form action="">
        <label for="uni">Üniversite</label>
        <input type="text" name="" value="<?php echo $uni; ?>" id="uni"><br>

</body>

</html>