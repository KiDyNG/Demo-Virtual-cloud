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
        <title>Thay đổi thông tin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css2/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/logo-title.jpg">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
        // VIẾT CÁC CÂU LỆNH THỰC HIỆN THÊM MỚI TIN TỨC Ở ĐÂY 

        // 1. Kết nối đến máy chủ dữ liệu và đến csdl mà bạn muốn lấy, thêm mới, sửa, xóa dữ liệu
        include('../config.php');

        // 2. Lấy được ra các dữ liệu từ trang dang_ky.php chuyển sang
        $id=$_POST['txtIDthanhvien'];
        $hoten = $_POST['txtHoten'];
        $sdt = $_POST['txtSodienthoai'];
        $diachi = $_POST['txtDiachi'];
        $dinh_dang_sdt = '#^[0-9]{10}$#';
          if (!preg_match($dinh_dang_sdt, $sdt) == 1)
          {
               echo "<script>  
                          window.alert('Số điện thoại bạn nhập không hợp lệ!!!');
                          history.back();
                     </script>";
               exit();
          } 
          else
          {
                // 3. Viết câu lệnh sql để thêm mới dữ liệu vào trong bảng thanhvien ở trong CSDL
               $sql = "
                     UPDATE `thanhvien` SET `hoten` = '".$hoten."', `dienthoai` = '". $sdt."', `diachi` = '".$diachi."' WHERE `thanhvien`.`mathanhvien` = ".$id.";
                    ";

             // 4. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
               $cap_nhat_thong_tin = mysqli_query($ket_noi, $sql);

             // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang trang_chu.php

               echo "
                  <script type='text/javascript'>
                       alert('Bạn đã cập nhật thông tin thành công!');
                  </script>";

               echo "
                  <script type='text/javascript'>
                       window.location.href='profile.php';
                  </script>";
          }                
        ;?> 
    </body>
</html>
