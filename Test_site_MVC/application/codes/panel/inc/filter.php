<?php
$filter="";
$and_filter="";
//$filter_msql
if (!empty($filter_msql)) {
    $filter=$filter_msql;
    //$filter=FILTER;
    if(!empty($filter)){
    $query_filter = "select id_goods from goods_have_attributs where switched='on'$filter";//выполняем запрос
    //echo $query_filter;
    $result_filter =mysql_query($query_filter, $link) or die(mysql_error());
    if (!empty($result_filter)){
        $n_filter=mysql_num_rows($result_filter);
        $i2=0;
        for($i=0;$i<$n_filter;$i++){
            $data=mysql_result($result_filter,$i,'id_goods');
            if (!isset($filter_mass)){
                $filter_mass[$i2]=$data;
                $i2++;
            }
            else{
                if (!in_array($data, $filter_mass)) {
                    $filter_mass[$i2]=$data;
                    $i2++;
                }
            }
        }

        for($i=0;$i<count($filter_mass);$i++){
            if($i==0){
                $and_filter=" and id='".$filter_mass[$i]."'";}
            else{
                $and_filter=$and_filter." or id='".$filter_mass[$i]."'";}
        }
        //echo $and_filter;

        //$myrow_filter = mysql_fetch_row($result_filter);
    }
}
}
if(!empty($and_filter)){
define("FILTER",$and_filter);}
//$and_filter;