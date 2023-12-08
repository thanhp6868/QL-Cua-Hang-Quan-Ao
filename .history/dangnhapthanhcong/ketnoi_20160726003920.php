<?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $conn =@mysql_connect($servername,$username,$password);
    mysql_select_db('webbanhang',$conn);
	mysql_set_charset('utf8');
?>