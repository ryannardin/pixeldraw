<?php
	function DrawForm()
	{
		?>
		<div class="itext">
			<center>
				<br>
				<br>
				<br>
				<form method="POST">
					<div class="label-float">	
						<input type=number id=width name=W placeholder='Width' required>
						<label for='width'>Width</label>
					</div>
					<div class="label-float">	
						<input type=number id=height name=H placeholder='Height' required>
						<label for='height'>Height</label>
					</div>
					<br>
					<br>
					<div class="label-float">	
						<input type=text id=Hex placeholder='Collor Hex' maxlength="6">
						<label for='Hex'>Color Hexadecimal</label>
					</div>
					<a class="button" onclick="AddCollor()">add color</a>
					<input type="text" id='Data' name="Colors" style=display:none; required>
				

					<table class="colors">
						<tr id='COLORTD'>
						
						</tr>
					</table>
					<br>
					<input class="button" type="submit" name="next" value="Start Draw">
				</center>
			</form>
		</div>
		<?php
	}
?>