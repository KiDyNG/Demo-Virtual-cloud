<?php 
    session_start(); 
    if (!$_SESSION['login'])
       {
            echo "
                 <script type='text/javascript'>
                      alert('Bạn không chưa đăng nhập !');
                 </script>";

            echo "
                 <script type='text/javascript'>
                      window.location.href='../dang_nhap.php';
                 </script>";
       }   
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AWEB Computer Technology</title>
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
        <link href="css2/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo-title.jpg">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        support@email.com
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
                            <a href="../index.php" class="nav-item nav-link ">TRANG CHỦ</a>
                            <a href="../laptop_moi.php" class="nav-item nav-link">LAPTOP MỚI</a>
                            <a href="../laptop_do_hoa_gaming.php" class="nav-item nav-link">LAPTOP ĐỒ HỌA - GAMING</a>
                            <a href="../laptop_van_phong.php" class="nav-item nav-link">LAPTOP MỎNG NHẸ CAO CẤP</a>
                            <a href="../linh_kien_laptop.php" class="nav-item nav-link">LINH KIỆN LAPTOP</a>
                            <a href="../he_thong_cua_hang.php" class="nav-item nav-link">HỆ THỐNG CỬA HÀNG</a>                               
                        </div>                   
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tài khoản</a>
                                <div class="dropdown-menu">
                                    <a href="../dang_nhap.php" class="dropdown-item" >Đăng nhập</a>
                                    <a href="../dang_ky.php" class="dropdown-item" >Đăng ký</a>
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
                            <a href="../index.php">
                                <img title="AWEB Computer Technology" src="img/logo-AWeb.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Nhập từ khóa">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="../phan_hoi.php" class="btn wishlist">
                                <i class="fas fa-comments"></i>
                            </a>
                            <a href="../gio_hang.php" class="btn cart">
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
        <!-- Bottom Bar End --> 
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active " id="lich_su_mua_hang" data-toggle="pill" href="#history-tab" role="tab" aria-selected="true"><i class="fa fa-shopping-bag"></i>Lịch sử mua hàng</a>
                            <a class="nav-link " id="profile" href="profile.php"><i class="fa fa-user"></i>Thông tin tài khoản</a>
                            <a class="nav-link " id="account-nav" href="password.php">Mật khẩu</a>
                            <a class="nav-link " id="email" href="email.php" >Email</a>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show " id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>LỊCH SỬ MUA HÀNG</h4>
                                <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>STT</th>
                                                <th>Ảnh sản phẩm</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Đơn giá (VNĐ)</th>
                                                <th>Số lượng</th>
                                                <th>Tổng tiền (VNĐ)</th>
                                                <th>Ngày mua</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        
                                            <?php
                                               // 1. Kết nối đến MÁY CHỦ DỮ LIỆU VÀ CSDL mà các bạn muốn lấy, thêm mới, muốn sửa, xóa dữ liệu
                                               include('../config.php');
                                               $id=$_SESSION['login'];

                                               // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn
                                               $sql = "
                                                      SELECT `a`.`sp_id`, `a`.`tensanpham`,`a`.`soluong`,`a`.`gia`,`c`.`anhdaidien`,`b`.`ngaytao`,`c`.`gia_sau_giam` FROM `chi_tiet_hoa_don` `a` JOIN `hoadon` `b` ON `a`.`mahoadon`=`b`.`mahoadon` JOIN `sanpham` `c` ON `a`.`sp_id`=`c`.`sp_id` WHERE `b`.`mathanhvien`=".$id.";
                                                       ";

                                                // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                                                $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

                                                // 4. Hiển thị ra dữ liệu bạn vừa lấy được
                                                $i = 0;
                                                while ($row = mysqli_fetch_array($noi_dung_san_pham)) 
                                                {
                                                    $i++
                                                ;?>
                                            </tbody class="align-middle">
                                                <tr>
                                                    <td style="text-align: center;"><?php echo $i ;?></td>
                                                    <td>
                                                        <div class="img">
                                                            <img src="img_sp/<?php echo $row['anhdaidien']?>" alt="Image">
                                                        </div>  
                                                    </td>
                                                    <td><?php echo $row['tensanpham']?></td>
                                                    <td><?php echo number_format($row['gia_sau_giam'])?></td>
                                                    <td><?php echo $row['soluong']?></td>
                                                    <td><?php echo number_format( $row['soluong']*$row['gia_sau_giam'])?></td>
                                                    <td><?php echo $row['ngaytao']?></td>
                                                    <td><a href="../san_pham_chi_tiet.php?id=<?php echo $row['sp_id'] ;?>"><button class="btn" >View</button></a></td>
                                                </tr>
                                                <?php
                                                }
                                                // 5. Đóng lại kết nối sau khi dử dụng xong
                                                mysqli_close($ket_noi);
                                            ;?>
                                        </tbody>
                                </table>                                    
                            </div>           
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <!-- My Account End -->

        
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
                                <li><a href="../chinh_sach_quy_dinh_chung.php">Chính sách, quy định chung</a></li>
                                <li><a href="../chinh_sach_bao_hanh.php">Chính sách bảo hành</a></li>
                                <li><a href="../chinh_sach_hang_chinh_hang.php">Chính sách hàng chính hãng</a></li>
                                <li><a href="../chinh_sach_van_chuyen.php">Chính sách vận chuyển</a></li>
                                <li><a href="../bao_mat_thong_tin_khach_hang.php">Bảo mật thông tin</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>HỖ TRỢ KHÁCH HÀNG</h2>
                            <ul>
                                <li><a href="../huong_dan_mua_hang_truc_tuyen.php">Hướng dẫn mua hàng trực tuyến</a></li>
                                <li><a href="../huong_dan_thanh_toan.php">Hướng dẫn thanh toán</a></li>
                                <li><a href="../phan_hoi.php">Góp ý, khiếu nại</a></li>
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
        <script type="text/javascript">
        function kiem_tra_thong_tin() {
            var ho_ten = document.getElementById('txtHoten').value;
            var so_dien_thoai = document.getElementById('txtSodienthoai').value;
            var dia_chi = document.getElementById('txtDiachi').value;

            // Kiểm tra xem ô họ tên đã nhập thông tin chưa
            if (ho_ten == '')
            {
                alert('Bạn chưa nhập họ tên');
                return false;
            }
            // Kiểm tra xem ô số điện thoại đã nhập thông tin hay chưa
            if (so_dien_thoai == '') 
            {
                alert('Bạn chưa nhập số diện thoại');
                return false;
            }

            // Kiểm tra xem ô địa chỉ đã nhập thông tin hay chưa
            if (dia_chi == '')
            {
                alert('Bạn chưa nhập địa chỉ cá nhân');
                return false;
            }

            //Khi nhập đủ thông tin thì người dùng sẽ được chuyển đến trang thuc_hien_dang_ky.php
            return true;
        }
        </script>
        <?php 
            if(!isset($_SESSION['login'])){
               exit();
            }
            else
            {
                include('../config.php');
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
                        tt.setAttribute(\"href\", \"profile.php\");
                        tt.setAttribute(\"class\", \"dropdown-item\");
                        tt.innerText = 'Tài Khoản';
                        var parent = document.getElementsByClassName('dropdown-menu')[0];
                        var child = document.getElementsByClassName('dropdown-item')[0];
                        parent.replaceChild(tt, child);

                        var dx = document.createElement('a');
                        dx.setAttribute(\"href\", \"../dang_xuat.php\");
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
