<?php
  
  session_start();

?>
<html>
    <head>
        <title>ReNotifier Demo - Standard Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>   
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        
        <div class="row">
        
        <div class="col-xs-12">

        <div class="text-center"><a href="https://renotifier.com"><img src="https://renotifier.com/static/img/logo_blue_160px.png" style="width:160px; margin-top:15px;"></a></div>

        <h1 class="text-center">Thank you!</h1>
        </div>
        </div>

        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <br><br>
        <p class="text-center">Thank you for filling out this simple form! Here you can see the data that you have provided:</p>
        
        <br><br>
        <strong>Email address:</strong> <?=$_SESSION['email']?><br>
        <strong>Favorite color:</strong> <?=$_SESSION['color']?><br>
    </body>
</html>
