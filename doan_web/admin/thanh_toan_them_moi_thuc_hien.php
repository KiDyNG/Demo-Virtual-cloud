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
        <title>Thêm mới hình thức thanh toán</title>
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

        // 2. Lấy được ra các dữ liệu từ trang thanh_toan_them_moi.php chuyển sang
        $hinhthuc_tt = $_POST['txtHinhThucTT'];
        $ghichu_tt = $_POST['txtGhiChuTT'];

        # Kiểm tra hình thức thanh toán
        $sql_hinh_thuc_tt = "
                            SELECT * 
                            FROM thanhtoan 
                            WHERE hinhthuctt = '".$hinhthuc_tt."'
                            ";

        // Thực thi câu lệnh truy vấn
        $ktra_hinh_thuc_tt = mysqli_query($ket_noi, $sql_hinh_thuc_tt);
        // Hiển thị ra dữ liệu mà bạn vừa mới lấy đc
        $so_luong_hinh_thuc_tt = mysqli_num_rows($ktra_hinh_thuc_tt);

        if ($hinhthuc_tt == '') 
        {
          echo "<script>
                    alert('Bạn chưa nhập hình thức thanh toán');
                    history.back();
                </script>";
          exit();
        }

        elseif ($ghichu_tt == '')
        {
          echo "<script>
                    alert('Bạn chưa nhập ghi chú thanh toán');
                    history.back();
                </script>";
          exit();
        }

        elseif ($so_luong_hinh_thuc_tt != 0) 
        {
          echo "<script>
                    alert('Hình thức thanh toán này đã tồn tại');
                    history.back();
                </script>";
          exit();
        }

        else 
        {
          // 3. Viết câu lệnh sql để thêm mới dữ liệu vào trong bảng thanhtoan ở trong CSDL
          $sql = "
                INSERT INTO `thanhtoan` (`mathanhtoan`, `hinhthuctt`, `ghichutt`, `trangthai`) 
                VALUES (NULL, '".$hinhthuc_tt."', '".$ghichu_tt."', '1')
                 ";
        }


        // 4. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
        $them_thanh_toan = mysqli_query($ket_noi, $sql);

        // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang quan_tri_hinh_thuc_thanh_toan.php

        echo "
             <script type='text/javascript'>
                  alert('Bạn đã thêm mới hình thức thanh toán thành công');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='quan_tri_hinh_thuc_thanh_toan.php';
             </script>";     
       
        ;?> 
    </body>
</html>
