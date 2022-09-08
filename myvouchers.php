<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<?php include 'components/header.php';

include 'components/modals/voucher-modal.php'; ?>

    <style type="text/css">
  .bg{

    background-color: #F2F2FF;
  }
</style>


</head>
<body>
<?php include 'components/navigation.php'; ?>

    <?php
 $baserurl = 'https://cheflick.code7labs.com/';

$api_url = 'https://api.cheflick.net/api/user/get-vouchers';



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

$user_data = $response_data->data;
$active_voucher = $user_data->active_voucher;


?>






    <div class="container">
           <span style="float: right; color:#9C3DFD; float: right; font-size: 15px;font-weight: 700; "><a data-toggle="modal" href="#modal1" class="voucher-btn">Add new Vouchers</a></span>
				
						<h2 style="color:#001746;"><b>My Vouchers</b></h2>
					<br>
            <?php
            for ($x = 0; $x < count($active_voucher); $x++) {

             ?>
             <div class="shadow-none p-3  bg mb-5 rounded">
              <span style="color:#001746; font-weight: 600;"> <?php echo $active_voucher[$x]->voucherName ;?> </span>

 <p style="float: right;">
<span style="color: #6A6A6A;">Expiry:</span> <b style="color:#001746;"><?php echo $active_voucher[$x]->voucherExpirty;?></b><br>


<span style="color:#9C3DFD; float: right; font-size: 25px;font-weight: 700; ">Rs <?php echo $active_voucher[$x]->price ;?>
</span>

</p><br>
<span style="color: #6A6A6A;">code:</span><b style="color:#9C3DFD;"><?php echo $active_voucher[$x]->voucherCode ;?></b> 


 

</div>
               
              
               
              
               
                
              
           


            <?php } ?>

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