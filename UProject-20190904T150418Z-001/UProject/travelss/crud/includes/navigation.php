
<style>


/* Caption heading */
.heading {
  color: white;
  font-size: 100px;
  padding: 8px 12px;
  position: absolute;
  width: 100%;
  text-align: left;
}


* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}



/* Caption text */
.text {
  color: white;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  background-color: #030305
}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
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
  .text {font-size: 11px}
}

</style>




<div class="row">

        <marquee scrollamount="10"
        direction="left"
        behavior="scroll"
        style="font-family:cursive;font-size:40px">
        E-Dilmi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Online Seat Booking & Bus Reservation
        </marquee>
        
            <div class="col-md-12">
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
          setTimeout(showSlides, 1500); // 
        }
        </script>

        <div id="navigation" style="border-radius: 0px">
    <nav class="navbar navbar-default no-border-radius" role="navigation" style="background-color: white">
        <div class="">
           
           <!-- mainmenu -->
                                            <div class=" col-sm-12" id="bs-example-navbar-collapse-1" style="padding-left:10px;">
                            <ul class="nav navbar-nav" >
                                <li >
                                    <a href="User.php" style="padding-left:30px ;font-size: 15px">
                                        <i class="glyphicon glyphicon-user"></i>
                                           User                                </a>
                                </li>
                                
                                  <li >
                                    <a href="staff.php" style="padding-left:30px ;font-size: 15px">
                                          <i class="glyphicon glyphicon-th-large"></i>
                                        Staff                                    </a>
                                </li>
                                
                                 <li >
                                    <a href="busdetail.php" style="padding-left:30px ;font-size: 15px">
                                        <i class="  glyphicon glyphicon-road"></i>
                                           Bus Details                               </a>
                                </li>
                                 <li >

                                    <a href="reservation.php" style="padding-left:30px ;font-size: 15px">
                                        <i class="  glyphicon glyphicon-check"></i>
                                           Bus Reservation                                </a>
                                </li>
                                
                                <li>
                                    <a href="managebooking.php" style="padding-left:30px ;font-size: 15px">
                                        <i class="glyphicon glyphicon-time"></i>
                                        Bookings                                    </a>
                                </li>
                                 <li >
                                    <a href="notifications.php" style="padding-left:30px ;font-size: 15px">
                                        <i class="glyphicon glyphicon-th-list"></i>
                                        Notifications                                    </a>
                                </li>
                                <li >
                                    <a href="feedback.php" style="padding-left:30px ;font-size: 15px">
                                        <i class="glyphicon glyphicon-comment"></i>
                                        Feedback                                    </a>
                                </li>
                                
                                
                                <li >
                                    <a href="logout.php"style=" font-size: 15px; padding-left: 100px">
                                       Admin <i class="glyphicon glyphicon-log-out"></i>
                                                Logouts                          </a>
                                </li>
                                
                            </ul>
                        </div>
                    <!-- mainmenu -->
          
             
                </div>

                    
                    </nav>
                </div>


                


   