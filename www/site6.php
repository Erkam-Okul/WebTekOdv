<html>
	<head>
<title></title>
	</head>
	<body>
	
		<?php
			class Book{
				var $name;
				var $author;
				var $pagect;
				
					function __construct($aTitle,$aAuthor,$aPages){
					$this->name = $aTitle;
					$this->author = $aAuthor;
					$this->pagect = $aPages;
					}
					function bigBook(){
						if($this->pagect >= 23){
							return "true";
							}return "false";
						
					}
			
		}
			
		
			
		$book1 = new Book("Harry Goobert","MR. Peanuts",45);
		
		$book1->name ="Harry Goobler";
		$book1->author="JK.Goobler";
		$book1->pagect="43";
		
		echo $book1->name;
		
		$book2 = new Book("DOUNE","Martin Schorseizi",76);
		
		echo $book2->name;
		echo $book2->author;
		echo $book2->pagect;
	
		echo $book1->bigBook();
		?>
	
	

	
	</body>
	</html>