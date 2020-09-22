<meta charset="euc-kr">
<?
   $phone = $phone1."-".$phone2."-".$phone3;
 //  $juminnum = $juminnum1."-".$juminnum2;

   include "dbconn.php";       // dconn.php 파일을 불러옴

   $sql = "select * from custom_info where u_id='$u_id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);
   
   if($exist_id) {
     echo("
           <script>
             window.alert('해당 아이디가 존재합니다.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   
   else
   {            // 레코드 삽입 명령을 $sql에 입력
	    $sql = "insert into custom_info(u_id, u_pw, name, jumin1, jumin2, phone, month) ";
	    $sql .= "values('$u_id', '$u_pw', '$name', '$jumin1','*******','$phone','$month')";

		mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행
		
   }

   mysql_close();                // DB 연결 끊기
   echo "
	   <script>
	    location.href = 'join_complete.php';
	   </script>
	";
?>

   
