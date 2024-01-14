<?php include('header.php');?>
<?php include('db.php');?>
<div class="box1">
  <h2 style='float:left;'>All Students</h2>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style='float:right;'>
 ADD STUDENTS
</button>

</div>
  <table class='table table-hover table-borderd table-striped'>
    <thead>
      <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Update</th>
        <th>Delete</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      
      $query="select * from `student`  ";
      $result=mysqli_query($connection, $query);
      if(!$result){
        die("Query Failed".mysqli_error());
      }
      else{
        while ($row= mysqli_fetch_assoc($result)) {
          ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><a href="update_page.php?id=<?php echo $row['id']; ?>"class='btn btn-success'>Update</a></td>
        <td><a href="delete_page.php?id=<?php echo $row['id']; ?>"class='btn btn-danger'>Delete</a></td>
      </tr>
          <?php
        }
      }
      ?>
      
    </tbody>
  </table>
  <?php 
  if(isset($_GET['message'])){
    echo "<h6>".$_GET['message'] ."</h6>";
  }
  ?>
  <?php 
  if(isset($_GET['insert_msg'])){
    echo "<h4>".$_GET['insert_msg'] ."</h4>";
  }
  ?>
  <?php 
  if(isset($_GET['update_msg'])){
    echo "<h4>".$_GET['update_msg'] ."</h4>";
  }
  ?>
  <?php 
  if(isset($_GET['delete_msg'])){
    echo "<h4>".$_GET['delete_msg'] ."</h4>";
  }
  ?>
<!-- Modal -->
<form action='insert_data.php'method='POST'>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ADD STUDENTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
          <div class="form-group">
            <label for="f_name">First name</label>
            <input type="text" class="form-control" name="f_name" placeholder='enter first name'/>
          </div>
          <div class="form-group">
            <label for="l_name">Last name</label>
            <input type="text" class="form-control" name="l_name" placeholder='enter last name'/>
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" placeholder='age'/>
          </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name='add_students' value='ADD'>
      </div>
    </div>
  </div>
</div>
</form>
  <?php include('footer.php');?>