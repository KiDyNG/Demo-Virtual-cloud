<?php
    session_start();
   // Kiểm tra xem bạn có quyền truy cập trang web này thông qua biến $_session['da_dang_nhap']
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
        <title>Thêm mới cửa hàng</title>
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

        // 2. Lấy được ra các dữ liệu từ trang cua_hang_them_moi.php chuyển sang
        $ten_cuahang = $_POST['txtTenCuaHang'];
        $diachi_cuahang = $_POST['txtDiaChiCuaHang'];
        $email_cuahang = $_POST['txtEmailCuaHang'];
        $ban_do = $_POST['txtLinkBanDo'];
        $link_fb = $_POST['txtLinkFacebook'];
        $link_internet = $_POST['txtLinkInternet'];
        $link_youtube = $_POST['txtLinkYoutube'];
        $hotline_cuahang = $_POST['txtHotlineCuaHang'];

        # Kiểm tra tên cửa hàng 
        $sql_ten_cua_hang = "
                            SELECT * 
                            FROM cua_hang 
                            WHERE ten_cua_hang = '".$ten_cuahang."'
                            ";

        // Thực thi câu lệnh truy vấn
        $ktra_ten_cua_hang = mysqli_query($ket_noi, $sql_ten_cua_hang);
        // Hiển thị ra dữ liệu mà bạn vừa mới lấy đc
        $so_luong_ten_cua_hang = mysqli_num_rows($ktra_ten_cua_hang);

        # Kiểm tra địa chỉ cửa hàng 
        $sql_diachi_cua_hang = "
                            SELECT * 
                            FROM cua_hang 
                            WHERE dia_chi_cua_hang = '".$diachi_cuahang."'
                            ";

        // Thực thi câu lệnh truy vấn
        $ktra_diachi_cua_hang = mysqli_query($ket_noi, $sql_diachi_cua_hang);
        // Hiển thị ra dữ liệu mà bạn vừa mới lấy đc
        $so_luong_diachi_cua_hang = mysqli_num_rows($ktra_diachi_cua_hang);

        # Kiểm tra email cửa hàng 
        $sql_email_cua_hang = "
                            SELECT * 
                            FROM cua_hang 
                            WHERE email_cua_hang = '".$email_cuahang."'
                            ";

        // Thực thi câu lệnh truy vấn
        $ktra_email_cua_hang = mysqli_query($ket_noi, $sql_email_cua_hang);
        // Hiển thị ra dữ liệu mà bạn vừa mới lấy đc
        $so_luong_email_cua_hang = mysqli_num_rows($ktra_email_cua_hang);

        # Kiểm tra hotline cửa hàng 
        $sql_hotline_cua_hang = "
                            SELECT * 
                            FROM cua_hang 
                            WHERE hotline_cua_hang = '".$hotline_cuahang."'
                            ";

        // Thực thi câu lệnh truy vấn
        $ktra_hotline_cua_hang = mysqli_query($ket_noi, $sql_hotline_cua_hang);
        // Hiển thị ra dữ liệu mà bạn vừa mới lấy đc
        $so_luong_hotline_cua_hang = mysqli_num_rows($ktra_hotline_cua_hang);

        if ($ten_cuahang == '')
        {
          echo "<script>
                    alert('Bạn chưa nhập tên cửa hàng');
                    history.back();
                </script>";
          exit();
        }
        elseif ($diachi_cuahang == '')
        {
          echo "<script>
                    alert('Bạn chưa nhập địa chỉ của cửa hàng');
                    history.back();
                </script>";
          exit();
        }
        elseif ($email_cuahang == '')
        {
          echo "<script>
                    alert('Bạn chưa nhập email của cửa hàng');
                    history.back();
                </script>";
          exit();
        }
        elseif ($ban_do == '')
        {
          echo "<script>
                    alert('Bạn chưa nhập link bản đồ');
                    history.back();
                </script>";
          exit();
        }
        elseif ($hotline_cuahang == '')
        {
          echo "<script>
                    alert('Bạn chưa nhập hotline của cửa hàng');
                    history.back();
                </script>";
          exit();
        }
        elseif ($so_luong_ten_cua_hang != 0)
        {
          echo "<script>
                    alert('Tên cửa hàng này đã tồn tại');
                    history.back();
                </script>";
          exit();
        }
        elseif ($so_luong_diachi_cua_hang != 0)
        {
          echo "<script>
                    alert('Địa chỉ cửa hàng này đã tồn tại');
                    history.back();
                </script>";
          exit();
        }
        elseif ($so_luong_email_cua_hang != 0)
        {
          echo "<script>
                    alert('Email cửa hàng này đã tồn tại');
                    history.back();
                </script>";
          exit();
        }
        elseif ($so_luong_hotline_cua_hang != 0)
        {
          echo "<script>
                    alert('Hotline cửa hàng này đã tồn tại');
                    history.back();
                </script>";
          exit();
        }
        else
        {
          // 3. Viết câu lệnh sql để thêm mới dữ liệu vào trong bảng cua_hang ở trong CSDL
        $sql = "
                INSERT INTO `cua_hang` (`ma_cua_hang`, `ten_cua_hang`, `dia_chi_cua_hang`, `email_cua_hang`, `hotline_cua_hang`, `ban_do`, `link_facebook`, `link_internet`, `link_youtube`) 
                VALUES (NULL, '".$ten_cuahang."', '".$diachi_cuahang."', '".$email_cuahang."', '".$hotline_cuahang."', '".$ban_do."', '".$link_fb."', '".$link_internet."', '".$link_youtube."')
               ";
        }

        // 4. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
        $them_cua_hang = mysqli_query($ket_noi, $sql);

        // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang quan_tri_cua_hang.php

        echo "
             <script type='text/javascript'>
                  alert('Bạn đã thêm mới cửa hàng thành công');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='quan_tri_cua_hang.php';
             </script>";     
       
        ;?> 
    </body>
</html>
