<?php
// Kết nối đến cơ sở dữ liệu
$servername = "tên_máy_chủ_mysql";
$username = "tên_người_dùng_mysql";
$password = "mật_khẩu_mysql";
$dbname = "tên_cơ_sở_dữ_liệu";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$courseName = $_POST['courseName'];
$instructor = $_POST['instructor'];
$description = $_POST['description'];

// Chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO courses (courseName, instructor, description) VALUES ('$courseName', '$instructor', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Đăng ký khóa học thành công";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
