<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM contacts WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Contact deleted successfully!";
    } else {
        echo "Error deleting contact: " . $conn->error;
    }
}

$conn->close();

header("Location: view_contacts.php");
exit;
?>
