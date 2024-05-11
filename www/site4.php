<html>
<head></head>

<body>

	<form action ="site4.php" method="post">
	What was your grade?
	<input type="text" name="grade">
	<input type="submit">
	</form>
	
	
	<?php
	
	$grade=$_POST["grade"];
	switch($grade){
		case "A":
		 echo "holy moly";
		 break;
		case "B":
		 echo "meh";
		 break;
		case "C":
		 echo "get a grip";
		 break;
		default:
		 echo "not a grade";
	}
	
	?>
<hr>
<br>
	
	<?php
		$index=1;
		
		while($index<=10){
			
			echo "hey";
			echo "$index";
			$index++;
		}
		$luckynums = array(12,13,16,56,78);
		
		echo "<br>";
		echo "LUCKYNUMBERS!!!  _";
		for($i=0;$i<count($luckynums);$i++){
			echo "<-\ $luckynums[$i] /->_ ";
		}
		
	?>



</body>

</html>