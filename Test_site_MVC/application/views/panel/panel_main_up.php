<?php
$belonging=0;
if(isset($_GET['c'])){
    $belonging=$_GET['c'];
}
$i7=0;
$belonging_from=$belonging;
$category_id[1]=$belonging_from;
while($belonging_from!=0){
    $query_cat = "select id,belonging,category_name from category_goods where id='$belonging_from'";
    $result_cat = mysql_query($query_cat,$link);
    $myrow = mysql_fetch_array($result_cat);
    $belonging_from=$myrow['belonging'];
    if ($myrow['belonging']!=""){
        $i7++;
        $category_id[$i7+1]=mysql_result($result_cat,0,'belonging');
        $category_name[$i7]=mysql_result($result_cat,0,'category_name');
    }
}
$category_id[count($category_id)]=0;
$category_name[count($category_id)]="главная";
for($i6=count($category_id);$i6>0;$i6--){
    echo "| <a href='/c/".$category_id[$i6]."'>".$category_name[$i6]."</a>";
}

?>
