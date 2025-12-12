<?php
    session_start();
    session_destroy(); //huyr toàn bộ session
    header("Location: login.php");   //chuyển hướng về trang đăng nhập
    exit();
?>