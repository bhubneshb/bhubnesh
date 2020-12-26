<?php
class bill
{
public $name="$_GET['first']";
public $addr="$_GET['second']";
public $phno="$_GET['third']";
public $pin="$_GET['fourth']";
public $model="$_GET['fifth']";
public $price="$_GET['sixth']";


}

$obj=new bill();

if (isset($_GET['submit']))
	{
		echo "costomer name = ".$obj->name; echo "<br>";
        echo "costomer address = ".$obj->addr;echo "<br>";
        echo "costomer mobile no. = ".$obj->phno;echo "<br>";
        echo "costomer pin no. = ".$obj->pin;echo "<br>";
        echo "product model no. = ".$obj->model;echo "<br>";
        echo "product price = ".$obj->price;echo "<br>";
	}

?>