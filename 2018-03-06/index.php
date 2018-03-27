<html>
<head>
    
</head>
<body>
    <h1>Calendar of Events</h1>
    <?php
    include "connect.php";

    
    // ALWAYS sepcifiy an order
    // * is all columns
    // FROM events - always specify the table names

    $sql = "SELECT * FROM events ORDER by date ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {


            echo "<h1>";
            echo "<a href='event.php?id={$row['id']};'>";
            echo "{$row['title']}";
            echo "</a>";
            echo "</h1>";

            echo "<h2>";
            echo $row['date'];
            echo "</h2>";

          
        }
    } else {
        echo "No events";
    }
    $conn->close();
    ?>

</body>
</html>
