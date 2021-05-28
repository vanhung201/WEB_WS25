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
    <!-----------------single product details----------->
    <div class="small-container single-product">
        <div class="row">
            <?php

        $IDProduct = $_GET["IDProduct"];
        include("db_connect.php");
        $sql = "SELECT Name, Detail, Amount, Img FROM product WHERE IDProduct = $IDProduct";
        $kq = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_row($kq)){
            echo "
            <div class='col-2'>
                <img src='Images/$row[3]' width='100%' id='ProductImg'>
            </div>
        <div class='col-2'>
            <h1>$row[0]</h1>
            <h4>$row[2] VNĐ</h4>
            <select>
                <option>Chọn màu</option>
                <option>Đen</option>
                <option>Bạc</option>
                <option>Xám</option>
            </select>
            <input type='number' value='1'>
            <a href='#' class='btn'>Thêm vào giỏ</a>
            <h3>Chi tiết sản phẩm <i class='fa fa-indent'></i></h3>
            <br>
            <p>$row[1]</p>
        </div>
    </div>
            ";
        }; 
    ?>
        </div>
        <!--------testimonial---------->
        <div class="testimonial">
            <div class="small-container">
                <h1>Đánh giá</h1>
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Đồng hồ giá tốt, nhân viên tư vấn nhiệt tình, chế độ hậu mãi tuyệt vời. Chắc chắn tôi sẽ giới
                            thiệu bạn bè mình đến mua sắm tại WS25
                        </p>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="Images/Cus1.png">
                        <h3>Văn Hùng</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Tôi ủng hộ những người đặt lợi ích của khách hàng làm mục tiêu phấn đấu.
                            Vì vậy, tôi đã ủng hộ và lựa chọn WS25.
                        </p>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="Images/Cus2.png">
                        <h3>Trịnh Phú</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left"></i>
                        <p>Anh ấn tượng với đội ngũ nhân viên kỹ thuật ở đây với sự tận tâm, chuyên nghiệp.
                            Anh gửi lời chúc mừng và hi vọng WS25 luôn luôn lớn mạnh
                        </p>
                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <img src="Images/Cus3.png">
                        <h3>Thanh Hoài</h3>
                    </div>
                </div>
            </div>
        </div>
        <!----------title-------------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Sản phẩm liên quan</h2>
                <p>Xem thêm</p>
            </div>
        </div>
        <!----------product-------------->
        <div class="small-container">
            <div class="row">
                <div class="col-4">
                    <img src="Images/SanPham2.png">
                    <h4>G-Shock GA-400-1BDR – Nam – Quartz (Pin) – Dây Cao Su</h4>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>4.230.000đ</p>
                </div>
                <div class="col-4">
                    <img src="Images/SanPham3.png">
                    <h4>Daniel Wellington DW00100148 – Nam – Quartz (Pin) – Dây Vải – Mặt Số 40mm</h4>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>4.600.000đ</p>
                </div>
                <div class="col-4">
                    <img src="Images/SanPham4.png">
                    <h4>Casio AE-1200WHD-1AVDF – Nam – Kính Nhựa – Quartz (Pin) – Dây Kim Loại</h4>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>7.140.000đ</p>
                </div>
                <div class="col-4">
                    <img src="Images/SanPham5.png">
                    <h4>Doxa D173TCM – Nam – Kính Sapphire – Automatic (Tự Động) – Dây Kim Loại</h4>
                    <div class="ratting">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p>36.940.000đ</p>
                </div>

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
    <!--------js for product--------->
    <script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    SmallImg[0].onclick = function() {
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function() {
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function() {
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function() {
        ProductImg.src = SmallImg[3].src;
    }
    </script>
</body>

</html>