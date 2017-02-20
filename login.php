<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Plethora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
   <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>
	<style>
		.error {color: #FF0000;}
	</style>
	
    <div class="container">

       <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#"> <img src="logo.png" alt="Plethora logo" style="width:180px;height:32px;"> </a></li>             
                <li><a href="home.php">Go Back to Home</a></li>

            </ul>
          </div><!-- /.navbar -->
      </div>

      <div class="row-fluid">
      	
      	<div class="span6">
      		<div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><h1>LOGIN!</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                    	<div class="alert alert-info"><span class="text-error">*</span> indicates required field</div>
                        <form class="form-horizontal" action="signin.php" method="post">
                          <div class="control-group">
                                <label for="uname">User Name</label><br>
                                <input type="text" id="uname" name="uname" value="" placeholder="User Name">
                                <span class = "error"><?php session_start(); echo $_SESSION['UserNameError']; ?></span>
                          </div>

                          <div class="control-group">
                                <label for="password">Password</label><br>
                                <input type="password" id="password" name="password" value="" placeholder="Password">
                                <span class = "error"><?php session_start(); echo $_SESSION['PasswordError']; ?></span>
                          </div>

                          <div class="control-group">
						    <div class="controls">
						    <span class = "error"><?php session_start(); echo $_SESSION['Success']; $_SESSION['Success']=""; ?></span>
						      <button type="submit" class="btn btn-primary">Submit</button>
						    </div>
						  </div>
                        </form>
                    </div>
                </div>
            </div>
           <div class="span6">
      		<div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><h1>SIGN UP</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                    	<div class="alert alert-info"><span class="text-error">*</span> indicates required field</div>
                        <form class="form-horizontal" action="signup.php" method="post">
                          <div class="control-group">
                                <label for="f_name">First Name <span class="text-error">*</span></label><br>
                                <input type="text" name="f_name" value="" placeholder="First Name">
                          </div>
                          <div class="control-group">
                                <label for="l_name">Last Name <span class="text-error">*</span></label><br>
                                <input type="text" name="l_name" value="" placeholder="Last Name">
                          </div>
                           <div class="control-group">
                                <label for="uname">User Name</label><br>
                                <input type="text" name="uname" value="" placeholder="User Name">
                                <span class = "error"><?php session_start(); echo $_SESSION['UserNameError']; ?></span>
                          </div>

                          <div class="control-group">
                                <label for="password">Password</label><br>
                                <input type="password" name="password" value="" placeholder="Password">
                          </div>
                          <div class="control-group">
                                <label for="email">Email Address <span class="text-error">*</span></label><br>
                                <input type="text" name="email" value="" placeholder="Email Address">
                          </div>

                          <div class="control-group">
                                <label for="phone">Phone number <span class="text-error">*</span></label><br>
                                <input type="text" name="phone" value="" placeholder="Phone Number" class="input-medium">
                          </div>              
                          <div class="control-group">
						                   <button type="submit" id="signupButton">Submit</button>
						               </div>
                        </form>
                    </div>
                </div>
            </div>
      	</div>
      	</div>
      </div>

      <hr>

      <div class="footer">
        <p>&copy; Company 2016</p>
      </div>

    </div> <!-- /container -->

  </body>
</html>

