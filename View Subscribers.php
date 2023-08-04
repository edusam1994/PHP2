<!DOCTYPE html>
<html>
<head>
    <title>Subscriber List</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link" href="index.php">Home</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <table class="table">
                <?php
                include_once 'database.php';
                $database = new Database();
                $connection = $database->connection;

                $query = 'SELECT * FROM subscribers';
                $result = $connection->query($query);

                if ($result) {
                    if ($result->num_rows > 0) {
                        echo "<tr>";
                        echo "<th>Name</th>";
                        echo "<th>Age</th>";
                        echo "<th>Email</th>";
                        echo "<th>phone</th>";
                        echo "<th>Actions</th>";
                        echo "</tr>";

                        while ($row = $result->fetch_assoc()) {
                            $name = isset($row['name']) ? $row['name'] : '';
                            $age = isset($row['age']) ? $row['age'] : '';
                            $email = isset($row['email']) ? $row['email'] : '';
                            $phone = isset($row['phone']) ? $row['phone'] : '';

                            echo "<tr>";
                            echo "<td>" . $name . "</td>";
                            echo "<td>" . $age . "</td>";
                            echo "<td>" . $email . "</td>";
                            echo "<td>" . $phone . "</td>";
                            echo "<td>";
                            echo "<a href='update.php?id=" . $row['id'] . "' class='btn btn-primary'>Update</a>";
                            echo "<a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No data found.</td></tr>";
                    }
                } else {
                    echo "Error en la consulta: " . $connection->error;
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
