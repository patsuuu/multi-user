<a href="admin_page.php" class="btn">Back</a>
<?php

@include 'configg.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM admin3_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO admin3_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:lg.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
  

</head>
<body>
   
<center>
<div class="form-container">

   <form action="" method="post">
      <h3>REGISTER ADMIN 3</h3>
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
     
   
      <p>already have an account? <a href="lg.php">login now</a></p>
   </form>

</div>
</center>
</body>
</html>