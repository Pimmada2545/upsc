<meta charset="utf-8">
<?php
	// $host="localhost";
	// $user="root";
	// $pwd="Q2ijj48vgn";
	// $db="ablerex_ups";

    $host="localhost";
	$user="root";
	$pwd="";
	$db="ablerex_ups";

	$conn = mysqli_connect($host, $user, $pwd)or die("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_select_db($conn,"ablerex_ups") or die ("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้

?>