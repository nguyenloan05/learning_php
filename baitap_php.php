<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dãy số từ 1-100</title>
</head>
<body>
    <?php
        echo "<h3>Dãy số từ 1 đến 100: </h3>";
        for($i = 1; $i <= 100; $i++) {
            if($i%2 == 0) {
                echo "<span style='color:red; font-weight:bold; '>$i</span>";
                echo " ";
            } else {
                echo "<span style='color:green; font-weight:bold; font-style:italic;'>$i</span>";
                echo " ";
            }
        }
    ?>
</body>
</html>