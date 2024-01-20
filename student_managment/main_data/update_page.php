<?php include('header.php');?>
<?php include('db.php');?>

<?php 
if(isset($_GET['id'])){
  $id=$_GET['id'];

  $query="select * from `student` where `id`='$id' ";
      $result=mysqli_query($connection, $query);
      if(!$result){
        die("Query Failed".mysqli_error());
      }
      else{
       $row=mysqli_fetch_assoc($result);
       
}
}

?>
<?php
if(isset($_POST['update_students'])){
  if(isset($_GET['id_new'])){
    $newid=$_GET['id_new'];
  }
  $fname=$_POST['f_name'];
  $lname=$_POST['l_name'];
  $age=$_POST['age'];
  $query="update `student` set `first_name`='$fname',`last_name`='$lname', `age`='$age' where `id`='$newid' ";
  $result=mysqli_query($connection, $query);
      if(!$result){
        die("Query Failed".mysqli_error());
}
else{
  header('location:index.php?update_msg=you have succcessfully updated the data');
}
}
 ?>
<div class="form-group" >
<form action='update_page.php?id_new=<?php echo $id; ?>' method='post'  >
  <div class="form-group">
      <label for="f_name">First name</label>
      <input type="text" class="form-control" name="f_name" placeholder='enter first name' value=<?php echo $row['first_name']?> />
    </div>
    <div class="form-group">
      <label for="l_name">Last name</label>
      <input type="text" class="form-control" name="l_name" placeholder='enter last name' value=<?php echo $row['last_name']?> />
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" name="age" placeholder='age' value=<?php echo $row['age']?> />
    </div>
    <input type="submit" class="btn btn-success" name='update_students' value='UPDATE' style="margin-top:30px;">
</form>
<style>
  .form-group{
    width:60vW;
    margin:2% auto;
   
  }
  input{
    height:50px;
    
  }
  @media (max-width:800px) {
    .form-group{
      width:80vw;
    

    }
  }
</style>
</div>


<?php include('footer.php');?>