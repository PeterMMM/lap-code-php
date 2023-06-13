<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a student
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];

    $sql = "INSERT INTO students (name, age, email) VALUES ('$name', $age, '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New student created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Update a student
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["edit_id"])) {
    $id = $_POST["edit_id"];
    $name = $_POST["edit_name"];
    $age = $_POST["edit_age"];
    $email = $_POST["edit_email"];

    $sql = "UPDATE students SET name='$name', age=$age, email='$email' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Student updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Delete a student
if (isset($_GET["delete_id"])) {
    $id = $_GET["delete_id"];

    $sql = "DELETE FROM students WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Student deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Read all students
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . " - Email: " . $row["email"] . "<br>";
        echo '<a href="edit.php?id=' . $row["id"] . '">Edit</a> | ';
        echo '<a href="?delete_id=' . $row["id"] . '">Delete</a><br>';
    }
} else {
    echo "No students found.";
}

$conn->close();
?>

<!-- HTML form to create a student -->
<form method="POST" action="">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="number" name="age" placeholder="Age" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="submit" value="Create Student">
</form>
