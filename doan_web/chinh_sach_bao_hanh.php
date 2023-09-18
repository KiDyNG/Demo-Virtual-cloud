<?php 
    session_start();  
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Chính sách đổi trả | ECCO</title>
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
                            <a href="dodabong.php" class="nav-item nav-link ">ĐỒ ĐÁ BÓNG</a>
                            <a href="giaythethao.php" class="nav-item nav-link">GIÀY THỂ THAO</a>
                            <a href="dogym.php" class="nav-item nav-link ">ĐỒ GYM</a>
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
   <h1 class="hnc-static-heading1" style="text-transform:uppercase;">Chính sách đổi trả dành riêng cho khách hàng của ECCO</h1>
   <div class="hnc-static-image-container">
      <img src="img/bao_hanh.jpg" width="300" height="300" alt="bảo hành AWEB"> 
   </div>
   
   <div class="hnc-content-box-container">
      <h3 class="hnc-static-heading3 hnc-content-box-title" style="left: calc(50% - 135px);">CHÍNH SÁCH ĐỔI TRẢ</h3>
      <div class="hnc-content-box">
         <p class="hnc-static-text"><strong>Khách hàng được đổi sản phẩm</strong> sang model khác nếu sản phẩm chưa qua sử dụng và phải được kiểm tra và xác nhận bởi nhân viên bảo hành của NikeSport. </p>
         <p class="hnc-static-text"><strong>Sản phẩm mới </strong>phải có giá trị bằng hoặc cao hơn giá trị sản phẩm đổi. </p>
         <p class="hnc-static-text"><strong>Cộng thêm thời hạn bảo hành sản phẩm,</strong> ECCO cam kết cộng thêm thời hạn bảo hành số ngày tương ứng với số ngày Khách hàng gửi bảo hành sản phẩm, số ngày này được tính từ ngày Quý khách đi gửi bảo hành sản phẩm đến khi nhận được thông báo sản phẩm đã được bảo hành xong.</p>
         <p class="hnc-static-text"><strong>Thời gian áp dụng: </strong></p>
         <ul class="hnc-static-text">
            <li>Sản phẩm: Quần, áo, mũ, giày dép, phụ kiện…</li>
            <li>Thời gian:Kể từ thời điểm nhận hàng, đổi hàng trong vòng 1 ngày</li>
         </ul>
         
      </div>
   </div>

   <div class="hnc-content-box-container">
      <h3 class="hnc-static-heading3 hnc-content-box-title" style="left: calc(50% - 122px);">ĐIỀU KIỆN CHẤP NHÂN ĐỔI</h3>
      <div class="hnc-content-box">
         <p class="hnc-static-text">Khách hàng được đổi sản phẩm mới cùng loại khi sản phẩm gặp sự cố không thể khắc phục được (do lỗi kỹ thuật của nhà sản xuất). Sản phẩm lỗi chỉ được đổi sau khi đã có xác nhận của kỹ thuật và tuân thủ theo các điều kiện sau đây:</p>
         <p class="hnc-static-text">1. Hàng hóa được xác định nguồn gốc mua tại ECCO (căn cứ vào hóa đơn mua hàng và tem nhận diện dán trên sản phẩm).</p>
         <p class="hnc-static-text">2. Hàng hóa được xác nhận bị lổi kỹ thuật của Kỹ thuật viên của Trung Tâm Bảo Hành của ECCO.</p>
         <p class="hnc-static-text">3. Hàng hóa vẫn còn nguyên tem niêm phong (không bị rách vở hoặc dán lại) của nhà sản xuất hoặc tem của ECCO.</p>
         <p class="hnc-static-text">4. Hàng hóa nhận lại không bị lổi hình thức (trầy xước, móp méo, ố vàng, vỡ …).</p>
         <p class="hnc-static-text">5. Hàng hóa nhận lại phải còn đầy đủ linh phụ kiện, tặng phẩm kèm theo.</p>
         <p class="hnc-static-text">6. Hàng hóa nhận lại phải đảm bảo đầy đủ bao bì, xốp,.. ( ngoại trừ film dán, màng nhựa…).</p>
         <p class="hnc-static-text">7. Hàng hóa khi nhận lại phải có đầy đủ các chứng từ kèm theo ( hóa đơn VAT, Phiếu bảo hành, Sách hướng dẫn, Brochure/ Catalogue…).</p>
         <p class="hnc-static-text">ECCO sẽ thực hiện đổi hàng cho khách, nhưng không hoàn lại phí vận chuyển/ giao hàng (nếu có), trừ những trường hợp sau:</p>
         <ul class="hnc-static-text">
         <li>Không đúng chủng loại, mẫu mã như quý khách đã đặt hàng.</li>
         <li>Không đủ số lượng, không đủ bộ/ thông tin như trong đơn hàng ban đầu.</li>
         <li>Không đạt chất lượng như: quá hạn sử dụng, hết bảo hành, không vận hành được, hỏng hóc khách quan trong phạm vi bảo hành của nhà cung cấp, nhà sản xuất,...</li>
         </ul>
         
      </div>
   </div>
   <div class="hnc-content-box-container">
      <h3 class="hnc-static-heading3 hnc-content-box-title" style="left: calc(50% - 116px);">TRƯỜNG HỢP KHÔNG CHẤP NHẬN ĐỔI HÀNG:</h3>
      <div class="hnc-content-box">
       
         
         <p class="hnc-static-text">1. Quý khách muốn thay đổi chủng loại, mẫu mã nhưng không thông báo trước.</p>
         <p class="hnc-static-text">2. Quý khách vận hành không đúng chỉ dẫn, gây hỏng hóc sản phẩm, hàng hóa.</p>
         <p class="hnc-static-text">4. Quý khách không thực hiện các quy định theo yêu cầu để được hưởng chế độ bảo hành (ví dụ không gửi phiếu bảo hành về đúng nơi quy định trong thời gian quy định).</p>
         <p class="hnc-static-text">5. Quý khách tự làm ảnh hưởng tình trạng bên ngoài như rách bao bì, bong tróc, bể vỡ,…</p>
         <p class="hnc-static-text">6. Hàng hóa đã được ký xác nhận “Đạt tiêu chuẩn chất lượng” nhưng sau đó Quí khách yêu cầu đổi hàng hóa vì lý do sai phạm về hình thức (trầy xước, móp méo, ố vàng, bể vỡ,…).</p>
         
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
