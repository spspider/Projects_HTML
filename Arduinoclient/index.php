<!DOCTYPE html>
<html>
<body>

<h1>arduino recieve</h1>





<?php
if (!$_GET["indata"]){
$str = "Now data:".$_GET ["indata"]."<br>";

echo $str;
}
else{
echo "<br>";
}
$indata=$_GET["indata"];

$link = mysql_connect('mysql.hostinger.com.ua', 'u883914490_user', '5506487')
    or die('�� ������� �����������: ' . mysql_error());
echo '���������� ������� �����������';
mysql_select_db('u883914490_user') or die('�� ������� ������� ���� ������');

// ��������� SQL-������







$query_select="SELECT * FROM datadb";
$result = mysql_query($query_select);

if (!$result) {
    $message  = '�������� ������: ' . mysql_error() . "\n";
    $message .= '������ �������: ' . $query;
    die($message);
}
echo"<table border='1'>";
while ($row = mysql_fetch_assoc($result)) {
echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['data1']."</td>";
echo "</tr>";

}
echo"<table>";
//////////////////////////////////
if ($_GET["indata"]!=""){
$query_insert ="INSERT INTO datadb VALUES (0,'$indata')";
mysql_query($query_insert, $link) or die(mysql_error());
}
/////////////////////////////////////
//mysql_query($query_select, $link) or die(mysql_error());

// ��������� ����������




mysql_close($link);
?>



</body>
</html>
