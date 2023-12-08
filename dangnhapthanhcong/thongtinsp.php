<?php
    include("file_cat/top.php");
    $id=$_GET['id'];
    $sql="select * from sanpham"
?>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <?php include('ketnoi.php');
                    $sql="select * from sanpham where id='$id' ";
                    $query=mysql_query($sql);
                    while($data=mysql_fetch_assoc($query)){
     
    ?>
    <div id="content_thongtin">
        <div id="menu_sp">
            <p style="font-weight: bold;">Sản phẩm</p>
        </div>
        <div id="sp_01">
            <div id="sp_01_1">
                <img src="../admin/quanlysanpham/<?php echo $data['hinhanh']?>" width="210px" height="280px"/>
            </div>
            <div id="sp_01_2">
                <p style="font-size: 16px;text-transform: uppercase; font-weight: bold;">Có đủ size - <?php echo $data['tensp']?></p>
                <p style="font-size: 16px; font-weight: bold; color: red;">Giá : <?php echo $data['gia']?> đ</p>
                <p style="border: 1px solid black; width: 100px; height: 10px; background-color:#FF0080; line-height: 40px; font-size: 15px; padding-bottom: 30px;"><a href="themgiohang.php?id=<?php echo $data['id']?>" style="padding-bottom: 30px;text-decoration: none;margin-left: 10px; color: white; font-weight: bold;">Mua Ngay</a></p>
            </div>
        </div>
        <div id="tt_1">
        <ul>
                        <p>THÔNG TIN SẢN PHẨM  </p>
            
            <li>Chất liệu  : <?php echo $data['chatlieu'];?></li>
            
            <li>Năm sản xuất : <?php echo $data['namsx'];?></li>
            
            <li>Xuất xứ : <?php echo $data['xuatxu'];?></li>
            
            <li>Màu sắc : <?php echo $data['mausac'];?> </li>
            
            <li>Kích thước :  <?php echo $data['kichthuoc'];?> </li>
            <?php } ?>
        </ul>
        </div>
    </div>

<?php
    include("file_cat/footer.php");
?>