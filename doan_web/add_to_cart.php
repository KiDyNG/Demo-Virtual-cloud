<?php 
session_start();
if (!isset($_SESSION['login']))
       {
            echo "
                 <script type='text/javascript'>
                      alert('Bạn phải đăng nhập để thêm vào giỏ hàng !');
                 </script>";

            echo "
                 <script type='text/javascript'>
                      window.location.href='dang_nhap.php';
                 </script>";
            exit();  
       } ;
ob_start();

// lấy id của sản phẩm cần thêm vào giỏ hàng
    if( isset($_GET['id']) && (int)$_GET['id'] != NULL)
    {
        $id = $_GET['id'];
    };
include('config.php');
$sql ="SELECT *
       FROM sanpham
       WHERE sp_id='".$id."'";
$sanpham = mysqli_query($ket_noi,$sql);
$row = mysqli_fetch_assoc($sanpham);
if($sanpham){
    if(isset($_SESSION['cart']))
{
    if(isset($_SESSION['cart'][$id]))
    {
        $_SESSION['cart'][$id]['qty'] +=1;
    }
    else
    {
        $_SESSION['cart'][$id]['qty'] =1;

    }
    $_SESSION['cart'][$id]['anh'] = $row['anhdaidien'];
    $_SESSION['cart'][$id]['ten'] = $row['tensanpham'];
    $_SESSION['cart'][$id]['gia_sau_giam'] = $row['gia_sau_giam'];
    $_SESSION['cart'][$id]['size'] = $row['size'];
    $_SESSION['cart'][$id]['id'] = $row['sp_id'];
    $_SESSION['success']="Đã thêm vào giỏ hàng";
    echo "
        <script type='text/javascript'>
            window.location.href='gio_hang.php';
        </script>";
    ;exit();

}
else
{
    $_SESSION['cart'][$id]['qty'] = 1;
    $_SESSION['cart'][$id]['anh'] = $row['anhdaidien'];
    $_SESSION['cart'][$id]['ten'] = $row['tensanpham'];
    $_SESSION['cart'][$id]['gia_sau_giam'] = $row['gia_sau_giam'];
    $_SESSION['cart'][$id]['size'] = $row['size'];
    $_SESSION['cart'][$id]['id'] = $row['sp_id'];
    $_SESSION['success']="Đã thêm vào giỏ hàng";
    echo "
        <script type='text/javascript'>
            window.location.href='san_pham_chi_tiet.php?id=$id.php';
        </script>";               
    exit();
    
   
}

}
else{
    $_SESSION['success']="sản phâm không tồn tại";
    echo "
        <script type='text/javascript'>
            window.location.href='gio_hang.php?id=$id.php';
        </script>";  
    exit();


}

 
?>