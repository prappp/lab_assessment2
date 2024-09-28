<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO contacts (name, email, phone) VALUES ('$name', '$email', '$phone')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Contact added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
</head>
<body>
    <h2>Add a New Contact</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>
        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>
        <input type="submit" name="submit" value="Add Contact">
    </form>
</body>
</html>
