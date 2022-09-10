<?php
$routes_list = explode(';',$_SERVER['REQUEST_URI']);
for($i2=0;$i2<count($routes_list);$i2++){
    //echo "<br>var:".$routes_list[$i2];

}
for($i1=1;$i1<count($routes_list);$i1++){
    $where="";
    $routes_list_p = explode('=',$routes_list[$i1]);
    for($i2=0;$i2<count($routes_list_p);$i2++){
        if (!$i2%2){
            $where=$routes_list_p[$i2];
            $where_m[$i1]=$where;
        }
        else{
            $equal_m[$i1]=$routes_list_p[$i2];
         }
    }
}

//добавляем адресный фильтр в запрос
//


$filter_msql="";
$and="";

if ((isset($where_m))){
    for($i=1;$i<count($where_m)+1;$i++){
        if (($where_m[$i]!="nd")&&($equal_m[$i]!="nd")){
            if ($i==1){$and=" and ";}
            else{$and=" or ";}
            $filter_msql=$filter_msql.$and."id_goods_field='".$where_m[$i]."' and id_goods_field_data_field='".$equal_m[$i]."'";
            }

        if ($equal_m[$i]=="nd"){
            if ($i==1){$and=" and ";}
            else{$and=" or ";}
            //$filter_msql=$filter_msql.$and."id_goods_field='".$where_m[$i]."' and id_goods_field_data_field='".$equal_m[$i]."'";
        }
    }
}
//echo $filter_msql;
$n_filter="";
$query_filter = "select id_goods from goods_have_attributs where switched='on'$filter_msql";//выполняем запрос
$result_filter =mysql_query($query_filter, $link) or die(mysql_error());
if(!empty($result_filter)){
    $n_filter=mysql_num_rows($result_filter);
}
