<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/join_complete.css" rel="stylesheet" type="text/css" media="all">
<title>PINK BEAM Join Complete</title>
<script src="script/jquery-1.12.3.js"></script>
</head>

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
    	<a href="login_form.php"><img src="img/complete1.jpg" /></a>
    </div>
</div>

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
