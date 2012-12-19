<?php $array = explode('.', str_replace("/", "", $_SERVER['SCRIPT_NAME']));

$pagename= $array[0]; ?> 
 

 	
 	
<?php include("global/variables.php"); ?>

<?php include("global/connections.php"); ?>


    <title>Chris Jacobs: <?php echo $pagename ?></title>

</head>
<body>


<?php include("global/header.php"); ?>

<div id="wrap"> 

<?php include("global/scribble.php"); ?>

<div class="container" id="innerwrap"> <!--innerwrap-->

<?php include("global/logo.php"); ?>


<!--inside nav-->

<div class="row-fluid">
    <div class="span10 offset1">
        <p class="paragraphnav">
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