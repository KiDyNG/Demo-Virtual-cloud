<?php 
    session_start(); 
    if (!isset($_SESSION['login']))
       {
            echo "
                 <script type='text/javascript'>
                      alert('Bạn phải đăng nhập để thanh toán !');
                 </script>";

            echo "
                 <script type='text/javascript'>
                      window.location.href='dang_nhap.php';
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
        <title>Thanh toán | ECCO</title>
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

               
        
        // 2. Lấy được ra các dữ liệu từ trang thanhtoan.php chuyển sang
        $id= $_SESSION['login'];
        $mavanchuyen = $_POST['ship'];
        $mathanhtoan = $_POST['payment'];
        $hovaten = $_POST['txtHovaten'];
        $sodienthoai = $_POST['txtSodienthoai'];
        $email=$_POST['txtEmail'];
        $diachi = $_POST['txtDiachi'];
        $ghichu = $_POST['txtGhichu'];

        $sql = "
                INSERT INTO `hoadon` (`mahoadon`,`mathanhvien`,`mavanchuyen`,`mathanhtoan`,`ngaytao`,`tennguoinhan`, `diachinn`,`emailnn`,`dienthoainn`, `ghichu`,`trangthaihoadon`) 
                VALUES (NULL,'".$id."','".$mavanchuyen."','".$mathanhtoan."',current_timestamp(),'".$hovaten."', '".$diachi."','".$email."','".$sodienthoai."','".$ghichu."','1')
               ";

        $thanh_toan = mysqli_query($ket_noi, $sql);


        $sql1 = "
                   SELECT MAX(mahoadon) 
                   FROM hoadon WHERE mathanhvien = '".$id."'
                 ";

                 $mahoadon = mysqli_query($ket_noi,$sql1);
                 $ma = mysqli_fetch_array($mahoadon);


       foreach ($_SESSION['cart'] as $key => $val) 
       {
          $soluong = $val['qty'];
          $gia = $val['gia_sau_giam']*$soluong;
          $ten = $val['ten'];
          $sp_id = $val['id'];

    // 3. Viết câu lệnh sql để thêm mới dữ liệu vào trong bảng hoadon ở trong CSDL

          $sql2 = "
                    INSERT INTO `chi_tiet_hoa_don` (`machitiethoadon`,`mahoadon`,`sp_id`,`tensanpham`,`soluong`,`gia`) 
                    VALUES (NULL,'".$ma['MAX(mahoadon)']."','".$sp_id."','".$ten."','".$soluong."','".$gia."')
                  ";          
          
    // 4. Thực thi câu lệnh truy vấn (mục đích là để trả về dữ liệu các bạn muốn lấy)
          $thanh_toan2 = mysqli_query($ket_noi, $sql2);
        } 

        // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang trang_chu.php
        if(isset($_SESSION['cart']))
        {
          unset($_SESSION['cart']);
        }
        echo "
             <script type='text/javascript'>
                  alert('Bạn đã đặt hàng thành công!');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='index.php';
             </script>";     

        ;?> 
    </body>
</html>