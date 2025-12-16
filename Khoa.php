<?php
    // Bước 1. Kết nối CSDL
	// $conn = mysqli_connect('localhost', 'root', '', 'GiangDayOnline');
	 
	// // Kiểm tra kết nối
	// if (!$conn) {
	//     die("Kết nối thất bại: " . mysqli_connect_error());
	// }
	 
	// // Bước 3. Tạo câu truy vấn
	// $sql = "INSERT INTO Khoa (TenKhoa, GhiChu) 
	// 		VALUES ('Khoa KTVT', 'Khoa Kinh tế vận tải - Trường UTT')";
	 
	// // Bước 4. thực hiện thêm record
	// if (mysqli_query($conn, $sql)) 
	// {
	//     echo "Thêm record thành công";
	// } 
	// else {
	//     echo "Lỗi: " .$sql. "<br>" . mysqli_error($conn);
	// }
	 
	// // Bước 5. Ngắt kết nối
	// mysqli_close($conn);
?>
<?php
    // Bước 1. Kết nối CSDL
	$conn = mysqli_connect('localhost', 'root', '', 'GiangDayOnline');
	 
	// Kiểm tra kết nối
	if (!$conn) {
	    die("Kết nối thất bại: " . mysqli_connect_error());
	}
	 
	// Bước 3. Tạo câu truy vấn
	// $sql2 = "UPDATE Khoa SET TenKhoa = 'UTT-CNTT', 
	// 		GhiChu = 'Trường ĐH Công nghệ GTVT' WHERE MaKhoa=1";
	// var_dump($sql2);
	// // Bước 4. thực hiện thêm record
	// if (mysqli_query($conn, $sql2)) 
	// {
	//     echo "Cập nhật dữ liệu thành công";
	// } 
	// else {
	//     echo "Lỗi: " .$sql2. "<br>" . mysqli_error($conn);
	// }

	$sql3 = "DELETE FROM Khoa WHERE MaKhoa = 2";
	var_dump($sql3);
	if (mysqli_query($conn, $sql3)) 
	{
	    //echo "Xóa dữ liệu thành công";
		var_dump(mysqli_query($conn, $sql3));
	} 
	else {
	    echo "Lỗi: " .$sql3. "<br>" . mysqli_error($conn);
	}
	 
	// Bước 5. Ngắt kết nối
	mysqli_close($conn);
?>
