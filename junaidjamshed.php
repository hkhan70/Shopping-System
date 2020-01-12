<?php
session_start();
?>

<?php 
require_once 'phpdom/index.php' ;
require_once 'connection.php' ;
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
    h2
    {
        color: red;
    }
    img
    {
        width:100%;
        height: 100%;

    }
    div.product-item-info
    {
         display: inline;
         width: 20%;
         float: left;
         border:0.5px solid #F48211;
         
    }
    a
    {
    	font-size: 15px;
    }
    span.product-image-wrapper
    {
        visibility: visible;
    }
    .order
    {
        visibility: visible;
        font-size: 20px;

    }
    span
    {
        visibility: hidden;
    }
    span.price
    {
        visibility: visible;
    }
    li
    {
       list-style-type: none;
    }
</style>
</head><!--/head-->

<body>

<?php 
require_once 'header.php' ;
 ?>

        <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 padding-right">
                    <div class="features_items" style="width: 100%;"><!--features_items-->
                        <h2 class="title text-center">Featured Items</h2>               
                        
                        
             <?php 
            $html = file_get_html('https://www.junaidjamshed.com/newarrivals.html');
            // Find all links 
             $i=0;
            foreach($html->find('li[class=item product product-item]') as $element)
             {
               
                   $order=$html->find('a[class=product-item-link]',$i)->plaintext;
                   $price=$html->find('span[class=price]',$i)->plaintext;
                   
                              $order=trim($order);
                              $price=preg_replace('/\D/', '', $price);
                              $price=substr($price, 0,4);
                              
                    echo "<a class='order' href='junaidjamshed.php?order_name=". $order ." & order_price=". $price ." > <span class='order'>ORDER NOW</span> </a>"; 

                    echo $element;//MAIN ITEM

                    $i++;

                    
                                                       
             }

              if ( isset($_GET['order_name'])) 
                        {
                            
                        $customername=$_SESSION['user'];
                        $item_name=$_GET['order_name'];
                        $item_price=$_GET['order_price'];

                        $sql = "INSERT INTO orders( order_name, order_price, customer_name,status)
                                         VALUES ('$item_name','$item_price','$customername','ordered')";
                                        
                                         if(mysqli_query($conn, $sql))
                                          {
                                            ?>
                                            <script language="JavaScript">
                                                //alert('Order Placed');
                                              document.location='./junaidjamshed.php';
                                            </script>
                                            <?php
                                          } 
                                          else
                                          {
                                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);


                                          }

                          }

                   
                                                    
              ?>
                        
                    
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </section>

       
<br><br>
<?php 
require_once 'footer.php' ;
 ?>


  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>