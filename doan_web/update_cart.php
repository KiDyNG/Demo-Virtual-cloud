<?php
session_start();
if(!isset($_SESSION['cart']))
{
    echo "
        <script type='text/javascript'>
            window.location.href='gio_hang.php';
        </script>";
}

if (isset($_GET['id'])) 
{
    unset($_SESSION["cart"][$_GET['id']]);
} 
echo "
        <script type='text/javascript'>
            window.location.href='gio_hang.php';
        </script>";


                 
?>