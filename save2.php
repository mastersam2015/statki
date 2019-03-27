<?
$y2=$_GET["key"];
$plik = fopen('xy2.txt','w+');
fputs($plik, $y2);
fclose($plik);
?>