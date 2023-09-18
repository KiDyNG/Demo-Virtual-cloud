<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Đăng ký thành viên | ECCO</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="http://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/ecco1.png">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
        // VIẾT CÁC CÂU LỆNH THỰC HIỆN THÊM MỚI TIN TỨC Ở ĐÂY 

        // 1. Kết nối đến máy chủ dữ liệu và đến csdl mà bạn muốn lấy, thêm mới, sửa, xóa dữ liệu
        include('config.php');

        // 2. Lấy được ra các dữ liệu từ trang dang_ky.php chuyển sang
        $hoten_tv = $_POST['txtHoTen'];
        $tendangnhap_tv = $_POST['txtTenDangNhap'];
        $email_tv = $_POST['txtEmail'];
        $sdt_tv = $_POST['txtSDT'];
        $matkhau_tv = $_POST['txtPass'];
        $repass_tv = $_POST['txtRePass'];
        $diachi_tv = $_POST['txtDiaChi'];
        $dinh_dang_email = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";  
        $dinh_dang_sdt = '#^[0-9]{10}$#';

          # Check mail
          $sqlmail = "
                    SELECT * 
                    FROM thanhvien 
                    WHERE email = '".$email_tv."'  
                    "; 

          //Thực thi câu lẹnh truy vấn ( mục đích trả về dữ liệu bạn cần)
          $kiem_tra_email = mysqli_query($ket_noi, $sqlmail);

          //4. Hiển thị ra số lượng email vừa mới lấy đc
          $so_luong_email = mysqli_num_rows( $kiem_tra_email);  

          #Check Tên đăng nhập
          $sqltendangnhap = "
                             SELECT * 
                             FROM thanhvien 
                             WHERE tendangnhap = '".$tendangnhap_tv."' 
                             ";

           

          //Thực thi câu lẹnh truy vấn ( mục đích trả về dữ liệu bạn cần)
          $kiem_tra_tendangnhap = mysqli_query($ket_noi, $sqltendangnhap);

          // Hiển thị ra số lượng tên đăng nhập mà bạn vừa mới lấy đc 
          $so_luong_tendangnhap = mysqli_num_rows( $kiem_tra_tendangnhap);

          if (!preg_match($dinh_dang_email ,$email_tv))
          {
               echo "<script>  
                          window.alert('Định dạng email không hợp lệ!!!');
                          history.back();
                     </script>";
               exit();
          }

          elseif (!preg_match($dinh_dang_sdt, $sdt_tv) == 1)
          {
               echo "<script>  
                          window.alert('Số điện thoại bạn nhập không hợp lệ!!!');
                          history.back();
                     </script>";
               exit();
          } 

          elseif ($repass_tv != $matkhau_tv) 
          {
               echo "<script>  
                          window.alert('Nhập lại mật khẩu không trùng khớp!!!');
                          history.back();
                     </script>";
               exit();
          }

          elseif ($so_luong_tendangnhap != 0) 
          {
               echo "<script>  
                          window.alert('Tên đăng nhập của bạn đã được sử dụng!!!');
                          history.back();
                     </script>";
               exit();
          }

          elseif ($so_luong_email != 0) 
          {
               echo "<script>  
                          window.alert('Email của bạn đã được sử dụng!!!');
                          history.back();
                     </script>";
               exit();
          }
          else
          {
               // 3. Viết câu lệnh sql để thêm mới dữ liệu vào trong bảng thanhvien ở trong CSDL
               $sql = "
                       INSERT INTO `thanhvien` (`mathanhvien`, `hoten`, `tendangnhap`, `matkhau`, `email`, `dienthoai`, `diachi`, `ngaytao`, `trangthai`) 
                       VALUES (NULL, '".$hoten_tv."', '".$tendangnhap_tv."', '".$matkhau_tv."', '".$email_tv."', '".$sdt_tv."', '".$diachi_tv."', current_timestamp(), '1');
                      ";
          }

        // 4. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
        $dang_ky_tv = mysqli_query($ket_noi, $sql);

        // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang dang_nhap.php

        echo "
             <script type='text/javascript'>
                  alert('Bạn đã đăng ký tài khoản thành công!');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='dang_nhap.php';
             </script>";     
       
        ;?> 
    </body>
</html>
