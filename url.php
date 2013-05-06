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

	
		<div class="row-fluid">
					<div class="span12 top_sec_nav" style="padding: 0 17px 0 17px; margin-bottom: 26px;">
						
		
							<ul>
							  <li class="span4">
		
							  <a href="dotcomguy.php"><div class="littlenavicon">
							  		<img src="img/navicons/dotcomguy.png"><span class="navicontype">DotComGuy</span>                  
							  </div></a>			   
							  </li>
		
		
							  <li class="span4">
		
							  <a href="yoostarapp.php"><div class="littlenavicon">
							  		<img src="img/navicons/yoostarapp.png"><span class="navicontype">Yoostar App</span>                  
							  </div></a>			   
							  </li>
		
		
							  <li class="span4">
		
							  <a href="afi.php"><div class="littlenavicon">
							  		<img src="img/navicons/afi.png"><span class="navicontype">AFI/abc Chat Application</span>                  
							  </div></a>			   
							  </li>
							  
		
							  <li class="span4">
							  <a href="ipg.php"><div class="littlenavicon">
							  		<img src="img/navicons/ipg.png"><span class="navicontype">IPG Emerging Media Lab</span>                  
							  </div></a>			   
							  </li>
							  
							  <li class="span4">
							  <a href="abc.php"><div class="littlenavicon">
							  		<img src="img/navicons/abc.png"><span class="navicontype">abc Entertainment</span>                  
							  </div></a>	   
							  </li>
							  
							  
							  <li class="span4">
							  <a href="yoostartour.php"><div class="littlenavicon">
							  		<img src="img/navicons/yoostartour.png"><span class="navicontype">Yoostar Tour</span>                  
							  </div></a>			   
							  </li>
							  
							  </li>
							  <li class="span4">
							  <a href="alpine.php"><div class="littlenavicon">
							  		<img src="img/navicons/alpine.png"><span class="navicontype">Alpine Experience the Drive</span>                  
							  </div></a>			   
							  </li>
						
						
						  </ul>
			
					
							
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