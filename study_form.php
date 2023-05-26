<?php
require('database.php');
session_start();
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];

} else {
    header("Location: login.php");
}


?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pdfFile = $_FILES["pdf_file"]["tmp_name"];
    $pdfName = $_FILES["pdf_file"]["name"];
    $pdfType = $_FILES["pdf_file"]["type"];

    // Read file content
    $pdfContent = file_get_contents($pdfFile);

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO pdf_files (file_name, file_type, file_content) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $pdfName, $pdfType, $pdfContent);
    $stmt->execute();
    $stmt->close();

    echo "PDF file uploaded and stored in the database.";
}

$conn->close();
?>