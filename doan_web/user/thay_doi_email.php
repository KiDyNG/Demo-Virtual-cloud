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
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Thay đổi email</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css2/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo-title.jpg">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
        // 1. Kết nối đến máy chủ dữ liệu và đến csdl mà bạn muốn lấy, thêm mới, sửa, xóa dữ liệu
        include('../config.php');

        // 2. Lấy được ra các dữ liệu từ trang dang_ky.php chuyển sang
        $id=$_SESSION['login'];
        $pass = $_POST['txtMatkhau'];
        $emailmoi = $_POST['txtEmailmoi'];
        $sql = "
                SELECT *  
                FROM thanhvien 
                WHERE mathanhvien = '".$id."' AND matkhau = '".$pass."'
                ";
        // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
        $xac_nhan_thanh_vien = mysqli_query($ket_noi, $sql);
        // 4. Xử lý dũ liệu mà các bạn thu được
        $so_luong_thanh_vien = mysqli_num_rows($xac_nhan_thanh_vien);
        # Check mail
        $sqlmail = "
                    SELECT * 
                    FROM thanhvien 
                    WHERE email = '".$emailmoi."'  
                    "; 

        //Thực thi câu lẹnh truy vấn ( mục đích trả về dữ liệu bạn cần)
        $kiem_tra_email = mysqli_query($ket_noi, $sqlmail);

        //4. Hiển thị ra số lượng email vừa mới lấy đc
        $so_luong_email = mysqli_num_rows( $kiem_tra_email);
        if ($so_luong_thanh_vien == 0) 
        {
            echo "
             <script type='text/javascript'>
                  alert('Bạn đã nhập sai mật khẩu. Vui lòng nhập lại!');
             </script>";

            echo "
             <script type='text/javascript'>
                  window.location.href='email.php';
             </script>";
        }
        else if($so_luong_email != 0)
        {
            echo "
             <script type='text/javascript'>
                  alert('Email bạn nhập đã được sử dụng. Vui lòng nhập lại!');
             </script>";

            echo "
             <script type='text/javascript'>
                  window.location.href='email.php';
             </script>";
        }
        else
        {
            // 3. Viết câu lệnh sql để cập nhật dữ liệu vào trong bảng thanhvien ở trong CSDL
               $sql = "
                     UPDATE `thanhvien` SET `email` = '".$emailmoi."' WHERE `thanhvien`.`mathanhvien` = ".$id.";
                    ";

            // 4. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
               $cap_nhat_mat_khau = mysqli_query($ket_noi, $sql);

            // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang trang_chu.php

               echo "
                  <script type='text/javascript'>
                       alert('Bạn đã cập nhật email thành công!');
                  </script>";

               echo "
                  <script type='text/javascript'>
                       window.location.href='profile.php';
                  </script>";
        }
        ;?> 
    </body>
</html>
