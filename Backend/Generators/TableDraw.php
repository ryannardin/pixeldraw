<?php 

	function DrawTable($Width,$Height)
	{
		$Result="<div class=itext><center><table>";
		for ($y=0; $y <= $Height-1 ; $y++) { 
			$Result.= "<tr>";
			for ($x=0; $x <=$Width-1 ; $x++) { 
				$Result.= "<td id='y".$y."x".$x."' style='background-color:transparent;' onclick='DrawColor(".$x.",".$y.")'></td>";
			}
			$Result.= "</tr>";
		}
		$Result.= "</table></center></div>";
		return $Result;
	}
?>