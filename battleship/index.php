<?php
	define ('TITLE', 'Willkommen zum Schiffe versenken');
	include "incl\header.php";
	?>
	<!-- BODY -->
	<div class="container bg-dark">
		<h1>Willkommen beim Schiffe versenken!</h1>
		<div class="row">
			<div class="col-md-4">
				<form method="POST" action="game.php">
					<label for="playerName">Wie ist dein Name?
						<input type="text" name="playerName">
					</label>
					<label for="boardSize">Wie groß soll das Spielfeld sein?
						<select name=boardSize" size="3">
							<option value="10" selected>10x10</option>
							<option value="15" >15x15</option>
							<option value="20" >20x20</option>
						</select>
					</label>
					<button type="submit" name="submit" class="btn btn-success">Los geht's</button>
					
				</form>
			</div>
		</div>
		
	
	
	
	
<?php
	// container ends in footer
	include 'incl\footer.php';
	?>