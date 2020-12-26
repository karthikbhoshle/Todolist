<?php 
 echo '<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>To-do-list</title>
  </head>
  <body >
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="vishnu.jpg" alt="Girl in a jacket" width="60" hieght="60" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">List</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="add.php">Add</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="add.php">Update</a>
        </li>
      </ul>
       <form class="d-flex" action="serch.php" method="post">
        <input class="form-control me-2" type="search" name="pr" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
	<table  class="table" >
  <thead>
    <tr class="table-dark">
      <th scope="col">Task</th>
      <th scope="col">Progress</th>
      
    </tr>
  </thead>
  <tbody>';

$con = new mysqli("localhost", "root", "", "Todolist") or die("Failed to connect to MySQL: " . mysql_error());
$s="select * from List";
$result=mysqli_query($con,$s);
$bran=$_POST['pr'];

while($row = mysqli_fetch_assoc($result)) {
	if ($row["task"]==$bran)
		{
			
echo '
	        <tr class="table-success">
      <th scope="row">' . $row["task"] . '</th>
      <td>' . $row["Done"] . '</td>
     
    </tr>';


 
		}
		
    

}
   
echo '</table>
  </body>
</html>';
?>