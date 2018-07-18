<?php include 'ewp.php';
	
	
	include '../language/'.$_SESSION['lang'].'.php';
	
	
?>

	   	 
	  	
	  	  <hr / class="hidden">
	  	
	  	
      
          <!-- Name Your Pro  -->	
		  <lablel><?php echo $client_name;?>	
          <input type="text" id="clientName" placeholder="<?php echo $client_name;?>">
		  </label>

		  <!-- Create A New Event  -->
		  <label><?php echo $client_user;?>
		  <input type="text" id="clientUser" placeholder="<?php echo $client_user;?>">
          </label>
          
          <label><?php echo $client_pswd;?>
          <input type="password" id="clientPswd" placeholder="<?php echo $client_pswd;?>">
          </label>

          
		 <hr />
		
		  
		<hr / class="hidden">	  

		
   		
		



<?php include 'includes/footer.php';?>