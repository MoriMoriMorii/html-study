<?php
$suggestion = $_POST['suggestion'];
$file_path = 'path/to/suggestions.txt';

// Append the suggestion to the text document
file_put_contents($file_path, $suggestion . PHP_EOL, FILE_APPEND);

// Redirect back to the suggestion form or any other desired page
header("Location: suggestion_form.html");
exit();
?>
