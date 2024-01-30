<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the data is sent
    if(isset($_POST['input_data'])) {
        // Get the input string
        $input_data = $_POST['input_data'];

        // Convert the input string to uppercase
        $uppercaseString = strtoupper($input_data);

        // Return the uppercase string
        echo $uppercaseString;
    } else {
        // If input string is not sent, return an error message
        echo "Error: Input string not provided";
    }
} else {
    // If the request method is not POST, return an error message
    echo "Error: Invalid request method";
}
?>
