<!DOCTYPE html>
<html lang="en">
<head>
<style>
      form {
        border-style: solid;
  border-width: medium;
  position: relative;
  height: 250px;
  width: 25%;
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
      <div class="form-container">
    <title>Data Insertion Form</title>
    </head>
<body>
<a href="user_page.php?>"><input type="submit" value="Back"></a>
    <center>
        <h2>Data Insertion</h2>
        <form method="post" action="insert_data.php">
            <label>Title:</label>
            <input type="text" name="title" required><br><br>

            <label>Details:</label>
            <input type="text" name="details" required><br><br>

            <label>Authors:</label>
            <input type="text" name="authors" required><br><br><br>

            <input type="submit" value="Insert Data">
        </form>
    </center>
</body>
</html>
