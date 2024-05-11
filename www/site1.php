<html>
<head>
	<meta charset ="utf-8">
	<title></title>

</head>
<body>


<hr>
<?php
  $characterAge = 23;
  $characterName ="John";
  $phrase = "ıasgdaksdkjane asdasd";
  $age = 454;
  $gpa = 0.556;
  $boolean = true;
  echo "hello";
  echo $boolean;

  echo("hello world");
  echo "<hr>";
  echo "<h1>stuff</h1>";
  echo "my name is $characterName lmao <br>";
  echo "and my age is $characterAge";
  echo "<hr>";
  
  $bruh ="My Text here duh";
  echo strtoupper($bruh) ;
  echo strlen($bruh);
  echo"<br>";
  echo $bruh[4];
  echo "<hr>";
  
 
  $num = 3;
  echo $num++;
  
  echo sqrt(169);
  echo max(2,56);
  
  
?>
<hr>
<hr>


<form action="site1.php" method="get">
 Name: <input type="text" name="name">
 <input type="submit">
</form>
<br>

the box above says :<?php echo $_GET["name"] ?>

<hr>
<hr>

<h1>Hesap MAKİNESİ</h1>
<br>

<form action="site1.php" method="get">
<input type="number" name="num1">
<br>
<input type="number" name="num2">

<input type="submit">
</form>
Answer:<?php echo $_GET["num1"] + $_GET["num2"] ?>

<hr>
<hr>

<h1>MADLIBS?</h1>




</body>


</html>