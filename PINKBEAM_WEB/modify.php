<?session_start();?>
<meta charset="euc-kr">

<?
$phone = $phone1."-".$phone2."-".$phone3;

include "dbconn.php"; // dconn.php 파일을 불러옴

$sql = "update custom_info 
		set u_pw='$u_pw', phone='$phone', month='$month'
		where u_id='$userid'";

mysql_query($sql, $connect); // $sql 에 저장된 명령 실행

mysql_close(); // DB 연결 끊기
echo "<script>location.href = 'modify_complete.php';</script>";
?>