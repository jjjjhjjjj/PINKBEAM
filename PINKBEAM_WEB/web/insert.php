<meta charset="euc-kr">
<?

   include "dbconn.php";       // dconn.php ������ �ҷ���
   $result = mysql_query($sql, $connect);

   
	    $sql = "insert into test(id, pw,name) ";
		$sql .= "values('1', '2', '3')";

		mysql_query($sql, $connect);  // $sql �� ����� ��� ����
		echo($sql);
		//echo ("<script>  location.href='main.php'</script>");
   

   mysql_close();                // DB ���� ����
?>

   
