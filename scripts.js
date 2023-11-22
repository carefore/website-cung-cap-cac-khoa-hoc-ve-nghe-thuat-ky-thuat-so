$(document).ready(function() {
    // Sử dụng jQuery để thêm xử lý sự kiện hoặc hiệu ứng nếu cần
    // Ví dụ: Hiển thị thông báo khi form được submit
    $("#courseForm").submit(function(e) {
        e.preventDefault(); // Ngăn chặn form submit mặc định
        alert("Đăng ký thành công!");
    });
});
