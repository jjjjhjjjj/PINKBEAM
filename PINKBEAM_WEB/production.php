<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PINK BEAM Production</title>
<script src="script/jquery-1.12.3.js"></script>

<style type="text/css">
* {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
}
.wrap {
	height: 810px;
	width: 1200px;
	margin: auto;
}
.wrap .top {
	height: 160px;
	width: 1200px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #CCC;
	float: left;
	position: relative;
}
.wrap .top .top_left {
	float: left;
	height: 160px;
	width: 1090px;
	position: relative;
}
.wrap .top .top_right {
	float: left;
	height: 160px;
	width: 110px;
	position: relative;
}
.wrap .main {
	background-color:#FFF;
	height: 620px;
	width: 1200px;
	float: left;
}
.wrap .main .main_modal1 {
	width: 1200px;
	height: 620px;
	position: absolute;
	background:url(img/modal1.png);
	display: none;
}
.wrap .main .main_modal2 {
	width: 1200px;
	height: 620px;
	position: absolute;
	background:url(img/modal2.png);
	display: none;
}
.wrap .main .main_modal3 {
	width: 1200px;
	height: 620px;
	position: absolute;
	background:url(img/modal3.png);
	display: none;
}
.wrap .main .main_modal4 {
	width: 1200px;
	height: 620px;
	position: absolute;
	background:url(img/modal4.png);
	display: none;
}
.wrap .main .main_modal5 {
	width: 1200px;
	height: 620px;
	position: absolute;
	background:url(img/modal5.png);
	display: none;
}
.wrap .main .main_topimg {
	background-image: url(img/production.png);
	float: left;
	height: 70px;
	width: 1200px;
}
.wrap .main .main_top {
	float: left;
	height: 290px;
	width: 1200px;
}
.wrap .main .main_top .top_box {
	float: left;
	width: 200px;
	height: 200px;
	border: 1px solid #999;
	border-radius: 100px;
	position: relative;
	margin-right: 50px;
	margin-top: 50px;
	margin-left: 120px;
	overflow: hidden;
}
.wrap .main .main_bottom {
	float: left;
	height: 290px;
	width: 1200px;
}
.wrap .main .main_bottom .bottom_box {
	float: left;
	width: 200px;
	height: 200px;
	border: 1px solid #999;
	border-radius: 100px;
	position: relative;
	margin-right: 50px;
	margin-top: 50px;
	margin-left: 220px;
	overflow: hidden;
}
.wrap .top .menu {
	background-color: #e18197;
	height: 160px;
	width: 1090px;
	position: absolute;
	display: none;
}
.wrap .top .top_right2 {
	position: absolute;
	height: 160px;
	width: 110px;
	right: 0px;
	display: none;
}
.wrap .top .menu li {
	display: block;
	float: left;
	height: 160px;
	width: 181px;
}
</style>
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
  	<div class="main_modal1"></div>
    <div class="main_modal2"></div>
    <div class="main_modal3"></div>
    <div class="main_modal4"></div>
    <div class="main_modal5"></div>
    <div class="main_topimg"></div>
  	<div class="main_top">
   	  <div class="top_box" id="box1">
      	<img src="img/p_img1.jpg" />
      </div>
      <div class="top_box" id="box2">
      	<img src="img/p_img2.jpg" />
      </div>
      <div class="top_box" id="box3">
      	<img src="img/p_img3.jpg" />
      </div>
    </div>
    <div class="main_bottom">
    	<div class="bottom_box" id="box4">
      	<img src="img/p_img4.jpg" />
        </div>
        <div class="bottom_box" id="box5">
      	<img src="img/p_img5.jpg" />
        </div>
    </div>
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
	
	
$(function(){	
	$("#box1").click(function(){
		$(".main_modal1").slideDown();
		$(".main_top").css({display:"none"});
		$(".main_bottom").css({display:"none"});
	});
	
	$(".main_modal1").click(function(){
		$(this).hide();
		$(".main_top").css({display:"block"});
		$(".main_bottom").css({display:"block"});
	});
	
	
		$("#box2").click(function(){
		$(".main_modal2").slideDown();
		$(".main_top").css({display:"none"});
		$(".main_bottom").css({display:"none"});
	});
	
	$(".main_modal2").click(function(){
		$(this).hide();
		$(".main_top").css({display:"block"});
		$(".main_bottom").css({display:"block"});
	});
	
	
		$("#box3").click(function(){
		$(".main_modal3").slideDown();
		$(".main_top").css({display:"none"});
		$(".main_bottom").css({display:"none"});
	});
	
	$(".main_modal3").click(function(){
		$(this).hide();
		$(".main_top").css({display:"block"});
		$(".main_bottom").css({display:"block"});
	});
	
	
		$("#box4").click(function(){
		$(".main_modal4").slideDown();
		$(".main_top").css({display:"none"});
		$(".main_bottom").css({display:"none"});
	});
	
	$(".main_modal4").click(function(){
		$(this).hide();
		$(".main_top").css({display:"block"});
		$(".main_bottom").css({display:"block"});
	});
	
	
		$("#box5").click(function(){
		$(".main_modal5").slideDown();
		$(".main_top").css({display:"none"});
		$(".main_bottom").css({display:"none"});
	});
	
	$(".main_modal5").click(function(){
		$(this).hide();
		$(".main_top").css({display:"block"});
		$(".main_bottom").css({display:"block"});
	});
});

</script>

</body>
</html>
