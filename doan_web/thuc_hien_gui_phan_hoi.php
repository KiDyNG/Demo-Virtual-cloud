<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gửi phàn hồi | ECCO</title>
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
        $ten_kh = $_POST['txtTenKhachHang'];
        $ma_sp = $_POST['txtMaSP'];
        $email_kh = $_POST['txtEmailKhachHang'];
        $nd_ph = $_POST['txtNoiDungPH'];

        if ($ten_kh == '')
        {
          echo "<script>
                    alert('Bạn chưa nhập tên khách hàng');
                    history.back();
                </script>";
          exit();
        }
        elseif ($email_kh == '')
        {
          echo "<script>
                    alert('Bạn chưa nhập email khách hàng');
                    history.back();
                </script>";
          exit();
        }
        elseif ($nd_ph == '')
        {
          echo "<script>
                    alert('Bạn chưa nhập nội dung phản hồi');
                    history.back();
                </script>";
          exit();
        }
        else
        {
          // 3. Viết câu lệnh sql để thêm mới dữ liệu vào trong bảng thanhvien ở trong CSDL
        $sql = "
                INSERT INTO `phan_hoi_kh` (`mabinhluan`, `tenkhachhang`, `anhkhachhang`, `masp`, `email_kh`, `ngaygui`, `noidung`, `trangthai`) 
                VALUES (NULL, '".$ten_kh."', NULL, '".$ma_sp."', '".$email_kh."', current_timestamp(), '".$nd_ph."', '1');
               ";
        }
        // 4. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
        $them_moi_ph = mysqli_query($ket_noi, $sql);


        // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang trang_chu.php

        echo "
             <script type='text/javascript'>
                  alert('Bạn đã gửi phản hồi thành công!');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='index.php';
             </script>";     
       
        ;?> 
    </body>
</html>
