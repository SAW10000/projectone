<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Project One | Login</title>
  </head>
  <body>
 <div class="header">
    <?php
      include "commonui/header.php";
    ?>
    </div>
    <div class="container">
    
        <form class="content">
              

                <div class="form-row">
                    <div class="form-group col-md-2">
                    <input type="email" class="form-control-sm" id="email" placeholder="Email">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-2">
                    <input type="password" class="form-control-sm" id="password" placeholder="Password">
                    </div>
                </div>
                
                <div class="form-row">
                    
                </div>

                <button type="submit" class="btn btn-primary btn-sm " onclick="login()">Login</button>
                <a href="registerui.php">Don't Have a Account?</a>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>
      function login()
      {
        var email=document.getElementById("email").value;
        var password=document.getElementById("password").value;
        // alert(fname+lname);
      
      $.ajax
        ({
          type: "POST",
          url: "businesslogic/login.php",
          data: { "email": email, "password": password },
          success: function (data) {
            alert(data);
          }
        });
      }
    </script>
  </body>
</html>