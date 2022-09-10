<?php
/*
Plugin Name: GeoIP
Plugin URI: http://www.shopos.ru/
Description: Определения страны/города клиента по ip.
Version: 1.0
Author: Матецкий Евгений
Author URI: http://www.shopos.ru/
*/

add_action('products_info', 'products_info_geoip');

function products_info_geoip()
{
   include(dirname(__FILE__)."/geoipcity.inc");
   include(dirname(__FILE__)."/geoipregionvars.php");
   
   $gi = geoip_open(dirname(__FILE__)."/GeoIPCity.dat", GEOIP_MEMORY_CACHE);
   $record = geoip_record_by_addr($gi, $_SERVER['REMOTE_ADDR']);
   
   if(!$record->city)
	$record->city = "-";
   if(!$record->country_name)
	   $record->country_name = "-";
	   
   geoip_close($gi);	

   return array('name' => 'free_shipping', 'value' => '+бесплатная доставка по '.$record->city);   
}


?>