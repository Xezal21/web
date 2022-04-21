<?php
define("degiskenAdi","Degisken degeri");
echo degiskenAdi; 
?> <br>
<?php
$degiskenAdi ="gülcan";
echo gettype($degiskenAdi);
?><br>
<?php
$degiskenAdi = 10;
echo gettype($degiskenAdi);
?><br>
<?php
$degiskenAdi = 10.20;
echo gettype($degiskenAdi);
?><br>
<?php
$degiskenAdi = false;
echo gettype($degiskenAdi);
?><br>
<?php
$degiskenAdi = [];
echo gettype($degiskenAdi);
?><br>
<?php
$degiskenAdi = null;
echo gettype($degiskenAdi);
?><br>
<?php
  $a = 5;
  $a = $a+10;
  echo $a;
?><br>
<?php
 $a = 5;
 $a += 10;
 echo $a;
?><br>
<?php
$isim ="Gülcan";
echo "I am : " .  $isim;
?><br>
<?php
$isim =" Saliha Gülcan";
$soyisim = " KASIMOĞLU ";
$isim .=  $soyisim ;
echo $isim;
?><br>
<?php
$degisken = 1;
echo $degisken++ ;
echo $degisken;
?><br>
<?php
$degisken = 0 ;
echo ++$degisken;
echo ++$degisken;
?><br>
<?php
$degisken = 0 ;
echo ++$degisken;
echo $degisken;
?><br>
<?php
$sayimiz = 10;
if ($sayimiz%2 == 0)
{
  echo "sayı çifttir  ";
}
else 
{
  echo "sayı tektir";
}

?><br>

<?php
$sayi=20;
switch($sayi)
{
  case 10 > $sayi:
    echo"sayı 10'dan küçüktür.";
    break;
    case 10 < $sayi:
      echo"sayı 10'dan büyüktür.";
      break;

      default:
      echo "sayı 10";
}

?><br>

<?php
$sayi = 11;

switch($sayi)
  {
  case $sayi%2 == 0;
      echo "sayı çift";
  break;
  case $sayi%2 == 1;
      echo "sayı tek";
  break;
  default:
} 
?><br>
<?php
$sayi = 10;
echo $sayi <10 ?"sayı küçük 10'dan":"sayı büyük 10'dan";
    ?><br>

<?php
$kisiBilgileri = [
  "S.Gülcan Kasımoğlu",
  19,
  "0555 555 55 55",
  "salihakasimoglu3@gmail.com"
];
echo $kisiBilgileri[0]. "<br>";
echo $kisiBilgileri[1]. "<br>";
echo $kisiBilgileri[2]. "<br>";
echo $kisiBilgileri[3];




?><br>



<?php
 echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
 echo '<h4>Aydın Meslek Yüksekokulu</h4>';
 echo "Bilgisayar Programcılığı " . " Web Teknolojileri" . "<br>";
 echo "Bilgisayar Programcılığı" . "<br>" .  "Web Teknolojileri";

?><br>

