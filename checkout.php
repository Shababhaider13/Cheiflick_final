<?php include 'components/header.php' ; ?>
<?php include 'components/navigation.php' ; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-2">
                    <img src="images/pizza.png" class="card-image">
                </div>
                <div class="col-sm-3">
                    <h3 class="card-heading">King Burgers</h3>
                    <span class="icon-style"><i class="fas fa-star"> 4.9 </i> (124 ratings)</span><br>
                    <span class="icon-style">Burger <span class="dot"> . </span> Western Foods</span><br>
                    <span class="icon-style"><i class="fas fa-map-marker"></i> No 03, 4th lane, Newyork</span>
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-4 justify-content-center">
                <p class="card-tex">Distance: <span class="bold"> 2.3km away</span></p>
                <p class="card-tex">Order Type: <span class="bold"> SameDay</span></p>
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
                           <p class="pizzaHead"><?php echo $item["name"]; ?></p>
                            <span class="purpleBack add<?php echo$item["code"];?>"><i class="fas fa-plus" ></i></span>

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

                    $.ajax({
                        
                    type:'post',
                    url : 'ajax_cart_increase_decrease.php',
                    data : {
                     dish_id : <?php echo$item["code"];?>, 
                     type: 'subtract',
                    },

                    success:function(result){
                      
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
                           <del class="strikeText">Rs.250</del><p class="serveText">Rs <?php echo $item["price"]; ?></p>
                       </div>
                       
                   </div>
                   

                   <div class="dropdown-divider"></div>


                      







                
                
                
                





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
                <p class="card-tex"><span class="bold">Order ID: </span><span class="orderText">65365</span></p>
            </div>
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <a data-toggle="modal" href="#modal1" class="voucher-btn">Apply Voucher</a><br>
                <p class="card-text"><span class="bold">Powered By: </span><span class="orderText">Sofrah</span></p>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                        <p class="card-tex"><span class="bold">Delivery Address</span></p>
                        <p class="card-tex">653 Saba Avenuue<br>DHA, Phase 7.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                        <p class="card-tex"><span class="bold">Order Status</span></p>
                        <div class="row d-flex justify-content-center">
                            <div class="col-3">
                       <div class="iconImg"><img src="images/001-cooking.svg"></div>
                       <p class="orderBold">Preparing Your Food</p>
                    </div>
                    <div class="col-1">
                       <i class="rightArrow fas fa-arrow-right"></i>
                    </div>
                    <div class="col-3">
                       <div class="iconImg2"><img src="images/003-pizza-box.svg"></div>
                       <p class="orderBold">Order Picked Up</p>
                    </div>
                    <div class="col-1">
                       <i class="rightArrow fas fa-arrow-right"></i>
                    </div>
                    <div class="col-3">
                       <div class="iconImg2"><img src="images/002-delivery-man.svg"></div>
                       <p class="orderBold">Rider On The Way</p>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                    <p class="card-textt">Delivery ETA</p>
                    <p class="timebold">25</p>
                    <p class="card-textt">Minutes Remaining</p>
                    </div>
                        </div>
                        </div>
                        
                <div class="row">
                <div class="col-sm-12">
                    <div class="myCard">
                    <div class="row">
                        <div class="col-6">
                            <p class="card-texttt">Sub Total</p>
                            <p class="card-texttt">Discount</p>
                            <p class="card-texttt">GST</p>
                            <p class="card-texttt">Total</p>
                        </div>
                        <div class="col-6 text-end">
                            <p class="bold" id="price">Rs.<?php echo $total_price; ?></p>
                            <p class="bold">Rs.500</p>
                            <p class="bold">Rs.800</p>
                            <p class="bold">Rs.8100</p>
                        </div>
                    </div>
                    </div>
                        </div>
                        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-2">
            <button class="rate">Support</button>
        </div>
        <div class="col-lg-6 mb-2">
            <button class="rate">Home</button>
        </div>
    </div>
</div>
<!-- Modal Map-->
<!--Voucher Modal-->
<?php include 'components/modals/map-modal.php'; ?>
<?php include 'components/modals/voucher-modal.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</body>
</html>