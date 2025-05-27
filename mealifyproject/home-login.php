<? php include('sever.php')
;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>mealify</title>
    <link rel="icon" href="images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media.css" />
  </head>
  <body>
    <!--===================navbar section============  -->

    <div id="navbar">
      <div class="container">
        <h1><a href="#">Mealify</a></h1>
        <ul>
          <li><a class="home"  href="#home">Home</a></li>
          <li><a class="chefs" href="#chefs">Chefs</a></li>
          <li><a class="contact" href="#contact">Contact</a></li>
          <li><a href="register.php" >Sign Up</a></li>
          <li><a href="login.php" >Login</a></li>
        </ul>
        <a href="#"> <i class="fa-solid fa-moon"></i></a>
      </div>
    </div>

    <!-- =================home section============== -->

    <div id="home">
      <div class="container">
        <div class="home-image">
          <img src="images/hero-img.png" alt="dish photo" />
        </div>
        <div class="home-content">
          <h2>Enjoy Your Healthy Delicious Food</h2>

          <p>
            Sed autem laudantium dolores. Voluptatem itaque ea consequatur
            eveniet. Eum quas beatae cumque eum quaerat.
          </p>

          <div class="home-btns">
            <a href="#" class="left-btn">Book a Table</a>
            <a href="#" class="right-btn">
              <div class="icon"><i class="fa-solid fa-play"></i></div>
              Watch a Video</a
            >
          </div>
        </div>
      </div>
    </div>

    <!-- =====================chefs section======================== -->

    <div id="chefs">
      <div class="container">
        <div class="chefs-header">
          <p>CHEFS</p>
          <h2>Our <span>Proffesional</span> Chefs</h2>
        </div>
        <div class="chefs-cards">
          <div class="card">
            <div class="chefs-img">
              <div class="picture">
                <img src="images/chefs/chefs-1.jpg" alt="chef photo" />
              </div>
              <div class="img-layer">
                <ul>
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="chefs-content">
              <h3>Walter White</h3>
              <span>Master Chef</span>
              <p>
                Velit aut quia fugit et et. Dolorum ea voluptate vel tempore
                tenetur ipsa quae aut. Ipsum exercitationem iure minima enim
                corporis et voluptate.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="chefs-img">
              <div class="picture">
                <img src="images/chefs/chefs-2.jpg" alt="chef photo" />
              </div>
              <div class="img-layer">
                <ul>
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="chefs-content">
              <h3>Sarah Jhonson</h3>
              <span>Patissier </span>
              <p>
                Quo esse repellendus quia id. Est eum et accusantium pariatur
                fugit nihil minima suscipit corporis. Voluptate sed quas
                reiciendis animi neque sapiente.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="chefs-img">
              <div class="picture">
                <img src="images/chefs/chefs-3.jpg" alt="chef photo" />
              </div>
              <div class="img-layer">
                <ul>
                  <li>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="chefs-content">
              <h3>William Anderson</h3>
              <span>Cook</span>
              <p>
                Vero omnis enim consequatur. Voluptas consectetur unde qui
                molestiae deserunt. Voluptates enim aut architecto porro
                aspernatur molestiae modi.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- =======================gallery section================== -->

   

    <!-- ===================contact section ======================== -->

    <div id="contact">
      <div class="container">
        <div class="contact-title">
          <p>CONTACT</p>
          <h2>Need Help ? <span>Contact Us</span></h2>
        </div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13808.964573035635!2d31.2282952!3d30.0872794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1745089430243!5m2!1sen!2seg"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
        <div class="contact-details">
          <div class="address details">
            <div class="icon"><i class="fa-regular fa-map"></i></div>
            <div class="address-cont">
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>
          <div class="email details">
            <div class="icon"><i class="fa-regular fa-envelope"></i></div>
            <div class="email-cont">
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>
          <div class="call-us details">
            <div class="icon"><i class="fa-solid fa-phone"></i></div>
            <div class="call-cont">
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          <div class="open-hrs details">
            <div class="icon"><i class="fa-solid fa-share-nodes"></i></div>
            <div class="open-cont">
              <h3>Opening Hours</h3>
              <p>
                <span>Mon-Sat:</span> 11AM - 23PM; <span> Sunday :</span> Closed
              </p>
            </div>
          </div>
        </div>
        <form class=".form">
          <div class="input-group">
            <input type="text" placeholder="Your name" name="name" />
            <input type="email" placeholder="Your Email" name="mail" />
          </div>
          <input type="text" name="subject" placeholder="Subject" />
          <textarea name="message" placeholder="Message"></textarea>
          <a href="#"><button>Send Message</button></a>
        </form>
      </div>
    </div>

    <!-- ===================footer section=========================== -->

    <div class="footer">
      <div class="container">
        <div class="about">
          <div class="about-header">
            <img src="images/favicon.png" alt="mealify logo" />
            <h2>Mealify</h2>
          </div>
          <p>
            Mealify is a restaurant landing page that offers a delicious dining
            experience to its customers.
          </p>
          <h3>Social Media</h3>
          <ul>
            <li>
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </li>
          </ul>
        </div>
        <div class="subscribtion">
          <h3>Subscribe our Newsletter</h3>
          <p>
            Don't miss out on our latest menu updates and exclusive offers -
            join our newsletter today and stay up-to-date with all things
            Mealify!
          </p>
          <input
            type="email"
            name="email"
            placeholder="Enter Your Email Address"
          />
          <button><i class="fa-solid fa-envelope"></i>Subscribe</button>
          <div class="quick-links">
            <h3>Quick Links</h3>
            <ul>
              <li>
                <a href="#"><i class="fa-solid fa-angle-right"></i>Promo</a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-angle-right"></i>About Us</a>
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-angle-right"></i>Contact</a>
              </li>
              <li>
                <a href="#"
                  ><i class="fa-solid fa-angle-right"></i>Testimonial</a
                >
              </li>
              <li>
                <a href="#"
                  ><i class="fa-solid fa-angle-right"></i>Our Partners</a
                >
              </li>
              <li>
                <a href="#"><i class="fa-solid fa-angle-right"></i>Menu</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="contact-details">
          <h3>Get in Touch</h3>
          <ul>
            <li>
              <a href="#"
                ><i class="fa-solid fa-location-dot"></i>A108 Adam Street, New
                York, NY 535022</a
              >
            </li>
            <li>
              <a href="#"
                ><i class="fa-solid fa-envelope"></i>contact@example.com</a
              >
            </li>
            <li>
              <a href="#"><i class="fa-solid fa-phone"></i>+1 5589 55488 55</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ==========================The End================ -->
  </body>
</html>
