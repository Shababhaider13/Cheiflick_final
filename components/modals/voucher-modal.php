
    <?php

$api_url1 = 'https://api.cheflick.net/api/user/get-vouchers';



$options1 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: Bearer ".$_SESSION['remember_token']."" // i.e. An iPad 
  )
);
$context1 = stream_context_create($options1);
$json_data1 = file_get_contents($api_url1, false, $context1);

$response_data1 = json_decode($json_data1);

$user_data1 = $response_data1->data;
$active_voucher1 = $user_data1->active_voucher;


?>


 <?php
if(isset($_REQUEST['submit'])){
$api_url12 = 'https://api.cheflick.net/api/user/check-voucher-code?voucher_code='.$_REQUEST['vouchercode'];


$options12 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: Bearer ".$_SESSION['remember_token']."" // i.e. An iPad 
  )
);
$context12 = stream_context_create($options12);
$json_data12 = file_get_contents($api_url12, false, $context12);

$response_data12 = json_decode($json_data12);

$voucheraddstatus = $response_data12->status;
$voucheraddmessage = $response_data12->message;
echo '<script>alert("'.$voucheraddmessage.'")</script>';

}
?>
<div class="modal" id="modal1">
	<div class="modal-dialog modal-dialog-centered" style="height: 1150px;">
      <div class="modal-content" style="position: absolute;">
        
        <div class="modal-body">
            <div class="modalCard">
                <div class="row py-2 px-2">
                    <div class="col-sm-6">
                        <p class="bold voucherHead">Apply Voucher</p>
                    </div>
                    <div class="col-sm-6">
                        <a data-toggle="modal" href="#modal2" class="voucher-btn">Apply Voucher</a>
                    </div>
            </div>
                

            <?php

            for ($y = 0; $y < count($active_voucher1); $y++) {

             ?>

                <div class="row voucherModal mb-2">
                    <div class="col-sm-6">
                        <p class="bold"><?php echo $active_voucher1[$y]->voucherName ?>  </p>
                        <p class="card-texttt">Code: <span class="orderText"><?php echo $active_voucher1[$y]->voucherName ;?></span></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="cardTextt">Expiry: <span class="bold"><?php echo $active_voucher1[$y]->voucherExpirty ?></span></p>
                        <p class="text-end"><span class="orderTextt">Rs. <?php echo $active_voucher1[$y]->price ?></span></p>
                    </div>
                </div>


           <?php } ?>
                


            </div>
          <button data-toggle="modal" href="#modal2" class="rate2">ADD NEW VOUCHER</button>
        </div>
      </div>
    </div>
</div>
<div class="modal" id="modal2" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="container containerCustom"></div>
        <div class="modal-body">
            <form method="post" action="myvouchers.php">
            <div class="row py-2 px-2">
                    <div class="col-sm-12">
                        <p class="bold voucherHead">Apply New Voucher</p>
                    </div>
            </div>
            <div class="row mb-2 mt-2">
        <div class="col-lg-12">
          <div class="col-md-12 input-group input-group-lg voucherInput">

                <input type="text" class="form-control" placeholder="XXXXX" name="vouchercode" />
            </div>
        </div>
    </div>
     <!-- data-dismiss="modal" -->
          <button   name="submit" type="submit" href="#modal2" class="rate2">ADD NEW VOUCHER</button>
          </form>
            
        </div>
      </div>
    </div>
</div>