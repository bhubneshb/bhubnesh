<?php
/**
 * 
 */
class human
{
	public $name="bhubnesh";
	
	function Disp()
	{
		return 'hiiii i m method';
	}
}

$obj=new human;

echo $obj->name;
echo "<br>";
echo $obj->disp();
?>