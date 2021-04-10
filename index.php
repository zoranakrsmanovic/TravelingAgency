<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nanum+Myeongjo&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2d24be7deb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
<title>EXPLORE</title>
</head>
<body>
    <div id="wrapper">
        <div id="navbar">
          <div id="navbarw">
           <ul class="ul">
               <li class="linav"><a href="#navbar">Home</a></li>
               <li class="linav"><a href="#adventure1">Trips</a></li>
               <li class="linav"><a  href="#spaceabout">About Us</a></li>
               <li class="linav"><a href="#contactst">Contact</a></li>
               <li class="linav"><a href="#spaceservice">Services</a></li>     
           </ul>
          </div>
           <div id="main">
           
           
        </div>
        

        </div>
        <div class="cleaner"></div>
        <div id="headers">
        <h2 id="travel">TRAVEL &</h3>
        <h1 id="explore">EXPLORE</h2>
        </div>
            <button id="myBtn">Book your trip now!</button>

            <div id="myModal" class="modal">

              <div class="modal-content">

                <div class="modal-header">
                  <span class="close">&times;</span>
                  
                </div>
                <div class="modal-body">
                  <form name="myForm"  method="POST" action="transakcija.php"  >        
                  <label for="fname" class="titl">First name:</label><br>
                  <input type="text" id="fname" name="fname" value=""><br><br>
                  <label for="lname" class="titl">Last name:</label><br>
                  <input type="text" id="lname" name="lname" value=""><br><br>
                  <label for="email" class="titl">E-mail:</label><br>
                  <input type="text" id="email" name="email" value=""><br><br>
                  <label for="cars" class="titl">Choose a trip that you are intrested in:</label><br><br>

                  <select name="trips" > 
                      <?php 
                     $trips_array = array("Camping"=>95, "Hiking"=>90,   
                     "Sightseeing"=>96, "Paragliding"=>93,   
                     "Sky diving"=>98, "Scuba diving"=>96,
                     "Climbing"=>96,
                 );
                       
                      foreach($trips_array as $key => $value){ ?>
                      <option value="<?php echo $key;  ?>" name="<?php $key;  ?>"> <?php echo $key; ?> </option> 

                        <?php } ?>
                            </select><br><br>
                  
                  
                  <label for="date" class="titl">When do you want to go:</label><br>
                  <input type="date" id="date" name="date"><br><br>
                 

                  
              
                  <input type="submit" value="Submit" id="submitbtn"  >
                </form>
                </div>
                
                  
                </div>
              </div>

            </div>
           
            
            <script>
            // Dohvatanje modala
            var modal = document.getElementById("myModal");

           // Dohvatanje dugmeta koji ga otvara
            var btn = document.getElementById("myBtn");

            // Dohvatanje <span> elementa za zatvaranje
            var span = document.getElementsByClassName("close")[0];

            // Kada se klikne na dugme prikazuje se modal 
            btn.onclick = function() {
              modal.style.display = "block";
            }

           // Kada se klikne na close[x] modal se zatvara
            span.onclick = function() {
              modal.style.display = "none";
            }

            // Ukoliko se klikne negde van modala, modal se takodje zatvara
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            
            </script>
        
        
        
        <div class="cleaner"></div>
        <div id="content">
         
          <h3 id="activities">Activities</h3>
          <div id="border2"> </div>

          <div class="adventure" id="adventure1">
          <h2 class="choose">Choose</h2>
          <h2 class="choose">your adventure</h2>
          <div class="border1"> </div>
          <p class="someText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempus tortor. Vestibulum dapibus nibh dui, in consequat nunc suscipit nec. Maecenas elementum vel nulla eget dictum. Ut faucibus auctor hendrerit. Duis eget molestie urna, vitae luctus dolor. Ut et purus eget mauris pharetra tempor vitae gravida felis. Praesent cursus dolor ante.</p>
            </div>
           
        </div>
        <div class="maincontent">
          <i class="fas fa-angle-double-left prev"></i>
          <i class="fas fa-angle-double-right next"></i>
          <div class="wrappO">
         

          <div class="option">
            <h3 class="activitynumber">01</h3>
            <img class="optionImg" atl="camping" src="camping.jpg">
            <h3 class="name">Camping</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempus tortor. Vestibulum dapibus nibh dui.</p>
            <button class="learnMore"><a href="#contactst">Reserve now</a></button>
          </div>
          <div class="option">
            <h3 class="activitynumber">02</h3>
            <img class="optionImg" atl="sightseeing" src="sightseeing.jpg">
            <h3 class="name">Sightseeing</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempus tortor. Vestibulum dapibus nibh dui.</p>
            <button class="learnMore"><a href="#contactst">Reserve now</a></button>
          </div>
          <div class="option">
            <h3 class="activitynumber">03</h3>
            <img class="optionImg" atl="hiking" src="adventure.jpg">
            <h3 class="name">Hiking</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempus tortor. Vestibulum dapibus nibh dui.</p>
            <button class="learnMore"><a href="#contactst">Reserve now</a></button>
          </div>
          <div class="option">
            <h3 class="activitynumber">04</h3>
            <img class="optionImg" atl="scubadiving" src="spring.jpg">
            <h3 class="name">Scuba diving</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempus tortor. Vestibulum dapibus nibh dui.</p>
            <button class="learnMore"><a href="#contactst">Reserve now</a></button>
          </div>
          <div class="option">
            <h3 class="activitynumber">05</h3>
            <img class="optionImg" atl="skydiving" src="mexico.jpg">
            <h3 class="name">Sky diving</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempus tortor. Vestibulum dapibus nibh dui.</p>
            <button class="learnMore"><a href="#contactst">Reserve now</a></button>
          </div>
          <div class="option">
            <h3 class="activitynumber">06</h3>
            <img class="optionImg" atl="climbing" src="climbing.jpg">
            <h3 class="name">Climbing</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempus tortor. Vestibulum dapibus nibh dui.</p>
            <button class="learnMore"><a href="#contactst">Reserve now</a></button>
          </div>
          <div class="option">
            <h3 class="activitynumber">07</h3>
            <img class="optionImg" atl="rafting" src="rafting.jpg">
            <h3 class="name">Rafting</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempus tortor. Vestibulum dapibus nibh dui.</p>
            <button class="learnMore"><a href="#contactst">Reserve now</a></button>
          </div>
          <div class="option">
            <h3 class="activitynumber">08</h3>
            <img class="optionImg" atl="paragliding" src="paragliding.jpg">
            <h3 class="name">Paragliding</h3>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempus tortor. Vestibulum dapibus nibh dui.</p>
            <button class="learnMore"><a href="#contactst">Reserve now</a></button>
          </div>
        </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

          
          <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
         
          <script>
          $('.wrappO').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 3000,
              prevArrow: $('.prev'),
              nextArrow: $('.next'),
            });
	
           
        
          </script>

        </div>
        <div class="space"></div>
        <div class="space" id="spaceabout"></div>
        <div id="wrappAboutus">
          <div id="aboutus">
            <button id="showAboutus">About us</button>
          
            <p id="us">Nulla feugiat, nulla non luctus pellentesque, eros lacus condimentum nisl, ultricies fringilla augue tortor semper lorem. Donec posuere maximus nisi dapibus sagittis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc ornare magna ac vehicula semper.<br><br> Vivamus viverra pulvinar turpis volutpat tempor. In et hendrerit quam. Phasellus tincidunt sed sapien vel cursus. Etiam laoreet elit ut scelerisque blandit. Maecenas dapibus tellus id ante mattis blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam lacinia est ut malesuada tincidunt. Maecenas elementum rhoncus pharetra.

              Duis fermentum sodales euismod. Nullam a sem pulvinar, lacinia massa et, laoreet massa. Sed pharetra, tellus quis viverra volutpat, sem lorem consequat lectus, vel laoreet velit risus sit amet tortor.<br><br> Nam vulputat\e turpis pharetra, pharetra dolor sed, dignissim leo. Praesent tristique diam lacinia elit semper commodo. Fusce nec efficitur eros. Vestibulum vitae mauris eu orci egestas scelerisque a dictum metus. Nam lobortis magna in sem aliquam, ut ornare metus auctor. Aenean gravida odio eget nunc iaculis dignissim.
          
            </p>

            </div>

      </div>
      <script>
        $(document).ready(function(){
        $("#showAboutus").click(function(){
          $("#us").fadeToggle(1000);;
        });
        });

      </script>
     <div class="space" ></div>
     <div id="spaceservice"></div>
            
            <div id="background">
            <div id="services">
              <div id="wrappform">
              <h1 id="nameit">
                Our services
              </h1>
              <div id="nameitborder"></div>
              <div class="wrappservices">
                <div class="service1">
                  <i class="fas fa-briefcase-medical icon"></i>
                  <h3 class="service1name">Medical insurance</h3>
                </div>
                <div class="service1">
                  <i class="fas fa-plane icon "></i>
                  <h3 class="service1name">Transport</h3>
                </div>
                <div class="service1">
                  <i class="fas fa-hotel icon"></i>
                  <h3 class="service1name">Accomodation</h3>
                </div>
                <div class="service1">
                  <i class="fas fa-car icon"></i>
                  <h3 class="service1name">Rent a car</h3>
                </div>

              </div>
              </div>
            </div>
            </div>

            
           <div id="contact">
            <div class="adventure" id="contactst">
              <h2 class="choose">Contact us</h2>
              <h2 class="choose">to book your dream adventure</h2>
              <div class="border1"> </div>
              <p class="someText">For more information about trips and to book them contact us via this form. We will replay within 8 hours and provide you with all the information you need before to book.  </p>
                </div>
               
                

                
               
           </div>
           <div id="spaceform"></div>
           <div id="form">
           <form action="transakcija.php" method="POST" >        
            
            <input type="text" id="fname" name="fname" value="" placeholder="First name"><br><br>
            
            <input type="text" id="lname" name="lname" value="" placeholder="Last name"><br><br>
           
            <input type="text" id="email" name="email" value="" placeholder="Your e-mail"><br>
            <label for="cars" class="titl">Choose a trip that you are intrested in:</label></br></br>
            <select name="trips" > 
                      <?php 
                     $trips_array = array("Camping"=>95, "Hiking"=>90,   
                     "Sightseeing"=>96, "Paragliding"=>93,   
                     "Sky diving"=>98, "Scuba diving"=>96,
                     "Climbing"=>96,
                 );
                       
                      foreach($trips_array as $key => $value){ ?>
                      <option value="<?php echo $key;  ?>" name="<?php $key;  ?>"> <?php echo $key; ?> </option> 

                        <?php } ?>
                            </select><br><br>
                  
            <br>
            <label for="date" class="titl" >When do you want to go:</label></br><br>
            <input type="date" id="date" name="date" ><br><br>
            <textarea id="textarea" rows="4" cols="50" name="text">Type your message here...
              </textarea></br>

            
        
            <input type="submit" value="Submit" id="submitbtn"  >
          </form>
           </div>

           <div class="space"></div>
           <div class="space"></div>
            <div id="social">
              <div id="iconic">
              <i class="fab fa-facebook icon1"></i>
              <i class="fab fa-instagram icon1"></i>
              <i class="fab fa-twitter icon1"></i>
              </div>
            </div>
            <div id="footer">
             <div id="wrappul">
              <ul>
              <li class="footernav"><a href="#navbar">Home</a></li>
              <li class="footernav"><a href="#adventure">Trips</a></li>
              <li class="footernav"><a  href="#spaceabout">About Us</a></li>
              <li class="footernav"><a href="#contact">Contact</a></li>
              <li class="footernav"><a href="">Transactions</a></li>
              <li class="footernav"><a href="#adventure">Activities</a></li>
              <li class="footernav"><a href="#services">Our services</a></li>
              <li class="footernav"><a href="#navbar">Book now</a></li>
              </ul>
             </div>
             <div id="wrappul2">
              <ul>
              <li class="footernav2"><a href="#services">Rent a car</a></li>
              <li class="footernav2"><a href="#services">Accomodation</a></li>
              <li class="footernav2"><a  href="#services">Insurance</a></li>
              
              </ul>
             </div>
             <div id="info">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.780672618764!2d20.45807721540685!3d44.80565827909874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7b8c6af8aef5%3A0x88b84a68968fac4a!2sNemanjina%2022!5e0!3m2!1ssr!2srs!4v1585578340689!5m2!1ssr!2srs" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
             </div>
             <div id="info2">
              <p class="p1"> Phone number:</p><br>
              <p class="p2">060/09-77-297</p><br>
              <p class="p1">E-mail:</p><br>
              <p class="p2">travelandexplore@gmail.com</p><br>
              <p class="p1">Working hours:</p><br>
              <p class="p2">Mon-Fri 8am - 4pm</p><br>
              <p class="p2">Weekend - Closed</p><br>



            </div>
            </div>
            
            </div>

            
        
        </div>
    </div>
    


</body>


</html>