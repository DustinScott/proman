<?php include 'ewp.php';

include '../language/'.$_SESSION['lang'].'.php';

$_SESSION['client'];	
 

$getClientDtls = mysqli_query($con,"SELECT * FROM client WHERE client_id =".$_SESSION['client']."");
while($client = mysqli_fetch_array($getClientDtls)){

	echo $client['client_name'];
	
}
?>







<?php include 'includes/footer.php';?>