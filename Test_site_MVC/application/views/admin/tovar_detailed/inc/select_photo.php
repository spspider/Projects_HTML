<?php
$choosed_id_photo=mysql_result($result,$i,'id_photo');


$query_photo = "select id,photo,described from goods_photo where id_goods='$id' limit 0,100";//выполняем запрос
$result_photo = mysql_query($query_photo,$link);
$n_photo=mysql_num_rows($result_photo);
echo "<td><select size='0' name='id_photo[".$id."]'>";

$photo_to_display=mysql_result($result_photo,0,'photo');
for($r=0;$r<$n_photo;$r++){
    $described=mysql_result($result_photo,$r,'described');
    $name_photo=mysql_result($result_photo,$r,'photo');
    $id_photo=mysql_result($result_photo,$r,'id');
    if($id_photo==$choosed_id_photo){
        $photo_to_display=$name_photo;
        if (!empty($described)){
            echo "<option selected value='".$id_photo."'>".$described."</option>";}
        else{
            echo "<option selected value='".$id_photo."'>".$name_photo."</option>";}
   }
    else{
        if (!empty($described)){
        echo "<option value='".$id_photo."'>".$described."</option>";}
        else{
        echo "<option value='".$id_photo."'>".$name_photo."</option>";}
        //echo "<option selected value='".$id."'>".$id."</option>";
    }
}
echo "</select><br>";
if (empty($photo_to_display)){
    echo "изображение пока не загружено";

}
else{
    echo "<A HREF='/".$photo_to_display."' target='_blank' ><IMG SRC='/".$photo_to_display."' height='10%' width='80' border=0 class='mini-p white'>
	</A>";


}
echo "</td>";
?>