<!DOCTYPE html>
<html>
<head>
<title>Sofrah</title>

<?php 
include 'components/header.php';
include 'components/modals/card-modal.php';


 ?>
    
<style type="text/css">
  .bg{
        background-color: #F7F7F7;
 filter: drop-shadow(0px 10px 10px #00000029);

  }
</style>

</head>
<body>
<?php include 'components/navigation.php'; ?>
    
    <div class="container">
        <br>
        <br><br>
       <span style="float: right; color:#9C3DFD; float: right; font-size: 15px;font-weight: 700; "><a data-toggle="modal" href="#cardModal" class="voucher-btn">Add New Card</a></span>  
        <h2 style="font-size: 25px; color: #001746; font-weight:700">Payement Details</h2>
      
        
<br>
<div class="row">
<div class="col-md-4">
<div class="shadow-none p-3 bg  mb-5  rounded">
  <span style="color:#001746; font-weight: 700;">Cash/Card on delivery</span>
 <hr>

<span><img src="images/visa.PNG" width="50" height="35"></span>

<span style="color: #001746; font-weight:500">**** **** ****  2187</span>

<hr>
<span><button class="btn" style="color:#9C3DFD; border:2px solid #9C3DFD; border-radius:25px;">Delete Card</button></span>

</div>

</div>
<div class="col-md-4">
<div class="shadow-none p-3 bg  mb-5  rounded">
  <span style="color:#001746; font-weight: 700;">Cash/Card on delivery</span>
 <hr>

<span><img src="images/visa.PNG" width="50" height="35"></span>

<span style="color: #001746; font-weight:500">**** **** ****  2187</span>

<hr>
<span><button class="btn" style="color:#9C3DFD; border:2px solid #9C3DFD; border-radius:25px;">Delete Card</button></span>

</div>

</div>


    </div>


</body>
</html>