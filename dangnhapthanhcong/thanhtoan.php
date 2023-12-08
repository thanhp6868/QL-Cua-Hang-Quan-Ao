<?php
    include('file_cat/top.php');
    $a=$_SESSION['user'];
    include('ketnoi.php');
    $sql="select * from user where mail='$a'";
    $query=mysql_query($sql);
    $row=mysql_fetch_assoc($query);
    $loi=array();
    $user=$phone=$email=$diachi=$b=null;
    $loi['user']=$loi['phone']=$loi['email']=$loi['diachi']=$loi['insert']=$loi['loitt']=null;
    if(isset($_POST['ok'])){
        if($_POST['user']==null){
            $loi['user']='* Xin vui lòng điền họ và tên';
        }
        else{
            $user=$_POST['user'];
        }
        
        
        if($_POST['phone']==null){
            $loi['phone']='* Xin vui lòng nhập số điện thoải';
        }
        else{
            $phone=$_POST['phone'];
        }
        
        
        if($_POST['email']==null){
            $loi['email']='* Xin vui lòng điền email';
        }
        else{
            $email=$_POST['email'];
        }
        
        
        if($_POST['diachi']==null){
            $loi['diachi']='* Xin vui lòng điền địa chỉ';
        }
        else{
            $diachi=$_POST['diachi'];
        }
        
        
        if($user && $phone && $email && $diachi){
            $sql="select max(id_hoadon) from hoadon";
            $query=mysql_query($sql);
            if(mysql_num_rows($query)==0){
                $id_hoadon=1;
            }
            else{
            $data=mysql_fetch_assoc($query);
            $id_hoadon=$data['max(id_hoadon)']+1;
            }
            $b=number_format($_SESSION['tien'],3)." VND";
            if(isset($_SESSION['giohang'])){
            $sql="insert into hoadon (id_hoadon,hoten_nm,diachi,email,phone,tongtien) values ('$id_hoadon','$user','$diachi','$email','$phone','$b')";
            $query=mysql_query($sql);
            foreach($_SESSION['giohang'] as $key=>$value){
                mysql_query("insert into chitiet_hoadon (id_hoadon,id_sp,soluong) values ('$id_hoadon','$key','$value')");
               }
               $loi['insert']='Cảm ơn quý khách đã thanh toán thành công'.'<a href="admin.php"><div class="bottom_f">Về trang chủ</div></a>';
            } else{
                $loi['loitt']='Bạn đã thanh toán đơn hàng '.'<a href="admin.php"><div class="bottom_f">Về trang chủ</div></a>';
            }
            unset($_SESSION['giohang']);
           
        }
    }

?>
    
<link rel="stylesheet" type="text/css" href="style.css" />
    <div id="tt">
        <div style="border-radius:5px ;color:white; font-size: 20px; font-weight:bold; background-color:rgb(123, 123, 198); text-align: center; width: 510px ; height: 50px; line-height: 50px; float: left;">
        <p>Thanh Toán </p>
    </div>
    <div class="thongbao"><?php echo $loi['insert'];?></div>
    <div class="thongbao" ><?php echo $loi['loitt'];?></div>
        <div id="form_tt">
            <form method="post" action="thanhtoan.php">
                <table>
                    <tr>
                        <td colspan="2"><h4>* Đăng nhập hoặc điền đầy đủ thông tin để thanh toán</h4></td>
                    </tr>
                    <tr>
                        <td>Họ và tên</td>
                        <td><input type="text" name="user" value="<?php echo $row['ho']." ".$row['ten'];?>" /></td>
                        
                    </tr>
                    <tr>
                        <td>Điện thoải</td>
                        <td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></td>
                       
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?php echo $row['mail'];?>" ></td>
                        
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><textarea name="diachi"><?php echo $row['diachi'];?></textarea></td>
                        
                    </tr>
                            <?php
                        echo "<tr>
                                <td></td>
                                <td><font color='#FF0000'>$loi[user]</font></td>
                            </tr>";
                        echo "<tr>
                                <td></td>
                                <td><font color='#FF0000'>$loi[phone]</font></td>
                            </tr>";
                        echo "<tr>
                                <td></td>
                                <td><font color='#FF0000'>$loi[email]</font></td>
                            </tr>";
                        echo "<tr>
                                <td></td>
                                <td><font color='#FF0000'>$loi[diachi]</font></td>
                              </tr>";
                            ?>
                    
                    <tr>
                    <td></td>
                    <td>
                    <input style="width: 150px; height: 35px; color: white; background-color: lime; float: left;" type="submit" name="ok" value="Thanh Toán"  />
                    </td></tr>
                </table>
                    
            </form>
        </div>
    </div>
<?php
    include('file_cat/footer.php');
?>