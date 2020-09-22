<?php
  header('Content-Type: text/html; charset=utf-8');
    include './dbconnection.php';
    $connect=dbconn();

    $userid=$_POST['u_id'];
    $userpw=$_POST['u_pw'];
    $username=$_POST['name'];
    $userphone=$_POST['phone'];
    $usermonth=$_POST['month'];
    $jumin1=$_POST['month'];
    $jumin2=$_POST['month'];

    $query="INSERT into custom_info(u_id, u_pw,name, phone, month,jumin1,jumin2)
     values('$userid','$userpw','$username ,'$userphone','$usermonth','$jumin1','$jumin2')";
    mysql_query("set names utf8", $connect);
    mysql_query($query, $connect);

echo("
 <script>
 windows.alert('DB로 전송 완료 !');
 location.href='./main.php'
 </script>"
);
 ?>

