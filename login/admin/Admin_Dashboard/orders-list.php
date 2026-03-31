<?php  
 //Database connectivity  
 $con=mysqli_connect('localhost','root','','meals');  
 $sql=mysqli_query($con,"select * from order_details ");  
 //Get Update id and status  
 if (isset($_GET['id']) && isset($_GET['status'])) {  
      $id=$_GET['id'];  
      $status=$_GET['status'];  
      mysqli_query($con,"update order_details set status='$status' where id='$id'");  
      header("location:orders-list.php");  
      die();  
 }  
 ?>  



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Merry Meal - Restaurant Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/Logo.png">
	<link rel="stylesheet" href="./css/jquery.dataTables.min.css">
    <link href="./css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	
</head>
<body>

    <!--*******
        Preloader start
    ********-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******
        Preloader end
    ********-->

    <!--************
        Main wrapper start
    *************-->
    <div id="main-wrapper">

        <!--************
            Nav header start
        *************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Cooking/Fork-spoon.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="46px" height="46px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect x="0" y="0" width="50" height="50"/>
						<path d="M15,3 L15.4502481,7.5024814 C15.4784917,7.78491722 15.7161555,8 16,8 C16.2838445,8 16.5215083,7.78491722 16.5497519,7.5024814 L17,3 L18,3 L18.4502481,7.5024814 C18.4784917,7.78491722 18.7161555,8 19,8 C19.2838445,8 19.5215083,7.78491722 19.5497519,7.5024814 L20,3 L21,3 L21,7.5 C21,9.43299662 19.4329966,11 17.5,11 C15.5670034,11 14,9.43299662 14,7.5 L14,3 L15,3 Z" fill="#AD0000"/>
						<path d="M17.5,13 L17.5,13 C18.0610373,13 18.5243493,13.4382868 18.55547,13.9984604 L18.916795,20.5023095 C18.9602658,21.2847837 18.3611851,21.9543445 17.5787108,21.9978153 C17.5524991,21.9992715 17.5262521,22 17.5,22 L17.5,22 C16.7163192,22 16.0810203,21.3647011 16.0810203,20.5810203 C16.0810203,20.5547682 16.0817488,20.5285212 16.083205,20.5023095 L16.44453,13.9984604 C16.4756507,13.4382868 16.9389627,13 17.5,13 Z" fill="#000000" />
						<path d="M7.5,14 L7.5,14 C8.06209761,14 8.5273156,14.4370496 8.56237829,14.9980526 L8.90643257,20.5029211 C8.95497952,21.2796724 8.3646533,21.9487088 7.58790204,21.9972557 C7.55863704,21.9990848 7.52932209,22 7.5,22 L7.5,22 C6.72173313,22 6.09082317,21.36909 6.09082317,20.5908232 C6.09082317,20.5615011 6.09173837,20.5321861 6.09356743,20.5029211 L6.43762171,14.9980526 C6.4726844,14.4370496 6.93790239,14 7.5,14 Z" fill="#000000" />
						<path d="M7.5,12 C5.56700338,12 4,9.43299662 4,7.5 C4,5.56700338 5.56700338,3 7.5,3 C9.43299662,3 11,5.56700338 11,7.5 C11,9.43299662 9.43299662,12 7.5,12 Z M7.5095372,4.60103244 L7.56069005,9.94758244 C8.61891495,9.8578583 9.45855912,8.97981222 9.47749614,7.8949109 C9.49728809,6.76103086 8.63275447,4.70470991 7.5095372,4.60103244 Z" fill="#AD0000"/>
					</g>
				</svg><!--end::Svg Icon--></span>
				<div class="brand-title">MerryMeal</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--************
            Nav header end
        *************-->
		
		
		
		<!--************
            Header start
        *************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Order List
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								
							</li>
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt=""/>
									<div class="header-info">
										<span class="fs-20 font-w500">Shani Ishara</span>
										<small>Super Admin</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    
                                    <a href="../login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--************
            Header end ti-comment-alt
        *************-->

        <!--************
            Sidebar start
        *************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li>
                    <ul aria-expanded="false">
							<li><a href="index.html">Dashboard</a></li>							
							<li><a href="orders-list.php">Orders list</a></li>
							<li><a href="menu.html">Menu</a></li>
							<li><a href="members-list.php">Members</a></li>
							<li><a href="caregivers-list.php">Care Givers</a></li>
							<li><a href="partners-list.php">Partners</a></li>
							<li><a href="donors-list.php">Donors</a></li>
							<li><a href="riders-list.php">Riders</a></li>
							<li><a href="volunteers-list.php">Volunteers</a></li>							
							<li><a href="index_reviews.php">Reviews</a></li>								
							                           
						</ul>

                    </li>
                    
							
                            
            
				
				
			</div>
        </div>
        <!--************
            Sidebar end
        *************-->
		
		<!--************
            Content body start
        *************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card bg-transparent shadow-none">
							<div class="card-header flex-wrap border-0 p-0 justify-content-start">
								<div class="table-tabs mr-2 mb-3 mr-auto">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#AllStatus" aria-expanded="false">
												All Status	
											</a>
										</li>
										
									</ul>
								</div>
								
							</div>
							<div class="card-body p-0">
								<div class="tab-content" id="Tab">
									<div class="tab-pane fade active show" id="AllStatus">
										<div class="table-responsive rounded table-hover">
											<table class="table text-black card-table  mb-4 table-responsive-lg dataTablesCard" id="dataTable1">
												<thead class="bg-primary">
                                                <tr>  
                                                            <th>ID</th>  
                                                            <th>Customer Name</th>  
                                                            <th>Delivery Address</th>  
                                                            <th>Meal</th>  
                                                            <th>Quantity</th>
                                                            <th>Status</th>
                                                            <th>Action</th>  
                                                </tr> 
                                                </thead>
                                                    <?php  
                                                    $i=1;  
                                                    if (mysqli_num_rows($sql)>0) {  
                                                            while ($row=mysqli_fetch_assoc($sql)) { ?>  
                                                            <tr>  
                                                                <td><?php echo $i++ ?></td>  
                                                                <td><?php echo $row['fullName'] ?></td>  
                                                                <td><?php echo $row['address'] ?></td> 
                                                                <td><?php echo $row['meal'] ?></td> 
                                                                <td><?php echo $row['quantity'] ?></td> 
                                                                <td>  
                                                                    <?php  
                                                                    if ($row['status']==1) {  
                                                                            echo "Preparing";  
                                                                    }if ($row['status']==2) {  
                                                                            echo "Delivering";  
                                                                    }if ($row['status']==3) {  
                                                                            echo "Completed";  
                                                                    }  
                                                                    ?>  
                                                                </td>  
                                                                <td>  
                                                                    <select onchange="Admin_Dashboard(this.options[this.selectedIndex].value,'<?php echo $row['id'] ?>')">  
                                                                            <option value="">Update Status</option>  
                                                                            <option value="1">Preparing</option>  
                                                                            <option value="2">Delivering</option>  
                                                                            <option value="3">Completed</option>  
                                                                    </select>  
                                                                </td>  
                                                            </tr>       
                                                    <?php      }  
                                                        } ?>  

											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <script type="text/javascript">  
      function Admin_Dashboard(value,id){  
           //alert(id);  
           let url = "http://localhost/MerryMeal/login/admin/Admin_Dashboard/orders-list.php";  
           window.location.href= url+"?id="+id+"&status="+value;  
      }  
        </script>  
        
        <!--************
            Content body end
        *************-->

        <!--************
            Footer start
        *************-->
        
        <!--************
            Footer end
        *************-->

		<!--************
           Support ticket button start
        *************-->

	</div>
        <!--************
           Support ticket button end
        *************-->


    <!--************
        Main wrapper end
    *************-->

    <!--************
        Scripts
    *************-->
    <!-- Required vendors -->
    <script src="./js/global.min.js"></script>
	<script src="./js/bootstrap-select.min.js"></script>
	<script src="./js/jquery.dataTables.min.js"></script>
	<script src="./js/datatables.init.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./js/demo.js"></script>
    <script src="./js/styleSwitcher.js"></script>
</body>
</html>