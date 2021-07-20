<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Customers</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- custom CSS here -->
    <link href="css/half-slider.css" rel="stylesheet">
    
    <style type="text/css">
        #back{
            background: url('back1.jpg');
         background-repeat: no-repeat;       
  background-size: cover;

}
.py-2{

font-weight: bolder;
font-size: 15;
}
      .button {
        outline-offset: 10px;
        outline: 2px solid #008CBA ;
  padding: 10px 10px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #008CBA;
  border: none;
  border-radius: 10px;
  box-shadow: 0 5px #999;
}

.button:hover {background-color: #008CBA}

.button:active {
  background-color: #008CBA;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
    </style>
</head>

<body  id="back">
<?php
    include 'config.php';
    $sql = "SELECT * FROM customers_details";
    $result = mysqli_query($conn,$sql);
?>

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

<div class="container">
    <br>
    <br>
    <br>
        <h2 style="color:#003F87" class="text-center pt-4" style="border:2px solid #003F87;"><b>CUSTOMERS LIST AND TRANSFER MONEY</b></h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">CUSTOMER ID</th>
                            <th scope="col" class="text-center py-2">CUSTOMER NAME</th>
                            <th scope="col" class="text-center py-2">CUSTOMER E-MAIL</th>
                            <th scope="col" class="text-center py-2">BALANCE(in Rs.)</th>
                            <th scope="col" class="text-center py-2">TRANSFER MONEY</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td class="text-center"><a href="transfermoney.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="button">Transfer</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
         <div></div>
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
    
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

</body>
</html>