<?php 

	//$name = $_GET['myname'];
	$name = $_POST['myname'];

	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['myname'];
		if($name != ""){
			echo $name;
		}else{
			echo "Null value...";
		}
	}

?>

