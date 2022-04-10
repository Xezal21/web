<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
< h3 > Php'de Diziler </ h3 >
    < ol >
        < li > Dizi oluşturmak için dizi() fonksiyonu veya [] kullanılabilir. </ li >
        < li > Dizi içerisinde farklı türlerde, çift içerir.(int, string, obje) (1,2,3,"Ali","Ahmet","125,20") </ li >
        < li "echo $ diziAdi " ile hesaplanamaz. Diziden Dizeye Dönüştürme Hatası verir. Ancak sayı 3 indisine sahip öğe elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir. </ li >
        < li Dizinin dize ifadeler çift tırnak("") içinde. </ li >
        < li > Dizinin int ifadeler üzerinden yazılabilir. </ li >
        < li > Dizinin gücü virgül(,) ile konumlanır. </ li >
        < li > Dizi içinde varsayılan olarak 0'dan başlar. </ li >
        < li > Diziler içinde diziler. </ li >
    </ ol >
   <?php
    $dizi1 = array(1, 2, 3, "Gülcan", "Ocak", "Şubat");
    $dizi2 = [1, 2, 3, "Gülcan"];

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "Dizinin 1. elemanı: " . $dizi1[1] . "<br>";
    echo "Dizinin 1. elemanın Türü: " . gettype($dizi1[1]) . "<br>";


    echo "Dizinin 5. elemanı: " . $dizi1[4] . "<br>";
    echo "Dizinin 5. elemanın Türü: " . gettype($dizi1[4]) . "<br>";


    echo "Dizinin 0. İndisi: <b> $dizi1[0]</b><br>";
    echo "Dizinin 1. İndisi: <b> $dizi1[1]</b><br>";
    echo "Dizinin 2. İndisi: <b> $dizi1[2]</b><br>";
    echo "Dizinin 3. İndisi: <b> $dizi1[3]</b><br>";
    echo "Dizinin 4. İndisi: <b> $dizi1[4]</b><br>";
    echo "Dizinin 5. İndisi: <b> $dizi1[5]</b><br>";

    /* Dizinin içeriğinin foreach döngüsü ile yazdırılması. */
    echo "<h4>Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-1 </h4>";
    foreach ($dizi1 as $eleman) {
        echo "$eleman <br>";
    }

    echo "<h4>Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-2 </h4>";
    foreach ($dizi1 as $anahtar => $deger) {
        echo " $anahtar - $deger <br>";
    }

    /* Dizinin içeriğinin for döngüsü ile yazdırılması. */
    echo "<h4>Dizinin İçeriğinin For Döngüsü İle Yazdırılması-2 </h4>";
    for ($i = 0; $i < count($dizi1); $i++) {
        echo "$i: $dizi1[$i] <br>";
    }


    $sayilar = array(1, 2, 3, 4, 5);

    $sayilar = array(
        array(1, 2, 3, 4, 5),
        array(10.5, 3.2, 1.7)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar Dizisinin İçerisindeki İkinci Dizinin İkinci Elemanı: " . $sayilar[1][1] . "<br>";
    echo "Sayılar Dizisinin İçerisindeki Birinci Dizinin Üçüncü Elemanı: " . $sayilar[0][2] . "<br>";

    echo "<br>*****************************<br>";

    $sayilar2 = array(
        "Integer"   => array(1, 2, 3, 4, 5),
        "Double"    => array(10.5, 3.2, 1.7)
    );

    echo "<pre>";
    print_r($sayilar2);
    echo "</pre>";

    echo "Sayılar2 Dizisinin İçerisindeki İkinci Dizinin İkinci Elemanı: " . $sayilar2["Integer"][1] . "<br>";
    echo "Sayılar2 Dizisinin İçerisindeki Birinci Dizinin Üçüncü Elemanı: " . $sayilar2["Double"][2] . "<br>";


    echo "$bilgiler[adi] $bilgiler[soyadi] Hoşgeldiniz.<br>";
    echo  $bilgiler["adi"] . " " . $bilgiler["soyadi"] . " Hoşgeldiniz.";

    $kullanici1=array(
    $bilgiler=array(
        "id"   => "0",
        "adi"   => "Gülcan",
        "soyadi" => "Kasımoğlu",
        "gsm"     => "555 555 55 55",
        "yas"   => "19"
        )
    );
 $isimler=array();
 $isimler[0]="Dijle";
 $isimler[0]="Gülcan";
 $isimler[0]="Mehmet";


 echo "<pre>";
 print_r($isimler);
 echo "</pre>";


 $isimler=array();
 








   
   
   ?>
<hr>
<h3>Koşul İfadeleri (If-Elsse)</h3>
<p> if-else bloklarında öncelikle koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>
<h5> Karşılaştırma Operatörleri</h5>  
<ol>
    <li> == ($a == $b) eşit ise. (genelikle matematiksel bir karşılaştırma yapılır.)</li>
    <li> == ($ == $b) denk ise. (genelikle string bir karşılaştırma yapılır.)</li>
    <li> != ($a != $b) eşit değil ise. (genelikle matematiksel bir karşılaştırma yapılır.)</li>
    <li> !== ($a !== $b) denk değil ise. (genelikle string bir karşılaştırma yapılır.)</li>
     <li> > ($a > $b) büyük ise.</li>
     <li> >= ($a > $b)büyük ya da büyük eşit ise.</li>
     <li> < ($a < $b)küçük t ise.</li>
     <li> < ($a < $b)küçük ya da küçük eşit ise.</li>
</ol>
  
<h5> Mantıksal Operatörler</h5>
<ol>
<li> ! (olumsuzsa)  (!$a) --> $a'nın değeri false ise true döner. Aksini yapar olumsuz mu diye sorar. </li>
<li> && (ve) - AND(ve)  ($a && $b) --> $a ve $b'nin değeri olumlu ise true döner,iki koşul da sağlanmak zorundadır.koşulardan biri false dönerse 
    genel değer false olur. </li>

    <li> ||-or (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birinin olumlu ise sonuç true olarak döner. Herhangi birisinin koşulunun sağlanması
        genel dönüşü true yapar. </li>

</ol>


<h4> Not:  </h4>
<li>elseif sürekli tekrar eden soru bloğı açar.    </li>
<li> else son kapanış koşuludur. ( herhangi bir şart belirtilmez. hiçbir önkoşul gerçekleşmediğnde çalışıcak son koşulu ifade eder.)   </li>

<?php
/*  if */



?>





<br> <br> <br>
</body>
</html>