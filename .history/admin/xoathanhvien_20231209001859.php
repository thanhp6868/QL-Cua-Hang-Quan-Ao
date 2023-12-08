<?php
    include("ketnoi.php");
    $id=$_GET['id'];
    $sql="delete from user where id='$id'";
    $stmt = $conn->prepare($sql);
    $query = $stmt->execute();
    if ($query) {
        echo 'Xóa Xong';
        header("location:quanlythanhvien.php");
    }
    else{
        echo "Xảy ra lỗi";
    }
?>