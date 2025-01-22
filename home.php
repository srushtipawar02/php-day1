
<?php
// File path
$filename = "students.txt";

// Step 1: Create and write student names to the file
$students = ["Srushti pawar", "Anisha Shinde", "Sakshi Shinde", "Sanika Pawar", "Raj Yadav"];
$file = fopen($filename, "w"); // Open file in write mode
if ($file) {
    foreach ($students as $student) {
        fwrite($file, $student . PHP_EOL); // Write each name with a newline
    }
    fclose($file); // Close the file
    echo "File created and student names written successfully.<br>";
} else {
    echo "Error: Unable to create the file.<br>";
}

// Step 2: Read and display the file contents
if (file_exists($filename)) {
    echo "Contents of the file:<br>";
    $contents = file_get_contents($filename); // Read file contents
    echo nl2br($contents); // Display with line breaks for HTML
} else {
    echo "Error: File does not exist.";
}
?>




