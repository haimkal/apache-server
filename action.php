<?php


// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "kalvo";


$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    $sql = "SELECT * FROM person where first_name ='$name'";
    // $sql = "SELECT * FROM person where first_name = 'haim'";
    // $sql = "SELECT * FROM person";

    $result = $conn->query($sql);
    // print_r("xxxxxxx " . $sql);

    // Output the data from the "person" table
    if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
        }
    } else {
        echo "0 results";
    }
} else {
    // Return an error if the "name" parameter is not set
    echo "Error: No 'name' parameter provided";
}


$conn->close();
