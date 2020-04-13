var Color='#000';
	function SetColor(color)
	{
		Color=color;
	}	
	function DrawColor(X,Y) 
	{	
		document.getElementById('y'+Y+'x'+X).style.background=Color;
	}