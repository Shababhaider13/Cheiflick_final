<!DOCTYPE html>
<html>
<head>
<title>My Favourites</title>

<?php include 'components/header.php'; ?>
    

</head>
<body>
    <style>
    * {
      font: Metropolis;
    }

    .text-main {
      color: #9C3DFD;
    }
    a.text-main:hover {
      color: #9C3DFD;
    }
    .text-second {
      color: #FFAA00;
    }

    .text-12 {
      font-size: 12px;
    }

    .text-18 {
      font-size: 18px;
    }
    .text-xs
    {
      font-size: x-small;
    }
    .top-green{
      color: #098000;
      background:#D2FFDD;
      border-radius: 20px;
    }
    .btn-second
    {
      color: #9C3DFD;
      background:#F7EFFF;
      border-radius: 50px!important;
    }
    .btn-second:hover
    {
      background: #9C3DFD;
      color:#F7EFFF;
      border-radius: 50px!important;
    }
    .btn-main
    {
      background: #9C3DFD;
      color:#F7EFFF;
    }
    .btn-main:hover
    {
      color: #9C3DFD;
      background:#F7EFFF;
    }
  </style>
    <?php
 $baserurl = 'https://cheflick.code7labs.com/';

$api_url = 'https://api.cheflick.net/api/user/get-favorite';



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

$kitchenItem = $response_data->kitchenItem;
$dishItem = $response_data->dishItem;

?>
<?php include 'components/navigation.php'; ?>
    

  <div class="container">
      <div class="row ml-4">
          <div class="col-lg-12">
              <h2>Favourites</h2>
          </div>
      </div>
      <div class="row ml-4">
        <div class="col-12 font-weight-bold">
  
        <a  class="text-main mr-4" onclick="category('kitchenItem')">Kitchen Item</a>
        <a class="text-muted mr-4" onclick="category('dishItem')">Dish Item</a>
                  
      </div>
      <div  id="kitchenItem" class="category"  style="display:block;width:100%;">

        <div class="row ">



        <?php      
          for ($x = 0; $x < count($kitchenItem); $x++) { 
            
            ?>
            


        <div class="col-lg-6 mt-4">
          <div class="card" style="box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);">
            <div class="row no-gutters">
              <div class="col-auto">
                <a href="#" class="pop"><img src="images/pizza-round.png" id="imageresource" class="img m-2" alt="" /></a>
              </div>
              <div class="col">
                <div class="card-block p-2">
                  <div class="card-title row m-0 p-0">
                    <h4 class="col-7 pl-0">Pizza </h4>
                    <p class="col-5 text-muted float-Right"><del class="text-12">Rs 250</del><span
                        class="text-second font-weight-bold"> Rs 150</span></h5>
                  </div>
                  <p class="card-text text-muted m-0 text-12">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Ornare leo non mollis id cursus. Eu euismod faucibus in,
                  </p>
                  <a href="#" class="m-0 text-main font-weight-bold" data-toggle="modal" data-target="#hotelmodal">Read more</a>
                  <div class="card-text row mt-2" style="margin:0 ;">
                    <h5 class="col-6 text-second" style="padding: 0;">Service 2</h5>
                    <div class="col-6">
                      <span class="float-left mr-1">Reviews: </span>
                      <div class="text-muted text-xs">
                        <div class="text-second">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                          
                        </div>
                        4 star rating
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-100 row m-0 p-0">
              <div class="col-8 mt-2 text-muted">
                <p class="w-100 p-0 m-0">
                  <span class="font-weight-bold">Preparation Time:</span> 3 Hrs
                </p>
                <p class="w-100 p-0 m-0">
                  <span class="font-weight-bold">Delevery Time:</span> 30 Min - 1.5 Hrs
                </p>
              </div>
              <div class="col-4">
                <img class="float-left w-50" src="images/Heart.svg">
                <img class="float-right w-50" src="images/basket.svg">
              </div>
            </div>
          </div>
        </div>




<?php } ?>
     
      </div>

      </div>
     
      <div  id="dishItem" class="category"  style="display:none; width:100%">

   <div class="row ">


   <?php      
          for ($x = 0; $x < count($dishItem); $x++) { 
            
            ?>

        <div class="col-lg-6 mt-4">
          <div class="card" style="box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);">
            <div class="row no-gutters">
              <div class="col-auto" style="padding-left: 0px;">
                <a href="#" class="pop"><img src="images/pizza-round.png" id="imageresource" class="img m-2" alt="" /></a>
              </div>
              <div class="col">
                <div class="card-block p-2">
                  <div class="card-title row m-0 p-0">
                    <h4 class="col-7 pl-0">Pizza </h4>
                    <p class="col-5 text-muted float-Right"><del class="text-12">Rs 250</del><span
                        class="text-second font-weight-bold"> Rs 150</span></h5>
                  </div>
                  <p class="card-text text-muted m-0 text-12">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Ornare leo non mollis id cursus. Eu euismod faucibus in,
                  </p>
                  <a href="#" class="m-0 text-main font-weight-bold" data-toggle="modal" data-target="#hotelmodal">Read more</a>
                  <div class="card-text row mt-2" style="margin: 0;">
                    <h5 class="col-6 text-second" style="padding: 0;">Service 2</h5>
                    <div class="col-6">
                      <span class="float-left mr-1">Reviews: </span>
                      <div class="text-muted text-xs">
                        <div class="text-second">
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star" aria-hidden="true"></i>
                          <i class="fa fa-star-o" aria-hidden="true"></i>
                          
                        </div>
                        4 star rating
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-100 row m-0 p-0">
              <div class="col-8 mt-2 text-muted">
                <p class="w-100 p-0 m-0">
                  <span class="font-weight-bold">Preparation Time:</span> 3 Hrs
                </p>
                <p class="w-100 p-0 m-0">
                  <span class="font-weight-bold">Delevery Time:</span> 30 Min - 1.5 Hrs
                </p>
              </div>
              <div class="col-4">
                <img class="float-left w-50" src="images/Heart.svg">
                <img class="float-right w-50" src="images/basket.svg">
              </div>
            </div>
          </div>
        </div>



<?php } ?>

     
      </div>

      </div>




    <div class="row m-4">
      <div class="col-lg-6 mt-4">
        <div class="card">
          <div class="row">
            <div class="col-auto">
              <a href="#" class="pop"><img src="images/pizza-round.png" id="imageresource" class="img m-2" alt="" /></a>
            </div>
            <div class="col">
              <div class="card-block p-2">
                <div class="card-title row m-0 p-0">
                  <h4 class="col-7 pl-0">Pizza Veloper</h4>
                  <p class="col-5 text-muted float-Right"><del class="text-12">Rs 250</del><span
                      class="text-second font-weight-bold"> Rs 150</span></h5>
                </div>
                <p class="card-text text-muted m-0 text-12">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Ornare leo non mollis id cursus. Eu euismod faucibus in,
                </p>
                <a href="#" class="m-0 text-main font-weight-bold" data-toggle="modal" data-target="#hotelmodal">Read more</a>
                <div class="card-text row mt-2">
                  <h5 class="col-6 text-second">Service 2</h5>
                  <div class="col-6">
                    <span class="float-left mr-1">Reviews: </span>
                    <div class="text-muted text-xs">
                      <div class="text-second">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        
                      </div>
                      4 star rating
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-100 row m-0 p-0">
            <div class="col-8 mt-2 text-muted">
              <p class="w-100 p-0 m-0">
                <span class="font-weight-bold">Preparation Time:</span> 3 Hrs
              </p>
              <p class="w-100 p-0 m-0">
                <span class="font-weight-bold">Delevery Time:</span> 30 Min - 1.5 Hrs
              </p>
            </div>
            <div class="col-4">
              <img class="float-left w-50" src="images/Heart.svg">
              <img class="float-right w-50" src="images/basket.svg">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-4">
        <div class="card">
          <div class="row">
            <div class="col-auto">
              <a href="#" class="pop"><img src="images/pizza-round.png" class="img m-2" alt="" /></a>
            </div>
            <div class="col">
              <div class="card-block p-2">
                <div class="card-title row m-0 p-0">
                  <h4 class="col-7 pl-0">Pizza Veloper</h4>
                  <p class="col-5 text-muted float-Right"><del class="text-12">Rs 250</del><span
                      class="text-second font-weight-bold"> Rs 150</span></h5>
                </div>
                <p class="card-text text-muted m-0 text-12">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Ornare leo non mollis id cursus. Eu euismod faucibus in,
                </p>
                <a href="#" class="m-0 text-main font-weight-bold">Read more</a>
                <div class="card-text row mt-2">
                  <h5 class="col-6 text-second">Service 2</h5>
                  <div class="col-6">
                    <span class="float-left mr-1">Reviews: </span>
                    <div class="text-muted text-xs">
                      <div class="text-second">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        
                      </div>
                      4 star rating
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-100 row m-0 p-0">
            <div class="col-8 mt-2 text-muted">
              <p class="w-100 p-0 m-0">
                <span class="font-weight-bold">Preparation Time:</span> 3 Hrs
              </p>
              <p class="w-100 p-0 m-0">
                <span class="font-weight-bold">Delevery Time:</span> 30 Min - 1.5 Hrs
              </p>
            </div>
            <div class="col-4">
              <img class="float-left w-50" src="images/Heart.svg">
              <img class="float-right w-50" src="images/basket.svg">
            </div>
          </div>
        </div>
      </div>
    </div>
  

  </div>
 <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="hotelmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="border-radius:25px;">
  <div class="modal-dialog modal-lg ">
    <div class="modal-content">              
      <div class="modal-body rounded-20">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="images/pizza-round.png" class="" alt="" width="70px;" height="75px;"/> 
        <h3 style="display:inline; Padding-left:20px; font-family:Metropolis,Regular;font-weight:300">Pizza Veloper</h3>
          <p class="col-4 text-muted" style="float:right; font-size:18px;"><del class="text-12">Rs 250</del><span
                      class="text-second font-weight-bold"> Rs 150</span>
                      


        
        <h4 style="padding-left:90px; color:#FFAA00;">Service 2</h4>
        
                <p style="float:right;padding-top:0px; margin-top: -81px;" >
    <Strong>Preparation Time:</Strong>3 hrs <br><Strong>Delivery time:</Strong> 30 min – 1.5 hrs</p>
                
             
        <hr >
        <h5 style="font-weight:700; font-family:arial;">Description</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare leo non mollis id cursus. Eu euismod faucibus in leo malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare leo non mollis id cursus. Eu euismod faucibus in leo malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare leo non mollis id cursus. Eu euismod faucibus in leo malesuada.</p>
        
       <section class="elementor-section elementor-top-section elementor-element elementor-element-b7fb50b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b7fb50b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9f60f4d" data-id="9f60f4d" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-ac85422 elementor-arrows-yes elementor-pagination-type-bullets elementor-review--has-separator elementor--star-style-star_fontawesome elementor-widget elementor-widget-reviews" data-id="ac85422" data-element_type="widget" data-settings="{&quot;slides_per_view&quot;:&quot;3&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="reviews.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.6.5 - 27-04-2022 */
.elementor-star-rating{color:#ccd6df;font-family:eicons;display:inline-block}.elementor-star-rating i{display:inline-block;position:relative;font-style:normal;cursor:default}.elementor-star-rating i:before{content:"\e934";display:block;font-size:inherit;font-family:inherit;position:absolute;overflow:hidden;color:#f0ad4e;top:0;left:0}.elementor-star-rating .elementor-star-empty:before{content:none}.elementor-star-rating .elementor-star-1:before{width:10%}.elementor-star-rating .elementor-star-2:before{width:20%}.elementor-star-rating .elementor-star-3:before{width:30%}.elementor-star-rating .elementor-star-4:before{width:40%}.elementor-star-rating .elementor-star-5:before{width:50%}.elementor-star-rating .elementor-star-6:before{width:60%}.elementor-star-rating .elementor-star-7:before{width:70%}.elementor-star-rating .elementor-star-8:before{width:80%}.elementor-star-rating .elementor-star-9:before{width:90%}.elementor-star-rating__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.elementor-star-rating__title{margin-right:10px}.elementor-star-rating--align-right .elementor-star-rating__wrapper{text-align:right;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-star-rating--align-left .elementor-star-rating__wrapper{text-align:left;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-star-rating--align-center .elementor-star-rating__wrapper{text-align:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-star-rating--align-justify .elementor-star-rating__title{margin-right:auto}@media (max-width:1024px){.elementor-star-rating-tablet--align-right .elementor-star-rating__wrapper{text-align:right;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-star-rating-tablet--align-left .elementor-star-rating__wrapper{text-align:left;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-star-rating-tablet--align-center .elementor-star-rating__wrapper{text-align:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-star-rating-tablet--align-justify .elementor-star-rating__title{margin-right:auto}}@media (max-width:767px){.elementor-star-rating-mobile--align-right .elementor-star-rating__wrapper{text-align:right;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-star-rating-mobile--align-left .elementor-star-rating__wrapper{text-align:left;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-star-rating-mobile--align-center .elementor-star-rating__wrapper{text-align:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-star-rating-mobile--align-justify .elementor-star-rating__title{margin-right:auto}}.last-star{letter-spacing:0}.elementor--star-style-star_unicode .elementor-star-rating{font-family:Arial,Helvetica,sans-serif}.elementor--star-style-star_unicode .elementor-star-rating i:not(.elementor-star-empty):before{content:"\002605"}</style><link rel="stylesheet" href="https://cheflick.code7labs.com/wp-content/plugins/elementor-pro/assets/css/widget-carousel.min.css">		<div class="elementor-swiper">
			<div class="elementor-main-swiper swiper-container">
				<div class="swiper-wrapper">
											<div class="swiper-slide">
									<div class="elementor-testimonial elementor-repeater-item-bdb9647">
							<div class="elementor-testimonial__header">
											<div class="elementor-testimonial__image">
							<img src="https://cheflick.code7labs.com/wp-content/plugins/elementor/assets/images/placeholder.png" alt="John Doe">
						</div>
										<cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name">John Doe</span><div class="elementor-star-rating"><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-empty">&#xE934;</i><i class="elementor-star-empty">&#xE934;</i><i class="elementor-star-empty">&#xE934;</i></div><span class="elementor-testimonial__title">@username</span></cite>					<div class="elementor-testimonial__icon elementor-icon elementor-icon-twitter"><i aria-hidden="true" class="fab fa-twitter"></i><span class="elementor-screen-only">Read More</span></div>				</div>
										<div class="elementor-testimonial__content">
					<div class="elementor-testimonial__text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					</div>
				</div>
					</div>
								</div>
									<div class="swiper-slide">
									<div class="elementor-testimonial elementor-repeater-item-bdb9647">
							<div class="elementor-testimonial__header">
											<div class="elementor-testimonial__image">
							<img src="https://cheflick.code7labs.com/wp-content/plugins/elementor/assets/images/placeholder.png" alt="John Doe">
						</div>
										<cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name">John Doe</span><div class="elementor-star-rating"><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-empty">&#xE934;</i><i class="elementor-star-empty">&#xE934;</i><i class="elementor-star-empty">&#xE934;</i></div><span class="elementor-testimonial__title">@username</span></cite>					<div class="elementor-testimonial__icon elementor-icon elementor-icon-twitter"><i aria-hidden="true" class="fab fa-twitter"></i><span class="elementor-screen-only">Read More</span></div>				</div>
										<div class="elementor-testimonial__content">
					<div class="elementor-testimonial__text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					</div>
				</div>
					</div>
								</div>
									<div class="swiper-slide">
									<div class="elementor-testimonial elementor-repeater-item-bdb9647">
							<div class="elementor-testimonial__header">
											<div class="elementor-testimonial__image">
							<img src="https://cheflick.code7labs.com/wp-content/plugins/elementor/assets/images/placeholder.png" alt="John Doe">
						</div>
										<cite class="elementor-testimonial__cite"><span class="elementor-testimonial__name">John Doe</span><div class="elementor-star-rating"><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-empty">&#xE934;</i><i class="elementor-star-empty">&#xE934;</i><i class="elementor-star-empty">&#xE934;</i></div><span class="elementor-testimonial__title">@username</span></cite>					<div class="elementor-testimonial__icon elementor-icon elementor-icon-twitter"><i aria-hidden="true" class="fab fa-twitter"></i><span class="elementor-screen-only">Read More</span></div>				</div>
										<div class="elementor-testimonial__content">
					<div class="elementor-testimonial__text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.					</div>
				</div>
					</div>
								</div>
    </div>
  </div>
</div>
</section>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
      <script>
        $(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});		
});


    </script>
     <script>
function category(categoryName) {
  var i;
  var x = document.getElementsByClassName("category");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(categoryName).style.display = "block";  
}
</script>
</body>

</html>