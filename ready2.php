<?
$r=$_GET["key"];


if($r=="1"){
$tekst="1";
$plik2 = fopen('r2.txt','w');
fputs($plik2, $tekst);
fclose($plik2);
}
$plik = fopen('r2.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);
if($tekst=="1"){
echo "666";
}

if($r=="777"){
$tekst="0";
$plik2 = fopen('r2.txt','w');
fputs($plik2, $tekst);
fclose($plik2);
}
?>