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
.c1 {
width:50%;
margin:0 auto;
    display: inline-block;
    float:none;	
}


.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active >   
 a:hover, .navbar-default .navbar-nav > .active > a:focus {
color: white; 
background-color: #173b82;
color:white;
}

 .open .dropdown-menu>li>a, .open .dropdown-menu, .open .dropdown-toggle:active,.open .dropdown-toggle {
    background-color: #173b82;
    color:white;
  }
 


  .navbar-default {
    background-color: #173b82;
    border-color: #173b82;
}
  .navbar-default .navbar-nav > li > a {
   color: white; 
    }
	
	 
	 
	
.c2 {
width:60%;
}
.form-inline .form-group input {
	width:70%;
}
.centered{
width:70%;
   align:center;
   padding-left:100px;
}
.img1  {
width:100px;
height:100px;
}
.img2  {
width:30px;
height:30px;
}
.img3  {
width:200px;
height:200px;
}

.img4  {
width:80px;
height:80px;
} 

h3{text-align:center;}
h2 {
    text-align: center;
    margin: 30px 0;
}
.card1 {
  width: 100%;
  max-width: 200px;
  margin: 0 auto 100px;
}
h4.title {
  text-align: center;
}
.plaisio{
width:200px;
height:300px;
 border-color: #173b82;
}
</style>
</head>
<body>
<div class="container-fluid" style="background-color:#3B7373;">
<div class="row">


<div  class=" col-lg-12 col-md-8 col-sm-6 col-xs-12" >


<?php 
include 'registration-in.php';
$pass='';
$db='eshop';
$user='root';
$db_host='localhost';
//Σύνδεση με Βάση Δεδομένων 
$dbc = @mysqli_connect ($db_host, $user,$pass,$db) OR die ('Η σύνδεση στη Βάση Δεδομένων δεν είναι εφικτή. ' . mysqli_connect_error() );
if ($dbc) {echo "Η σύνδεση με τη Βάση Δεδομένων $db ήταν επιτυχής<br>";}
	$check=1;
if(isset($_POST['signup']))  
{  
    $first_name=$_POST["first_name"];  
	$last_name=$_POST["last_name"];
    $age=$_POST["age"];	
	$address=$_POST["address"];
	$pass1=$_POST["pass1"];	
	$pass2=$_POST["pass2"];	
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$captcha=$_POST["captcha"];
}
	
	if (empty($captcha)){
echo "Δεν καταχωρήσατε το πεδίο captcha<br>";
	$check=0;}
	
if ($captcha!="Et43"){
echo "πρέπει να αποδείξετε ότι δεν είσαστε bot";
	$check=0;}	
	else
		echo"αποδείξατε ότι δεν είσαστε bot";
	
	
	if (empty($first_name)){
echo "Δεν καταχωρήσατε το πεδίο first name<br>";
	$check=0;}

else {$first_name_final=mysqli_real_escape_string($dbc,trim($first_name));}	
	
	
	if (empty($last_name)){
echo "Δεν καταχωρήσατε το πεδίο last name<br>";
	$check=0;}

else {$last_name_final=mysqli_real_escape_string($dbc,trim($last_name));}
	if (empty($age)){
echo "Δεν καταχωρήσατε το πεδίο age<br>";
	$check=0;}

	if (empty($address)){
echo "Δεν καταχωρήσατε το πεδίο pass1<br>";
$check=0;}
	else {$address_final=mysqli_real_escape_string($dbc,trim($address));}
	
	
if (empty($pass1)){
echo "Δεν καταχωρήσατε το πεδίο pass1<br>";
$check=0;}

if (empty($pass2)){
echo "Δεν καταχωρήσατε το πεδίο pass2<br>";
$check=0;}

if ($pass1==$pass2) {
                            echo" Ο κωδικοί που δώσατε ταυτοποήθηκαν με επιτυχία<br>";
      
                            $pass=$pass1;
							$pass_final=SHA1(mysqli_real_escape_string($dbc,trim($pass)));
							}							
else {
      echo" Οι κωδικοί που δώσατε δεν ταιριάζουν. Παρακαλώ συμπληρώστε σωστά τους κωδικούς<br>";
	  $check=0;
	  }


if (empty($phone)){
echo "Δεν καταχωρήσατε το πεδίο phone<br>";
$check=0;}	

else {$phone_final=mysqli_real_escape_string($dbc,trim($phone));}


if (empty($email)){
echo "Δεν καταχωρήσατε το πεδίο phone<br>";
$check=0;}	

else {$email_final=mysqli_real_escape_string($dbc,trim($email));}


	if ($check==1) {echo "Τα απαραίτητα πεδία συμπληρώθηκαν και είναι έτοιμα να καταχωρηθούν στη ΒΔ για να ολοκληρωθεί η εγγραφή<br>";
// Mysql query
$q = "INSERT INTO customer (first_name,last_name,customer_age,address,pass,phone,email) VALUES ('$first_name_final','$last_name_final',$age,'$address_final','$pass_final','$phone_final','$email_final')";
$r = mysqli_query ($dbc, $q);
if ($r) {
    echo "Η εγγραφή ολοκληρώθηκε με επιτυχία<br>";
} else {
    echo "Error: " . $q . "<br>" . mysqli_error($dbc);
}
$num =mysqli_affected_rows($dbc);
echo "Επηρεάστηκαν $num γραμμές";
mysqli_close($dbc);
}
	

  ?>

</div>

<div  class=" col-lg-1 col-md-1 col-sm-6 col-xs-12">
</div>
</div>
</div>

</body>
</html>
