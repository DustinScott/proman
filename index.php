<?php include 'includes/head.php';
	
	
	
	if(!empty($_GET['lang'])){
		
		$_SESSION['lang'] = $_GET['lang'];
	
	}else{
	
		$_SESSION['lang'] = 'en';
		
	
	}
	
	include 'language/'.$_SESSION['lang'].'.php';
	
	
?>

<!-- <input type="text" id="thecurloginsession" value="<?php echo $_SESSION['client']?>"> -->

<div class="sticky mainTopBar">
  
		  <nav class="top-bar mainTopBar" data-topbar role="navigation" data-options="sticky_on: large">
		
		  <section class="top-bar-section">
		    <!-- Right Nav Section -->
		    <ul class="right">
			   <li class="has-dropdown">
		        <a href="#"><i class="far fa-building"></i> Client </a>
		        <ul class="dropdown">
			      
			      <?php  
				      
				  $getClients = mysqli_query($con,"SELECT * FROM client");
				  while($cl = mysqli_fetch_array($getClients)){     
		          	echo '<li class="curClients" id="'.$cl['client_id'].'"><a href="#">'.$cl['client_name'].'</a></li>';
		          }
		          
		          ?>
		          
		          
		          <li class="text-center"><a href="#" id="addnewclient"><i class="fas fa-plus-circle"></i></a></li>
		        </ul>
		      </li> 
			    
		      <li class="has-dropdown">
		        <a href="#"><i class="fas fa-language fa-2x"></i></a>
		        <ul class="dropdown">
		          <li><a href="http://theoht.com/proman/status/?lang=en">EN</a></li>
		          <li class=""><a href="http://theoht.com/proman/status/?lang=sp">SP</a></li>
		        </ul>
		      </li>
		    
		    
		    
		    
		    </ul>
		    
		
		   
		  </section>
		</nav> 
  
</div>


	<br />
	<div class="large-2 columns" style="padding:0px;" id="controllerOneBox">
		  
			<!-- 	below the event adder is loaded on document ready	-->
		  	<div class="large-12 columns" id="controllerOne">
			</div>	
			
			<!-- 	BUTTON is loaded seperately for styling purposes.	-->
			 <div class="large-12 columns" id="controllerOne_buton">
			
			</div>		
			
    </div> 
      <div class="large-10 columns">
	  
	  
	  
			  <div id="ProjectViewer">
			
			  </div>
			  
		      <hr />
		      
		      <div id="ClientViewer">
		     
		   
			  </div>
     
    
     </div>
     

     


<?php include 'includes/footer.php';?>