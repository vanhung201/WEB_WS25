<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>All Products - WS25</title>
    <link rel="shortcut icon" type="image/png" href="Images/icon.png">
    <link rel="stylesheet" href='style.css'>
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="Images/logo.png" width="125px"></a>
            </div>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Tìm kiếm" />
            </div>
            <nav>
                <ul id="MenuItems"><b>
                        <li><a href="productsman.php">Nam</a></li>
                        <li><a href="productswoman.php">Nữ</a></li>
                        <li><a href="">Dịch vụ</a></li>
                        <li><a href="">Liên hệ</a></li>
                        <li><a href="account.php">Tài khoản</a></li>
                </ul></b>
            </nav>
            <a href="cart.html"><img src="Images/cart.png" width="30px" height="30px"></a>
            <img src="Images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <div class="small-container">

        <div class="row row-2">
            <h2>Tất cả sản phẩm nam</h2>
            <select>
                <option>Sắp xếp mặc định</option>
                <option>Sắp xếp theo giá giảm dần</option>
                <option>Sắp xếp theo giá tăng dần</option>
                <option>Bán chạy</option>
                <option>Giảm giá</option>
            </select>
        </div>

        <div class="row">
        <?php
            include ("db_connect.php");
            $sql = "SELECT * FROM product WHERE IDTypeProduct = 0";
            $kq = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_row($kq)){
                echo "
                <div class='col-4'>
                <a href='product-detail.php?IDProduct=$row[0]'><img src='Images/$row[7]'></a>
                <a href='product-detail.php?IDProduct=$row[0]'><h4>$row[1]</h4></a>
                <div class='ratting'>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star'></i>
                    <i class='fa fa-star-o'></i>
                </div>
                <p><h3>$row[5] VNĐ</h3></p>
            </div>
                ";
            };
            mysqli_close($conn);
        ?>
        </div>
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>

    <!--------footer--------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Gọi theo hotline:</h3>
                    <p>19001010</p>
                    <pre>69/68 Đặng Thùy Trâm, P. 13 
Q. Bình Thạnh, TP. HCM
<b>Số điện thoại: </b>+84 27 6969 6969
<b>Địa chỉ email: </b>lienhe@ws25.com
                </pre>
                </div>
                <div class="footer-col-2">
                    <img src="Images/logo.png">
                </div>
                <div class="footer-col-3">
                    <h3>Hướng dẫn</h3>
                    <ul>
                        <li>Thông tin liên hệ</li>
                        <li>Hỏi đáp - Góp ý</li>
                        <li>Chính sách đổi hàng</li>
                        <li>Chính sách bảo hành</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Theo dõi chúng tôi tại:</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                        <li>Twitter</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="copyright-col-1">
                    <p class="copyright">Copyright 2021 - WS25 Team</p>
                    <p class="copyright">Góp ý & Khiếu nại : ceo@ws25.com</p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--------js for toggle menu--------->
    <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px";
        }
    }
    </script>

</body>

</html>