<a href="admin2_page.php" class="btn">Back</a>
<?php

@include 'configg.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM clone_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO clone_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:user2_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
      form {
        border-style: solid;
  border-width: medium;
  position: relative;
  height: 410px;
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
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
 

</head>
<body>
   
<center><br><br> <br><br>
<div class="form-container">

   <form action="" method="post">
      <h3>REGISTER USER 2</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <center>
      <input type="text" name="name" required placeholder="enter your name">
      <center><br>
      <center>
      <input type="email" name="email" required placeholder="enter your email">
      <center><br>
      <center>
      <input type="password" name="password" required placeholder="enter your password">
      <center><br>
      <center>
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <center><br>
      <center>
      <select name="user_type">
         
         
         <option value="admin">admin</option>
      </select>
      <center><br>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="user2_form.php">login now</a></p>
   </form>

</div>
   </center>

</body>
</html>