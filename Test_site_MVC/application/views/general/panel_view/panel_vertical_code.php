<?php
$id_cat_2=$category_panel;
$a=0;
if (isset($category_mass)){unset($category_mass);}
$q_blng = "select * from category_goods";//��������� ������
$res_blng=mysql_query($q_blng, $link) or die(mysql_error());
$n_belonging=mysql_num_rows($res_blng); //������ ������� �����
$shift=0;
$endwhile=0;
$n_s=$end=0;
$a=0;
while($endwhile==0){
    for($i1=0;$i1<$n_belonging;$i1++){
        $q_blng_2 = "select * from category_goods where belonging='$id_cat_2'";//��������� ������
        $res_blng_2=mysql_query($q_blng_2, $link) or die(mysql_error());
        $n_belonging_1=mysql_num_rows($res_blng_2); //������ ������� �����
        if ($n_belonging_1>0){
            if (($n_s==0)&&($end==0)){//���� �� ���� ���������
                //$number[$shift+1]=0;
                if ($id_cat_2!=false){$category_mass[$a]=$id_cat_2;$shift_mass[$a]=$shift;
                    if (isset($number[$shift])){$index[$a]=$number[$shift];}else{$index[$a]=0;}
                    $a++;
                }
                $shift++;
                $id_cat_remember[$shift]=$id_cat_2;
                $number[$shift]=0;
            }//���� ��������� ����������, �� ��������


            if($number[$shift]<$n_belonging_1){
            $id_cat_2=mysql_result($res_blng_2,$number[$shift],'id');//������ ����� �� ����������
            }
            else{
                $id_cat_2="";
            }

            $number[$shift]++;
            $end=0;

            if ($n_s==1){$n_s=0;}
            if ($id_cat_2==""){$n_belonging=$n_belonging_1;
                if ($id_cat_remember[$shift]==0){$endwhile=1;break;}
                $number[$shift]=0;
                $shift--;
                if($shift<=0){$shift=0;}
                $end=1;
                if (isset($id_cat_remember[$shift])){
                $id_cat_2=$id_cat_remember[$shift];
                }
                else{
                $id_cat_2="";
                }

            }

            $n_belonging=$n_belonging_1;
        }//���� �������
        if ($n_belonging_1==0){
            if (($shift==0)&&($a==0)){$endwhile=1;$category_mass[$a]=$id_cat_2;$shift_mass[$a]=$shift;
                if(isset($number[$shift])){$index[$a]=$number[$shift];}else{$index[$a]=0;}
                ;$a++; break;}
            if ($id_cat_2!=false){$shift_mass[$a]=$shift;$category_mass[$a]=$id_cat_2;;$index[$a]=$number[$shift];$a++;}
            if ($id_cat_2==false){$endwhile=1;break;}
            if ($shift!=0){
                $id_cat_2=$id_cat_remember[$shift];//������ ����� �� ����������
                $n_s=1;
            };
        }//���� �� �������
    }

}
