<?php
$connect = new mysqli("localhost","root","","dbblog");

if($connect) {
	//echo "Conection Successfull";
} else {
	echo "Connection Failed";
	exit();
}