<?php 
include 'components/modals/feedback.php';

?>

<?php
 session_start();
 $aaa =32323;
 $baserurl = 'https://cheflick.code7labs.com/';
if($_GET['id']==null){
    header('location: index.php');

}print_r($_SESSION);
$api_url = 'https://api.cheflick.net/api/user/kitchen-detail?kitchen_id='.$_GET['id'].'&user_lat=40&user_long=67.0781';

$_SESSION['kid']=$_GET['id'];

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$_SESSION['remember_token']."" // i.e. An iPad 
  )
);
$context = stream_context_create($options);
$json_data = file_get_contents($api_url, false, $context);

$response_data = json_decode($json_data);

$user_data = $response_data->data;

$tab = $user_data->kitchen_tabs;


$api_url1 = 'https://api.cheflick.net/api/user/get-rate-list?kid='.$_GET['id'].'';



$options1 = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "Authorization: ".$_SESSION['remember_token']."" // i.e. An iPad 
  )
);
$context1 = stream_context_create($options1);
$json_data1 = file_get_contents($api_url1, false, $context1);

$response_data1 = json_decode($json_data1);

$data = $response_data1->data;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $user_data->kitchen_name ?> Cafe</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
    
    .text-24 {
      font-size: 12px;
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 2; /* number of lines to show */
      line-clamp: 2; 
      -webkit-box-orient: vertical;
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
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cheflick.code7labs.com/wp-content/plugins/elementor-pro/assets/css/widget-carousel.min.css">
  <link rel="stylesheet" href="css/style-main.css">  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <style>/*! elementor - v3.6.5 - 27-04-2022 */
.elementor-star-rating{color:#ccd6df;font-family:eicons;display:inline-block}.elementor-star-rating i{display:inline-block;position:relative;font-style:normal;cursor:default}.elementor-star-rating i:before{content:"\e934";display:block;font-size:inherit;font-family:inherit;position:absolute;overflow:hidden;color:#f0ad4e;top:0;left:0}.elementor-star-rating .elementor-star-empty:before{content:none}.elementor-star-rating .elementor-star-1:before{width:10%}.elementor-star-rating .elementor-star-2:before{width:20%}.elementor-star-rating .elementor-star-3:before{width:30%}.elementor-star-rating .elementor-star-4:before{width:40%}.elementor-star-rating .elementor-star-5:before{width:50%}.elementor-star-rating .elementor-star-6:before{width:60%}.elementor-star-rating .elementor-star-7:before{width:70%}.elementor-star-rating .elementor-star-8:before{width:80%}.elementor-star-rating .elementor-star-9:before{width:90%}.elementor-star-rating__wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.elementor-star-rating__title{margin-right:10px}.elementor-star-rating--align-right .elementor-star-rating__wrapper{text-align:right;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-star-rating--align-left .elementor-star-rating__wrapper{text-align:left;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-star-rating--align-center .elementor-star-rating__wrapper{text-align:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-star-rating--align-justify .elementor-star-rating__title{margin-right:auto}@media (max-width:1024px){.elementor-star-rating-tablet--align-right .elementor-star-rating__wrapper{text-align:right;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-star-rating-tablet--align-left .elementor-star-rating__wrapper{text-align:left;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-star-rating-tablet--align-center .elementor-star-rating__wrapper{text-align:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-star-rating-tablet--align-justify .elementor-star-rating__title{margin-right:auto}}@media (max-width:767px){.elementor-star-rating-mobile--align-right .elementor-star-rating__wrapper{text-align:right;-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end}.elementor-star-rating-mobile--align-left .elementor-star-rating__wrapper{text-align:left;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start}.elementor-star-rating-mobile--align-center .elementor-star-rating__wrapper{text-align:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.elementor-star-rating-mobile--align-justify .elementor-star-rating__title{margin-right:auto}}.last-star{letter-spacing:0}.elementor--star-style-star_unicode .elementor-star-rating{font-family:Arial,Helvetica,sans-serif}.elementor--star-style-star_unicode .elementor-star-rating i:not(.elementor-star-empty):before{content:"\002605"}</style><link rel="stylesheet" href="https://cheflick.code7labs.com/wp-content/plugins/elementor-pro/assets/css/widget-carousel.min.css">		<div class="elementor-swiper">
</head>

<body>
<?php 

include 'components/navigation.php';
include 'components/modals/map-modal.php';

 
 ?>


  <div class="containerCustom marginMinus">
    <img src="<?php echo $user_data->kitchen_banner ;?>" class="img-fluid imgHeader" alt="" />
  </div>
  <div class="container">
    <div class="row m-4 border-bottom">
      <div class="col-sm-6">
        <p>
          <span class="h5 font-weight-bold mr-2"><?php echo $user_data->kitchen_name  ?></span>
          <span class="text-muted text-12"> Café <i class="fas fa-circle text-xs text-main"></i> Western Food
          </span></p>
      </div>
      <div class="col-sm-6">
        <p class="font-weight-bold mr-2"><?php echo $user_data->from ;?> - <?php echo $user_data->to ;?> <span class="m-2"><?php echo $user_data->kitchen_city ;?></span>
          <span class="top-green p-2 text-12"><i class="fa-regular fa-clock"></i><span class="text-muted"> <?php echo $user_data->currentStatus ;?></span></span>
          <span class="top-green p-2 text-12 ml-2"><i class="fa fa-tag fa-lg"></i><span class="text-muted"> Discount</span></span>
          <span class="top-green p-2 text-12 ml-2"><span class="text-muted m-2"> Kitchen</span></span></p>
        </div>  
      </div>
      <div class="row ml-4">
        <div class="col-sm-10">
          <p>
            <span class="h5 font-weight-bold mr-2">Status</span>
            <span class="text-muted text-12"> Thanks for enjoying our tasty dishes and services.</span></p>
        </div>
        <div class="col-sm-2">
          <span class="float-left mr-3 text-main">Reviews: </span>
          <div class="text-muted text-xs">
            <div class="text-second">

            <?php 
                      $ab =$user_data->rating ;
                      for ($yyb = 0; $yyb < $ab ; $yyb++){
                      ?>

                      <i class="fa fa-star" aria-hidden="true"></i>
                      <?php } ?>
                   
                      <?php 
                         $bb  = 5 - $ab ;
                      for ($yyyb = 0; $yyyb < $bb ; $yyyb++){
                      ?>

                      <i class="fa fa-star-o " aria-hidden="true"></i>
                      <?php } ?>



            </div>
            <?php echo  $ab;?> star rating
          </div>
        </div>
    
      </div>
      <div class="row ml-4 mt-0">
        <div class="col-sm-12">
          <p class="h5 font-weight-bold mr-2">Description</p></div>
      </div>
      <div class="row m-4 pb-4 border-bottom">
        <div class="col-sm-12 text-muted"><?php echo $user_data->description ;?></div>
      </div>
      <div class="row ml-4"><div class="col-sm-12 font-weight-bold">
          <?php      
          for ($x = 0; $x < count($tab); $x++) { 
            
            ?>
          
          <a  onclick="category('<?php echo $tab[$x]->tab_id ;?>')"><?php echo $tab[$x]->tab_name ; ?></a>
          <?php    } ?>
          </div>
      </div>
      <button type="button" class="mx-4 ml-auto btn btn-main btn-lg btn-block">Flat Discount of 30% on all Items</button>
      <button type="button" class="mx-4 ml-auto btn btn-second btn-lg btn-block">Minimum order value Rs.450</button>
      
       <?php      for ($x = 0; $x < count($tab); $x++) { ?>
            <div id="<?php echo $tab[$x]->tab_id ;?>" class="category <?php echo $x;?>"  style="display:<?php if($x==0){echo 'block'; } else{echo 'none'; } ?>">
                
                <!--$dishes = $tab ->dishes;-->
                
                
                
        <div class="row m-4">
            
            
            
               <?php      
               $dish = $tab[$x] ->dishes;

               
              for ($y = 0; $y < count($dish); $y++) { 
               
               ?>
          
          <div class="col-sm-6">
            <div class="card" style="margin-bottom: 20px; box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);">
              <div class="row no-gutters">
                <div class="col-sm-auto">
                  <a href="#" class="pop" style="height: 140px; width:200px">
                    <img src= "<?php echo $dish[$y]->dish_image ;?>" id="imageresource" class="itemImg img m-2 " alt="" /></a>
                </div>
                <div class="col">
                  <div class="card-block p-2">
                    <div class="card-title row m-0 p-0">
                      <h5 class="col-sm-6 pl-0 text-dark"><?php echo $dish[$y]->dish_name ;?></h5>
                      <p class="col-sm-6 text-muted float-Right"><del class="text-12">Rs 250</del><span
                          class="text-second font-weight-bold"> Rs 150</span></h5>
                    </div>
                    <p class="card-text text-muted m-0 text-24">
                  <?php echo $dish[$y]->description ;?>
                    </p>

                   

                    <a href="#hotelmoda" class="m-0 text-main font-weight-bold" data-toggle="modal" data-target="#hotelmoda"  data-code="codasknasnsknssse">Read more </a>




                    <script type="text/javascript">
                      $(function () {
                    $('#hotelmoda').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget); // Button that triggered the modal
                      var codedat = button.data('code'); // Extract info from data-* attributes
                    
                      var modal = $(this);
                      modal.find('#code').val(codedat);
                      var a = $(this).find("#code").val(codedat);
                      <?php $aa = 'console.log(codedat)';?>;
                      var codedata = modal.find('#code').val(codedat);
                      // document.writeln(codedat);
                      console.log(a);

                    });
                  });
                    </script>
                    <div class="card-text row mt-2" style="margin: 0;">
                      <h5 class="col-sm-6 text-second" style="padding: 0;">Service 2</h5>
                      <div class="col-sm-6">
                        <span class="float-left mr-1 text-dark">Reviews: </span>
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
                <div class="col-sm-8 mt-2 text-muted">
                  <p class="w-100 p-0 m-0">
                    <span class="font-weight-bold">Preparation Time:</span>  <?php echo $dish[$y]->prepare_hours ;?> - <?php echo $dish[$y]->prepare_minutes ;?>
                  </p>
                  <p class="w-100 p-0 m-0">
                    <span class="font-weight-bold">Delivery Time:</span> 30 Min - 1.5 Hrs
                  </p>
                </div>

                
              
                
                <div class="col-sm-4">
                  <img class="float-left w-50" src="images/Heart.svg">
                  
                  

                  <input type="hidden" id="dish_id" class="dish_id" name="dish_id" value="<?php echo $dish[$y]->dish_id ;?> ">
                  <form method="post" action="" id="formId">
                    
                <input type="hidden" id="dish_id<?php echo $dish[$y]->dish_id ;?>" class="dish_id" name="dish_id" value="<?php echo $dish[$y]->dish_id ;?> ">
                <input type="hidden" id="dish_image<?php echo $dish[$y]->dish_id ;?>" class="dish_image" name="dish_image" value="<?php echo $dish[$y]->dish_image ;?>">
                <input type="hidden" id="dish_name<?php echo $dish[$y]->dish_id ;?>" class="dish_name" name="dish_name" value="<?php echo $dish[$y]->dish_name ;?>">
                <input type="hidden" id="dish_price<?php echo $dish[$y]->dish_id ;?>" class="dish_price" name="dish_price" value="<?php echo 33 ;?>">
                <input type="hidden" id="dish_category<?php echo $dish[$y]->dish_id ;?>" class="dish_category" name="dish_category" value="<?php echo $dish[$y]->dish_category ;?>">
                <input type="hidden" id="kitchen_id<?php echo $dish[$y]->dish_id ;?>" class="kitchen_id" name="kitchen_id" value="<?php echo $_GET['id'] ;?>">
       
                  <img class="float-right w-50  cartbutton" id="cartbutton<?php echo $dish[$y]->dish_id ;?>" value="<?php echo $dish[$y]->dish_id ;?>" src="images/basket.svg">



                   <script type="text/javascript">
                    $(document).ready(function(){
                    $("#cartbutton<?php echo $dish[$y]->dish_id ;?>").click(function(){
                      // alert("
                      <?php 
                      // echo $dish[$y]->dish_id ;
                      ?>
                      // ");
                      alert('product added to cart');

                    $.ajax({

                    type:'post',
                    url : 'ajax_add_to_cart.php',
                    data : {
                     dish_id : $('#dish_id<?php echo $dish[$y]->dish_id ;?>').val(), 
                     dish_image : $('#dish_image<?php echo $dish[$y]->dish_id ;?>').val(),
                     dish_name : $('#dish_name<?php echo $dish[$y]->dish_id ;?>').val(), 
                     dish_price : $('#dish_price<?php echo $dish[$y]->dish_id ;?>').val(), 
                      dish_category : $('#dish_category<?php echo $dish[$y]->dish_id ;?>').val(),
                       kitchen_id : $('#kitchen_id<?php echo $dish[$y]->dish_id ;?>').val()
                    },

                    success:function(result){
                      // alert(result);
                      $('.cardMy').html(result);
                    }});});});
                  </script>




                </div>
              </div>
            </div>
          </div>
 
           <?php      
               
            }
               ?>
          
        </div>
     
     
     
     
     
    </div>
          <?php    } ?>
          
          
     
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




<!--- pop up --->
<div class="modal fade" id="hotelmoda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="border-radius:25px;">
    <div class="modal-dialog modal-lg " style="height: 530px;">
    
    <div class="modal-content" style="position: absolute;">              
      <div class="modal-body rounded-20">
     
<?php 
include 'ajax_popup.php'; 
?>




                   <script type="text/javascript">
                    $(document).ready(function(){
                    $("#hotelmoda").click(function(){
                      alert("<?php echo $dish[$y]->dish_id ;?>");
                    $.ajax({

                    type:'post',
                    url : 'ajax_popup.php',
                    data : {
                     dish_id : $('#dish_id<?php echo $dish[$y]->dish_id ;?>').val(), 
                    
                    },

                    success:function(result){
                      alert(result);
                      $('.mycart').html(result);
                    }});});});
                  </script>


</div>
</div>
</div>
</div>

<!--- pop up --->



<div class="modal fade" id="addedtocard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="imagepreview" style="width: 100%;" >
      </div>
    </div>
  </div>
</div>




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
    <script src="js/script.js"></script>
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


$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #bookId").val( myBookId );
});


// Execute something when the modal window is shown.


$(document).ready(function(){
  $("#code").change(function(){
    var inputVal = document.getElementById("code").value;
    // alert(inputVal);
  });
});
    
// $('#cartbutton').click(function() {
//   $.ajax({
//     type: "POST",
//     url: "ajax_add_to_cart.php",
//     data: { name: "John" }
//   }).done(function( msg ) {
//     alert( "Data Saved: " + msg );
//   });
// });

// $(document).ready(function(){
//                 $('.cartbutton').on('click',function(){
                    
//                     // var office = $('#location').val();
//                     // alert(office);
//                     $.ajax({
//                     type:'post',
//                     url : 'ajax_add_to_cart.php',
//                     data : { sql : "office"},
//                     success:function(result){
//                     	alert(result);
//                     }})
//                 })
//             });


//             $(document).ready(function () {
//     $("#cartbutton").on("click", "img", function (e) {
//         e.preventDefault();
//         alert("test");
//     });
// });

// $(".cartbutton").click(function(){
//   $.ajax({
//   type:'post',
//   url : 'ajax_add_to_cart.php',
//   data : { dish_id : $('.dish_id').val(), dish_image : $('.dish_image').val(), dish_name : $('.dish_name').val(), dish_category : $('.dish_category').val(), kitchen_id : $('.kitchen_id').val()},
//   success:function(result){
//     $('.mycart').html(result);
//   }});

// });



      
    // // When DOM is loaded this 
    // // function will get executed
    // $(() => {
    //     // function will get executed 
    //     // on click of submit button
    //    $("#cartbutton").click(function(ev) {
    //         ev.preventDefault();
    //     $(".cartbutton").click(function(ev) {
    //         var form = $("#formId");
    //         var url =  'ajax_add_to_cart.php';
    //         $.ajax({
    //             type: "POST",
    //             url: url,
    //             data: form.serialize(),
    //             success: function(data) {
    //                 console.log(data);
    //                 alert("Form Submited Successfully");
    //             },
    //             error: function(data) {
                      
    //                 // Some error in ajax call
    //                 alert("some Error");
    //             }
    //         });
    //     });
    // });
    


// $(document).ready(function(){
//                 $('#location').on('input',function(){
                    
//                     var office = $('#location').val();
//                     // alert(office);
//                     $.ajax({
//                     type:'post',
//                     url : 'components/modals/map.php',
//                     data : { sql : office},
//                     success:function(result){
//                       $('.mapsearch').html(result);
//                     	// alert(result);
//                     }})
//                 })
//             })

</script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>