<?php
   // Kiểm tra xem bạn có quyền truy cập trang web này thông qua biến $_session['da_dang_nhap']
   session_start();
   if (!isset($_SESSION['da_dang_nhap']))
   {
        echo "
             <script type='text/javascript'>
                  alert('Bạn không có quyền đăng nhập, vui vòng lòng nhập email và mật khẩu');
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
        <title>Quản trị - ECCO</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" type="image/x-icon" href="../img/ecco1.png">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="quan_tri_he_thong.php">ECCO</a>
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
                        Start ECCO
                    </div>
                </nav>
            </div>

            <?php 
                // 1. Kết nối đến máy chủ dữ liệu và đến csdl mà bạn muốn lấy, thêm mới, sửa, xóa dữ liệu
                include('../config.php');

                // 2. Viết câu lệnh truy vấn để lấy ra được dữ liệu mong muốn (người dùng đã lưu trong CSDL)
                $sql1 = "
                         SELECT * 
                         FROM thanhvien";

                $sql2 = "
                         SELECT * 
                         FROM sanpham";

                $sql3 = "
                         SELECT * 
                         FROM hoadon";

                $sql4 = "
                         SELECT * 
                         FROM phan_hoi_kh";

                $sql5 ="
                         SELECT * 
                         FROM cua_hang";

                $sql6 = "
                         SELECT * 
                         FROM thanhtoan";

                $sql7 = "
                         SELECT * 
                         FROM vanchuyen";         


                // 3. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
                $noi_dung_thanh_vien = mysqli_query($ket_noi, $sql1);
                $noi_dung_san_pham = mysqli_query($ket_noi, $sql2);
                $noi_dung_don_hang = mysqli_query($ket_noi, $sql3);
                $noi_dung_phan_hoi_kh = mysqli_query($ket_noi, $sql4);
                $noi_dung_cua_hang = mysqli_query($ket_noi, $sql5);
                $noi_dung_thanh_toan = mysqli_query($ket_noi, $sql6);
                $noi_dung_van_chuyen = mysqli_query($ket_noi, $sql7);

                // 4. Đếm số bản ghi cần thống kê bằng cách dùng hàm MYQLI_NUM_ROWS
                $so_luong_thanh_vien = mysqli_num_rows($noi_dung_thanh_vien);
                $so_luong_san_pham = mysqli_num_rows($noi_dung_san_pham);
                $so_luong_don_hang = mysqli_num_rows($noi_dung_don_hang);
                $so_luong_phan_hoi = mysqli_num_rows($noi_dung_phan_hoi_kh);
                $so_luong_cua_hang = mysqli_num_rows($noi_dung_cua_hang);
                $so_luong_hinh_thuc_thanh_toan = mysqli_num_rows($noi_dung_thanh_toan);
                $so_luong_hinh_thuc_van_chuyen = mysqli_num_rows($noi_dung_van_chuyen);
                ;?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị hệ thống</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Bảng điều khiển</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Quản trị thành viên (<?php echo $so_luong_thanh_vien ;?> thành viên)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="quan_tri_thanh_vien.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Quản trị sản phẩm (<?php echo $so_luong_san_pham ;?> sản phẩm)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="quan_tri_san_pham.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Quản trị đơn hàng (<?php echo $so_luong_don_hang ;?> đơn hàng)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="quan_tri_don_hang.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Quản trị cửa hàng (<?php echo $so_luong_cua_hang ;?> cửa hàng)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="quan_tri_cua_hang.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Quản trị phản hồi (<?php echo $so_luong_phan_hoi ;?> phản hồi)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="quan_tri_phan_hoi_kh.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Quản trị thanh toán (<?php echo $so_luong_hinh_thuc_thanh_toan ;?> hình thức)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="quan_tri_hinh_thuc_thanh_toan.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Quản trị vận chuyển (<?php echo $so_luong_hinh_thuc_van_chuyen ;?> hình thức)</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="quan_tri_hinh_thuc_van_chuyen.php">Chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; ECCO</div>
                            <div>
                                <a href="">Privacy Policy</a>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
