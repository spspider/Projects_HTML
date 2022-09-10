<?php
if(isset($_GET['c'])){$category=$_GET['c'];}
$category_panel=$category;
include("panel_vertical_code.php");
if (isset($category_mass)){
//    for($i=count($category_mass);$i>0;$i--){
//    echo "<br>".$category_mass[$i];
//    }

    for($i=0;$i<count($category_mass);$i++){
    echo "<br>id".$category_mass[$i];
        echo "deep:".$shift_mass[$i];
        echo "index".$index[$i];
    }

}