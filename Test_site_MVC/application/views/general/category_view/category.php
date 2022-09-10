<?php
$category=0;
if(isset($_GET['c'])){
    $category=$_GET['c'];
}
if (isset($_GET['c'])){$category=$_GET['c'];}

$query = "select id,category_name,picture from category_goods where belonging='$category'";//выполняем запрос
$result = mysql_query($query,$link);
$n=mysql_num_rows($result);

$a=0;
for($i=0;$i<$n;$i++){
$id_now_m[$i]=mysql_result($result,$i,'id');
    $id_now=$id_now_m[$i];
    $query_next = "select id from category_goods where belonging='$id_now'";//выполняем запрос
    $result_next = mysql_query($query_next,$link);
    $n_next_m[$i]=mysql_num_rows($result_next);
    $picture[$i]=mysql_result($result,$i,'picture');
    $category_name[$i]=mysql_result($result,$i,'category_name');
}
/////////////////////////////////////////////////////////////////////////////////////////////
echo "<table border=0 >";
for($i=0;$i<$n;$i++){

 $id_now=$id_now_m[$i];
 //$n_next= $n_next_m[$i];

    if ($a==3){echo "<tr>";}

    echo "<td>";
    echo "<table border='0' class='hidden'>";
    if(!empty($n_next_m[$i])){
        echo "<tr><td><A HREF='/c/".$id_now."'><IMG SRC='/".$picture[$i]."' ALT='".$category_name[$i]."' height='10%' width='150' border=0 class='mini-p white'></td></tr>";
        echo "<tr><td><a href='/c/".$id_now."'>".$category_name[$i]."</a></td></tr>";
    }
    else{
        echo "<tr><td><A HREF='/l/".$id_now."'><IMG SRC='/".$picture[$i]."' ALT='".$category_name[$i]."' height='10%' width='150' border=0 class='mini-p white'></td></tr>";
        echo "<tr><td><a href='/l/".$id_now."'>".$category_name[$i]."</a></td></tr>";
    }
    echo "</table>";
    echo "</td>";

    if ($a==3){echo "</tr>";$a=0;}
    $a++;
}
echo "</table>";
