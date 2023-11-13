
<meta charset="utf-8">
<?php
if (isset($_GET['did'])){
	include("condb.php");
	$sql = "DELETE FROM `devices`where `d_id`='{$_GET['did']}'";
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	
	
	echo "<script>";
	echo "alert('ยืนยันการลบ');";
	echo "window.location='home.php';";
	echo "</script>";
	
	}

?>