<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['content'])) {
    $content = $_POST['content'];
    
    // Generate a unique file name
    $fileName = 'printed_content_' . uniqid() . '.html';
    
    // Specify the file path in your project
    $filePath = 'assets/' . $fileName;
    
    // Save the content to the file
    file_put_contents($filePath, $content);
    
    // Return a response to the client
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>