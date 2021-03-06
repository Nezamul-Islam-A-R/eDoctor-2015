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
	text-align: center;
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
.col3-55{width: 37.66%;border: 1px solid #A5C9A5; }
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
.col-7 {width: 54.33%;border: 3px solid #000; margin-right: 4%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

[class*="row-"] {
	float: left;
	border: 1px solid red;
}
.row-1{ height: 40px;}

#back1{
background-image: url("home.jpeg");
}
#back2{
background-image: url("edoc.gif");
}

[class*="col2-"] {
	float: left;
	padding: 15px;
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
.floating2-box {
    float: left;
    width: 620px;
    height: 305px;
    margin: 35px;
    border: 3px solid #73AD21;  
}
.floating3-box {
    float: left;
    width: 620px;
    height: 305px;
    margin: 35px;
    border: 3px solid #4682B4;  
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
<h3><a href="#">Health In Bangladesh</a></h3>
<article>In Bangladeh Health and education levels remain relatively low.although they have improved r
ecently as poverty (31% at 2010) levels have decreased. The poor health conditions in Bangladesh 
are attributed by the lack of healthcare and services provision by the government. The total expendi
ture on healthcare as a percentage of their GDP was only 3.35% in 2009, according to a World Bank re
port published in 2010. The number of hospital beds per 10 000 population is 4. The General gove
rnment expenditure on healthcare as a percentage of total government expenditure was only 7.9% as of 20
09 and the citizens pay mo
st of their health care bills as the out-of-pocket expenditure as a percentage of
 private expenditure on health is 96.5%.<br></article>
 <a href="#"><var>Disease and malnutrition<br></var></a>
 <article>Child malnutrition in Bangladesh is amongst 
 the highest in the world. Two-thirds of the children, under the age of five, are under-nourished and a
 bout 60% of them, who are under six, are stunted. More than 45 percent of rural families and 76 percen
 t of urban families were below the acceptable caloric intake level. Malnutrition is passed on through g
 enerations as malnourished mothers give birth to malnourished children. According to the World Bank, about o
 ne-third of babies in Bangladesh are born with low birth weight, increasing infant mortality rate, and leads to 
 increasing risk of diabetes and heart ali
 ments in adulthood. According to UNICEF, one neonate dies in Bangladesh every three to four minutes; 120 0
 00 neonates die every year.<br></article>
 <a href="#"><var>Maternal and child health</var></a>
 <article>One in eight women receive delivery care from medically trained providers and fewer than half of all pre
 gnant women in Bangladesh seek ante-natal care. Inequity in maternity care is significantly reduced by ensuring
 the accessibility of heath services. In June 2011, the United Nations Population Fund released a report on T
 he State of the World's Midwifery. It contained new data on the midwifery workforce and policies relating to newb
 orn and maternal mortality for 58 countries. The 2010 maternal mortality rate per 100,000 births for Bangladesh is
 340. This is compared with 338.3 in 2008 and 724.4 in 1990. The under 5 mortality rate, per 1,000 births is 55 and t
 he neonatal mortality as a percentage of under 5's mortality is 57. The aim of this report is to highlight ways in whi
 ch the Millennium Development Goals can be achieved, particularly Goal 4 ??? Reduce child mortality and Goal 5 ??? improve
 maternal heal
 th. In Bangladesh the number of midwives per 1,000 live births is 8 and the lifetime risk of death for pregnant women 1 in 110.</article>
 <h4><br>Demographics<br></h4>
 
 <samp>
 -Population ??? over 150 million<br>
-Rural population ??? 77%<br>
-Population density ??? 881 square kilometres (340 sq mi)<br>
-People below poverty line ??? 60%<br>
-Population doubling rate ??? 25???30 years<br>
-Per capita GDP ??? Tk. 18,896<br>
</samp>
 <h4>Health indicators<br><h4>
 <samp>-CDR ??? 5.2 /1000<br>
-Annual Growth rate ??? 1.48%<br>
-MMR ??? 1.94 /1000 live births (BMMS 2010)<br>
-IMR ??? 43 /1000 live births<br>
-Under 5 MR ??? 83 /1000 live births<br>
-Total Fertility Rate ??? 2.9<br>
-CPR ??? 53.8%<br>
-Life expectancy at birth ??? 68 (m) and 69 (f)<br>
-Fully immunized children ??? 52%<br>
-TB (smear positive new) detection rate ??? 31.2%<br></samp>
  <h4><br>Health care infrastructure<br></h4>
  <samp>-UHFWC ??? 3375<br>
-31???50 bed UHC ??? 397<br>
-Various types o district level hospitals ??? 80<br>
-Government medical college hospitals ??? 13<br>
-Postgraduate hospitals ??? 6<br>
-Specialised hospitals ??? 25<br>
-Doctor to population ratio ??? 1:4,3660<br>
-Nurse to population ratio ??? 1:8,226<br>
-Hospital beds ??? 40,773 (over 29,000 in GOB)<br></samp>
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