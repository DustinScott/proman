<?php include '../includes/ewp.php';
	
	include '../language/'.$_SESSION['lang'].'.php';
	
	if(!empty($_POST['NameEvent'])){
		$NameEvent = $_POST['NameEvent'];
	}
	
	if(!empty($_POST['project'])){
		$project = $_POST['project'];
	}
	
	if(!empty($_POST['curClient'])){
		$event_client = $_POST['curClient'];
	}
	
	$addAction = mysqli_query($con,"INSERT INTO Events(event_name,event_project,event_client)VALUE('$NameEvent','$project','$event_client')");
	if($addAction){
		echo '<span style="color:#fff;"><i class="far fa-check-circle"></i> '.$sccss.'</span>';
		
	}
	
	
	
	
	
?>