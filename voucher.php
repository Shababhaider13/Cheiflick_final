<!DOCTYPE html>
<html>
<head>
<script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Sofrah</title>


<style>
    
        /* The popup chat - hidden by default */

.chat-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
}

#inpinp1:focus {
    outline: none;
}

.open-button {
    width: 150px;
    height: 60px;
    font-size: 20px;
    background-color: #B65FCF;
    border: 1px solid #B65FCF;
    border-radius: 20px;
    color: white;
}

#chat {
    width: 300px;
    height: 450px;
    border: 1px solid wheat;
    border-radius: 15px;
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 0.2fr 1fr 0.3fr;
    box-shadow: 0px 0px 1px 5px #C5C6D0;
}

.messtext {
    margin-bottom: 10px;
}

#headh1 {
    padding-left: 15px;
    font-family: Arial;
    font-weight: bold;
}

#messagecontent {
    overflow-y: scroll;
}

::-webkit-scrollbar {
    width: 10px;
}

 ::-webkit-scrollbar-track {
    background: #CCCCCC;
}

 ::-webkit-scrollbar-thumb {
    background: #B65FCF;
    border-radius: 10px;
}

#messagecontent {
    display: flex;
    flex-direction: column;
}

#header1 {
    display: grid;
    grid-template-columns: 1fr 0.2fr 0.2fr;
    grid-template-rows: 1fr;
    border-bottom: 1px solid #C5C6D0;
    margin-bottom: 14px;
    padding-top: 15px;
}

.minimize {
    padding-bottom: 22px;
}

.mess2 {
    height: auto;
    width: 150px;
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 0.3fr;
    border: 1px solid #f1f1f1;
    border-radius: 15px;
    background-color: #f1f1f1;
}

.iconplace {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 12px;
}

.topmess {
    display: grid;
    grid-template-columns: 1fr 0.5fr;
    grid-template-rows: 1fr;
    align-items: center;
}

#chat1{
    background-color: white;
}

#save-button{
    border: 1px solid #C5C6D0;
    border-radius: 10px;
    background-color: #C5C6D0;
}

.messtext {
    padding-left: 15px;
}

.receive {
    font-size: 10px;
    float: left;
    margin-left: 15px;
    margin-bottom: 15px;
    font-family: Helvetica;
}

#sub1{
    margin-right: 7px;
}

.send {
    font-size: 10px;
    float: right;
    margin-right: 15px;
    margin-bottom: 15px;
    font-family: Helvetica;
}

.close2{
    margin-bottom: 22px;
}

#message {
    width: 95%;
    height: 50px;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #C5C6D0;
    border: 1px solid #C5C6D0;
    border-radius: 20px;
}

#message input {
    width: 70%;
    height: 40px;
    background-color: #C5C6D0;
    border: 1px solid #C5C6D0;
    border-radius: 15px;
}
</style>

<?php include 'components/header.php'; ?>
    

</head>
<body>
<?php include 'components/navigation.php'; ?>
    
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
                <div class="mapCust" style="width: 100%">
          <iframe class="map-custom" width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(Sofrah)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
          </iframe>
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
                            <div class="col-sm-3">
                       <div class="iconImg"><img src="images/001-cooking.svg"></div>
                       <p class="orderBold">Preparing Your Food</p>
                    </div>
                    <div class="col-sm-1">
                       <i class="rightArrow fas fa-arrow-right"></i>
                    </div>
                    <div class="col-sm-3">
                       <div class="iconImg2"><img src="images/003-pizza-box.svg"></div>
                       <p class="orderBold">Order Picked Up</p>
                    </div>
                    <div class="col-sm-1">
                       <i class="rightArrow fas fa-arrow-right"></i>
                    </div>
                    <div class="col-sm-3">
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
                        <div class="col-sm-6">
                            <p class="card-texttt">Sub Total</p>
                            <p class="card-texttt">Discount</p>
                            <p class="card-texttt">GST</p>
                            <p class="card-texttt">Total</p>
                        </div>
                        <div class="col-sm-6 text-end">
                            <p class="bold">Rs.6800</p>
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
        <div class="col-lg-6">
            <button class="rate open-button" onclick="openForm()">Support</button>
        </div>
       
        <div class="col-lg-6">
            <button class="rate">Home</button>
        </div>
    </div>
</div>
<!-- js -->
<script>
            function openForm() {
               
                document.getElementById("chat1").style.display = "block";
            }

            function closeForm() {
                document.getElementById("chat1").style.display = "none";
            }
        </script>

<footer>
<!-- chatbox support started -->
<div id="chat1" class="chat-popup">
        <div id="chat">
            <div id="header1">
                <div id="headh1">
                    <h3 style="font-weight:bold ;">Support</h3>
                </div>
                <div class="iconplace minimize">
                    <i onclick="closeForm()" class="fa-solid fa-window-minimize fa-1x"></i>
                </div>
                <div class="iconplace close2">
                    <i onclick="closeForm()" class="fa-solid fa-xmark fa-1x"></i>
                </div>



            </div>
            <div id="messagecontent">
                <div>
                    <div class="mess2 receive">
                        <div class="topmess">
                            <h6 class="messtext">Sufiyan</h6>
                            <div>10:55pm</div>
                        </div>
                        <div class="messtext" id="sendbyother">
                            Salam How are you?
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mess2 send ">
                        <div class="topmess">
                            <h6 class="messtext">Me</h6>
                            <div>11:02pm</div>
                        </div>
                        <div class="messtext" id="sendbyyou">
                            W Salam I am fine
                        </div>
                    </div>
                </div>

                <!-- second msg -->
                <div>
                    <div class="mess2 receive">
                        <div class="topmess">
                            <h6 class="messtext">Sufiyan</h6>
                            <div>10:55pm</div>
                        </div>
                        <div class="messtext" id="sendbyother">
                            Where are you live?
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mess2 send ">
                        <div class="topmess">
                            <h6 class="messtext">Me</h6>
                            <div>11:02pm</div>
                        </div>
                        <div class="messtext" id="sendbyyou">
                            I live in North Karachi
                        </div>
                    </div>
                </div>

                <!-- third msg -->
                <div>
                    <div class="mess2 receive">
                        <div class="topmess">
                            <h6 class="messtext">Sufiyan</h6>
                            <div>10:55pm</div>
                        </div>
                        <div class="messtext" id="sendbyother">
                            Where are you live?
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mess2 send ">
                        <div class="topmess">
                            <h6 class="messtext">Me</h6>
                            <div>11:02pm</div>
                        </div>
                        <div class="messtext" id="sendbyyou">
                            I live in North Karachi
                        </div>
                    </div>
                </div>





            </div>
            <form method="POST" id="form1">
            <div id="message">
                
                <input type="text" autocomplete="off" name="message_text" placeholder="Type Here" id="inpinp1">
                <span id="sub1"><button type="submit" id="save-button" class="btn1">Send</button></span>
                <span><i class="fa-solid fa-paperclip fa-1x"></i></span>
                
            </div>
            </form>
        </div>


        
 <!-- chatbox support ended-->
 </footer>

 <script type="text/javascript">
     $(document).ready(function() {
        //insert msg
        $("#save-button").on("click", function(e) {
            e.preventDefault();
            console.log("aa");
            var arr = $("#form1").serializeArray();
                //convert array into js object
                var obj = {};
                for (var i = 0; i < arr.length; i++) {
                    obj[arr[i].name] = arr[i].value;
                }

                //convert object into json
                var json2 = JSON.stringify(obj);
                console.log(json2);
                $.ajax({
                url: 'https://api.cheflick.net/api/user/chat-box',
                    type: "POST",
                    data: json2,
                    success: function(data) {
                        if (data.status == true) {
                            console.log('sent successfully');
                        }
                    }
                })
        })


        //read msg
        function loadtable(){
            $.ajax({
                    url: 'https://api.cheflick.net/api/user/message',
                    type: "GET",
                    success: function(data) {
                        console.log("the get msg data is"+data["status"])
                        if (data.status == false){
                            $.each(data, function(key, value){
                                console.log("messages")
                            })
                        }
                    }
                })
        }
        loadtable();
     })
</script>
 
<!-- Modal Map-->
<!--Voucher Modal-->
<?php include 'components/modals/map-modal.php'; ?>
<?php include 'components/modals/voucher-modal.php'; ?>

</body>
</html>