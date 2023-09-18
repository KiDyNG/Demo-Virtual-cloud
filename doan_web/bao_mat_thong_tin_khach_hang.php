<?php 
    session_start();  
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chính sách bảo mật thông tin khách hàng | ECCO</title>
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
                            <a href="index.php" class="nav-item nav-link">TRANG CHỦ</a>
                            <a href="laptop_moi.php" class="nav-item nav-link">ĐỒ ĐÁ BÓNG</a>
                            <a href="laptop_do_hoa_gaming.php" class="nav-item nav-link">GIÀY THẾ THAO</a>
                            <a href="laptop_van_phong.php" class="nav-item nav-link">ĐỒ GYM</a>
                            <a href="linh_kien_laptop.php" class="nav-item nav-link">ĐỒ YOGA</a>
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
    <div class="hnc-static-container">
    <h1 class="hnc-static-heading1">CHÍNH SÁCH BẢO MẬT THÔNG TIN KHÁCH HÀNG</h1>
    <br>
    <img src="img/bao_mat_tt_khach_hang.jpg" class="hnc-static-image"  width="500" height="350" alt="bảo mật thông tin của AWEB">
    <div class="hnc-content-box-container">
        <h3 class="hnc-static-heading3 hnc-content-box-ribbon">1. THU THẬP THÔNG TIN CÁ NHÂN</h3>
        <div class="hnc-content-box">
            <p class="hnc-static-text">Để truy cập và sử dụng một số dịch vụ tại ECCO, bạn có thể sẽ được yêu cầu đăng ký với chúng tôi thông tin cá nhân (Email, Họ tên, Số ĐT liên lạc…). Mọi thông tin khai báo phải đảm bảo tính chính xác và hợp pháp, DMT WATCH không chịu mọi trách nhiệm liên quan đến pháp luật của thông tin khai báo, Chúng tôi cũng có thể thu thập thông tin về số lần viếng thăm, bao gồm số trang bạn xem, số links (liên kết) bạn click và những thông tin khác liên quan đến việc kết nối đến site DMT WATCH. Chúng tôi cũng thu thập các thông tin mà trình duyệt Web (Browser) bạn sử dụng mỗi khi truy cập vào ECCO, bao gồm: địa chỉ IP, loại Browser, ngôn ngữ sử dụng, thời gian và những địa chỉ mà Browser truy xuất đến.</p>
        </div>
    </div>
    <div class="hnc-content-box-container">
        <h3 class="hnc-static-heading3 hnc-content-box-ribbon">2. CAM KẾT BẢO VỆ CÁC THÔNG TIN RIÊNG TƯ</h3>
            <div class="hnc-content-box">
                <p class="hnc-static-text">Thông tin của khách hàng thông qua hệ thống bảo mật của website, không sử dụng nó vì mục đích thương mại hay bất cứ mục đích nào khác. Chúng tôi sử dụng các biện pháp an ninh bảo mật thông tin để chống mất mát, nhầm lẫn hoặc thay đổi dữ liệu trong hệ thống.</p>
        </div>
    </div>
    <div class="hnc-content-box-container">
        <h3 class="hnc-static-heading3 hnc-content-box-ribbon">3. CAM KẾT CHỈ SỬ DỤNG THÔNG TIN ĐỂ NHẰM TẠO MÔI TRƯỜNG MUA SẮM AN TOÀN</h3>
        <div class="hnc-content-box">
           <p class="hnc-static-text">Chúng tôi sử dụng những thông tin thu thập qua website để tạo môi trường mua sắm an toàn, tiện lợi, chuyên nghiệp và nâng cao chất lượng dịch vụ chăm sóc khách hàng. Ngoài ra, những thông tin cũng chỉ được chúng tôi dùng trong việc giải quyết các vấn đề liên quan tới tranh chấp phát sinh trong việc mua bán, thanh toán qua website, và ngăn chặn những hoạt động vi phạm pháp luật Việt Nam.</p>
        </div>
    </div>
    <div class="hnc-content-box-container">
        <h3 class="hnc-static-heading3 hnc-content-box-ribbon">4. CAM KẾT KHÔNG CHIA SẺ, BÁN HOẶC CHO THUÊ THÔNG TIN CÁ NHÂN CỦA KHÁCH HÀNG</h3>
        <div class="hnc-content-box">
           <p class="hnc-static-text">Thông tin của quý khách gửi cho chúng tôi chỉ do nhân viên chúng tôi quản lý và sử dụng cho mục đích liên hệ hoặc gửi email để cung cấp thông tin cho quý khách.</p>
            <p class="hnc-static-text">Chúng tôi sẽ gửi các thông tin cá nhân về quý khách cho các công ty hoặc các cá nhân khác trong trường hợp:</p>
            <ul class="hnc-static-text">
            <li>Chúng tôi được quý khách đồng ý cho tiết lộ thông tin đó</li>
            <li>Chúng tôi cần tiết lộ thông tin của quý khách để cung cấp các sản phẩm hoặc dịch vụ liên quan tới việc liên lạc với quý khách</li>
            <li>Chúng tôi tuân theo các trát lệnh, lệnh tòa án hoặc thủ tục pháp lý</li>
            <li>Chúng tôi thấy rằng các hành động của quý khách trên các trang web của chúng tôi là vi phạm các quy định hướng dẫn sử dụng của chúng tôi đối với các sản phẩm hoặc dịch vụ nhất định.</li>
            </ul>
        </div>
    </div>
    <div class="hnc-content-box-container">
        <h3 class="hnc-static-heading3 hnc-content-box-ribbon">5. THAY ĐỔI VỀ CHÍNH SÁCH</h3>
        <div class="hnc-content-box">
            <p class="hnc-static-text">Nội dung của “Chính sách bảo mật” này có thể thay đổi để phù hợp với các nhu cầu của ECCO cũng như nhu cầu và sự phản hồi từ khách hàng nếu có. Khi cập nhật nội dung chính sách này, chúng tôi sẽ chỉnh sửa lại thời gian “Cập nhật lần cuối” bên trên. Nội dung “Chính sách bảo mật” này chỉ áp dụng tại ECCO, không bao gồm hoặc liên quan đến các bên thứ ba đặt quảng cáo hay có links tại ECCO. Do đó, chúng tôi đề nghị bạn đọc và tham khảo kỹ nội dung “Chính sách bảo mật” của từng website mà bạn đang truy cập.</p>
        </div>
    </div>
    <div class="hnc-content-box-container">
        <h3 class="hnc-static-heading3 hnc-content-box-ribbon">6. THÔNG TIN LIÊN HỆ</h3>
        <div class="hnc-content-box">
            <p class="hnc-static-text">Chúng tôi luôn hoan nghênh các ý kiến đóng góp, liên hệ và phản hồi thông tin từ bạn về “Chính sách bảo mật” này. Nếu bạn có những thắc mắc liên quan xin vui lòng liên hệ theo địa chỉ Email: ecco@gmail.com</p>
        </div>
    </div>
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
