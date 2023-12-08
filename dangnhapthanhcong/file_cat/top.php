<?php
	session_start();
 ?>  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thực Tập Web bán hàng</title>
</head>
	<body>
	<div id="wrapper">
    	<div id="top">
        	<div id="top-left">
               
            	<ul >
                	<li><a href="#"><img src="../png/google.png" /></a></li>
                    <li><a href="#"><img src="../png/facebook.png" /></a></li>
                    <li><a href="#"><img src="../png/yahoo.png" /></a></li>
                    <li><a href="#"><img src="../png/zing.png" /></a></li>
                </ul>
            </div>
                
            <div id="top-right">
                <div style="margin-top:15px; color:  #FF8000;"> <?php
                if($_SESSION['user']){
                	echo "Xin chào ".$_SESSION['user']." <a href='logout.php' style='color:green;'><img src='products/logout-xxl.png' width='34px' height='34px'></a>";
                	}
                else{
                	header('location:login.php');
                		
                ?>
         
            	<ul>
                	<li><a href="#"><img src="products/login.png" style="position:absolute; right: 193px;top:11px;"/></a></li>
                    <li>|</li>
                    <li><a href="login.php">Đăng Nhập</a></li>
                    <li>|</li>
                    <li ><a href="dangki.php">Đăng Kí</a></li>
                </ul>
                <?php } ?>
                </div>
            </div>
        </div>
        <div id="logo">
        	<div id="logo-left"><img src="products/nameShop.png" /></div>
            <a href="giohang.php"><div id="shopcart"><img src="products/shopcart.png"/>
                <div id="text_cart">
                    <p style="margin-top: -10px; color: gray;">Sản phẩm</p>
                    <div style="margin-left:18px;color: white; width: 20px; height: 20px; background-color: #F36F36; border-radius: 12px; text-align: center; margin-top: 5px;"><?php 
                    if(isset($_SESSION["giohang"])){
                        $cart=$_SESSION['giohang'];
                        echo count($cart); 
                    }
                    else{
                        echo "0";
                        }
                    ?></div>
                </div>
            </div>
            </a>
            <div id="logo-right2">
            	<div >
                <form id="timkiem" action="timkiem.php" method="get">
                    <input  id="text-form" type="text" name="timkiem" placeholder="Tìm kiếm sản phẩm" width="200px" height="30px"/>
                    <input type="submit" id="bottom-search" name="submit">
                </form>
                </div>
            </div>
            <div id="logo-right3">
            	<div><div id="anh"><img src="products/call2.png" /></div>SUPPORT : 0979433225</div>
            </div>
        </div>
        <div id="menu">
        	<ul >
		       <li><img src="products/home.png" width="40px" height="40px" style="float:left; padding:15px 0px 10px 30px;"/></li>
                <li><a href="admin.php">Trang Chủ</a></li>
                <li><a href="gioithieu.php">Giới Thiệu</a></li>
                       <?php
                    include("ketnoi.php");
                    $sql="select * from chuyenmuc ";
                    $query=mysql_query($sql);
                    while($row=mysql_fetch_assoc($query)){
                    echo "<li><a href='thoitrang.php?id=$row[chuyenmuc_id]'>$row[chuyenmuc]</a></li>";
                       }?>
                <li><a href="lienhe.php">Liên Hệ</a></li>       
            </ul>
        </div>
        <div id="content">
        <div id="left">
        <div id="content-left">
           	<h3 style="margin-top:20px; margin-left:-50px;">Quần áo nữ</h3>
            <ul>
            	<li><a href="aosominu1.php">Thời trang nữ </a></li>
                <li><a href="aosominu1.php">Áo thun nữ </a></li>
                <li><a href="aosominu1.php">Áo khoác,vest nữ</a></li>
                <li><a href="aosominu1.php">Váy,đầm</a></li>
            </ul>
            
            <h3 style="margin-top:10px; margin-left:-36px;">Quần áo nam</h3>
            <ul>
            	<li><a href="aosominam1.php">Thời trang nam</a> </li>
                <li><a href="aosominam1.php">Áo thun nam </a></li>
                <li><a href="aosominam1.php">Áo khoác,vest nam</a></li>
                <li><a href="aosominam1.php">Quần jean,quần âu</a></li>
            </ul>
        </div>
        <div id="lh_1">
            <div id="lg_lh"><p>Liên Hệ Hộ Trở</p></div>
            <img src="products/hotline.png" width='200px' height='100px'/>
            <img src="products/giolamviec.png" width='200px' height='100px' style="margin-bottom: 20px;" />
         </div>
        </div>