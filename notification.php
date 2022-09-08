<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<?php include 'components/header.php'; ?>
    
<style type="text/css">
  .bg{

    background-color: #F2F2FF;
  }
</style>

</head>

 <?php

$api_url = 'https://api.cheflick.net/api/user/get-notifications';



$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: Bearer ".$_SESSION['remember_token']."" // i.e. An iPad 
  )
);
$context = stream_context_create($options);
$json_data = file_get_contents($api_url, false, $context);

$response_data = json_decode($json_data);

$alllocationdata = $response_data->data;

?>

<body>
<?php include 'components/navigation.php'; ?>
    
    <div class="container">
        <h2 style="font-size: 25px; color: #001746; font-weight:700">Notifications</h2>
       <!--  <div>
              <div class="row" style="margin-left:-80px;" >
        <div class="col-lg-9" >
            <h2 style="font-size: 18px; color: #001746;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h2>
        </div>
        
        <div class="col-lg-3">
            <h2 style="font-size: 18px; color: #001746;"><b style="font-weight:400;">Expiry:</b> 10-FEB-2022</h2>
        </div>
            
        </div> -->
        
<br>

<?php 

            for ($x = 0; $x < count($alllocationdata); $x++) 

            {


 ?>
<div class="shadow-none p-3  bg mb-5 rounded">
  <span style="color:#001746; font-weight: 600;"><?php echo $alllocationdata[$x]->notification ?></span>

<p style="float: right;">
<span style="color: #6A6A6A;">Expiry:</span> <b style="color:#001746;"><?php echo $alllocationdata[$x]->date ?></b>
</p>
</div>

<?php 

            }



 ?>
    </div>

<!-- Modal Map-->
<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <div style="width: 100%"><iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Sofrah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
          </iframe>
          <div class="row">
              <div class="input-group input-group-lg location my-2 col-lg-12">
                <input type="text" class="form-control" placeholder="Pakistan"  style="border-radius: 10px;border-color:#E1E1E1;" />
                <div class="input-group-btn">
                    <button class="fas fa-location ico"></button>
                </div>
            </div>
          </div>
          <div class="row">
              <div class=" input-group-lg search my-2 col-lg-6">
                <select class="form-control" placeholder=""  style="border-radius: 10px;" />
                  <option>Mark this position as</option>
                  <option>Pickup</option>
                </select>
            </div>
            <div class=" input-group-lg search my-2 col-lg-6">
            <button class="rate">FIND EATRIES</button>
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>