<?php
    include('file_cat/top.php');
    
?>
	<link rel="stylesheet" type="text/css" href="style2.css" />
         <div id="content-center">
            <?php
                $id=$_GET['id'];
                include('ketnoi.php');
                $sql="select * from chuyenmuc where chuyenmuc_id='$id'";
                $stmt = $conn->prepare($sql);
                        $query = $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    
            ?>
         	<div id="quangcao"><?php echo $row['chuyenmuc']?></div>
            <?php
                }
            ?>
            <div class="sanpham">
            	<ul>
                    <?php
                       include('ketnoi.php'); 
                       $sql="select * from sanpham  where chuyenmuc_id='$id' order by id desc ";
                       $stmt = $conn->prepare($sql);
                        $query = $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            
                    ?>
                	<li><a href="thongtinsp.php?id=<?php echo $row['id']?>"><img  style="border-radius: 5px;"src="<?php echo 'admin/quanlysanpham/'.$row['hinhanh'];?>" width="130" height="150"/><p align="center"><?php echo $row['tensp']?> </p><p align="center" style="color: red;"><?php echo $row
                    ['gia'];?></p></a></li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
         </div>
<?php
    include('file_cat/footer.php');
?>
