<html>

<head>
  <title>DREAM STUDY</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8w90+nuLcSKIbmrcLa0OT92×01BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc20M/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="./css/Homepage.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <div class="first">
    <nav>
      <h2 class="title">DREAM<span class="span1">STUDY</span><span class="span2"></span>
      </h2>
      <ul class="button">
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="#faq">Q&A</a></li>
        <li><a href="http://localhost:3000/" target="_blank">Anouncements</a></li>
        <li class="nav-item">


          <?php
          # Initialize the session
          session_start();

          # If user is not logged in then redirect him to login page
          if (isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == TRUE) {
            echo '<a class="profile rounded-0 me-2" href="./profile.html">';

            echo "Hello ";
            echo htmlspecialchars($_SESSION["username"]);
            echo "</a>";
          } else {
            echo ' ';
          }
          ?>
          </a>
        </li>
        <li class="nav-item">
          <?php
          # Initialize the session
          session_start();

          # If user is not logged in then redirect him to login page
          if (isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == TRUE) {
            echo '<a class="profile" href="./logout.php" class="btn btn-primary">Log Out</a>';
          } else {
            echo '<a class="profile" href="./login.php" class="btn btn-primary">Log In</a>';
          }
          ?>

        </li>
      </ul>
    </nav>


    <ul class="message">
      <li>
        <h1>WELCOME!</h1>
      </li>
      <li>We are here to guide you to find your desired University with the best scholership.
        Now Let's explore the beautiful Universities all around thev provinces in China. </li>
      <li><a class="filter" href="./filter.php">Explore The Univerdity</a>
      </li>
      </nav>
  </div>

  <section id="about" class="about_h p-5 container-fluid">
    <div class="container">
      <div class="feature__intro m-auto text-center">
        <h2>ABOUT US</h2>
        <p>
          We are a leading provider of cutting-edge technology, focused on developing unique software solutions as well
          as websites and mobile applications. We work with innovative leaders to deliver their solutions from vision to
          reality.
          <br />
          We listen, advise, design and deliver world-class, user-friendly IT products for clients in an agile
          way.
        </p>
        <a href="./about_us.html" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </section>


  <section id="faq" class="faq">
    <div class="article__content container container--pall">
      <h2 class="text-center mb-4">FAQ</h2>
      <div class="container">
        <div id="accordion" class="accordion-container">
          <h4 class="accordion-title open">Title will be here</h4>
          <div class="active active-content" style="display: block;">
            <p>
              there I will put content later
            </p>
          </div>
          <h4 class="accordion-title">Title will be here</h4>
          <div class="accordion-content" style="display: none;">
            <p>
              There,I will put content later
            </p>
          </div>
          <h4 class="accordion-title">
            Will there be an online community for customers?
          </h4>
          <div class="accordion-content" style="display: none;">
            <p>
              Yes! You can join with us by Facebook. Where you can get our
              news,ask questions and get help from me and other people in the
              community 🙂
            </p>
          </div>
          <h4 class="accordion-title">Is Dream study safe and legal for business?</h4>
          <div class="accordion-content" style="display: none;">
            <p>
              In your company everyone from
              CS background. Our every programmers ensure effecient of our service.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div id="contact" class="contact1">
    <div class="container-contact1">
      <div class="contact1-pic js-tilt" data-tilt>
        <img src="./img/img-01.png" alt="IMG">
      </div>

      <form class="contact1-form validate-form">
        <span class="contact1-form-title">
          Get in touch
        </span>

        <div class="wrap-input1 validate-input" data-validate="Name is required">
          <input class="input1" type="text" name="name" placeholder="Name">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <input class="input1" type="text" name="email" placeholder="Email">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Subject is required">
          <input class="input1" type="text" name="subject" placeholder="Subject">
          <span class="shadow-input1"></span>
        </div>

        <div class="wrap-input1 validate-input" data-validate="Message is required">
          <textarea class="input1" name="message" placeholder="Message"></textarea>
          <span class="shadow-input1"></span>
        </div>

        <div class="container-contact1-form-btn">
          <button class="contact1-form-btn">
            <span>
              Send Email
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <h4>About</h4>
          <p>We are a leading provider of cutting-edge technology, focused on developing unique software solutions as well as websites and mobile applications. We work with innovative leaders to deliver their solutions from vision to reality.</p>
        </div>
        <div class="col-lg-4">
          <div style="margin: 0 auto; width: 200px">
          <h4>Contact Us</h4>
          <p>123 Example Street<br>City, State 12345<br>Phone: (123) 456-7890<br>Email: info@dreamstudy.com</p>
          </div>
          
        </div>
        <div class="col-lg-4">
          <h4>Follow Us</h4>
          <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>&copy; 2023 Dream Study. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="./js/faq.js"></script>
</body>

</html>