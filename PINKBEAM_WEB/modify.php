<?session_start();?>
<meta charset="euc-kr">

<?
$phone = $phone1."-".$phone2."-".$phone3;

include "dbconn.php"; // dconn.php ������ �ҷ���

$sql = "update custom_info 
		set u_pw='$u_pw', phone='$phone', month='$month'
		where u_id='$userid'";

mysql_query($sql, $connect); // $sql �� ����� ��� ����

mysql_close(); // DB ���� ����
echo "<script>location.href = 'modify_complete.php';</script>";
?>