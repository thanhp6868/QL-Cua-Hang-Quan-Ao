<?php
$username='root';
$password='';
$conn=mysql_connect('localhost',$username,$password);
mysql_select_db('webbanhang',$conn);
mysql_set_charset('utf8');
?>