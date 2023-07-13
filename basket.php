<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Basket </title>
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
    .header {
      height: 85px;
    }

    .c1 {
    width:500px;
    height: 5px;
    margin:0 auto;
    float:none; 
    display: inline-block;
    top: 32px;
    }

    .img1  {
    width: 115px; 
    height: 84; 
    display: inline-block;
    }

    .img2  {
    width:30px;
    height:30px;
    }

    .dailyImg {
      width: 200px; 
    height: 200px;  
    }

    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active >   
    a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: white; 
    background-color: #434343;
    color:white;
    }

    .open .dropdown-menu>li>a, .open .dropdown-menu, .open .dropdown-toggle:active,.open .dropdown-toggle {
    background-color: #434343;
    color:white;
    }
    .navbar-default {
      background-color: #434343;
      border-color: #3B7373;
      margin: 0 auto;
    }
    .navbar-default .navbar-nav > li > a {
     color: white; 
    }
  

    .c2 {
    width:270px;
    height: 30px;
    top: 50px;
    }
    .form-inline .form-group input {
      width:70%;
    }

    @media only screen and (max-width: 1000px) {
      .header {
      height: 305px;
      }

      .img1  {
    width: 115px; 
    height: 84; 
    display: inline-block;
    }

  </style>
</head>

<body>

 <!-- Header Starts -->
  <div class="container-fluid">
  <div class="row">
    <div style="background-color:#3B7373;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header">
      <img src="images/logo.png" class="img-responsive img1" alt="Responsive image">
      <div class="input-group c2 pull-right" style="top: 40px">
      <input placeholder="Search.." type="search" class="form-control" style="width: 70%">
 <!--        <span class="input-group-btn">
        
        <button class="btn btn-default" type="button">search</button>
      </span>
  --> 
      <span>
      <a href="basket.php">
      <img src="images/shopping-cart-8.png" class="img-responsive img2 pull-right" alt="Responsive image">
      </span> 
      </a>
      <span>
        <a href="logIn.php">
        <img src="images/user.png" class="img-responsive img2 pull-right" alt="Responsive image">  
        </a>
      </span>
         
      </div>
      <nav class="navbar navbar-default c1">
        <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbar1" >
          <span class="sr-only">Toggle Navigation Bar </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="homePage.php">Home</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
        <ul class="nav navbar-nav">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Category<span class="caret"></span></a>
        <ul class="dropdown-menu">
              <li ><a href="laptop.html" >Laptop</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="desktop.html">Desktop</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="mobiles.html">Mobiles</a></li>
            </ul>
        </li>
        <li><a href="logIn.php">Your account</a></li>
        <li><a href="terms.html">Terms and Policy</a></li>
        </ul>
        </div><!-- navbar-collapse -->
        </div><!-- container-fluid -->
      </nav>
      
      
      

      
  </div>
</div>
</div>




<!-- main content and aside section starts -->
<div class="container-fluid">
<div class="row" style="background-color:#434343;">

<div style="background-color:#434343; color:white;" class=" col-lg-9 col-md-9 col-sm-6 col-xs-12">
<h3> Your cart</h3>
<div class="container-fluid">
<div class="row">

<div  class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">

</div>

<div  class=" col-lg-8 col-md-8 col-sm-6 col-xs-12">
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>item</th>
        <th>Price</th>
        <th>Vat</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="images/shopping-cart-8.png" class="img-responsive  img2" alt="Responsive image"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
<tr>
       <td><img src="images/shopping-cart-8.png" class="img-responsive  img2" alt="Responsive image"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>   
    <tr>
       <td><img src="images/shopping-cart-8.png" class="img-responsive  img2" alt="Responsive image"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    <tr>
       <td><img src="images/shopping-cart-8.png" class="img-responsive  img2" alt="Responsive image"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>

 <!-- Recent items ends-->
</div>
<!-- main content ends -->
</div>
</div>
<!-- aside starts-->

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 " style="background-color:#3B7373;">
<h3>Product and news</h3>

<h2 class="display-1">Offer 1</h2>
<h4 class="title">Check this</h4>
<div class="card1">
  <div class="card">
    <div class="card-header ">
      <!-- Model -->
    </div>
    <img class="card-img-top    img-responsive" src="images/shopping-cart-8.png">
    <div class="card-block">
      <h4 class="card-title">Product details</h4>
      <h6 class="card-subtitle text-muted">Product Price</h6>
<!--       <p class="card-text">Product description</p>
 -->      
    </div>
    <div class="card-block">
      <a href="#" class="btn btn-primary">Add to Cart</a>
    </div>
    
  </div>
</div>

<h2 class="display-1">Offer 1</h2>
<h4 class="title">Check this</h4>
<div class="card1">
  <div class="card">
    <div class="card-header ">
     <!--  Model -->
    </div>
    <img class="card-img-top    img-responsive" src="images/shopping-cart-8.png">
    <div class="card-block">
      <h4 class="card-title">Product details</h4>
      <h6 class="card-subtitle text-muted">Product Price</h6>
<!--       <p class="card-text">Product description</p>
 -->      
    </div>
    <div class="card-block">
      <a href="#" class="btn btn-primary">Add to Cart</a>
    </div>
    
  </div>
</div>

</div>
<!-- aside ends-->
</div> 

</div> 
<!-- main content and aside section ends -->








<!-- Footer starts-->
<div class="container-fluid footer1">

<div class="row"  style="background-color:#3B7373;">
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 ">
</div>
<div style="background-color:#3B7373; color: white;" class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
<cite>
http://all-free-download.com <br>
https://www.apple.com/gr/iphone-13/ mobile <br>
https://www.msi.com/ Laptop <br>
https://www.powercolor.com/ Graphic card <br>
<a href="https://www.flaticon.com/free-icons/user" title="user icons" style="color: white">User icons created by Freepik - Flaticon</a>
</cite>
<br>
<br>
</div>
</div>
</div>
<!-- Footer  ends-->
</body>
</html>