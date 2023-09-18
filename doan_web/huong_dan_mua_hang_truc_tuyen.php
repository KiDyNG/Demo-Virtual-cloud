<?php 
    session_start();  
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hướng dẫn mua hàng trực tuyến | ECCO</title>
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
                            <a href="trang_chu.php">
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
        
       
        <!-- main -->
       <div class="body-new-2019">
    <div class="hnc-static-container hnc-divided-container">
    <h1 class="hnc-static-heading1">HƯỚNG DẪN MUA HÀNG TRỰC TUYẾN TẠI AWEB</h1>

    <div class="hnc-static-dash"></div>
    <p class="hnc-static-step">CÁCH 1: ĐẶT HÀNG QUA ĐIỆN THOẠI</p>
    <p class="hnc-static-text">Quý khách gọi đến số <strong><span style="color: #2b80dd;">1900 1009</span></strong> bấm phím <strong><span style="color: #2b80dd;">1</span></strong> để gặp nhân viên bán hàng Online của chúng tôi. Nhân viên bán hàng Online sẽ tư vấn và tiếp nhận đơn hàng cho quý khách trong thời gian từ 8h-21h30 hàng ngày và tất cả các ngày trong tuần.</p>
    <p class="hnc-static-text">Để liên hệ tới từng <span style="color: #2b80dd;"><strong>Shop gần nhất</strong></span>, Quý khách hàng vui lòng liên hệ theo số điện thoại sau:</p>

    <?php 
        include('config.php');
 
        # Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn
        $sql = "
                SELECT * 
                FROM cua_hang 
                ORDER BY ma_cua_hang ASC";

        # Thực thi câu lệnh truy vấn
        $cua_hang = mysqli_query($ket_noi, $sql);

        # Hiển thị ra CSDL mà bạn vừa lấy được
         while ($row = mysqli_fetch_array($cua_hang))
            {
    ;?>

    <p class="hnc-static-text"><i class="fal fa-building" style="margin-right: 5px;"></i><?php echo $row['ten_cua_hang'] ;?> – <strong><span>SĐT: <?php echo $row['hotline_cua_hang'] ;?></span></strong></p>
    <?php 
            }

        # Đóng kết nối với CSDL2qdd33
            mysqli_close($ket_noi);
    ;?>

    <div class="hnc-static-dash"></div>
    <p class="hnc-static-step">CÁCH 2: ĐẶT HÀNG QUA HỆ THỐNG WEBSITE CỦA AWEB</p>
    <h3 .hnc-static-heading3>BƯỚC 1: TÌM SẢN PHẨM CẦN MUA</h3>
    <p class="hnc-static-text">Bạn có thể truy cập website awebcomputer.vn để tìm và chọn sản phẩm muốn mua bằng nhiều cách:</p>
    <ul class="hnc-static-text">
        <li>Sử dụng ô tìm kiếm phía trên, gõ tên sản phẩm muốn mua (có thể tìm đích danh 1 sản phẩm, tìm theo hãng…). Website sẽ cung cấp cho bạn những gợi ý chính xác để lựa chọn.</li>
    </ul>
    <img class="hnc-static-image" src="img/img_search.png">
    <ul class="hnc-static-text">
        <li>Sử dụng menu sản phẩm của website: Chọn loại sản phẩm muốn mua hoặc tìm theo hãng muốn mua.</li>
    </ul>
    <img class="hnc-static-image" src="img/img_search2.png" alt="Hướng dẫn mua hàng online tại Awebcomputer">
    <h3 .hnc-static-heading3>BƯỚC 2: ĐẶT MUA SẢN PHẨM</h3>
    <p class="hnc-static-text">Sau khi chọn được sản phẩm ưng ý muốn mua, bạn tiến hành đặt hàng bằng cách:</p>
    <ul class="hnc-static-text">
        <li>Chọn vào nút <strong><span style="color: #ff0000;">ĐẶT MUA NGAY</span></strong> nếu bạn muốn thanh toán luôn toàn bộ giá tiền sản phẩm.</li>
        <li>Chọn vào nút <strong><span style="color: #ffcc00;">CHO VÀO GIỎ</span></strong> nếu bạn muốn mua nhiều sản phẩm.</li>
    </ul>
    <p class="hnc-static-text"><img class="hnc-static-image" src="img/img_chi_tiet_sp.png" alt="Hướng dẫn mua hàng online tại Awebcomputer">
        <p class="hnc-static-text">Trong giỏ hàng của quý khách có hiển thị thông tin về tên sản phẩm, đơn giá, số lượng cần mua, quý khách có thể thay đổi số lượng cần mua, xóa bỏ mặt hàng không muốn mua.</p>
        <p class="hnc-static-text"><img class="hnc-static-image" src="img/img_gio_hang.png" alt="Hướng dẫn mua hàng online tại Awebcomputer"></p>
        <p class="hnc-static-text"><img class="hnc-static-image" src="img/img_thanh_toan.png" alt="Hướng dẫn mua hàng online tại Awebcomputer"></p>
        <ul class="hnc-static-text">
            <li>Điền đầy đủ các thông tin mua hàng theo các bước trên website, sau đó chọn hình thức thanh toán, hình thức vận chuyển.</li>
            <li>Nhấn nút <strong><span style="color: #2b80dd;">ĐẶT HÀNG</span></strong> để mua hàng, đơn hàng của quý khách sẽ được gửi đến hệ thống website của chúng tôi, hệ thống sẽ tự động gửi lại cho quý khách thông tin đơn hàng vừa đặt của quý khách vào địa chỉ email mà quý khách đã đăng ký.</li>
            <li>Nhân viên kinh doanh Online của chúng tôi sẽ liên hệ với khách hàng trong thời gian sớm nhất để xác nhận đơn hàng và xử lý đơn hàng theo yêu cầu của quý khách.</li>
        </ul>
        <h3 .hnc-static-heading3>BƯỚC 3: NHẬN HÀNG VÀ THANH TOÁN</h3>
        
</div>
    </div> 


<div class="contact">
    <div class="container-fluid">
        <div class="row">

            <?php 
                include('config.php');
 
                # Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn
                $sql = "
                        SELECT * 
                        FROM cua_hang 
                        ORDER BY ma_cua_hang ASC";

                # Thực thi câu lệnh truy vấn
                $cua_hang = mysqli_query($ket_noi, $sql);

                # Hiển thị ra CSDL mà bạn vừa lấy được
                while ($row = mysqli_fetch_array($cua_hang))
                {
            ;?>
            <div class="col-lg-4">
                <div class="contact-info">
                    <h2><?php echo $row['ten_cua_hang'] ;?></h2>
                    <h3><i class="fa fa-map-marker"></i><?php echo $row['dia_chi_cua_hang'] ;?></h3>
                    <h3><i class="fa fa-envelope"></i><?php echo $row['email_cua_hang'] ;?></h3>
                    <h3><i class="fa fa-phone"></i><?php echo $row['hotline_cua_hang'] ;?></h3>
                    <div class="social">
                        <a href="<?php echo $row['link_facebook'] ;?>"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $row['link_internet'] ;?>"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?php echo $row['link_youtube'] ;?>"><i class="fab fa-youtube"></i></a>
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
