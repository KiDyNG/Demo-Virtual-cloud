<?php 
    session_start(); 
    if (!$_SESSION['login'])
       {
            echo "
                 <script type='text/javascript'>
                      alert('Bạn phải đăng nhập tài khoản để thanh toán !');
                 </script>";

            echo "
                 <script type='text/javascript'>
                      window.location.href='dang_nhap.php';
                 </script>";
            exit();  
       }
                if(!$_SESSION['cart']){
                      echo "
                 <script type='text/javascript'>
                      alert('Bạn chưa có sản phẩm nào trong giỏ hàng !');
                 </script>";
                    echo "   

                 <script type='text/javascript'>
                      window.location.href='index.php';
                 </script>";
                exit(); 
    }  
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Thanh toán | ECCO</title>
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
                                    <a href="dang_nhap.php" class="dropdown-item">Đăng nhập</a>
                                    <a href="dang_ky.php" class="dropdown-item">Đăng ký</a>
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
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">TRANG CHỦ</a></li>
                    <li class="breadcrumb-item"><a href="gio_hang.php">GIỎ HÀNG</a></li>
                    <li class="breadcrumb-item active">THANH TOÁN</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
        <form method="POST" action="thuc_hien_thanh_toan.php" enctype="multipart/form-data" onsubmit="return kiem_tra_nhap_tt();"> 
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">

                        <div class="checkout-inner">
                            <?php
                           // 1. Kết nối đến MÁY CHỦ DỮ LIỆU VÀ CSDL mà các bạn muốn lấy, thêm mới, muốn sửa, xóa dữ liệu
                           include('config.php');
                            $id=$_SESSION['login'];
                           // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn
                           $sql = "
                                    SELECT *  
                                    FROM thanhvien 
                                    WHERE mathanhvien ='".$id."'
                                    ";

                            // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                            $noi_dung_thanh_vien = mysqli_query($ket_noi, $sql);
                            $row = mysqli_fetch_array($noi_dung_thanh_vien)
                            ;?>
                            <div class="billing-address">
                                <h2>Thông tin người đặt</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Họ tên người đặt</label>
                                        <input class="form-control" type="text" value="<?php echo $row['hoten'];?>" readonly="true">
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail người đặt</label>
                                        <input class="form-control" type="text" value="<?php echo $row['email'];?>" readonly="true">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Điện thoại người đặt</label>
                                        <input class="form-control" type="text" value="<?php echo $row['dienthoai'];?>" readonly="true">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Địa chỉ người đặt</label>
                                        <input class="form-control" type="text" value="<?php echo $row['diachi'];?>" readonly="true">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Thông tin người nhận</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Họ tên người nhận</label>
                                        <input class="form-control" type="text" id="txtHovaten" name="txtHovaten" placeholder="Họ và tên">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Điện thoại người nhận</label>
                                        <input class="form-control" type="text" id="txtSodienthoai" name="txtSodienthoai" placeholder="Số điện thoại">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Địa chỉ người nhận</label>
                                        <input class="form-control" type="text" id="txtDiachi" name="txtDiachi" placeholder="Số nhà - Phường/Xã - Quận/Huyện - Tỉnh/Thành phố">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Email người nhận</label>
                                        <input class="form-control" type="text" id="txtEmail" name="txtEmail" placeholder="Email người nhận">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Ghi chú</label>
                                        <textarea class="form-control" type="text" id="txtGhichu" name="txtGhichu" placeholder="Mời nhập ghi chú nếu cần"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-payment">
                                 
                                <div class="payment-methods">
                                    <h1>Phương thức thanh toán</h1>
 
                                    <?php 
                                        include('config.php');
 
                                        # Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn
                                        $sql = "
                                                SELECT * 
                                                FROM thanhtoan 
                                                ORDER BY mathanhtoan ASC";

                                        # Thực thi câu lệnh truy vấn
                                        $thanh_toan = mysqli_query($ket_noi, $sql);
                                        $i = 0 ;

                                        # Hiển thị ra CSDL mà bạn vừa lấy được
                                        while ($row = mysqli_fetch_array($thanh_toan))
                                        {
                                            $i++;
                                    ;?>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio ">
                                            <input type="radio" class="custom-control-input" id="<?php echo "payment-".$i ;?>" name="payment" value="<?php echo $i ;?>" checked ="checked">
                                            <label class="custom-control-label" for="<?php echo "payment-".$i ;?>"><?php echo $row['hinhthuctt'] ;?></label>
                                        </div>
                                        <div class="payment-content" id="<?php echo "payment-".$i."-show";?>">
                                            <p><?php echo $row['ghichutt'] ;?></p>
                                        </div>
                                    </div>
                                    <?php 
                                         }
                                         # Đóng kết nối với CSDL
                                         mysqli_close($ket_noi);
                                    ;?>
                                </div> 

                                <div class="payment-methods">
                                    <h1>Phương thức vận chuyển</h1>

                                    <?php 
                                        include('config.php');
 
                                        # Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn
                                        $sql = "
                                                SELECT * 
                                                FROM vanchuyen 
                                                ORDER BY mavanchuyen ASC";

                                        # Thực thi câu lệnh truy vấn
                                        $van_chuyen = mysqli_query($ket_noi, $sql);

                                        $y = 0 ;
                                        # Hiển thị ra CSDL mà bạn vừa lấy được
                                        while ($row = mysqli_fetch_array($van_chuyen))
                                        {
                                            $y++;
                                    ;?>
                                    <div class="ship-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="<?php echo "ship-".$y ;?>" name="ship" value="<?php echo $y ;?>" checked ="checked">
                                            <label class="custom-control-label" for="<?php echo "ship-".$y ;?>"><?php echo $row['hinhthucvc'] ;?></label>
                                        </div>
                                        <div class="ship-content" id="<?php echo "ship-".$y."-show";?>">
                                            <p>Giá cước: <?php echo $row['giacuoc'] ;?> VNĐ</p>
                                        </div>
                                    </div>
                                    <?php 
                                         }
                                         # Đóng kết nối với CSDL
                                         mysqli_close($ket_noi);
                                    ;?>
                                </div>
                                <div class="checkout-btn">
                                    <button class="btn" type="submit">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <!-- Checkout End -->
        
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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payment-security">
                            <h2>Secured By:</h2>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                            <img src="img/logo-momo.png" alt="Payment Method" />
                            <img src="img/logo-vnpay.png" alt="Payment Method" />
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
        <script type="text/javascript">
        function kiem_tra_nhap_tt() {
            var hovaten = document.getElementById('txtHovaten').value;
            var sodienthoai = document.getElementById('txtSodienthoai').value;
            var diachi = document.getElementById('txtDiachi').value;
            var ghichu = document.getElementById('txtGhichu').value;
            var payment=document.getElementsByName('payment')

            // Kiểm tra nhập họ tên
            if (hovaten == '')
            {
                alert('Bạn chưa nhập họ tên người nhận');
                return false;
            }
            //Kiểm tra nhập sđt
            if (sodienthoai == '')
            {
                alert('Bạn chưa nhập số điện thoại người nhận');
                return false;
            }
            //Kiểm tra nhập địa chỉ
            if (diachi == '')
            {
                alert('Bạn chưa nhập địa chỉ người nhận');
                return false;
            }

            //Khi nhập đủ thông tin thì người dùng sẽ được chuyển đến trang thuc_hien_thanh_toan.php
            return true;
        }
        </script>
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
