<head>
<body>


<?php
	function sayHi($name){
		echo "BYE $name hope you got what you deserved you dumbass";
		
	}
	
	sayHi("erkam");
	function cube($num){
		return $num *$num *$num;
	}

	$cubeResult = cube(4);
	echo "<br>";
	echo $cubeResult;
?>
	<?php
	$isMale = true;
	$isShort= true;
	if($isMale && $isShort){
		echo "Youarefucked";
		
	}else{
		echo "You are not fucked";
	}
	
	?>
<br>

<?php
function getMax($num1,$num2){
	if($num1>$num2){
		echo "$num1";
		
	}elseif($num1<$num2){
		echo "$num2";
	}else{
		echo "uncomparable";
	}
	
}

echo getMax(5,89);

?>
<hr>
<h1>CALC</h1>
<hr>
<form action ="site3.php" method="post">
First-Num__:<input type="number" name="num1"><br>
Op-________:<input type="text" name ="op"><br>
Second Num:<input type="number" name="num2"><br>
<input type="submit">
  </form>


<?php

$num1=$_POST["num1"];
$num2=$_POST["num2"];
$op = $_POST["op"];

if($op == "+"){
	echo $num1+$num2;
}elseif($op == "-"){
	echo $num1-$num2;	
}elseif($op == "/"){
	echo $num1/$num2;	
}elseif($op == "*"){
	echo $num1*$num2;	
}else {
	echo "INVALID";
}

?>





</body>



</head>