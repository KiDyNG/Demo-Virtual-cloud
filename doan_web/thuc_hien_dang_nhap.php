<?php 
   // 1. Kết nối đến MÁY CHỦ DỮ LIỆU VÀ CSDL mà các bạn muốn lấy, thêm mới, muốn sửa, xóa dữ liệu
       include('config.php');

    // 2. Viết câu lệnh truy vấn để kiểm tra xem thành viên có tồn tại trong bảng thanhvien hay không?
        $ten_dang_nhap = $_POST['txtUserName'];
        $mat_khau_dang_nhap = $_POST['txtPassWord'];
        $sql = "
                SELECT *  
                FROM thanhvien 
                WHERE tendangnhap = '".$ten_dang_nhap."' AND matkhau = '".$mat_khau_dang_nhap."'
                ";

    // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
        $xac_nhan_thanh_vien = mysqli_query($ket_noi, $sql);
        $row = mysqli_fetch_array($xac_nhan_thanh_vien);
    // 4. Xử lý dũ liệu mà các bạn thu được
        $so_luong_thanh_vien = mysqli_num_rows($xac_nhan_thanh_vien);

        # Nếu số lượng bản ghi = 0 => tendangnhap và matkhau không chính xác => đẩy người dùng về trang đăng nhập

        # Nếu số lượng bản ghi = 1 => tendangnhap và matkhau chính xác => đẩy người dùng về trang laptop_moi.php

        if ($so_luong_thanh_vien == 0) 
        {
            echo "
             <script type='text/javascript'>
                  alert('Bạn đã nhập sai tên đằng nhập và mật khẩu. Vui lòng nhập lại!');
             </script>";

            echo "
             <script type='text/javascript'>
                  window.location.href='dang_nhap.php';
             </script>";
        }
        else
        // Khởi tạo phiên làm việc cho người đăng nhập thành công
        {
            session_start();
            $_SESSION['login'] = $row['mathanhvien'];
            echo "
             <script type='text/javascript'>
                  alert('Bạn đã đăng nhập thành công');
             </script>";

            echo "
             <script type='text/javascript'>
                  window.location.href='index.php';
             </script>";
        }

;?>