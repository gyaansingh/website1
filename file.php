<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if a file is uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        // Define the directory where you want to upload the file
        $uploadDir = 'uploads/';
        
        // Make sure the directory exists and is writable
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }
        
        // Get the uploaded file details
        $fileName = $_FILES['file']['name'];
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];

        // Set the path where the file will be stored
        $destPath = $uploadDir . basename($fileName);

        // Move the uploaded file to the desired location
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            echo "File successfully uploaded!";
        } else {
            echo "There was an error uploading your file.";
        }
    } else {
        echo "No file uploaded or there was an error.";
    }
}
?>
