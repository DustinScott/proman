<?php include 'ewp.php';
	
	
	include '../language/'.$_SESSION['lang'].'.php';
	
	
?>

	<img src="http://leavirtual.com/assets/img/LeavVirtualLogo_web.png">
	  	<hr / class="hidden">
	  	
	  	
      
          <!-- Name Your Pro  -->	
		  <lablel><?php echo $prjt_name;?>	
          <input type="text" id="NameEvent" placeholder="<?php echo $prjt_name;?>">
		  </label>

		  <!-- Create A New Event  -->
		  <label id="chooseprjt_dropdown"><?php echo $prjt_choose_event;?>
		  
          <select style="margin:0px;" id="existing_project">
	          
	          <option disabled="disabled" selected="true"> <?php echo $choose;?></option>
	          <?php
		       
			  $queryProjects = mysqli_query($con,"SELECT event_project FROM Events GROUP BY event_project");
			  while($prjs = mysqli_fetch_array($queryProjects)){   
		      
		      	echo '<option value="'.$prjs['event_project'].'">'.$prjs['event_project'].'</option>';
		      
		      }    
	          ?>
	          
	     </select>
          
         </label>
          

          <label id="addnewprjt_dropdown" style="display:none;"><?php echo $prjt_event;?>
         
          <input type="text" id="newPoject" placeholder="<?php echo $prjt_event;?>">
          
          <input type="hidden" id="curClient" value="">
          
		 
		  </label>

          
		 <hr />
		  
		<a href="#" id="addnewprjt"><i class="fa fa-plus" aria-hidden="true"></i> <span><?php echo $prjt_event;?></span></a>
		<a href="#" id="addnewprjt_x"><i class="fa fa-mouse-pointer" aria-hidden="true"></i> <span><?php echo $prjt_choose_event;?></span></a>
		 
		  
		<hr / class="hidden">	  

		
   		
		



<?php include 'includes/footer.php';?>