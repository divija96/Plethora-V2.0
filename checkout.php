
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
    <link href="style.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

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
		
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="home.php">Go back to Home!<span class="badge badge-important"></span></a></li>
		</ul>
          </div><!-- /.navbar -->
      </div>

      <div class="row-fluid">
      	<div class="span12">
      		<h1>Checkout</h1>
      	</div>
      </div>
		<form oninput="pricePerItem.value=parseInt(quantity.value)*parseInt(price.value)" method="post" >
      <div class="row-fluid">
      	<div class="span12">
      		<div class="block">
                
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table table-striped table-hover">
                        	<tr>
                        		<th>Image</th>
                        		<th>Title</th>
                        		<th>Price</th>
                        		<th>Quantity</th>
                        		<th>Total</th>
                        		</tr>
                        		 <?php
											 $dbhost = 'localhost';
											 $dbuser = 'root';
											 $dbpass = 'mukta3396';
									 
											 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
									 
											 if(! $conn ) {
												die('Could not connect: ' . mysql_error());
											 }
								
											 $sql = 'SELECT * from Item,tempCart WHERE Item.item_id = tempCart.titem_id';

											 mysql_select_db('plethora');
											 $retval = mysql_query( $sql, $conn );
									 
											 if(! $retval ) {
												die('Could not get data: ' . mysql_error());
											 }
									 		$total=0;
											 while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
												?>
											   
								            	<tr>
								            		<td class="span1"><a href='javascript:;'><img src='<?php echo $row['picture']; ?>' /></a></td>
								            		<td class="span5"><?php echo $row['item_name']; ?>
								            		</td>
								            		<td class="span2"><?php echo $row['price']; ?></td>
								            		<td class="span2">
								            			<div class="row-fluid">
								            				<div class="span7">
								            				   <?php echo $row['quantity']; ?>
																	<input type="hidden" id="price" name="price" value="<?php $total=$total+($row['quantity']*$row['price']); echo $row['price']; ?>">
																	
								            					
								            				</div>

								            			</div>
								            			
								            		</td>
								            		<td class="span1"><?php echo $row['quantity']*$row['price']; ?></td>
								            	</tr>
										  <?php }

									mysql_close($conn);
								?>
								<tr>
                        		<th colspan="4"></th>
                        		<th><?php  echo $total; ?></th>
                        	</tr>
                        </table>
                        <hr />
                        <div class="row-fluid">
                        	<div class="span6">
                        		<div class="row-fluid">
                        			
                        			
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
      	</div>
      </div>
   </form>

      <div class="row-fluid">
      	<div class="span6">
          <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><h1>SHIPPING DETAILS!</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                      <div class="alert alert-info"><span class="text-error">*</span> indicates required field</div>
                        <form class="form-horizontal" action="orderPlace.php" method="post">
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
                                <label for="street">Street Address <span class="text-error">*</span></label><br>
                                <input type="text" name="street" value="" placeholder="Street Address">
                          </div>

                          <div class="control-group">
                                <label for="city">City <span class="text-error">*</span></label><br>
                                <input type="text" name="city" value="" placeholder="City">
                          </div>

                          <div class="control-group">
                                <label for="state">State/Province <span class="text-error">*</span></label><br>
                                <input type="text" name="state" value="" placeholder="State">
                          </div>

                          <div class="control-group">
                                <label for="zip">Postal Code <span class="text-error">*</span></label><br>
                                <input type="text" name="zip" value="" placeholder="Postal Code">
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
      	</div>

      </div>

      <hr>

      <div class="footer">
        <p>&copy; Company 2016</p>
      </div>

    </div> <!-- /container -->

  </body>
</html>
