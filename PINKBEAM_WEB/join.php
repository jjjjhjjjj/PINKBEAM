<?
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<script>

    function check_id()
    {
      window.open("check_id.php?u_id=" + document.member_form.u_id.value,
          "IDcheck",
           "left=200,top=200,width=200,height=60,scrollbars=no,resizable=yes");
    }

	//check_input()�� �̿��� ȸ������ ���� �����̸� ���� �޼����� �߰���
	function check_input()
   {
      if (!document.member_form.u_id.value)
      {
          alert("���̵� �Է��ϼ���");    
          document.member_form.u_id.focus();
          return;
      }

      if (!document.member_form.u_pw.value)
      {
          alert("��й�ȣ�� �Է��ϼ���");    
          document.member_form.u_pw.focus();
          return;
      }

      if (!document.member_form.u_pw_confirm.value)
      {
          alert("��й�ȣȮ���� �Է��ϼ���");    
          document.member_form.u_pw_confirm.focus();
          return;
      }

      if (!document.member_form.name.value)
      {
          alert("�̸��� �Է��ϼ���");    
          document.member_form.name.focus();
          return;
      }
      
      if (!document.member_form.phone1.value || !document.member_form.phone2.value || !document.member_form.phone3.value )
      {
          alert("��ȭ��ȣ�� �Է��ϼ���");    
          document.member_form.phone.focus();
          return;
      }

      for (var i=0;i<document.member_form.phone1.value.length;i++){
          if (document.member_form.phone1.value.charAt(i) < "0" || document.member_form.phone1.value.charAt(i) > "9")
              {
              alert("��ȭ��ȣ�� ���ڸ� �����մϴ�.");
              member_form.phone1.focus();
              return false;
      		}
      	}

      for (var i=0;i<document.member_form.phone2.value.length;i++){
          if (document.member_form.phone2.value.charAt(i) < "0" || document.member_form.phone2.value.charAt(i) > "9")
              {
              alert("��ȭ��ȣ�� ���ڸ� �����մϴ�.");
              member_form.phone2.focus();
              return false;
      		}
      	}

      for (var i=0;i<document.member_form.phone3.value.length;i++){
          if (document.member_form.phone3.value.charAt(i) < "0" || document.member_form.phone3.value.charAt(i) > "9")
              {
              alert("��ȭ��ȣ�� ���ڸ� �����մϴ�.");
              member_form.phone3.focus();
              return false;
      		}
      	}

      if (!document.member_form.month.value)
      {
          alert("�������� �Է��ϼ���");    
          document.member_form.month.focus();
          return;
      }

    	if (document.member_form.month.value > 12 )
        {
      		alert("�������� 12������ ���� �� �����ϴ�.");
      		document.member_form.month.focus();
      		return false;
      		}

      for (var i=0;i<document.member_form.month.value.length;i++){
          if (document.member_form.month.value.charAt(i) < "0" || document.member_form.month.value.charAt(i) > "9")
              {
              alert("�������� ���ڸ� �����մϴ�.");
              document.member_form.month.focus();
              return false;
      		}
      	}
      
      if (document.member_form.u_pw.value != 
            document.member_form.u_pw_confirm.value)
      {
          alert("��й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� �Է����ּ���.");    
          document.member_form.u_pw.focus();
          document.member_form.u_pw.select();
          return;
      }


      if (document.member_form.jumin1.value.length < 1){
  		alert("�ֹε�Ϲ�ȣ�� �Է��ϼ���.");
  		document.member_form.jumin1.focus();
  		return false;
  		}

  	if (document.member_form.jumin1.value.length!= 6){
  		alert("�ֹε�Ϲ�ȣ ���ڸ��� 6�ڸ� �Դϴ�.");
  		document.member_form.jumin1.focus();
  		return false;
  		}

  	for (var i=0;i<document.member_form.jumin1.value.length;i++){
  		if (document.member_form.jumin1.value.charAt(i) < "0" || document.member_form.jumin1.value.charAt(i) > "9")
  		{
  		alert("�ֹε�Ϲ�ȣ�� ���ڸ� �����մϴ�.");
  		document.member_form.jumin1.focus();
  		return false;
  		}
  	}

  	if (document.member_form.jumin2.value.length < 1){
  		alert("�ֹε�Ϲ�ȣ�� �Է��ϼ���.");
  		document.member_form.jumin2.focus();
  		return false;
  		} 

  	if (document.member_form.jumin2.value.length != 7 ){
  		alert("�ֹε�Ϲ�ȣ ���ڸ��� 7�ڸ� �Դϴ�.");
  		document.member_form.jumin2.focus();
  		return false;
  		}

  	for (var i=0;i<document.member_form.jumin2.value.length;i++)
  	{
  		if (document.member_form.jumin2.value.charAt(i) < "0" || document.member_form.jumin2.value.charAt(i) > "9")
  		{
  		alert("�ֹε�Ϲ�ȣ�� ���ڸ� �����մϴ�.");
  		document.member_form.jumin2.focus();
  		return false;
  		}
  	}

  	var sum,a,b,c,d,e,f,g,j,i,j,k,l,m;

  	a = parseInt(document.member_form.jumin1.value.charAt(0));
  	b = parseInt(document.member_form.jumin1.value.charAt(1)); 
  	c = parseInt(document.member_form.jumin1.value.charAt(2));
  	d = parseInt(document.member_form.jumin1.value.charAt(3));
  	e = parseInt(document.member_form.jumin1.value.charAt(4));
  	f = parseInt(document.member_form.jumin1.value.charAt(5));
  	g = parseInt(document.member_form.jumin2.value.charAt(0));
  	h = parseInt(document.member_form.jumin2.value.charAt(1));
  	i = parseInt(document.member_form.jumin2.value.charAt(2));
  	j = parseInt(document.member_form.jumin2.value.charAt(3));
  	k = parseInt(document.member_form.jumin2.value.charAt(4));
  	l = parseInt(document.member_form.jumin2.value.charAt(5));
  	m = parseInt(document.member_form.jumin2.value.charAt(6));

  	sum = a*2 + b*3 + c*4 + d*5 + e*6 + f*7 + g*8 + h*9 + i*2 + j*3 + k*4 + l*5;

  	var namuji = sum % 11;
  	var gumsa = 11 - namuji;
  	var check_no = gumsa % 10;

  	if (check_no != m){
  		alert("�ùٸ� �ֹε�Ϲ�ȣ�� �ƴմϴ�.");
  		document.member_form.jumin2.focus();
  		return false;
  		}

  	if (parseInt(document.member_form.jumin2.value.charAt(0)) == "1" || parseInt(document.member_form.jumin2.value.charAt(0)) == "3")
  	{
  		alert("ȸ�������� �Ұ����մϴ�.");
  		document.member_form.jumin2.focus();
  		return false;
  		}


  	document.member_form.submit();
  	}

  	function Check_focus()
  	{
  	var strfocus1 = document.member_form.jumin1.value.length;
  	if(strfocus1 == 6)
  		document.member_form.jumin2.focus(); 
  	}	

	   
	   function reset_form()
	   {
	      document.member_form.u_id.value = "";
	      document.member_form.u_pw.value = "";
	      document.member_form.u_pw_confirm.value = "";
	      document.member_form.name.value = "";
	      document.member_form.jumin1.value = "";
	      document.member_form.jumin2.value = "";
	      document.member_form.phone1.value = "";
	      document.member_form.phone2.value = "";
	      document.member_form.phone3.value = "";
	      document.member_form.month.value = "";
		  
	      document.member_form.u_id.focus();

	      return;
	   }
</script>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/join.css" rel="stylesheet" type="text/css" media="all">
<title>PINK BEAM Join</title>
<script src="script/jquery-1.12.3.js"></script>
</head>

<body>
<div class="wrap">
	<div class="top">
   	  <div class="top_left">
      	<a href="main.php"><img src="img/top.png" /></a>
      </div>
      <div class="top_right">
      	<img src="img/menubar1.png" alt="�޴�"/>
      </div>
      <div class="top_right2">
      	<img src="img/menubar2.png" alt="�޴�"/>
      </div>
      <ul class="menu">
       	<li><a href="introduction.php"><img src="img/menu1.png"></a></li>
            <li><a href="intention.php"><img src="img/menu2.png"></a></li>
            <li><a href="production.php"><img src="img/menu3.png"></a></li>
            <li><a href="howtouse.php"><img src="img/menu4.png"></a></li>
            <li><a href="join.php"><img src="img/menu5.png"></a></li>
            <li><a href="login_form.php"><img src="img/menu6.png"></a></li>
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
           <div class="left_menu5"></div>
           <div class="left_menu6"></div>
           <div class="left_menu7"></div>
         </div>
         
         <form name="member_form" method="post" action="insert.php">
         
         <div class="main_right">
       	   <div class="right_menu">
           	<div class="intput_box">
                  <input class="input_size" name="u_id" type="text">
                  <img src="img/join8.png" onclick="check_id()" />
              </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
              <input class="input_size" name="u_pw" type="password">
             </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
              <input class="input_size" name="u_pw_confirm" type="password">
             </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
              <input class="input_size" name="name" type="text">
             </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
              <input class="input_size" name="jumin1" type="text">
              <p> - </p>
              <input class="input_size2" name="jumin2" type="password">
             </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
                <input class="input_size3" name="phone1" type="text">
                <p> - </p>
                <input class="input_size3" name="phone2" type="text">
                <p> - </p>
                <input class="input_size3" name="phone3" type="text">
                    
             </div> 
           </div>
           <div class="right_menu">
           	<div class="intput_box">
              <input class="input_size3" name="month" type="text">
              <img src="img/join10.png" />
             </div> 
           </div>
         </div>
 
         <div class="main_send">
         	<img class="img" src="img/join11.png" onclick="reset_form()" />
         	<img class="img" src="img/join7.png"  onclick="check_input()" />
         </div>
       </div>
       </form>
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
