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
    <div class="container" style='text-align :center;'>
      <h1>YOU DONT HAVE AN ACCOUNT <span>SIGNUP NOW</span></h1>
      <h1>ALEREADY HAVE AN ACCOUNT GO TO <span>LOGIN</span></h1>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <style>
    body{
      background-image: url('../main_data/clg.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-clip: border-box;
  background-color: black;
  backdrop-filter: blur(10px);
    }
    .container{
      height:94vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction:column;
      
    }
    h1{
      font-size:70px;
      margin-bottom:20px;
      font-family: Georgia, 'Times New Roman', Times, serif;
      color:white;
    }
 span{
     color:green;
    }
    @media (max-width:800px) {

h1{
  font-size:30px;
}
    }
    @media (max-width:600px) {

h1{
  font-size:30px;
}
    }
    @media (max-width:1000px) {

h1{
  font-size:40px;
}
    }

  </style>

</html>