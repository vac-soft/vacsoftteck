<script>

    // Open the payment popup
function openPaymentPopup() {
    var modal = document.getElementById('paymentModal');
    modal.style.display = 'block';
}

// Close the payment popup
function closePaymentPopup() {
    var modal = document.getElementById('paymentModal');
    modal.style.display = 'none';
}



</script>


<style>

.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
}

.modal-content {
    position: absolute;
     width:40%;
     height: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    margin-top : 15%;
    margin-left:50%;
    background-color: #fff;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    color: #333;
}

#demobtn {
        background-color: green;
        color: white;
        
        cursor: pointer;
    }

#demobtn:hover{
   
    background-color:white;
    color:green;
    border: 2px solid green;
}

@media screen and (max-width: 300px) {

.Vx-Payment{
width : 10vw;
margin-top : 5%;
margin-left:10% !important;

}

body {
    font-size: 14px;
}

.modal-content {
position: absolute;
width:90vw;
height: max-content !important;
transform: translate(-50%, -50%);
padding: 20px;
margin-top : 85%;

background-color: #fff;
}


.row{

flex-direction:column !important;

}


.UPI-button{

margin-left :15% !important;
}

.Qr-img{
width : 60vw !important;
margin-left :-5% !important;

}

.logo-img{
width : 20vw !important;
margin-left :15% !important;

}
.Or{
text-align :center;
margin-top:5%;  

}


#js-script{

width : 10vw !important;
}
.img-fluid{

width:90%;
}

}


@media screen and (min-width: 300px) and (max-width: 400px){
.img-fluid{
width:90%;
height :50vh;        
}
}


@media screen and (min-width: 300px) and (max-width: 500px){

body {
font-size: 14px;
}

.modal-content {
position: absolute;
width:85vw;
height: max-content !important;
transform: translate(-50%, -50%);
padding: 20px;
margin-top : 85%;
/* margin-left:50%; */
background-color: #fff;
}


.row{

flex-direction:column !important;

}



.UPI-button{


margin-left :15% !important;
}

.Qr-img{
width : 40vw !important;
margin-left :5% !important;

}

.logo-img{
width : 20vw !important;
margin-left :15% !important;

}
.Or{
text-align :center;
/* margin-left:30%; */
margin-top:5%;


}

.Vx-Payment{
width : 10vw;
margin-top : 5%;
margin-left:18% !important;

}

#js-script{

width : 10vw !important;
}





}





@media screen and (min-width: 500px) and (max-width: 704px) {
body {
font-size: 16px;
}

body {
font-size: 14px;
}

.modal-content {
position: absolute;
width:92vw;
height: max-content !important;
transform: translate(-50%, -50%);
padding: 20px;
margin-top : 45%;
margin-left:50%;
background-color: #fff;
}


.row{
display:flex !important;
margin-top:5%;
}

.UPI-button{

flex:1;
margin-left :0% !important;

}

.Qr-img{
width : 28vw !important;
margin-left :0% !important;
height : 28vw !important;

}

.logo-img{
width : 20vw !important;
margin-left :15% !important;

}

.Vx-Payment{
width : 20vw;
margin-top : 5%;
margin-left:-34% ;
}

.js-script{

width : 10vw !important;
}

.Or{

margin-left:5%;
margin-top:5%;

}



}







@media screen and (min-width: 705px) and (max-width: 924px) {
body {
font-size: 18px;
}



body {
font-size: 14px;
}

.modal-content {
position: absolute;
width:60vw;
height: 50%;
transform: translate(-50%, -50%);
padding: 20px;
margin-top : 25%;
margin-left:50%;
background-color: #fff;
}


.row{
display:flex;
margin-top:5%;
}

.UPI-button{

flex:1;
margin-left :5% !important;

}

.Qr-img{
width : 20vw !important;
margin-left :0% !important;

}

.modal-content {
position: absolute;
width:80vw;
height: 50%;
transform: translate(-50%, -50%);
padding: 20px;
margin-top : 25%;
margin-left:50%;
background-color: #fff;
}


.logo-img{
width : 10vw !important;
margin-left :15% !important;

}

.Vx-Payment{
width : 20vw;
margin-top : 5%;
margin-left:-15%;
}

.js-script{

width : 10vw !important;
}

.Or{

margin-left:5%;
margin-top:5%;

}

}



@media screen and (min-width: 925px) and (max-width: 1224px) {

.row{
display:flex;
margin-top:5%;
}

.UPI-button{

flex:1;
margin-left :5% !important;

}

.modal-content {
position: absolute;
width:70vw;
height: 50%;
transform: translate(-50%, -50%);
padding: 20px;
margin-top : 15%;
margin-left:50%;
background-color: #fff;
}

.Qr-img{
width : 15vw !important;
margin-left :0% !important;
height:12vh;

}

.logo-img{
width : 10vw !important;
margin-left :15% !important;

}

.Vx-Payment{
width : 20vw;
margin-top : 5%;
margin-left:-5%;
}

#js-script{

width : 5vw !important;
}



}




</style>



<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-center">

        <div class="logo">
            <a href="index.php"><img src="assets/img/Vac-new-logo.jpg" alt="logo" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="../../#about">About</a></li>
                <li>
                    <div class="dropdown">
                        <a href="../../#Solutions" class="nav-link scrollto" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            Solution
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <div class="dropdown">
                                <div class="dropdown">
                                    <li><a class="dropdown-item" type="button">Cloud</a></li>

                                    <!-- <a href="../../../VAC_Softtech/products.php" class="dropdown-item" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        
                                    </a> -->
                                </div>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <div class="dropdown">
                                        <li><a href="../../Products/CallCenterDialer.php" class="dropdown-item" type="button">Call Center Dialer</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/CRM.php" class="dropdown-item" type="button">CRM</a></li>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#lead management" class="dropdown-item" type="button">Lead Management</a></li>
                                            </div>
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#lead management" class="dropdown-item" type="button">Support Management</a></li>
                                            </div>
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#CRM" class="dropdown-item" type="button">Delivery Management</a></li>
                                            </div>
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#CRM" class="dropdown-item" type="button">Accounts Management</a></li>
                                            </div>
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#Real Estate" class="dropdown-item" type="button">Real Estate Management</a></li>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/IPPBX.php" class="dropdown-item" type="button">IP PBX</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/CompleteBusinessSuite.php" class="dropdown-item" type="button">Complete Business Suite</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/IVRSystem.php" class="dropdown-item" type="button">IVR</a></li>
                                    </div>

                                    <div class="dropdown">
                                        <li><a href="../../Products/Customercare.php" class="dropdown-item" type="button">Customer Care</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/VMS.php" class="dropdown-item" type="button">VMS</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/BulkSMS.php" class="dropdown-item" type="button">Bulk SMS</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/VACWAC.php" class="dropdown-item" type="button">VAC Whatsap Connect</a></li>
                                    </div>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <div class="dropdown">
                                    <a href="../../../VAC_Softtech/products.php" class="nav-link scrollto" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        On Premises
                                    </a>
                                </div>
                                <!-- <li><a href="../../products.php#Call Center Dialer" class="dropdown-item" type="button">On Premises</a></li> -->
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <div class="dropdown">
                                        <li><a href="../../Products/CallCenterDialer.php" class="dropdown-item" type="button">Call Center Dialer</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/CRM.php" class="dropdown-item" type="button">CRM</a></li>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#lead management" class="dropdown-item" type="button">Lead Management</a></li>
                                            </div>
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#CRM" class="dropdown-item" type="button">Support Management</a></li>
                                            </div>
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#CRM" class="dropdown-item" type="button">Delivery Management</a></li>
                                            </div>
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#CRM" class="dropdown-item" type="button">Accounts Management</a></li>
                                            </div>
                                            <div class="dropdown">
                                                <li><a href="../../Products/CRM.php#Real Estater" class="dropdown-item" type="button">Real Estate Management</a></li>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/IPPBX.php" class="dropdown-item" type="button">IP PBX</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/CompleteBusinessSuite.php" class="dropdown-item" type="button">Complete Business Suite</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/IVRSystem.php" class="dropdown-item" type="button">IVR</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/Customercare.php" class="dropdown-item" type="button">Customer Care</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/VMS.php" class="dropdown-item" type="button">VMS</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/BulkSMS.php" class="dropdown-item" type="button">Bulk SMS</a></li>
                                    </div>
                                    <div class="dropdown">
                                        <li><a href="../../Products/firewall.php" class="dropdown-item" type="button">Fire Wall</a></li>
                                    </div>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </li>
		<li>
			<div class="dropdown">
                        <a href="" class="nav-link scrollto" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            Resources
                        </a>
			</div>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
				<div class="dropdown">
					<li><a class="nav-link scrollto" href="casestudy.php" id="nav-scroll2">Case Studies</a></li>
				</div>
				<div class="dropdown">
					<li><a class="nav-link scrollto" href="https://www.indeed.com/cmp/Vac-Softteck" id="nav-scroll2">Careers</a></li>
				</div>
			</ul>
		</li>
                <!--<li><a class="nav-link scrollto" href="casestudy.php">Case Studies</a></li>-->
                <!-- <li><a class="nav-link scrollto" href="https://rzp.io/l/iVdsUnsNS">Online Payment</a></li> -->
                <!-- <li><a class="nav-link scrollto" href="../../price.php">Pricing</a></li> -->
                <li><a class="nav-link scrollto" href="../../#contact">Contact Us</a></li>
                <!--<li><a class="nav-link scrollto" href="https://demo.vacsoftteck.net/">Demo</a></li>-->
                <!-- <div class="payment-button">
                    <form>
                        <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_LHOoj3iWrDaQ3k" async> </script>
                    </form>
                </div> -->
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>


        </nav>
	<!-- <div>
        <a href="https://demo.vacsoftteck.net/"><button class="demobtn">Demo</button></a></div>
    </div> -->
    <div>  
        <a href="https://demo.vacsoftteck.net/"><button  class="btn btn-success" id="demobtn">Demo</button></a>
    </div>


        <div class="payment-button">
                

                <button class="btn btn-primary" onclick="openPaymentPopup()" style="margin-left:60%;width:100%;max-width: 200px;" > Payment </buttton> 

            
        </div> 



    <div id="paymentModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">

        <span class="close" onclick="closePaymentPopup()">&times;</span>

        <!-- Add your payment options here (e.g., UPI and VX) -->
        <p style="color:black;text-align:center;font-size:20px; margin-top:-3%;margin-left:3%;"><b>Select a Payment option &nbsp;: </b></p>

    <div class="row" style="display:flex;margin-top:3%;">

        <div class="UPI-button" style="flex:1;margin-left:5%">

                <!-- <button onclick="handleUPIPayment()">UPI Payment</button><br> -->
                <!-- <img src="./images/upi.webp" class="logo-img" style="height:9vh;width:6vw;margin-top:-10%;margin-left:15%"><br>
                -->

                <img src="./images/QR-code.jpeg" class="Qr-img"  style="height:25vh;width:10vw;">

                <br>

        
        </div>

    


        <div class="Or" style="flex:1;margin-left:0%;margin-top:10%;">

              <h5>OR </h5>



        </div>


        <div class="Vx-Payment" style="flex: 1; margin-top: 8%;width: 20% !important;margin-left:-20%;">

                <form>

                    <script src="https://checkout.razorpay.com/v1/payment-button.js"  data-payment_button_id="pl_LHOoj3iWrDaQ3k" async > </script>

                </form>


         </div>

        </div>


    </div>
</div>

</div>
</header>




