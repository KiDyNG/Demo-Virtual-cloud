<?php 
    session_start();  
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chính sách vận chuyển | ECCO</title>
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
   <h1 class="hnc-static-heading1" style="text-transform:uppercase;">Chính sách giao hàng của ECCO</h1>
   <div class="hnc-static-image-container">
      <img src="img/chinh_sach_van_chuyen.jpg" class="hnc-static-image loaded" alt="bảo hành AWEB" data-was-processed="true">
    
      <img src="img/banner-ship.png" class="hnc-static-image loading" alt="AWEB giao hàng toàn quốc" data-was-processed="true">
    </div>
   <div class="hnc-content-box">
   <h3 class="hnc-static-heading3">1. LƯU Ý:</h3>
   <p class="hnc-static-text"> - Sau khi bạn đặt hàng, trong vòng 12 giờ làm việc chúng tôi sẽ liên lạc lại để xác nhận và kiểm tra thông tin. - Những rủi ro phát sinh trong quá trình vận chuyển (va đập, ẩm ướt, tai nạn..) có thể ảnh hưởng đến hàng hóa, vì thế xin Quý Khách vui lòng kiểm tra hàng hóa thật kỹ trước khi ký nhận. Máy tính sẽ không chịu trách nhiệm với những sai lệch hình thức của hàng hóa sau khi Quý khách đã ký nhận hàng.</p>
   <h3 class="hnc-static-heading3">2. BẢNG GIÁ DỊCH VỤ GIAO HÀNG</h3>
   <table class="hnc-static-table hnc-static-text">
      <tbody>
         <tr>
            <td style="width: 250px; background: #2b80dd;"><strong>Theo giá trị đơn hàng</strong></td>
            <td style="width: 250px; background: #2b80dd;"><strong>Số Km được Miễn Phí</strong></td>
            <td style="width: 360px; background: #2b80dd;"><strong>Thời gian đáp ứng</strong></td>
            <td style="width: 360px; background: #2b80dd;"><strong>Thu phí</strong></td>
         </tr>
         <tr>
            <td>Dưới 200.000đ</td>
            <td>0.km</td>
            <td>Giao hàng trong vòng 6h</td>
            <td>30.000đ / 1 lần giao (trong vòng 10km)
               40.000đ / 1 lần giao (trong vòng 15km)
               50.000đ / 1 lần giao (trong vòng 20km)
               Trên 20km thu 6.000đ/km - Tối đa 30km.
            </td>
         </tr>
         <tr>
            <td>Trên 200.000đ</td>
            <td>0.km</td>
            <td>Giao hàng trong vòng 2h (*)</td>
            <td>20.000đ /1 lần giao (trong vòng
               15km)
               Từ km thứ 16 thu phí 6.000/km (chở hàng bằng ô tô thu phí 10.000đ/km).
            </td>
         </tr>
         <tr>
            <td>Trên 500.000đ</td>
            <td>20.km</td>
            <td>Giao hàng trong vòng 2h (*)</td>
            <td>Từ km thứ 21 thu phí 6.000/km (chở hàng bằng ô tô thu phí 10.000đ/km).</td>
         </tr>
         <tr>
            <td>Trên 1 triệu đồng</td>
            <td>25.km</td>
            <td>Giao hàng trong vòng 3h</td>
            <td>Từ km thứ 26 thu phí 6.000/km (chở hàng bằng ô tô thu phí 10.000đ/km).</td>
         </tr>
         <tr>
            <td>Trên 3 triệu đồng</td>
            <td>35.km</td>
            <td>Giao hàng trong vòng 4h (< 36km) .  Giao hàng trong 24h (36km-45km)</td>
            <td>Từ km thứ 36 thu phí 6.000/km (chở hàng bằng ô tô thu phí 10.000đ/km).</td>
         </tr>
         <tr>
            <td>Trên 50 triệu đồng</td>
            <td>50.km</td>
            <td>Theo thỏa thuận với khách hàng</td>
            <td>Từ km thứ 51 thu phí 10.000/km hoặc theo tư vấn từ nhân viên bán hàng.</td>
         </tr>
        
      </tbody>
   </table>
   <p class="hnc-static-text hnc-notice-text">Ghi chú: (*) Giao hàng nhanh 2h áp dụng cho những sản phẩm còn hàng trong kho của AWEB trong cùng tỉnh thành với điểm nhận hàng của Khách hàng. (*) Giao hàng nhanh 2h áp dụng trong bán kính 20km từ các showroom bán hàng của AWEB (*) Giao hàng nhanh 2h áp dụng cho các đơn hàng lẻ (sản phẩm có kích thước nhỏ gọn, các sản phẩm không yêu cầu lắp ráp, cài đặt trước khi giao,…)</p>
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
