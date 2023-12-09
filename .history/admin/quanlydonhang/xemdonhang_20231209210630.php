<?php
	session_start();
 ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="GallerySoft.info" />

	<title>Untitled 2</title>
    <link rel="stylesheet" type="text/css" href="../style.css"/>
</head>

<body>
	<?php
		if($_SESSION['level']==2){

    echo "<div id='top'>Welcome Admin <a href='../dangnhapthanhcong/logout.php' style='color:white;font-size:15px;'>(Logout)</a></div>";
		}
	else{
		header('location:../dangnhapthanhcong/login.php');
		}	
		?>
    <div id="menu">
        <ul>
            <li><a href="../quanlythanhvien.php">Quản lý thành viên</a></li>
        
            <li><a href="../quanlychuyenmuc/quanlychuyenmuc.php">Quản lý chuyên mục</a></li>
       
            <li><a href="../quanlysanpham/quanlysanpham.php">Quản lý sản phẩm</a></li>
       
            <li ><a href="../quanlylienhe/quanlylienhe.php" >Quản lý liên hệ</a></li>
            
            <li><a href="../quanlyquangcao.php">Quản lý quảng cáo</a></li>
            
            <li><a href="quanlydonhang.php">Quản lý hoá đơn</a></li>
        </ul>
    </div>
    <div id="xemdonhang">
        <?php
            $id=$_GET['id'];
            include('../ketnoi.php');
            $stmt = $conn->prepare("select * from hoadon where id_hoadon='$id'");
            $data=$stmt->fetch(PDO::FETCH_ASSOC);
            
            
        ?>
        <div id="dh1" >
            <p><span>Đơn hàng:</span> #<?php echo $data['id_hoadon']?> ----   <span>Ngày:</span> <?php echo $data['ngaymua'];?></p>
            <p><span>Họ và tên:</span> <?php echo $data['hoten_nm']?>   ---- <span>Điện thoại:</span> <?php echo $data['phone']?></p>
            <p><span>Địa chỉ:</span> <?php echo $data['diachi']?></p>
        </div>
        <div>
            <table>
                <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm </th>
                    <th>Số lượng </th>
                    <th>Đơn giá </th>
                    <th>Thành tiền</th>
                </tr>
                <?php
                    $stmt = $conn->prepare("select * from chitiet_hoadon where id_hoadon='$id' ");
                    $stt=0;
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                        $stt++;
                        $idsanpham=$row['id_sp'];
                        $query2=mysql_query("select * from sanpham where id='$idsanpham'");
                        $row2=mysql_fetch_assoc($query2)
                        
                ?>
                <tr>
                    <td><?php echo $stt;?></td>
                    <td><img src="../quanlysanpham/<?php echo $row2['hinhanh']?>" width="80px" height="60px"></td>
                    <td><?php echo $row2['tensp']?></td>
                    <td><?php echo $row['soluong'] ?></td>
                    <td><?php echo $row2['gia'] ?></td>
                    <td><?php echo number_format($row['soluong']*$row2['gia'],3)?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="4"></td>
                    <td style="color: red;">Tổng tiền</td>
                    <td style="color: red;"><?php echo $data['tongtien']?></td>
                </tr>
            </table>
        </div>
    </div>
    <div id="footer">Bản Quyền Ngọc Chiên IT</div>
</body>
</html>