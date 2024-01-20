<?php
if(isset($_POST['submit'])){
  include '../main_data/db.php';
  $username=$_POST['user'];
  $email=$_POST['email'];
  $password=$_POST['pass'];
  $cpassword=$_POST['cpass'];

  $sql="select * from users where username='$username' ";
  $result=mysqli_query($connection,$sql);
  $count_user=mysqli_num_rows($result);

  $sql="select * from users where email='$email' ";
  $result=mysqli_query($connection,$sql);
  $count_email=mysqli_num_rows($result);

  if($count_user==0 || $count_email==0){
    if($password==$cpassword){
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql="insert into users(username,email,password) values ('$username','$email','$hash')";
      $result=mysqli_query($connection,$sql);
    }
    else{
      echo '<script> alert("password doesnot matches");
           window.location.href="signup.php";
            </script>';
  }

    }
  
  else{
   echo '<script> alert("user already exists");
    window.location.href="signup.php";
    </script>';
  }
}
 ?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>student-management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
  </head>
  <body>
    <?php 
    include("navbar.php") ;
    ?>
    <div id="form" class='container col-4' style='padding:10px;background-color:rgba(123,125,167,0.8); border-radius:10px;margin-top:35px;'>
      <h2 style='text-align:center;'>SIGNUP FORM</h2>
      <form  name='form' action="signup.php" method='post'>
        <label for='user'>Enter username</label>
        <input type='text' name='user' id='user' class='form-control' required><br><br>
        <label for='email'>Enter email</label>
        <input type='email' name='email' id='email' class='form-control' required><br><br>
        <label for='pass'>Enter password</label>
        <input type='password' name='pass' id='pass' class='form-control' required><br><br>
        <label for='cpass'>Retype password</label>
        <input type='password' name='cpass' id='cpass' class='form-control'  required><br><br>
        <input type='submit' name='submit' id='btn' class='btn btn-success' value='signup'></input>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>