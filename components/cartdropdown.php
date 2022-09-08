<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="collapse dropdown-menu-center nav-toggle cart-toggle" id="dropMenuCart">
                <div class="row my-4">
                <div class="col-sm-12">
                <div class="cardMy dropcard">
                  
              


                   <?php		
                // echo "<pre>";
                //    print_r($_SESSION["cart_item"]);
     $total_quantity =0;
    $total_price=0;

    foreach ($_SESSION["cart_item"] as $item){

        $item_price = $item["quantity"]*$item["price"];
		?>
				


                <div class="row">
                       <div class="col-sm-1">
                           <img class="heiImage" src="<?php echo $item["image"]; ?>" />
                       </div>
                       <div class="col-sm-5">
                           <p class="pizzaHead"><?php echo $item["name"]; ?></p>
                           <div class="cartBtn"><span class="purpleBack  add<?php echo$item["code"];?>"><i class="fas fa-plus"></i></span>
                           <span class="simpleBack"><?php echo $item["quantity"]; ?></span>
                           <span class="purpleBack  subtract<?php echo$item["code"];?>"><i class="fas fa-minus"></i></span>
                       </div></div>
                       <div class="col-sm-2 d-flex align-items-center">
                           <p class="serveText">Serves 2</p>
                       </div>
                       <div class="col-sm-4 d-flex justify-content-end align-items-center">
                           <del class="strikeText">Rs.250</del><p class="serveText">Rs.<?php echo $item["price"]; ?></p>
                       </div>
                   </div>
                   <div class="dropdown-divider"></div>







                   <script type="text/javascript">
                    $(document).ready(function(){
                    $(".add<?php echo$item["code"];?>").click(function(){
                    // alert("kk");

                    $.ajax({
                        
                    type:'post',
                    url : 'ajax_cart_drop.php',
                    data : {
                     dish_id : <?php echo$item["code"];?>, 
                     type: 'add',
                    },

                    success:function(result){
                      // alert(result);
                      $('.dropcard').html(result);
                      $("#price").load(location.href + " #price");

                    }});});});
                    

                    $(document).ready(function(){
                    $(".subtract<?php echo$item["code"];?>").click(function(){

                    $.ajax({
                        
                    type:'post',
                    url : 'ajax_cart_drop.php',
                    data : {
                     dish_id : <?php echo$item["code"];?>, 
                     type: 'subtract',
                    },

                    success:function(result){
                      
                      $('.dropcard').html(result);
                      $("#price").load(location.href + " #price");

                    }});});});
                  </script>

                
                
                
                





				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
                
		}
		?>




                   <div class="row">
                     
                      <a class="rate2 mt-4 text-center" style="color:white" href="payment-checkout.php">Checkout</a>
                   </div>


                </div>
            </div>
            </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
