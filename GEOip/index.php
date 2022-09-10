<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HTML5 Geolocation API</title>
 var submitted=0;
<script type="text/javascript">
if(navigator.geolocation) {
navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;



			//alert(latitude+' '+longitude);
<?
$submitted=0;
if (isset($_POST['submitted'])){
	$submitted=$_POST['submitted'];
	//echo $submitted;
	};
//echo "submitted=".$submitted."";

echo "document.write('<form name=\'form1\' id=\'form1\' method=\'post\'>');";
echo "document.write('<input type=\'text\' name=\'latitude\' value = \'' + latitude + '\'</p>');";
echo "document.write('<input type=\'text\' name=\'submitted_val\' value = \'".$submitted."\'</p>');";
echo "document.write('<input type=\'text\' name=\'longitude\' value = \'' + longitude + '\'</p>');";
echo "document.write('<input type=\'text\' name=\'submitted\' value = \' 1 \'</p>');";
echo "document.write('<input type=\'submit\'name=\'button1\' id=\'button1\' />');";

echo "document.write('</form>');";

//echo 'document.location.href="let.hol.es?latitude=" + latitude';
?>
});

} else {
    alert("Geolocation API не поддерживается в вашем браузере");
    <? $submitted=1; ?>
}
function handleLocationError() {
     <? $submitted=1; ?>
}


</script>

</head>

<body>
</body>
</html>
<?php

date_default_timezone_set('America/Los_Angeles');
//file_put_contents ($filename ,$data );
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
//$submitted=0;


//echo $latitude;
//echo $longitude;
//file_put_contents($file, $person, FILE_APPEND);


$filename = "log.txt";
$timestamp = date('l jS \of F Y h:i:s A');
$data=$somecontent= $_SERVER["REMOTE_ADDR"].$latitude.$longitude.$timestamp."\r\n"; ;
//<?php
//$filename = 'test.txt';
//$somecontent = $data;

// Вначале давайте убедимся, что файл существует и доступен для записи.

if ($submitted==1){
if(is_writable($filename)){

    // В нашем примере мы открываем $filename в режиме "дописать в конец".
    // Таким образом, смещение установлено в конец файла и
    // наш $somecontent допишется в конец при использовании fwrite().
    if (!$handle = fopen($filename, 'a')) {
         echo "Не могу открыть файл ($filename)";
         exit;
    }

    // Записываем $somecontent в наш открытый файл.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Не могу произвести запись в файл ($filename)";
        exit;
    }

    echo $somecontent;

    fclose($handle);

} else {
    file_put_contents ($filename ,$somecontent );
    //fclose($handle);
}
}


//echo $submitted;

?>
<script type="text/javascript">



function submitHidden( )
{
    document.form1.submit();
    //submitted=0;
}
<?php echo "submitted=".$submitted.";"?>
if (submitted==0){window.onload = setInterval( submitHidden, 200 );
}
   <?php
   //echo 'document.location.href="' . $_SERVER['HTTP_REFERER']. '?submitted='.$submitted.'"';
   ?>



</script>




</head>

<body>
</body>
</html>
