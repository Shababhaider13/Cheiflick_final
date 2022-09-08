
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
<?php include 'components/header.php'; ?>
<?php
include 'components/navigation.php'; ?>
<?php include 'components/modals/feedback.php'; ?>

<?php

$id=$_GET['id'];
$api_url = 'https://api.cheflick.net/api/user/view-all?view_id=$id&kitchen_type=both&latitude=33.698&longitude=73.053&order_types=same_day&mode_of_delivery=delivery';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data->data;
?>
<section>
  <div class="container">
<div class="row mt-4 mb-4">
        <div class="col-lg-4">
          <div class="col-md-12 input-group input-group-lg filter">
            <span class="input-group-addon search-icon"><i class="fas fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search Food" style="border-color:#E1E1E1;">
                <div class="input-group-btn">
                    <button class="fas fa-filter ico" data-toggle="modal" data-target="#mapModal"></button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="col-md-12 input-group-lg search2">
                <select class="form-control" placeholder="Categories" />
                  <option>Categories</option>
                  <option>Pickup</option>
                </select>
            </div>
        </div>
      </div>
    </div>
      </section>
<section>
  
    <div class="container custom">
        <div class="row text-center mb-4">
            <div class="col-sm-6">
                <h3 class="mb-3">Kitchens Nearby</h3>
            </div>
            <!-- api insertion -->
            <script type="text/javascript">
              $(document).ready(function() {
            function loadtable() {
                $.ajax({
                    url: 'https://api.cheflick.net/api/user/search',
                    type: "GET",
                    success: function(data) {
                            $.each(data, function(key, value) {
                              //[data["kitchens"][0]["kitchen_name"]]
                                 console.log(value)         
                            })
                        

                    }
                })
            }
            loadtable();
          })
            </script>
           
            
            <div class="col-sm-6 text-right" >
            </div>
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
            <!-- api insertion end -->
            <div class="col-sm-6 text-right">
            </div>
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
              <div class="cardShadow mt-4">
                <div class="row text-center">
                  <div class="col-md-5">
                    <img class="cardImage" src="images/row2.png">
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">
                        <h4 class="cardHeading22">Café De Bambaa</h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-8">
                        <p class="cardText">Café Western Food</p>
                      </div>
                      <div class="col-md-3">
                        <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                      </div>
                    </div>
                    <div class="row text-center">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> Open</span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> Kitchen</span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-7">
                        <p class="cardText">8am - 10pm</p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText">Tariq Road</p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
</section>
<!-- Modal Map-->
<?php include 'components/modals/map-modal.php'; ?>
</body>
</html>