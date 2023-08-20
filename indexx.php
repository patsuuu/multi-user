<?php

@include 'config.php';

session_start();



?>

   <!DOCTYPE html>
<html lang="en">
<head>
    <title>Data List</title>
</head>
<body>
     <!-- Search Data Form -->
     <center>
   
        <h2>SUPER ADMIN</h2>
        <form method="get" action="search_data.php">
            <label>Search by Title:</label>
            <input type="text" name="search_title">
            <input type="submit" value="Search">
        </form>
    </center>
    <center>
        <p><p>
        
        <table border="2">
            <tr>
                <th>TITLE</th>
                <th>VIEW</th>
            </tr>

            <?php
            include "conn.php";

            // Fetch data from the 'data' table
            $sql = "SELECT * FROM data";
            $result = $con->query($sql);

            // Check if the query was successful and there are rows in the result
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $title = $row["title"];
                    $details = $row["details"];
                    $authors = $row["authors"];
            ?>


                    <tr>
                        <td><?php echo $title; ?></td>
                        <td><a href="vieww_data.php?title=<?php echo urlencode($title); ?>">View</a></td>
                    </tr>

            <?php
                }
            } else {
                echo "<tr><td colspan='2'>0 results!!</td></tr>";
            }
            $con->close();
            ?>

        </table>
    </center>
<p><p>



   <center>
              <a href="registerr.php?title=<?php echo urlencode($title); ?>">Register</a>
        </center>
</body>
</html>

      
   </div>

</div>

</body>
</html>