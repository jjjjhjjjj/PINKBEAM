<meta charset="euc-kr">
<?
   $phone = $phone1."-".$phone2."-".$phone3;
 //  $juminnum = $juminnum1."-".$juminnum2;

   include "dbconn.php";       // dconn.php ������ �ҷ���

   $sql = "select * from custom_info where u_id='$u_id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);
   
   if($exist_id) {
     echo("
           <script>
             window.alert('�ش� ���̵� �����մϴ�.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   
   else
   {            // ���ڵ� ���� ����� $sql�� �Է�
	    $sql = "insert into custom_info(u_id, u_pw, name, jumin1, jumin2, phone, month) ";
	    $sql .= "values('$u_id', '$u_pw', '$name', '$jumin1','*******','$phone','$month')";

		mysql_query($sql, $connect);  // $sql �� ����� ��� ����
		
   }

   mysql_close();                // DB ���� ����
   echo "
	   <script>
	    location.href = 'join_complete.php';
	   </script>
	";
?>

   
