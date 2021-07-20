<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Basic Banking System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS here -->
    <link href="css/half-slider.css" rel="stylesheet">
    <style>
    	.button2 {
  display: inline-block;
  border-radius: 4px;
  background-color: white;
  border: 2px solid #528B8B;
  color: black;
  text-align: center;
  font-size: 45px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 2.5px;
}

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button2:hover {
  background-color: #528B8B;
  color: white;
}
.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}

    </style>

  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Bank of Sparks Foudation</a>
        </div>

        <!-- the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav" style="text-align:right;">

            <li><a href="index.php">Home</a></li>
            <li><a href="customerslist.php">View Customers</a></li>
            <li><a href="transferhistory.php">Transfer History</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="fill" style="background-image:url('slide1.jpg');"></div>
            <div class="carousel-caption">
              <h1>The New Speed Of Finance : For Extraordinary Service</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('slide2.jpg');"></div>
            <div class="carousel-caption">
              <h1>Your Bank at your Fingertips</h1>
              <h3>We provide high-quality banking services for more than 5 years with over 100 employees and 100 customers </h3>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('slide5.jpg');"></div>
            <div class="carousel-caption">
              <h1 >Banking and Money Transfer made Simple!!</h1>
              <h3 >One of the country's top retail banks by deposits and a wholly owned subsidiary of one of the most respected banks in the world.</h3>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
    </div>

    <div class="container">

      <div class="row section">
        <div class="col-lg-12">
          <h1 style="text-align: center;">Why Choose Us?</h1>
<p style="text-align: center;">At our bank your business is not just a transaction, it’s a relationship.  You aren’t just an account, you are an individual with unique goals who deserves a tailor-made solution.</p>
         <img style="display: block; margin: 0 auto;" src="bank.jpg" height="300" width="700">
        </div>
      </div>
      <div class="row section">
        <div class="col-lg-12">
          <h1 style="text-align: center;">Our Services</h1>
<p style="text-align: center;">Whether you are opening your first bank account or have managed a checking account for years, we will provide you with different types of banking services available.</p>
         
        </div>
      </div>
      <center><div style="display: flex;box-sizing: border-box;">
  <div style="flex: 50%;padding: 10px;height: 300px;">
  	<img src="transfermoney.jpg" height="200" width="250">
  	<h4>View Transfer History</h4>
    <p>View all transfer details that has been done till date among customers.</p><br>
    <a href="transferhistory.php"><button class="button2" style="vertical-align:middle" ><h5><span style="font-family: Trebuchet MS">Transfer History</span></h5></button></a>
    
  </div>
  <div style="flex: 50%;padding: 10px;height: 300px;">
  	<img src="viewcustomers.jpg" height="200" width="400">
  	<h4>View All Customers</h4>
    <p>View all customers registered and transfer money to customers as required.</p><br>
    <a href="customerslist.php"><button class="button2" style="vertical-align:middle" ><h5><span style="font-family: Trebuchet MS">View Customers</span></h5></button></a>
    
  </div>
</div></center>
      <hr>
      <div><br><br><br></div>
      <footer>
        <div class="row">
          <div class="col-lg-12">
            <center><p>Copyright &copy; Made by Sujana Ray</p></center>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
      $('.carousel').carousel({
        interval: 5000 //changes the speed
      })
    </script>
  </body>
</html>