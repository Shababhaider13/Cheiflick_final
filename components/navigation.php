<div class="container-fluid mb-4">
<div class="row borderBottom">
        <div class="col-md-2">
    <a class="navbar-brand logo" href="index.php">
        <img src="images/logo.png"/>
    </a>
        </div>
<div class="col-md-7">
    <div class="form-row my-2">
            <div class="col-md-4 input-group input-group-lg location">
                <input type="text" class="form-control" placeholder="Pakistan"  style="border-radius: 10px;border-color:#E1E1E1;" />
                <div class="input-group-btn">
                    <button class="fas fa-location ico" data-toggle="modal" data-target="#mapModal"></button>
                </div>
            </div>
            
			<div class="col-md-3 input-group-lg search nav-box">
                <select class="form-control nav-input" placeholder=""  style="border-radius: 10px;" />
                	<option>Delivery</option>
                	<option>Pickup</option>
                </select>
            </div>
            <div class="col-md-3 input-group-lg search nav-box">
                <select class="form-control nav-input" placeholder=""  style="border-radius: 10px;" />
                <span class="my-2 my-sm-0 fas fa-user sell"></span>
                	<option>Same Day</option>	
                </select>
            </div>
			<div class="col-md-2 input-group-lg search nav-box">
                <select class="form-control nav-input" placeholder=""  style="border-radius: 10px;" />
                	<option>Kitchen</option>	
                </select>
            </div>
            </div>
</div>
        <div class="col-md-3">
        <form class="form-inline d-flex align-items-center justify-content-center">
            <a href="profile.php">
            <span class="my-2 my-sm-0 fas fa-user sell"></span></a>
            <div class="sell1">|</div>
            <a href="favourites.php">
           	 <span class="my-2 my-sm-0 fas fa-heart	 sell"></span></a>
           	 <div class="sell1">|</div>
           	 <!--<span class="my-2 my-sm-0 fas fa-shopping-cart	 sell"></span>-->
           	 <div class="dropdown">
           	 <button class="drop-btn dropdown-toggle" type="button" id="dropMenu" data-toggle="collapse" href="#dropMenuCart" role="button" aria-expanded="false" aria-controls="collapseExample">
           	     <span class="my-2 my-sm-0 fas fa-shopping-cart	 sell"></span>
           	</button>
            
           	 <?php include_once('cartdropdown.php');?>
            
            </div>
           	 <div class="dropdown">
           	 <button class="drop-btn dropdown-toggle" id="profileDrop" type="button"  data-toggle="collapse" href="#profileDropdown" role="button" aria-expanded="false" aria-controls="collapseExample">
           	     <span class="my-2 my-sm-0 fas fa-bars menu"></span>
           	</button>
           	 <div class="collapse dropdown-menu-right nav-toggle profile-toggle" id="profileDropdown" style="border-bottom-right-radius: 20px; border-bottom-left-radius: 20px; margin-top: 26px;">
                <a class="dropdown-item" href="profile.php" style="padding: 0; margin-top:8px; margin-left:20px">My Profile</a>
                <div class="dropdown-divider" style="height: 1px;"></div>
                <a class="dropdown-item" href="myorders.php" style="padding: 0; margin-top:8px; margin-left:20px">My Orders</a>
                <div class="dropdown-divider" style="height: 1px;"></div>
                <a class="dropdown-item" href="myvouchers.php" style="padding: 0; margin-top:8px; margin-left:20px">Vouchers</a>
                <div class="dropdown-divider" style="height: 1px;"></div>
                <a class="dropdown-item" href="paymentcard.php" style="padding: 0; margin-top:8px; margin-left:20px">Payment Details</a>
                <div class="dropdown-divider" style="height: 1px;"></div>
                <a class="dropdown-item" href="locations.php" style="padding: 0; margin-top:8px; margin-left:20px">Locations</a>
                <div class="dropdown-divider" style="height: 1px;"></div>
                <a class="dropdown-item" href="notification.php" style="padding: 0; margin-top:8px; margin-left:20px">Notifications</a>
                <div class="dropdown-divider" style="height: 1px;"></div>
                <a class="dropdown-item" href="logout.php" style="padding: 0; margin-top:8px; margin-left:20px; margin-bottom: 10px;">Logout</a>
            </div>
            </div>
           	 </form>
           	 </div>
    </div>
</div>