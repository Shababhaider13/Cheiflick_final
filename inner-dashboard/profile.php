<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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
.profile img{
align-content: center;
width: 150px;
}
.username{
color: #001746;
font-family: Metropolis,Bold;
font-weight: 700;
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
 <h2 class="mb-4"><b>Profile</b></h2>
<div class="profile text-center">
<img class="rounded-circle " alt="80x80"  src="https://picsum.photos/id/3/80/80" data-holder-rendered="true">
<h2 class="username">Emilia Clark</h2>
     </div>       
  </div>
  
<form >
  <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Name</label>
      <div class="card2">
      <input  type="name" style="border-radius:10px; " class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    </div>
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Name</label>
      <div class="card2">
      <input  type="name" style="border-radius:10px; " class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6 " >
      <label for="inputEmail4">How do you find us</label>
      <div class="card2">
         <select id="inputState" class="form-control" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; ">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
</div>
     <div class="form-group col-md-6 ">
      <label for="inputEmail4">Name</label>
      <div class="card2">
      <input  type="name" style="border-radius:10px; " class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    </div>
  </div>
  <div class="form-row  ">
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Name</label>
      <div class="card2">
      <input  type="name" style="border-radius:10px; " class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    </div>
     <div class="form-group col-md-6 " >
      <label for="inputEmail4">When Should we Contact</label>
      <select id="inputState" class="form-control" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; ">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
  </div>
  <div class="form-row  ">
    <div class="form-group col-md-6 " >
      <label for="inputEmail4">City</label>
      <select id="inputState" class="form-control" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; ">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
     <div class="form-group col-md-6 mt-2">
      
      <input type="submit" class="form-control card2" style="border-radius:20px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; color:white;  background-color: #9C3DFD;" value="Register Now">
       
    </div>
  </div>
  
  
</form>
  








       

       

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>