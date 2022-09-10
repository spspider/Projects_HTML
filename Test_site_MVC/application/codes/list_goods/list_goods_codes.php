<?php
//echo "123";
$link=LINK;
$belonging=$_GET['l'];
$add_belong_category=$belonging;
$result_pages = mysql_query("select count(*) from goods", $link);
$total = mysql_result($result_pages, 0);

$up_limit=UP_LIMIT;
$down_limit=DOWN_LIMIT;

//include("inc/filter.php");
$and_filter="";
if (defined('FILTER')) {
    $and_filter=FILTER;
    //echo $and_filter;
}
$query = "select * from goods where category='$belonging' $and_filter order by price ASC limit $up_limit,$down_limit ";//выполняем запрос
$result = mysql_query($query,$link) or die(mysql_error());
if (!empty($result)){
    $n=mysql_num_rows($result);

    $query_category = "select * from category_goods where id='$belonging' limit 0,1";//выполняем запрос
    $result_category = mysql_query($query_category,$link);


    $all_pages = mysql_result(mysql_query("select count(*) from goods  where category='$belonging' ", $link),0);
    if (!defined('ALL_PAGES')) {
        define ("ALL_PAGES",$all_pages);
    }


    for($i=0;$i<$n;$i++) {
        $id=mysql_result($result,$i,'id');
        //echo "<tr>";

        $id_photo=mysql_result($result,$i,'id_photo');
        //вставляем фото
        if (!empty($id_photo)){
            $query_photo = "select photo from goods_photo where id ='$id_photo' limit 0,1";//выполняем запрос
            $result_photo = mysql_query($query_photo,$link);
            $num_rows = mysql_num_rows($result_photo);
            if($num_rows>0){
                $picture[$i]=mysql_result($result_photo,0,'photo');}
            ;}
        else{
            $query_photo = "select photo from goods_photo where id_goods ='$id' limit 0,1";//выполняем запрос
            $result_photo = mysql_query($query_photo,$link);
            $num_rows = mysql_num_rows($result_photo);
            if($num_rows>0){
                $picture[$i]=mysql_result($result_photo,0,'photo');
            }
        }
    }
}
/**
 * Created by JetBrains PhpStorm.
 * User: Malutka
 * Date: 24.01.13
 * Time: 11:58
 * To change this template use File | Settings | File Templates.
 */