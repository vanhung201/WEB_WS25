<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1, maximun-scale=1">
    <title>WS25 Admin</title>
    <link rel="shortcut icon" type="image/png" href="Images/icon.png">
    <link rel = "stylesheet" href = "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/account.css">
</head>
<body>
<?php
if(isset($_SESSION['UserName'])) {
    ?>
    <div>
        <input type="checkbox" id="nav-toggle">
        <div class="sidebar">
            <div class="sidebar-brand">
                <div class="logo">
                    <a href="index.php"><img src="Images/logo.png" width="130px" alt="logo.png"></a>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="index.php" class="active"><span class="las la-igloo"></span>
                            <span>Danh Mục</span></a>
                    </li>

                    <li>
                        <a href="product.html"><span class="las la-clipboard-list"></span>
                            <span>Sản Phẩm</span></a>
                    </li>

                    <li>
                        <a href="customer.html"><span class="las la-users"></span>
                            <span>Khách Hàng</span></a>
                    </li>

                    <li>
                        <a href="order.html"><span class="las la-shopping-bag"></span>
                            <span>Đơn Hàng</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here"/>
                </div>
                <div class="user-wrapper">
                    <div style="display: flex; align-items: center;">
                        <div><i class='fas fa-user-circle' style="font-size: 35px; padding-right: 10px;"></i></div>
                        <div>
                            <div style="padding-bottom: 5px;">Xin chào <b><?php echo $_SESSION['UserName']?></b></div>
                            <a style="color: red;" href="logout.php">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </header>
            <main>
                <div class="cards">
                    <div>
                        <div class="card-single">
                            <div>
                                <h1>79</h1>
                                <span>Sản Phẩm</span>
                            </div>
                            <div>
                                <span class="las la-clipboard-list"></span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="color-table-if" width="100%">
                                    <thead>
                                    <tr>
                                        <td>Mã Sản Phẩm </td>
                                        <td>Tên Sản Phẩm</td>
                                        <td>Số Lượng</td>
                                        <td>Giá</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><span class="status pink"></span>WS001</td>
                                        <td>Casio AE-1200WHD-1AVDF</td>
                                        <td>101</td>
                                        <td>1.246.000 VNĐ</td>
                                        <td><button class="detail">Chi Tiết<span class="las la-arrow-right"></span>
                                    </tr>
                                    <tr>
                                        <td><span class="status pink"></span>WS002</td>
                                        <td>G-Shock GA-400-1BDR</td>
                                        <td>98</td>
                                        <td>4.230.000 VNĐ</td>
                                        <td><button class="detail">Chi Tiết<span class="las la-arrow-right"></span>
                                    </tr>
                                    <tr>
                                        <td><span class="status pink"></span>WS003</td>
                                        <td>Daniel Wellington DW00100148</td>
                                        <td>72</td>
                                        <td>4.600.000 VNĐ</td>
                                        <td><button class="detail">Chi Tiết<span class="las la-arrow-right"></span>
                                    </tr>
                                    <tr>
                                        <td class="card-header-seeall" colspan="4">
                                            <button>
                                                <a href="product.html">Xem tất cả!!</a>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div>
                        <div class="card-single">
                            <div>
                                <h1>54</h1>
                                <span>Khách Hàng</span>
                            </div>
                            <div>
                                <span class="las la-users"></span>
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="color-table-if" width="100%">
                                    <thead>
                                    <tr>
                                        <td>Họ Và Tên</td>
                                        <td>Số Điện Thoại</td>
                                        <td>Địa Chỉ</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td> <span class="status purple"></span> Nguyễn Thanh An</td>
                                        <td>0936788172</td>
                                        <td><Address>170/21-Bùi Đình Túy</Address></td>
                                        <td><button class="detail">Chi Tiết<span class="las la-arrow-right"></span>
                                    </tr>
                                    <tr>
                                        <td><span class="status pink"></span>Hà Minh Thông</td>
                                        <td>0946788281</td>
                                        <td><address>170/21-Bùi Đình Túy</address></td>
                                        <td><button class="detail">Chi Tiết<span class="las la-arrow-right"></span>
                                    </tr>
                                    <tr>
                                        <td><span class="status orange"></span>Lê Văn Hùng</td>
                                        <td>09347888123</td>
                                        <td><address>Dương Quảng Hàm</address></td>
                                        <td><button class="detail">Chi Tiết<span class="las la-arrow-right"></span>
                                    </tr>
                                    <tr>
                                        <td class="card-header-seeall" colspan="4">
                                            <button>
                                                <a href="customer.html">Xem tất cả!!</a>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div>
                        <div class="card-single">
                            <div>
                                <h1>124</h1>
                                <span>Đơn Hàng</span>
                            </div>
                            <div>
                                <span class="las la-shopping-bag"></span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="color-table-if" width="100%">
                                    <thead>
                                    <tr>
                                        <td>Mã đơn hàng</td>
                                        <td>Sản phẩm</td>
                                        <td>Số Lượng</td>
                                        <td>Ngày đặt hàng</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td> <span class="status purple"></span>OD001</td>
                                        <td>Casio AE-1200WHD-1AVDF</br>
                                            G-Shock GA-400-1BDR
                                        </td>
                                        <td class="stylesl">
                                            2</br>
                                            3
                                        </td>
                                        <td>12/07/2020</td>
                                        <td><button class="detail" >Chi Tiết<span class="las la-arrow-right">

                                                </span></button></td>
                                    </tr>
                                    <tr>
                                        <td> <span class="status purple"></span>OD002</td>
                                        <td>Casio AE-1200WHD-1AVDF</br>
                                            Daniel Wellington DW00100148
                                        </td>
                                        <td class="stylesl">
                                            2</br>
                                            3
                                        </td>
                                        <td>17/04/2020</td>
                                        <td><button class="detail">Chi Tiết<span class="las la-arrow-right"></span>
                                    </tr><tr>
                                        <td> <span class="status purple"></span>OD003</td>
                                        <td>Daniel Wellington DW00100148</br>
                                            G-Shock GA-400-1BDR
                                        </td>
                                        <td class="stylesl">
                                            2</br>
                                            3
                                        </td>
                                        <td>31/02/2020</td>
                                        <td><button class="detail">Chi Tiết<span class="las la-arrow-right"></span>
                                    </tr>
                                    <tr>
                                        <td class="card-header-seeall">
                                            <button>
                                                <a href="order.html">Xem tất cả!!</a>
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php
}
else {
    ?>
    <div class="adminMessage">Bạn cần đăng nhập bằng <a style='color: blue' class="accountAdmin" href="account.php"><b>TÀI KHOẢN ADMIN</b></a> để tiếp tục</div>
    <div class="adminMessage"><a style='color: blue' class="accountAdmin" href="../index.php"><b>Nhấn vào đây</b></a> để trở về trang chủ</div>
    <?php
}
?>
</body>
</html>