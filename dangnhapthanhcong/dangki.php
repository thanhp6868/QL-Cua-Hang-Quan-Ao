<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
		<link rel="stylesheet" type="text/css" href="style-login_dk.css" />
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
            	<ul>
                	<li><a href="#"><img src="products/login.png" style="position:absolute; right: 193px;top:11px;"/></a></li>
                    <li>|</li>
                    <li><a href="login.php">Đăng Nhập</a></li>
                    <li>|</li>
                    <li><a href="dangki.php">Đăng Kí</a></li>
                </ul>
            </div>
        </div>
        <div id="logo">
        	<div id="logo-left"><img src="products/nameShop.png" /></div>
            <div id="logo-right2">
            	<div >
                <form id="timkiem"><input  id="text-form" type="text" name="timkiem" placeholder="Tìm kiếm sản phẩm" width="200px" height="30px"/></div>
                <button type="submit" id="bottom-search" ></button></form>
                </div>
            <div id="logo-right3">
            	<div><div id="anh"><img src="products/call2.png" /></div>SUPPORT : 0979433225</div>
            </div>
        </div>
        <div id="menu">
        	<ul >
            	<li><img src="products/home.png" width="40px" height="40px" style="float:left; padding:15px 0px 10px 30px;"/></li>
                <li><a href="../index.php">Trang Chủ</a></li>
                <li><a href="#">Giới Thiểu</a></li>
                <li><a href="#">Thời Trang Nữ</a>
                		<div class="submenu" >
                        		<div class="anhmenu"><img src="products/B2OHT016_210.jpg" /></div>
                         	<div class="danhsach"> <ul>
                                <li><a href="#">Áo sơ mi nữ</a></li>
                                <li><a href="#">Áo thun nữ </a></li>
                                <li><a href="#">Áo khoác,vest nam</a></li>
                                <li><a href="#">Váy,đầm</a></li>
                                <li><a href="#">Vòng tay,dây chuyền nữ</a></li>
                           </ul>
                           </div>
                         </div>  		
                </li>
                <li><a href="#">Thời Trang Nam</a>
                			<div class="submenu" >
                        		<div class="anhmenu"><img src="products/8.jpg" width="210px" height="280px"/></div>
                         	<div class="danhsach"> <ul>
                                <li><a href="#">Áo sơ mi nam</a></li>
                                <li><a href="#">Áo thun nam </a></li>
                                <li><a href="#">Áo khoác,vest nữ</a></li>
                                <li><a href="#">Quần jean,quần âu</a></li>
                                <li><a href="#">Trang sức nam</a></li>
                           </ul>
                           </div>
                         </div>  		
                </li>
                <li><a href="#">Hướng Dẫn Mua Hàng</a></li>
                <li><a href="#">Liên Hệ</a></li>
            </ul>
        </div>
         <div id="form2">
         <div id="form2-2">
	<h1>Đăng Ký</h1>
	<form method="post">
    	<p><font color='red'>*</font> <input type="text" placeholder="Họ" name="ho" id="p1"/></p><p><font color='red'>*</font> <input type="text" placeholder="Tên" name="ten" id="p2" /></p>
        <p><font color='red'>*</font> <input type="text" placeholder="Điện thoải" name="phone" id="phone"/></p>
        <p><font color='red'>*</font> <input type="text" placeholder="Email" name="mail" id="mail"/></p>
        <p><font color='red'>*</font> <input type="text" placeholder="Nhập lại Email" name="mail2" id="mail2" /></p>
        <p><font color='red'>*</font> <input type="password" placeholder="Mật khẩu mới"  name="password" id="pass"/></p>
        <h3> Ngày Sinh </h3>
        <p> <font color='red'>*</font> 
        	<select name="ngay" >
        		<option value="ngay">Ngày</option>
                <?php 
					for($a=1;$a<=31;$a++){
						echo "<option value='$a'>$a</option>";			
						}
				?>
        	</select>
            <select  name="thang">
        		<option value="thang">Tháng</option>
                  <?php 
					for($b=1;$b<=12;$b++){
						echo "<option value='$b'>$b</option>";			
						}
				?>
        	</select>
            <select name="nam">
        		<option value="nam">Năm</option>
                 <?php 
					for($c=1960;$c<=2016;$c++){
						echo "<option value='$c'>$c</option>";			
						}
				?>
        	</select>
        </p>
        <p><font color='red'>*</font> <input type="radio" name="gt" value="0"/> Nữ <input type="radio" name="gt"/ value="1"> Nam </p>
        <p><font color='red'>*</font> <input type="text" placeholder="Địa chỉ" name="diachi" id="diachi"/></p>
        <p><input type="submit" name="submit" value="Đăng Ký" style="padding: 5px;"/></p>
        </form>
        </div>
         <?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
    $ho=$ten=$mail=$mail2=$matkhau=$ngay=$thang=$nam=$gt=$phone=$diachi=null ;
	if(isset($_POST["submit"])){
		//khai bao xem nguoi dung da nhap username chua
		if($_POST['ho']=="" || $_POST['ten']=="" ||$_POST['mail']=="" || 
		$_POST['mail2']=="" || $_POST['password']=="" || $_POST['ngay']=="ngay"||
		$_POST['thang']=="thang" || $_POST['nam']=="nam" || $_POST['gt']=="" || $_POST['phone']=="" || $_POST['diachi']==""){
			echo "<font color='#FF0000'>* Xin vui lòng điền đầy đủ thông tin </font>";
		}
		else {
			$ho=$_POST['ho'];
			$ten=$_POST['ten'];
			$mail=$_POST['mail'];
			$mail2=$_POST['mail2'];
			$matkhau=$_POST['password'];
			$ngay=$_POST['ngay'];
			$thang=$_POST['thang'];
			$nam=$_POST['nam'];
			$gt=$_POST['gt'];
            $phone=$_POST['phone'];
            $diachi=$_POST['diachi'];
			}
		if($mail!=$mail2){
			echo "<font color='#FF0000'>* Email của bạn vừa nhập không khớp nhau</font>";
			exit();
			}	
		if($ho && $ten && $matkhau && $mail && $ngay && $thang && $nam && $phone & $diachi){
            $servername = "localhost";
            $username ="root";
            $password = "";
        $conn =@mysql_connect($servername,$username,$password);
            mysql_select_db('webbanhang',$conn);
       	    mysql_query("SET NAMES utf8");
            if(isset($_POST['submit'])){
            $result=mysql_query("select* from user where mail='$mail'");
            if (mysql_num_rows($result)==0){
            $sql="insert into user (ho,ten,mail,matkhau,ngaysinh,gioitinh,phone,diachi,level) value ('$ho','$ten','$mail','$matkhau','$nam/$thang/$ngay','$gt','$phone','$diachi',1)";
                if (mysql_query($sql)){
                        echo "<font color='#FF0000'>* Đăng kí thành công</font>";
                                        }
                  }  
             else {
                echo "<font color='#FF0000'>* Tài khoản người dùng đã được sử dụng</font>"; 
                  }           
    				
	    }
        }
        }
		?>
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




