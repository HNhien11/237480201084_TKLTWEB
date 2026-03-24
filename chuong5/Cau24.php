<?php
// 1. PHẦN XỬ LÝ PHP (Đặt lên đầu để xử lý logic trước khi hiển thị form)
$message = ""; // Biến dùng để lưu thông báo kết quả

if (isset($_POST['submit'])) {
    $targetDir = "BoSuuTap/";
    
    // Tự động tạo thư mục nếu chưa có
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Kiểm tra mảng file có dữ liệu không
    if (!empty(array_filter($_FILES['myFiles']['name']))) {
        foreach ($_FILES['myFiles']['name'] as $key => $val) {
            $fileName = basename($_FILES['myFiles']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;

            // Xử lý di chuyển file
            if (move_uploaded_file($_FILES['myFiles']['tmp_name'][$key], $targetFilePath)) {
                $message .= "✅ Thành công: $fileName <br>";
            } else {
                $message .= "❌ Lỗi: $fileName <br>";
            }
        }
    } else {
        $message = "⚠️ Vui lòng chọn ít nhất một file ảnh.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<body>

    <div class="container">
        <p>Chọn các ảnh để đưa vào thư mục <b>BoSuuTap</b></p>
        
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="myFiles[]" multiple accept="image/*">
            <br><br>
            <input type="submit" name="submit" value="Bắt đầu Upload">
        </form>

        <?php if (!empty($message)): ?>
            <div class="result">
                <strong>Kết quả:</strong><br>
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>