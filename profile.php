<?php
session_start();
require_once "connection.php";
require_once "header.php";

if (isset($_SESSION['user'])) {
  // logged in
} else {
  // not logged in
  header('Location:login-signup.php');
}

$name = "";
$cell = "";
$pw ="" ;
$tmp="";
$bill=0;


      $tmp = $_SESSION["user"];

      $checksql = "SELECT * FROM login where uname = '$tmp'";
      if ($result=mysqli_query($conn,$checksql))
      {
        if (mysqli_num_rows($result) != 0)
            {
              while($row2 = mysqli_fetch_array($result))
            {
              $name = $row2[1];
              $pw = $row2[2];
              $cell =$row2[3] ;

            }

            }
           else
           {
             echo "No Record Found!";
           }                                       
         }

                
       if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"]) ) 
    {

      $usercellno = $_POST["cmp_cell"];
      $username = $_POST["cmp_name"];
      $userpassword = $_POST["cmp_pw"];

      $checkQuery=" UPDATE login SET uname='$username' , pw='$userpassword' ,cellno='$usercellno' where uname = '$tmp' ";

      if(mysqli_query($conn, $checkQuery))
      {
      echo "<script type='text/javascript'>
      alert('PROFILE UPDATED SUCCESFULLY');
      </script>";
      header("location: ./profile.php");

      } 
      else
      {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
      }

    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">  
  table 
{
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 40%;
  margin-right: 10%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  color: #757272;
}

tr {
  background-color: #dddddd;
}
</style>
</head>
<body>

     <h2 style="text-align: center;color: orange;">DASHBOARD</h2><hr>
          <div id="" style="background-color:transparent;margin-top: 0px;">
            <div class="">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
              <h3 class="" style="color:orange;margin-left: 10%;">MY PROFILE</h3>                 
                <div style="width: 35%;display: inline;float: left; margin-left: 10%;">
                    
                    <h4>NAME: </h4>
                    <input type="text" name="cmp_name" class="" value="<?php echo $name ?>" readonly/>
                    <br><br>
                    <h4>CELL-NO: </h4>
                    <input type="text" name="cmp_cell" class="" value="<?php echo $cell ?>"/>
                    <br><br>
                    <h4>PASSWORD </h4>
                    <input type="password" name="cmp_pw" class="" value="<?php echo $pw ?>"/>
                    <br>
                    <input type="submit" name ="update" class="btn btn-primary" value="Update Profile"/>


                </div>
              
              </form>                     
         </div>
                              <h3 class="" style="color:orange;">MY ORDERS</h3>
                                 <table>
                                    <thead>
                                      <tr>                                         
                                          <th>Item</th>
                                          <th>Price</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                          
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

<?php 
$status="";
$ordername="";
$orderprice="";
$bill=0;

$checksql = "SELECT * FROM orders where   (status='ordered') and (customer_name ='{$_SESSION['user']}')  ";
      if ($result=mysqli_query($conn,$checksql))
      {
        if (mysqli_num_rows($result) != 0)
         {                                                 
               
              while($row2 = mysqli_fetch_array($result))
            {                                              
              $bill+=$row2['order_price'];
            }
          }
      }

 $checksql = "SELECT * FROM orders where   (status='ordered' or status='delivered') and (customer_name ='{$_SESSION['user']}')  ";
      if ($result=mysqli_query($conn,$checksql))
      {
        if (mysqli_num_rows($result) != 0)
            {                                                 
               

              while($row2 = mysqli_fetch_array($result))
            {                                              
              
                                                                  echo"<tr>";
                                                        $orderid=$row2['order_id'];        
                                                        $ordername=strtoupper($row2['order_name']);
                                                        $orderprice=$row2['order_price'];
                                                        $status=strtoupper($row2['status']);
                                                                  echo "<td>$ordername</td>";
                                                                  echo "<td >$orderprice</td>"; 
                                                                  echo "<td >$status</td>"; 
                                                                  if($status=='DELIVERED')
                                                                  {
                                                                    echo "<td>"; 

        echo "<a style='visibility: hidden'  href='profile.php?order_name=".$row2['order_name']." & order_price=".$row2['order_price']." & order_id=".$row2['order_id']." data-toggle='tooltip'><span>Cancel</span></a>";
        
                                                                    echo "</td>";
                                                                  }
                                                                 else if ($status=='ORDERED') 
                                                                 {
                                                                    echo "<td>"; 

        echo "<a href='profile.php?order_name=".$row2['order_name']." & order_price=".$row2['order_price']." & order_id=".$row2['order_id']." data-toggle='tooltip'><span>Cancel</span></a>";
                                                                    echo "</td>";
                                                                 }
          
                                                                                                                                                                                                                                                 
                                                                   echo"</tr>";
                                                                  
            }
                       
                                       
            }
           else
           {
             
           } 

                $tmp = $_SESSION["user"];
              
          if ( isset($_GET['order_name'])) 
             {
$customername=$_SESSION['user'];
$item_name=$_GET['order_name'];
$item_id=$_GET['order_id'];

  $checkQuery=" UPDATE orders SET status='cancelled'  where (customer_name = '$customername') And (order_name='$item_name') and (order_id='$item_id')";

                    if(mysqli_query($conn, $checkQuery))
                    {
                    ?>
                    <script language="JavaScript">
                        //alert('Order Placed');
                      document.location='./profile.php';
                    </script>
                    <?php
                    } 
                    else
                    {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
               }                                 
         }
           
 ?>
    </div>
  </tr>
</tbody>
</table>
<br>
<?php echo "<h4>Total Amount:Rs $bill</h4>";  ?>
</div>



   <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/main.js"></script>

    </body>
</html>
