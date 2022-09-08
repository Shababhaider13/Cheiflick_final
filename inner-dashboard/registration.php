<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <style type="text/css">
  	 .form-control[readonly] {
    background-color: white;
    opacity: 1;
    height: 50px;
}
  	input[type="name"]{
    height: 50px;
    
}
.drop{
    height: 50px;
    
}
.card2 {
  /* Add shadows to create the "card" effect */
   border-radius:20px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  transition: 0.3s;


}

/* On mouse-over, add a deeper shadow */
.card2:hover {
 
   border-radius:50px;
}

</style>
 
  <body>
		
		<div class="wrapper d-flex align-items-stretch" >
			<nav id="sidebar" style="background-color: #1c0039
; width: 250px;">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
				<div class="p-4" style="margin-top:50px;">
		  		<h1><a href="index.html" class="logo"><img src="images/logo.png" width="220px"></a></h1>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="index.php"> Overview</a>
	          </li>
	          <li>
	              <a href="registration.php">Registration</a>
	          </li>
	          <li>
              <a href="profile.php"> Profile</a>
	          </li>

               <li>
              <a href="commission.php"> Comission</a>
              </li>
	          
	        </ul>

	       <!--  <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div> -->

	        <div class="footer">
	        	
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      	<div class="container">
 <h2 class="mb-4">All Registrations</h2>
      
            <div class="row" style="margin-top:50px;">
      <div class="col-12 col-md-8 col-lg-12">
        <ul class="nav nav-tabs " role="tablist">
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#duck2" role="tab" aria-controls="duck2" aria-selected="true" style="color:black;"><b>All</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#chicken2" role="tab" aria-controls="chicken2" aria-selected="false" style="color:black;"><b>Pending Payements</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#kiwi2" role="tab" aria-controls="kiwi2" aria-selected="false" style="color:black;"><b>Completed</b></a>
          </li>
          
        </ul>
        
        <div class="tab-content mt-3">
          <div class="tab-pane" id="duck2" role="tabpanel" aria-labelledby="duck-tab">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card card2">
                    <div class="card-body">
                      
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                
                                <tbody>
                                    <tr style="outline-color: black;">
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                                                        <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>


                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
          </div>
          <div class="tab-pane active" id="chicken2" role="tabpanel" aria-labelledby="chicken-tab">
           <div class="col-lg-12 grid-margin stretch-card">
                <div class="card card2">
                    <div class="card-body">
                      
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                
                                <tbody>
                                    <tr style="outline-color: black;">
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                                                        <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>


                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  
          </div>
          <div class="tab-pane" id="kiwi2" role="tabpanel" aria-labelledby="kiwi-tab">
           <div class="col-lg-12 grid-margin stretch-card">
                <div class="card card2">
                    <div class="card-body">
                      
                        <div class="table-responsive table-borderless">
                            <table class="table">
                                
                                <tbody>
                                    <tr style="outline-color: black;">
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                                                        <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 18px; color: #001746;"><b>Junaid Ahmed</b></td>
                                        <td>20 OCT 2020 | 12:00 am</td>
                                        <td style="color: #9C3DFD;" >Completed</td>
                                        <td style="font-size: 18px; color: #001746;"><b>Rs.500</b></td>
                                    </tr>


                                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
  
          </div>
         </div>
        
      </div>
  </div>











       

       

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>