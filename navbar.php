<?php 

 ?>
 
 <!DOCTYPE html>
 <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
            
</head>
 <body>
    <?php require "popup.php" ?>
 	 <div class="nav">
        <a href="index.php" class="button" id="home">home</a>
        <button id="notification" ><i class="fas fa-envelope"></i></button>
        <a class="button" id="profile" onclick="document.getElementById('modal-wrapper').style.display='block'" ><i > profile</i></a>
        <ul class="options">
            <li><a href="groups.php"> groups </a></li>
            <li><a href="index.php#contact_us">help</a></li>
            <li> <a href="index.php#top">organise</a></li>
        </ul>
    </div>
 </body>
