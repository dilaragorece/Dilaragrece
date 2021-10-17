<?php
include 'connect.php';


      $id=$_GET['updateid'];
      $sql="Select * from `crud` where id=$id";
      $result=mysqli_query($con,$sql);
      $row=mysqli_fetch_assoc($result);
      $name=$row['name'];
      $studentId=$row['studentId'];
      $class=$row['class'];

	   if(isset($_POST['submit'])) {
		  $name=$_POST['name'];
		  $studentId=$_POST['studentId'];
		  $class=$_POST['class'];

		     $sql="update `crud` set id=$id,name='$name',studentId='$studentId',class='$class'where id=$id";
		     $result=mysqli_query($con,$sql);
		        if($result) {
		     	   header('location:registered users.php');
		        }else{
		           die(mysqli_error($con));
	            }
	    }
	         
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
h1{
	text-align: center;
	font-size: 7em !important;


}	
</style>

<body>
    <?php include 'navbar.php' ?>
    <div class="container ">
      
      <form action="<?php $_PHP_SELF?>"method="post">
            
           <h4 class="display-4 text-center"><h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
       </div>
        <?php } ?>  
     <div class="form-group">
            <label for="name"> Name :    <label>
           <input type="name" 
                class="form-control"
                id="name"
                name="name"
                value=<?php echo $name; ?>
           
                placeholder="Enter name">
        </div>

        <div class="form-group">
          <label for="studentId "> Student ID :  <label>
          <input type="studentId"
                class="form-control"
                StudentId="studentId"
                name="studentId"
                value=<?php echo $studentId; ?>
                placeholder="Id ">
        </div>

        <div class="form-group">
       <label for="inputState">Class: <label>
      <select id="inputState" 
              class="form-control"
              name="class"
              value=<?php echo $studentId; ?>
      	      
        </div>
   
    
     <option selected>Choose...</option>
        <option>A</option>
        <option>B</option>
      </select>
     <div class="form-group">
     </div>	
</form>
    </div> 
<button type="submit"
        class="btn btn-primary"
        name="submit">Update</button>
        
     </form>
</div>

   

</body>
</html>
