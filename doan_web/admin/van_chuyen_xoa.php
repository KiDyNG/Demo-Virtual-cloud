<?php
   // Kiểm tra xem bạn có quyền truy cập trang web này thông qua biến $_session['da_dang_nhap']
   session_start();
   if (!isset($_SESSION['da_dang_nhap']))
   {
        echo "
             <script type='text/javascript'>
                  alert('Bạn không có quyền đăng nhập, yêu cầu nhập email mà mật khẩu');
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
        <title>Xóa hình thức vận chuyển</title>
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

        // 2. Lấy được ra các dữ liệu từ trang quan_tri_hinh_thuc_van_chuyen.php chuyển sang
        $van_chuyen_id = $_GET['id'];

        // 3. Viết câu lệnh sql để xóa dữ liệu vào trong bảng vanchuyen ở trong CSDL
        $sql = "
               DELETE 
               FROM `vanchuyen` 
               WHERE `vanchuyen`.`mavanchuyen` = '".$van_chuyen_id."'
               ";

        // 3. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
        $xoa_hinh_thuc_vc = mysqli_query($ket_noi, $sql);

        // 5. Hiển thị ra thông báo bạn đã xóa tin tức thành công và đẩy về trang quan_tri_hinh_thuc_van_chuyen.php

        echo "
             <script type='text/javascript'>
                  alert('Bạn đã xóa hình thức vận chuyển thành công');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='quan_tri_hinh_thuc_van_chuyen.php';
             </script>";    
       
        ;?> 
    </body>
</html>
