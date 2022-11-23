<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
<title>Donation Page</title>
<br>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "icon" type = "./logo.png" href = "./logo.png">
<meta name="GENERATOR" content="Evrsoft First Page">
<style>
	nav >div ul{
display: flex;
}
nav > div li{
    padding: 0px 30px;
}
.nav-link{
    font-weight: 400;
    font-size: 1rem;
    font-family: 'Arial', cursive;
}
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-color: #dce8f4;
}
* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-40 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-40,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
h2{
	text-align: center;
	color: 	#000000;
}
p{
	text-align: center;
	color: #808080;
}
.col-40 input {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img src="./logo.png" width="130" height="130" alt=""></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html"><b>HOME</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="event.html"><b>EVENTS</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Gallary.html"><b>GALLARY</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="start.html"><b>START-UPS</b></a>
                </li>
           
                <li class="nav-item">
                  <a class="nav-link" href="contactus.html"><b>CONTACT</b></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="aboutus.html"><b>ABOUT US</b></a>
                </li>
              </ul>
          
            </div>
          </nav>
<h2>Donation Checkout Form</h2>
<p>Your small funds and can make big differences.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post" action="pgRedirect.php">
      
        <div class="row">
          <div class="col-40">
            <h3>Transaction Details</h3>
            <label><i class="fa fa-institution"></i> Transaction ID</label>
            <input id="ORDER_ID" tabindex="1" readonly maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
            <label><i class="fa fa-user"></i> Full Name</label>
            <input id="CUST_ID" tabindex="2"  type="text" maxlength="20" size="20" name="CUST_ID" autocomplete="off" value="">
            <label><i class="fa fa-address-card-o"></i> Organization</label>
            <input id="INDUSTRY_TYPE_ID" tabindex="4"  type="text" maxlength="20" size="20" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly type="hidden">
            <label><i class="fa fa-credit-card"></i> Method</label>
            <input id="CHANNEL_ID" tabindex="10" type="text" 
            name="CHANNEL_ID" value="WEB" readonly>
            <label><i class="fa fa-inr"></i> Amount</label>
            <input title="TXN_AMOUNT" tabindex="10"
            type="text" name="TXN_AMOUNT"
            value="">
          </div>

          
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Send me a copy of transaction receipt
        </label>
        <input value="Proceed" type="submit"  onclick="" class="btn">
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>