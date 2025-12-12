<?php
    session_start(); //bắt đầu session

    //ktra neu form dc gui di
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION["username"] = $_POST["username"]; //lưu vào session 
        //header("Location: welcome.php"); 
        var_dump($_SERVER["REQUEST_METHOD"]);
        var_dump($_POST["username"]);
        var_dump($_SESSION["username"]);
        exit();
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>
    <form method = "post" action="">
        <label>Nhập tên của bạn:</label>
        <input type="text" name="username" required>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>