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
              <li><a href="#skills">Skills</a></li>
              <li><a href="#works">How it works</a></li>
              <li><a href="#projects">Examples</a></li>
              <li><a href="#contact">Contact Me!</a></li>
            </ul>
            <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
         </div>
        </nav>
        <div class="hero-text-box">
          <h1>Hi, my name is Kyle<br>This website for demo purposes!</h1>
          <a class="btn btn-full js--scroll-to-contact" href="#contact">Attention grabbed!</a>
          <a class="btn btn-ghost js--scroll-to-skills" href="#skills">Show me more</a>
        </div>

    </header>

    <section class="section-skills js--section-skills" id="skills">
        <div class="row">
            <h2>Self-driven &mdash; Quick to learn</h2>
            <p class="long-copy">
            Hello, I made this website to showcase my skills and interests. Below you'll find some examples of my work, as well as generic stock photos for design purposes. I have a more straightforward portfolio linked below.
          </p>
        </div>
        <div class="row">
            <div class="col span-1-of-4 box">
               <i><span class="iconify icon-big" data-icon="bx:bx-infinite" data-inline="false"></span></i>
               <h3>DevOps</h3>
               <ul>
                 <li>DevOps Tools
                   <ul>
                     <li class="list">Jenkins</li>
                     <li class="list">Ansible, Puppet, Chef</li>
                     <li class="list"> Docker, Vagrant</li>
                     <li class="list"> Maven, Gradle, Ant+</li>
                     <li class="list"> CloudFormation, AWS Lambda</li>
                   </ul>
                 </li>
               </ul>
            </div>
            <div class="col span-1-of-4 box">
            <i>  <span class="iconify icon-big" data-icon="bx:bx-code-block" data-inline="false"></span> </i>
                <h3>Development</h3>
                <ul>
                  <li>Programming Languages
                    <ul>
                      <li class="list">Java</li>
                      <li class="list">Python (Django, Flask, Pandas, NumPy)</li>
                      <li class="list">C#</li>
                      <li class="list">JS</li>
                    </ul>
                  </li>
                </ul>
            </div>
            <div class="col span-1-of-4 box">
               <i><span class="iconify icon-big" data-icon="ant-design:cloud-outlined" data-inline="false"></span></i>
                <h3>Systems Engineer</h3>
                <ul>
                  <li>Certifications and tools
                    <ul>
                      <li class="list">AWS Solutions Architect - Associate</li>
                      <li class="list">Linux Administration (CentOS/RedHat, Mint)</li>
                      <li class="list">VM Ware, VM Box</li>
                      <li class="list">Scripting (bash, python)</li>
                      <li class="list">Network troubleshooting</li>
                    </ul>
                  </li>
                </ul>
            </div>
            <div class="col span-1-of-4 box">
               <i><span class="iconify icon-big" data-icon="cil:bug" data-inline="false"></span></i>
                <h3>SDET</h3>
                <ul>
                  <li>SDET/QA Tools
                    <ul>
                      <li class="list">Selenium</li>
                      <li class="list">Cucumber</li>
                      <li class="list">JUnit, Mockito, JMeter, JaCoCo</li>
                      <li class="list">pytest</li>
                      <li class="list">Mocha</li>
                      <li class="list">Sonarqube</li>
                    </ul>
                  </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-techs">
      <ul class="techs-showcase clearfix">
          <li>
              <figure class="tech-photo">
                  <img src="resources/img/1.jpg" alt="Code overlayed a server room">
              </figure>
          </li>
          <li>
              <figure class="tech-photo">
                  <img src="resources/img/2.jpg" alt="Servers">
              </figure>
          </li>
          <li>
              <figure class="tech-photo">
              <img src="resources/img/3.jpg" alt="Laptop with code">
              </figure>
          </li>
          <li>
              <figure class="tech-photo">
              <img src="resources/img/4.jpg" alt="Technician working on an open machine">
              </figure>
          </li>
      </ul>
      <ul class="techs-showcase clearfix">
          <li>
             <figure class="tech-photo">
              <img src="resources/img/5.jpg" alt="Cloud architecture overlayed physical servers">
              </figure>
          </li>
          <li>
              <figure class="tech-photo">
              <img src="resources/img/6.jpg" alt="arduino circuitboard">
              </figure>
          </li>
          <li>
             <figure class="tech-photo">
               <img src="resources/img/7.jpg" alt="Servers">
              </figure>
          </li>
          <li>
              <figure class="tech-photo">
               <img src="resources/img/8.jpg" alt="backlit keyboard">
              </figure>
          </li>
      </ul>
    </section>
    <section class="section-steps" id="works">
        <div class="row">
            <h2> How it works &mdash; Get started today!</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-2 steps-box">
                <img src="resources/img/iphone.png" alt=" iPhone" class="app-screen js--wp-2">
            </div>
            <div class="col span-1-of-2 steps-box">
                <div class="works-step">
                    <div>1</div>
                    <p>Choose the subscription plan that best fits your needs.</p>
                </div>
                <div class="works-step">
                    <div>2</div>
                    <p>Next, forget the plan you chose and reach out using the form at the bottom of this page! </p>
                </div>
                <div class="works-step">
                    <div>3</div>
                    <p>There is no app, unfortunately.</p>
                </div>
            <div class="row">
                <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Google Play Store"></a>
                <br class="mobile-break">
                <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store"></a>
            </div>
            </div>
        </div>
    </section>

    <section class="section-projects" id="projects">
      <div class="row">
        <h2>Section under construction. Github links and screenshots coming soon.</h2>
      </div>

      <div class="row js--wp-3">
        <div class="col span-1-of-4 box">
          <img src="resources/img/temp.jpg" alt="brick">
          <h3>Java test sample</h3>
          <div class="project">
              Purposely flawed code
          </div>
          <div class="project">
              Purposely flawed code
          </div>
          <div class="project">
            Uses SureFire, JaCoCo, Sonarqube, and JUnit
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/temp.jpg" alt="brick">
          <h3>Python Jupyter Notebooks</h3>
          <div class="project">
            Demonstrate use of Pandas and NumPy
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/temp.jpg" alt="brick">
          <h3>Simple portfolio</h3>
          <div class="project">
            Built in Django/Flask
          </div>
        </div>

        <div class="col span-1-of-4 box">
          <img src="resources/img/temp.jpg" alt="brick">
          <h3>Tetris</h3>
          <div class="project">
            Built in C#
          </div>
        </div>
      </div>
    </section>

<!--
      <div class="row js--wp-3">
        <div class="col span-1-of-4 box">

    <section class="section-projects" id="projects">
      <div class="row">
        <h2>Section under construction. Github links and screenshots coming soon.</h2>
        </div>

        <div class="row js--wp-3">
           <div class=" col span-1-of-4 box">
                <img src="resources/img/temp.jpg" alt="brick">
                <h3>Simple portfolio</h3>
                <div class="project">
                <p>Built in Django/Flask</p>
                </div>
            </div>
           <div class=" col span-1-of-4 box">
                <img src="resources/img/temp.jpg" alt="brick">
                <h3>Java test sample</h3>
                <div class="project">
                <p>Maven jar</p>
                </div>
                <div class="project">
                 Purposely flawed code
                </div>
                <div class="project">
                  Uses SureFire, JaCoCo, Sonarqube, and JUnit
                </div>
            </div>
            <div class=" col span-1-of-4 box">
                <img src="resources/img/temp.jpg" alt="brick">
                <h3>Tetris</h3>
                <div class="project">
                Built in C#
                </div>
            </div>
            <div class=" col span-1-of-4 box">
                <img src="resources/img/temp.jpg" alt="brick">
                <h3>Python Jupyter Notebooks</h3>
                <div class="project">
                Demonstrate use of Pandas and NumPy
                </div>
            </div>
        </div>
    </section> -->



    <section class="section-testimonials" id="testimonials">
        <div class="row">
           <h2> (Sample) Customer testimonials!</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
               <blockquote>
                   This section contains filler text for a list of fake testimonials! If this was a company providing a service,
                   this is where user experiences would be shared!
                   <cite><img src="resources/img/customer-1.jpg">Alberto Balsalm</cite>
               </blockquote>
            </div>
            <div class="col span-1-of-3">
               <blockquote>
                   The contact form below if functional if you would like to reach out. Lorem ipsum!
                   <cite><img src="resources/img/customer-2.jpg">Joana Silva</cite>
               </blockquote>
            </div>
            <div class="col span-1-of-3">
               <blockquote>
                   The quick brown fox jumped over the lazy dog.
                   <cite><img src="resources/img/customer-3.jpg">Jeffery Lei</cite>
               </blockquote>
            </div>
        </div>
    </section>
    <section class="section-plans">
        <div class="row">
            <h2> Sample Price Plan Section!</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <div class="plan-box" id="plans">
                    <div>
                        <h3>Premium</h3>
                        <p class="plan-price">$399 <span>/ month</span></p>
                        <p class="plan-price-tech"> That's only $13.30 a day!</p>
                    </div>
                    <div>
                        <ul>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>Sample</li>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>On-site visits included</li>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>Support 24/7</li>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>Full range of cloud support.</li>
                       </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-full" > Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Pro</h3>
                        <p class="plan-price">$149 <span>/ month</span></p>
                        <p class="plan-price-tech"> That’s only $5 day!</p>
                    </div>
                    <div>
                        <ul>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>This is another sample plan </li>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>Support 24/7</li>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>Full range of cloud support.</li>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>(1)Strategy meetings a week.</li>
                       </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost"> Sign up now</a>
                    </div>
                </div>
            </div>
            <div class="col span-1-of-3">
                <div class="plan-box">
                    <div>
                        <h3>Starter</h3>
                        <p class="plan-price">$50 <span>/ month</span></p>
                        <p class="plan-price-tech">That's only $1.5 a day!</p>
                    </div>
                    <div>
                        <ul>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>Basic sample plan.</li>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>Support 8am - 5pm CT</li>
                            <li> <i class="ion-ios-close-empty icon-small"></i>On-prem to cloud lift services</li>
                            <li> <i class="ion-ios-checkmark-empty icon-small"></i>Free delivery</li>
                       </ul>
                    </div>
                    <div>
                        <a href="#" class="btn btn-ghost"> Sign up now</a>
                    </div>
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
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">iOS App</a></li>
                    <li><a href="#">Android App</a></li>
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
