<?php
session_start()
?>

<!DOCTYPE html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        home
    </title>
    <link rel="stylesheet" type="text/css" href="index.css">
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src="bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
            
</head>
<body style="background-image:url('bg.jpg')"> 
    <?php require 'navbar.php' ?>
    <div class="info">
      <p><img src="transport.jpg" id="image"></p>
      <p id="info" class="normal">
          This is where we will write about how to use the website and its features?
   

    </div>
    <div class="about_us">
        <p class="normal">
            maybe here about the complany and its values ? xD
        </p>
    </div>
    <div id="contact_us">

        <p class="normal" id="contact_us">

            You know, made by us contact us or whatever.
            
        </p>
    </div>
   
</body>

</html>

