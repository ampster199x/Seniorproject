<meta charset="utf-8">
<?php 
	require_once('../Connections/condb.php');
	$ID  = $_GET["ID"];
	$sql = "DELETE FROM tbl_admin WHERE admin_id=$ID";

	$result = mysql_db_query($database_condb, $sql) or die ("Error in query: $sql " . mysql_error());	
	
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "window.location = 'emp.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'emp.php'; ";
	echo "</script>";
}
?>