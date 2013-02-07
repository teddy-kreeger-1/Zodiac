<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chinese Zodiac</title>
</head>
<body>
	 

	<?php
		$SignNames = array(
			"Rat",
			"Ox",
			"Tiger", 
			"Rabbit",
			"Dragon",
			"Snake",
			"Snake",
			"Horse",
			"Goat",
			"Monkey",
			"Rooster",
			"Dog",
			"Pig");


			echo "<table>\n";
			echo "<tr>\n";
			//for($i = 0; $i < 12; $i++) {
				//echo "<th>" . $SignNames[$i] . "<br /><img src='images/" . $SignNames[$i] . ".jpg' alt='" . $SignNames[$i] . "' title='" . $SignNames[$i] . "' /></th>\n";
			//}

			$i = 0;
			while($i < 12){
				echo "<th>" . $SignNames[$i] . "<br /><img src='images/" . $SignNames[$i] . ".jpg' alt='" . $SignNames[$i] . "' title='" . $SignNames[$i] . "' /></th>\n";
			$i++;
			}

			//for ($i = 1912; $i <= 2013; $i++){
				//if(($i - 1912) % 12 === 0){

			$i = 1912;

			while($i <= 2013){
				if(($i - 1912) % 12 === 0) {


			
					echo "</tr>\n";
					echo "<tr>\n";
				}
				echo "<td>" . $i . "</td>\n";
				$i++;
			}



			echo "</tr>";
			echo "</table>";

					


	?>
</body>
</html>