<?php 
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!--NAVBAR-->
    <nav class="navbar navbar-light bg-white navbar-expand-sm">
            <a class="" href="index.html">
              <img src="img/logo.jpg" width="150vw" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-list-2">
              <ul class="navbar-nav">
                <li class="nav-item p-3">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item p-3">
                    <div class="dropdown">
                      <a class="nav-link" href="classes.html" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                        Classes & Services <i class="fa fa-caret-down"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="trx.html">TRX Class</a>
                        <a class="dropdown-item" href="hiit.html">HIIT Class</a>
                        <a class="dropdown-item" href="kettle.html">Kettle Bell Class</a>
                        <a class="dropdown-item" href="yoga.html">Yoga Class</a>
                        <a class="dropdown-item" href="pt.html">Personal Training</a>
                      </div>
                    </div>
                </li>
                <li class="nav-item p-3">
                    <a class="nav-link" href="events.html">Our Events</a>
                </li>
                <li class="nav-item p-3">
                  <div class="dropdown">
                      <a class="nav-link" href="about.html" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                        About <i class="fa fa-caret-down"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="abi.html">Abi</a>
                        <a class="dropdown-item" href="sofia.html">Sofia Triay</a>
                        <a class="dropdown-item" href="indi.html">Indi River</a>
                      </div>
                    </div>
                </li>
                <li class="nav-item p-3">
                <a class="nav-link" href="contact.html">Contact </a>
              </li>
                <!-- <li class="nav-item p-3">
                    <a class="nav-link" href="#" onclick="searchBarNav()"><i class="fa fa-search"></i></a>
                    <form id="form">
                        <input class="searchBox" type="text" name="search" placeholder="Search..">
                    </form>
                </li> -->
              </ul>
            </div>
          </nav>


<section class="header-background">
    <div class="bg-image-small park-training-event">
        <div class="overlay"></div>
        <div class="bg-content">
            <h1 style="font-size: 7vh;">Book Now</h1>
            <img src="img/line.jpg">
            <p style="font-size: 2.5vh;">Training you can trust</p>
        </div>
    </div>
</section>


<div class="container mt-5 mb-5">
    <form>
    <?php 
        if($id == "kettle"){
    ?>
        <h2>Kettle Bell Class</h2>
    <?php
        }
    ?>
    
    <?php 
        if($id == "hiit"){
    ?>
        <h2>HIIT Class</h2>
    <?php
        }
    ?>

    <?php 
        if($id == "yoga"){
    ?>
        <h2>Yoga Class</h2>
    <?php
        }
    ?>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="" id="name">
          </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6" style="display:none;">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="hidden" class="form-control" placeholder="<?php echo $id; ?>" id="name" name="<?php echo $id; ?>">
          </div>
        </div>
        <!--  col-md-6   -->
        <div class="col-md-6">
  
          <div class="form-group">
            <label for="date">Date</label>
            <input class="form-control" id="date1" type="date" format="MM/DD/YYYY" placeholder="MM/DD/YYYY"/>
            <p id="warning" style="color:red;"></p>
          </div>
        </div>
        <!--  col-md-6   -->
      </div>
  
  
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" placeholder="email" id="email">
          </div>
      </div>
        <!--  col-md-6   -->
  
        <div class="col-md-6">
          <div class="form-group">
            <label for="time">Time</label>
            <input class="form-control" type="time" name="time" id="time" disabled/>
          </div>
        </div>
        <!--  col-md-6   -->
        
        
        
      </div>
      <!--  row   -->
  
  
      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" class="form-control" placeholder="phone" id="phone">
            </div>
          </div>
          <!--  col-md-6   -->
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone"></label>
              <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
            </div>
          </div>
          <!-- col-md-6 -->
      </div>
      <!--  row   -->
  
  
      <!-- <label for="contact-preference">When is the best time of day to reach you?</label>
      <div class="radio">
        <label>
          <input type="radio" name="contact-preference" id="contact-preference" value="am" checked>Morning
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="contact-preference" id="contact-preference" value="pm" checked>Evening
        </label>
      </div>
  
      <label for="newsletter">Would you like to recieve our email newsletter?</label>
      <div class="checkbox">
  
        <label>
          <input type="checkbox" value="Sure!" id="newsletter"> Sure!
        </label>
      </div> -->
  
    </form>
  </div>



  <footer id="fh5co-footer" class="fh5co-bg" role="contentinfo">
            <div class="overlay"></div>
            <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3">
                <h3>Who We Are</h3>
                <p class="text-light">Abis Fitness is gym that is located in Wandsworth Common, a community that is dedicated to helping you achieve your fitness goals</p>
                <br>
                <h3>Our Socials</h3>
                <a href="https://en-gb.facebook.com/Abisfitness/" target="_blank"><i class="fa fa-facebook p-2"></i></a>
                <a href="https://www.instagram.com/abis_fitness/?hl=en" target="_blank"><i class="fa fa-instagram p-2"></i></a>
                </div>
                
                <div class="col-md-3 mobGapTop">
                  <h3>Quick Links</h3>
                    <ul class="fh5co-footer-links">
                    <li><a class="nav-link text-light" href="index.html">Home</a></li>
                    <li><a class="nav-link text-light" href="about.html">About Us</a></li>
                    <li><a class="nav-link text-light" href="classes.html">Classes & Services</a></li>
                    <li><a class="nav-link text-light" href="events.html">Events</a></li>
                    <li><a class="nav-link text-light" href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
              

                <div class="col-md-3 mobGapTop">
                  <h3>Training Sessions</h3>
                      <ul class="fh5co-footer-links">
                        <li><a class="nav-link text-light" href="kettle.html">Kettle Bell Classes</a></li>
                        <li><a class="nav-link text-light" href="hiit.html">HIIT Classes</a></li>
                        <li><a class="nav-link text-light" href="trx.html">TRX Classes</a></li>
                        <li><a class="nav-link text-light" href="yoga.html">Yoga Classes</a></li>
                      </ul>
                  
                  
                  
                  
                </div>

              <div class="col-md-3 fh5co-widget mobGapTop text-white">
                <h3>Where to find us</h3>
                <p>Address: 
                  <br>
                  196 Trinity Road
                  <br>
                  Wandsworth Common
                  <br>
                  SW17 7HR
                </p>
                <p><a class="text-white" href="tel:07984 658 357">Phone: 07984 658 357</a></p>
                <p><a class="text-white" href="mailto:info@abisfitness.com"> Email: info@abisfitness.com</a></p>
              </div>
                </div>
            </div>
        
            <div class="row copyright mt-5 text-dark">
                <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; 2019 | All Rights Reserved.</small>
                    Developed by <a class="text-light text-decoration-none" href="http://www.alisarsolutions.com/">Alisar Solutions Ltd</a>
                </p>
                </div>
            </div>
        
            </div>
        </footer>
  


<script src="js/js.js"></script>
<script type="text/javascript">
    var php_var = "<?php echo $id; ?>";
    const picker = document.getElementById('date1');
    if(php_var == "kettle"){
        picker.addEventListener('input', function(e){
        var day = new Date(this.value).getUTCDay();
        if([0,2,4,6].includes(day)){
            e.preventDefault();
            this.value = '';
            document.getElementById("warning").innerHTML = "Monday, Wendesday and Friday Only";
        }
        else{
            document.getElementById("warning").innerHTML = "";
        }
        if(day == 1){
            document.getElementById("time").value = "07:00";
        }
        else if(day == 3){
            document.getElementById("time").value = "09:00";
        }
        else if(day == 5){
            document.getElementById("time").value = "07:00";
        }
        });
    }
 
    else if(php_var == "hiit"){
        picker.addEventListener('input', function(e){
            var day = new Date(this.value).getUTCDay();
            if([0,5].includes(day)){
                e.preventDefault();
                this.value = '';
                document.getElementById("warning").innerHTML = "Monday, Tuesday, Wendesday, Thursday and Saturday Only";
            }
            else{
            document.getElementById("warning").innerHTML = "";
            }
            if(day == 1){
                document.getElementById("time").value = "09:00";
            }
            else if(day == 2){
                document.getElementById("time").value = "19:00";
            }
            else if(day == 3){
                document.getElementById("time").value = "07:00";
            }
            else if(day == 4){
                document.getElementById("time").value = "19:00";
            }
            else if(day == 6){
                document.getElementById("time").value = "10:00";
            }
        });
    }

    else if(php_var == "yoga"){
        picker.addEventListener('input', function(e){
            var day = new Date(this.value).getUTCDay();
            if([0,1,2,4,6].includes(day)){
                e.preventDefault();
                this.value = '';
                document.getElementById("warning").innerHTML = "Wendesday and Friday Only";
            }
            else{
                document.getElementById("warning").innerHTML = "";
            }
            if(day == 3){
                document.getElementById("time").value = "19:00";
            }
            else if(day == 5){
                document.getElementById("time").value = "09:00";
            }
        });
    }

</script>
</body>
</html>