<?php
$name="Гость";
$page=0;
$error="";
$clear_to_write=0;
$reviews="";
$ip=$_SERVER['REMOTE_ADDR'];
$per_page=10;
$n_login_admin=0;
require_once("inc/time_from.php");
//расклаываем страницы, из строки http://127.0.0.1/m/d/i/1/p=12/ получаем $_GET['p']=12

if (isset($_GET['p'])){
    $page=$_GET['p'];
    $page=$page*$per_page;
}
//if (isset($_GET['del'])){
//}

$query_rewiev = "select * from review where idgoods='$gid' order by date DESC limit $page,$per_page";//выполняем запрос
$result_rewiev = mysql_query($query_rewiev,$link);
$n_rewiev=mysql_num_rows($result_rewiev);

$all_pages = mysql_result(mysql_query("select count(*) from review  where idgoods='$gid' ", $link),0);


if (isset($_GET['del'])){
    //echo "yes";
}

/////если удалять через форм
if (isset($_POST['del'])){
    $del=$_POST['del'];
    for($i=0;$i<$n_rewiev;$i++){
        if (isset($del[$i])){
            //echo $del[$i];
            $delete=$i;
            $id_rew=mysql_result($result_rewiev,$i,'id');
            $query_del = "delete from review where idgoods='$gid' and id='$id_rew'";
            //echo $query_del;
            mysql_query($query_del, $link) or die(mysql_error());}
    }
}
//
if (isset($_GET['del'])){
    $del=$_GET['del'];
    $id_rew=mysql_result($result_rewiev,$i,'id');
    $query_del = "delete from review where idgoods='$gid' and id='$del'";
    //echo $query_del;
    mysql_query($query_del, $link) or die(mysql_error());

}
//если дата просрочена
$select_date = mysql_query ("SELECT ip,idgoods,date FROM review WHERE ip='$ip' and idgoods='$gid' order by date DESC limit 0,1");
$myrow_date = mysql_fetch_array($select_date);
$date_max=$myrow_date['date'];
$select_date1 = mysql_query ("SELECT * FROM review WHERE ip='$ip' and idgoods='$gid' and UNIX_TIMESTAMP(NOW())-UNIX_TIMESTAMP('$date_max')>10 order by date DESC limit 0,1");
$myrow_date1 = mysql_fetch_array($select_date1);

if ((mysql_num_rows($select_date1)>0)&&(mysql_num_rows($select_date)>0)){
$d=$date_max;
preg_match_all("|(\d+)|",$d,$out);
$date_max_e= mktime($out[0][3],$out[0][4],$out[0][5],$out[0][1],$out[0][2],$out[0][0]);
$wait=0;
$date = date('Y-m-d H:i:s');
preg_match_all("|(\d+)|",$date,$out);
$date_max_e_date= mktime($out[0][3],$out[0][4],$out[0][5],$out[0][1],$out[0][2],$out[0][0]);
$wait=$date_max_e_date-$date_max_e-7200;

if($wait<1){
    $wait=10-$wait;
}
}


//
if(isset($_SESSION['login'])){
    $login=$_SESSION['login'];
    $name=$login;
}
if(isset($_POST['name'])){
    $name=$_POST['name'];
}
if(isset($_POST['save_rw'])){

    if ((!empty($myrow_date1['date']))||(empty($myrow_date['date']))){
        $clear_to_write=1;
    }
    else{
        $error="подождите $wait сек";
    }

    $reviews=$_POST['reviews'];
    if((!empty($reviews))&&($clear_to_write==1)){
        $query_insert = "insert review (id,idgoods,review,date,ip,login,name) values (0,'$gid','$reviews',NOW(),'$ip','$login','$name')";
        mysql_query($query_insert, $link) or die(mysql_error());
    }
}
if((isset($_SESSION['login']))&&(isset($_SESSION['password']))){
    $login=$_SESSION['login'];
    $password=$_SESSION['password'];

    $result_login_admin = mysql_query("SELECT * FROM users WHERE login='$login' AND password='$password' AND activation='1' AND admin='1'",$link); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow_login_admin = mysql_fetch_array($result_login_admin);
    $n_login_admin=mysql_num_rows($result_login_admin);

    $result_login = mysql_query("SELECT * FROM users WHERE login='$login' AND password='$password' AND activation='1'",$link); //извлекаем из базы все данные о пользователе с введенным логином
    $myrow_login = mysql_fetch_array($result_login);
}
else{

}

for($i=0;$i<$n_rewiev;$i++){
    $it_can_delete[$i]=0;
    $review_content[$i]=mysql_result($result_rewiev,$i,'review');
    $id_review_m[$i]=mysql_result($result_rewiev,$i,'id');
    $date_review[$i]=mysql_result($result_rewiev,$i,'date');
    $name_view[$i]=mysql_result($result_rewiev,$i,'name');
    $login_view[$i]=mysql_result($result_rewiev,$i,'login');
    $ip_view[$i]=mysql_result($result_rewiev,$i,'ip');
    if(empty($name_view[$i])){$name_view[$i]=$login_view[$i];}

    $date_table=$date_review[$i];
    preg_match_all("|(\d+)|",$date_table,$out);
    $date_table_now[$i]= mktime($out[0][3],$out[0][4],$out[0][5],$out[0][1],$out[0][2],$out[0][0]);
    //echo "<br>".$date_table_now[$i];



    if(isset($result_login)){
        if(($myrow_login['login'])==$login_view[$i]){
            $it_can_delete[$i]=1;
        }
    }
    if($n_login_admin>0){
        $it_can_delete[$i]=1;
    }
    if(($ip==$ip_view[$i])&&(empty($login_view[$i]))){
        $it_can_delete[$i]=1;
    }

}

/**
 * Created by JetBrains PhpStorm.
 * User: Malutka
 * Date: 29.01.13
 * Time: 13:55
 * To change this template use File | Settings | File Templates.
 */