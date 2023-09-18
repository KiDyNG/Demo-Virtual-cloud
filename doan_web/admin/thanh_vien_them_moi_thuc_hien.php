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
        <title>Thêm mới cửa hàng</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="shortcut icon" type="image/x-icon" href="../img/ecco1.png">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?php 
     // Kết nối với cơ sở dữ liệu

    include('../config.php');

    $Name = $_POST['txtHoTen'];
    $Login = $_POST['txtTenDangNhap'];
    $Email = $_POST['txtEmail'];
    $Phone = $_POST['txtSoDienThoai'];
    $Pass = $_POST['txtMatKhau'];
    $Diachi = $_POST['txtDiaChi'];

    #Check mail
    $sqlmail = "
                SELECT * 
                FROM thanhvien 
                WHERE email = '".$Email."' 
               "; 
    //Thực thi câu lẹnh truy vấn ( mục đích trả về dữ liệu bạn cần)
    $kiem_tra_email = mysqli_query($ket_noi, $sqlmail);
    //4. Hien thi ra du lieu ma ban vua lay dc
    $so_luong_email = mysqli_num_rows( $kiem_tra_email);  

    #Check Tên đăng nhập
    $sqllogin = "
            SELECT * 
            FROM thanhvien 
            WHERE tendangnhap='".$Login."' ";
    //Thực thi câu lẹnh truy vấn ( mục đích trả về dữ liệu bạn cần)
    $kiem_tra_login = mysqli_query($ket_noi, $sqllogin);
    // Hien thi ra du lieu ma ban vua lay dc
    $so_luong_login = mysqli_num_rows( $kiem_tra_login);  

    if($Name == "" ){
        echo "<script>  
                window.alert('Bạn chưa điền họ tên!!!');
                history.back();
             </script>";
        exit();
    }
    elseif ($Login == "") {
        echo "<script>  
                window.alert('Bạn chưa điền tên đăng nhập!!!');
                history.back();
             </script>";
        exit();
    }
    elseif ($Email == "") {
        echo "<script>  
                window.alert('Bạn chưa điền Email!!!');
                history.back();
             </script>";
        exit();
    }      
 
    elseif ($Phone == "") {
        echo "<script>  
                window.alert('Bạn chưa nhập số điện thoại!!!');
                history.back();
             </script>";
        exit();
    }
   
    elseif ($Pass == "") {
        echo "<script>  
                window.alert('Bạn chưa điền mật khẩu!!!');
                history.back();
             </script>";
        exit();
    }
    elseif ($Diachi == "") {
        echo "<script>  
                window.alert('Bạn chưa điền địa chỉ!!!');
                history.back();
             </script>";
        exit();
    }     
    elseif ($so_luong_login != 0) {
     echo "<script>  
                window.alert('Tên đăng nhập của bạn đã được sử dụng!!!');
                history.back();
             </script>";
        exit();
    }
    elseif ($so_luong_email != 0) {
    echo "<script>  
                window.alert('Email bạn nhập đã được sử dụng!!!');
                history.back();
             </script>";
        exit();
    }          
    else{
    // Truy vấn CSDL xem có trùng với tendangnhap và matkhau trên CSDL hay không
        $sql="
                INSERT INTO `thanhvien` (`mathanhvien`, `hoten`, `tendangnhap`, `matkhau`, `email`, `dienthoai`, `diachi`, `ngaytao`, `trangthai`) VALUES (NULL, '".$Name."', '".$Login."', '".$Pass."', '".$Email."', '".$Phone."', '".$Diachi."', current_timestamp(), '1')

            ";

        $them_thanh_vien = mysqli_query($ket_noi, $sql);      
    exit();        
        echo "
                 <script type='text/javascript'>
                    window.alert('Bạn đã thêm thành viên mới thành công');
                    window.location.href='quan_tri_thanh_vien.php';
                 </script>
             ";   
    }
    ;?>
    </body>
</html>