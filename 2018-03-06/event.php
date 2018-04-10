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

    <?php 
        include "insert.php";
     ?>

     <h2>Add an event</h2>
    <form enctype="multipart/form-data" method="post">
        <label>Title <input type="text" name="title"></label><br>
        <label>Date <input type="date" name="date"></label><br>
        <label>Time <input type="time" name="time"></label><br>
        <label>Description<br> <textarea name="description" id="" cols="30" rows="10"></textarea></label><br>
        <label >Image <br><input type="file" name="image"></label>
        <input type="submit" value="Add">
    </form>
</body>
</html>
