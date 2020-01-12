
<?php require_once "connection.php"; ?>
<header id="header"><!--header-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								
							</div>
							
							<div class="btn-group">
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	

		<div class="header-bottom"><!--header-bottom-->	
                   
			<div class="container">			           
				<div class="row">

					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="mainmenu pull-left" >
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="junaidjamshed.php">J.</a></li>
										<li><a href="sanasafinaz.php">Sana Safinaz</a></li> 										 
	
                                    </ul>
                                </li> 
								<li><a href="contact-us.php" >Contact</a></li>
								<li><a href="login-signup.php">Login/Signup</a></li>


								 
							</ul>							
						</div >						     
						   
					</div>
				
				</div>

			</div>
			<?php 
                 if (isset($_SESSION['user'])) 
                 {
                 	echo ' <div style="float: right;border:3px solid orange;border-radius: 10px;margin-right: 4%;">
            	    <h5  style="color: #939895;">YOUR ORDERS</h5>';
            	    $customername=$_SESSION['user'];
					  $query = "SELECT count(*) as allcount FROM orders WHERE status='ordered' and customer_name='$customername' ";
					  $result = mysqli_query($conn,$query);
					  $row = mysqli_fetch_array($result);
					  $allcount = $row['allcount'];
					  echo "<h6 style='color:orange;text-align:center;'>$allcount</h6>";
					  echo " </div>";
                 }
                 else
                 {
                 	
                 }

			  ?>

           
		</div><!--/header-bottom-->
					 <?php  

								if (isset($_SESSION['user'])) 
								{
					echo '<div class="mainmenu pull-left" style="border-radius: 25px;border-style: solid;color:orange;width:10%;margin-left:87%;margin-top:-10%;" >
							<ul class="nav navbar-nav collapse navbar-collapse">								
								<li class="dropdown"><h6>'; 
					echo "&nbsp&nbsp"; echo '<i class="fa fa-user"></i>'; echo "&nbsp&nbsp";									
				    echo         strtoupper($_SESSION["user"]);
				                                 
                    echo '</h6>
                             <ul role="menu" class="sub-menu" style="width:100%;">
                                        <li><a href="profile.php">Profile</a></li> 
                                        <li><a href="logout.php">LogOut</a></li>
										
                                    </ul>
                               </li> 								 
							</ul>							
						</div>';

					            }

					         ?>
           
              
	</header><!--/header-->

