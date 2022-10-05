<?php 
define("API_KEY","AIzaSyDn1JrKoNqygrc0Wjei_wpPCSFIJXvvclk") ?>
<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<?php include 'components/header.php'; ?>
  
</head>
<body>
<?php include 'components/navigation.php'; ?>
    
<?php

$api_url = 'https://api.cheflick.net/api/user/user-dashboard?latitude=24.9047&longitude=67.0781';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

// All user data exists in 'data' object
$user_data = $response_data->data;
$meal = $user_data->meal;
$offer = $user_data->offer;
$category = $user_data->category;
$offerchunk = array_chunk($offer, 3, true);
$categorychunk = array_chunk($category, 3);




$nearby = $user_data->nearby;
$nearbychunk = array_chunk($nearby, 2);
// print_r( count($nearby));
// print_r(count($nearbychunk[1][0]));
// print_r(count($nearbychunk[1]));
// print_r(count($nearbychunk[1][1]));


// print_r($user_data->meal);
// print_r($offer);
// echo "ssadsasd";
// echo count($offerchunk);
?>


<section>
  <div class="container">
<div class="row mt-4 mb-4">
        <div class="col-lg-4">
          <div class="col-md-12 input-group input-group-lg filter">
            <span class="input-group-addon search-icon"><i class="fas fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search Food" style="border-color:#E1E1E1;">
                <div class="input-group-btn">
                    <button class="fas fa-filter ico" data-toggle="modal" data-target="#mapModal" ></button>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
          <div class="col-md-12 input-group-lg search2">
                <select class="form-control" placeholder="Categories" style="border-radius: unset;"/>
                  <option>Categories</option>
                  <option>Pickup</option>
                </select>
            </div>
        </div>
        <?php

        ?>
        <!-- <div class="col-lg-4">
            <div class="col-md-12 input-group-lg dropdown search2">
            <button class="dropbtn 
                    dropdown-toggle" type="button" 
                    id="dropdownMenuButton" 
                    data-toggle="dropdown"
                    aria-haspopup="true" 
                    aria-expanded="false">
                Country Flags <span class="dropico"><i class="fas fa-chevron-down"></i></span>
            </button>
  
            <ul class="dropdown-menu" style="width:92% !important"
                aria-labelledby="dropdownMenuButton">
                <li class="dropdown-item">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200630132503/iflag.jpg"
                    width="20" height="15"> India</li>
                <li class="dropdown-item">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200630132504/uflag.jpg" 
                    width="20" height="15"> USA</li>
                <li class="dropdown-item">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200630132502/eflag.jpg" 
                    width="20" height="15"> England</li>
                <li class="dropdown-item">
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20200630132500/bflag.jpg"
                    width="20" height="15"> Brazil</li>
            </ul>
        </div>
        </div> -->
      </div>
    </div>
      </section>
      <section class="pt-5 pb-5">
    <div class="container custom">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Offers </h3>
            </div>
            <div class="col-6 text-right">
            </div>
            <div class="col-sm-12 slick-slider">
                        <?php
            $bg = array("bg-1","bg-2","bg-3");
            for ($x = 0; $x < count($offerchunk); $x++) {
                    ?>
                        <?php
            for ($y = 0; $y < count($offerchunk[$x]); $y++) {
                    ?>
                <a href="testingdsmoasoas" style= "  color: blue; text-decoration: none;">
                <div class="col-md-4 mb-3">
                <div class="card <?php echo $bg[$y] ?> element element-2">
                    <div class="row">
                      <div class="col-6 card-head">
                        <h4 class="card-title before1"><?php echo $offerchunk[$x][$y]->title ?></h4>
                        <p class="card-text"><?php if (strlen($offerchunk[$x][$y]->description) > 60){echo substr($offerchunk[$x][$y]->description, 0, 59) . '...';}else{echo $offerchunk[$x][$y]->description;} ?></p>
                        <a href="#" class="availText">Avail Now</a>
                      </div>
                    <div class="col-6">
                      <img class="cardImg" src="<?php echo $offerchunk[$x][$y]->image?>">
                    </div>
                    </div>
                    </div>

                </div>
                </a>      
                
        <?php } ?>
                            <?php } ?>
                            
                </div>    
                
                    </div>
                </div>
                
</section>
<section>
    <div class="container">
        <div class="row px-2">
            
                  
                        
                    <?php
            for ($x = 0; $x <count($meal); $x++) {

                    ?>
           
            <div class="col-sm-4 mb-2">
                <a href="kitchen.php?id=<?php echo $meal[$x]->id ?>" style= "  color: blue; text-decoration: none;">
                <div class="mainText" style ="background-image :url(<?php echo $meal[$x]->meal_img ?>)">
                  <div class="overlay">
                    <div class="textEnd">
                  <h2 class="mainText-heading"><?php echo $meal[$x]->meal_title ?></h2>
                  <p class="mainText-text"><?php if (strlen($meal[$x]->meal_subtitle) > 60){echo substr($meal[$x]->meal_subtitle, 0, 59) . '...';}else{echo $meal[$x]->meal_subtitle;} ?></p>
                  </div>
                  </div>
                </div> </a>
            </div>       
           
        <?php } ?>




        </div>
    </div>
</section>
<?php include 'components/slide.php'; ?>

<section style="margin-top: 20px;">
    <div class="container custom">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Featured</h3>
            </div>
            <div class="col-6 text-right">
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card bgg-1">
                                        <img src="images/row2.png">
                                        <div class="overlay1">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="watch">
                                                <i class="fas fa-clock"><span class="iText"> Open</span></i>
                                              </div>
                                            </div>
                                            <div class="col-md-5">
                                              
                                            </div>
                                            <div class="col-md-3">
                                              <div class="heart" >
                                                <i class="fas fa-heart"></i>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row rowCustom" style="height: 100px;">
                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-md-5">
                                              <div class="watch">
                                                <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              
                                            </div>
                                            <div class="col-md-4">
                                              <div class="watch">
                                                <span class="iText" style="padding-left: 15px;"> Kitchen</span>
                                              </div>
                                            </div>
                                            <div class="col-md-1">
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <h4 class="cardHeading">Café De Bambaa</h4>
                                        <div class="row">
                                          <div class="col-md-8">
                                            <p class="cardText">Café Western Food</p>
                                          </div>
                                          <div class="col-md-3">
                                            <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-7">
                                            <p class="cardText">8am - 10pm</p>
                                          </div>
                                          <div class="col-md-4">
                                            <p class="cardText">Tariq Road</p>
                                          </div>
                                        </div>
                                        
                                    </div>

                                    </div>
                                <div class="col-lg-3">
                                    <div class="card bgg-1">
                                        <img src="images/row2.png">
                                        <div class="overlay1">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="watch">
                                                <i class="fas fa-clock"><span class="iText"> Open</span></i>
                                              </div>
                                            </div>
                                            <div class="col-md-5">
                                              
                                            </div>
                                            <div class="col-md-3">
                                              <div class="heart">
                                                <i class="fas fa-heart"></i>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row rowCustom" style="height: 100px;">
                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-md-5">
                                              <div class="watch">
                                                <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              
                                            </div>
                                            <div class="col-md-4">
                                              <div class="watch">
                                                <span class="iText" style="padding-left: 15px;"> Kitchen</span>
                                              </div>
                                            </div>
                                            <div class="col-md-1">
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <h4 class="cardHeading">Café De Bambaa</h4>
                                        <div class="row">
                                          <div class="col-md-8">
                                            <p class="cardText">Café Western Food</p>
                                          </div>
                                          <div class="col-md-3">
                                            <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-7">
                                            <p class="cardText">8am - 10pm</p>
                                          </div>
                                          <div class="col-md-4">
                                            <p class="cardText">Tariq Road</p>
                                          </div>
                                        </div>
                                        
                                    </div>

                                    </div>
                                <div class="col-lg-3">
                                    <div class="card bgg-1">
                                        <img src="images/row2.png">
                                        <div class="overlay1">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="watch">
                                                <i class="fas fa-clock"><span class="iText"> Open</span></i>
                                              </div>
                                            </div>
                                            <div class="col-md-5">
                                              
                                            </div>
                                            <div class="col-md-3">
                                              <div class="heart">
                                                <i class="fas fa-heart"></i>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row rowCustom" style="height: 100px;">
                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-md-5">
                                              <div class="watch">
                                                <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              
                                            </div>
                                            <div class="col-md-4">
                                              <div class="watch">
                                                <span class="iText" style="padding-left: 15px;"> Kitchen</span>
                                              </div>
                                            </div>
                                            <div class="col-md-1">
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <h4 class="cardHeading">Café De Bambaa</h4>
                                        <div class="row">
                                          <div class="col-md-8">
                                            <p class="cardText">Café Western Food</p>
                                          </div>
                                          <div class="col-md-3">
                                            <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-7">
                                            <p class="cardText">8am - 10pm</p>
                                          </div>
                                          <div class="col-md-4">
                                            <p class="cardText">Tariq Road</p>
                                          </div>
                                        </div>
                                        
                                    </div>

                                    </div>
                                <div class="col-lg-3">
                                    <div class="card bgg-1">
                                        <img src="images/row2.png">
                                        <div class="overlay1">
                                          <div class="row">
                                            <div class="col-md-4">
                                              <div class="watch">
                                                <i class="fas fa-clock"><span class="iText"> Open</span></i>
                                              </div>
                                            </div>
                                            <div class="col-md-5">
                                              
                                            </div>
                                            <div class="col-md-3">
                                              <div class="heart">
                                                <i class="fas fa-heart"></i>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="row rowCustom" style="height: 100px;">
                                            
                                          </div>
                                          <div class="row">
                                            <div class="col-md-5">
                                              <div class="watch">
                                                <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                                              </div>
                                            </div>
                                            <div class="col-md-2">
                                              
                                            </div>
                                            <div class="col-md-4">
                                              <div class="watch">
                                                <span class="iText" style="padding-left: 15px;"> Kitchen</span>
                                              </div>
                                            </div>
                                            <div class="col-md-1">
                                              
                                            </div>
                                          </div>
                                        </div>
                                        <h4 class="cardHeading">Café De Bambaa</h4>
                                        <div class="row">
                                          <div class="col-md-8">
                                            <p class="cardText">Café Western Food</p>
                                          </div>
                                          <div class="col-md-3">
                                            <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>
                                          </div>
                                        </div>

                                        <div class="row">
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
                    <!--     <div class="carousel-item">
                            <div class="row">

                            </div>
                        </div> -->
                    </div>
                    <a class="btn btn-primary mb-3 mr-1 left" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-chevron-left"></i>
                </a>
                <a class="btn btn-primary mb-3 right" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-chevron-right"></i>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section>-->
<!--    <div class="container custom">-->
<!--        <div class="row">-->
<!--            <div class="col-6">-->
<!--                <h3 class="mb-3">Free Delivery</h3>-->
<!--            </div>-->
<!--            <div class="col-6 text-right">-->
<!--            </div>-->
<!--            <div class="col-12">-->
<!--                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">-->

<!--                    <div class="carousel-inner">-->
<!--                        <div class="carousel-item active">-->
<!--                            <div class="row">-->

<!--                                <div class="col-lg-3">-->
<!--                                    <div class="card bgg-1">-->
<!--                                        <img src="images/row2.png">-->
<!--                                        <div class="overlay1">-->
<!--                                          <div class="row">-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="watch">-->
<!--                                                <i class="fas fa-clock"><span class="iText"> Open</span></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
                                              
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="heart">-->
<!--                                                <i class="fas fa-heart"></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                          </div>-->
<!--                                          <div class="row rowCustom">-->
                                            
<!--                                          </div>-->
<!--                                          <div class="row">-->
<!--                                            <div class="col-md-5">-->
<!--                                              <div class="watch">-->
<!--                                                <i class="fas fa-tag"><span class="iText"> Discount</span></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-2">-->
                                              
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="watch">-->
<!--                                                <span class="iText"> Kitchen</span>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-1">-->
                                              
<!--                                            </div>-->
<!--                                          </div>-->
<!--                                        </div>-->
<!--                                        <h4 class="cardHeading">Café De Bambaa</h4>-->
<!--                                        <div class="row">-->
<!--                                          <div class="col-md-8">-->
<!--                                            <p class="cardText">Café Western Food</p>-->
<!--                                          </div>-->
<!--                                          <div class="col-md-3">-->
<!--                                            <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>-->
<!--                                          </div>-->
<!--                                        </div>-->

<!--                                        <div class="row">-->
<!--                                          <div class="col-md-7">-->
<!--                                            <p class="cardText">8am - 10pm</p>-->
<!--                                          </div>-->
<!--                                          <div class="col-md-4">-->
<!--                                            <p class="cardText">Tariq Road</p>-->
<!--                                          </div>-->
<!--                                        </div>-->
                                        
<!--                                    </div>-->

<!--                                    </div>-->
<!--                                <div class="col-lg-3">-->
<!--                                    <div class="card bgg-1">-->
<!--                                        <img src="images/row2.png">-->
<!--                                        <div class="overlay1">-->
<!--                                          <div class="row">-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="watch">-->
<!--                                                <i class="fas fa-clock"><span class="iText"> Open</span></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
                                              
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="heart">-->
<!--                                                <i class="fas fa-heart"></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                          </div>-->
<!--                                          <div class="row rowCustom">-->
                                            
<!--                                          </div>-->
<!--                                          <div class="row">-->
<!--                                            <div class="col-md-5">-->
<!--                                              <div class="watch">-->
<!--                                                <i class="fas fa-tag"><span class="iText"> Discount</span></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-2">-->
                                              
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="watch">-->
<!--                                                <span class="iText"> Kitchen</span>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-1">-->
                                              
<!--                                            </div>-->
<!--                                          </div>-->
<!--                                        </div>-->
<!--                                        <h4 class="cardHeading">Café De Bambaa</h4>-->
<!--                                        <div class="row">-->
<!--                                          <div class="col-md-8">-->
<!--                                            <p class="cardText">Café Western Food</p>-->
<!--                                          </div>-->
<!--                                          <div class="col-md-3">-->
<!--                                            <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>-->
<!--                                          </div>-->
<!--                                        </div>-->

<!--                                        <div class="row">-->
<!--                                          <div class="col-md-7">-->
<!--                                            <p class="cardText">8am - 10pm</p>-->
<!--                                          </div>-->
<!--                                          <div class="col-md-4">-->
<!--                                            <p class="cardText">Tariq Road</p>-->
<!--                                          </div>-->
<!--                                        </div>-->
                                        
<!--                                    </div>-->

<!--                                    </div>-->
<!--                                <div class="col-lg-3">-->
<!--                                    <div class="card bgg-1">-->
<!--                                        <img src="images/row2.png">-->
<!--                                        <div class="overlay1">-->
<!--                                          <div class="row">-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="watch">-->
<!--                                                <i class="fas fa-clock"><span class="iText"> Open</span></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
                                              
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="heart">-->
<!--                                                <i class="fas fa-heart"></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                          </div>-->
<!--                                          <div class="row rowCustom">-->
                                            
<!--                                          </div>-->
<!--                                          <div class="row">-->
<!--                                            <div class="col-md-5">-->
<!--                                              <div class="watch">-->
<!--                                                <i class="fas fa-tag"><span class="iText"> Discount</span></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-2">-->
                                              
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="watch">-->
<!--                                                <span class="iText"> Kitchen</span>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-1">-->
                                              
<!--                                            </div>-->
<!--                                          </div>-->
<!--                                        </div>-->
<!--                                        <h4 class="cardHeading">Café De Bambaa</h4>-->
<!--                                        <div class="row">-->
<!--                                          <div class="col-md-8">-->
<!--                                            <p class="cardText">Café Western Food</p>-->
<!--                                          </div>-->
<!--                                          <div class="col-md-3">-->
<!--                                            <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>-->
<!--                                          </div>-->
<!--                                        </div>-->

<!--                                        <div class="row">-->
<!--                                          <div class="col-md-7">-->
<!--                                            <p class="cardText">8am - 10pm</p>-->
<!--                                          </div>-->
<!--                                          <div class="col-md-4">-->
<!--                                            <p class="cardText">Tariq Road</p>-->
<!--                                          </div>-->
<!--                                        </div>-->
                                        
<!--                                    </div>-->

<!--                                    </div>-->
<!--                                <div class="col-lg-3">-->
<!--                                    <div class="card bgg-1">-->
<!--                                        <img src="images/row2.png">-->
<!--                                        <div class="overlay1">-->
<!--                                          <div class="row">-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="watch">-->
<!--                                                <i class="fas fa-clock"><span class="iText"> Open</span></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
                                              
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="heart">-->
<!--                                                <i class="fas fa-heart"></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                          </div>-->
<!--                                          <div class="row rowCustom">-->
                                            
<!--                                          </div>-->
<!--                                          <div class="row">-->
<!--                                            <div class="col-md-5">-->
<!--                                              <div class="watch">-->
<!--                                                <i class="fas fa-tag"><span class="iText"> Discount</span></i>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-2">-->
                                              
<!--                                            </div>-->
<!--                                            <div class="col-md-4">-->
<!--                                              <div class="watch">-->
<!--                                                <span class="iText"> Kitchen</span>-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-1">-->
                                              
<!--                                            </div>-->
<!--                                          </div>-->
<!--                                        </div>-->
<!--                                        <h4 class="cardHeading">Café De Bambaa</h4>-->
<!--                                        <div class="row">-->
<!--                                          <div class="col-md-8">-->
<!--                                            <p class="cardText">Café Western Food</p>-->
<!--                                          </div>-->
<!--                                          <div class="col-md-3">-->
<!--                                            <i class="fas fa-star customStar"><span class="cardRating"> 4.9</span></i>-->
<!--                                          </div>-->
<!--                                        </div>-->

<!--                                        <div class="row">-->
<!--                                          <div class="col-md-7">-->
<!--                                            <p class="cardText">8am - 10pm</p>-->
<!--                                          </div>-->
<!--                                          <div class="col-md-4">-->
<!--                                            <p class="cardText">Tariq Road</p>-->
<!--                                          </div>-->
<!--                                        </div>-->
                                        
<!--                                    </div>-->

<!--                                    </div>-->
<!--                            </div>-->
<!--                        </div>-->
                    <!--     <div class="carousel-item">
<!--                            <div class="row">-->

<!--                            </div>-->
<!--                        </div> -->
<!--                    </div>-->
<!--                    <a class="btn btn-primary mb-3 mr-1 left" href="#carouselExampleIndicators2" role="button" data-slide="prev">-->
<!--                    <i class="fa fa-chevron-left"></i>-->
<!--                </a>-->
<!--                <a class="btn btn-primary mb-3 right" href="#carouselExampleIndicators2" role="button" data-slide="next">-->
<!--                    <i class="fa fa-chevron-right"></i>-->
<!--                </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<section>
    <div class="container custom">
        <div class="row mb-4">
            <div class="col-sm-6">
                <h3 class="mb-3">Kitchens Nearby</h3>
            </div>
            <div class="col-sm-6 text-right">
            </div>

        </div>
        
        
        

                
         <?php
      
           for ($x = 0; $x < count($nearbychunk); $x++) {


                    ?>
        <div class="row mb-4">
            <?php 
            for ($y = 0; $y < count($nearbychunk[$x]); $y++) {
        // print_r($nearbychunk[$x]);
            ?>
            
            <div class="col-sm-6">
              <div class="cardShadow">
                <div class="row">       
                  <div class="col-md-5">
                    <a href="single-cafe.php?id=<?php echo $nearbychunk[$x][$y]->kId ?>" style= "  color: blue; text-decoration: none;">
                    <img class="cardImage" src=" <?php echo $nearbychunk[$x][$y]->kitchen_banner ?> "></a>
                  </div>
                  <div class="col-md-7">
                    <div class="row">
                      <div class="col-md-8">                     
                        <h4 class="cardHeading2"> 
                        <a href="single-cafe.php?id=<?php echo $nearbychunk[$x][$y]->kId ?>" style= " all: unset;">

                        <?php echo $nearbychunk[$x][$y]->kitchen_name ?>    
                        </a>
                        </h4>
                      </div>
                      <div class="col-md-4 d-flex align-items-center">
                        <div class="heart2">
                          <i class="fas fa-heart"></i>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <p class="cardText"> <?php echo $nearbychunk[$x][$y]->kitchen_area ?> - <?php echo $nearbychunk[$x][$y]->kitchen_city ?></p>
                      </div>
                      <div class="col-md-4">
                        <i class="fas fa-star customStar"><span class="cardRating"> <?php echo ($nearbychunk[$x][$y]->avg_rate) ?></span></i>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="watch22">
                        <span class="watch2">
                          <i class="fas fa-clock"><span class="iText"> <?php echo $nearbychunk[$x][$y]->currentStatus ?></span></i>
                        </span>
                        <span class="watch2">
                          <i class="fas fa-tag"><span class="iText"> Discount</span></i>
                        </span>
                        <span class="watch2">
                          <span class="iText"> <?php echo $nearbychunk[$x][$y]->kitchen_type ?></span>
                        </span>
                        </div>
                      </div>
                    </div>
                    <div class="row rowCust">
                      <div class="col-md-8">
                        <p class="cardText"> <?php echo $nearbychunk[$x][$y]->from ?> -  <?php echo $nearbychunk[$x][$y]->to ?></p>
                      </div>
                      <div class="col-md-4">
                        <p class="cardText"> <?php echo $nearbychunk[$x][$y]->currentStatus ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
            
            <?php } ?>
        </div>
        
        <?php } ?>
    </div>
</section>
<!-- Modal Map-->





<script src="components/slide.js"></script>

<?php include 'components/modals/map-modal.php'; ?>
</body>
</html>