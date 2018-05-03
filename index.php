<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Innerve 2018</title>
	<meta charset ="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="myfunctions.js"></script>

   </head>
  
<body background="bg.jpg" data-target="#mynav">
<div class="container-fluid">
	<nav id="mynav">
		<ul class = "nav navbar-nav" data-spy="affix" data-offset-top="50">
		<li class="active"><a href="#aboutus">ABOUT US</a></li>
	    <li><a href="#events">EVENTS</a></li>
	    <li><a href="#teams">TEAMS</a></li>
	    <li><a href="#sponsors">SPONSORS</a></li>
      <li>
       <button type="button" class="btn btn-responsive" data-toggle="modal" data-target="#myModal" id="login1">LOGIN</button>
       <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><i class="fa fa-sign-in"></i>  
            Login</h4> </div>
          <div class="modal-body">
          <!--here comes the form-->
          <div class="container" id="Login">
  <form class="form-horizontal" action="index.php" method="post">
            <div class="form-group">
              <label class="control-label col-sm-2  f1" for="Username"><i class="fa fa-user"></i>&nbsp;&nbsp;
              User ID:</label>
              <div class="col-sm-4">
               <input type="text" class="form-control" id="user_ID" placeholder="Enter ID" name="user_ID" required="true">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2  f1" for="password"><i class="fa fa-unlock-alt"></i>&nbsp;&nbsp;Password:</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="Password" required="true">
              </div>
            </div>
            <div class="form-group"><div class="col-sm-2"></div>
                <div class="col-sm-4">
                
              <input type="checkbox" onclick= "showpsw()" >&nbsp;
              Show Password
            </div>
          </div>
            <div class="form-group"><div class="col-sm-2"></div>
                <div class="col-sm-4">
              <button type="submit" class="btn btn-default submit1" value="Submit" name="login_user">Submit</button>&nbsp;&nbsp;<a href="register.html" class="register1">Register here!</a>
            </div>

          </div>
          </form>
        </div></div>
        </div>
       </div>
   </div>
</li>
	    </ul>
</nav>
</div>
<BR>
<br>

<div class="container-fluid" id="followus">
<div class="follow">
  <div class="1follow">
  </div>
  <div class="2follow">
    FOLLOW US ON:<br>
	  <a href=""><i class="fa fa-instagram"></i></a> &nbsp; &nbsp;
	  <a href="">	<i class="fa fa-facebook-official"></i></a>&nbsp;&nbsp;
		<a href="">	<i class="fa fa-twitter"></i></a>
	</div>
  <div class="3follow">
  </div>
</div>
</div>

</body>
</html>