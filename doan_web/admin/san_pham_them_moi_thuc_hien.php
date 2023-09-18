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
 ;?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thêm mới sản phẩm | ECCO</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="shortcut icon" type="image/x-icon" href="../img/ecco1.png">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
        // VIẾT CÁC CÂU LỆNH THỰC HIỆN THÊM MỚI TIN TỨC Ở ĐÂY 

        // 1. Kết nối đến máy chủ dữ liệu và đến csdl mà bạn muốn lấy, thêm mới, sửa, xóa dữ liệu
        include('../config.php');

        // 2. Lấy được ra các dữ liệu từ trang san_pham_them_moi.php chuyển sang
        $tensanpham = $_POST['txtTenSanPham'];
        $manhomsp = $_POST['txtMaNhomSanPham'];
        $maloaisp = $_POST['txtMaLoaiSanPham'];
        $noidung = $_POST['txtNoidung'];
        $gia = $_POST['txtGia'];
        $khuyen_mai = $_POST['txtKhuyenMai'];
        $giasaugiam = $_POST['txtGiaSauGiam'];
        $size = $_POST['txtSize'];
        $soluong = $_POST['txtSoLuong'];
        $mota_sp = $_POST['txtMotaSp'];

        // Lấy ra được thông tin liên quan đến ảnh minh họa và nội dung của ảnh được đẩy vào 1 mục nào đó ở máy chủ
        $noi_dat_anh_minh_hoa = "../img_sp/".basename($_FILES['txtAnhSanPham']['name']);
        $file_anh = $_FILES['txtAnhSanPham']['tmp_name'];
        $ket_qua_up_anh = move_uploaded_file($file_anh, $noi_dat_anh_minh_hoa);
        if (!$ket_qua_up_anh) {
          $anh_minh_hoa = NULL;
        }
        else {
          $anh_minh_hoa = basename($_FILES['txtAnhSanPham']['name']);
        }
      

        // 3. Viết câu lệnh sql để thêm mới dữ liệu vào trong bảng sanpham ở trong CSDL
        $sql = "
                INSERT INTO `sanpham` (`sp_id`, `tensanpham`, `manhomsp`, `maloaisp`, `anhdaidien`, `soluong`, `gia`,`size`, `noidung`, `khuyenmai`, `gia_sau_giam`, `ngaynhap`, `motasp`, `trangthaisp`) 
                VALUES (NULL, '".$tensanpham."', '".$manhomsp."', '".$maloaisp."', '".$anh_minh_hoa."', '".$soluong."', '".$gia."', '".$size."','".$noidung."', '".$khuyen_mai."', '".$giasaugiam."', current_timestamp(), '".$mota_sp."', '1')
               ";

        // 4. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
        $them_san_pham = mysqli_query($ket_noi, $sql);
        
        // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang quan_tri_san_pham.php

        echo "
             <script type='text/javascript'>
                  alert('Bạn đã thêm mới sản phẩm thành công');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='quan_tri_san_pham.php';
             </script>";     
       
        ;?> 
    </body>
</html>
