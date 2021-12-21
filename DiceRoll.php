<!-- Chapter 2 Practice Exercise -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dice Roll</title>
</head>
<body>
	<h1>Let's Roll Some Dice!</h1>
	<?php
		$FaceNamesSingular = array("one", "two", "three", "four", "five", "six");
		$FaceNamesPlural = array("ones", "twos", "threes", "fours", "fives", "sixes");

		// definition of CheckForDoubles() function
		function CheckForDoubles($Die1, $Die2) {
			global $FaceNamesSingular;
			global $FaceNamesPlural;
			$ReturnValue = false;

			if($Die1 == $Die2) {
				echo "The roll was double ", $FaceNamesPlural[$Die1-1], ".<br/>";
				$ReturnValue = true;
			}
			else {
				echo "The roll was a ", $FaceNamesSingular[$Die1 - 1], " and a ", $FaceNamesSingular[$Die2 - 1], ".<br/>";
				$ReturnValue = false;
			}

			return $ReturnValue;
		}

		// definition of the DisplayScoreText() function
		function DisplayScoreText($Score) {
			switch($Score) {
				case 2:
					echo "You rolled snake eyes!<br/>";
					break;
				case 3:
					echo "You rolled a loose deuce!<br/>";
					break;
				case 5:
					echo "You rolled a fever five!<br/>";
					break;
				case 7:
					echo "You rolled a natural!<br/>";
					break;
				case 9:
					echo "You rolled a nina!<br/>";
					break;
				case 11:
					echo "You rolled a yo!<br/>";
					break;
				case 12:
					echo "You rolled boxcars!<br/>";
					break;				
			}
		}

		$Dice = array();
		$DoublesCount = 0;
		$RollNumber = 1;

		while($RollNumber <= 5) {
			$Dice[0] = rand(1, 6);
			$Dice[1] = rand(1, 6);
			$Score = $Dice[0] + $Dice[1];
			echo "<p>";
			echo "The total score for roll $RollNumber was $Score.<br/>";
			$Doubles = CheckForDoubles($Dice[0], $Dice[1]);
			DisplayScoreText($Score);
			echo "</p>";
			// check the $Doubles variable so we can increase $DoublesCount
			if($Doubles)
				++$DoublesCount;
			++$RollNumber;
		}

		// write a summary of how many doubles were rolled
		echo "<p>Doubles occured on $DoublesCount of the five rolls.</p>";
	?>
</body>
</html>