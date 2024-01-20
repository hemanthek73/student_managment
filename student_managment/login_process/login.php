<?php 
if(isset($_POST['submit'])){
  include '../main_data/db.php';
  $username=$_POST['user'];
  $password=$_POST['pass'];
  $sql="select *from users where username='$username' or email='$username'";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row){
  if(password_verify($password,$row['password'])){
    header("location:../main_data/index.php");
  }
}
  else{
    echo '<script>
    alert("invalid username or password!!");
    window.location.href="login.php";
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
    <div id="form"  class='container col-5'>
      <h1 style='text-align:center;' >LOGIN</h1>
      <form  name='form' class='form-group' action="login.php" method='post'>
        <label for='user'>Enter username/email</label>
        <input type='text' class='form-control' name='user' id='user' required><br><br>
        <label for='pass'>Enter password</label>
        <input type='password' name='pass'  class='form-control' id='pass' required><br><br>
        <input type='submit' name='submit' id='btn' class='btn btn-success ' value='login'></input>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <style>
    .container{
      margin-top:50px;
      width:30%;
      margin:50px auto;
      background: #f4f3ef;
      border-radius:10px;
      padding:10px;
      box-shadow:0px 2px 20px gray;
    }
    label{
      margin-bottom:10px;
    }
  </style>
</html>