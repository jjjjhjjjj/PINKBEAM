<?
session_start();
?>

<meta charset="euc-kr">
<?
if(!$id) {
echo ("<script> window.alert('���̵� �Է��ϼ���.')
  history.go(-1)</script>");
exit;
}

if(!$pass) {
	echo ("<script> window.alert('��й�ȣ�� �Է��ϼ���.')
  history.go(-1)</script>");
	exit;
}

include "dbconn.php";

$sql = "select * from custom_info where u_id='$id'";
$result= mysql_query($sql,$connect);
$num_match=mysql_num_rows($result);

if(!$num_match){
 echo("<script> window.alert('��ϵ��� ���� ���̵��Դϴ�.')
  history.go(-1)</script>");
}else {
 $row = mysql_fetch_array($result);
 $db_pass = $row[u_pw];
 
 if($pass != $db_pass){
  echo ("<script> window.alert('��й�ȣ�� Ʋ���ϴ�.')
  history.go(-1)</script>");
  exit;
 }else {
  $userid = $row[u_id];
  $username = $row[name];

  $_SESSION['userid'] = $userid;
  $_SESSION['username'] = $username;

  
  echo ("<script>  location.href='main.php'</script>");
 }
}
?>