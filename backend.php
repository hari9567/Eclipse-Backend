<?php
// Hello World in PHP
echo "Hello, World!";
echo "<br>";

// Sample array
$fruits = array("Apple", "Banana", "Orange");

// Loop through the array and print each element
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
// token = 1/1205217631306941:0e118f3ebb02482d7ff2f5965a90a1d5

// Add a new element to the array
$fruits[] = "Grapes";

// Get the number of elements in the array
$count = count($fruits);

// Access elements by index
echo "First fruit: " . $fruits[0];
echo "<br>";

// Check if an element exists in the array
if (in_array("Banana", $fruits)) {
    echo "Banana is in the array!";
}
echo "<br>";

// Read data from a file
$filename = "data.txt";
if (file_exists($filename)) {
    $data = file_get_contents($filename);
    echo "File Contents: " . $data;
} else {
    echo "File not found.";
}
echo "<br>";

// Write data to a file
$new_data = "New data to be added to the file.";
file_put_contents($filename, $new_data, FILE_APPEND);

// Function to calculate the sum of two numbers
function add($num1, $num2) {
    return $num1 + $num2;
}

// Call the function and print the result
$result = add(5, 3);
echo "Result: " . $result;
echo "<br>";

// Handling Form Data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Process form data and store in a database or send via email
    // ...

    // Redirect after form submission
    // https://app.asana.com/api/1.0/projects/1205217820542713
    header("Location: thank_you.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

