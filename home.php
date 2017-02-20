<!-- <?php session_start(); echo $_SESSION['UserName']; ?>-->

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

         <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#"> <img src="logo.png" alt="Plethora logo" style="width:180px;height:32px;"> </a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
aria-expanded="false">KIDS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="KidBoy.php?category=18">Girls</a></li>
                  <li><a href="KidBoy.php?category=17">Boys</a></li>
                 
                </ul>
              </li>
    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEN<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="KidBoy.php?category=7">Tshirts&Shirts</a></li>
                  <li><a href="KidBoy.php?category=8">Jeans&Trousers</a></li>
                  <li><a href="KidBoy.php?category=10">Footwear</a></li>
                  <li><a href="KidBoy.php?category=11">Watches</a></li>
                  <li><a href="KidBoy.php?category=9">Accesories</a></li>
                 
                </ul>
              </li>
    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WOMEN<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="KidBoy.php?category=1">Indianwear</a></li>
                  <li><a href="KidBoy.php?category=2">Westernwear</a></li>
                  <li><a href="KidBoy.php?category=3">Accesories</a></li>
                  <li><a href="KidBoy.php?category=4">Beauty and Grooming</a></li>
                  <li><a href="KidBoy.php?category=5">Footwear</a></li>
                  <li><a href="KidBoy.php?category=6">Watches</a></li>
                 
                </ul>
              </li>
    </li>
    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME DECOR<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="KidBoy.php?category=13">Blankets</a></li>
                  <li><a href="KidBoy.php?category=14">Curtains</a></li>
                  <li><a href="KidBoy.php?category=16">Towels</a></li>
                  <li><a href="KidBoy.php?category=15">Cushions</a></li>
              <li><a href="KidBoy.php?category=12">Bedsheets</a></li>
                 
                </ul>
              </li>
              
            </ul>
			<div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search" action="semsol/test1.php" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        
        </div>
            <ul class="nav navbar-nav navbar-right">
             <li style="color:#9c27b0;font-family:verdana;"> <?php session_start(); echo $_SESSION['UserName']; ?></li>
              <li><a href="login.php"> <img src="user.png" alt="User Icon" style="width:32px;height:32px;"> </a></li>
		<li><a href="checkout.php"> <img src="cart.png" alt="Cart Icon" style="width:32px;height:32px;"> </a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

     <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="discount1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Fresh sales</h1>
              <p>Best Discounts!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="carousel_discount2.jpeg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Best Brands</h1>
              <p>Comfort and style</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="discount3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lowest Prices</h1>
             
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
     
      <!-- Example row of columns -->
      
   	      <div class="container">
        <div class="row">
           <div class="col-md-10">
          <div class="row">
           
          	   <?php
          	   session_start();
					$dbhost = 'localhost';
					$dbuser = 'root';
					$dbpass = 'mukta3396';
		
					$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		
					if(! $conn ) {
						die('Could not connect: ' . mysql_error());
					}

					if($_SESSION['UserId']>0 && $_SESSION['UserId']<944)
					{
					?><h2 align="center">Recommendations: </h2><?php
					$statement='python main.py '.$_SESSION['UserId'];

					$command=escapeshellcmd($statement);
					$output=shell_exec($command);

					$a=substr($output,0,-3);
					$arr=explode('\'',$a);
					$i=0;
					foreach ($arr as $item => $value){
					if($i%2!=0)
					{
					$val=substr($value,1);
					$sql = "SELECT * from Item WHERE item_name='$val' ";
	
					mysql_select_db('plethora');
					$retval = mysql_query( $sql, $conn );
		
					if(! $retval ) {
						die('Could not get data: ' . mysql_error());
					}
		
					while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) { 
						?>
					 <div class="col-sm-4 col-lg-4 col-md-4">
							
                        <div class="thumbnail">
                        <form method="post" action="addToCart.php">
                            <img src="<?php echo $row['picture']; ?>">
                            <input type="hidden" name="titem_id" value="<?php echo $row['item_id']; ?>">
                            <table table-layout="fixed">
                            <tr>
                            <th height="100"><?php echo $row['item_name']; ?></th>
                            <th><?php echo "Rs. ".$row['price']; ?></th>
                            </tr>
                            </table>
                            <table>
                            <tr>
                            <th> <input size="1" type="number" name="quantity" min="1" placeholder="Quantity"></th></tr>
                            
 							 		 <tr> <th> <input size="1" type="number" name="rating" min="1" max="5" placeholder="Rating"></th></tr>
                            </table>
                            <table>
                            <tr>
                            <th><input type="submit" value="Add to cart" class="btnAddAction" /></form> </th>
                           	<th><form method="post" action="deleteFromCart.php">
                           	 <input type="hidden" name="titem_id" value="<?php echo $row['item_id']; ?>">
                        		<input type="submit" value="Delete" class="btnAddAction" />
                        </form></th>
                            </tr></table>             
                        </div>
                    </div>
				<?php } } $i=$i+1; }}

   mysql_close($conn);
?>
                   </div>
                  </div>
                </div>
              </div>
      

      <hr>

      <div class="footer">
        <p>&copy; Made with Love. By Divija, Mukta and Pooja</p>
      </div>
      

    </div> <!-- /container -->

  </body>
</html>
