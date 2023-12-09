<?php
    $id=$_GET['id'];
    include('ketnoi.php');
    $sql="delete from quangcao where id='$id'";
    $stmt = $conn->prepare($sql);
    $query = $stmt->execute();
    if ($query) {
        header('location: quanlyquangcao.php');
    }
    else{
        echo 'Xay ra loi';
    }
    
?>