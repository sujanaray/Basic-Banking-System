<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    
    
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
    </style>

</head>

<body id="back">
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
        <center><h2 style="color:#003F87" class="text-center pt-4"><b>TRANSFER HISTORY</b></h2></center>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                    <thead>
                        <tr>
                        <th scope="col" class="text-center py-2" style="color:#000000;  text-transform: uppercase;">Transferred From</th>
                        <th scope="col" class="text-center py-2" style="color:#000000; text-transform: uppercase;">Transferred To</th>
                        <th scope="col" class="text-center py-2" style="color:#000000; text-transform: uppercase;">Amount Tranferred(in Rs.)</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php

            include 'config.php';

            $sql ="SELECT * FROM transfer_history";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
            
        <?php
            }
        ?>
        </tbody>
    </table>

    </div>
</div>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html> 