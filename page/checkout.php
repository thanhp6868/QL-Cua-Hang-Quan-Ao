<?php
session_start();
include '../db/connect.php';
include '../backend/common_function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="cart_style.css">



    <link rel="shortcut icon" href="../img/fab.png" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
    <script src="../js/js_own.js"></script>


    <title>HRX | Cart</title>
</head>

<body>

    <header>
        <div class="logo"><a href="index.php"><img src="img/icon.png" alt="" srcset=""></a></div>
        <div>
            <div class="uper">
            <form action="" method="get">
          <div class="dropdown">
            <button class="dropbtn">Nam</button>
            <div class="dropdown-content">
              <a href="page/Men/topware.php?ctg=Men/Đồ thể thao nam" name="ctg">Đồ thể thao vip</a>
              <a href="page/Men/topware.php?ctg=Men/Áo khoác nam" name="ctg">Áo khoác vip</a>
              <a href="page/Men/topware.php?ctg=Men/Quần nam" name="ctg">Quần vip</a>
              <a href="page/Men/topware.php?ctg=Men/Quần áo nam" name="ctg">Quần áo vip</a>

              <a href="page/Men/topware.php?ctg=Men/Giầy nam" name="ctg">Giầy vip</a>
              <a href="page/Men/topware.php?ctg=Men/Phụ kiện nam" name="ctg">Phụ kiện vip</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Nữ</button>
            <div class="dropdown-content">
              <a href="page/Men/topware.php?ctg=Woman/Áo nữ">Áo</a>
              <a href="page/Men/topware.php?ctg=Woman/Váy">Váy</a>
              <a href="page/Men/topware.php?ctg=Woman/Trang sức">Trang sức</a>
              <a href="page/Men/topware.php?ctg=Woman/Đồ thể thao nữ">Đồ thể thao vip</a>
              <a href="page/Men/topware.php?ctg=Woman/Giầy nữ">Giầy vip</a>
              <a href="page/Men/topware.php?ctg=Woman/Phụ kiện nữ">Phụ kiện vip</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Trẻ em</button>
            <div class="dropdown-content">
              <a href="page/Men/topware.php?ctg=Kid/Quần áo bé nam">Quần áo bé nam</a>
              <a href="page/Men/topware.php?ctg=Kid/Quần áo bé nữ">Quần áo bé nữ</a>
              <a href="page/Men/topware.php?ctg=Kid/Giầy bé nam">Giầy bé nam</a>
              <a href="page/Men/topware.php?ctg=Kid/Giầy bé nữ">Giầy bé nữ</a>
              <a href="page/Men/topware.php?ctg=Kid/Sơ sinh">Sơ sinh</a>
              <a href="page/Men/topware.php?ctg=Kid/Phụ kiện cho trẻ">Phụ kiện cho trẻ</a>

            </div>
          </div>

          
          <div class="dropdown">
            <button class="dropbtn">Phụ kiện</button>
            <div class="dropdown-content">
              <a href="page/Men/topware.php?ctg=Accessories/Đồng hồ">Đồng hồ</a>
              <a href="page/Men/topware.php?ctg=Accessories/Kính">Kính</a>
              <a href="page/Men/topware.php?ctg=Accessories/Thắt lưng">Thắt lưng</a>
              <a href="page/Men/topware.php?ctg=Accessories/Khác">Khác</a>
            </div>
          </div>
        </form>
            </div>
        </div>
        <form action="Men/search_products.php" method="post"><input class="search" type="search" name="search_key" id="" placeholder="search for products, bands and more"></form>

        <div class="dropdown2">
            <?php
            if (isset($_SESSION['username'])) {
                echo '<a href="../backend/user_logout.php" style="top:-20px; color: white; !important">
        <img src="img/profile.png" alt="" srcset=""  style="width:20px; !important">
        <p>Profile</p>
      </a>';
            } else {
                echo '<button type="submit" class="dropbtn2" onclick="loginpage()">Login</button>';
            }
            ?>
            <!-- <button type="submit" class="dropbtn2" onclick="loginpage()">Login</button> -->

            <div class="dropdown-content2" style="display:none" id="LoginForm">

                <form action="../backend/user_login.php" method="post">
                    <div class="form-outline mb-4">
                        <input type="username" id="form2Example1" class="form-control" name="username" placeholder="username" />
                        <!-- <label class="form-label" for="form2Example1">Email address</label> -->
                    </div>


                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example2" class="form-control" name="password" placeholder="password" />
                        <!-- <label class="form-label" for="form2Example2">Password</label> -->
                    </div>


                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">

                            <a href="forgot_password.php">Forgot password?</a>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Sign in</button>


                    <div class="text-center">
                        <p>Not a member? <a href="reg.php">Register</a></p>
                        <p>or sign up with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1 ">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>



        </div>

    </header>

    <?php
    $ip = getIPAddress();
    $sql = "select * from cart_details where ip_address = '$ip'";
    $res = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($res);
    ?>
    <!-- Cart html using Boothstap5 -->
    <section class="h-100 h-custom" style="background-color: #d2c9ff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-xl-12 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Order</h3>
                                        <hr class="my-4">



                                        <h5 class="text-uppercase mb-3">Select Payment Method</h5>

                                        <!-- if bkash or bitcoin Select h3 will show -->
                                        <h3 style="color: #d42c2c;">Currently Not available</h3>
                                        <label class="radio_img">
                                            <input type="radio" name="test" value="small" checked>
                                            <img class="payment_m" src="../img/cod.png" alt="Option 1">
                                        </label>

                                        <label>
                                            <input type="radio" name="test" value="big">
                                            <img class="payment_m" src="../img/bkash.svg" alt="Option 2">
                                        </label>
                                        <label>
                                            <input type="radio" name="test" value="big">
                                            <img class="payment_m" src="../img/bitcoin.jpg" alt="Option 2">
                                        </label>


                                        <!-- <button type="button" class="btn btn-dark btn-block btn-lg checkout_btn" data-mdb-ripple-color="dark">Order</button> -->
                                        <br>
                                        <a class="btn btn-primary disabled" role="button" aria-disabled="true">Confirm Order</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>



</html>