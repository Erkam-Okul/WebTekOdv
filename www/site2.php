<html>
<head></head>
<body>
 <form action="site2.php" method="post">
	Password: <input type="password" name="password">
	<input type="submit">
 </form>
<br><br>

	<?php
		$friends = array("noone","my brother","nobody","no one at all");
		echo $friends[1];
		echo $_POST["password"];
	?>
	<hr>
	<hr>
	
	<form action="site2.php" method="post">
	
	
		Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
		Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
		Pears: <input type="checkbox" name="fruits[]" value="pears"><br>

		<input type="submit">
	</form>
	
	<?php
		$fruits =$_POST["fruits"];
		echo $fruits[0];
	
	?>
	<br>
	<hr>
	<br>
	<h1>Assosicative arrays</h1>
	<?php
	$grades = array("Jim"=>"A+","Pim"=>"B-","Oscar"=>"D");
	
	echo $grades["Jim"];
	
	?>
	
	
	
</body>
</html>