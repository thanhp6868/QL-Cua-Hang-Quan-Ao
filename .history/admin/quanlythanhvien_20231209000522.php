<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <!-- <meta name="author" content="GallerySoft.info" /> -->

    <title>Quản lý thành viên</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css" /> -->
    <style>
        #table {
            width: 850px;
            margin: auto;
            margin-top: 10px;
        }

        #table table {
            width: 850px;

        }

        #table tr {
            border: 1px solid black;
        }

        #table th {
            background-color: #FF8000;
            color: white;
        }

        #table td {
            border: 1px solid black;
            text-align: center;
            color: #444;
        }

        #table a {
            color: red;
            text-decoration: none;
        }

        #table a:hover {
            color: lime;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <?php
    if($_SESSION['level'] == 2) {
        echo "<div id='top'>Welcome Admin <a href='../dangnhapthanhcong/logout.php' style='color:white;font-size:15px;'>(Logout)</a></div>";
    } else {
        header('location:../dangnhapthanhcong/login.php');
    }
    ?>
    <div id="menu">
        <ul>
            <li><a href="quanlythanhvien.php">Quản lý thành viên</a></li>

            <li><a href="quanlychuyenmuc/quanlychuyenmuc.php">Quản lý chuyên mục</a></li>

            <li><a href="quanlysanpham/quanlysanpham.php">Quản lý sản phẩm</a></li>

            <li><a href="quanlylienhe/quanlylienhe.php">Quản lý liên hệ</a></li>
            <li><a href="quanlyquangcao.php">Quản lý quảng cáo</a></li>
            <li><a href="quanlydonhang/quanlydonhang.php">Quản lý hoá đơn</a></li>
        </ul>
    </div>
    <div id="table">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Giới tính</th>
                <th>Thao tác</th>

            </tr>
            <?php
            include('ketnoi.php');
            $sql = "select * from user ";
            $stmt = $conn->prepare($sql);
            $query = $stmt->execute();
            $stt = 0;
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $stt++;
                ?>
                <tr>
                    <td>
                        <?php echo $stt; ?>
                    </td>
                    <td>
                        <?php echo $row['ten']; ?>
                    </td>
                    <td>
                        <?php echo $row['mail']; ?>
                    </td>
                    <td>
                        <?php if($row['gioitinh'] == 1) {
                            echo "Nam";
                        } else {
                            echo "Nữ";
                        }
                        ; ?>
                    </td>
                    <td>
                        <a style="margin-right:15px" href="xemthanhvien.php?id=<?php echo $row['ID'] ?>">Xem</a>

                        <a href="xoathanhvien.php?id=<?php echo $row['ID']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>