<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<script>
//check_input()을 이용해 회원가입 폼이 공백이면 에러 메세지가 뜨게함
function check_input()
{

  if (!document.member_form.u_pw.value)
  {
      alert("비밀번호를 입력하세요");    
      document.member_form.u_pw.focus();
      return;
  }

  if (!document.member_form.u_pw_confirm.value)
  {
      alert("비밀번호확인을 입력하세요");    
      document.member_form.u_pw_confirm.focus();
      return;
  }
  
  if (!document.member_form.phone1.value || !document.member_form.phone2.value || !document.member_form.phone3.value )
  {
      alert("전화번호를 입력하세요");    
      document.member_form.phone.focus();
      return;
  }

  for (var i=0;i<member_form.phone1.value.length;i++){
      if (member_form.phone1.value.charAt(i) < "0" || member_form.phone1.value.charAt(i) > "9")
          {
          alert("전화번호는 숫자만 가능합니다.");
          member_form.phone1.focus();
          return false;
  		}
  	}

  for (var i=0;i<document.member_form.phone2.value.length;i++){
      if (document.member_form.phone2.value.charAt(i) < "0" || document.member_form.phone2.value.charAt(i) > "9")
          {
          alert("전화번호는 숫자만 가능합니다.");
          member_form.phone2.focus();
          return false;
  		}
  	}

  for (var i=0;i<document.member_form.phone3.value.length;i++){
      if (document.member_form.phone3.value.charAt(i) < "0" || document.member_form.phone3.value.charAt(i) > "9")
          {
          alert("전화번호는 숫자만 가능합니다.");
          member_form.phone3.focus();
          return false;
  		}
  	}

  if (!document.member_form.month.value)
  {
      alert("개월수를 입력하세요");    
      document.member_form.month.focus();
      return;
  }

  for (var i=0;i<document.member_form.month.value.length;i++){
      if (document.member_form.month.value.charAt(i) < "0" || document.member_form.month.value.charAt(i) > "9")
          {
          alert("개월수는 숫자만 가능합니다.");
          document.member_form.month.focus();
          return false;
  		}
  	}
  
  if (document.member_form.u_pw.value != 
        document.member_form.u_pw_confirm.value)
  {
      alert("비밀번호가 일치하지 않습니다.\n다시 입력해주세요.");    
      document.member_form.u_pw.focus();
      document.member_form.u_pw.select();
      return;
  }

  document.member_form.submit();
}
   
   function reset_form()
   {
      document.member_form.u_pw.value = "";
      document.member_form.u_pw_confirm.value = "";
      document.member_form.phone1.value = "";
      document.member_form.phone2.value = "";
      document.member_form.phone3.value = "";
      document.member_form.month.value = "";

      document.member_form.id.focus();
      return;
   }
</script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/modify.css" rel="stylesheet" type="text/css" media="all">
<title>PINK BEAM Modify</title>
<script src="script/jquery-1.12.3.js"></script>
</head>

<?
    include "dbconn.php";

    $sql = "select * from custom_info where u_id='$userid'";
    $result = mysql_query($sql, $connect);

    $row = mysql_fetch_array($result);

    $phone = explode("-", $row[phone]);
    $phone1= $phone[0];
    $phone2= $phone[1];
    $phone3= $phone[2];
    
    mysql_close();
?>

<body>
<div class="wrap">
	<div class="top">
   	  <div class="top_left">
      	<a href="main.php"><img src="img/top.png" /></a>
      </div>
      <div class="top_right">
      	<img src="img/menubar1.png" alt="메뉴"/>
      </div>
      <div class="top_right2">
      	<img src="img/menubar2.png" alt="메뉴"/>
      </div>
      <ul class="menu">
       	<li><a href="introduction.php"><img src="img/menu1.png" /></a></li>
        <li><a href="intention.php"><img src="img/menu2.png" /></a></li>
        <li><a href="production.php"><img src="img/menu3.png" /></a></li>
        <li><a href="howtouse.php"><img src="img/menu4.png" /></a></li>
        
         <!-- 로그인 안했을 때는 회원가입 이미지, 로그인 했을 때는 회원수정 이미지 -->
        <?php if($userid) {   $_SESSION['userid'] = $userid;?>
        <li><a href="modify_form.php"><img src="img/menu8.png" /></a></li>
        <?php }
        else{ ?>
        <li><a href="join.php"><img src="img/menu5.png" /></a></li>
        <?php } ?>
        
        <!-- 로그인 안했을 때는 로그인 이미지, 로그인 했을 때는 로그아웃 이미지 -->
        <?php if($userid) {   $_SESSION['userid'] = $userid;?>  
        <li><a href="logout.php"><img src="img/menu7.png" /></a></li>
        <?php }
        else{ ?>
        <li><a href="login_form.php"><img src="img/menu6.png" /></a></li>
        <?php } ?>
    </ul>
  </div>
    <div class="main">
   	  <div class="main_top"></div>
       <div class="main_bottom">
   		 <div class="main_left">
       	   <div class="left_menu1"></div>
           <div class="left_menu2"></div>
           <div class="left_menu3"></div>
           <div class="left_menu4"></div>
           <div class="left_menu6"></div>
           <div class="left_menu7"></div>
         </div>
         <form  name="member_form" method="post" action="modify.php"> 
         <div class="main_right">
       	   <div class="right_menu">
           	<div class="intput_box">
           	 <p><?= $row[u_id] ?></p>
              </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
              <input class="input_size" name="u_pw" type="password" value="<?= $row[u_pw] ?>">
             </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
              <input class="input_size" name="u_pw_confirm" type="password" value="<?= $row[u_pw] ?>">
             </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
              <p><?= $row[name] ?></p>
             </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
            	<input class="input_size3" name="phone1" value="<?= $phone1?>">
                <p class="text"> - </p>
                <input class="input_size3" name="phone2" value="<?= $phone2?>">
                <p class="text"> - </p>
                <input class="input_size3" name="phone3" value="<?= $phone3?>">
             </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
              <input class="input_size3" name="month" value="<?= $row[month] ?>">
              <img src="img/join10.png" />
             </div> 
           </div>
         </div>
         <div class="main_send">
         	<img class="img" src="img/join11.png" onclick="reset_form()" />
         	<img class="img" src="img/join7.png"  onclick="check_input()" />
         </div>
       </div>
    </div>
</div>
</form>

<script>
$(function(){
	$(".top_right").click(function(){
		$(".menu").fadeIn("slow");
		$(".top_right2").show();
		$(".top_right").css({display:"none"});
		});
		
	$(".top_right2").click(function(){
		$(".menu").fadeOut("slow");
		$(".top_right").show();
		$(".top_right2").css({display:"none"});
		});
	});

</script>

</body>
</html>
