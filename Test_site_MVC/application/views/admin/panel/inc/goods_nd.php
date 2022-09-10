<?php
//создаем список товаров
$query_goods_nd = "select id from goods where category='$category'";//выполняем запрос
$result_goods_nd =mysql_query($query_goods_nd, $link) or die(mysql_error());
if(!empty($result_goods_nd)){
    $n_goods_nd=mysql_num_rows($result_goods_nd);

    for($i=0;$i<$n_goods_nd;$i++){
        $goods_id_nd[$i]=mysql_result($result_goods_nd,$i,'id');
        //echo "<br>". $goods_id_nd[$i];
    }
}
if(isset($where_m)){
    //создаем список фильтра
    for($i=1;$i<count($where_m)+1;$i++){
        if ($equal_m[$i]=="nd"){
            $query_have_attributs_nd = "select id_goods from goods_have_attributs where id_goods_field='$where_m[$i]'";//выполняем запрос
            $result_have_attributs_nd =mysql_query($query_have_attributs_nd, $link) or die(mysql_error());
            if(!empty($result_have_attributs_nd)){
                $n_have_attributs_nd=mysql_num_rows($result_have_attributs_nd);
                for($i1=0;$i1<$n_have_attributs_nd;$i1++){
                    $have_attributs_id_nd[$i][$i1]=mysql_result($result_have_attributs_nd,$i1,'id_goods');
                    //echo "<br>".$have_attributs_id_nd[$i1][$i];
                }
            }
        }
    }
//по списку фильтра список товаров
    for($i=1;$i<count($where_m)+1;$i++){
        $i2=0;
        //if ($equal_m[$i]=="nd"){
        if (isset($have_attributs_id_nd[$i])){
            for($i1=0;$i1<$n_goods_nd;$i1++){
                    if (!in_array($goods_id_nd[$i1],$have_attributs_id_nd[$i] )) {
                        //echo "<br>".$goods_id_nd[$i1];
                        if (isset($list_goods_nd)){
                            if (!in_array($goods_id_nd[$i1],$list_goods_nd )) {
                            $list_goods_nd[$i2]=$goods_id_nd[$i1];
                            //echo "<br>".$list_goods_nd[$i2];
                            $i2++;
                            }
                        }
                        else{
                            $list_goods_nd[$i2]=$goods_id_nd[$i1];
                            $i2++;
                        }

                    }

            }
        }
        //}
    }

//echo "count".count($list_goods_nd);
//for($i=0;$i<count($list_goods_nd);$i++){
    //echo "<br>".$list_goods_nd[$i];
   //}
}
//$new_array = array_merge($ar1, $ar2);
?>