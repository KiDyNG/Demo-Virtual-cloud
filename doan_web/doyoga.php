<?php 
    session_start();  
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ĐỒ YOGA | ECCO</title>
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
                            <a href="doyoga.php" class="nav-item nav-link active">ĐỒ YOGA</a>
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
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">TRANG CHỦ</a></li>
                    <li class="breadcrumb-item active">ĐỒ YOGA</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">

                            <?php 
                                include('config.php');

                                $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] :6;
                                $current_page = !empty($_GET['page']) ? $_GET['page'] :1;
                                $offset = ($current_page - 1) * $item_per_page;

                                # Thực hiện câu lệnh truy vấn để lấy ra dữ liệu bạn muốn
                                $sql = "
                                        SELECT * 
                                        FROM sanpham 
                                        WHERE `sanpham`.`manhomsp` = 4 
                                        ORDER BY sp_id DESC 
                                        LIMIT ".$item_per_page." 
                                        OFFSET ".$offset." 
                                       ";

                                $sql2 = "
                                         SELECT * 
                                         FROM sanpham 
                                         WHERE `sanpham`.`manhomsp` = 4
                                         ";

                                $san_pham = mysqli_query($ket_noi, $sql2);
                                $tong_so_san_pham = mysqli_num_rows($san_pham);
                                $tong_so_trang = ceil($tong_so_san_pham / $item_per_page);

                                # Thực thi câu lệnh truy vấn
                                $linh_kien_laptop = mysqli_query($ket_noi, $sql);

                                # Hiển thị ra CSDL mà bạn vừa mới lấy được
                                while ($row = mysqli_fetch_array($linh_kien_laptop))
                                {
                            ;?>
                            
                            <div class="col-md-4">
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
                                        <img src="<?php echo $row['anhdaidien'] ? 'img_sp/'.$row['anhdaidien'] : 'img_sp/UH36-Dual_500k.jpg' ;?>" alt="Ảnh sản phẩm">
                                    </div>
                                    <div class="product-price">
                                        <h3><span><?php echo number_format( $row['gia'] ) ;?> VNĐ</span></h3>
                                        <a class="btn" href="san_pham_chi_tiet.php?id=<?php echo $row['sp_id'] ;?>"><i class="fa fa-shopping-cart"></i>Chi tiết</a>
                                    </div>
                                </div>
                            </div>  
                            <?php          
                                }
                                mysqli_close($ket_noi);
                            ;?>
                        </div>
                        
                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">

                                    <?php
                                        if ($current_page > 1)
                                        {
                                            $prev_page = $current_page - 1;
                                    ;?>
                                    <li class="page-item">
                                        <a class="page-link" href="?per_page=<?php echo $item_per_page ;?>&page=<?php echo $prev_page ;?>" tabindex="-1">Prev</a>
                                    </li>
                                    <?php 
                                        }
                                    ;?>

                                    <?php for($num=1; $num <= $tong_so_trang; $num++) { ;?>
                                        <?php if ($num != $current_page) { ;?> 
                                            <?php if ($num > $current_page -5 && $num < $current_page +5) { ;?>
                                                <li class="page-item"><a class="page-link" href="?per_page=<?php echo $item_per_page ;?>&page=<?php echo $num ;?>"><?php echo $num ;?></a></li>
                                             <?php } ;?>
                                        <?php } else { ;?>
                                            <li class="page-item active"><a class="page-link" href="?per_page=<?php echo $item_per_page ;?>&page=<?php echo $num ;?>"><?php echo $num ;?></a></li>
                                        <?php } ;?>   
                                    <?php } ;?>

                                    <?php 
                                        if ($current_page < $tong_so_trang)
                                        {
                                            $next_page = $current_page + 1;
                                    ;?>
                                    <li class="page-item">
                                        <a class="page-link" href="?per_page=<?php echo $item_per_page ;?>&page=<?php echo $next_page ;?>" tabindex="+1">Next</a>
                                    </li>
                                    <?php 
                                        }
                                    ;?>
                                </ul>
                            </nav>
                        </div>
                    </div> 
                    <!-- Pagination Start -->          
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">   
                    <div class="sidebar-widget brands">
                            <h2 class="title">Thương hiệu của chúng tôi</h2>

                            <?php 
                                 include('config.php');
 
                                 # Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn
                                 $sql_nike = "
                                              SELECT * 
                                              FROM sanpham 
                                              WHERE `sanpham`.`maloaisp` = 1";
                                 $sql_adidas = "
                                              SELECT * 
                                              FROM sanpham 
                                              WHERE `sanpham`.`maloaisp` = 2";
                                 $sql_puma = "
                                              SELECT * 
                                              FROM sanpham 
                                              WHERE `sanpham`.`maloaisp` =3";
                                 $sql_converse = "
                                                SELECT * 
                                                FROM sanpham 
                                                 WHERE `sanpham`.`maloaisp` = 4";
                                 $sql_fila = "
                                                   SELECT * 
                                                   FROM sanpham 
                                                   WHERE `sanpham`.`maloaisp` = 5";
                                 $sql_ecco = "
                                              SELECT * 
                                              FROM sanpham 
                                              WHERE `sanpham`.`maloaisp` = 6";
                                 $sql_thenortface = "
                                                 SELECT * 
                                                 FROM sanpham 
                                                 WHERE `sanpham`.`maloaisp` = 7";
                                 $sql_reebok = "
                                            SELECT * 
                                            FROM sanpham 
                                            WHERE `sanpham`.`maloaisp` = 8";
                                 $sql_newbalance = "
                                              SELECT * 
                                              FROM sanpham 
                                              WHERE `sanpham`.`maloaisp` = 9";
                                 $sql_vans = "
                                              SELECT * 
                                              FROM sanpham 
                                              WHERE `sanpham`.`maloaisp` = 10";
                                 $sql_balenciaga = "
                                              SELECT * 
                                              FROM sanpham 
                                              WHERE `sanpham`.`maloaisp` =11";
                                 $sql_jordan = "
                                                SELECT * 
                                                FROM sanpham 
                                                 WHERE `sanpham`.`maloaisp` = 12";
                                 

                                 # Thực thi câu lệnh truy vấn để chả về dữ liệu mà bạn muốn lấy
                                 $noi_dung_nike = mysqli_query($ket_noi, $sql_nike);
                                 $noi_dung_adidas = mysqli_query($ket_noi, $sql_adidas);
                                 $noi_dung_puma = mysqli_query($ket_noi, $sql_puma);
                                 $noi_dung_converse = mysqli_query($ket_noi, $sql_converse);
                                 $noi_dung_fila = mysqli_query($ket_noi, $sql_fila);
                                 $noi_dung_ecco = mysqli_query($ket_noi, $sql_ecco);
                                 $noi_dung_thenortface = mysqli_query($ket_noi, $sql_thenortface);
                                 $noi_dung_reebok = mysqli_query($ket_noi, $sql_reebok);
                                 $noi_dung_newbalance = mysqli_query($ket_noi, $sql_newbalance);
                                 $noi_dung_vans = mysqli_query($ket_noi, $sql_vans);
                                 $noi_dung_balenciaga = mysqli_query($ket_noi, $sql_balenciaga);
                                 $noi_dung_jordan = mysqli_query($ket_noi, $sql_jordan);
                                 

                                 # Đếm số sản phẩm của từng thương hiệu
                                 $so_nike = mysqli_num_rows($noi_dung_nike);
                                 $so_adidas = mysqli_num_rows($noi_dung_adidas);
                                 $so_puma = mysqli_num_rows($noi_dung_puma);
                                 $so_converse = mysqli_num_rows($noi_dung_converse);
                                 $so_fila = mysqli_num_rows($noi_dung_fila);
                                 $so_ecco = mysqli_num_rows($noi_dung_ecco);
                                 $so_thenortface = mysqli_num_rows($noi_dung_thenortface);
                                 $so_reebok = mysqli_num_rows($noi_dung_reebok);
                                 $so_newbalance = mysqli_num_rows($noi_dung_newbalance);
                                 $so_vans = mysqli_num_rows($noi_dung_vans);
                                 $so_balenciaga = mysqli_num_rows($noi_dung_balenciaga);
                                 $so_jordan = mysqli_num_rows($noi_dung_jordan);
                                
                            ;?>
                            <ul>
                                <li><a href="find.php?q=NIKE&submit=">NIKE</a><span>(<?php echo $so_nike ;?>)</span></li>
                                <li><a href="find.php?q=ADIDAS&submit=">ADIDAS</a><span>(<?php echo $so_adidas ;?>)</span></li>
                                <li><a href="find.php?q=PUMA&submit=">PUMA</a><span>(<?php echo $so_puma ;?>)</span></li>
                                <li><a href="find.php?q=CONVERSE&submit=">CONVERSE</a><span>(<?php echo $so_converse ;?>)</span></li>
                                <li><a href="find.php?q=FILA&submit=">FILA</a><span>(<?php echo $so_fila ;?>)</span></li>
                                <li><a href="find.php?q=ECCO&submit=">ECCO</a><span>(<?php echo $so_ecco ;?>)</span></li>
                                <li><a href="find.php?q=THENORTFACE&submit=">THE NORT FACE</a><span>(<?php echo $so_thenortface ;?>)</span></li>
                                <li><a href="find.php?q=REEBOK&submit=">REEBOK</a><span>(<?php echo $so_reebok ;?>)</span></li>
                                <li><a href="find.php?q=NEWBALANCE&submit=">NEW BALANCE</a><span>(<?php echo $so_newbalance ;?>)</span></li>
                                <li><a href="find.php?q=VANS&submit=">VANS</a><span>(<?php echo $so_vans ;?>)</span></li>
                                <li><a href="find.php?q=BALENCIAGA&submit=">BALENCIAGA</a><span>(<?php echo $so_balenciaga ;?>)</span></li>
                                <li><a href="find.php?q=JORDAN&submit=">JORDAN</a><span>(<?php echo $so_jordan ;?>)</span></li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                                <?php 
                                    include('config.php');
                                    $sql = "
                                            SELECT * 
                                            FROM sanpham 
                                            WHERE `sanpham`.`manhomsp` = 4 
                                            ORDER BY sp_id ASC 
                                            ";

                                    $list_linh_kien_laptop = mysqli_query($ket_noi, $sql);

                                    while ($row = mysqli_fetch_array($list_linh_kien_laptop))
                                    {
                                ;?>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="san_pham_chi_tiet.php"><?php echo $row['tensanpham'] ;?></a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <img src="<?php echo $row['anhdaidien'] ? 'img_sp/'.$row['anhdaidien'] : 'img_sp/Hp-gaming-15_20tr.jpg' ;?>" alt="Ảnh sản phẩm">
                                    </div>
                                    <div class="product-price">
                                        <h3><span><?php echo number_format( $row['gia'] ) ;?> VNĐ</span></h3>
                                        <a class="btn" href="san_pham_chi_tiet.php?id=<?php echo $row['sp_id'] ;?>"><i class="fa fa-shopping-cart"></i>Chi tiết</a>
                                    </div>
                                </div> 
                                <?php        
                                    }
                                    mysqli_close($ket_noi);
                                ;?>                     
                            </div>
                        </div>
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
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
