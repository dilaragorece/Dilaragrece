<?php
	include 'connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crud Operation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>	
<body>
	<div class="container">
		


		</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">StudentId</th>
      <th scope="col">Class</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>


  	<?php

  $sql="Select * from `crud`";
  $result=mysqli_query($con,$sql);
  if($result){
  	
  	while($row=mysqli_fetch_assoc($result)){
  		$id=$row['id'];
  		$name=$row['name'];
  		$studentId=$row['studentId'];
  		$class=$row['class'];
  		echo ' <tr>
  		<th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$studentId.'</td>
      <td>'.$class.'</td>
      <td>
      <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
    </td>	
</tr>';


  	}
  	


  }	



  ?>

   

    
    
      

     </thead>
  <tbody>
  </tbody>
</table>

  </div>

</body>
</html>