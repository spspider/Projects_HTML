<?php

$id_tv=$_GET['td'];
ini_set('display_errors','off');
require_once ('inc/imgresize.php');


//require ("../link_connect.php");
$query = "select * from goods where id='$id_tv' limit 0,1";//выполняем запрос
$result = mysql_query($query,$link);
$n=mysql_num_rows($result);
$belonging=mysql_result($result,0,'category');
//echo "bel".$belonging;
$category=$belonging;
$switch=$_POST["switch"];

for($r=0;$r<10;$r++){
    if (isset($switch[$r])){
     $_SESSION['on']=$on=$r;
     //
     ;}
    else{
    $on=$_SESSION['on'];
    $button[$on]="red";
    }
}
for($r=0;$r<10;$r++){
    if($on!=$r){
    $button[$r]="white";
    }
}

//print <<<HERE
echo "<table>";

echo "<tr><td>";
include("inc/mini_map_categories.php");
echo "</td></tr>";


echo " <tr><td><form method='POST'>
    <input type='submit' name='switch[0]' value='фильтры' class='button ".$button[0]."'>
    <input type='submit' name='switch[1]' value='основные' class='button ".$button[1]."'>
    <input type='submit' name='switch[2]' value='подробно' class='button ".$button[2]."'>
    <input type='submit' name='switch[3]' value='статистика' class='button ".$button[3]."'>
    <input type='submit' name='switch[4]' value='фото' class='button ".$button[4]."'>
    <input type='submit' name='switch[5]' value='отзывы' class='button ".$button[5]."'>
    </form></td></tr>";


echo "<tr><td>";
if ($on==0){
    include("tovar_detailed/characteristiks.php");//характеристики
echo "</td></tr>";}
if ($on==1){
echo "<tr><td>";
    include("tovar_detailed/table_of_goods_tovar.php");//характеристики
echo "</td></tr>";}
if ($on==2){
echo "<tr><td>";
    include("tovar_detailed/detailed.php");//характеристики
echo "</td></tr>";}
if ($on==3){
    echo "<tr><td>";
    include("tovar_detailed/statistics.php");//характеристики
    echo "</td></tr>";
}
if ($on==4){
    echo "<tr><td>";
    include("tovar_detailed/photo.php");//характеристики
    echo "</td></tr>";
}
if ($on==5){
    echo "<tr><td>";
    include("tovar_detailed/rewiev.php");//характеристики
    echo "</td></tr>";
}
echo "</td></tr>";

echo "</table>";


//include("tovar_detailed/table.php");//описание
//include("");//картинки
//include("")//описание
//include("")//отзывы

?>
