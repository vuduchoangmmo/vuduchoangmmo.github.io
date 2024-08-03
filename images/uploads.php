<?php
$folder = $_POST['folder'];
$target_dir = $_SERVER['DOCUMENT_ROOT']."/images/upload/$folder/";
if (!file_exists($target_dir)) {
mkdir($target_dir, 0777, true);
}
$target_file = $target_dir . basename($_FILES['file']['name']);
if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
echo "Tải Dữ Liệu Thành Công!!!";
} else {
echo "Đã Có Lỗi Trong Quá Trình Tải Dữ Liệu!!!";
}
?>