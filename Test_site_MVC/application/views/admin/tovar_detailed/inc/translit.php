<?php
function encodestring($st)
{
// ������� �������� "��������������" ������.
$st=strtr($st,"������������������������_",
"abvgdeeziyklmnoprstufh'iei");
$st=strtr($st,"�����Ũ������������������_",
"ABVGDEEZIYKLMNOPRSTUFH'IEI");
// ����� - "���������������".
$st=strtr($st,
array(
"�"=>"zh", "�"=>"ts", "�"=>"ch", "�"=>"sh",
"�"=>"shch","�"=>"", "�"=>"yu", "�"=>"ya",
"�"=>"ZH", "�"=>"TS", "�"=>"CH", "�"=>"SH",
"�"=>"SHCH","�"=>"", "�"=>"YU", "�"=>"YA",
"�"=>"i", "�"=>"Yi", "�"=>"ie", "�"=>"Ye"
)
);
// ���������� ���������.
return $st;
}
?>