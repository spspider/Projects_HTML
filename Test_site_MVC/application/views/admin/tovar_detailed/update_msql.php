<?php
//echo "<h3>included</h3>";
for($v=0;$v<count($variables_cont_mass);$v++){

    $variables=$variables_mass[$v];
    $variables_cont=$variables_cont_mass[$v];

    if($variables_cont!=mysql_result($var_result,$var_id_next,$variables)){
        $query_replace = "update $var_table set $variables ='$variables_cont' where id='$id_tables'";
        echo $query_replace;
        mysql_query($query_replace, $link) or die(mysql_error());
        //mysql_query($query_replace, $link) or die(mysql_error());
    }

}
unset($variables_cont_mass);
unset($variables_mass);
?>