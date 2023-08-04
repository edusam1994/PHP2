<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $subscriber_id = $_GET['id'];

    // Replace these values with your actual database credentials
    $database_host = 'localhost';
    $database_user = 'root';
    $database_password = '';
    $database_name = 'mydb2';

    // Establish the database connection
    $connection = new mysqli($database_host, $database_user, $database_password, $database_name);

    // Check the connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Prepare and execute the DELETE statement
    $stmt = $connection->prepare("DELETE FROM subscribers WHERE id = ?");
    $stmt->bind_param("i", $subscriber_id);

    if ($stmt->execute()) {
        echo "Subscriber with ID $subscriber_id has been deleted successfully.";
    } else {
        echo "Error deleting subscriber: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
}
?>
