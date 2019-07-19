<?php
	define ('TITLE', 'Schiffe versenken');
	include "incl\header.php";
	$playerName = filter_input(INPUT_POST, 'playerName', FILTER_SANITIZE_STRING);
	$boardSize = filter_input(INPUT_POST, 'boardSize', FILTER_SANITIZE_STRING);

	
	function displaySquare($char) {
		echo "<a style='width: $boardSize; height: $boardSize' 
			if ($char !== \"\") {
				echo 'class=\'inactiveLink bg-light\'';
			} else {
				echo 'class=\'bg-secondary\'';
			}
		>$char</a>";
	}
	
	function createGameBoard($size) {
		$size++;
		// start the array at 1st index
		$aToj = array(1 => 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't');
		
		// for every row
		for ($row=0; $row<=$size; $row++) {
			// if first or last row print a space
			if ($row === 0 || $row === $size) {
				displaySquare("");
				// then print numbers for each column
				for ($col=1; $col<$size; $col++) {
					displaySquare("$col");
				} 
			} else {
				// if row 2 to row size print a letter for each row
				displaySquare("$aToj[$row]");
				// print the desired whitespace
				for ($col=1; $col<$size; $col++) {
					displaySquare("");
				} 
				// and print that letter again
				displaySquare("$aToj[$row]");
			}
			// finally change to new line
			echo "\n";
		}
	}
?>

	<!-- BODY -->
	<div class="container bg-dark">
		<h1>Willkommen beim Schiffe versenken!</h1>
		<div class="row">
			<div class="col-md-4">
				<p>Spieler 1: <?php echo $playerName ?></p>
				<p>Spieler 2: CPU</p>
			</div>
			<div class="col-md-4">
				<form method="POST" action="">
					
					<button type="submit" name="submit">Change Board</button>
				</form>
				<?php
					createGameBoard($boardSize);
				?>
					
			</div>
		</div>
	<!-- container ends in Footer -->
	
	
	
	
<?php
	include 'incl\footer.php';
	?>