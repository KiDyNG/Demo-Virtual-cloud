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
        <title>Xóa cửa hàng</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="shortcut icon" type="image/x-icon" href="../img/logo-title.jpg">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
        // VIẾT CÁC CÂU LỆNH THỰC HIỆN THÊM MỚI TIN TỨC Ở ĐÂY 

        // 1. Kết nối đến máy chủ dữ liệu và đến csdl mà bạn muốn lấy, thêm mới, sửa, xóa dữ liệu
        include('../config.php');

        // 2. Lấy được ra các dữ liệu từ trang quan_tri_cua_hang.php chuyển sang
        $cua_hang_id = $_GET['id'];

        // 3. Viết câu lệnh sql để xóa dữ liệu vào trong bảng cua_hang ở trong CSDL
        $sql = "
               DELETE 
               FROM `cua_hang` 
               WHERE `cua_hang`.`ma_cua_hang` = '".$cua_hang_id."'
               ";

        // 3. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
        $xoa_cua_hang = mysqli_query($ket_noi, $sql);

        // 5. Hiển thị ra thông báo bạn đã xóa tin tức thành công và đẩy về trang quan_tri_cua_hang.php

        echo "
             <script type='text/javascript'>
                  alert('Bạn đã xóa cửa hàng thành công');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='quan_tri_cua_hang.php';
             </script>";    
       
        ;?> 
    </body>
</html>
