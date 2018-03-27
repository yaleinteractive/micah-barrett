<html>
<head>
<title>Event</title>
</head>
<body>

    <?php

    include "connect.php";
    

    // GET THE ID NUMBER FROM URL
    $id = $_GET['id'];

    // ALWAYS sepcifiy an order
    // * is all columns
    // FROM events - always specify the table names

    $sql = "SELECT * FROM events WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {


            echo "<h1>";
            echo "{$row['title']}";
            echo "</h1>";

            echo "<h2>";
            echo $row['date'];
            echo "</h2>";

            echo "<p>";
            echo $row['description'];
            echo "</p>";
            
            echo "<p>";
            echo $row['location'];
            echo "</p>";
        }
    } else {
        die("Event not found");

    }

    $conn->close();
    ?>

    <p>
        <a href="index.php"> Back to calendar</a>
    </p>
</body>
</html>
