<html>
<head>
<title>Jake's DB TEST</title>
</head>
<body>
  <?
  header('Content-Type: text/html; charset=utf-8');
      include("./dbconnection.php");
      $connect=dbconn();
  ?>
  <form action='./post.php' name='review_table' method='post'>
<br>
<br>
<CENTER>DB로 전송할 값 입력받기</b></div><br>
<form action="" method="post">
<label>아 이 디 : </label><input type="text" name="u_id" class="box"/><br>
<label>비밀번호 : </label><input type="text" name="u_pw" class="box"/><br>
<label>이    름 : </label><input type="text" name="name" class="box"/><br>
<label>연 락 처 : </label><input type="text" name="phone" class="box"/></br>
<label>개월  수 : </label><input type="text" name="month" class="box"/>

<center><input type="submit" value="DB로 전송"/><br />

</form>
</body>

</html>
