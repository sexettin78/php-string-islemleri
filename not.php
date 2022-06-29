<?php 

## boşluk ve karakter temizleme
// ltrim > değerin başındaki boşluğu siler
// rtrim > değeri sonundaki boşluğu siler
// trim > baş ve sondaki boşluğu siler
// 2.parametre ise karakter temizler 

$deger1 = "furkand ";
$deger2 = " furkand";
$deger3 = " furkand ";
$deger4 = "-furkand-";

echo rtrim($deger1)."<br>";
echo ltrim($deger2)."<br>";
echo trim($deger3)."<br>";
echo trim($deger4, "-");

 ?>





 <?php 
## Tüm karakter sayısını bulma
 //strlen ya da mb_strlen

 $ornek = "TÜRKİYE";
 echo strlen($ornek);
echo "<br>";
// strlen, türkçe harfleri saymaz. mb_strlen sayar

 echo mb_strlen($ornek);
  ?>


 <?php 
## Karakter ve kelime sayısı bulma
 // substr_count
 //ilk parametre -> aranacak yer, ikinci parametre -> aranan

 $ornek = "ben şuanda php eğitimi izlemekteyim";
echo substr_count($ornek, "a");
//kaç tane a olduğuna bakar
  ?>




  <?php 
##metni tersine çevirme 
  //strrev
  $ornek = "furkand";
  echo strrev($ornek);
   ?>



 <?php 
## değerin belirli bir bölümünü almak
 // substr - mb_substr

 $ornek = "furkan d Leafyet";
 substr($ornek, 4);
 //4 harf atladıktan sonra yazmaya başlar. 3 parametre belirtirsek 2 ve 3. parametreler arasındaki bölümleri alır. mb_substr ise türkçe harflerde vs kullanılır
 ?>



 <?php 
## karakter büyültme-küçültme
 $metin = "furkand-LEAFYET";
 echo mb_strtolower($metin); // tüm karakterleri küçük yazdırdık. mb_ ekleyerek türkçe karakterleri de saymasını sağladık
 echo mb_strtoupper($metin); // tüm karakterleri büyük yazdırdık. mb_ ekleyerek türkçe karakterleri de saymasını sağladık
echo ucfirst($metin); //metnin baş harfi büyük yapar
echo lcfirst($metin); //metnin baş harfi küçük yapar
echo ucwords($metin); //tüm kelimelerin baş harfini büyüttü
echo mb_convert_case($metin, MB_CASE_UPPER, "utf-8");//mb_ gelmeyen şeyleri mbye çevirmek için kullanılır. Türkçe karakter sorun çıkarmasın diye.
  ?>





<?php 
##metin bölme
// explode() ilk -> ifade, ikinci -> değer

$ornek = "furkand-yozgat-leafyet";
$bol = explode("-", $ornek);
echo "<pre>";
print_r($bol);

//    [0] => furkand
//	  [1] => yozgat
//    [2] => leafyet

foreach ($bol as $veri) {
	echo $veri."<br>";
} //bu döngünün çıktısı ise
/*
furkand
yozgat
leafyet
*/
 ?>


<?php 
##metinleri belirli oranda bölme
// str_split() | ilk -> değer, ikinci -> kaç karakter

$ornek = "bugün hava sıcak";
$bol = str_split($ornek,3);  //3'er 3'er böldü. boşlukları da alır
echo "<pre>";
print_r($bol);
 ?>




<?php 
##metinleri yeni değerleri ile değiştirme
// str_replace()
// ilk -> hedef, iki -> yeni ifade, üç -> metin değeri
$ornek = "bugün hava yağmurlu";
$ornek = str_replace("yağmurlu", "bulutlu", $ornek); // bugün hava yağmurlu ifadesini bugün hava bulutlu olarak değiştirdi
echo $ornek;
//birden fazla değiştirmek istersen array("1","2") gibi atama yapabilirsin
 ?>



 <?php 
##metin içinde yer alan html etiketlerini temizlemek
 //strip_tags()
 // ilk -> değer, ikinci -> izin verilen değer
$ornek = "<b>furkand</b>";
$ornek = strip_tags($ornek);
$ornek = strip_tags($ornek, '<a>'); // a etiketinin silinmesine izin verme
echo $ornek;

  ?>


 <?php 
#html etiketlerini silmeden geçersiz hale getirmek
 // htmlentities() ya da htmlspecialchars()

 $ornek = "furkan <br>";
 echo htmlentities($ornek);

  ?>


<?php 
##tırnakları etkisiz hale getirme
//addslashes() eski haline getirme -> stripslashes()
$ornek = "furkan, Leafyet'e gitti"; //furkan, Leafyet\'e gitti
echo addslashes($ornek); //
 ?>

<?php 
##satır sonuna <br> ekleme
// nl2br()

$ornek = "furkan
d";

echo nl2br($ornek);
 ?>




<?php 
## metin içinde arama işlemleri
//strpos() ya da stripos()
// ilk --> değer, ikinci --> aranan kelime
// tr karaterler mb_ eki alır
// strpos büyük küçük harfleri ayırıyor. stripos ise ayırmıyor

$ornek = "FurkanD eve geldi";
echo stripos($ornek, "eve");

 ?>



 <?php
 ##metinleri biçimli yazdırma 
// %s --> dizge alınıp gösterilir
// %d --> tamsayı alınıp, ondalık gösterilir
// %0.xs --> ilk x karakteri alınır

$ornek = "bir sonraki gün %s"; // eğer buraya %0.5s yazsak girilen değerin sadece ilk 5 karakterini alır
printf($ornek, "perşembe"); //ekrana bir sonraki gün perşembe yazdırır.
  ?>


<?php 
## sayıları yazıya çevirme. örneğin 45 -> kırk beş
$sayi = 545;
$basamak = str_split($sayi);
$say = count($basamak);

$birler = array("","bir","iki","üç","dört","beş","altı","yedi","sekiz","dokuz");
$onlar = array("","on","yirmi","otuz","kırk","elli","altmış","yetmiş","seksen","doksan");
$yuzler = array("", "yüz", "iki yüz", "üç yüz", "dört yüz", "beş yüz", "altı yüz", "yedi yüz", "sekiz yüz", "dokuz yüz");
if ($say == 1) {
	echo $birler[ $basamak[0] ];
}
else if ($say ==2) {
	echo $onlar[ $basamak[0] ]." ".$birler[ $basamak[1] ];
}

else if ($say == 3) {
	echo $yuzler[ $basamak[0] ]." ".$onlar[ $basamak[1] ]." ".$birler[ $basamak[2] ];
}

 ?>








