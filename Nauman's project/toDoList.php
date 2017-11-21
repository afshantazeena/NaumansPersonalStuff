<?php 
	
	//ECHO 'My name is Nauman';
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		
		<title>To Do List</title>
		<?php include ('includes/head.php');?>
		<!-- PERSONAL STYLESHEET -->
		<link rel="stylesheet" href="css/home.css" class="css" /> 
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript"> 
			$(document).ready(function (){
				//	alert('Hello world');
				$('#addProjects').button();
				$( "#projects" ).tabs();
				$( "#tabs" ).tabs();
				$("ul").sortable({axis:"x", containment:"#projects" });
				$("ol").sortable({axis:"y", containment:"#projects" });
				$('#addProjects').click(function(){
					$("#poject-dialog").dialog({width:400,  resizable:false, modal:true,
							buttons:{
									"Add New Project ":function(){
											var projectName = $('#newProject').val();
											$("<li><a href='#"+   projectName +   " '>" + projectName + "</a></li>").
											appendTo("#main");
											
											$("<ol id='" + projectName + "'></ol>").appendTo("#projects");
											$( "#projects" ).tabs("refresh");
											
											var tabCount = $('#projects .ui-tabs-nav li').length;
											$( "#projects" ).tabs("option","active", tabCount-1);
											
						
											$('#newProject').val("");
											$(this).dialog("close");
									
											
										
										},
									"Cancel ":function(){
											$('#newProject').val("");
											$(this).dialog("close");
										
										}
									
								}});
					
					});
				
				
				
			});
			
			
			
		</script>
	</head>
	<body>
		<?php include ('includes/menu.php');?>
		<br/>
		<div id="container">
			<h2>To Do List</h2>
			<button id="addProjects"> Add Projects</button>
			<div id="projects">
				<ul id="main">
					<li><a href="#personal">PERSONAL </a></li>
					<li><a href="#work">WORK </a></li>
				</ul>
				<ol id="personal">
					<li><input type="checkbox" name="" id="" />Doctor appointment</li>
					<li><input type="checkbox" name="" id="" />call the plumber</li>
				</ol>
				<ol id="work">
					<li><input type="checkbox" name="" id="" />Complete test case document</li>
					<li><input type="checkbox" name="" id="" />Meet project manager</li>
					<li><input type="checkbox" name="" id="" />Record jquery video</li>
				</ol>
			</div>
			<div id="poject-dialog" title="Add a project" style="display:none;">
				<label for="newProject">Project Name:</label> 
				<input type="text" name="" id="newProject" />
				
				
			</div>
			
		</div>
		
		
		<!-----   -------->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</body>
</html>

