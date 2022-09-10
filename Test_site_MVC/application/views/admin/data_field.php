<?php
ini_set('display_errors','on');
$id_goods_field=$_GET['df'];
$add="";
$query = "select id_category_goods,name_field from goods_field where id='$id_goods_field' limit 0,1";//выполняем запрос
$result = mysql_query($query,$link);
$n=mysql_num_rows($result);
$id_goods=mysql_result($result,0,'id_category_goods');
$name_field=mysql_result($result,0,'name_field');
$belonging=$id_goods;


//какие данные предполагается выводить
$var_n[0]="id_goods_field";
$var_n[1]="Name";
$var_n[2]="switched";
$var_n[3]="id";
//исключены из обновления таблицы
$ecluded[0]="id";
$ecluded[1]="id_goods_field";

$forced[0]="switched";
//$ecluded[1]="switched";
//строки добавления:
$var_add[0]="add_Name";
$var_add[1]="add_switched";



$query = "select * from goods_field_data_field where id_goods_field='$id_goods_field'";//выполняем запрос
$result = mysql_query($query,$link);
$n=mysql_num_rows($result);
$back_to_filter=0;

if(isset($_POST['delete'])){
    $delete=$_POST['delete'];
    for ($i8=0;$i8<$n;$i8++){
        if(isset($delete[$i8])){
            echo "<br>".$delete[$i8];
            $delete_all=$delete[$i8];
            if (($delete_all!="")&&(isset($_POST['delete_btn']))){
                //$n_seq_del=1;
                $delete_with_id=$delete_all;
                $query_del = "delete from goods_field_data_field where id='$delete_all'";
                $result_del = mysql_query($query_del,$link);
            }
        }

    }
}


for($i=0;$i<$n;$i++){
    for($i1=0;$i1<count($var_n);$i1++){
    $content=$var_n[$i1];
    $var[$content][$i]=mysql_result($result,$i,$content);;
    }
}


if (isset($_GET['idtd'])){
    $idtd=$_GET['idtd'];
    $back_to_filter=1;
}
for($i=0;$i<$n;$i++){
    for($i1=0;$i1<count($var_n);$i1++){
        $posted=$var_n[$i1];

            if(isset($_POST[$posted][$i])){
            $var[$posted][$i]=$_POST[$posted][$i];
            //echo "<br>".$var[$posted][$i];
            }
        else{
            //$var[$posted][$i]="";
        }
            //echo "<br>".$var['name'];
        }
}
for($i1=0;$i1<count($var_add);$i1++){
    $posted=$var_add[$i1];

    if(isset($_POST[$posted])){
        $v_add[$posted]=$_POST[$posted];
    }
    else{
        //$v_add[$posted]="";
    }

}



if (isset($_POST['save'])&&($v_add['add_Name']!="")){
    $query_if_exist = "select Name from goods_field_data_field where Name='$v_add[add_Name]' and id_goods_field='$id_goods'";//выполняем запрос
    $result_if_exist = mysql_query($query_if_exist,$link);
    $n_if_exist=mysql_num_rows($result_if_exist);
    //echo $n_if_exist;
    if ($n_if_exist==0){

        if (!empty($idtd)){
            $add=$add."/idtd/".$idtd;
        }
        else{
            $add="";
        }
        $_SESSION['new_header']="df/$id_goods_field".$add;

        $query_insert = "insert into goods_field_data_field values(0,'$id_goods_field','$v_add[add_Name]','$v_add[add_switched]')";
        //echo $query_insert;
        mysql_query($query_insert, $link) or die(mysql_error());

    }
    else{
        $v_add['add_Name']="";
    }

}


if (isset($_POST['save'])){
    for($i=0;$i<$n;$i++){
        $id=mysql_result($result,$i,'id');
        $var_table="goods_field_data_field";
        $id_tables=$id;
        for($v=0;$v<count($var);$v++){
            $exclude_this=0;
            $posted=$var_n[$v];
            //if($v!=$excluded)
            if (isset($ecluded)){
                for($ex=0;$ex<count($ecluded);$ex++){
                    if($ecluded[$ex]==$posted){
                        $exclude_this=1;
                    }
                }
            }
            if ($exclude_this==0){
                if((isset($var[$posted][$i]))){
                $variables=$var[$posted][$i];
                $variables_cont=$var[$posted][$i];
                 //echo $variables_cont;
                    if($variables_cont!=mysql_result($result,$i,$posted)){
                        $query_replace = "update $var_table set $posted ='$variables_cont' where id='$id_tables'";
                        //echo $query_replace;
                        mysql_query($query_replace, $link) or die(mysql_error());
                    }
                }

            }
        }
    }
}


//$query = "select * from goods_field_data_field where id_goods_field='$id_goods_field'";//выполняем запрос
//$result = mysql_query($query,$link);
//$n=mysql_num_rows($result);
////////////////////////////////////////////////////

echo "<FORM METHOD='POST'>";
if(isset($name_of_goods)){
echo "<h3>данные таблиц:".$name_of_goods."</h3>";}
include("inc/mini_map_categories.php");
echo "<a href='/tv/".$id_goods."'><h1>поля для:<u>".$name_field."</u></h1></a>";
if($back_to_filter==1){
    echo "<h2><a href='/td/".$idtd."'>вернуться в:<b>товар №:<font color=red>".$idtd."</b></font></a></td></h2>";
}
echo " <TABLE  border=1 cellspacing='1' cellpadding='1' align='left' valign='top'>";
echo "<tr><td>
	имя
	</td><td>
	активно
	</td><td>
	удалить
	</td></tr>";
for($i=0;$i<$n;$i++) {
    $id=mysql_result($result,$i,'id');
    echo "<tr>";

    echo "<td><input type='text' size='20' name='Name[".$i."]' value='".$var['Name'][$i]."'></td>";
    if($var['switched'][$i]=="on"){
        echo "<td><input type='checkbox' name='switched[".$i."]' checked></td>";
    }
    else{
        echo "<td><input type='checkbox' name='switched[".$i."]'></td>";
    }
    echo "<td><input type='checkbox' name='delete[".$i."]' value='".$id."'><font size=1>удалить</font></td>";
    echo "</tr>";

}
echo "<td><input type='text' size='20' name='add_Name' value=''></td>";
//echo "<td><input type='text' size='20' name='add_switched' value='".$v_add['add_switched']."'></td>";
echo "<td><input type='checkbox' name='add_switched' checked></td>";

echo "</td></tr>";
echo "<td>";
echo "<input type='submit' name='save' value='сохранить' class='button red'>";
echo "<input type='submit' name='delete_btn' value='удалить отмеченные' class='button red'>";

echo "</td></tr>";
echo "</table>";

echo "</form>";


?>
