<html>
<head>
<title >Online Registration</title>

	
	<link rel="stylesheet" type="text/css" href="formstyle.css" />
	</head>
	
<body>


<div class="myDiv">
<h1>Insert</h1>
<br><br><br>
<center>
<div  style="border-radius: 15px; width:300px;height:350px;border: 5px outset black;">
 <form action="update.php" method="post">
    <label for="fname">Task</label>
    <input type="text" id="fname" name="task"  placeholder="Your Task.." required>
	<label for="lname">Progress</label>
	 <select id="country" name="pr">
      <option value="YES">YES</option>
      <option value="NO">NO</option>
     
    </select>
	
   
  
    <input type="submit" value="Submit">
  </form>

</div>
</center>
</div>
</body>
</html>