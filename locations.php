<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<?php 
include 'components/header.php';
include 'components/modals/map-modal.php'; 


 ?>
    
<style type="text/css">
  .bg{
    background-color: #F2F2FF;
  }
</style>

</head>
  <?php

$api_url = 'https://api.cheflick.net/api/user/all-location';



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
      <br>
      <br>
       <span style="float: right; color:#9C3DFD; float: right; font-size: 15px;font-weight: 700; "><a data-toggle="modal" href="#mapModal" class="voucher-btn">Add new Locations</a></span>  
        <h2 style="font-size: 25px; color: #001746; font-weight:700">My Locations</h2>
      
        
<br>


<?php 

            for ($x = 0; $x < count($alllocationdata); $x++) {


 ?>
<div class="shadow-none p-3  bg mb-5 rounded">
  <span style="color:#001746; font-weight: 700;"><?php echo $alllocationdata[$x]->type ?>  </span>
 
<a data-toggle="modal" href="#mapModal" class="voucher-btn">
<p style="float: right;">
<span style="color:#9C3DFD; font-weight: 700">Edit</span> 
</p>
</a>
<br>

<span style="color: #6A6A6A;"><?php echo $alllocationdata[$x]->address ?><?php echo $alllocationdata[$x]->address1 ?></span>


</div>


<?php 

            }


 ?>

    </div>


</body>
</html>