<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="GallerySoft.info" />

    <title>Untitled 2</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <?php
    if ($_SESSION['level'] == 2) {

        echo "<div id='top'>Welcome Admin <a href='../../dangnhapthanhcong/logout.php' style='color:white;font-size:15px;'>(Logout)</a></div>";
    } else {
        header('location:../../dangnhapthanhcong/login.php');
    }
    ?>
    <div id="menu">
        <ul>
            <li><a href="../quanlythanhvien.php">Quản lý thành viên</a></li>

            <li><a href="../quanlychuyenmuc/quanlychuyenmuc.php">Quản lý chuyên mục</a></li>

            <li><a href="../quanlysanpham/quanlysanpham.php">Quản lý sản phẩm</a></li>

            <li><a href="../quanlylienhe/quanlylienhe.php">Quản lý liên hệ</a></li>
            <li><a href="../quanlyquangcao.php">Quản lý quảng cáo</a></li>
            <li><a href="../quanlydonhang/quanlydonhang.php">Quản lý hoá đơn</a></li>
        </ul>
    </div>
    <div id="lienhe">
        <table>
            <tr>
                <th>STT</th>
                <th>Thời Gian</th>
                <th>Họ Và Tên</th>
                <th>Email</th>
                <th>Tiêu Đề</th>
                <th>Xem</th>
                <th>Xóa</th>
            </tr>
            <?php
            include('../ketnoi.php');
            $sql = "select * from lienhe order by id_lh desc";
            $stmt = $conn->prepare($sql);
            $query = $stmt->execute();
            $stt = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $stt++;
                ?>
                <tr>
                    <td>
                        <?php echo $stt; ?>
                    </td>
                    <td>
                        <?php echo $row['time'] ?>
                    </td>
                    <td>
                        <?php echo $row['hoten'] ?>
                    </td>
                    <td>
                        <?php echo $row['email'] ?>
                    </td>
                    <td>
                        <?php echo $row['tieude'] ?>
                    </td>
                    <td><a href="view.php?id=<?php echo $row['id_lh'] ?>">Xem</a></td>
                    <td><a href="xoa.php?id=<?php echo $row['id_lh'] ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>