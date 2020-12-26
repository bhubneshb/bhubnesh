<?php 
class a
{
public $name="bhubnesh behera";
public $accountno="9658380396";
public $dob="29.09.1998";
public $occupation="student";
public $ifsccode="axis12345";

function cashcheak()
{
	echo "account balance is 1000";
}

function cashwithdraw()
{
	echo "withdrawed amount 1000";
}

function cashckea()
{
	echo "current balance is 0.00";
}
}

class b extends a
{
	public $x="10";
}

$obj=new b();

$obj->cashcheak(); echo "<br>";
$obj->cashwithdraw(); echo "<br>";
$obj->cashckea(); echo "<br>";

 echo "<br>"; echo "<br>"; echo "<br>";

echo "name = ".$obj->name; echo "<br>";
echo "accountno = ".$obj->accountno;echo "<br>";
echo "dob = ".$obj->dob;echo "<br>";
echo "occupation = ".$obj->occupation;echo "<br>";
echo "ifsccode = ".$obj->ifsccode;echo "<br>";

echo "x = ".$obj->x;echo "<br>";
 
 ?>
