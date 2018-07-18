<?php include 'ewp.php';
	

include '../language/'.$_SESSION['lang'].'.php';

$getEvents = mysqli_query($con,"SELECT * FROM Events WHERE event_client ='".$_SESSION['client']."'");
echo '<ul class="small-block-grid-5	">';
while($prj = mysqli_fetch_array($getEvents)){

	
		
		echo '<li class="text-center projectsDisplay">'.$prj['event_project'].'</li>';
 
	
}

echo '</ul>';

?>







<?php include 'includes/footer.php';?>