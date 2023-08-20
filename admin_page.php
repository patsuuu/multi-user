<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

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

.content {
  position: fixed;
  width: 100%;
  
  
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

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}
body {
  background: url("https://cdn.discordapp.com/attachments/810160301978550322/1141725455624450168/image.png") no-repeat top left;
  background-logo: 50px;
  background-size:190px;
  position: relative;
  clear: both;
  padding: 10px;
  margin: 0px;
  padding:  30px;
  background-repeat: no-repeat, repeat;
}
body {
  background-color: #f79256;
}

.logo {
  background: url("../graphics/dhaka logo.png");
  padding: 0px;
  margin: 0px;
  width: 150px;
  height: 0px;
  
}
#myBtn:hover {
  background: #ddd;
  color: black;
}
      </style>
    <title>Data List</title>
</head>
<body>
<div class="logo">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


</div>
<nav>
    <ul>

<center>
      <h2>Municipality of Naic</a></h2>
</center>
</ul>
</nav>

     <!-- Search Data Form -->
     <center>
   
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp
        &nbsp&nbsp
        &nbsp&nbsp
        &nbsp&nbsp
        &nbsp&nbsp
        <form method="get" action="search_data.php">
            <label>Search by Title:</label>
            <input type="text" name="search_title">
            <input type="submit" value="Search">
        </form>
    </center>
    <div class="form-container">
       
    <center>
        
        <p><p>
        <h2>Munting Mapino</h2>
        
        <table border="4px">
            <tr>
                <th>TITLE</th>
                <th>DATA</th>
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
<a href="registerr.php?title=<?php echo urlencode($title); ?>"><input type="submit" value="Register"></a>&nbsp&nbsp
<a href="login_form.php?title=<?php echo urlencode($title); ?>"><input type="submit" value="Login"></a>

        </center>
        </div>
<center>
        <p><p>
              <!-- Search Data Form -->
     <center>
   
   <h2></h2>
   <form method="get" action="vw.php">
       <label>Search by Title:</label>
       <input type="text" name="search_title">
       <input type="submit" value="Search">
   </form>
</center>
<div class="form-container">
<center>
   <p><p>
        
   <table border="4px">
        <h2>Villa Apolonia</h2>
            <tr>
                <th>TITLE</th>
                <th>DATA</th>
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
                        <td><a href="vieww_dataa.php?title=<?php echo urlencode($title); ?>">View</a></td>
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
<a href="register_admin2.php?title=<?php echo urlencode($title); ?>"><input type="submit" value="Register"></a>&nbsp&nbsp
<a href="login_admin2.php?title=<?php echo urlencode($title); ?>"><input type="submit" value="Login"></a>
        </center>
        </div>

 <!-- Search Data Form -->
 <center>
   
   <h2></h2>
   <form method="get" action="wv.php">
       <label>Search by Title:</label>
       <input type="text" name="search_title">
       <input type="submit" value="Search">
   </form>
</center>
<div class="form-container">
<center>
   <p><p>
        
   <table border="4px">
        <h2>Malainen Bago</h2>
            <tr>
                <th>TITLE</th>
                <th>DATA</th>
            </tr>

            <?php
            include "conn.php";

            // Fetch data from the 'data' table
            $sql = "SELECT * FROM dataaa";
            
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
                        <td><a href="vv.php?title=<?php echo urlencode($title); ?>">View</a></td>
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
<a href="rg.php?title=<?php echo urlencode($title); ?>"><input type="submit" value="Register"></a>&nbsp&nbsp
<a href="lg.php?title=<?php echo urlencode($title); ?>"><input type="submit" value="Login"></a>
        </center>
  
        </div>
        
</body>
</html>

      
   </div>

</div>

</body>
</html><br><br>
<a href="index.php" class="btn"><input type="submit" value="Logout">