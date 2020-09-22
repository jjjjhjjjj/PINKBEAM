<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/login_form.css" rel="stylesheet" type="text/css" media="all">
<title>PINK BEAM Login</title>
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
       	<li><a href="introduction.php"><img src="img/menu1.png"></a></li>
            <li><a href="intention.php"><img src="img/menu2.png"></a></li>
            <li><a href="production.php"><img src="img/menu3.png"></a></li>
            <li><a href="howtouse.php"><img src="img/menu4.png"></a></li>
            <?php if($userid) {?>
            <li><a href="join.php"><img src="img/menu8.png"></a></li>
            <?php }
            else{ ?>
            <li><a href="join.php"><img src="img/menu5.png"></a></li>
            <?php } ?>
            <li><a href="login.php"><img src="img/menu6.png"></a></li>
        </ul>
  </div>
    <div class="main">
   	  <div class="main_top"></div>
       <div class="main_bottom">
   		 <div class="main_left">
       	   <div class="left_top"></div>
           <div class="left_bottom"></div>
         </div>
         <form  name="member_form" method="post" action="login.php"> 
         <div class="main_center">
         	<div class="center_top">
            	<input class="input_size1" name="id" type="text" />
            </div>
            <div class="center_bottom">
            	<input class="input_size2" name="pass" type="password" />
            </div>
         </div>
         <div class="main_right1">
         	<input type = "image" src="img/login3.png" />
         </div>
         <div class="main_right2"></div>
       </div>
    </div>
</div>
</Form>
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
