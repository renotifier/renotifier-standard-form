<?php
  
  // in this demo we use the session to store the data
  session_start();

  // Here we handle the form if it was posted!
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Just to be safe, we do a server side validation of the email!
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // The email is valid! Here we can save the email and the color to a database
        // or even add it to an email list such as mailchimp via their API.

        // In our use case we will save it to the $_SESSION variable so
        // that we may show it to you on the thankyou page!
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['color'] = $_POST['color'];

        // We redirect the user to the thank you page.
        Header("Location: thankyou.php");
    }
  }

  // if the form wasn't posted we simply display the squeeze page:

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

        <h1 class="text-center">Standard Form Demo</h1>
        </div>
        </div>

        <div class="row">
        <div class="col-md-4 col-md-offset-4">
        <br><br>
        <p class="text-center">Hey there! This is a standard form with absolutely zero integration with ReNotifier. We provide this so that you can compare it with other demos that have ReNotifier integration. By comparing them you will see how little effort it takes to integrate ReNotifier in your squeeze pages, forms, and websites that utilize <em>Connect with Facebook</em>.</p>
        
        <br><br>
        
        <form method="POST" id="theForm">
          <div class="form-group email-group">
            <label for="exampleInputEmail1" class="control-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label>Your favorite color</label>
            <div class="radio">
              <label><input type="radio" name="color" value="red">Red</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="color" value="green">Green</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="color" value="blue">Blue</label>
            </div>    
            <div class="radio">
              <label><input type="radio" name="color" value="yellow">Yellow</label>
            </div>  
          </div>
          <button type="submit" class="btn btn-default btn-block btn-primary">Proceed!</button>        
        </form>
        </div>
        
        </div>
    <script type="text/javascript">
    // this is a simple function for validating emails
    function IsEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }    

    $( document ).ready(function() {

      // We are gonna validate the email before the form is submitted
        $( "#theForm" ).submit(function( event ) {
          if (!IsEmail($("#email").val())) {
            // Invalid email! Let's display a simple error:
            $(".email-group").removeClass("has-success").addClass("has-error");
            alert("Please enter a valid email address.");
            event.preventDefault();
          }
        });

      // Color the input green if the email is valid
        $( "#email" ).blur(function ( event ) {
          if (IsEmail($("#email").val())) {
            // Invalid email! Let's display a simple error:
            $(".email-group").removeClass("has-error").addClass("has-success");
          } else {
            $(".email-group").removeClass("has-success").addClass("has-error");
          }          
        });
    });
    </script>
    </body>
</html>
