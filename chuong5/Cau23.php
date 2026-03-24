<?php
// 1. PHẦN XỬ LÝ PHP
$statusMsg = ""; // Biến lưu thông báo

if (isset($_POST["submit"])) {
    $targetDir = "Tailieu/"; // Thư mục đích theo đề bài
    
    // Tự động tạo thư mục Tailieu nếu chưa tồn tại
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Lấy tên file gốc
    $fileName = basename($_FILES["fileUpload"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (!empty($fileName)) {
        // Hàm move_uploaded_file để di chuyển file từ bộ nhớ tạm lên server
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetFilePath)) {
            $statusMsg = "✅ File <b>".$fileName. "</b> đã được upload vào thư mục <b>Tailieu</b> thành công.";
        } else {
            $statusMsg = "❌ Xin lỗi, có lỗi xảy ra khi upload file của bạn.";
        }
    } else {
        $statusMsg = "⚠️ Vui lòng chọn một file để upload.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Upload một file</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 20px; }
        .upload-form { border: 2px dashed #007bff; padding: 20px; width: 400px; border-radius: 10px; }
        .btn { background-color: #007bff; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; }
        .btn:hover { background-color: #0056b3; }
        .message { margin-top: 15px; color: #333; }
    </style>
</head>
<body>

    <h2>Upload một file lên server</h2>
    
    <div class="upload-form">
        <form action="" method="post" enctype="multipart/form-data">
            <label>Chọn file để tải lên:</label><br><br>
            <input type="file" name="fileUpload" id="fileUpload"><br><br>
            <input type="submit" name="submit" value="Tải lên ngay" class="btn">
        </form>
    </div>

    <?php if(!empty($statusMsg)): ?>
        <div class="message">
            <?php echo $statusMsg; ?>
        </div>
    <?php endif; ?>

</body>
</html>