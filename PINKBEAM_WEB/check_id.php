<?php
if(!$u_id){
    echo("���̵� �Է��ϼ���.");
}

else{
    include "dbconn.php";
    
    $sql="select * from custom_info where u_id='$u_id' ";
    $result = mysql_query($sql, $connect);
    $num_record = mysql_num_rows($result);
    
    if($num_record){
        echo"���̵� �ߺ� �˴ϴ�.<br>";
        echo "�ٸ� ���̵� ��� �ϼ���.<br>";
    }
    
    else{
        echo"��� ������ ���̵� �Դϴ�.";
    }
    mysql_close();
}
?>