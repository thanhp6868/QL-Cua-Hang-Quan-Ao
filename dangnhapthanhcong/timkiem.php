<?php
    include('file_cat/top.php');
?>
    <link rel="stylesheet" type="text/css" href="style.css">
    <div id="timkiem">
      <div id="top_tk">Kết quả tìm kiếm</div>
        <?php
            $timkiem=$_GET['timkiem'];
            include('ketnoi.php');

            $query=mysql_query("select * from sanpham where tensp like '%$timkiem%'");
            if(mysql_num_rows($query)==0 ){
                echo "<div id='tb_tk1'>Không có kết quả tìm kiếm với từ khóa: <font color='red'>'$timkiem'</div>";
            }
            else if($timkiem== null){
                echo "<div id='tb_tk2'>Bạn chưa nhập nội dung vào thanh tìm kiếm</div>";
            }
            else {
                $number=mysql_num_rows($query);
                echo "  <h3>Tìm thấy <font color='red'>$number </font>sản phẩm với từ khóa: <font color='red'>'$timkiem'</font></h3>";
            echo " <div class='sanpham'>";
                 echo"<ul>";
                 while ($row=mysql_fetch_assoc($query)){
                    echo "<li><a href='thongtinsp.php?id=$row[id]'><img src='../admin/quanlysanpham/$row[hinhanh]' width='130' height='150'/><p align='center'>$row[tensp]</p><p align='center' style='color: red;'>$row[gia]</p></a></li>";
                 }
                echo "</ul>";
            echo "</div>";
            }
      
        ?>
    </div>
<?php
    include('file_cat/footer.php');
?>