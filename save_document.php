<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data['content'];
    file_put_contents('document.txt', $content);
    echo 'Document saved successfully!';
} else {
    echo 'Invalid request method!';
}
?>
