<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="assets\css\strap.min.css">
  <script src="assets\js\jquery.min.js"></script>
  <script src="assets\js\strap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<style>
ul.dropdown-menu{
background-color: #C0C0C0;
}
* {
	box-sizing: border-box;
}
body{
	background-color: #E6E6FA;
	
	
}
h2 {
    width: 100%;
    height: 50px;
    
    text-align: left;
    position: relative;
    -webkit-animation: mymove 10s infinite; /* Chrome, Safari, Opera */
    animation: mymove 10s infinite;
}

/* Chrome, Safari, Opera */
#div1 {-webkit-animation-timing-function: linear;}
#div2 {-webkit-animation-timing-function: ease;}
#div3 {-webkit-animation-timing-function: ease-in;}
#div4 {-webkit-animation-timing-function: ease-out;}
#div5 {-webkit-animation-timing-function: ease-in-out;}

/* Standard syntax */
#div1 {animation-timing-function: linear;}
#div2 {animation-timing-function: ease;}
#div3 {animation-timing-function: ease-in;}
#div4 {animation-timing-function: ease-out;}
#div5 {animation-timing-function: ease-in-out;}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {left: 0px;}
    to {right: 600px;}
}

/* Standard syntax */
@keyframes mymove {
    from {left: 0px;}
    to {left: 600px;}
}
.back1{
margin : 5px;
background-color : #A5C9A5;
}
.back2{
margin : 5px;
background-color : #8FBC8F;
}
.header {
background-color: #8FBC8F;
	text-align: left;
	border: 1px solid #8FBC8F;
	
}

.row:after{
	content: "";
	clear: both;
	display: block;
}

[class*="col3-"] {
	float: left;
	
}	
.col3-1{width: 8.33%;border: 1px solid #FFFFFF;}
.col3-2{width: 16.66%; border: 1px solid #E6E6FA;}
.col3-3{width: 25%;border: 1px solid #FFFFFF;}
.col3-4{width: 33.33%;border: 1px solid #FFFFFF;}
.col3-5{width: 41.66%;padding: 2%;}
.col3-55{width: 37.66%;border: 1px solid #A5C9A5;}
.col3-6{width: 50%;border: 1px solid #FFFFFF;}
.col3-7 {width: 58.33%;border: 1px solid #FFFFFF;}
.col3-8 {width: 66.66%;border: 1px solid #FFFFFF;}
.col3-9 {width: 75%;border: 1px solid #FFFFFF;}
.col3-10 {width: 83.33%;border: 1px solid #FFFFFF;}
.col3-11 {width: 91.66%;border: 1px solid #FFFFFF;}
.col3-12 {width: 100%;border: 1px solid #FFFFFF;}

[class*="col-"] {
	float: left;
	padding: 2%;
	margin-left:2%;
	border: 1% solid #FFFFFF;
}	
.col-1{width: 8.33%;}
.col-2{width: 16.66%;}
.col-3{width: 25%;}
.col-4{width: 33.33%;}
.col-5{width: 41.66%;}
.col-6{width: 50%;}
.col-7 {width: 54.33%;border: 3px solid #000; margin-right: 4%;padding-bottom:80px;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

[class*="row-"] {
	float: left;
	border: 1px solid red;
}
.row-1{ height: 10%;}

#back1{
background-image: url("home.jpeg");
}
#back2{
background-image: url("edoc.gif");
}

[class*="col2-"] {
	float: left;
	padding: 2%;
	border: 1px solid #8FBC8F;
}	
.col2-1{width: 8.33%;}
.col2-2{width: 16.66%;}
.col2-3{width: 25%;}
.col2-4{width: 33.33%;}
.col2-5{width: 41.66%;background-color:#8FBC8F;}
.col2-6{width: 50%;}
.col2-7 {width: 58.33%;}
.col2-8 {width: 66.66%;}
.col2-9 {width: 75%;}
.col2-10 {width: 83.33%;}
.col2-11 {width: 91.66%;}
.col2-12 {width: 100%;background-color: #729672;color: #FFFFFF;text-align: center;}

.floating-box {
    float: left;
    width: 29%;
    height: 45%;
    margin: 2%;
    border: 3px solid #73AD21;  
	padding-bottom:1%;
	
}

.after-box {
    height: 120px;
    
    clear: left;
    border: 3px solid #E6E6FA;      
}


</style>

</head>

<body>


<div class="header">
<h2>Welcome To <span style="color:blue"><u><a href="home.php">Online Health</a></u></span> Service<img src="images\edoc.gif" alt="Doctor" align="center" style="width:70px;height:50px;  "></h2>
</div>


<nav class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">eDoctors Home</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Disease<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Cold Disease</a></li>
            <li><a href="#">Cancer</a></li>
            <li><a href="#">AIDS</a></li>
          </ul>
        </li>
        <li><a href="Medicalcollege.php">Medical College</a></li>
        <li><a href="Doctors.php">Doctors Profile</a></li>
		<li><a href="helth.php">Health in Bangladesh</a></li>
		<li><a href="bloodbank.php">Blood Bank</a></li>
		<li><a href="Ambulance.php">Ambulance</a></li>
		<li><a href="forum.php"><span style= "color:red">Your Forum</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign Up<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="sign_doc.php"><span class="glyphicon glyphicon-user"></span>Sign Up Doctor</a></li>
            <li><a href="sign_pat.php"><span class="glyphicon glyphicon-user"></span>Sign Up Patient</a></li>
          </ul>
        </li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Log In<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login_doc.php"><span class="glyphicon glyphicon-user"></span>Log In Doctor</a></li>
            <li><a href="login_pat.php"><span class="glyphicon glyphicon-user"></span>Log In Patient</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>



<div class="col-7">
	<h3 align="left"><a><span style= "color: #A0522D"><u>Human body structure<br></u></span></a></h3>
	<img  src="images\body.gif" alt="Human Body" style="width:80%;height:90%; padding-left: 20% ;padding-bottom: 4%;padding-top:2%;">
</div>


<div class="col3-55" >
<div class="back1">
	<img  src="images\ques.gif" alt="Profile Picture" style="width:10%;height:10%px; padding-left: 2%;padding-top: 2% ">
	<var>Ask Your Doctor</var>
	<ul><a href="#">Q. Ask ?</a></ul>
</div>
</div>
<div class="col3-55">
<div class="back2">
	<img  src="images\msg.gif" alt="Profile Picture" style="width:10%;height:10%px; padding-left: 2%;padding-top: 2% ">
	<h4>Message To Admin <br></h4>
	<ul><a href="#">Write Your Comment</a></ul>
</div>
</div>

<div class="col3-55">
<div class="back1">
	<var>Recent Post<br></var>
	<ul><a href="#">~ Cancer</a></ul>
	<ul><a href="#">~ collera</a></ul>
	<ul><a href="#">~ AIDS</a></ul>
</div>
</div>

<div class="col3-55">
<div class="back2">
	<var>Most Visited Pages</var>
	<ul><a href="#">~ Canecr</a></ul>
	<ul><a href="#">~ AIDS</a></ul>
</div>
</div>

<div class="col3-55">
<div class="back1">
	<img  src="images\facebook.gif" alt="Profile Picture" style="width:10%;height:10%px; padding-left: 2%;padding-top: 2% ">
	<ul><a href="https://www.facebook.com">Facebook</a></ul>
</div>
</div>


<div class="after-box"><span  style=" color: #000"></span></div>

<div class="floating-box">
	<img  src="images\profilepic.gif" alt="Profile Picture" style="width: 20%;height: 13%; padding-left: 2%;padding-top: 2%; ">
	<h4></h4>
	<code><span style="color: blue">Developer & Admin Console</span><br><br></code>
	<var>Name : N.I.Md. Ashafuddula<br></var>
	<samp>Occupation: Study<br></samp>
	<code>Institution: <a href="http://www.ruet.ac.bd">Rajshahi University Of Engineering & Technology</a><br></code>
	<code>Mobile: 01932082303<br></code>
	<code>Address: Shahidul hall,RUET<br></code>
	<code>Facebook: <a href="https://www.facebook.com/nezamulislam.ar?_rdr=p">?????? ?????? ????????????????????????????????? ????????????</a></code>
</div>

<div class="floating-box"><img  src="images\profilepic.gif" alt="Profile Picture" style="width: 20%;height: 13%; padding-left: 2%;padding-top: 2%; ">
<h4></h4>
	<code><span style="color: blue">Admin Console</span><br><br></code>
	<var>Name : Nezamul Islam A R<br></var>
	<samp>Occupation: Study<br></samp>
	<code>Institution: <a href="http://rmcbd.net">Rajshahi Mediacal College</a><br></code>
	<code>Mobile: 01932082303<br></code>
	<code>Address: Shahidul hall,RMC<br></code>
	<code><br>Facebook: <a href="https://www.facebook.com/nezamulislam.ar?_rdr=p">?????? ?????? ????????????????????????????????? ????????????</a></code>
</div>

<div class="floating-box"><img  src="images\profilepic.gif" alt="Profile Picture" style="width: 20%;height: 13%; padding-left: 2%;padding-top: 2%; ">
	<h4></h4>
	<code><span style="color: blue">Admin Console</span><br><br></code>
	<var>Name : Md. Ashafuddula Razon<br></var>
	<samp>Occupation: Study<br></samp>
	<code>Institution: <a href="http://www.dmc.edu.bd">Dhaka Mediacal College</a><br></code>
	<code>Mobile: 01932082303</code>
	<code><br></code>
	<code>Address: Shahidul hall,DMC<br></code>
	<code><br>Facebook: <a href="https://www.facebook.com/nezamulislam.ar?_rdr=p">?????? ?????? ????????????????????????????????? ????????????</a></code>
</div>

<div class="col3-5">
	<h3><u>Contact Us</u></h3>
	<p>We are admin of Online Health Service <a href="home.php">eDoctors</a>.For any other information Contact with us.</br>
	<span style="color: blue"><u>Mobile:</u></span> <a>01932****03</a></br>
		RUET,Rajshahi .</p>
	<code>Facebook: <a href="https://www.facebook.com/nezamulislam.ar?_rdr=p">?????? ?????? ????????????????????????????????? ????????????</a></code>
</div>
<div class="col3-2">
	<h3><span style= "color:#FFFFFF"></span></h3>
	<p><span style= "color:#FFFFFF"></span></p>
</div>
<div class="col3-5">
	<h3><u>@Why Us</u></br></h3>
	<var>We are trying to service all bangladeshies for <a>Online health</a> .Now Bangladeh is getting digitalized day by day .
	So it will be very help full for every one to contact with doctor .
	<a>Medical college</a>, <a>Ambulance Information</a>, Various <a>Disease</a> and <a>caution </a>of them you will be easily learn from here.<br>
	If you get any problem with this web site you can send us your problem.We can assure you that we always be with you .
	</var>
</div>


<div class="after-box"><span  style=" color: #FFFFFF"></span></div>

<div class="col2-12">
	<p><a href="#"><span style="color:#FFFFFF">2015 Online Helth Service   @N. I. M. Ashafuddula Razon</span></a></p>
</div>

</div>

</div>


</body>
</html>