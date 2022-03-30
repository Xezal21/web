<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DERS-3</title>
</head>
<body>
    <?php


   /*  Uygulama Ödevi
    kuyruk ve yığın veri yapılarının php üzerinde dizileri kullanarak örneklendirilmesini gerçekleştiriniz.*/
   
    /* Uygulama: rasgele üretilen sayının
     50'den büyükse 
    geçtiniz-notunuz: xx
    50'den küçükse
    kaldınız-notunuz: xx
     */
     $not = rand(10, 100);
     if ($not > 50){
        echo "Geçtiniz  $not ";
     } else {
         echo "Kaldınız  $not";
     }
      

     echo"<h3>Sık Kullanılan String Fonksiyonlar</h3>";

     $yazi = "Aydın Adnan Menderes Üniversitesi";
     echo "\$yazi Değişkeninin içeriği:$yazi";
     echo "<br>\$yazi Değişkeninin Türü :" . gettype($yazi);




     /*İçerğinin Büyük Harfe Dönüştürülmesi */
     echo" <br> \$yazi'nın Büyük Harfe Dönüştürülmesi :" .$byazi = strtoupper($yazi );
     echo" <br> \$yazi 'nın Büyük Harfe Dönüştürülmesi :" .$byazi = mb_strtoupper($yazi );



     /*İçerğinin Küçük Harfe Dönüştürülmesi */
     echo" <br> \$yazi'nın Küçük Harfe Dönüştürülmesi :" .$kyazi = strtolower($yazi );
     echo" <br> \$yazi 'nın Küçük Harfe Dönüştürülmesi :" .$kyazi = mb_strtolower($yazi );



      /* İçeriğnin İlk Harflerinin  Büyük Harfe Dönüştürülmesi   */
        echo " <br> \$yazi 'nın  İlk Harfi Büyük :". $yazi = ucfirst( $kyazi);
        echo "<br>";
    


   
     /* İçeriğnin İlk Harflerinin  Büyük Harfe Dönüştürülmesi   */
     echo " <br> \$yazi 'nın  Her Kelimesinin  İlk Harfi Büyük :". $yazi = ucwords( $kyazi);
    
   
    
     /*İçeriğnin  Harf Sayısı */
     echo " <br> \$yazi 'nın Harf Sayısı :" . strlen( $yazi);
     echo "<br>";
    
     /* Ascıı Char Dönüşümü */
     echo "Karakter Karşılığı (65) :" . chr(65) ;
     echo "<br>";


     /* 0-255 arasındaki değerleri chr fonksiyonuna sokarak satır satır yazdırınız . */


     for ($i= 0; $i <=255 ; $i++){
         echo"$i:" .chr($i) ."" ;
     }


     /* Metnin Parçalanarak Diziye Dönüştürülmesi */

     echo "<br> <br> ";
     echo $yazi . "<br>";
     $dizi=explode(" ",$yazi);
    
     echo "<pre>";
     print_r($dizi);
     echo "</pre>";



     /* Uygulama: Metin içerisindeki kelime ve cümle sayısını alt alta yazdırınız. */


     $metin ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, laborum. Atque fuga veniam quos nisi nam culpa 
     asperiores neque? Dolores aut ipsam temporibus culpa sed vero provident eius aliquid illum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, laborum. Atque fuga veniam quos nisi nam culpa 
     asperiores neque? Dolores aut ipsam temporibus culpa sed vero provident eius aliquid illum";
     

     $kelimedizisi=explode(" ", $metin);
     $cumledizisi =explode(".",$metin);



     echo "Kelime sayısı :" . count($kelimedizisi);
     echo "<br>";
     echo "Cümle sayısı :" . count($cumledizisi);



     /*  Uygulama : Veri tabanından 2022-11-20 şeklinde gelen tarihi 20.11.2022 şeklinde gösteriniz. */
     $tarih="2022-11-20";
     $tarihdizisi=explode("-" ,$tarih);
     echo "<pre>" ;
     print_r($tarihdizisi);
     echo "</pre>";

     echo "Tarih : $tarihdizisi[2] .$tarihdizisi[1] .$tarihdizisi[0]";


     /* Dizinin Metne Dönüştürülmesi (implode) */
     echo" <br>" ;
     $aylardizisi = array(
         "Ocak",
         "Şubat",
         "Mart",
         "Nisan"
     );
     echo "<pre>";
     print_r( $aylardizisi);
     echo "</pre>";
     echo  $aylarstring =implode("-" , $aylardizisi);


     /* str_split String parçalama işlemi yapar. */
     echo" <br>" ;


     $iban = "TR000844484843954404440";
     $yeniIban = str_split($iban,4);
     echo "<pre>";
     print_r( $yeniIban);
     echo "</pre>";


     echo "<br> İmplode Iban:" . implode("-", $yeniIban);

      echo "<br> Foreach Iban: ";
     foreach ( $yeniIban as $parca){
         echo "$parca";
     }


     echo "<br>";
     echo "İmplode Iban:" . implode("-", $yeniIban);


     for ($i =0; $i < count($yeniIban); $i++) {
         echo $yeniIban[$i] . " ";
     }







    ?> 

</body>
</html>