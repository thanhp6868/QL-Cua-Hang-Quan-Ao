<?php
session_start();
$id = $_GET['id'];
include("ketnoi.php");
$sql = "select * from user where ID='$id' ";

$stmt = $conn->prepare($sql);
$query = $stmt->execute();
$row = array();
while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {

    $row['ho'] = $data['ho'];
    $row['ten'] = $data['ten'];
    $row['mail'] = $data['mail'];
    $row['phone'] = $data['phone'];
    $row['ngaysinh'] = $data['ngaysinh'];
    $row['gioitinh'] = $data['gioitinh'];
    $row['diachi'] = $data['diachi'];
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8" />
    <title>Untitled 2</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        #top {
            width: 850px;
            margin: auto;
            height: 120px;
            background-color: teal;
            text-align: center;
            line-height: 120px;
            color: white;
            font-size: 26px;
            font-family: arial;
            font-weight: bold;
        }

        #menu {
            width: 850px;
            margin: auto;
            height: 40px;
            background-color: teal;
            margin-top: 10px;
            font-size: 14px;
        }

        #menu ul {
            list-style: none;
        }

        #menu ul li {
            float: left;
            width: 140px;
            text-align: center;
            border-left: 1px solid white;
            line-height: 40px;
        }

        #menu ul li:hover {
            background-color: #004080;
        }

        #menu ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

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

    <div id="xemtv">
        <fieldset>
            <legend>Thông tin thành viên</legend>
            <form method="post">
                <table>
                    <tr>
                        <td>Họ và tên</td>
                        <td><input type="text" value="<?php echo $row['ho']." ".$row['ten']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" value="<?php echo $row['mail']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="text" value="<?php echo $row['phone']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td><input type="date" value="<?php echo $row['ngaysinh']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>Giới Tính</td>
                        <td>
                            <font color='black'> Nam </font> <input <?php if($row['gioitinh'] == 1) {
                                echo "checked='checked'";
                            } ?> type="radio" name="gt" value="1" />
                            <font color='black'> Nữ </font> <input <?php if($row['gioitinh'] == 0) {
                                echo "checked='checked'";
                            } ?>type="radio" name="gt" value="0" />

                        </td>

                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><textarea><?php echo $row['diachi']; ?></textarea></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>

</body>

</html>