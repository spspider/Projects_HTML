<?php
include(SITE_ROOT."application/codes/general/view_main_detailed/view_main_detailed.php");
//////////////////////////////////////////////////////////////
echo "<style>
   .sku {
    font: 12pt sans-serif;
    color:#cccccc;
   }
   .name {
    font: 17pt sans-serif;
    }
   .price {
    font: 17pt sans-serif;
    }
    .instock {
    font: 17pt sans-serif;
    color: #11AA66;
    }
     .outstock {
    font: 17pt sans-serif;
    color: #AAAAAA;
    }
    hr.style-one {
    border: 0;
    height: 1px;
    background: #333;
    background-image: -webkit-linear-gradient(left, #FFF, #ccc, #FFF);
    background-image:    -moz-linear-gradient(left, #FFF, #ccc, #FFF);
    background-image:     -ms-linear-gradient(left, #FFF, #ccc, #FFF);
    background-image:      -o-linear-gradient(left, #FFF, #ccc, #FFF);
    }
    .price-bg {
    background: #FDFADC;
    border-bottom: 1px solid #E6E3BD;
    border-radius: 5px;
    border-right: 1px solid #E6E3BD;
    margin-left: -0.7em;
    margin-right: 0.5em;
    padding: 0.35em 0.8em;
    position: relative;
    z-index: 5;
    font: 22pt sans-serif bold;
    font-weight: 800;
    text-shadow: 0px 1px 2px #FFFFFF;
    font-family: 'Arial', 'Helvetica', 'FreeSans', 'Liberation Sans', 'Nimbus Sans L', sans-serif;
    color: #329A1C;
    }

  </style>";

//$instock=0;
print <<<HERE
HERE;

echo "<table border=0>
<tr><td colspan='5'>
<div class='name'>$name</div>
<hr class='style-one' align='center' />
</td></tr>
<tr><td>
<table border=0>
";
if(file_exists($main_photo)){
echo "<tr><td><A HREF='/".$main_photo."' ><IMG SRC='/".$main_photo."' ALT='".$alt_name."' height='10%' width='200' border=0 class='mini-p white'></a>
    </td></tr>";
}
else{
    echo "<tr><td>изображение<br>отсутствует</td></tr>";
}
echo "<tr><td>";
    for($i=0;$i<$n_ph;$i++){
    echo "<A HREF='/".$all_photos[$i]."' target='blank' ><IMG SRC='/".$all_photos[$i]."' ALT='".$alt_name."' height='10%' width='50' border=0 class='mini-p white'></a>";
    }

echo "</td></tr>
</table>
</td><td>
    <table border=0>
    <tr><td colspan='5'>";
     if($instock>0){
         echo "<div class=instock>
         Есть в наличии</div>";
     }
    else{
        echo "<div class=outstock>
         Ожидается</div>";
    }
    echo "</td></tr><tr><td>
    <div class='price-bg'>
    $price грн.

    </div>
    </td><td>
    на складе:".$instock;

    echo "<div class='sku'>id:$gid</div>";
    echo "<A HREF='/b/".$gid."/' class='button green'>купить</a>
    </td></tr><tr><td colspan='5'>
    $short
    ";
    //echo "<>";

    echo "</td></tr>";
    echo "</table>";
echo "</td></tr>";

echo "<tr><td colspan='5'>";
echo "<hr class='style-one' align='center' />";

echo $detailed;

echo "</td></tr>";
echo "<tr><td colspan='5'>";
echo "<hr class='style-one' align='center' />";

include("view_main_detailed/rewievs.php");

echo "</td></tr>";
echo "</table>";

/**
 * Created by JetBrains PhpStorm.
 * User: Malutka
 * Date: 24.01.13
 * Time: 9:43
 * To change this template use File | Settings | File Templates.
 */