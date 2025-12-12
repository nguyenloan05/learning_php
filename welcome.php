<?php
    session_start();

    //ktra neu form dc gui di
    if(!isset($_SESSION["username"] )){
        //header("Location: login.php");  //chuyển hướng về login.php
        echo "Chưa có session"; 
        exit();
    }
    else{
        echo "Đã có session " . $_SESSION["username"];
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào mừng</title>
</head>
<body>
    <h2>Xin chào, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>Chào mừng bạn đã đăng nhập.</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>