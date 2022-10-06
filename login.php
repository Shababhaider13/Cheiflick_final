<?php
// include_once 'constant.php';
$baseurlapi="https://api.cheflick.net/api/";
$url = $baseurlapi."user/login-user";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];

$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  
  "email":"$email",
    "password":"$password",
    "device_type":"device_type",
    "device_token":"device_token"
  
  
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);

$obj = json_decode($resp,true);
if($obj['status']){
//   ini_set('session.cookie_domain','.domain.com');

// echo ini_get('session.cookie_domain');
// session_set_cookie_params( 0, "/", ".domain.com", false, false); 

   session_start();
   
    // $_SESSION['favcolor'] = "green";
     $_SESSION['userId'] = $obj['data']['userId'];
     $_SESSION['userFullName'] = $obj['data']['userFullName'];
     $_SESSION['userEmail'] = $obj['data']['userEmail'];
     $_SESSION['userPhoneNumber'] = $obj['data']['userPhoneNumber'];
     $_SESSION['address'] = $obj['data']['address'];
     $_SESSION['userImage'] = $obj['data']['userImage'];
     $_SESSION['remember_token'] = $obj['data']['remember_token'];
     $_SESSION['device_type'] = $obj['data']['device_type'];
     $_SESSION['device_token'] = $obj['data']['device_token'];
     $_SESSION['isSocial'] = $obj['data']['isSocial'];
     $_SESSION['provider'] = $obj['data']['provider'];
     $_SESSION['longitude'] = $obj['data']['longitude'];
     $_SESSION['latitude'] = $obj['data']['latitude'];
     $_SESSION['address_type'] = $obj['data']['address_type'];
     $_SESSION['user_city'] = $obj['data']['user_city'];
     $_SESSION['address1'] = $obj['data']['address1'];
    $_SESSION['cart_item'] = array();
    print_r( $obj['data']);
    header("Location:index.php");
}
else{
   header("Location:login.php");

}


curl_close($curl);

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<?php include 'components/header.php'; ?>
    

</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="cardShadow" style="height: 450px; width:500px; margin-top:50px;" >
<h4 style="text-align:center; margin-top:30px">Login</h4>
<form class="" method="post" action="login.php" style="width:400px; margin-top:50px; margin-left:36px">
  <div class="form-row  ">
    <div class="form-group col-md-12 " style="margin-right: 40px;" >
      <label for="inputEmail4">Email</label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="email" class="form-control card2" id="inputEmail4" placeholder="Email" name="email">
    </div>
    

   
    <div class="form-group col-md-12 " style="margin-right: 40px;" >
      <label for="inputEmail4">Password </label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="name" class="form-control card2" id="inputEmail4" placeholder="Password" name="password">
    </div>

    <div class="from-group col-md-12">
    <div class="form-row  ">
    <small style="color:#9C3DFD; font-weight:700; margin-left:300px">Forgor Password?</small>
    </div>
    </div>

    <div class="from-group col-md-12">
    <div class="form-row  ">
    <small style="color:black; font-weight:700; margin-left:150px">Or Login With </small>
    </div>
    </div>
    

   <div class="form-group col-md-12 " style="margin-top:30px;"  >
      <input type="submit" class="form-control" style="color:#fff; background-color:#9C3DFD; border-radius:20px; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px;   " name="login" value="Login Now">
       
    </div>
 </div>

  
 </form>
 </div>
</body>
</html>


<!-- //3370|GQZhqqZMLw6nIrFKxPVddQdLnpWJVwUln9v19G6e -->