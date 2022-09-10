<?php
include(SITE_ROOT."application/codes/panel/panel_in_goods.php");

//echo "<br>".$filters_1;

//$filters[0][0]=";5=1;7=4";
//$filters[0][1]=";5=13;5=1;7=4";
//echo $_SERVER['REQUEST_URI'];

////////////////////////////////////////////////////////////////////////////////

echo "<TABLE  border=0 cellspacing='0' cellpadding='0' align='left' valign='top'>";
if(isset($equal_m)){
    echo "<tr><td colspan='5'><a href='/m/o/c/".$category."'/><font color='660033'>сбросить все фильтры</font></a></td></tr>";
}
for ($i=0;$i<$n;$i++){

    echo "<tr><td colspan='5'>".mysql_result($result,$i,'name_field')."</td></tr>";
    echo "<tr><td>";
    echo "</td><td>";
    $checked=0;
    //$n_inc=0;
    if ($n_inc[$i]>0){
        echo " <TABLE  border=0 cellspacing='0' cellpadding='0' align='left' valign='top'>";

    for ($i1=0;$i1<$n_inc[$i];$i1++){

        if (!$to_clear[$i][$i1]){
            if($filters_bracket[$i][$i1]!=0){
            echo "<tr><td><a href='/l/".$category."/".$filters[$i][$i1].";".$id_field[$i]."=".$id_field_data_field[$i][$i1]."'><input type='checkbox' name='".$id_field_data_field[$i][$i1]."' > ".$named_field_data_field[$i][$i1]."</a> <small>(".$f_semi[$i][$i1]."".$filters_bracket[$i][$i1].")</small></td></tr>";
            }
            else{
            echo "<tr><td><input type='checkbox' name='' disabled> <font color='#CCCCCC'>".$named_field_data_field[$i][$i1]."</font></a></td></tr>";
            }
         }
        if ($to_clear[$i][$i1]){
            echo "<tr><td><a href='/l/".$category."/".$filters[$i][$i1]."'><input type='checkbox' name='".$id_field_data_field[$i][$i1]."' checked> <font color='#009933'><b>".$named_field_data_field[$i][$i1]."</b></font></a></td></tr>";

        }
        //echo "<tr><td>".$named_field_data_field[$i][$i1]."";
    }
        echo "</table>";
    }

    echo "</td></tr>";
}

echo "</table>";
