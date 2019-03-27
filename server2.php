
<script type="text/javascript" src="jquery.js"></script>
<meta name="viewport" content="width=device-width">
<script>
var ooo = 0;
var petla=0;
var op=0;
function shoot(aaa){
ooo = aaa;
}

function ready(){

$('#yready').val('ready');
$.get("ready2.php", { 'key' : '1' },  function(data) {

});

$.get("shoot2.php", { 'strzal' : ooo },  function(data) {

});


}
function odswierzanie(){

$.get("ready1.php", {  },  function(data) {
if(data=="666"){
$('#licz').val('1');
$('#eready').val('ready');
}
});



}
function licza(){
if($('#yready').val()=='ready'){
if ($('#licz').val()==1){
petla++;

}
if(petla==3){
window.location.href ='server2.php';
}
}
}
window.setInterval('licza();',1000);
window.setInterval('odswierzanie();',1000);
$.get("ready2.php", { 'key' : '777' },  function(data) {
});
$.get("ready1.php", { 'key' : '777' },  function(data) {
});
</script>

<center>

<style>
body{
color:ffffff;
background: url(tlo.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
td {
padding-left:0;
padding-right:0;
color:ffffff;
}
</style>
<table border="0"><tr><td>
you<br>
<?
$punktacja=15;
$pala=0;
echo "<table border=\"1\">";
$plik = fopen('xy2.txt','r');
$xy1=fgets($plik, 10000);
$plik2 = fopen('shoot1.txt','r');
$shoot2=fgets($plik2, 10000);
$shoot2tab = explode("z", $shoot2);
//var_dump($xy1);
for ($i=1;$i<=10;$i++){
echo "<tr>";
for ($j=1;$j<=10;$j++){
echo "<td>";
$key=$i."a".$j;
for($v=1;$v<=200;$v++){
if(strstr($key,$shoot2tab[$v])){
if(strstr($xy1,$key)){
$pala=1;
$punktacja=$punktacja-1;
}

if($pala!=1){
$pala=2;
}
}
}
if(strstr($xy1,$key)){
if(($pala!=1) and ($pala!=2)){
$pala=3;
}
}

if($pala==1){
echo "<div  style=\"background-color:0000ff;width:20;height:20;\"></div>";
}elseif($pala==2){
echo "<div  style=\"background-color:ff0000;width:20;height:20;\"></div>";
}elseif($pala==3){
echo "<div  style=\"background-color:000000;width:20;height:20;\"></div>";
}else{
echo "<div  style=\"background-color:ffffff;width:20;height:20;\"></div>";
}
$pala=0;
echo "</td>";
}

echo "</tr>";
}
echo "</table>";
?>

</td><td>
you shoots<br>
<?

$pala=0;
echo "<table border=\"1\">";
$plik = fopen('shoot2.txt','r');
$xy1=fgets($plik, 10000);
$plik2 = fopen('xy1.txt','r');
$shoot2=fgets($plik2, 10000);
$shoot2tab = explode("z", $shoot2);
//var_dump($xy1);
for ($i=1;$i<=10;$i++){
echo "<tr>";
for ($j=1;$j<=10;$j++){
echo "<td>";
$key=$i."a".$j;
for($v=1;$v<=200;$v++){
if(strstr($key,$shoot2tab[$v])){
if(strstr($xy1,$key)){
$pala=1;
//$punktacja=$punktacja-1;
}

if($pala!=1){
$pala=2;
}
}
}
if(strstr($xy1,$key)){
if(($pala!=1) and ($pala!=2)){
$pala=3;
}
}

if($pala==1){
echo "<div  style=\"background-color:0000ff;width:20;height:20;\"></div>";
}elseif($pala==2){
//echo "<font color=\"ff0000\">x</font>";
echo "<span  onclick=\"shoot('".$i."a".$j."');ready();\"><div  style=\"background-color:ffffff;width:20;height:20;\"></div></span>";
}elseif($pala==3){
echo "<div  style=\"background-color:000000;width:20;height:20;\"></div>";
}else{
echo "<span  onclick=\"shoot('".$i."a".$j."');ready();\"><div  style=\"background-color:ffffff;width:20;height:20;\"></div></span>";
}
$pala=0;
echo "</td>";
}

echo "</tr>";
}
echo "</table>";
?>







</td></tr></table>

<font color="ffffff">
points<input type="text" id="punktacja" value="15"><br>
you ready<input type="text" id="yready" value=""><br>
enemy ready<input type="text" id="eready" value=""><br>
<input type="hidden" id="licz">

<?

echo "<script>$('#punktacja').val('".$punktacja."');if($('#punktacja').val()<=0){alert('game over, kup se rower');}</script>";


?>