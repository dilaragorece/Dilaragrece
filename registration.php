<?php

	$connection=mysqli_connect('localhost','root','dilara1998','crudoperation');
	if($connection) {

	   if(isset($_POST['submit'])) {
		  $name=$_POST['name'];
		  $studentId=$_POST['studentId'];
		  $class=$_POST['class'];

		     $sql="INSERT INTO crud (name,studentId,class) VALUES('$name','$studentId','$class')";
		     $done=$connection->query($sql);
		        if($done) {
		     	   header('location:registered users.php');
		        }else{
		           echo "SOMETHİNG WENT WRONG";
	            }
	    }
   }else{
	   echo "Connection failed";
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
                value="<?php if(isset($_GET['name']))
                                echo ($_GET['name']); ?>"
           
                placeholder="Enter name">
        </div>

        <div class="form-group">
          <label for="studentId "> Student ID :  <label>
          <input type="studentId"
                class="form-control"
                StudentId="studentId"
                name="studentId"
                value="<?php if(isset($_GET['studentID']))
                                echo ($_GET['studentID']); ?>"
                placeholder="Id ">
        </div>

        <div class="form-group">
       <label for="inputState">Class: <label>
      <select id="inputState" 
              class="form-control"
              name="class"
      	      value="<?php if(isset($_GET['class']))
                                echo ($_GET['class']); ?>"
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
        name="submit">Submit</button>
        
     </form>
</div>

   

</body>
</html>


