<?php
   // Kiểm tra xem bạn có quyền truy cập trang web này thông qua biến $_session['da_dang_nhap']
   session_start();
   if (!isset($_SESSION['da_dang_nhap']))
   {
        echo "
             <script type='text/javascript'>
                  alert('Bạn không có quyền đăng nhập, yêu cầu nhập email và mật khẩu');
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
        <title>Sửa sản phẩm</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="shortcut icon" type="image/x-icon" href="../img/ecco1.png">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js'
             referrerpolicy="origin"></script>
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
                                </a><a class="nav-link" href="quan_tri_thanh_vien.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị thành viên
                            </a><a class="nav-link" href="quan_tri_san_pham.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị sản phẩm
                            </a><a class="nav-link" href="quan_tri_don_hang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị đơn hàng
                            </a><a class="nav-link" href="quan_tri_cua_hang.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị cửa hàng    
                            </a><a class="nav-link" href="quan_tri_phan_hoi_kh.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị phản hồi của khách hàng
                            </a>
                            </a><a class="nav-link" href="quan_tri_hinh_thuc_thanh_toan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị hình thức thanh toán
                            </a>
                            </a><a class="nav-link" href="quan_tri_hinh_thuc_van_chuyen.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Quản trị hình thứ vận chuyển
                            </a>

                        </div>
                    </div>    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Quản trị sản phẩm</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="quan_tri_he_thong.php">Quản trị hệ thống</a></li>
                            <li class="breadcrumb-item"><a href="quan_tri_san_pham.php">Quản trị sản phẩm</a></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Sửa sản phẩm
                            </div>
                            <div class="card-body">
                              
                              <?php

                                // Viết các câu lệnh để load dữ liệu và hiển thị trên Webpage; giúp cho người quản trị chỉ cần thay đổi nội dung mà mình mong muốn  
                            
                                include('../config.php');

                                // 2. Viết câu lệnh truy vấn để lấy ra dữ liệu mong muốn
                                $sp_id = $_GET['id'];
                                $sql = "
                                        SELECT a.sp_id,a.tensanpham,a.cauhinh,a.gia,a.khuyenmai,a.gia_sau_giam,a.soluong,a.motasp,b.maloai,b.tenloai,c.manhom,c.tennhom FROM sanpham a JOIN loaisp b ON a.maloaisp=b.maloai JOIN nhomsp c ON a.manhomsp=c.manhom WHERE sp_id = ".$sp_id.";
                                        ";

                                $sql1 = "SELECT * FROM loaisp";
                                $noi_dung_loai_sp = mysqli_query($ket_noi, $sql1);
                                $row1 = mysqli_fetch_array($noi_dung_loai_sp);

                                $sql2 = "SELECT * FROM nhomsp";
                                $noi_dung_nhom_sp = mysqli_query($ket_noi, $sql2);
                                $row2 = mysqli_fetch_array($noi_dung_nhom_sp);

                                // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                                $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

                                // 4. Hiển thị ra dữ liệu bạn vừa lấy được
                                $row = mysqli_fetch_array($noi_dung_nhom_sp);
                    
                              ;?> 
                                <form method="POST" action="san_pham_them_moi_thuc_hien.php" enctype="multipart/form-data">
                                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtTenSanPham" name="txtTenSanPham" placeholder="Tên sản phẩm" />
                                        <label for="txtTenSanPham">Tên sản phẩm</label>
                                     </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="txtMaNhomSanPham" name="txtMaNhomSanPham" placeholder="Mã nhóm sản phẩm" required="required">
                                            <option><?php echo $row2['manhom']; echo" - "; echo $row2['tennhom'] ;?></option>
                                            <?php foreach($noi_dung_nhom_sp as $key => $value) { ;?>
                                            <option value="<?php echo $value['manhom'] ;?>"><?php echo $value['manhom']; echo" - "; echo $value['tennhom'] ;?></option>
                                            <?php };?>
                                        </select>
                                        <label for="txtMaNhomSanPham">Mã nhóm sản phẩm</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="txtMaLoaiSanPham" name="txtMaLoaiSanPham" placeholder="Mã nhóm sản phẩm" required="required">
                                            <option><?php echo $row1['maloai']; echo" - "; echo $row1['tenloai'] ;?></option>
                                            <option><?php echo $row1['maloai']; echo" - "; echo $row1['tenloai'] ;?></option>
                                            <?php foreach($noi_dung_loai_sp as $key => $value) { ;?>
                                            <option value="<?php echo $value['maloai'] ;?>"><?php echo $value['maloai']; echo" - "; echo $value['tenloai'] ;?></option>
                                            <?php };?>
                                        </select>
                                        <label for="txtMaLoaiSanPham">Mã loại sản phẩm</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtAnhSanPham" name="txtAnhSanPham" placeholder="Ảnh sản phẩm" type="file" />
                                        <label for="txtAnhSanPham">Ảnh sản phẩm</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtCauHinh" name="txtCauHinh" placeholder="Cấu hình" />
                                        <label for="txtCauHinh">Nội dung</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="number" id="txtGia" name="txtGia" placeholder="Giá" />
                                        <label for="txtGia">Giá</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="number" id="txtKhuyenMai" name="txtKhuyenMai" placeholder="Khuyến mại" />
                                        <label for="txtKhuyenMai">Khuyến mại</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="number" id="txtGiaSauGiam" name="txtGiaSauGiam" placeholder="Giá sau giảm" />
                                        <label for="txtGiaSauGiam">Giá sau giảm</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="txtsize" name="txtsize" placeholder="Size" />
                                        <label for="txtsize">size</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="number" id="txtSoLuong" name="txtSoLuong" placeholder="Số lượng sản phẩm" />
                                        <label for="txtSoLuong">Số lượng sản phẩm</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                       <textarea class="form-control" id="txtMotaSp" name="txtMotaSp" placeholder="Mô tả sản phẩm"></textarea>
                                       <label for="txtMotaSp">Mô tả sản phẩm</label>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">SỬA SẢN PHẨM</button></div>
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
