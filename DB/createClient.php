<?php include '../includes/ewp.php';
	
	include '../language/'.$_SESSION['lang'].'.php';
	
	if(!empty($_POST['clientName'])){
		$clientName = $_POST['clientName'];
	}
	
	if(!empty($_POST['clientUser'])){
		$clientUser = $_POST['clientUser'];
	}
	
	if(!empty($_POST['clientPswd'])){
		$clientPswd = $_POST['clientPswd'];
	}
	
	$addClient = mysqli_query($con,"INSERT INTO client(client_name,client_user,client_pswd)
												VALUE('$clientName','$clientUser','$clientPswd')");
	if($addClient){
		echo '<span style="color:#fff;"><i class="far fa-check-circle"></i> '.$sccss.'</span>';
		
	}
	
	
	
	
	
?>