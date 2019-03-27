<?
$tekst="";

$plik2 = fopen('xy2.txt','w');
fputs($plik2, $tekst);
fclose($plik2);

$plik2 = fopen('r2.txt','w');
fputs($plik2, $tekst);
fclose($plik2);

$plik2 = fopen('shoot2.txt','w');
fputs($plik2, $tekst);
fclose($plik2);
?><html><head> <meta name="viewport" content="width=device-width">

<script type="text/javascript" src="jquery.js"></script>

<script>
var statek=0;
var first=0;
var mx=0;
var my=0;
var hhh=0;
var petla=0;
function kurs(ttt){
statek = ttt;
$(document).mousemove(function(event){
$("#kursor").html(ttt);
$("#kursor").show();
    $("#kursor").css("margin-left", event.pageX);
	$("#kursor").css("margin-top", event.pageY);
}); 
}
function zapis(){
if(statek==1){
if($('#j').val()<statek){
zm=$('#j').val();
zm++;
$('#j').val(zm);
}else{
kurs('');
$("#kursor").hide();
$('#ready').val('0');
zm=0;
first=0;
}
}

if(statek==2){
if($('#d').val()<statek){
zm=$('#d').val();
zm++;
$('#d').val(zm);
}else{
kurs('');
$("#kursor").hide();
$('#ready').val('0');
zm=0;
first=0;
}
}

if(statek==3){
if($('#t').val()<statek){
zm=$('#t').val();
zm++;
$('#t').val(zm);
}else{
kurs('');
$("#kursor").hide();
$('#ready').val('0');
zm=0;
first=0;
}
}

if(statek==4){
if($('#c').val()<statek){
zm=$('#c').val();
zm++;
$('#c').val(zm);
}else{
kurs('');
$("#kursor").hide();
$('#ready').val('0');
zm=0;
first=0;
}
}

if(statek==5){
if($('#p').val()<statek){
zm=$('#p').val();
zm++;
$('#p').val(zm);
}else{
kurs('');
$("#kursor").hide();
$('#ready').val('0');
zm=0;
first=0;
}
}

if(statek==6){
if($('#s').val()<statek){
zm=$('#s').val();
zm++;
$('#s').val(zm);
}else{
kurs('');
$("#kursor").hide();
$('#ready').val('0');
zm=0;
first=0;
}
}

}
function oznacz(men){

$('#'+men).html(statek);

}

function check(a,b,x,y){
var tor=0;
mx=$('#mx').val();
my=$('#my').val();
if (first==0){
tor=1;
first=1;
$('#mx').val(x);
$('#my').val(y);
}else if(($('#j').val()<statek) &&($('#d').val()<statek) &&($('#t').val()<statek) &&($('#c').val()<statek) &&($('#p').val()<statek) &&($('#s').val()<statek)){
if(((mx==x+1) && (my==y+1)) || ((mx==x+1) && (my==y+1)) || ((mx==x-1) && (my==y+1)) || ((mx==x+1) && (my==y-1)) || ((mx==x+1) && (my==y)) || ((mx==x-1) && (my==y)) || ((mx==x-1) && (my==y-1)) || ((mx==x) && (my==y+1)) || ((mx==x) && (my==y-1))){
tor=1;
$('#mx').val(x);
$('#my').val(y);

//alert('x='+x+' y='+y+' mx='+mx+' my='+my+' first='+first);
}


}

if(tor==1){
zapis();
oznacz(a);
$(b).val('1');
hhh = x + 'a' + y + 'z' + $('#zapisz').val();

$('#zapisz').val(hhh);

}
tor=0;
}
function readyt(){
if(($('#j').val()==1) && ($('#d').val()==2) &&($('#t').val()==3) &&($('#c').val()==4) &&($('#p').val()==5) &&($('#s').val()==6)){
ooo=$('#zapisz').val();
$.get("save2.php", { key : ooo },  function(data) {
});
$('#licz').val('1');
}
}


function licza(){
if ($('#licz').val()==1){
petla++;
}
if(petla==3){
window.location.href ='server2.php';
}
}

window.setInterval('licza();',1000);
</script>

<style>
body{
color:ffffff;
background: url(tlo.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  font-size:20;
}
td {
padding-left:5;
padding-right:5;
font-size:20;
}

</style>

</head>
<body >

<center>

<div style="display:none;position:absolute;" id="kursor">xdfdrhj</div>

<div id="pregmath">preg math</div>

<?
//".$i." ".$j." onclick=\"alert('".$i." ".$j."' );\"
echo "<table border=\"1\"  id=\"tabela\" style=\"display:none;\">";
for ($i=1;$i<=10;$i++){
echo "<tr>";
for ($j=1;$j<=10;$j++){
echo "<td id=\"".$i."a".$j."\" onclick=\"if($('#".$i."b".$j."').val()=='0'){check('".$i."a".$j."','#".$i."b".$j."',".$i.",".$j.");}\">
<font color=\"ffffff\" >0</font>
<input type=\"hidden\" id=\"".$i."b".$j."\" value=\"0\">

</td>";
}
echo "</tr>";
}
echo "</table>";




?>
<div id="pregmath2">
stand up ship!<br><br>
<input type="hidden" id="ready" value="0">
<input type="button" value="1" id="jeden" onclick="$('#tabela').show();if($('#ready').val()==0){$('#ready').val('1');$('#jeden').hide();kurs('1');}"><input type="hidden" id="j" value="0"><br>
<input type="button" value="2" id="dwa" onclick="$('#tabela').show();if($('#ready').val()==0){$('#ready').val('1');$('#dwa').hide();kurs('2');}"><input type="hidden" id="d" value="0"><br>
<input type="button" value="3" id="trzy" onclick="$('#tabela').show();if($('#ready').val()==0){$('#ready').val('1');$('#trzy').hide();kurs('3');}"><input type="hidden" id="t" value="0"><br>
<input type="button" value="4" id="cztery" onclick="$('#tabela').show();if($('#ready').val()==0){$('#ready').val('1');$('#cztery').hide();kurs('4');}"><input type="hidden" id="c" value="0"><br>
<input type="button" value="5" id="piec" onclick="$('#tabela').show();if($('#ready').val()==0){$('#ready').val('1');$('#piec').hide();kurs('5');}"><input type="hidden" id="p" value="0"><br>
<input type="button" value="6" id="szesc" onclick="$('#tabela').show();if($('#ready').val()==0){$('#ready').val('1');$('#szesc').hide();kurs('6');}"><input type="hidden" id="s" value="0"><br>

</div>
<input type="button" value="next ship" onclick="zapis();"><br>
<input type="button" value="ready" onclick="readyt();">

<input type="hidden" id="mx" value="0">
<input type="hidden" id="my" value="0">
<input type="hidden" id="zapisz" value="0">
<input type="hidden" id="licz" value="0">
