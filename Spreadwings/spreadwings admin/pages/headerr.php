<?php 
	session_start();
 include"connection.php"; 
   		
 if(isset($_SESSION['log_admin']))
		{}
		else
		{
		header('location:login1.php');
		}
		
   
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Spreadwings</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	
    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
	
	<!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

	
    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="adminshow.php">Spreadwings</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

				<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alert">
                        
                        <li class="divider"></li>
                        <li><a href="logout1.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                  
                </li>
            
            </ul>
            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
              
                        
                 
                
                       
                        <li>
                              <a href="tables.html"><i class="fa fa-table fa-fw"></i>&nbsp; Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                           		

								<li>
                                    <a href="onlinestoreshow.php">Online Store</a>
                                </li>
						
								
								<li>
                                    <a href="productshow.php">Products</a>
                                </li>
							
						
								
							
				
						
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
					   
					   								
						
					   
					   
					   <li>
                      	 <a href="#"><i class="fa fa-user fa-fw"></i> User Records<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                          
								<li>
                                    <a href="usershow.php">User</a>
                                </li>

                           		<li>
                                    <a href="checkoutshow.php">Checkout Order</a>
                                </li>
							
					
								<li>
                                    <a href="shippingshow.php">Shipping Address</a>
                                </li>
								
							
								<li>
                                    <a href="billingshow.php">Billing Address</a>
                                </li> 
						
								<li>
                                    <a href="cartshow.php">Cart</a>
                                </li> 
						
						
                            </ul>
                          
                        </li>
					  


	   
					   <li>
                      	 <a href="#"><i class="fa fa-user fa-fw"></i> Profile Records<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                          
								<li>
                                    <a href="categoryshow.php">Category</a>
                                </li>
								<li>
                                    <a href="profileshow.php">Profile</a>
                                </li>
								<li>
                                    <a href="generalshow.php">General</a>
                                </li>
									<li>
                                    <a href="imageshow.php">Image</a>
                                </li>
					
						
								<li>
                                    <a href="videoshow.php">Video</a>
                                </li>
								
						
                            </ul>
                          
                        </li>










								<li>
                                    <a href="faqshow.php">&nbsp;<p class="fa fa-eye"></p>&nbsp; Faq</a>
                                </li>
							
						   
						   
						   	    <li>
                                   <a href="blogshow.php">&nbsp;<p class="fa fa-bullseye"></p>&nbsp;   Blog</a>
                                </li>
							





					  <li>
                            <a href="adminshow.php"><i class="fa fa-user fa-fw"></i>  Admin</a>
                          
                            
                        </li>
					   
					   
					   
					   
          
                     
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>