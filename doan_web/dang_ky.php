<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ECCO</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/ecco1.png">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/dang_ky.css">
        <!-- Harasocial --><script src="https://assets.harafunnel.com/widget/113018741175659.js" async="async"></script>
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        ecco@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        Hotline: 1900 1009
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link ">TRANG CHỦ</a>
                            <a href="dodabong.php" class="nav-item nav-link">ĐỒ ĐÁ BÓNG</a>
                            <a href="giaythethao.php" class="nav-item nav-link ">GIÀY THỂ THAO</a>
                            <a href="dogym.php" class="nav-item nav-link">ĐỒ GYM</a>
                            <a href="doyoga.php" class="nav-item nav-link">ĐỒ YOGA</a>
                            <a href="he_thong_cua_hang.php" class="nav-item nav-link">HỆ THỐNG CỬA HÀNG</a>                         
                        </div>                   
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
                                <div class="dropdown-menu">
                                    <a href="dang_nhap.php" class="dropdown-item" >Đăng nhập</a>
                                    <a href="dang_ky.php" class="dropdown-item" >Đăng ký</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img title="ECCO" src="img/logo-ecco3.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="product-search" method="GET" action="find.php">
                            <div class="search">
                                 <input type="text" placeholder="Nhập từ khóa tìm kiếm" name="q" >
                                 <button type="submit" name="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="phan_hoi.php" class="btn wishlist">
                                <i class="fas fa-comments"></i>
                            </a>
                            <a href="gio_hang.php" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(<?php if(isset($_SESSION['cart']))
                                                {
                                                    echo count($_SESSION['cart']);
                                                }
                                             else
                                             {
                                                 echo "0";
                                             }
                                                ; ?>)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">TRANG CHỦ</a></li>
                    <li class="breadcrumb-item active">Đăng ký</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End --> 
        
        <div id="wrapper">
        <form action="thuc_hien_dang_ky.php" method="POST" id="form_login" onsubmit="return ktra_tra_nhap_information();">
             <h1 id="form_heading">Đăng ký</h1>
             <div id="form_group">
                 <i class="fas fa-signature"></i>
                 <input class="form_input" id="txtHoTen" type="text" placeholder="Mời bạn nhập họ tên" name="txtHoTen">
             </div>
             <div id="form_group">
                 <i class="far fa-user"></i>
                 <input class="form_input" id="txtTenDangNhap" type="text" placeholder="Mời bạn nhập tên đăng nhập" name="txtTenDangNhap">
             </div>
             <div id="form_group">
                 <i class="fas fa-envelope-square"></i>
                 <input class="form_input" id="txtEmail" type="text" placeholder="Mời bạn nhập email" name="txtEmail">
             </div>
             <div id="form_group">
                 <i class="fas fa-phone"></i>
                 <input class="form_input" id="txtSDT" type="text" placeholder="Mời bạn nhập số điện thoại" name="txtSDT">
             </div>
             <div id="form_group">
                 <i class="fas fa-key"></i>
                 <input class="form_input" id="txtPass" type="password" placeholder="Mời bạn nhập mật khẩu" name="txtPass">
                 <div id="eye">
                     <i class="fas fa-eye"></i>
                 </div>
             </div>
             <div id="form_group">
                 <i class="fas fa-key"></i>
                 <input class="form_input" id="txtRePass" type="password" placeholder="Mời bạn nhập lại mật khẩu" name="txtRePass">
                 <div id="eye">
                     <i class="fas fa-eye"></i>
                 </div>
             </div>
             <div id="form_group">
                 <i class="fas fa-location"></i>
                 <input class="form_input" id="txtDiaChi" type="text" placeholder="Mời bạn nhập địa chỉ" name="txtDiaChi">
             </div>
             <input type="submit" class="form_submit" value="ĐĂNG KÝ">
        </form>
       </div>

        
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                             <h2>ECCO</h2>
                            <div class="contact-info">
                                 <p><i class="fa fa-map-marker"></i>Tổ 55, Đông Anh, Hà Nội</p>
                                <p><i class="fa fa-envelope"></i>ecco@gmail.com</p>
                                <p><i class="fa fa-phone"></i>1900 1009</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>TIN TỨC</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href="https://twitter.com/BLACKPINK?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/groups/2522602641301768"><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/bitclub_real/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/watch?v=0l65NY9PaC8"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>CHÍNH SÁCH CHUNG</h2>
                            <ul>
                                <li><a href="chinh_sach_quy_dinh_chung.php">Chính sách, quy định chung</a></li>
                                <li><a href="chinh_sach_bao_hanh.php">Chính sách bảo hành</a></li>
                                <li><a href="chinh_sach_hang_chinh_hang.php">Chính sách hàng chính hãng</a></li>
                                <li><a href="chinh_sach_van_chuyen.php">Chính sách vận chuyển</a></li>
                                <li><a href="bao_mat_thong_tin_khach_hang.php">Bảo mật thông tin</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>HỖ TRỢ KHÁCH HÀNG</h2>
                            <ul>
                                <li><a href="huong_dan_mua_hang_truc_tuyen.php">Hướng dẫn mua hàng trực tuyến</a></li>
                                <li><a href="huong_dan_thanh_toan.php">Hướng dẫn thanh toán</a></li>
                                <li><a href="phan_hoi.php">Góp ý, khiếu nại</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                            <img src="img/logo-momo.png" alt="Payment Method" />
                            <img src="img/logo-vnpay.png" alt="Payment Method" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->   
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/dang_ky.js"></script>
        <script type="text/javascript">
        function ktra_tra_nhap_information() {
            var ho_ten = document.getElementById('txtHoTen').value;
            var ten_dang_nhap = document.getElementById('txtTenDangNhap').value;
            var mat_khau = document.getElementById('txtPass').value;
            var nhap_lai_mat_khau = document.getElementById('txtRePass').value;
            var email = document.getElementById('txtEmail').value;
            var so_dien_thoai = document.getElementById('txtSDT').value;
            var dia_chi = document.getElementById('txtDiaChi').value;

            // Kiểm tra xem ô họ tên đã nhập thông tin chưa
            if (ho_ten == '')
            {
                alert('Bạn chưa điền họ tên');
                return false;
            }

            //Kiểm tra xem ô tên đăng nhập đã nhập đủ thông tin chưa
            if (ten_dang_nhap == '') 
            {
                alert('Bạn chưa điền USERNAME');
                return false;
            }

            //Kiểm tra xem ô password đã nhập thông tin chưa
            if (mat_khau == '') 
            {
                alert('Bạn chưa điền PASSWORD')
                return false;
            }
            //Kiểm tra xem ô password đã nhập thông tin chưa
            if (nhap_lai_mat_khau == '') 
            {
                alert('Bạn chưa điền PASSWORD')
                return false;
            }

            // Kiểm tra xem ô email đã nhập thông tin hay chưa
            if (email == '')
            {
                alert('Bạn chưa điền eamil');
                return false;
            }

            // Kiểm tra xem ô số điện thoại đã nhập thông tin hay chưa
            if (so_dien_thoai == '') 
            {
                alert('Bạn chưa điền số diện thoại');
                return false;
            }

            // Kiểm tra xem ô địa chỉ đã nhập thông tin hay chưa
            if (dia_chi == '')
            {
                alert('Bạn chưa điền địa chỉ cá nhân');
                return false;
            }
            //Khi nhập đủ thông tin thì người dùng sẽ được chuyển đến trang thuc_hien_dang_ky.php
            return true;
        }
        </script>
    </body>
</html>
