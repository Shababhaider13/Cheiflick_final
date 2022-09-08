
<?php


add_shortcode( 'termscondition', 'termsconditionfunc' );


function termsconditionfunc() {

    $url = 'https://kitchen.cheflick.net/api/user-term-condition';
    
    $arguments = array(
        'method' => 'GET'
    );



	
	add_filter( 'https_ssl_verify', '__return_false' );
	$response = wp_remote_get( $url, $arguments );
	$data = json_decode( wp_remote_retrieve_body( $response ) );
// 	$data = json_decode(wp_remote_retrieve_body( $response ));
  //	var_dump($data);
// 	$data= 	json_decode(var_dump($data));
// 	
	$dat = $data ->data;
	$dattext =  $dat ->text;
	if ( is_wp_error( $response ) ) {
		$error_message = $response->get_error_message();
		return "Something went wrong: $error_message";
	} else {
		
// 		echo '<pre>dssdsdkj';
// 		var_dump( wp_remote_retrieve_body( $response ) );
// 		 json_decode(wp_remote_retrieve_body( $response ));
//         json_decode( wp_remote_retrieve_body( $response ) );
// 	echo '</pre>';
	
echo $dattext;
	}
}	



add_shortcode( 'login', 'loginfunc' );


function loginfunc() {
$message = "";
	$baseurlapi = "https://api.cheflick.net/api/";
$webbaseurl = "https://cheflick.code7labs.com/";
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

    print_r( $obj['data']);
    header("Location:".$webbaseurl."dashboard/");
}
else{
//    header("Location:".$webbaseurl."login-signup/");
$message="User Not Found";
}


curl_close($curl);





}
    echo '
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<form class="" method="post" action="">
  <div class="form-row  ">
    <div class="form-group col-md-12 " >
      <label for="inputEmail4">Email</label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="email" class="form-control card2" id="inputEmail4" placeholder="Email" name="email">
    </div>
    

   
    <div class="form-group col-md-12 " >
      <label for="inputEmail4">Password </label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="name" class="form-control card2" id="inputEmail4" placeholder="Password" name="password">
    </div>
   <small style="color:#9C3DFD; font-weight:700;margin-left:330px;l">Forget Password</small>
   <small style="color:black; font-weight:700;margin-left:170px;l">Or Login With </small>
 </div>
  <div class=" " style=""  >
'.$message.'   
</div>
 <div class="form-group col-md-12 " style="margin-top:120px;"  >
      
      
      <input type="submit" class="form-control" style="border-radius:20px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; color: " name="login" value="Login Now">
    </div>
 </form>';
	
}	










add_shortcode( 'referafriend', 'referafriendfunc' );


function referafriendfunc() {
	session_start();
	$message = "";
	$baseurlapi = "https://api.cheflick.net/api/";
$webbaseurl = "https://cheflick.code7labs.com/";
	$url = $baseurlapi."user/refer-friend";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

if(isset($_POST['refer'])  ){

	$message="b";
	$name=$_POST['name1'];
$email=$_POST['email'];
$phone_number=$_POST['phone'];
$when_to_contact=$_POST['when_to_contact'];
// $to=$_POST['to'];
$from=$_POST['from'];




$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
   "Authorization: Bearer ".$_SESSION['remember_token']."" 
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
 	
 	"name":"$name",
    "email":"$email",
    "phone_number":"$phone_number",
    "when_to_contact":"$when_to_contact",
    "to":"$name",
    "from":"$from"
	
  }
DATA;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);

$obj = json_decode($resp,true);
if($obj['status']){

   
   $message="<div class='alert alert-success' role='alert'>
   Reffered
</div>";

//     header("Location:".$webbaseurl."dashboard/");
}
else{
$message="<div class='alert alert-danger' role='alert'>
  Warning! The User Not Found Login First <a href ='/login'> Login Now</a>
</div>";
}
curl_close($curl);
}

    echo '
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<form class="" method="post" action="">
 <div class="form-row  ">
    <div class="form-group col-md-6 " >
      <label for="inputEmail4">Your Name</label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="name" class="form-control card2" id="inputEmail4" placeholder="Name" name="name1">
    </div>
     <div class="form-group col-md-6 " >
      <label for="inputEmail4">Your Number</label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="name" class="form-control card2" id="inputEmail4" placeholder="Phone Number" name="phone">
    </div>
  </div>

 
  <div class="form-row  ">
    <div class="form-group col-md-6 " >
      <label for="inputEmail4">Refferal Name</label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="name" class="form-control card2" id="inputEmail4" placeholder="Name" name="from">
    </div>
     <div class="form-group col-md-6 " >
      <label for="inputEmail4">Bussiness Name</label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="name" class="form-control card2" id="inputEmail4" placeholder="Bussiness Name" name="bname">
    </div>
  </div>
   <div class="form-row  ">
    <div class="form-group col-md-6 " >
      <label for="inputEmail4">How do you find us?</label>
         <select id="inputState" class="form-control" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; " name="findus">
        <option selected>Choose...</option>
        <option>saassaas</option>
      </select>
    </div>
     <div class="form-group col-md-6 " >
      <label for="inputEmail4">Refferal Number</label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="name" class="form-control card2" id="inputEmail4" placeholder="Phone" name="phone">
    </div>
  </div>
  <div class="form-row  ">
    <div class="form-group col-md-6 " >
      <label for="inputEmail4">Email</label>
      <input style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; " type="email" class="form-control card2" id="inputEmail4" placeholder="Email" name="email">
    </div>
     <div class="form-group col-md-6 " >
      <label for="inputEmail4">When Should we Contact</label>
      <select id="inputState" class="form-control" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; " name="when_to_contact">
        <option selected>Choose...</option>
        <option>sasasasa</option>
      </select>
    </div>
  </div>
  <div class="form-row  ">
    <div class="form-group col-md-6 " >
      <label for="inputEmail4">City</label>
      <select id="inputState" class="form-control" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; " name="city">
        <option selected>Choose...</option>
        <option>sasasa</option>
      </select>
    </div>
     <div class="form-group col-md-6 " >
      <label for="inputEmail4">Address</label>
      <select id="inputState" class="form-control" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; " name="address">
        <option selected>Choose...</option>
        <option>sasa</option>
      </select>
    </div>
  </div> 
  <div class="form-group col-md-12 " >
      
      <input type="submit"  name="refer" value="Refer" class="form-control" style="border-radius:20px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s; height:50px; color: ">   
    </div>
  
</form><div class="form-group col-md-12 " >
  '.$message.' </div>';

	
	 
}	





?>
