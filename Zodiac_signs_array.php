<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Zodiac Signs Array</title>  
</head>

<body>

	<h1>The Zodiac Signs</h1>

 <?php
 
		$SignsArray = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Sheep", "Monkey", "Rooster", "Dog", "Pig");
 
 
			foreach ($SignsArray as $Sign) {

			echo "$Sign" ;
			}
			?>

	

	<?php
    $PicArray = array("images/rat.jpg", "images/ox.jpg", "images/tiger.jpg",);
      foreach ($PicArray as $Img) {
        echo "$Img";
      }

      ?>




 

</body>
</html>