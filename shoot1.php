<?
$r=$_GET["strzal"];
$plik = fopen('shoot1.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);
$r2=$tekst."z".$r;
$plik2 = fopen('shoot1.txt','w');
fputs($plik2, $r2);
fclose($plik2);
?>