<?php
        session_start();
;?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ECCO</title>
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
        <link rel="stylesheet" type="text/css" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" type="image/x-icon" href="../img/ecco1.png">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/dang_nhap.css">
    </head>

    <body>    
        <?php 
   // 1. Kết nối đến MÁY CHỦ DỮ LIỆU VÀ CSDL mà các bạn muốn lấy, thêm mới, muốn sửa, xóa dữ liệu
       include('../config.php');

    // 2. Viết câu lệnh truy vấn để kiểm tra xem người quản trị có tồn tại trong bảng admin hay không?
        $email = $_POST['txtEmail'];
        $matkhau = $_POST['txtMatKhau'];
        $sql = "
                SELECT *  
                FROM admin 
                WHERE emaildangnhap = '".$email."' AND matkhau = '".$matkhau."'
                ";

    // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
        $xac_nhan_admin = mysqli_query($ket_noi, $sql);

    // 4. Xử lý dũ liệu mà các bạn thu được
        $so_luong_admin = mysqli_num_rows($xac_nhan_admin);

        # Nếu số lượng bản ghi = 0 => email và password không chính xác => đẩy người dùng về trang đăng nhập

        # Nếu số lượng bản ghi = 1 => email và password chính xác => đẩy người dùng về trang quản trị hệ thống

        $row = mysqli_fetch_array($xac_nhan_admin);
        if ($so_luong_admin==0) 
        {
            echo "
             <script type='text/javascript'>
                  alert('Sai email or mật khẩu. Vui lòng nhập lại!');
             </script>";

            echo "
             <script type='text/javascript'>
                  window.location.href='dang_nhap_quan_tri.php';
             </script>";
        }
        else
        // Khởi tạo phiên làm việc cho người đăng nhập thành công

        $_SESSION['da_dang_nhap'] = $row['IDadmin'];
        {
            echo "
             <script type='text/javascript'>
                  alert('Bạn đã đăng nhập thành công');
             </script>";

            echo "
             <script type='text/javascript'>
                  window.location.href='quan_tri_he_thong.php';
             </script>";
        }
        ;?>
    </body>
</html>

