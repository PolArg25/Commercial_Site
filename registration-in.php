<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>account </title>
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

    .c3 {
      width:90%;
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
<!-- Header Starts -->
  <div class="container-fluid">
  <div class="row">
    <div style="background-color:#3B7373;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header">
      <img src="images/logo.png" class="img-responsive img1" alt="Responsive image">
      <div class="input-group c2 pull-right" style="top: 40px">
      <input placeholder="Search.." type="text" class="form-control" style="width: 70%">
 <!--        <span class="input-group-btn">
        
        <button class="btn btn-default" type="button">search</button>
      </span>
  --> 
      <span>
      <a href="basket.php">
      <img src="images/shopping-cart-8.png" class="img-responsive img2 pull-right" alt="Responsive image">
      </a>
      </span> 
      
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
 <!-- Header ends -->
 
<!-- main content and aside section starts -->




<div class="container-fluid">
<div class="row" style="background-color:#434343; color:white;">
<h3> Registration</h3>
<div  class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">

</div>

<div  class=" col-lg-8 col-md-8 col-sm-6 col-xs-12">






<div class="panel panel-default c3">
 <div class="panel-body">  
                    <form role="form" method="post" action="registration-out.php">  
                        <fieldset>  
							  <div class="form-group"  >  
                                <input class="form-control" placeholder="first name" name="first_name" type="text" >  
                            </div>  
							
							<div class="form-group"  >  
                                <input class="form-control" placeholder="last name" name="last_name" type="text" >  
                            </div>  
							
							<div class="form-group"  >  
                                <input class="form-control" placeholder="age" name="age" type="number" >  
                            </div>  
							
							<div class="form-group"  >  
                                <input class="form-control" placeholder="address" name="address" type="text" >  
                            </div> 
							
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass1" type="password"  >  
                            </div> 
                          <div class="form-group">  
                                <input class="form-control" placeholder="confirm Password" name="pass2" type="password"  >  
                            </div>  							
							
							<div class="form-group"  >  
                                <input class="form-control" placeholder="phone" name="phone" type="text" >  
                            </div> 
							
							
							<div class="form-group"  >  
                                <input class="form-control" placeholder="email" name="email" type="email" >  
                            </div> 
							
							
							<div class="form-group"  >  
								<img src="images/captcha.png" class="img-responsive  img2" alt="Responsive image">
                                <input class="form-control" placeholder="type the characters" name="captcha" type="text" >  
							</div>
							
							
                <input class="btn btn-lg btn-success btn-block" type="submit" value="Sign Up" name="signup" >  
                <br>
                <a href="logIn.php">
                <input class="btn btn-lg btn-success btn-block" value="login" name="login" >  
                </a>
                </fieldset>  
                </form>  
                </div>
<div class="panel panel-default">



</div>
</div>
</div>

<div  class=" col-lg-2 col-md-2 col-sm-6 col-xs-12">

</div>


</div>



</div>

</div>
</div>


<div class="container-fluid">

<div class="row" style="background-color:#434343; color:white;">
<h3>Account settings</h3>


<div  class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

</div>


<div  class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
<div class="plaisio">

<button type="button" class="btn btn-default"> User name & Password</button>
<br>
<br>
<button type="button" class="btn btn-default"> Personal information</button>
<br>
<br>
<button type="button" class="btn btn-default"> Payment</button>
<br>
<br>

</div>
</div>

<div  class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

</div>

</div>
</div>



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
