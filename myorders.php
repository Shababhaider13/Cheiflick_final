<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<?php 
include 'components/header.php';
include 'components/modals/map-modal.php';


 ?>
<?php
 $baserurl = 'https://cheflick.code7labs.com/';

$api_url = 'https://api.cheflick.net/api/user/past-order';



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

$past_order = $response_data->past_order;
$active_order = $response_data->active_order;

?>
    
<style type="text/css">
  .bg{

    background-color: #F2F2FF;
  }
</style>

</head>
<body>
<?php include 'components/navigation.php'; ?>
    
    <div class="container">
     

        <h2 style="font-size: 25px; color: #001746; font-weight:700">My Orders</h2>

<br>
        

        <div class="text-center">

         <a  onclick="category('active')"><button class="btn btn-primary" style="background-color:#9C3DFD; border-radius:15px;  width:135px;">Active</button></a>
         <a  onclick="category('post')"> <button class="btn btn-primary" style="background-color:#9C3DFD; border-radius:15px;  width:135px;">Post</button></a>
            </div>


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



<div id="active" class="category" style="display:none">


<?php   for ($y = 0; $y < count($active_order); $y++){?>

<div class="shadow-none p-3  mb-5 rounded">

 <span><img src="images/icon.PNG" width="53" height="53" class="rounded-circle"> </span>

  <span style="color:#001746; font-weight: 600; display: inline;">
  
  Nandos    (In Process)</span>




<p style="float: right;">
<span style="color: #6A6A6A;"> <b style="color:#001746; font-size:20px;">Rs 3000</b></span>
</p>
<br>
<div style="margin-left:59px;">

<span style="color:#001746; font-weight: 600; display: inline;"> 20 OCT 2020 | 12:00 am</span>
</div>
</div>

<?php } ?>
    </div>






    <div id="post" class="category" style="display:block">




    <?php   for ($x = 0; $x < count($past_order); $x++){?>
    <div class="shadow-none p-3  mb-5 rounded">

<span><img src="images/icon.PNG" width="53" height="53" class="rounded-circle"> </span>

 <span style="color:#001746; font-weight: 600; display: inline;">
 
 Nandos    (In Process)</span>




<p style="float: right;">
<span style="color: #6A6A6A;"> <b style="color:#001746; font-size:20px;">Rs 3000</b></span>
</p>
<br>
<div style="margin-left:59px;">

<span style="color:#001746; font-weight: 600; display: inline;"> 20 OCT 2020 | 12:00 am</span>
</div>
</div>
  <?php }?>






    </div>



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
<script>function category(categoryName) {
  var i;
  var x = document.getElementsByClassName("category");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(categoryName).style.display = "block";  
}</script>
</body>
</html>

