<?php 
    session_start();  
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chính sách quy định chung| ECCO</title>
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
    <div class="hnc-static-container">
   <h1 class="hnc-static-heading1">QUY ĐỊNH CHUNG CỦA ECCO</h1>
   <div class="hnc-content-box-container">
       <h3 class="hnc-static-heading3 hnc-content-box-ribbon">1. CHẤP THUẬN CÁC ĐIỀU KIỆN SỬ DỤNG</h3>
       <div class="hnc-content-box">
         <p class="hnc-static-text">Khi sử dụng Website của ECCO (<a href="index.php">ECCO</a>), Quý khách đã mặc nhiên chấp thuận các điều khoản và điều kiện sử dụng được quy định dưới đây. Để biết được các sửa đổi mới nhất, Quý khách nên thường xuyên kiểm tra lại “Điều Kiện Sử Dụng”.</p>
         <p class="hnc-static-text">ECCO có quyền thay đổi, điều chỉnh, thêm hay bớt các nội dung của “Điều Kiện Sử dụng” tại bất kỳ thời điểm nào. Nếu Quý khách vẫn tiếp tục sử dụng Website sau khi có các thay đổi như vậy thì có nghĩa là Quý khách đã chấp thuận các thay đổi đó.</p>
      </div>
   </div>
   <div class="hnc-content-box-container">
      <h3 class="hnc-static-heading3 hnc-content-box-ribbon">2. TÍNH CHẤT CỦA THÔNG TIN HIỂN THỊ</h3>
      <div class="hnc-content-box">
         <p class="hnc-static-text">Các nội dung hiển thị trên Website nhằm mục đích cung cấp thông tin về ECCO, về thông tin sản phẩm và dịch vụ mà mà ECCO đang cung cấp.</p>
         <p class="hnc-static-text">Các thông tin khác liên quan nhằm phục vụ nhu cầu tìm hiểu của khách hàng đều được ghi rõ nguồn cung cấp.</p>
      </div>

   </div>
      <div class="hnc-content-box-container">
      <h3 class="hnc-static-heading3 hnc-content-box-ribbon">3. LIÊN KẾT ĐẾN WEBSITE KHÁC</h3>
      <div class="hnc-content-box">
         <p class="hnc-static-text">Website cung cấp một số liên kết tới trang Web hoặc nguồn dữ liệu khác. Quý khách tự chịu trách nhiệm khi sử dụng các liên kết này. ECCO không tiến hành thẩm định hay xác thực nội dung, tính chính xác, quan điểm thể hiện tại các trang Web và nguồn dữ liệu liên kết này.</p>
         <p class="hnc-static-text">ECCO từ chối bất cứ trách nhiệm pháp lý nào liên quan tới tính chính xác, nội dung thể hiện, mức độ an toàn và việc cho hiển thị hay che đi các thông tin trên các trang Web và nguồn dữ liệu nói trên.</p>
      </div>

   </div>
      <div class="hnc-content-box-container">
      <h3 class="hnc-static-heading3 hnc-content-box-ribbon">4. LIÊN KẾT TỪ WEBSITE KHÁC</h3>
      <div class="hnc-content-box">
         <p class="hnc-static-text">ECCO không cho phép bất kỳ nhà cung cấp dịch vụ internet nào được phép “đặt toàn bộ” hay “nhúng” bất kỳ thành tố nào của Website này sang một trang khác hoặc sử dụng các kỹ thuật làm thay đổi giao diện / hiển thị mặc định của Website mà chưa có sự đồng ý của AWEB.</p>
      </div>

   </div>
      <div class="hnc-content-box-container">
      <h3 class="hnc-static-heading3 hnc-content-box-ribbon">5. MIỄN TRỪ TRÁCH NHIỆM</h3>
      <div class="hnc-content-box">
         <p class="hnc-static-text">Khi truy cập vào website này, quý khách mặc nhiên đồng ý rằng ECCO, các nhà cung cấp khác cùng với đối tác liên kết, nhân viên của họ không chịu bất cứ trách nhiệm nào liên quan đến thương tật, mất mát, khiếu kiện, thiệt hại trực tiếp hoặc gián tiếp do không lường trước hoặc do hậu quả để lại dưới bất cứ hình thức nào phát sinh từ việc:</p>
         <p class="hnc-static-text">ECCO từ chối trách nhiệm hay đưa ra đảm bảo rằng website sẽ không có lỗi vận hành, an toàn, không bị gián đoạn hay tính chính xác, đầy đủ và đúng hạn của các thông tin hiển thị.</p>
         <p class="hnc-static-text">Thông tin hiển thị tại website này không đi kèm bất kỳ đảm bảo hay cam kết trách nhiệm từ phía AWEB về sự phù hợp của sản phẩm, dịch vụ mà người mua đã lựa chọn:</p>
         <p class="hnc-static-text">(1) Sử dụng các thông tin trên website này;</p>
         <p class="hnc-static-text">(2) các truy cập kết nối từ website này;</p>
         <p class="hnc-static-text">(3) Đăng ký thành viên, đăng ký nhận thư điện tử hay tham gia vào chương trình khách hàng thường xuyên của AWEB</p>
         <p class="hnc-static-text">Các điều kiện và hạn chế nêu trên chỉ có hiệu lực trong khuôn khổ pháp luật hiện hành.</p>
      </div>

   </div>
      <div class="hnc-content-box-container">
      <h3 class="hnc-static-heading3 hnc-content-box-ribbon">6. QUYỀN SỞ HỮU TRÍ TUỆ</h3>
      <div class="hnc-content-box">
         <p class="hnc-static-text">Website này và mọi nội dung xếp đặt, hiển thị đều thuộc sở hữu và là tài sản độc quyền khai thác củaECCO và các nhà cung cấp có liên quan khác.</p>
         <p class="hnc-static-text">Mọi sử dụng, trích dẫn phải không gây thiệt hại cho ECCO và đều phải tuân thủ các điều kiện sau:</p>
         <p class="hnc-static-text">(1) Chỉ sử dụng cho mục đích cá nhân, phi thương mại.</p>
         <p class="hnc-static-text">(2) các sao chép hoặc trích dẫn đều phải giữ nguyên dấu hiệu bản quyền hoặc các yết thị về quyền sở hữu trí tuệ như đã thể hiện trong phiên bản gốc.</p>
         <p class="hnc-static-text">Tất cả các nội dung được cung cấp tại Website này không được phép nhân bản, hiển thị, công bố, phổ biến, đưa tin tức hay lưu hành cho bất cứ ai, dưới bất kỳ hình thức nào, kể cả trên các Website độc lập khác mà không được sự chấp thuận của ECCO.</p>
      </div>

   </div>
      <div class="hnc-content-box-container">
      <h3 class="hnc-static-heading3 hnc-content-box-ribbon">7. ĐIỀU CHỈNH VÀ SỬA ĐỔI</h3>
      <div class="hnc-content-box">
         <p class="hnc-static-text">ECCO bảo lưu quyền thay đổi, chỉnh sửa hoặc chấm dứt hoạt động của Website này vào bất cứ thời điểm nào.</p>
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
                            <h2>AWEB COMPUTER TECHNOLOGY</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>12 Chùa Bộc, Đống Đa, HN</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
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
