<?php
include 'config.php';    # including config

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers_details where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from customers_details where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);
 
    if (($amount<0) || ($amount == 0) )
    {
        echo '<script type="text/javascript">';
        echo ' alert("Invalid Value for amount of money to be transferred.")';
        echo '</script>';
    }

    else if($amount > $sql1['balance']) 
    {
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient balance of customer for transfer of money.")'; 
        echo '</script>';
    }

    else 
    {
            // deducting transferring amount from sender's account    
            $newbalance = $sql1['balance'] - $amount;
            $sql = "UPDATE customers_details set balance=$newbalance where id=$from";
            mysqli_query($conn,$sql);

            // adding transferred money to receiver's account
            $newbalance = $sql2['balance'] + $amount;
            $sql = "UPDATE customers_details set balance=$newbalance where id=$to";
            mysqli_query($conn,$sql);
                
            $sender = $sql1['name'];
            $receiver = $sql2['name'];
            $sql = "INSERT INTO transfer_history(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
            $query=mysqli_query($conn,$sql);

            if($query)
            {
                 echo "<script> alert('Transfer of money is successful');
                                 window.location='transferhistory.php';
                       </script>";  
            }

            $newbalance= 0;
            $amount =0;
        }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
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
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
  display: inline-block;
  text-decoration: none;
  cursor: pointer;
}

.button:hover {opacity: 1}

    </style>
</head>

<body id="back">
 
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
        <h2 style="color:#003F87" class="text-center pt-4" style="border:2px solid #003F87;"><b>CUSTOMER DETAILS</b></h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers_details where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center py-2">CUSTOMER ID</th>
                    <th class="text-center py-2">CUSTOMER NAME</th>
                    <th class="text-center py-2">CUSTOMER EMAIL</th>
                    <th class="text-center py-2">BALANCE (in Rs.)</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <h2 style="color:#003F87" class="text-center pt-4" style="border:2px solid #003F87;"><b>TRANSFER MONEY</b></h2>
        <label>Transfer to:</label>
        <select name = "to" class="form-control" required>
            <option value = "" disabled selected>Select Customer from Drop-down List</option>
            <?php
                include 'config.php';
                $sid = $_GET['id'];
                $sql = "SELECT * FROM customers_details where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)                          # If none selected
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    Customer ID: 
                    <?php echo $rows['id'] ;?>&nbsp;&nbsp;Customer Name:<?php echo $rows['name'] ;?>&nbsp;&nbsp; Balance: Rs.
                    <?php echo $rows['balance'] ;?>  
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount of Money(in Rs.):</label>
            <input type="number" class="form-control" name="amount" placeholder="Enter Amount to be transferred" required>   
            <br><br>
                <div class="text-center" >
            <button class="button" name="submit" type="submit" id="myBtn">Transfer Money</button>
            </div>
        </form>
    </div>
    <div><br></div>
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