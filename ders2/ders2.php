<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><Ders-2></title>
</head>
<body>
<?php 

echo "<h4>Tırnak İşaretleri Arasındaki Farklar</h4>";

$uni="Adnan Menders Üniversitesi";
echo "Değişkenin İçeriği: $uni";
echo "<br>";
/*Değişkenin ismini yazdırır.*/
echo "1-Kazandığınız üniversite:" . '$uni';
echo "<br>";
/*Değişkenin içeriğni yazdırır.*/
echo "2-Kazandığnız Üniversite: " . "$uni ";
echo "<br>";
/*Değişkenin içeriğni yazdırır.*/
echo "3-Kazandığnız Üniversite: " . $uni ;
echo "<br>";
/*Değişkenin içeriğni yazdırır.*/
echo "4-Kazandığnız Üniversite:  $uni ";


echo "<hr><h4>Temel matematiksel işlemler</h4>";
echo "<h5>Toplama işlemi<h5/>";


$sayi1 = 10;
$sayi2 = 20;
echo '$sayi1 + $sayi2 ='. ($sayi1 + $sayi2);
echo "<br>";
echo "$sayi1 + $sayi2 =". ($sayi1 + $sayi2);
echo "<br>";

$sonuc = $sayi1 + $sayi2;
echo "$sayi1 + $sayi2 = $sonuc";


echo "<h5>Çıkarma  işlemi<h5/>";


$sayi1 = 10;
$sayi2 = 20;
echo '$sayi1 - $sayi2 ='. ($sayi1 - $sayi2);
echo "<br>";
echo "$sayi1 - $sayi2 =". ($sayi1 - $sayi2);
echo "<br>";

$sonuc = $sayi1 - $sayi2;
echo "$sayi1 - $sayi2 = $sonuc";


echo "<h5>Çarpma  işlemi<h5/>";


$sayi1 = 10;
$sayi2 = 20;
echo '$sayi1 * $sayi2 ='. ($sayi1 * $sayi2);
echo "<br>";
echo "$sayi1 * $sayi2 =". ($sayi1 * $sayi2);
echo "<br>";

$sonuc = $sayi1 * $sayi2;
echo "$sayi1 * $sayi2 = $sonuc";


echo "<h5>Bölme  işlemi<h5/>";


$sayi1 = 10;
$sayi2 = 20;
echo '$sayi1 / $sayi2 ='. ($sayi1 / $sayi2);
echo "<br>";
echo "$sayi1 / $sayi2 =". ($sayi1 / $sayi2);
echo "<br>";

$sonuc = $sayi1 / $sayi2;
echo "$sayi1 / $sayi2 = $sonuc";


echo "<h5>Üst alma işlemi(pow)</h5>";
$x =3;
$y =2;
echo " <br> Dğişken Tipini: $y >>> " . gettype($y) . "<br>";
echo" $x<sup>$y</sup>=" . (pow($x, $y));

echo" <h5> Karekök alma işlemi(sqrt)</h5>";
$x = 25;
$karekok = sqrt($x);
echo "$x 'in karekökü:  $karekok";



echo" <h5> Mutlak Değer  işlemi(abs)</h5>";
$x = (-4);
$mutlak = abs($x);
echo "|$x| 'in mutlak değeri:  $mutlak";


echo" <h5> Taban Değişim işlemi(base-convert(x,taban1,taban2))</h5>";
echo" 27 sayısının 2'lik tabandaki karşılığı:" . base_convert(27, 10, 2);
echo "<br>";
$sayi =50;
$taban = 10;
$yenitaban = 2;
$sonuc=base_convert($sayi, $taban ,$yenitaban);
echo "($sayi)<sub>$taban</sub> :($sonuc)<sub>$yenitaban</sub> " ;


echo" <h5>Mod işlemi(fmod(x,y))</h5>";
$x =20;
$y =4;
$mod =fmod($x, $y);
echo "$x mod $y = $mod" ;
echo "<br> $x sayısı : " . (fmod($x, 2) == 0) ? "Çifttir." : "Tekttir" ;



echo" <h5> Yuvarlama işlemi(fmod(x,y))</h5>";
$x =15.315;
$y =15.385;
echo "<br>$x  Bir ondalık basamak yuvarlaması :" . round($x, 1);
echo "<br>$y  Bir ondalık basamak yuvarlaması :" . round($y, 1);
echo "<br>$x  Bir ondalık basamak yuvarlaması :" . round($x, 2);
echo "<br>$y  Bir ondalık basamak yuvarlaması :" . round($x, 2);

echo" <h5>Yuvarlama  işlemi(floor(x))</h5>";
/* Her zaman en yakın aşağı tam sayaı değerine yuvarlama işlemi yapar. */
$x =15.315;
echo "$x : " . floor($x);


echo" <h5>Yuvarlama  işlemi(ceil(x))</h5>";
/* Her zaman en yakın aşağı tam sayaı değerine yuvarlama işlemi yapar. */
$x =15.315;
echo "$x : " . ceil($x);


echo" <h5> Rasgele Sayı Üretme (rand())</h5>";
echo"10-100 Arasında Rasgele değer: " . rand(10,100);

for ($i= 0; $i < 10; $i++)  {
    echo "<br>$i Eleman: " . rand(10, 100); 
}













 


?>              
    
</body>
</html>
