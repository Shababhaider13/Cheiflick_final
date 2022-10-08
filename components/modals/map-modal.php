<?php

// include_once 'constant.php';


if(isset($_POST['locationadd'])){
$baseurlapi="https://api.cheflick.net/api/";
$url = $baseurlapi."user/user-location";
// echo $url;

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$title=$_POST['title'];
$address=$_POST['location'];
// $latitude=$_POST['latitude'];
// $longitude=$_POST['longitude'];
$latitude = "<script>document.write(latitude)</script>"; 
$longitude = "<script>document.write(longitude)</script>"; 
echo   "<script>document.write(yy)</script>"; 
  

$type=$_POST['type'];


$headers = array(
   "Accept: application/json",
   "Content-Type: application/json",
   "Authorization: Bearer ".$_SESSION['remember_token']."" 
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data= <<<DATA
{
  
  "title":"$title",
  "address":"$address",
  "latitude":"$latitude",
  "longitude":"$longitude",
  "type":"$type"
  
  
  }
DATA;
// echo $data;
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

$obj = json_decode($resp,true);

if($obj['status']){

    // print_r( $obj['data']);
}
else{

}


curl_close($curl);




}
?>



<?php
$iframe= ' <iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Sofrah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
  </iframe>';
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>




<script type='text/javascript'>


            $(document).ready(function(){
                $('#location').on('input',function(){
                    
                    var office = $('#location').val();
                    // alert(office);
                    $.ajax({
                    type:'post',
                    url : 'components/modals/map.php',
                    data : { sql : office},
                    success:function(result){
                      $('.mapsearch').html(result);
                    	// alert(result);
                    }})
                })
            })
</script>





<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="height:650px">
    <div class="modal-content" style="position: absolute; height:100%;">
      <div class="modal-body col-12">
          <div style="width: 100%">
<!--           
          <iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Sofrah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
          </iframe> -->


        <div class="mapsearch" id="mapsearch">
          <?php echo $iframe;?>
        </div>

        <form action="" method="post">

          <div class="row">
            
          <div class="input-group input-group-lg location my-2 col-lg-12">

          <input  class="form-control" placeholder="Title"  style="border-radius: 10px;border-color:#E1E1E1;" type="text" name="title" id ="title" required/>
          </div>
              <div class="input-group input-group-lg location my-2 col-lg-12">
              
              
              <!-- <input type="text" class="form-control" placeholder="Pakistan"  style="border-radius: 10px;border-color:#E1E1E1;" /> -->
              
              <!-- <form name="test" action="#" method="POST">
              <input type="text" name="search" />
              </form> -->


              

              <input  class="form-control" placeholder="Pakistan"  style="border-radius: 10px;border-color:#E1E1E1;" type="text" name="location" id ="location" required/>

              







                <div class="input-group-btn" >
                    <button class="fas fa-location ico" onclick="getLocation()" required></button>
                </div>
            

         





            </div>
          </div>
          <div class="row">
              <div class=" input-group-lg location my-2 col-lg-6">
                <select class="form-control" placeholder="" name="type" style="border-radius: 10px;" required>
                	<option value="home">Home</option>
                	<option  value="work" >Work</option>
                  <option value="other">Other</option>
                </select>
            </div>
            <div class=" input-group-lg search my-2 col-lg-6">
            <button type="submit" class="rate" name="locationadd">Add Location</button>
            </div>
          </div>
          </form>
          </div>
      </div>
    </div>
  </div>
</div>


<script>
var x = document.getElementById("mapsearch");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  latitude = position.coords.latitude;
  longitude = position.coords.longitude;
  // y  = "https://www.google.com/maps/search/" + latitude +
  //     ",+" + longitude+"/@"+ latitude+","+ longitude+","+"17z";
  //     alert(y);
  x.innerHTML = '<iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q='  + position.coords.latitude +',' +position.coords.longitude+'&output=embed"></iframe>' ;

}
</script>

<script>
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>