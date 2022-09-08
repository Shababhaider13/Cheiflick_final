
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
                        <p class="card-tex"><?php $_SESSION['address'] ?></p>
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
    
    <ul class="dropdown-menu payMenu">
      <li>
        <a href="#" title="Select this card"><img src="images/easy.png">Easy Paisa</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="images/easy.png">Easy Paisa</a>
      </li>
      <li>
        <a href="#" title="Select this card"><img src="images/easy.png">Easy Paisa</a>
      </li>
    </ul>
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
                            <p class="bold">Rs.8100</p>
                        </div>
                    </div>
                    </div>
                        </div>
                        </div>
        </div>