<?php
	session_start();
 ?>  

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thực Tập Web bán hàng</title>
<link rel="stylesheet" type="text/css" href="style1.css" />
</head>
	<body>
	<div id="wrapper">
    	<div id="top">
        	
                
        <div id="top-right">
                <div style="margin-top:15px; color:  #FF8000;">
                
         
            	<ul>
                	<li><a href="#"><img src="png/login.png" style="position:absolute; right: 188px;
top: 21px;"/></a></li>
                    <li>|</li>
                    <li><a href="dangnhapthanhcong/login.php">Đăng Nhập</a></li>
                    <li>|</li>
                    <li ><a href="dangnhapthanhcong/dangki.php">Đăng Kí</a></li>
                </ul>
        
                </div>
            </div>
        </div>
        <div id="logo">
        	<div id="logo-left"><img src="png/nameShop.png" /></div>
            <a href="giohang.php"><div id="shopcart"><img src="dangnhapthanhcong/products/shopcart.png"/>
                <div id="text_cart">
                    <p style="margin-top: -10px; color: gray;">Sản phẩm</p>
                    <div style="margin-left:18px; color: white; width: 20px; height: 20px; background-color: #F36F36; border-radius: 12px; text-align: center; margin-top: 5px;"><?php 
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
                    <input type="submit"  name="submit" id="bottom-search" >
                </form>
                </div>
            </div>
            <div id="logo-right3">
            	<div><div id="anh"><img src="png/call2.png" /></div>SUPPORT : 0979433225</div>
            </div>
        </div>
        <div id="menu">
        	<ul >
            	<li><img src="png/home.png" width="40px" height="40px" style="float:left; padding:15px 0px 10px 30px;"/></li>
                <li><a href="index.php">Trang Chủ</a></li>
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
            <img src="dangnhapthanhcong/products/hotline.png" width="200px" height="100px"/>
            <img src="dangnhapthanhcong/products/giolamviec.png" width='200px' height='100px'/>
         </div>
         </div>
    
         <div id="content-center">
         	<div id="quangcao"><img src="dangnhapthanhcong/products/WAMmwq - Copy.jpg"  width="480px" height="150px"/> </div>
            <div class="sanpham">
            
                    <p style="padding-left: 25px;"><span style="background-color:#FF8000;font-size: 17px;border-radius: 3px; font-weight: bold;color:white;"> Sản phẩm bán chạy</span></p>
           	    <ul>
                    <?php
                        $sql="select * from sanpham where chuyenmuc_id=5 order by id desc";
                        $query=mysql_query($sql);
                        while($row=mysql_fetch_assoc($query)){
                            
                    ?>
                	<li><a href="thongtinsp.php?id=<?php echo $row['id']?>"><img src="<?php echo 'admin/quanlysanpham/'.$row['hinhanh']?>" width="130" height="150"/><p align="center"><?php echo $row['tensp']?> </p><p align="center" style="color: red;"><?php echo $row['gia']?></p></a></li>
                    <?php } ?> 
                </ul>
               
                    <p style="padding-left:25px;"> <span style="background-color:#FF8000;font-size: 18px;border-radius: 3px; font-weight: bold;color:white;">Sản phẩm mới</span> <img src="../products/imgres.png" /> </p>  
               <ul>
                	     <?php
                        $sql="select * from sanpham where chuyenmuc_id=4 ";
                        $query=mysql_query($sql);
                        while($row=mysql_fetch_assoc($query)){
                            
                         ?>
                    <li><a href="thongtinsp.php?id=<?php echo $row['id']?>"><img src="<?php echo 'admin/quanlysanpham/'.$row['hinhanh']?>" width="130" height="150"/><p align="center"><?php echo $row['tensp']?> </p><p align="center" style="color: red;"><?php echo $row['gia']?></p></a></li>
                        <?php } ?>              
               </ul>
                
            </div>
         </div>
      <div id="content-right">
            <?php
                include('ketnoi.php');
                $sql="select* from quangcao ORDER BY id DESC";
                $query = mysql_query($sql);
                while($row=mysql_fetch_assoc($query)){
                
                ?>
                <div class="img1" ><a href="#"><img src='<?php echo "dangnhapthanhcong/$row[tenanh]"; ?>' width="180px" height="230"></a></div>
            <?php } ?>  
     </div>
        <div id="footer">   
        	<div class="bottom">
                <ul>
                	<h3>VỀ CHÚNG TÔI</h3>
                	<li><a href="#">Giới thiểu về Fanshop.vn</a></li>
                    <li><a href="#">Quy chế hoạt động</a></li>
                    <li><a href="#">Các mức chế tài vi phạm</a></li>
                </ul>
            </div>
            <div class="bottom">
            	
                <ul>
                	<h3>DÀNH CHO NGƯỜI MUA</h3>
                	<li><a href="#">Bảo vệ người mua</a></li>
                    <li><a href="#">Quy định đối với người mua</a></li>
                    <li><a href="#">Giải quyết khiếu nại</a></li>
                    <li><a href="#">Hướng dẫn người mua</a></li>
                </ul>
            </div>
            <div class="bottom">
            	
                <ul>
                	<li><h3>DÀNH CHO NGƯỜI BÁN</h3></li>
                	<li><a href="#">Mở shop trên fanshop</a></li>
                    <li><a href="#">Quy định đối với người bán</a></li>
                    <li><a href="#">Chính sách bán hàng</a></li>
                    <li><a href="#">Hệ thông kiểm duyệt</a></li>
                </ul>
            </div>
            <div class="bottom" id="footer-right">
            	
                <ul>
                	<li><h3>Copyright © 2016 Fanshop.vn</h3></li>
                	<li><a href="#">Địa chỉ: Tòa nhà FPT Tân Thuận, Lô 29B-31B-33B, Đường Tân Thuận, KCX Tân Thuận, Phường Tân Thuận Đông, Quận 7, Tp.HCM.
</a></li>
                    <li><a href="#">Số ĐKKD: 0312776486</a></li>
                </ul>
            </div>
        </div>
        <div id="thuonghieu">
        	<ul>
            	<li><h4>THƯƠNG HIỆU<h4></li>
            	<li><a href="#">MASSIMO DUTTI</a></li>
                <li> <a href="#">UNIQLO</a></li>
                <li><a href="#"> MANGO</a></li>
                <li><a href="#"> FOREVER 21</a></li>
            </ul>
        </div>
        </div>

</body>
</html>