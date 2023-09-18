<?php
   // Kiểm tra xem bạn có quyền truy cập trang web này thông qua biến $_session['da_dang_nhap']
   session_start();
   if (!isset($_SESSION['da_dang_nhap']))
   {
        echo "
             <script type='text/javascript'>
                  alert('Bạn không có quyền đăng nhập, yêu cầy nhập email và mật khẩu');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='dang_nhap_quan_tri.php';
             </script>";
        exit();
   }
   include('../config.php');
        $id= $_SESSION['da_dang_nhap'];
        $sql = "
            SELECT *  
            FROM admin 
            WHERE IDadmin ='".$id."'
            ";
        $xac_nhan_thanh_vien = mysqli_query($ket_noi, $sql);
        $row = mysqli_fetch_array($xac_nhan_thanh_vien);
 ;?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thêm mới cửa hàng</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" type="image/x-icon" href="../img/logo-title.jpg">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
             referrerpolicy="origin"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="quan_tri_he_thong.php">AWEB Computer Technology</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Nhập từ khóa" aria-label="Nhập từ khóa" aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" ><?php echo $row['hoten'] ;?></a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="dang_xuat.php">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Danh mục</div>
                            <a class="nav-link" href="quan_tri_he_thong.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị hệ thống
                            </a>
                            <a class="nav-link" href="quan_tri_thanh_vien.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị thành viên
                            </a>
                            <a class="nav-link" href="quan_tri_san_pham.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị sản phẩm
                            </a>
                            <a class="nav-link" href="quan_tri_don_hang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị đơn hàng
                            </a>
                            <a class="nav-link" href="quan_tri_cua_hang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị cửa hàng
                            </a>
                            <a class="nav-link" href="quan_tri_phan_hoi_kh.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị phản hồi của khách hàng
                            </a>
                            <a class="nav-link" href="quan_tri_hinh_thuc_thanh_toan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị hình thức thanh toán
                            </a>
                            <a class="nav-link" href="quan_tri_hinh_thuc_van_chuyen.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị hình thức vận chuyển
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start AWeb Computer Technology
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị cửa hàng</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="quan_tri_he_thong.php">Quản trị hệ thống</a></li>
                            <li class="breadcrumb-item"><a href="quan_tri_cua_hang.php">Quản trị cửa hàng</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Thêm mới cửa hàng
                            </div>
                            <div class="card-body">
                                <form method="POST" action="cua_hang_them_moi_thuc_hien.php" enctype="multipart/form-data">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtTenCuaHang" name="txtTenCuaHang" placeholder="Tên của hàng" />
                                        <label for="txtTenCuaHang">Tên cửa hàng</label>
                                     </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtDiaChiCuaHang" name="txtDiaChiCuaHang" placeholder="Địa chỉ cửa hàng" />
                                        <label for="txtDiaChiCuaHang">Địa chỉ cửa hàng</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtEmailCuaHang" name="txtEmailCuaHang" placeholder="Email cửa hàng" />
                                        <label for="txtEmailCuaHang">Email cửa hàng</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="txtLinkBanDo" name="txtLinkBanDo" placeholder="Link bản đổ"></textarea>
                                        <label for="txtLinkBanDo">Link bản đồ</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtLinkFacebook" name="txtLinkFacebook" placeholder="Link facebook" />
                                        <label for="txtLinkFacebook">Link facebook</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtLinkInternet" name="txtLinkInternet" placeholder="Link internet" />
                                        <label for="txtLinkInternet">Link internet</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtLinkYoutube" name="txtLinkYoutube" placeholder="Link youtube" />
                                        <label for="txtLinkYoutube">Link youtube</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtHotlineCuaHang" name="txtHotlineCuaHang" placeholder="Hotline cửa hàng" />
                                        <label for="txtHotlineCuaHang">Hotline cửa hàng</label>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Thêm cửa hàng</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; AWEB Computer Technology</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
