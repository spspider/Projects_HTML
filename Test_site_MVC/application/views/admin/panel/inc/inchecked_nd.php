<?php
for ($i=0;$i<$n;$i++){
$to_clear_nd[$i]=0;
$filters_nd[$i]="";
}
if(isset($equal_m)){
    for ($i=0;$i<$n;$i++){
        for ($i1=1;$i1<count($equal_m)+1;$i1++){
            if ($to_clear_nd[$i]!=1){
               if (($id_field[$i]==$where_m[$i1])&&($equal_m[$i1]=="nd")){
                   $to_clear_nd[$i]=1;
                  }

           else{$to_clear_nd[$i]=0;
           }
        }
    }
}




    for ($i=0;$i<$n;$i++){//цикл из всех наименований
            for($i2=1;$i2<count($where_m)+1;$i2++){//цикл значений
                if (($where_m[$i2]!=$id_field[$i])||($equal_m[$i2]!="nd")){
                    $filters_nd[$i]=$filters_nd[$i].";".$where_m[$i2]."=".$equal_m[$i2];
               }

            }
        }

}
for ($i=0;$i<$n;$i++){
//echo "<br>".$to_clear_nd[$i];
}