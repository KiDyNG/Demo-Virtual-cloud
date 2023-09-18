<?php 
    session_start();  
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Trang chủ | ECCO</title>
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

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/ecco1.png">
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
                            <a href="index.php" class="nav-item nav-link active">TRANG CHỦ</a>
                            <a href="dodabong.php" class="nav-item nav-link">ĐỒ ĐÁ BÓNG</a>
                            <a href="giaythethao.php" class="nav-item nav-link">GIÀY THỂ THAO</a>
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
                                <img title="ecco" src="img/logo-ecco3.png" alt="Logo">
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
                            <a href="phan_hoi.php" class="btn wishlist" title="Phản hồi">
                                <i class="fas fa-comments"></i>
                            </a>
                            <a href="gio_hang.php" class="btn cart" title="Giỏ hàng">
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
        
        <!-- Main Slider Start -->
        <div style="text-align: center;" class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <img src="img/shopecco2.jpg" alt="">
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="header-slider normal-slider">

                            <?php 
                               include('config.php');
 
                               # Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn
                               $sql = "
                                       SELECT * 
                                       FROM anh 
                                       ORDER BY maanh ASC";

                                # Thực thi câu lệnh truy vấn
                                $anh_bia = mysqli_query($ket_noi, $sql);

                                # Hiển thị ra CSDL mà bạn vừa lấy được
                                while ($row = mysqli_fetch_array($anh_bia))
                                {
                            ;?>
                            <div class="header-slider-item">
                                <a href=""><img src="<?php echo $row['duongdananh'] ? 'anh_bia/'.$row['duongdananh'] : 'anh_bia/anh_biank4.png' ;?>" alt="Slider Image" /></a>
                            </div>
                            <?php 
                                }

                                # Đóng kết nối với CSDL
                                mysqli_close($ket_noi);
                            ;?>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="header-img">
                            <div class="img-item">
                                <img src="img/shopecco.jpg" />
                            </div>
                            <div class="img-item">
                                <img src="img/shopecco1.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="brand_img/logo-reebok1.png" alt=""></div>
                    <div class="brand-item"><img src="brand_img/logo-puma1.png" alt=""></div> 
                    <div class="brand-item"><img src="brand_img/nikePNG.png" alt=""></div>
                    <div class="brand-item"><img src="brand_img/logo-fila.png" alt=""></div>
                    <div class="brand-item"><img src="brand_img/logo-cv.png" alt=""></div>
                    <div class="brand-item"><img src="brand_img/adidas-logo-PNG-11.png" alt=""></div>
                    <div class="brand-item"><img src="brand_img/logo-tnf.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->             
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>ĐỒ ĐÁ BÓNG</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">

                    <?php 
                        include('config.php');

                        # Viết ra câu lệnh truy vấn để lấy ra dữ liệu mong muốn
                        $sql = "
                                SELECT * 
                                FROM `sanpham`
                                WHERE   `sanpham`.`manhomsp` = 1 
      
                             ";

                        # Thực thi câu lệnh truy vấn
                        $dodabong = mysqli_query($ket_noi, $sql);

                        # Hiển thị ra CSDL mà bạn vừa lấy được
                        while ($row = mysqli_fetch_array($dodabong))
                        {
                    ;?>
                    
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                               <div> <a href="san_pham_chi_tiet.php?id=<?php echo $row['sp_id'] ;?>"><?php echo $row['tensanpham'] ;?></a></div>
                        
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <img src="<?php echo $row['anhdaidien'] ? 'img_sp/'.$row['anhdaidien'] : 'img_sp/NIKE/nike-af1.jpg' ;?>" alt="Product Image">
                            </div>
                            <div class="product-price">
                                <h3><span><?php echo number_format( $row['gia'] );?> VNĐ</span></h3>
                                <a class="btn" href="san_pham_chi_tiet.php?id=<?php echo $row['sp_id'] ;?>"><i class="fa fa-shopping-cart"></i>Chi tiết</a>
                            </div>
                        </div>
                    </div> 
                    <?php      
                        }

                        # Đóng kết nối với CSDL
                        mysqli_close($ket_noi);
                    ;?>
                </div>
            </div>
        </div>
        <!-- Featured Product End -->       
            
        
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>GIÀY THỂ THAO</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">

                    <?php 
                        include('config.php');

                        # Viết ra câu lệnh truy vấn để lấy được dữ liệu mong muốn
                        $sql = "
                                SELECT * 
                                FROM `sanpham`
                                WHERE `sanpham`.`manhomsp` = 2 
                             ";

                        # Thực thi câu lệnh truy vấn
                        $giaythethao = mysqli_query($ket_noi, $sql);


                        # Hiển thị ra CSDL mà bạn vừa mới lấy được
                        while ($row = mysqli_fetch_array($giaythethao))
                        {
                    ;?>
                    
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="san_pham_chi_tiet.php?id=<?php echo $row['sp_id'] ;?>"><?php echo $row['tensanpham'] ;?></a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <img src="<?php echo $row['anhdaidien'] ? 'img_sp/'.$row['anhdaidien'] : 'img_sp/NIKE/nike-af1.jpg' ;?>" alt="Ảnh sản phẩm">
                            </div>
                            <div class="product-price">
                                <h3><span><?php echo number_format( $row['gia_sau_giam']) ;?> VNĐ</span></h3>
                                <a class="btn" href="san_pham_chi_tiet.php?id=<?php echo $row['sp_id'] ;?>"><i class="fa fa-shopping-cart"></i>Chi tiết</a>
                            </div>
                        </div>
                    </div> 
                    <?php      
                        }

                        # Đóng kết nối với CSDL
                        mysqli_close($ket_noi);
                    ;?>
                </div>
            </div>
        </div>
        <!-- Recent Product End -->

        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>THANH TOÁN TIỆN LỢI</h2>
                            <p>
                                Trả tiền mặt, chuyển khoản, trả góp 0%
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>GIAO HÀNG TOÁN QUỐC</h2>
                            <p>
                                Nhận hàng và thanh toán tại nhà
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>ĐỔI TRẢ DỄ DÀNG</h2>
                            <p>
                                Dùng thử trong vòng 3 ngày
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>HỖ TRỢ 24/7</h2>
                            <p>
                                Tư vấn giải đáp mọi thắc mắc
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>HOTLINE</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:19001009">1900 1009</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->
        
        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="section-header">
                    <div style="margin-top: 20px; margin-bottom: 15px; width: 100%; color: #2b80dd;">
                        <h1>CẢM NHẬN KHÁCH HÀNG</h1>
                    </div>
                </div>
                <div class="row align-items-center review-slider normal-slider">

                    <?php 
                        include('config.php');

                        # Viết câu lệnh truy vấn để lấy dữ liệu mà bạn mong muốn
                        $sql = "
                                SELECT * 
                                FROM phan_hoi_kh 
                               ";

                        # Thực thi câu lệnh truy vấn
                        $phan_hoi = mysqli_query($ket_noi, $sql);

                        # Hiển thị ra dữ liệu mà bạn vừa mới lấy được
                        while ($row = mysqli_fetch_array($phan_hoi))
                        {
                    ;?>
                    
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-text">
                                <h2><?php echo $row['tenkhachhang'] ;?></h2>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p><?php echo $row['noidung'] ;?></p>
                            </div>
                        </div>
                    </div>

                    <?php        
                        }

                        # Đóng kết nối với CSDL
                        mysqli_close($ket_noi);
                    ;?>
                </div>
            </div>
        </div>
        <!-- Review End -->        
        
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
        <script src="js/main.js" ></script>
        <?php 
            if(!isset($_SESSION['login'])){
               exit();
            }
            else
            {
                include('config.php');
                $id= $_SESSION['login'];
                $sql = "
                SELECT *  
                FROM thanhvien 
                WHERE mathanhvien ='".$id."'
                ";
                $xac_nhan_thanh_vien = mysqli_query($ket_noi, $sql);
                $row = mysqli_fetch_array($xac_nhan_thanh_vien);
                echo "<script type='text/javascript'>
                        var p = document.createElement('a');
                        p.setAttribute(\"class\", \"nav-link dropdown-toggle\");
                        p.setAttribute(\"data-toggle\", \"dropdown\");
                        p.innerText = '".$row['tendangnhap']."';
                        var parent = document.getElementsByClassName('nav-item dropdown')[0];
                        var child = document.getElementsByClassName('nav-link dropdown-toggle')[0];
                        parent.replaceChild(p, child);

                        var tt = document.createElement('a');
                        tt.setAttribute(\"href\", \"user/profile.php\");
                        tt.setAttribute(\"class\", \"dropdown-item\");
                        tt.innerText = 'Tài Khoản';
                        var parent = document.getElementsByClassName('dropdown-menu')[0];
                        var child = document.getElementsByClassName('dropdown-item')[0];
                        parent.replaceChild(tt, child);

                        var dx = document.createElement('a');
                        dx.setAttribute(\"href\", \"dang_xuat.php\");
                        dx.setAttribute(\"class\", \"dropdown-item\");
                        dx.innerText = 'Đăng xuất';
                        var parent = document.getElementsByClassName('dropdown-menu')[0];
                        var child = document.getElementsByClassName('dropdown-item')[1];
                        parent.replaceChild(dx, child);
                    </script>";
           }
        ;?>
    </body>
</html>
