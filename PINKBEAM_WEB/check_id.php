<?php
if(!$u_id){
    echo("아이디를 입력하세요.");
}

else{
    include "dbconn.php";
    
    $sql="select * from custom_info where u_id='$u_id' ";
    $result = mysql_query($sql, $connect);
    $num_record = mysql_num_rows($result);
    
    if($num_record){
        echo"아이디가 중복 됩니다.<br>";
        echo "다른 아이디를 사용 하세요.<br>";
    }
    
    else{
        echo"사용 가능한 아이디 입니다.";
    }
    mysql_close();
}
?>