<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="sendemail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
  <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>PROTECT TO <span>STEP</span></h3>
      </div>
      <div class="right_area">
        <a href="#" class="logout_btn">LOGIN</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="1.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="https://www.slwcs.org/"><i class="fas fa-desktop"></i><span>Home Page</span></a>
       
        <a href="https://www.slwcs.org/news"><i class="fas fa-table"></i><span>More Information</span></a>
        <a href="https://www.slwcs.org/our-work"><i class="fas fa-th"></i><span>Our Work</span></a>
        <a href="https://www.slwcs.org/about-us-1"><i class="fas fa-info-circle"></i><span>About Us</span></a>
        
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="1.png" class="profile_image" alt="">
        <h4>Sri Lanka Wildlife Conservation Society</h4>
      </div>
      <a href="https://www.slwcs.org/"><i class="fas fa-desktop"></i><span>Home Page</span></a>
      
      
      <a href="https://www.slwcs.org/news"><i class="fas fa-table"></i><span>More Information</span></a>
      <a href="https://www.slwcs.org/our-work"><i class="fas fa-th"></i><span>Our Work</span></a>
      <a href="https://www.slwcs.org/about-us-1"><i class="fas fa-info-circle"></i><span>About Us</span></a>
      
    </div>
    <!--sidebar end-->

    

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>


    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->

    
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Flower Road, Colombo 02, Sri Lanka</div>
        <div><i class="fas fa-envelope"></i>wildlifeDepartment@email.com</div>
        <div><i class="fas fa-phone"></i>+94 011 100 200</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>If there is unauthorized deforestation or illegal wildlife trade in your area, then you can let us know.Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>