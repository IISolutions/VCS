<!DOCTYPE html>
<html lang="en">
<head>
  <title>VCS | Solutions</title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  #logo{
	  width:80px;
  }
  </style>
</head>
<body>

<div class="jumbotron text-left" style="margin-bottom:0;  background-color: white; height:auto; max-height:150px; max-width:1200px; margin: auto;">
<div class = "title"><h2><img src="img/1.png" id="logo"> VIRTUAL CALLS SOLUTIONS </div>
<div class = "tagline">Customer support made easy.<div>
</div>
</div>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="#Phils"><img src= "img/phils.jpg "></a>
  <a href="#Uk"><img src= "img/uk.jpg "></a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<div class="w3-content w3-section" style="max-width:1200px; margin-top:5px;">
  <img class="mySlides" src="img/support.png" style="width:100%">
  <img class="mySlides" src="img/customer.png" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 10000); // Change image every 2 seconds
}
</script>






<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h3>24/7 Support <i class="fa fa-cogs" style="font-size:30px;color:#DC0032"></i> </h3>
      <div class="fakeimg2">
      <div class="marg">
	  We offer all hours coverage, including weekends and holidays. Our teams are in all time zones so their work corresponds with their local work day. 
	   <a href = "#">Meet the team.<i class="fa fa-external-link"></i></a>
	  </div>
	  </div>
      <p></p>
      <h3>Our Services</h3>
      <p>
	  <table border = "0" cellpadding = "3" width = "100%">
	  <tr>
		<td><a href = "#"><center><i class="fa fa-comments-o" style="font-size:48px;color:#DC0032"></i></center></a></td>
		<td><a href = "#"><center><i class="fa fa-envelope-o" style="font-size:45px;color:#DC0032"></center></a></td>
		<td><a href = "#"><center><i class="fa fa-life-buoy" style="font-size:45px;color:#DC0032"></i></center></a></td>
	  </tr>
	   <tr>
		<td><center>Live Chat</center></td><td><center>E-Mail</center></td><td><center>CRM</center></td>
	  </tr>
	  </table>

      
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h3>Dynamic Team <i class="fa fa-sliders" style="font-size:30px;color:#DC0032;"></i></h3>
      <div class="fakeimg2">
	   <div class="marg">
	  Our dedicated managers and analysts check responses across all clients and give agents and managers 1:1 feedback on how to improve. See how we define excellent customer experience.
	  </div><div class="marg">
	  Our managers and analysts review tickets across all clients and assess response quality on four factors: <b>comprehension, brand, depth, and empathy </b>. They then give 1:1 feedback to agents so they can improve over time. 
	   <a href = "#">Give our QA services a try with a free support audit.. <i class="fa fa-external-link"></i></a>
	  </div>
	  </div>
	    <br>
      <h3>Elastic pricing gives your business flexibility <i class="fa fa-bar-chart-o" style="font-size:30px;color:#DC0032;"></i></h3>
      <div class="fakeimg2">
	   <div class="marg">
	 With elastic and scalable support, you only need to pay for support work as it happens. There are no fixed costs. So, when things get busy during a high sales period or during a product launch, you can maintain an excellent support experience. When sales slow down, our system automatically reduces volume. 
	 <a href = "#">Learn more about support pricing and costs.. <i class="fa fa-external-link"></i></a>
	  </div>
	  </div>
	    <br>
	  <h3>Helping companies to scale while focusing on growth <i class="fa fa-line-chart" style="font-size:30px;color:#DC0032;"></i></h3>
      <h6>Our happy clients</h6>
	  <div class="fakeimg2">
	   <div class="marg3">
	 "VCS has been amazing for us (Quad Lock) as it frees our time and our minds to better focus on growing the business, while knowing the our customers are being fully supported and give the best experience possible.
	 <a href = "#">Read the full case study or see more clients.. <i class="fa fa-external-link"></i></a>
	  </div>
	  </div>
	 
	  
    </div>
  </div>
</div>
<br>
<hr style= "max-width:1200px; margin: auto; ">

<div class="jumbotron text-center"  style="margin-bottom:0;  background-color:white; height:auto; max-height:300px; max-width:1200px; margin: auto;">

  <div id="contact" class="container-fluid">
  <div class="row">
    <div class="col-sm-4 font2">
      
      <p><span class="glyphicon glyphicon-map-marker"></span> Kingston Rd, New Malden KT3 3RX, UK</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> contact@virtualcallssolutions.com</p>
    </div>
    <div class="col-sm-7 slideanim">
	<p class = "font2">Contact us and we'll get back to you within 24 hours.</p>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>
