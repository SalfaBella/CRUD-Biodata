<?php 
	//ini untuk header
	require_once('partial/header.php');
?>

<?php
	$mod = (isset($_GET['mod'])) ? $_GET['mod'] : 'login';
	$act = (isset($_GET['act'])) ? $_GET['act'] : 'login';
	
	$filename = 'module/'.$mod.'/'.$act.".php";
	
	if(file_exists($filename)){
		require_once($filename);
	}else{
		echo "NO MODULE";
	}

?>

<?php 
	//ini untuk header
	require_once('partial/footer.php');
?>
