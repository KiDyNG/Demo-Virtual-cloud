<?php
session_start();
if( isset($_GET['ma']) && (int)$_GET['ma'] != NULL)
{
    $id = $_GET['ma'];
};
if(!isset($_SESSION['cart']))
{
    echo "
    <script type='text/javascript'>
        window.location.href='gio_hang.php';
    </script>";
    exit();
}

if (isset( $_SESSION['cart'][$id]['qty'])) 
{
    $_SESSION['cart'][$id]['qty'] -=1;
} 

echo "
    <script type='text/javascript'>
        window.location.href='gio_hang.php';
    </script>";
    exit();              
?>