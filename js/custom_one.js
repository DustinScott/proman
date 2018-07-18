$(document).on('click','#addnewprjt',function(e){
	
	e.preventDefault();
	$('#addnewprjt_dropdown').slideToggle();
	$('#chooseprjt_dropdown').slideToggle();
	
	$(this).hide();
	
	$('#addnewprjt_x').show();
	$('#existing_project').val([]);
});

$(document).on('click','#addnewprjt_x',function(e){
	
	e.preventDefault();
	$('#addnewprjt_dropdown').slideToggle();
	$('#chooseprjt_dropdown').slideToggle();
	
	$(this).hide();
	
	$('#addnewprjt').show();
	
	$('#existing_project').val([]);
	
});

// NEW EVENT : This script creates a new prevent and can also create a new project 
$(document).on('click','#createProject',function(e){
	
	e.preventDefault();
	var NameEvent = $('#NameEvent').val();
	var existing_project = $('#existing_project option:selected').text();
	var newPoject = $('#newPoject').val();
	var curClient = $('#curClient').val();
	var btnText = $('#createProject').html();
	
	if(existing_project === ''){ 
	 
	  	var project = newPoject;
		
	}else{
	 
	    var project = existing_project;
		
	}
	
	$.post('DB/createAction.php',{NameEvent:NameEvent,project:project,curClient:curClient},function(data){
		
		
		$('#ProjectViewer').load('includes/projects.php',{curClient:curClient});
		$('#existing_project,#NameEvent').val([]);
		$('#createProject').css('background','#00C13F');
		$('#createProject').hide().html(data).fadeIn(2000);
		$('#controllerOne').load('includes/eventAdder.php');
		
		
	});
	
	$('#curClient').val(curClient);
	
	$(document).on('click','#NameEvent',function(){
	$('#createProject').css('background','#c7c7cc').html(btnText);
	});
	
});

// NEW CLIENT : This script creates a new client
$(document).on('click','#newClientAdd',function(e){
	
	e.preventDefault();
	var clientName = $('#clientName').val();
	var clientUser = $('#clientUser').val();
	var clientPswd = $('#clientPswd').val();
	var btnText = $('#newClientAdd').html();
	
	//alert(clientName +' '+ clientUser + ' ' + clientPswd);
	
	
	$.post('DB/createClient.php',{clientName:clientName,
								  clientUser:clientUser,
								  clientPswd:clientPswd},function(data){
		
		$('#newClientAdd').css('background','#00C13F');
		$('#newClientAdd').hide().html(data).fadeIn(2000);
		$('#controllerOne').load('includes/clientAdder.php');
		
	});
	
	$(document).on('click','#clientName',function(){
	$('#newClientAdd').css('background','#c7c7cc').html(btnText);
	});
	
});



$(document).ready(function(){
	
	var curClient = $('#curClient').val();
	
	
	$('#controllerOne').load('includes/eventAdder.php');
	$('#controllerOne_buton').load('includes/eventAdder_btn.php');
	
});

$(document).ready(function(){

	$('#ProjectViewer').load('includes/projects.php');
	
});


$(document).on('click','#addnewclient',function(e){

	$('#controllerOne').load('includes/clientAdder.php');
	$('#controllerOne_buton').load('includes/clientAdder_btn.php');
	
});

$(document).on('click','.curClients',function(e){
	
	e.preventDefault();
	var client = $(this).attr('id');
    
    $('#curClient').val(client);
    
    $.post('sessions.php',{client:client},function(data){
	   
	$('#ProjectViewer').load('includes/projects.php');
	$('#ClientViewer').load('includes/clients.php');
    });
    
	
	
});







