<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<a href="admin_page.php" class="btn">logout</a>
   <!DOCTYPE html>
<html lang="en">
<head>
<style>
      .form-container {
        border-style: solid;
  border-width: medium;
  position: relative;
  height: 165px;
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
      </style>
    <title>Data List</title>
</head>
<body>
     <!-- Search Data Form -->
     <center>
   
        <h2>ADMIN 2 PAGE</h2>
        <form method="get" action="s.php">
            <label>Search by Title:</label>
            <input type="text" name="search_title">
            <input type="submit" value="Search">
        </form>
    </center>
    <div class="form-container">
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
            $sql = "SELECT * FROM dataa";
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
                        <td><a href="v.php?title=<?php echo urlencode($title); ?>">View</a></td>
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
              <a href="register_user2.php?title=<?php echo urlencode($title); ?>">Register</a>&nbsp&nbsp
<a href="user2_form.php?title=<?php echo urlencode($title); ?>">Login</a>
        </center>
</body>
</html>

      
   </div>

</div>

</body>
</html>