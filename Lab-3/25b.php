<?php
$target_dir = "uploads/";

if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Check for PHP upload errors
if ($_FILES["fileToUpload"]["error"] !== UPLOAD_ERR_OK) {
    switch ($_FILES["fileToUpload"]["error"]) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            die("Error: File size exceeds the maximum allowed server limit.");
        case UPLOAD_ERR_NO_FILE:
            die("Error: No file was selected.");
        default:
            die("Error: File upload failed with code " . $_FILES["fileToUpload"]["error"]);
    }
}

$filename = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $filename;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if real image
if (getimagesize($_FILES["fileToUpload"]["tmp_name"]) === false) {
    die("Error: File is not a valid image.");
}

// Check file extension
if (!in_array($fileType, ["jpg", "jpeg", "png", "gif"])) {
    die("Error: Only JPG, JPEG, PNG, and GIF files are allowed.");
}

// Move uploaded file
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<b>Success:</b> File uploaded successfully as " . htmlspecialchars($filename);
} else {
    echo "Error: Failed to save the uploaded file.";
}
?>