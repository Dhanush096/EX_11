<?php
$sname = "localhost";
$uname = "root";
$pword = "";
$dbname = "exlv";

//$c = new mysqli($sname,$uname,$pword);
$c = new mysqli($sname,$uname,$pword,$dbname);

if($c->connect_error)
{
	echo "We are so Sorry, DB not connected";
}
else
{
	echo "The Connection done";
}

$sql = "drop database exlv";
$sql1 = "create database exlv";
$nm = $_POST['gnm'];
$em = $_POST['ems'];
$st = $_POST['msg'];

$sto = "insert into contacts values('".$nm."','".$em."','".$st."')";

if($c->query($sto)===true)
{
	echo "<br>All your data's has been saved in the DB,herafter there is no needs of Worring.";
}
?>
