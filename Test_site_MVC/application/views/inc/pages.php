<?php
//SHEET_PAGES
//UP_LIMIT
//DOWN_LIMIT

if (defined('ALL_PAGES')) {
    //echo "pages:".ALL_PAGES;
    $pages_in_sheet=ALL_PAGES/SHEET_PAGES;
    //$pages_in_sheet=10/5;
    if ($pages_in_sheet>1){
        for($q=0;$q<$pages_in_sheet;$q++){
            echo "<a href='".MAIN_ROOT.";p=".$q."'>".$q."</a>";
        }
}
}
/**
 * Created by JetBrains PhpStorm.
 * User: Sergey
 * Date: 01.01.13
 * Time: 11:10
 * To change this template use File | Settings | File Templates.
 */