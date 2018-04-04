<?php 


    if($_COOKIE['visited_before'] == 'Yes'){
        $visited_before = true;
    }
    else{
        setcookie('visited_before', 'Yes');
    }

 ?>



<html>
<head>
    
</head>
<body>
    <h1>Calendar of Events</h1>
    <?php
    include "connect.php";

    include "insert.php";
    include "track_session.php";
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

    <h2>Add an event</h2>
    <form>
        <label>Title <input type="text" name="title"></label><br>
        <label>Date <input type="date" name="date"></label><br>
        <label>Time <input type="time" name="time"></label><br>
        <label>Description<br> <textarea name="description" id="" cols="30" rows="10"></textarea></label><br>
        <input type="submit" value="Add">
    </form>

</body>
</html>
