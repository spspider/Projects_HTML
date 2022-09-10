<?php
include(SITE_ROOT."application/codes/general/basket/basket.php");



////////////////////////////////////////
echo "<FORM METHOD='POST' enctype=multipart/form-data>";
if($n_basket!=0){

echo "
<a href='/'>продолжить покупки</a>


<table border=1>

<tr>
<td>фото:</td>
<td>имя:</td>
<td>марка:</td>
<td>Ид:</td>
<td>цена:</td>
<td>количество:</td>
<td>пересчитать:</td>
<td>удалить:</td>
</tr>";

for($i=0;$i<$n_basket;$i++){
    echo "<tr>";

    if(file_exists($picture[$i])){
        echo "<td><A HREF='/m/d/i/".$picture[$i]."' ><IMG SRC='/".$picture[$i]."' ALT='".$picture[$i]."' height='10%' width='100' border=0 class='mini-p white'></td>";
    }
    else{
        echo "<td>изображение отсуствует</td>";
    }

    echo"
    <td>".$name_view[$i]."</td>
    <td>".$brend[$i]."</td>
    <td>".$id_goods[$i]."</td>
    <td>".$price_view[$i]."</td>
    <td>x<input type='text' size='4' name='count[$id_basket[$i]]' value='".$count_view[$i]."'>
    =$sum_to_this_count[$i]
    </td>
    <td><input type='submit' name='reprice[$id_basket[$i]]' value='пересчитать'  class='button white small'></td>
    <td><a href='/b/del=$id_basket[$i]'>удалить</a></td>
    </tr>";
}
echo "
</table>

";
    //<br><a href='/m/o/'>оформить покупку</a>


echo "</form>";
}
else{
    echo "в корзине еще нет товаров
    <a href='/'>на главную</a>";
}

echo "
<FORM METHOD='POST' action='/makeorder'>
сумма к оплате: $summ грн
<br>
комментарий к заказу
<br>
<textarea style='width: 400px; height: 50px;' name='other'>".$var['other']."</textarea>
<br>
электронная почта:
<input type='text' size='28' name='email' value='".$var['email']."'>
<br>Фамилия Имя Отчество:
<input type='text' size='28' name='name' value='".$var['name']."'>
<br>Телефон:
<input type='text' size='28' name='phone' value='".$var['phone']."'>
<br>город:
<input type='text' size='28' name='city' value='".$var['city']."'>
<br>Область:
<input type='text' size='28' name='region' value='".$var['region']."'>
<br>улица:
<input type='text' size='28' name='street' value='".$var['street']."'>
";
/*
 *
<--
$var1[0]="email";
$var1[1]="name";
$var1[2]="phone";
$var1[3]="phone";
$var1[4]="city";
$var1[5]="region";
$var1[6]="street";
$var1[7]="other";

-->
 */
echo "
<br><select size='0' name='delivery'>";
for($i=0;$i<$n_delivery;$i++){
    if($delivery_price[$i]==""){$delivery_price[$i]=0;}
    echo "<option value='$delivery_name[$i]'>$delivery_name[$i] - $delivery_price[$i]грн</option>";
}
echo "</select>
";
echo "
<br>
<input type='submit' name='proceed' value='оформить'  class='button orange'>
</form>
";



?>