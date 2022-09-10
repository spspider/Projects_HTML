<?
//header ("Content-type: image/png");

$agent = substr($_SERVER['HTTP_USER_AGENT'], 0);
if(preg_match("!(Opera[\s\d\./]+)!msi", $agent, $math))
{
	$agent = $math[1];
	$mysqlAgent = "opera";
}
elseif(preg_match("!(Firefox[\s\d\./]+)!msi", $agent, $math))
{
	$agent = $math[1];
	$mysqlAgent = "firefox";
}
elseif (preg_match("!MSIE([\s\d\./]+)!msi", $agent, $math))
{
	$agent = "Internet Explorer ".$math[1];
	$mysqlAgent = "msie";
}
elseif (preg_match("!(Konqueror[\s\d\./]+)!msi", $agent, $math))
{
	$agent = $math[1];
	$mysqlAgent = "konqueror";
}
elseif (preg_match("!(Iceweasel[\s\d\./]+)!msi", $agent, $math))
{
	$agent = $math[1];
	$mysqlAgent = "iceweasel";
}
elseif (preg_match("!(Lynx[\s\d\./]+)!msi", $agent, $math))
{
	$agent = $math[1];
	$mysqlAgent = "lynx";
}
elseif (preg_match("!(Netscape[\s\d\./]+)!msi", $agent, $math))
{
	$agent = $math[1];
	$mysqlAgent = "netscape";
}
elseif (preg_match("!(Safari[\s\d\./]+)!msi", $agent, $math))
{
	$agent = $math[1];
	$mysqlAgent = "safari";
}

if(preg_match("!(Windows\s?[\s\w\.]+)!", $_SERVER['HTTP_USER_AGENT'], $math))
{
	$os = $math[1];
	if($os == "Windows NT 5.0")
		$os = "Windows 2000";
	elseif($os == "Windows NT 5.01")
		$os = "Windows 2000";
	elseif($os == "Windows NT 5.1")
		$os = "Windows XP";
	elseif($os == "Windows NT 5.2")
		$os = "Windows Server 2003";
	elseif($os == "Windows NT 6.0")
		$os = "Windows Vista";
}
elseif(preg_match("!(Mac\s?OS[\s\w\.]+)!", $_SERVER['HTTP_USER_AGENT'], $math))
	$os = $math[1];
elseif(preg_match("!(Symbian\s?OS[\s\w\./]*)!", $_SERVER['HTTP_USER_AGENT'], $math))
	$os = $math[1];
elseif(preg_match("!(Linux[\s\w\./]+)!", $_SERVER['HTTP_USER_AGENT'], $math))
	$os = $math[1];
elseif(preg_match("!(\w+BSD[\s\w\./]+)!", $_SERVER['HTTP_USER_AGENT'], $math))
	$os = $math[1];
elseif(preg_match("!(\J2ME[\s\w\./]+)!", $_SERVER['HTTP_USER_AGENT'], $math))
	$os = $math[1];
	
include("geoipcity.inc");
include("geoipregionvars.php");
$gi = geoip_open("GeoIPCity.dat", GEOIP_MEMORY_CACHE);
$record = geoip_record_by_addr($gi, $_SERVER['REMOTE_ADDR']);
if(!$record->city)
	$record->city = "-";
if(!$record->country_name)
	$record->country_name = "-";

geoip_close($gi);
echo "Браузер " . $agent . "<br>";
echo "Операционная система " . $os . "<br>";
echo "IP " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Страна " . $record->country_name . "<br>";
echo "Город " . $record->city . "<br>";