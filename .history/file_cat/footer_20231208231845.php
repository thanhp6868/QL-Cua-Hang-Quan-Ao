

<div id="content-right">
<?php
    include('ketnoi.php');
    $sql="select* from quangcao ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $query = $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

    
?>
    <div class="img1" ><a href="#"><img src='<?php echo "dangnhapthanhcong/$row[tenanh]"; ?>' width="180px" height="230"></a></div>
<?php } ?>    
</div>
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

</body>
</html>