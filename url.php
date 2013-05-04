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
    <div class="span12">
        <p class="paragraphnav visible-desktop hidden-phone visible-tablet">
        <a class="" href="<?php echo $navurl1 ?>"><?php echo $nav1 ?></a>
        
        <span class="pipenav"> | </span>
        
        <a class="" href="<?php echo $navurl2 ?>"><?php echo $nav2 ?></a>
        
        <span class="pipenav"> | </span>
        
        <a class="" href="<?php echo $navurl3 ?>"><?php echo $nav3 ?></a>
        
        <br />
        
        <a class="" href="<?php echo $navurl4 ?>"><?php echo $nav4 ?></a>
        
        <span class="pipenav"> | </span>
        
        <a class="" href="<?php echo $navurl5 ?>"><?php echo $nav5 ?></a>
        
        <span class="pipenav"> | </span>
        
        <a class="" href="<?php echo $navurl6 ?>"><?php echo $nav6 ?></a>
        
        <br />
             
        <a class="" href="<?php echo $navurl7 ?>"><?php echo $nav7 ?></a>
        
        </p>	
        
        <p class="paragraphnav hidden-desktop hidden-tablet visible-phone">
        <a class="" href="<?php echo $navurl1 ?>"><?php echo $nav1 ?></a>
        
         <br />
        
        <a class="" href="<?php echo $navurl2 ?>"><?php echo $nav2 ?></a>
        
        <br />
        
        <a class="" href="<?php echo $navurl3 ?>"><?php echo $nav3 ?></a>
        
        <br />
        
        <a class="" href="<?php echo $navurl4 ?>"><?php echo $nav4 ?></a>
        
        <br />
        <a class="" href="<?php echo $navurl5 ?>"><?php echo $nav5 ?></a>
        

        
        <a class="" href="<?php echo $navurl6 ?>"><?php echo $nav6 ?></a>
        
        <br />
             
        <a class="" href="<?php echo $navurl7 ?>"><?php echo $nav7 ?></a>
        
        </p>	
        
        
        
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