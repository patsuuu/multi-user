<a href="admin_page.php?>"><input type="submit" value="Back"></a>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
      .form-container {
        border-style: solid;
  border-width: medium;
  position: relative;
  height: auto;
  width: 35%;
  bottom: 0px;
  padding:  30px;
  font-size: 17px;
  line-height: 1.3;
  background-color: lightblue;
  margin-left: auto; 
  margin-right: auto;
}
* {
  box-sizing: border-box;
}
body {
  background-color: #f79256;
}
body {
  margin: 0;
  font-family: Timesnewroman;
  font-size: 20px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
table {
  border-collapse: collapse;
  width: 100%;

}
th {
  height: 40px;
}
td {
  text-align: center;
}
.content {
  position: fixed;
  width: 100%;
  
  
}


#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}
</style><br><br><br><br><br><br><br><br>    
    <title>Data Search</title>
</head>
<body>
<div class="form-container">
    <center>
        <h2>DATA</h2>
        <form method="get" action="admin_page.php">
            
        </form>

        <br>

        <?php
        if (isset($_GET['search_title'])) {
            // Include the connection file
            include "conn.php";

            // Retrieve the search criteria from the form
            $search_title = $_GET['search_title'];

            // Add validation and data sanitization if required

            // Fetch data from the 'data' table based on the search criteria
            $sql = "SELECT * FROM dataa WHERE title LIKE ?";
            $stmt = $con->prepare($sql);
            $search_title = '%' . $search_title . '%'; // Add wildcards for partial search
            $stmt->bind_param("s", $search_title);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Display the search results
                echo "<table border='4'>";
                echo "<tr><th>Title</th><th>Details</th><th>Authors</th><th>View</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['title'] . "</td><td>" . $row['details'] . "</td><td>" . $row['authors'] . "</td><td><a href='vww.php?title=" . urlencode($row['title']) . "'>View</a></td></tr>";
                }
                echo "</table>";
            } else {
                // No results found
                echo "No results found!";
            }

            // Close the database connection
            $stmt->close();
            $con->close();
        }
        ?>
    </center>
</body>
</html>
