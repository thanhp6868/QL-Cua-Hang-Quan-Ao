<?php
	session_start();
?>
<?php
        $loi=array();
        $a=$b=NULL;
        $loi["username"]=$loi["password"]=$loi['dangnhap']=NULL;
    if(isset($_POST['ok'])){
        if($_POST['user']==null){
            $loi["username"] = ' * Xin vui lòng nhập email';
        }
        else {
            $a=$_POST['user'];
        }
          if($_POST['pass']==null){
            $loi["password"] = ' * Xin vui lòng nhập password';
        }
        else {
            $b=$_POST['pass'];
        }
    
        if($a && $b){
                include('ketnoi.php');
                $sql="select * from user where mail='$a' and matkhau='$b'";
                $result=(mysql_query($sql));
                if(mysql_numrows($result)==1){
                    $data=mysql_fetch_assoc($result);
                    $_SESSION['level']=$data['level'];
                    if($_SESSION['level']==2){
                        header("location:..\admin\admin.php");
                                            }
                    else{
                        $_SESSION['user']=$a;
                        header('location:admin.php');   
                        }
                                            }
                else{
                   $loi['dangnhap']='Tài khoản không hợp lệ';
                    }
              }
}
?>


<!DOCTYPE html>
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
                	<li><a href="#"><img src="products/login.png" style="position:absolute; right: 196px;top:11px;"/></a></li>
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
         <div id="login">
            <form method="post" action="login.php"  id="form" >
            <table id="bang">
                <tr id="hang1">
                    <td style=" width: 240px;">Đăng Nhập</td>
                </tr>
                 <tr class="hang" style="width:200px; border: 1px solid #80FF80;">
                    <td><input type="text" placeholder="Email" name="user"/></td>
                    <td style="color: red;"><?php echo $loi["username"];?></td>
                </tr>
                 <tr  class="hang">
                    <td><input type="password" placeholder="Password" name="pass" /></td>
                    <td style="color: red;"><?php echo $loi["password"];?></td>
                </tr>
                 <tr id="hang2">
                    <td><input type="submit" value="Đăng Nhập" name="ok" style=" width: 100px;"/></td>
                </tr>
                <tr>
                    <td align="center"><?php echo $loi['dangnhap'];?></td>
                </tr>
            </table>
            </form>
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
