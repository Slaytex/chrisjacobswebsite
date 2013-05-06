<?php $currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$array = explode('.',$parts[count($parts) - 1]);

$pagename= $array[0]; ?> 
 

 	
 	
<?php include("global/variables.php"); ?>

<?php include("global/connections.php"); ?>


    <title>Chris Jacobs: <?php echo $pagename ?></title>

</head>
<body class="mainindex">


<?php include("global/header.php"); ?>

<div id="wrap"> 

<div class="container" id="innerwrap"> <!--innerwrap-->

<?php include("global/logo.php"); ?>


<!--inside nav-->

	<div class="visible-desktop visible-phone hidden-tablet">
		<div class="row-fluid">
			<div class="span12">
				<div style="padding:0 40px;">
					<ul>
					  <li class="span3">
					  <div class="littlenavicon">
					  		<img src="img/navicons/alpine.png"><span class="navicontype">Alpine Electronics</span>                  
					  </div>			   
					  </li>
					  <li class="span3">
					  <div class="littlenavicon">
					  		<img src="img/navicons/yoostarapp.png"><span class="navicontype">Yoostar App</span>                  
					  </div>			   
					  </li>
					  <li class="span3">
					  <div class="littlenavicon">
					  		<img src="img/navicons/abc.png"><span class="navicontype">abc Digital</span>                  
					  </div>			   
					  </li>
					  <li class="span3">
					  <div class="littlenavicon">
					  		<img src="img/navicons/ipg.png"><span class="navicontype">Interpublic Group</span>                  
					  </div>			   
					  </li>
				  </ul>
	
				</div>
					
				</div>
			</div>
	
	<div class="row-fluid" style="margin-bottom: 30px;">
			<div class="span12">
				<div style="padding:0 40px;">
					<ul>
					  <li class="span3">
					  <div class="littlenavicon">
					  		<img src="img/navicons/yoostartour.png"><span class="navicontype">Yoostar Tour</span>                  
					  </div>			   
					  </li>
					  <li class="span3">
					  <div class="littlenavicon">
					  		<img src="img/navicons/afi.png"><span class="navicontype">AFI Chat</span>                  
					  </div>			   
					  </li>
					  <li class="span3">
					  <div class="littlenavicon">
					  		<img src="img/navicons/dotcomguy.png"><span class="navicontype">DotComGuy</span>                  
					  </div>			   
					  </li>
					  <!--<li class="span3">
					  <div class="littlenavicon">
					  		<img src="img/navicons/alpine.png"><span class="navicontype">IPG LAB</span>                  
					  </div>			   
					  </li>-->
				  </ul>
	
				</div>
					
				</div>
			</div>
		</div>
		
		<div class="hidden-desktop visible-tablet hidden-phone">
			<div class="row-fluid">
				<div class="span12">
					<div style="padding:0 40px;">
						<ul>
						  <li class="span3">
						  <div class="littlenavicon">
						  		<a href="alpine.php"><img src="img/navicons/alpine.png"><span class="navicontype">Alpine</span></a>              
						  </div>			   
						  </li>
						  <li class="span3">
						  <div class="littlenavicon">
						  		<a href="alpine.php"><img src="img/navicons/yoostarapp.png"><span class="navicontype">Yoostar</span></a>                
						  </div>			   
						  </li>
						  <li class="span3">
						  <div class="littlenavicon">
						  		<img src="img/navicons/abc.png"><span class="navicontype">abc TV</span>                  
						  </div>			   
						  </li>
						  <li class="span3">
						  <div class="littlenavicon">
						  		<img src="img/navicons/ipg.png"><span class="navicontype">IPG</span>                  
						  </div>			   
						  </li>
					  </ul>
		
					</div>
						
					</div>
				</div>
		
		<div class="row-fluid" style="margin-bottom: 30px;">
				<div class="span12">
					<div style="padding:0 40px;">
						<ul>
						  <li class="span3">
						  <div class="littlenavicon">
						  		<img src="img/navicons/yoostartour.png"><span class="navicontype">Yoostar</span>                  
						  </div>			   
						  </li>
						  <li class="span3">
						  <div class="littlenavicon">
						  		<img src="img/navicons/afi.png"><span class="navicontype">AFI</span>                  
						  </div>			   
						  </li>
						  <li class="span3">
						  <div class="littlenavicon">
						  		<img src="img/navicons/dotcomguy.png"><span class="navicontype">DotComGuy</span>                  
						  </div>			   
						  </li>
						  <!--<li class="span3">
						  <div class="littlenavicon">
						  		<img src="img/navicons/alpine.png"><span class="navicontype">IPG LAB</span>                  
						  </div>			   
						  </li>-->
					  </ul>
		
					</div>
						
					</div>
				</div>
			</div>
		
	

<!--end inside nav-->


<div id="main">

<?php include($pagename."/body.php"); ?>

<?php include($pagename."/thumbnails.php"); ?>

<?php include("global/footer.php"); ?>

</div> <!--main-->	
</div> <!--innerwrap-->
</div> <!--wrap-->

<?php include("global/bottomscripts.php"); ?>