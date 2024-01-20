
<?php 
include 'db.php';
if(isset($_POST['add_students'])){
  $fname = $_POST['f_name'];
  $lname = $_POST['l_name']; // Corrected variable name for last name
  $age = $_POST['age'];
  
  if($fname == "" || empty($fname) || $lname == "" || empty($lname)){
    header('location:index.php?message=You must fill both firstname and lastname!');
  }
  else{
    $query = "INSERT INTO `student` (`first_name`, `last_name`, `age`) VALUES ('$fname', '$lname', '$age')";
    $result = mysqli_query($connection, $query);
    if(!$result){
      die("Error: " . mysqli_error());
    }
    else{
      header('location:index.php?insert_msg=Your data has been added successfully');
    }
  }
}
?>
