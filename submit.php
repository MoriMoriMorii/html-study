<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $suggestion = $_POST["content"];

    // Save the suggestion to a text file
    $file = fopen("suggestions.txt", "a");
    fwrite($file, $suggestion . "\n");
    fclose($file);

    echo "Suggestion submitted successfully!";
} else {
    // Redirect to the form if accessed directly
    header("Location: index.html");
    exit();
}
?>
