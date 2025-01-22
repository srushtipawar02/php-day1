<?php


// Define sample strings
$string1 = "Srushti";
$string2 = "Pawar";
$string3 = "  PHP is Fun!  ";

// a. Concatenation
$concatenated = $string1 . " " . $string2;
echo "a. Concatenation: $concatenated<br>";

// b. String Length
echo "b. String Length: " . strlen($string3) . "<br>";

// c. Substring Extraction
$substring = substr($string1, 3, 7);
echo "c. Substring Extraction: $substring<br>";

// d. Case Conversions
echo "d. Case Conversions:<br>";
echo "   1. Uppercase: " . strtoupper($string1) . "<br>";
echo "   2. Lowercase: " . strtolower($string1) . "<br>";
echo "   3. Uppercase first letter: " . ucfirst(strtolower($string1)) . "<br>";
echo "   4. Uppercase first letter of each word: " . ucwords(strtolower($string1)) . "<br>";

// e. Trimming
echo "e. Trimming:<br>";
echo "   1. Trim: '" . trim($string1) . "'<br>";
echo "   2. Left Trim: '" . ltrim($string1) . "'<br>";
echo "   3. Right Trim: '" . rtrim($string1) . "'<br>";

// f. Reverse a string
$reversed = strrev($string1);
echo "f. Reverse a string: $reversed<br>";

// g. Compares two strings (case-sensitive)
if ($string1 === $string2) {
    echo "g. Case-sensitive comparison: Strings are identical<br>";
} else {
    echo "g. Case-sensitive comparison: Strings are different<br>";
}

// h. Compares two strings (case-insensitive)
if (strcasecmp($string1, $string2) === 0) {
    echo "h. Case-insensitive comparison: Strings are identical<br>";
} else {
    echo "h. Case-insensitive comparison: Strings are different<br>";
}
?>


<?php
// Define sample numbers
$num1 = 15;
$num2 = 4;
$min = 1;
$max = 100;
$nonNumericValue = "ABC";

// a. Arithmetic Operations
echo "a. Arithmetic Operations:<br>";
echo "   Addition: " . ($num1 + $num2) . "<br>";
echo "   Subtraction: " . ($num1 - $num2) . "<br>";
echo "   Multiplication: " . ($num1 * $num2) . "<br>";
echo "   Division: " . ($num1 / $num2) . "<br>";
echo "   Modulus: " . ($num1 % $num2) . "<br>";

// b. Rounds up to the nearest integer
echo "b. Rounds up to the nearest integer: " . ceil($num1 / $num2) . "<br>";

// c. Rounds down to the nearest integer
echo "c. Rounds down to the nearest integer: " . floor($num1 / $num2) . "<br>";

// d. Returns the square root
echo "d. Returns the square root of $num1: " . sqrt($num1) . "<br>";

// e. Generates a random number between $min and $max
echo "e. Random number between $min and $max: " . rand($min, $max) . "<br>";

// f. Checks if a value is numeric or not
echo "f. Numeric check:<br>";
echo "   Is \$num1 numeric? " . (is_numeric($num1) ? "Yes" : "No") . "<br>";
echo "   Is \$nonNumericValue numeric? " . (is_numeric($nonNumericValue) ? "Yes" : "No") . "<br>";
?>
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




