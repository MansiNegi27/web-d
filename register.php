<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="myfunctions.js"></script>
 </head>
 <body background="bg.jpg"><br><br>
 	<center>
 <div class="container" id="Register">
 	<div class="register"><i class="fa fa-user-circle"></i>
 	Register<br><br>
 </div>
 	<form class="form-horizontal" action="register.php" method="post" >
            <div class="form-group"><div class="col-sm-3"></div>
              <label class="control-label col-sm-2" for="Name"><i class="fa fa-user"></i>&nbsp;&nbsp;
              Name:</label>
              <div class="col-sm-4">
               <input type="text" class="form-control" id="name" placeholder="Enter Name" name="Name" required="true">
              </div>
            </div>
            <div class="form-group"><div class="col-sm-3"></div>
              <label class="control-label col-sm-2" for="Email"><i class="fa fa-envelope-open"></i>&nbsp;&nbsp;E-mail:</label>
              <div class="col-sm-4">
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="Email" required="true">
              </div>
            </div>
            <div class="form-group"><div class="col-sm-3"></div>
              <label class="control-label col-sm-2" for="Phone_no"><i class="fa fa-phone"></i>&nbsp;&nbsp;Phone No:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone No." name="Phone_no" required="true">
              </div>
            </div>
            <div class="form-group"><div class="col-sm-3"></div>
              <label class="control-label col-sm-2" for="University"><i class="fa fa-university"></i>&nbsp;&nbsp;University:</label>
              <div class="col-sm-4">
                <input type="text" class="form-control" id="university" placeholder="Enter your University" name="University" required="true">
              </div>
            </div>
            <div class="form-group"><div class="col-sm-3"></div>
              <label class="control-label col-sm-2" for="password"><i class="fa fa-unlock-alt"></i>&nbsp;&nbsp;Password:</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="password" placeholder="Enter a password" name="password" required="true">
              </div>
            </div>
            <div class="form-group"><div class="col-sm-3"></div>       
            <div class="col-sm-4">
              <button type="submit" class="btn btn-default" onclick="validation()" name="register_user">Submit</button>
          </div>
          </div>
          </form>
 </div>
<center>
 </body>
 </html>
 


