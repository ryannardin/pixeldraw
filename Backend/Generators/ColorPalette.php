<?php 
	function DrawPalette($Colors)
	{
		$Result="<div class='ColorPalette'>";
		$Size=count(explode(';',$Colors));
		for ($i=0; $i < $Size-1 ; $i++) { 
			$color=explode(';',$Colors)[$i];
			$Result.="<a class=color style='background-color:#".$color.";' onclick=SetColor('#".$color."');></a>";
		}
		$Result.="</div>";
		return $Result;
	}

?>