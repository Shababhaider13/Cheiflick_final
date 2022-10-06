<?php include 'components/header.php' ; ?>
<?php include 'components/navigation.php' ; ?>

<?php
        echo '<script type="text/javascript">alert("'.$_SESSION['kid'].'");</script>';

       $api_url = 'https://api.cheflick.net/api/user/kitchen-detail?kitchen_id='.$_SESSION['kid'].'&user_lat=40&user_long=67.0781';


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




         
        
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-2">
                    <img src="<?php echo $user_data->kitchen_logo;?>" class="card-image">
                </div>
                <div class="col-sm-3">
                    <h3 class="card-heading"><?php echo $user_data->kitchen_name;?></h3>
                    <span class="icon-style"><i class="fas fa-star"><?php echo $user_data->rating;?></i>/<?php echo $user_data->avg_rate;?></span><br>
                    <span class="icon-style">Burger <span class="dot"> . </span> Western Foods</span><br>
                    <span class="icon-style"><i class="fas fa-map-marker"></i> <?php echo $user_data->kitchen_address;?></span>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-4 justify-content-center">
                <p class="card-tex">Distance: <span class="bold"> 2.3km away</span></p>
                <p class="card-tex">Order Type: <span class="bold"> <?php echo $user_data->mode_of_delivery;?></span></p>
                <p class="card-tex">Ntn no: 6546546515614561</p>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-sm-12">
                <div class="myCard cardMy">
    <?php		
    $total_quantity =0;
    $total_price=0;
    foreach ($_SESSION["cart_item"] as $item){

        $item_price = $item["quantity"]*$item["price"];
		?>
				


                <div class="row">
                       <div class="col-sm-1">
                           <img class="heiImage" src="<?php echo $item["image"]; ?>" />
                       </div>
                       <div class="col-sm-3 ml-3">
                           <p class="pizzaHead"  id="modalopen1" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-align:start ;"><?php echo $item["name"]; ?></p>
                            <span class="purpleBack add<?php echo$item["code"];?>">
                            <i class="fas fa-plus" ></i></span>

                             <script type="text/javascript">
                    $(document).ready(function(){
                    $(".add<?php echo$item["code"];?>").click(function(){
                    // alert("kk");

                    $.ajax({
                        
                    type:'post',
                    url : 'ajax_cart_increase_decrease.php',
                    data : {
                     dish_id : <?php echo$item["code"];?>, 
                     type: 'add',
                    },

                    success:function(result){
                      // alert(result);
                      $('.cardMy').html(result);
                      $("#price").load(location.href + " #price");

                    }});});});
                    

                    $(document).ready(function(){
                    $(".subtract<?php echo$item["code"];?>").click(function(){
                    // alert("kk");

                    $.ajax({
                        
                    type:'post',
                    url : 'ajax_cart_increase_decrease.php',
                    data : {
                     dish_id : <?php echo$item["code"];?>, 
                     type: 'subtract',
                    },

                    success:function(result){
                      // alert(result);
                      $('.cardMy').html(result);
                      $("#price").load(location.href + " #price");

                    }});});});
                  </script>
                           <span class="simpleBack"><?php echo $item["quantity"]; ?></span>
                           <span class="purpleBack subtract<?php echo$item["code"];?>"><i class="fas fa-minus"></i></span>
                       </div>

                       
                       <div class="col-sm-2 d-flex align-items-center">
                           <p class="serveText">Serves 2</p>
                       </div>
                       <div class="col-sm-5 d-flex justify-content-end align-items-center">
                           <p class="serveText">Rs <?php echo $item["price"]; ?></p>
                       </div>
                       
                   </div>
                   

                   <div class="dropdown-divider" style="height: 12px;"></div>


				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
                
		}
		?>


                </div>
            </div>
            </div>
            <div class="row my-4">
            <div class="col-sm-4">
                <p class="card-tex"><span class="bold">Contactless Delivery</span></p>
                <!-- <p class="card-tex"><span class="bold"> </span><span class="orderText"></span></p> -->
            </div>
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <a data-toggle="modal" href="#modal1" class="voucher-btn">Apply Voucher</a><br>
                <p class="card-text"><span class="bold">Powered By: </span><span class="orderText">Cheiflick</span></p>
            </div>
            </div>
        </div>
        
<div class="col-md-4">
            <div class="row">
                <div class="col-sm-6">
                    <div class="myCard">
                        <p class="card-tex"><span class="bold">Time</span><span class="text-left"> 7:30 PM</span></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="myCard">
                        <p class="card-tex"><span class="bold">Date</span><span class="text-left"> 1/3/22</span></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                        <p class="card-tex"><span class="bold">Delivery Address</span></p>
                        <p class="card-tex"><?php  echo $_SESSION['address'] ?></p>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-sm-12">
                    <h3 class="card-tex ml-4"><span class="bold">Select Payment Method</span></h3>

                    <div class="myCard">
                        <div class="row px-4">
                            <div class="col-sm-6">
                                <p class="card-tex"><img src="images/easy.png"> easy paisa</p>
                            </div>
                            <div class="col-sm-6 d-flex align-items-center justify-content-end">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group ml-2">
    <!-- <button type="button" class="btn btn-default dropdown-toggle payMenuToggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="images/easy.png">
      Easy Paisa
      <span class="fas fa-chevron-down"></span>
    </button> -->
    
   <!--  <ul class="dropdown-menu payMenu">
      <li>
        <a href="#" title="Select this card"><img src="images/easy.png">Easy Paisa</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="images/easy.png">Easy Paisa</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="images/easy.png">Easy Paisa</a>
      </li>
    </ul> -->
  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="card-tex ml-4"><span class="bold">Delivery Instruction</span></h3>
                    <div class="myCard3">
                        <div class="row px-4">
                            <div class="col-sm-6">
                                <p class="card-tex">7:30 am</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        
                <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="card-texttt">Sub Total</p>
                            <p class="card-texttt">Discount</p>
                            <p class="card-texttt">GST</p>
                            <p class="card-texttt">Total</p>
                        </div>
                        <div class="col-sm-6 text-end">
                            <p class="bold " id="price">Rs.<?php echo $total_price; ?></p>
                            <p class="bold">Rs.500</p>
                            <p class="bold">Rs.800</p>
                            <p class="bold"><?php echo $total_price; ?></p>
                        </div>
                    </div>
                    </div>
                        </div>
                        </div>
        </div>
        <?php 
        // include "components/payment.php";
         ?>
        <?php 
        // include "components/wait.php"; 
        ?>
        <?php 
        // include "components/thankyou.php";
         ?>
    </div>
    <div class="row">
        <!--  onclick="document.location='checkout.php'" -->
        <div class="col-lg-12 my-2">                    
            <button class="rate" id="save-button">Proceed</button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-content">

            <!--  class="btn-close" -->
            <button data-testid="vendor-info-modal-close-btn" onclick="closeForm()" class="modal-close-button btn-close" data-bs-dismiss="modal"  aria-label="Close"><svg aria-hidden="true" focusable="false" class="fl-interaction-primary" width="28" height="28" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 25 24"><defs><path d="M9.06 7.646l2.94 2.94 2.94-2.94a.5.5 0 01.637-.057l.07.057.707.708a.5.5 0 010 .707L13.414 12l2.94 2.94a.5.5 0 010 .706l-.708.708a.5.5 0 01-.707 0L12 13.414l-2.938 2.94a.5.5 0 01-.638.057l-.07-.057-.707-.708a.5.5 0 010-.707l2.94-2.94-2.94-2.938a.5.5 0 010-.707l.708-.708a.5.5 0 01.707 0z" id="sIcCloseSm"></path></defs><use xlink:href="#sIcCloseSm" fill-rule="evenodd"></use></svg></button>

            <div id="image1">

            </div>

            <div style="margin-top: 5px; padding-left: 15px;">
                <h4>Philly Cheesesteak Sandwich Beef(Classic)</h4>
                <div style="padding-right: 5px;">Lorem ipsum dolor sit ame voluptatum laborum numquam blanditiis harum quisquam eius sed numquam blanditiis odit fugiat iusto</div>
            </div>
            <div style="padding-left: 15px;">
                <h6>Special Instruction</h6>
                <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>

                <div class="inp1"><input type="text" id="modalinp" class="inp4" placeholder="sit amet consectetur adipisicing" /></div>

            </div>
            <div style="padding-left: 15px;">
                <h6>Lorem ipsum dolor sit amet consectetur</h6>
                <div class="inp1">
                    <select id="select1" class="form-select">
                        <option value="" disabled selected hidden>select food</option>
                        <option  value="">Lorem ipsum dolor sit amet consectetur adipisicing elit</option>
                        <option  value="">Lorem ipsum dolor sit amet consectetur adipisicing elit</option>
                        <option  value="">Lorem ipsum dolor sit amet consectetur adipisicing elit</option>
                        <option  value="">Lorem ipsum dolor sit amet consectetur adipisicing elit</option>
                        <option  value="">Lorem ipsum dolor sit amet consectetur adipisicing elit</option>
                    </select>
                </div>
            </div>
            <div id="footermodal">
                <div id="num">
                   <!--  <span class="arrow">-</span>1<span class="arrow plus">+</span> -->
                </div>
                <div id="btnpos"><button id="modalbtn1">Update Cart</button></div>
            </div>

        </div>

    </div>

    
        <!-- js -->
        <script>
            function closeForm() {
                document.getElementById("exampleModal").style.display = "none";
            }

        </script>

<script type="text/javascript">
        $(document).ready(function() {
            //insert data
            $("#save-button").on("click", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'https://api.cheflick.net/api/user/checkout',
                    type: "POST",
                    data: ({}),
                    success: function(data) {
                        if (data.status == true) {
                            console.log("Insert Successfully")
                        }
                        else{
                            console.log("Something went wrong")
                        }
                    }
                })
            })
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<!--Voucher Modal-->
<?php include 'components/modals/map-modal.php'; ?>
<?php include 'components/modals/voucher-modal.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>