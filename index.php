<head>

	<link rel="stylesheet" href="style.css"></head>

	

<body>

 <div class="form">

  <center>

  <label>Calculator</label>

 <form action="index.php" method="GET">

	<input type="number" name="num1" placeholder="Enter a number"><br>

	<input type="number" name="num2" placeholder="Enter a number"><br>

	<button type="submit" name="submit">equal</button><br>

</form>

</div>

</body>

<?php 

  echo $_GET['num1'] + $_GET['num2'];

?>
