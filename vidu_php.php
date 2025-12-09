<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các ví dụ về PHP</title>
</head>
<body>
    <h1>Tài liệu học Lập Trình Web</h1>
    <?php
        echo "<hr>";
    ?>
    <p>Tài liệu học HTML</p>
    <p>Tài liệu học CSS</p>
    <?php
        echo "<h2>Tài liệu học JavaScripts</h2>";
        echo "<h3>Tài liệu học MySQL</h3>";
        echo "<h4>Tài liệu học PHP</h4>";
    ?>
    <hr>
    <?php
        $text = "Từ cơ bản" . " " . "đến nâng cao";
        echo $text;

    ?>
    <hr>
    <?php
        $name = "Nguyễn Thị Phương Loan";
        $year = 2005;
        $city = 'Hà Nội';
        echo "<p>Giá trị của biến name là chuỗi: $name</p>";
        echo "<p>Giá trị của biến year là số: $year</p>";
        echo "<p>Giá trị của biến city là chuỗi: $city</p>";
    ?>
    <hr>
    <?php
        function showValue(){
            $a=5;
            echo $a; //phạm vi cục bộ
        }
        showValue();     //-> 5
        //echo $a;  //-> không có
    ?>
    <br>
    <?php
        $a=1;
        $b=2;
        function sum(){
            global $a, $b;
            $b = $a+$b;
        }
        sum();
        echo $b;  //3
    ?>
    <hr>
    <?php
        /*khai báo hằng số pi có gtri là 3.14*/
        define('PI', 3.14);
        echo PI;
    ?>
    <hr>
    <?php
        echo "Xin chào, PHP!";
    ?>
    <br>
    <?php
        echo 123;
        echo "<br/>";
        echo 10+20;
    ?>
    <hr>
    <?php
        $name = "Hà Nội";
        echo "Thành phố: " .$name;
    ?>
    <br>
    <?php
        echo "PHP", " ", "là", " ", "tuyệt vời!";
    ?>
    <br>
    <?php
        echo "<h1>Tiêu đề lớn</h1>";
        echo "<p style='color:red;'>Đây là đoạn văn có màu đỏ.</p>";
    ?>
    <hr>
    <?php
        echo "Dấu nháy kép: \"Hello World!\"";
        echo "<br>";
        echo "Dấu nháy đơn: 'It\'s a beautiful day'";
        echo "<br>";
        echo "Dấu gạch chéo ngược: C:\\xamp\\htdocs\\project";
        echo "<br>";
        echo "Ký hiệu \$ trong chuỗi: Giá trị của \$var là: \$var";
        echo "<br>";
        echo "Backspace (xóa ký tự trước): Hello\bWorld";
        echo "<pre>";
        echo "Xuống dòng (new line): Dòng 1\nDòng 2";
        echo "<br>";
        echo "Xuống dòng kiểu cũ (Carriage Return): Dòng 1\rDòng 2";
        echo "<br>";
        echo "Tab ngang: Cột 1\tCột 2";
        echo "</pre>";
    ?>
    <hr>
    <?php
        $x = "10"+5; //"10" đc chuyển thành số nguyên
        echo $x;   //kq: 15
        echo "<br>";
        $y = "5". 10;
        echo $y;  //kq: "510" (chuỗi)
    ?>
    <hr>
    <?php
        $x=7; $y=3; 
        echo "x = ", $x . "<br>";
        echo "y = ", $y . "<br>";
        echo "Phép cộng 2 số: ", $z = $x+$y;
        echo "<br>";
        echo "Phép trừ 2 số: ", $z = $x - $y;
        echo "<br>";
        echo "Phép nhân 2 số: ", $z = $x * $y;
        echo "<br>";
        echo "Phép chia 2 số: ", $z = $x / $y;
        echo "<br>";
        echo "Phép chia lấy dư: ", $z = $x % $y;
        echo "<br>";
        $x = 7;
        echo "Phép toán tăng lên 1 giá trị: ". $x++ . " => x=$x";
        echo "<br>";
        $x = 7;
        echo "Phép toán tăng lên 1 giá trị: ". ++$x . "<br>";
        $x = 7;
        echo "Phép toán giảm 1 giá trị: " . $x-- . " => x=$x";
        echo "<br>";
        $x = 7;
        echo "Phép toán giảm lên 1 giá trị: ". --$x . "<br>";
        
        // echo "Giá trị ban đầu của x: $x<br>";
        // echo "Hậu tố tăng (x++): " . $x++ . " (sau đó x = $x)<br>";
        // echo "Tiền tố tăng (++x): " . ++$x . " (sau đó x = $x)<br>";
        // echo "Hậu tố giảm (x--): " . $x-- . " (sau đó x = $x)<br>";
        // echo "Tiền tố giảm (--x): " . --$x . " (sau đó x = $x)<br>";
    ?>
    <hr>
    <?php
        $a = 10; $b=10;
        if($a>$b){
            //khối lệnh thực hiện
            echo "$a lớn hơn $b";
        }
        else if ($a < $b){
            echo "$a nhỏ hơn $b";
        }
        else {
            echo "Hai giá trị của a và b đều bằng nhau a=b=$a";
        }
    ?>
    <hr>
    <?php
        $a=9;
        switch($a){
            case 0:
                printf("Giá trị là 0");
                break;
            case 10: 
                printf("Giá trị là 10");
                break;
            default: 
                printf("Giá trị không xác định!");
                break;
        }
    ?>
    <hr>
    <?php
        for($x=0; $x<10; $x++){
            //khối lệnh
            printf("\t");
            echo $x;
        }
    ?>
    <br>
    <?php   
        $arr = array(1,2,3,4,5);
        foreach($arr as $x){
            echo $x;
        }
    ?>
    <br>
    <?php
        $x=2;
        while($x <= 3){
            echo "Giá trị :". $x . ".\t";
            $x++;
        }
    ?>
    <br>
    <?php
        $x=2;
        do{
            echo "Giá trị: ". $x . "\t";
            $x++;
        } while($x<5);
    ?>
    <br>
    <?php
        for($i=1; $i<=10; $i++){
            if($i==5){
                break; //thoát khỏi vòng lặp khi $i=5
            }
            echo "$i ";
        }
    ?>
    <br>
    <?php
        for($i=1; $i<=5; $i++){
            if($i==3){
                continue; //bỏ qua khi $i=3
            }
            echo "$i ";
        }
    ?>
</body>
</html>