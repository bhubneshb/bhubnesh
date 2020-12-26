<?php
class a
{
  function name()
{
echo "my name is bhuvi";
}

}

class b extends a
{
public $a="lipsa";
}

class c extends a
{
	public $b="bhubnesh";
}

class d extends a
{
	function class()
{
echo "bca";
}

}

$obj->name(); echo "<br>";
$obj->class(); echo "<br>";

echo "<br>"; echo "<br>"; echo "<br>";

echo "b = ".$obj->a; echo "<br>";
echo "c = ".$obj->b;echo "<br>";

?>