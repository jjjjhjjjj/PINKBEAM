<meta charset="euc-kr">
<?

   include "dbconn.php";       // dconn.php 파일을 불러옴
   $result = mysql_query($sql, $connect);

   
	    $sql = "insert into test(id, pw,name) ";
		$sql .= "values('1', '2', '3')";

		mysql_query($sql, $connect);  // $sql 에 저장된 명령 실행
		echo($sql);
		//echo ("<script>  location.href='main.php'</script>");
   

   mysql_close();                // DB 연결 끊기
?>

   
