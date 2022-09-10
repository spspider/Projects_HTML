<?php
//ini_set('display_errors', 1);
//echo "<FORM METHOD='POST' action='' enctype='multipart/form-data'>";
echo "<form enctype='multipart/form-data'   method='POST'>";
//var $add_category_name_text;
echo "товары";
if ($_POST){
$add_belonging=$_POST['add_belonging'];
$add_category_name_text=$_POST['add_category_name_text'];
$add_category_name=$_POST['add_category_name'];
}
$result_pages = mysql_query("select count(*) from category_goods", $link);
$total = mysql_result($result_pages, 0);

$query = "select * from category_goods where belonging='$belonging'";//выполняем запрос
$result = mysql_query($query,$link);
$n=mysql_num_rows($result);
///////////////////

//////////////////
echo " <TABLE  border=1 cellspacing='1' cellpadding='1' align='left' valign='top'>";
//$category_name;
/////////////////////////
//include("in_categories_delete.php");
//include("../inc/in_categories_delete.php");
/*


    define('DS', DIRECTORY_SEPARATOR);

    define('D_ROOT', getenv('DOCUMENT_ROOT'));



    include (D_ROOT.DS.'tape.php');

    include (D_ROOT.DS.'ohlc.php');
 */
$add_category_name_text="";
if ($_POST){
for ($i8=0;$i8<$n;$i8++){
    $delete_all=$_POST['delete'][$i8];
    if (($delete_all!="")&&(isset($_POST['delete_btn']))){
        $n_seq_del=1;
        $delete_with_id=$delete_all;
        include("in_categories_delete.php");
        for($i9=count($delete_file);$i9>0;$i9--){
            $delete_ids=$delete_file[$i9];//Это ID для удаления
            $query_file_pic = "select picture from category_goods where id='$delete_ids'";//выполняем запрос
            $result_file_pic = mysql_query($query_file_pic,$link);
            //mysql_result($result_file_pic,0,'picture');//путь картинки для удаления
            unlink (mysql_result($result_file_pic,0,'picture'));
            $query_del = "delete from category_goods where id='$delete_ids'";
            //echo $query_del;
            //echo mysql_result($result_file_pic,0,'picture');
            $result_del = mysql_query($query_del,$link);
        }
    }

}

/////////////////////////
//текущая категория

//for($i=0;$i<10;$i++){



for($i=0;$i<$n;$i++) {
    $id=mysql_result($result,$i,'id');
    if ((isset($_POST['save']))&&($add_category_name_text=="")){
        $rep_category_name=$add_category_name[$id];
        $rep_belonging=$_POST['belong'][$id];
        $picture=mysql_result($result,$i,'picture');
        $query_replace = "replace into category_goods (id,category_name,belonging,picture) values('$id','$rep_category_name','$rep_belonging','$picture')";
        mysql_query($query_replace, $link) or die(mysql_error());
        //echo $query_replace;
    }
}
}

echo "<tr><td>
	изображение
	</td><td>
	открыть
	</td><td>
	имя
	</td><td>
	переместить
	</td><td>
	изменить изображение
	</td><td>
	изображение как анимация
	</td><td>
	отметить для удаления
	</td></tr>";


for($i=0;$i<$n;$i++) {
    $id=mysql_result($result,$i,'id');
    echo "<tr>";
    echo "<td><A HREF='/".mysql_result($result,$i,'picture')."' target='_blank' ><IMG SRC='/".mysql_result($result,$i,'picture')."' ALT='".mysql_result($result,$i,'category_name')."' height='10%' width='50' border=0 class='mini-p white'>
	</A></td>";
    //echo "idod_now:".$idod;
    echo "<td><a href='/oe/".mysql_result($result,$i,'id')."'>открыть</a></td>";
    echo "<td><input type='text' size='14' name='add_category_name[".$id."]' value='".mysql_result($result,$i,'category_name')."'></td>";
    echo "<td><input type='text' size='4' name='belong[".$id."]' value='".mysql_result($result,$i,'belonging')."'></td>";

        //echo SITE_ROOT."application/views/admin/inc/upload_pic_cat_integrated.php";
    include(SITE_ROOT."application/views/admin/inc/upload_pic_cat_integrated.php");

     echo "<td><input type='checkbox' name='delete[".$i."]' value='".$id."'><font size=1>удалить</font></td>";
    echo "</tr>";
    //////////////


    //////////////
}
echo "<td colspan='2'></td>";
echo "<td><input type='text' size='14' name='add_category_name_text' value='".$add_category_name_text."'></td>";
//echo "<td><input type='hidden' size='14' name='add_belonging' value='".$belonging."'></td>";

if (isset($_POST['save'])&&(!empty($_POST['add_category_name_text']))){
    $query_insert = "insert into category_goods values(0,'$add_category_name_text','$add_belonging','')";
    echo $query_insert;
    mysql_query($query_insert, $link) or die(mysql_error());
}
for($i=0;$i<$n;$i++) {

}
echo "</td></tr>";
echo "<td colspan='10'>";
echo "<input type='submit' name='save' value='сохранить категорию' class='button red'>";
echo "<input type='submit' name='delete_btn' value='удалить категорию' class='button red'>";

echo "</td></tr>";
echo "</table>";

echo "</form>";


?>
