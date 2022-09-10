<?php
/***********************************************************************************
������� img_resize(): ��������� thumbnails
���������:
  $src             - ��� ��������� �����
  $dest            - ��� ������������� �����
  $width, $height  - ������ � ������ ������������� �����������, � ��������
�������������� ���������:
  $rgb             - ���� ����, �� ��������� - �����
  $quality         - �������� ������������� JPEG, �� ��������� - ������������ (100)
***********************************************************************************/
function img_resize($src, $dest, $width, $height, $rgb=0xFFFFFF, $quality=80)
{
  if (!file_exists($src)) return false;

  $size = getimagesize($src);

  if ($size === false) return false;

  // ���������� �������� ������ �� MIME-����������, ���������������
  // �������� getimagesize, � �������� ��������������� �������
  // imagecreatefrom-�������.
  $format = strtolower(substr($size['mime'], strpos($size['mime'], '/')+1));
  $icfunc = "imagecreatefrom" . $format;
  if (!function_exists($icfunc)) return false;

  $x_ratio = $width / $size[0];
  $y_ratio = $height / $size[1];

  $ratio       = min($x_ratio, $y_ratio);
  $use_x_ratio = ($x_ratio == $ratio);

  //$new_width   = $use_x_ratio  ? $width  : floor($size[0] * $ratio);
  //$new_height  = !$use_x_ratio ? $height : floor($size[1] * $ratio);
  //$new_left    = $use_x_ratio  ? 0 : floor(($width - $new_width) / 2);
  //$new_top     = !$use_x_ratio ? 0 : floor(($height - $new_height) / 2);
  if (($width<$size[0])&&($height<$size[1])){  	//echo $size[0];
  $new_width   = $use_x_ratio  ? $width  : floor($size[0] * $ratio);
  $new_height  = !$use_x_ratio ? $height : floor($size[1] * $ratio);
  $new_left    = 0;
  $new_top     = 0;
  }
  else{  $new_width   = $size[0];
  $new_height  = $size[1];
  $new_left    = 0;
  $new_top     = 0;  }
  $isrc = $icfunc($src);
  $idest = imagecreatetruecolor($new_width, $new_height);

  imagefill($idest, 0, 0, $rgb);
  imagecopyresampled($idest, $isrc, $new_left, $new_top, 0, 0,
  $new_width, $new_height, $size[0], $size[1]);

  imagejpeg($idest, $dest, $quality);

  imagedestroy($isrc);
  imagedestroy($idest);

  return true;

}
?>