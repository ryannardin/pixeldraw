function AddCollor(){
	var value=document.getElementById('Hex').value;
	if(isHex(value))
	{
		var colorsset=document.getElementById('COLORTD').innerHTML;
		document.getElementById('COLORTD').innerHTML=colorsset+'<td style="background-color:#'+value+';"></td>';
		
		document.getElementById('Data').value+=value+';';

		

	}else
	{
		alert('Enter valid Hexadecimal Value');
	}
	document.getElementById('Hex').value='';
}
function isHex (hex) {
  return typeof hex === 'string'
      && hex.length === 6
      && !isNaN(Number('0x' + hex))
}