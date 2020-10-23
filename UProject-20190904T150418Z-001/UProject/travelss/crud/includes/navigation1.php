<style >
	* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}


/* Caption text */
.text {
  color: white;
  font-size: 100px;
  padding: 8px 12px;
  position: absolute;
  width: 100%;
  text-align: left;
}

/* The dots*/
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}


@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<div id="navigation" style="border-radius: 10px">
    <nav class="navbar navbar-default no-border-radius" role="navigation" style="background-color: white">
        <div class="">


<div class="text">
<marquee scrollamount="10"
		direction="left"
		behavior="scroll"
		style="font-family:cursive;font-size:40px">
		E-Dilmi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Online Seat Booking & Bus Reservation
		</marquee>
</div>

	<div class="myslide">

		<div class="mySlides fade">
			<img src="image/img2.jpg" style="width:100%;height:500px">
		</div>

		<div class="mySlides fade">
			<img src="image/Red-Road-l.jpg" style="width:100%;height:500px">
		</div>

		<div class="mySlides fade">
			<img src="image/road-trip.jpg" style="width:100%;height:500px">
		</div>

	</div>

<div>
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
	
		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 2000); // Change image every 2 seconds
		}
		</script>

		<!-- mainmenu -->
                                            <div class=" col-sm-12" id="bs-example-navbar-collapse-1" style="padding-left:30px;">
                            <ul class="nav navbar-nav" >
                                <li >
                                    <a href="customer.php" style="padding-left:30px ;font-size: 20px">
                                        <i class="glyphicon glyphicon-user"></i>
                                           User                                 </a>
                                </li>
                                
                                  <li >
                                    <a href="staff.php" style="padding-left:30px ;font-size: 20px">
                                          <i class="glyphicon glyphicon-th-large"></i>
                                        Staff                                    </a>
                                </li>
                                
                                
                                          <li class="dropdown " style="padding-left:30px ;font-size: 20px">

                                    <a  href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" id="fix-dropdown"
                                        data-hover="dropdown" data-close-others="false"><i class="glyphicon glyphicon-road"></i>&nbsp;Route Bus<b class="caret"></b></a>
                                    <ul role="menu" class="dropdown-menu">
                                 
                                        <li ><a href="Trip.php">Add Details</a></li>
                                        <li><a href="busreservation.php">Bus Reservations</a></li>
                                        
                                      
                                    </ul>
                                </li>
                                <li>
                                    <a href="managebooking.php" style="padding-left:30px ;font-size: 20px">
                                        <i class="glyphicon glyphicon-time"></i>
                                        Bookings                                    </a>
                                </li>
                                 <li >
                                    <a href="notifications.php" style="padding-left:30px ;font-size: 20px">
                                        <i class="glyphicon glyphicon-th-list"></i>
                                        Notifications                                    </a>
                                </li>
                                <li >
                                    <a href="feedback.php" style="padding-left:30px ;font-size: 20px">
                                        <i class="glyphicon glyphicon-comment"></i>
                                        Feedback                                    </a>
                                </li>
                                
                                
                                <li >
                                    <a href="logout.php"style=" font-size: 20px; padding-left: 190px">
                                       Admin <i class="glyphicon glyphicon-log-out"></i>
                                                Logouts                          </a>
                                </li>
                                
                            </ul>
                        </div>
                    <!-- mainmenu -->
		  
             <div class="title1 col-sm-12">
		<h1 style="font-family:Brush Script MT; font-size:120px; line-height:200px;  ">E-Dilmi</h1>

<marquee scrollamount="10"
direction="left"
behavior="scroll"
style="font-family:Arial, Helvetica, sans-serif;font-size:40px;">
Online Seat Booking & Bus Reservation
</marquee>

	</div>
		   <div class=" col-sm-3 "  style="padding-left:100px" >
                  </div>

 </div>

                    
                    </nav>
                </div>
            
        