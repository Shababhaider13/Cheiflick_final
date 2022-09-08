<!doctype html>
<html lang="en">
  <head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="inner-dashboard/css/style.css">
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
 <?php 
require'components/header.php';
require'components/navigation.php';



if(isset($_POST['asasas'])){



  $username = $_POST['username'];
  $useremail = $_POST['useremail'];
  $userphone = $_POST['userphone'];
  $api_url12 = 'https://api.cheflick.net/api/user/update-profile';

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $api_url12);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  
  
  $headers = array(
     "Accept: application/json",
     "Content-Type: application/json",
     "Authorization: Bearer ".$_SESSION['remember_token']."" 
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  
  $data= <<<DATA
  {
    
    "full_name":"$username",
    "email":"$useremail",
    "phone":"$userphone"
   
    
    }
  DATA;
  // echo $data;
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  
  $resp = curl_exec($curl);
  
  

$response_data12 = json_decode($resp);

$profileaddstatus = $response_data12->status;


$profileadddata = $response_data12->data;



$_SESSION['userFullName'] =$profileadddata ->userFullName;
$_SESSION['userEmail'] =$profileadddata ->userEmail;
$_SESSION['userPhoneNumber'] = $profileadddata ->userPhoneNumber;

$profilemessage = $response_data12->message;
echo '<script>alert("'.$profilemessage.'")</script>';

}
    ?>

<?<?php if(isset($_POST['save'])){



  
  $useremail_pass = $_SESSION['userEmail'];
  $user_password = $_POST['new-pass'];
   
 
  $api_url123 = 'https://api.cheflick.net/api/user/change-password';

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $api_url123);
  curl_setopt($curl, CURLOPT_POST, true);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  
  
  $headers = array(
     "Accept: application/json",
     "Content-Type: application/json",
     "Authorization: Bearer ".$_SESSION['remember_token']."" 
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  
  $data= <<<DATA
  {
    
    "email":"$useremail_pass",
    "password":"$user_password"
   
    
    }
  DATA;
  // echo $data;
  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
  
  $resp12 = curl_exec($curl);
  
  

$response_data123 = json_decode($resp12);

$profileaddstatus22 = $response_data123->status;








$profilemessage222 = $response_data123->messgae;
echo '<script>alert("'.$profilemessage222.'")</script>';

}
     ?>







  <body>
        <!-- Page Content  -->
<div class="container col-md-8">
<div class="profile text-center">
<img class="rounded-circle " alt="80x80" src="<?php echo $_SESSION['userImage']; ?>" data-holder-rendered="true">
<h2 class="username"><?php echo $_SESSION['userFullName']; ?> </h2>
     </div>       
   
<form  class="text-left" method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Name</label>
      <div class="card2">
      <input  type="text" style="border-radius:10px; " class="form-control" id="inputEmail4" value="<?php echo $_SESSION['userFullName']; ?> " name="username" >
    </div>
    </div>
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Email</label>
      <div class="card2">
      <input  type="email" style="border-radius:10px; " class="form-control" id="inputEmail4" value="<?php echo $_SESSION['userEmail']; ?>"  name="useremail">
    </div>
    </div>
  </div>
   <div class="form-row">
    
     <div class="form-group col-md-6 ">
      <label for="inputEmail4">Phone Number</label>
      <div class="card2">
      <input  type="number" style="border-radius:10px; " class="form-control" id="inputEmail4" value="<?php echo $_SESSION['userPhoneNumber']; ?>"  name="userphone">
    </div>
    </div>

    <div class="form-group col-md-6 mt-2">
      
      <input type="submit" class="form-control card2" style="border-radius:20px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; color:white;  background-color: #9C3DFD;" value="Save" name="asasas">
       
    </div>


  </div>
</form>

  <form   class="text-left" method="post" action="">
  <div class="form-row  ">
    <div class="form-group col-md-6 ">
      <label for="inputEmail4">Old Password</label>
      <div class="card2">
      <input  type="name" style="border-radius:10px; " class="form-control" required id="inputEmail4" placeholder="Old Password">
    </div>
    </div>

     <div class="form-group col-md-6 " >
      <label for="inputEmail4">New Password</label>
       <input  type="name" style="border-radius:10px;" required name="new-pass" class="form-control" id="inputEmail4" placeholder="New Password">
    </div>
  </div>
  
     <div class="form-group col-md-6 mt-2 ">
      
      <input type="submit" class="form-control card2 text-center" name="save" style="border-radius:20px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; color:white;  background-color: #9C3DFD;" value="Save Password">
       
    </div>
  </div>
  
  
</form>
  








       

       

  </body>
</html>