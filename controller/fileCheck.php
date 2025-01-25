<?php
$max_file_size = 200 * 1024 * 1024; // 200MB in bytes
 
if(isset($_FILES['myfile']) && $_FILES['myfile']['error'] === UPLOAD_ERR_OK) {
    $file_size = $_FILES['myfile']['size'];
    if ($file_size <= $max_file_size) {
        $src = $_FILES['myfile']['tmp_name'];
        $desDirectory = "C:/xampp/htdocs/event/upload/";
 
        if (!file_exists($desDirectory) && !mkdir($desDirectory, 0777, true)) {
            die('Failed to create destination directory...');
        }
 
        if (!is_writable($desDirectory)) {
            die('Destination directory is not writable...');
        }
 
        $des = $desDirectory . $_FILES['myfile']['name'];
 
        if(move_uploaded_file($src, $des)){
            header("Location: ../view/changepicture.php");
            exit();
        } else {
            echo "Error moving uploaded file to destination.";
        }
    } else {
        echo "File size exceeds the limit (200MB).";
    }
} 

?>