<?php
include 'database/conn.php';

if (isset($_POST['down'])) {
    $noticeId = $_POST['down'];

    // Fetch PDF content from the database based on the notice ID
    $selectQuery = "SELECT * FROM notice WHERE id = $noticeId";
    $result = mysqli_query($conn, $selectQuery);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        $pdfContent = $row['filename']; // Assuming the column name is 'pdf_content'

        // Set the appropriate headers for PDF file download
        header('Content-Type: notice/');
        header('Content-Disposition: attachment; filename="notice_'.$noticeId.'.pdf"');

        // Output the PDF content
        echo $pdfContent;
        exit();
    } else {
        echo "Error: Notice not found.";
    }
} else {
    echo "Error: Missing notice ID parameter.";
}

mysqli_close($conn);
?>
