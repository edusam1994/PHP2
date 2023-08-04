<?php
if (isset($_POST["submit"])) {
    // Define the target directory where the uploaded file will be stored
    $targetDir = "uploads/";

    // Get the name of the uploaded file
    $fileName = basename($_FILES["fileToUpload"]["name"]);

    // Define the path to save the uploaded file
    $targetFilePath = $targetDir . $fileName;

    // Check if the file is of an allowed file type (optional)
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif', 'pdf'); // Add more file types if needed
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    if (!in_array($fileType, $allowedTypes)) {
        echo "Error: Only JPG, JPEG, PNG, GIF, and PDF files are allowed.";
    } else {
        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFilePath)) {
            echo "The file " . $fileName . " has been uploaded successfully.";
            // Display the uploaded file on your page (optional)
            echo "<img src='" . $targetFilePath . "' alt='Uploaded Image'>";
        } else {
            echo "Error uploading file.";
        }
    }
}
?>
