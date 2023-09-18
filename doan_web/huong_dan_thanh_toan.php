<?php 
    session_start();  
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hướng dẫn thanh toán | ECCO</title>
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
                            <a href="index.php" class="nav-item nav-link ">TRANG CHỦ</a>
                            <a href="dodabong.php" class="nav-item nav-link">ĐỒ ĐÁ BÓNG</a>
                            <a href="giaythethao.php" class="nav-item nav-link">GIÀY THỂ THAO</a>
                            <a href="dogym.php" class="nav-item nav-link">ĐỒ GYM</a>
                            <a href="doyoga.php" class="nav-item nav-link ">ĐỒ YOGA</a>
                            <a href="he_thong_cua_hang.php" class="nav-item nav-link active">HỆ THỐNG CỬA HÀNG</a>                          
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
    <div class="hnc-static-container hnc-content-box-container">
    <h1 class="hnc-static-heading1"  style="text-transform:uppercase;">Hướng Dẫn Thanh Toán</h1>
   <!-- <img class="hnc-static-image" src="https://www.hanoicomputer.vn/media/lib/huong_dan_thanh_toan_hnc.jpg" alt="Hướng dẫn thanh toán khi mua hàng tại Hanoicomputer"> -->

    <div class="hnc-static-text-nav-bar">
        <p class="hnc-static-inline">thanh toán
            <br>qua ngân hàng</p>
        <p class="hnc-static-inline">thanh toán
            <br>tiền mặt</p>
        <p class="hnc-static-inline">thanh toán
            <br>qua VNPAY</p>
        <p class="hnc-static-inline">thanh toán
            <br>qua Momo</p>
    </div>

<div class=" hnc-content-box hnc-static-text">
    <h3 class="hnc-static-heading3 ">Cách 1: THANH TOÁN BẰNG TIỀN MẶT</h3>
    <!--<h5 class="hnc-static-heading5 hnc-content-box-credit-card">THANH TOÁN TRỰC TIẾP TẠI CỬA HÀNG</h5> -->

    <p>Quý khách hàng vui lòng thanh toán trực tiếp tại Cửa hàng ngay khi mua hàng:</p>
    <p>Trụ sở công ty:</p>
    <ul>
        <li>Tổ 55, Đông Anh, Hà Nội</li>
    </ul>
    <p>Các cửa hàng:</p>
    <ul>
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
                
        <li><?php echo $row['ten_cua_hang'] ;?> - <?php echo $row['dia_chi_cua_hang'] ;?></li>          
        <?php 
            }

            # Đóng kết nối với CSDL
            mysqli_close($ket_noi);
        ;?>
    </ul>
</div>
<br>
<br>


<div class=" hnc-content-box hnc-static-text">
    <h3 class="hnc-static-heading3">Cách 2: THANH TOÁN QUA NGÂN HÀNG</h3>
    <p>Nếu địa điểm giao hàng là ngoại thành, ngoại tỉnh hoặc nội thành thành phố Hà Nội nhưng khác với địa điểm thanh toán (trong trường hợp Quý khách gửi quà, gửi hàng cho bạn bè, đối tác…), chúng tôi sẽ thu tiền trước 100% giá trị đơn hàng + phí vận chuyển theo cước phí tính trong chính sách vận chuyển bằng phương thức chuyển khoản trước khi giao hàng.</p>
    <img class="hnc-static-image" src="img/huong-dan-thanh-toan2.jpg" alt="Hướng dẫn thanh toán khi mua hàng tại AWEB">
    <br>
    <p>Quý khách vui lòng nhập nội dung thanh toán theo cú pháp sau:</p>
    <p><span style="font-weight: 700; color: #2b80dd;">Tên khách hàng</span>[dấu cách]<span style="font-weight: 700; color: #2b80dd;">Số điện thoại khách hàng</span>[dấu cách]<span style="font-weight: 700; color: #2b80dd;">Mã cửa hàng</span>"</p>
   <p>Ví dụ: NGUYEN NHU MINH 0986123456 12</p>
   <div>
        <table style="margin:0 auto;">
    <tbody>
    <tr>
    <td style="color: white; background: #2b80dd;">Mã cửa hàng</td>
    <td style="color: white; background: #2b80dd;">Tên cửa hàng</td>
    </tr>

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
                
    <tr>
    <td><?php echo $row['ma_cua_hang'] ;?></td>
    <td><?php echo $row['ten_cua_hang'] ;?> - <?php echo $row['dia_chi_cua_hang'] ;?></td>
    </tr>          
    <?php 
        }

        # Đóng kết nối với CSDL
        mysqli_close($ket_noi);
    ;?>

    </tbody>
    </table>
    </div>
    <br>

    <p>Quý khách chuyển tiền cho chúng tôi vào một trong các tài khoản sau đây:</p>

    <div class="hnc-content-box-container">
        <h5 class="hnc-static-heading5 hnc-content-box-credit-card">1. Ngân hàng TMCP Ngoại Thương Việt Nam (Vietcombank Tây Hồ)</h5>
        <div class="hnc-content-box">
            <p>Địa chỉ: 683 Lạc Long Quân, Tây Hồ, Hà Nội</p>
            <ul>
                <li>Tên Tài khoản: ECCO</li>
                <li>Số tài khoản: 09913422300930</li>
            </ul>
        </div>
    </div>
    <div class="hnc-content-box-container">
        <h5 class="hnc-static-heading5 hnc-content-box-credit-card">2. Ngân hàng Nông nghiệp và phát triển Nông thôn Việt Nam – Chi nhánh Hà Nội (AGRIBANK HÀ NỘI)</h5>
        <div class="hnc-content-box">
            <p>Địa chỉ: 77 Lạc Trung, Hai Bà Trưng, Hà Nội</p>
            <ul>
                <li>Tên Tài khoản: ECCO</li>
                <li>Số tài khoản: 150023402454</li>
            </ul>
        </div>
    </div>
    <div class="hnc-content-box-container">
        <h5 class="hnc-static-heading5 hnc-content-box-credit-card">3. Ngân hàng TMCP Thịnh Vượng Việt Nam – Trung tâm giao dịch Hội sở (VPBank)</h5>
        <div class="hnc-content-box">
            <p>Địa chỉ: 191 Bà Triệu, Hai Bà Trưng, Hà Nội</p>
            <ul>
                <li>Tên Tài khoản: ECCO</li>
                <li>Số tài khoản: 108235234359</li>
            </ul>
        </div>
    </div>
    <div class="hnc-content-box-container">
        <h5 class="hnc-static-heading5 hnc-content-box-credit-card">4. Ngân hàng TMCP Đầu tư và phát triển Việt Nam – Chi nhánh Cầu Giấy (BIDV)</h5>
        <div class="hnc-content-box">
            <p>Địa chỉ: 106 Hoàng Quốc Việt, Cầu Giấy, Hà Nội</p>
            <ul>
                <li>Tên Tài khoản: ECCO</li>
                <li>Số tài khoản: 2151000128435341</li>
            </ul>
        </div>
   </div>
   
    <div class="hnc-content-box-container">
        <h5 class="hnc-static-heading5 hnc-content-box-credit-card">5. Ngân hàng Thương mại Cổ phần Công Thương Việt Nam (VIETINBANK- CN ĐỐNG ĐA)</h5>
        <div class="hnc-content-box">
            <ul>
                <li>Tên Tài khoản: ECCO</li>
                <li>Số tài khoản: 11200513428</li>
            </ul>
        </div>
    </div>

    <p class="hnc-notice-text">Để hàng hóa và giá cả được chính xác, ngay sau khi quý khách chuyển tiền xin vui lòng fax giấy ủy nhiệm chi có dấu ngân hàng chuyển tiền để nhân viên kinh doanh làm căn cứ giữ hàng và giá tiền theo đúng thỏa thuận cho quý khách.</p>
</div>
<br>
<br>

<div class=" hnc-content-box hnc-static-text">
    <h3 class="hnc-static-heading3 ">Cách 3: THANH TOÁN QUA VNPAY</h3>
    <!--<h5 class="hnc-static-heading5 hnc-content-box-credit-card">THANH TOÁN TRỰC TIẾP TẠI CỬA HÀNG</h5> -->

    <p>Quý khách hàng vui lòng quét mã QRCode và nhập số tiền cần thanh toán tại Cửa hàng ngay khi mua hàng:</p>
    <p>Trụ sở công ty:</p>
    <ul>
        <li>12 Chùa Bộc, Đống Đa, Hà Nội, Việt Nam</li>
    </ul>
    <p>Các cửa hàng:</p>
    <ul>
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
                
        <li><?php echo $row['ten_cua_hang'] ;?> - <?php echo $row['dia_chi_cua_hang'] ;?></li>          
        <?php 
            }

            # Đóng kết nối với CSDL
            mysqli_close($ket_noi);
        ;?>
    </ul>
</div>
<br>
<br>

<div class=" hnc-content-box hnc-static-text">
    <h3 class="hnc-static-heading3 ">Cách 4: THANH TOÁN QUA MOMO</h3>
    <!--<h5 class="hnc-static-heading5 hnc-content-box-credit-card">THANH TOÁN TRỰC TIẾP TẠI CỬA HÀNG</h5> -->

    <p>Quý khách hàng vui lòng quét mã QRCode và nhập số tiền cần thanh toán tại Cửa hàng ngay khi mua hàng:</p>
    <p>Trụ sở công ty:</p>
    <ul>
        <li>12 Chùa Bộc, Đống Đa, Hà Nội, Việt Nam</li>
    </ul>
    <p>Các cửa hàng:</p>
    <ul>
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
                
        <li><?php echo $row['ten_cua_hang'] ;?> - <?php echo $row['dia_chi_cua_hang'] ;?></li>          
        <?php 
            }

            # Đóng kết nối với CSDL
            mysqli_close($ket_noi);
        ;?>
    </ul>
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
