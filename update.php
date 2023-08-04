<!DOCTYPE html>
<html>
<head>
    <title>Update Subscriber</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="container">
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

            // Fetch the subscriber's information
            $query = "SELECT * FROM subscribers WHERE id = ?";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("i", $subscriber_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $subscriber = $result->fetch_assoc();
                // Display a form to update the subscriber's information
                ?>
                <h2>Update Subscriber</h2>
                <form method="post" action="process_update.php">
                    <input type="hidden" name="id" value="<?php echo $subscriber['id']; ?>">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $subscriber['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" id="age" class="form-control" value="<?php echo $subscriber['age']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?php echo $subscriber['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $subscriber['phone']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <?php
            } else {
                echo "Subscriber not found.";
            }

            $stmt->close();
            $connection->close();
        } else {
            echo "Invalid subscriber ID.";
        }
        ?>
    </div>
</body>
</html>
