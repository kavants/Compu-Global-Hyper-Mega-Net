<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <meta charset="UTF-8">
  <!-- this tells mobile phones that they should not zoom out the page, it always should start with the scale of 1 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- no more than 160 characters -->
  <meta name="description" content="Compu-Global-HYper-Mega-Net is a mock up site and is for demonstration purposes only.">

  <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
  <link rel="stylesheet" type="text/css" href="resources/css/style.css">
  <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="resources/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="resources/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="resources/img/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- enables the browser to understand and execute CSS media queries which we need for responsive web design (respond is an auto-responding Async CLI/CMD wrapper for NodeJS) -->
  <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>

  <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
  <!-- enables use and styles of HTML5 elements in older browsers (The HTML5 Shiv enables use of HTML5 sectioning elements in legacy Internet Explorer and provides basic HTML5 styling for Internet Explorer 6-9, Safari 4.x (and iPhone 3.x), and Firefox 3.x.) -->

  <!-- allows us to use CSS3 pseudo-classes (selectivizr is a JavaScript utility that emulates CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8.) -->
  <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
</head>
<body>
<title>Compu-Global-Hyper-Mega-Net</title>
    <header>
        <nav>
         <div class="row">
            <img src="resources\img\logo-white.png" alt="logo" class="logo">
            <img src="resources\img\logo.png" alt="logo" class="logo-black">
            <ul class="main-nav js--main-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#projects">Examples</a></li>
              <li><a href="#contact">Contact Me!</a></li>
            </ul>
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
         </div>
        </nav>
        <div class="hero-text-box">
          <h1>Hi, my name is Kyle</h1>
          <p>I made this primarily to showcase some of my frontend and include some common elements you would find<br>
          on an e-commerce/subscription based website. I don't mean for this to be a true portfolio, but thought<br>
          I would include at least one section where I feature some projects from my github. </p>
            <a class="btn btn-full js--scroll-to-contact" href="#contact">Attention grabbed!</a>
            <a class="btn btn-ghost" href="index.php">Reutrn to main page!</a>
        </div>
    </header>

    <section class="section-projects" id="projects">
      <div class="row">
        <h2>Section under construction. Not intended to be a true portfolio site, but might as well self plug.</h2>
      </div>

      <div class="row js--wp-3">
        <div class="col span-1-of-4 box">
          <img src="resources/img/temp.jpg" alt="brick">
          <h3>Java test sample</h3>
          <div class="project">
              Purposely flawed Java code
          </div>
          <div class="project">
            Uses SureFire, JaCoCo, Sonarqube, and JUnit
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/temp.jpg" alt="brick">
          <h3>Embedded interactive graph</h3>
          <div class="project">
            Graph using Bokeh, website using flask.
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/temp.jpg" alt="brick">
          <h3>Portfolio</h3>
          <div class="project">
            Built in Django
          </div>
        </div>

        <div class="col span-1-of-4 box">
        <img src="resources/img/tetris.jpg" alt="Tetris screenshot">
          <a href="https://github.com/kavants/tetrisInC"><h3>Tetris</h3></a>
          <div class="project">
            Built in C#
          </div>
        </div>
      </div>
    </section>

      <div class="map-box">
        <div class="map"></div>


    <div class="js--section-contact" id="contact"></div>


      <div class="form-box" id="form">
        <div class="row">
          <h2>Hope to hear from you soon!</h2>
        </div>

        <div class="row">

          <?php

          if($_GET['success'] == 1){
              echo "<div class=\"form-messages success\"> Thank you! Your message has been sent.</div>";
          }

          if($_GET['success'] == -1){
              echo "<div class=\"form-messages error\"> Oops! Something went wrong. Please try again.</div>";
          }

          ?>

        </div>

        <div class="row">
          <form method="post" action="mailer.php" class="contact-form">
            <div class="row">


              <div class="col span-1-of-3">
                <label for="name">Name</label>
              </div>
              <div class="col span-2-of-3">
                <input type="text" name="name" id="name" placeholder="Your name" required>
              </div>
            </div>

            <div class="row">
              <div class="col span-1-of-3">
                <label for="email">Email</label>
              </div>
              <div class="col span-2-of-3">
                <input type="email" name="email" id="email" placeholder="Your e-mail" required>
              </div>
            </div>

            <div class="row">
              <div class="col span-1-of-3">
                <label for="find-us">How did you find us?</label>
              </div>
              <div class="col span-2-of-3">
                <select name="find-us" id="find-us">
                  <option value="linkedin" selected>LinkedIn</option>
                  <option value="search">Search engine</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>

            <!-- <div class="row">
              <div class="col span-1-of-3">
                <label for="news">Newsletter</label>
              </div>
              <div class="col span-2-of-3">
                <input type="checkbox" name="news" id="news" checked> I wish, but I understand there is no newsletter.
              </div>
            </div> -->

            <div class="row">
              <div class="col span-1-of-3">
                <label for="message">Add your message!</label>
              </div>
              <div class="col span-2-of-3">
                <textarea name="message" id="message" placeholder="Your message"></textarea>
              </div>
            </div>

            <div class="row">
              <div class="col span-1-of-3">
                <label>&nbsp;</label>
              </div>
              <div class="col span-2-of-3">
                <input type="submit" value="Send it!">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="about.php">About us</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                   <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                   <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                   <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>
                Copyright &copy; 2020 by Kyle. All rights reserved.
            </p>
        </div>
    </footer>




<script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="vendors/js/jquery.waypoints.min.js"></script>
<script src="vendors/js/gmaps.js"></script>
<script src="resources/js/script.js"></script>


</body>



</html>
