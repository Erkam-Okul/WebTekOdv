<html>
<head></head>
<body>

<?php

	class Movie {
		
		public	$title;
		private $rating;
		
		function __construct($title,$rating){
			$this->title = $title;
			$this->rating =$rating;
			
		}
		
		function getRating(){
			return $this->rating; 
		}
	
		function setRating($rating){
		
			$this ->rating = $rating;
			
		}
		
	}
$avangers = new Movie("Avanger","PG");
	
	$avangers->setRating("PG");
	echo $avangers->getRating();
?>






</body>



</html>