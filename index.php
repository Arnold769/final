<?php
session_start();
$user_id = $_SESSION['user_id'];

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include("../action/script.php");
include("../action/booking_action.php");
include("../action/contact_action.php");
include("action/fetchbookings.php");
include("action/edit_booking_action.php");
include("action/delete_booking_action.php");
include("core.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>El Virtues Construction Web Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Playfair+Display:400,700,900 " rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">El-Virtues Construction.</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#properties-section" class="nav-link">Properties</a></li>
                <li><a href="#apply-for-contract-section" class="nav-link">Apply for Contracts</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#book-an-apartment-tour" class="nav-link">Book an Apartment Tour</a></li>
                <li><a href="#contact-section" class="nav-link">Contact Us</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" id="home-section">


      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 mt-lg-5 text-center">
            <h1>Buy and rent real estate properties</h1>
            <p class="mb-5">Discover the perfect balance of buying and renting real estate properties with us. Whether you're in the market to purchase your dream home or looking for a rental property that suits your lifestyle, our expert team is here to assist you. From finding the ideal property to navigating the transaction process, we provide tailored solutions to meet your needs. Explore our listings today and let us help you find your next home or investment opportunity.</p>

          </div>
        </div>
      </div>

      <a href="#howitworks-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>


    <div class="py-5 bg-light site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-house text-primary"></span>
              <h3 class="text-dark">Find Property.</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-coin text-primary"></span>
              <h3 class="text-dark">Buy Property.</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="custom-icon flaticon-home text-primary"></span>
              <h3 class="text-dark">Make Investment.</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section" id="properties-section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Properties</h2>
          </div>
          <div class="col-md-5 text-left text-md-right">
            <div class="custom-nav1">
              <a href="#" class="custom-prev1">Previous</a><span class="mx-3">/</span><a href="#" class="custom-next1">Next</a>
            </div>
          </div>
        </div>

        <div class="owl-carousel nonloop-block-13 mb-5">

          <div class="property">
            <a href="property-single.html">
              <img src="images/property_1.jpg" alt="Image" class="img-fluid">
            </a>
            <div class="prop-details p-3">
              <div><strong class="price">$3,400,000</strong></div>
              <div class="mb-2 d-flex justify-content-between">
                <span class="w border-r">6 beds</span>
                <span class="w border-r">4 baths</span>
                <span class="w">4,250 sqft.</span>
              </div>
              480 12th, Unit 14, San Francisco, CA
            </div>
          </div>
        </div>

        <div class="property">
          <a href="property-single.html">
            <img src="images/property_2.jpg" alt="Image" class="img-fluid">
          </a>
          <div class="prop-details p-3">
            <div><strong class="price">$3,400,000</strong></div>
            <div class="mb-2 d-flex justify-content-between">
              <span class="w border-r">6 beds</span>
              <span class="w border-r">4 baths</span>
              <span class="w">4,250 sqft.</span>
            </div>
            <div>480 12th, Unit 14, San Francisco, CA</div>
          </div>
        </div>

        <div class="property">
          <a href="property-single.html">
            <img src="images/property_3.jpg" alt="Image" class="img-fluid">
          </a>
          <div class="prop-details p-3">
            <div><strong class="price">$3,400,000</strong></div>
            <div class="mb-2 d-flex justify-content-between">
              <span class="w border-r">6 beds</span>
              <span class="w border-r">4 baths</span>
              <span class="w">4,250 sqft.</span>
            </div>
            <div>480 12th, Unit 14, San Francisco, CA</div>
          </div>
        </div>

        <div class="property">
          <a href="property-single.html">
            <img src="images/property_4.jpg" alt="Image" class="img-fluid">
          </a>
          <div class="prop-details p-3">
            <div><strong class="price">$3,400,000</strong></div>
            <div class="mb-2 d-flex justify-content-between">
              <span class="w border-r">6 beds</span>
              <span class="w border-r">4 baths</span>
              <span class="w">4,250 sqft.</span>
            </div>
            <div>480 12th, Unit 14, San Francisco, CA</div>
          </div>
        </div>

      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <a href="listings.html" class="btn btn-primary btn-block">View All Property Listings</a>
        </div>
      </div>
    </div>
  </div>


  <section class="site-section" id="apply-for-contract-section" name="apply-for-contract-section">

    <form action="../stated-master/action/script.php" method="post" class="p-5 bg-white" enctype="multipart/form-data">

      <h2 class="h4 text-black mb-5">Apply for Contract</h2>

      <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0">
          <label class="text-black" for="fname">First Name</label>
          <input type="text" id="fname" name="fname" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="text-black" for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" class="form-control" required>
        </div>
      </div>

      <div class="row form-group">

        <div class="col-md-12">
          <label class="text-black" for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" required>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <label class="text-black" for="job-role">Job Role</label>
          <select id="job-role" name="job-role" class="form-control" required>
            <option value="">Select Job Role</option>
            <option value="Mason">Mason</option>
            <option value="Plumber">Plumber</option>
            <option value="Painter">Painter</option>
            <option value="Welder">Welder</option>
            <option value="Labourer">Labourer</option>
            <option value="Electrician">Electrician</option>
            <option value="Carpenter">Carpenter</option>

          </select>
        </div>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <label class="text-black" for="address" name="address">Address</label>
          <textarea name="address" id="address" cols="30" rows="7" class="form-control" placeholder="Write your address..." required></textarea>
        </div>
      </div>

      <div class="row form-group">
        <label for="pdfUpload">Select a PDF to upload:</label>
        <input type="file" id="resume" name="resume" accept=".doc, .docx, .pdf" required>
      </div>

      <div class="row form-group">
        <div class="col-md-12">
          <input type="submit" value="Send Application" name="send-application" class="btn btn-primary btn-md text-white">
        </div>
      </div>



    </form>
  </section>


  <section class="site-section" id="about-section">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">

          <div class="owl-carousel slide-one-item-alt">
            <img src="images/property_1.jpg" alt="Image" class="img-fluid">
            <img src="images/property_2.jpg" alt="Image" class="img-fluid">
            <img src="images/property_3.jpg" alt="Image" class="img-fluid">
            <img src="images/property_4.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="custom-direction">
            <a href="#" class="custom-prev">Prev</a><a href="#" class="custom-next">Next</a>
          </div>

        </div>
        <div class="col-lg-5 ml-auto">

          <h2 class="section-title mb-3">We Are The Best RealEstate Company</h2>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <p>Est qui eos quasi ratione nostrum excepturi id recusandae fugit omnis ullam pariatur itaque nisi voluptas impedit Quo suscipit omnis iste velit maxime.</p>

          <ul class="list-unstyled ul-check success">
            <li>Placeat maxime animi minus</li>
            <li>Dolore qui placeat maxime</li>
            <li>Consectetur adipisicing</li>
            <li>Lorem ipsum dolor</li>
            <li>Placeat molestias animi</li>
          </ul>

          <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>

        </div>
      </div>
    </div>
  </section>



  <section class="site-section border-bottom bg-light" id="services-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title mb-3">Services</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-house"></span></div>
            <div>
              <h3>Search Property</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-coin"></span></div>
            <div>
              <h3>Buy Property</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-home"></span></div>
            <div>
              <h3>Invest a Home</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>


        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-flat"></span></div>
            <div>
              <h3>Post Properties</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-location"></span></div>
            <div>
              <h3>Property Locator</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary flaticon-mobile-phone"></span></div>
            <div>
              <h3>Stated Apps</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="site-section testimonial-wrap" id="testimonials-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title mb-3">People Says...</h2>
        </div>
      </div>
    </div>
    <div class="slide-one-item home-slider owl-carousel">
      <div>
        <div class="testimonial">

          <blockquote class="mb-5">
            <p>&ldquo;Working with El-Virtues was a breeze! They listened to our needs and found us the perfect home in no time. Their professionalism and attention to detail made the entire process smooth and stress-free. We highly recommend them to anyone looking to buy or sell their home.&rdquo;</p>
          </blockquote>

          <figure class="mb-4 d-flex align-items-center justify-content-center">
            <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
            <p>John Smith</p>
          </figure>
        </div>
      </div>
      <div>
        <div class="testimonial">

          <blockquote class="mb-5">
            <p>&ldquo;We couldn't be happier with the service we received from El Virtues. From the initial consultation to the final closing, they were there every step of the way, providing expert guidance and support. Thanks to their expertise, we found our dream home quickly and easily. We wouldn't hesitate to use their services again in the future.&rdquo;</p>
          </blockquote>
          <figure class="mb-4 d-flex align-items-center justify-content-center">
            <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
            <p>Christine Aguilar</p>
          </figure>

        </div>
      </div>

      <div>
        <div class="testimonial">

          <blockquote class="mb-5">
            <p>&ldquo;Choosing El Virtues was the best decision we made when selling our home. Their knowledge of the market and strategic approach resulted in a quick sale at a great price. Their communication throughout the process was exceptional, keeping us informed and reassured at every turn. We wouldn't hesitate to recommend them to anyone looking to sell their home.&rdquo;</p>
          </blockquote>
          <figure class="mb-4 d-flex align-items-center justify-content-center">
            <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
            <p>Robert Spears</p>
          </figure>


        </div>
      </div>

      <div>
        <div class="testimonial">

          <blockquote class="mb-5">
            <p>&ldquo;As first-time homebuyers, we were nervous about the entire process, but [Real Estate Company] made it a breeze. They patiently answered all of our questions and guided us through each step, making us feel comfortable and confident in our decisions. Thanks to their expertise, we found the perfect starter home for our family. We can't thank them enough!&rdquo;</p>
          </blockquote>
          <figure class="mb-4 d-flex align-items-center justify-content-center">
            <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
            <p>Bruce Rogers</p>
          </figure>

        </div>
      </div>

    </div>
  </section>


  <section class="site-section" id="book-an-apartment-tour">
    <form action="../stated-master/action/booking_action.php" method="post" class="p-5 bg-white" enctype="multipart/form-data">

      <h2 class="h4 text-black mb-5">Schedule an apartment tour</h2>

      <div class="row form-group">
        <div class="col-md-6 mb-3 mb-md-0">
          <label class="text-black" for="fname">First Name</label>
          <input type="text" id="fname" name="fname" class="form-control">
        </div>
        <div class="col-md-6">
          <label class="text-black" for="lname">Last Name</label>
          <input type="text" id="lname" name="lname" class="form-control">
        </div>
      </div>

      <div class="row form-group">

        <div class="col-md-12">
          <label class="text-black" for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control">
        </div>
      </div>

      <div class="row form-group">

        <div class="col-md-12">
          <label class="text-black" for="subject">Phone number</label>
          <input type="subject" id="subject" name="pnumber" class="form-control">
        </div>
      </div>

      <div class="row form-group">
        <label for="meeting-date">Meeting Date:</label>
        <input type="date" id="meeting-date" name="meeting-date" class="form-control">
        <label for="meeting-time">Meeting Time:</label>
        <select id="meeting-time" name="meeting-time" class="form-control">
          <option value="">Select Meeting Time</option>
          <option value="10:00">10:00 AM</option>
          <option value="11:00">11:00 AM</option>
          <option value="12:00">12:00 PM</option>
          <option value="13:00">1:00 PM</option>
          <option value="15:00">3:00 PM</option>
          <option value="17:00">5:00 PM</option>
        </select>
      </div>


      <div class="row form-group">
        <div class="col-md-12">
          <label class="text-black" for="location">Location</label>
          <select id="location" name="location" class="form-control">
            <option value="">Select where the apartment you want to visit is located</option>
            <option value="Haatso">Haatso</option>
            <option value="North Legon">North Legon</option>
            <option value="Pantang">Pantang</option>
            <option value="Appolonia">Appolonia</option>
            <option value="Akpormang">Akpormang</option>
            <option value="Dome">Dome</option>
            <option value="Kwabenya">Kwabenya</option>

          </select>
        </div>
      </div>


      <div class="row form-group">
        <div class="col-md-12">
          <input type="submit" value="Submit Booking" name="submit-booking" class="btn btn-primary btn-md text-white">
        </div>
      </div>


    </form>
  </section>




  <section class="site-section bg-light bg-image" id="contact-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <!-- <h3 class="section-sub-title">Get</h3> -->
          <h2 class="section-title mb-3">Contact Us</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 mb-5">



          <form action="../stated-master/action/contact_action.php" method="post" class="p-5 bg-white">

            <h2 class="h4 text-black mb-5">Contact Form</h2>

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="name">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control">
              </div>
            </div>

            <div class="row form-group">

              <div class="col-md-12">
                <label class="text-black" for="subject">Subject</label>
                <input type="subject" id="subject" name="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" name="send-message" class="btn btn-primary btn-md text-white">
              </div>
            </div>


          </form>
        </div>
        <div class="col-md-5">

          <div class="p-4 mb-3 bg-white">
            <p class="mb-0 font-weight-bold">Address</p>
            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

            <p class="mb-0 font-weight-bold">Phone</p>
            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

            <p class="mb-0 font-weight-bold">Email Address</p>
            <p class="mb-0"><a href="#">youremail@domain.com</a></p>

          </div>

        </div>
      </div>
    </div>
  </section>


  <section class="site-section">
    <div class="container">
      <h2 class="h4 text-black mb-5">Manage Bookings</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Meeting Date</th>
            <th>Meeting Time</th>
            <th>Location</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Fetch bookings from the database and populate the table rows
          //include '../action/edit_booking_action.php';
          $bookings = fetchBookings($user_id); // Replace with your function to fetch bookings
          foreach ($bookings as $booking) {
            echo '<tr>';
            echo '<form action="../stated-master/action/edit_booking_action.php" method="post">';
            echo '<input type="hidden" name="booking_id" value="' . $booking['booking_id'] . '">'; // Add a hidden input field for booking_id
            echo '<td><input type="text" name="fname" class="form-control" value="' . $booking['first_name'] . '"></td>';
            echo '<td><input type="text" name="lname" class="form-control" value="' . $booking['last_name'] . '"></td>';
            echo '<td><input type="email" name="email" class="form-control" value="' . $booking['email'] . '"></td>';
            echo '<td><input type="text" name="pnumber" class="form-control" value="' . $booking['phone_number'] . '"></td>';
            echo '<td><input type="date" name="meeting_date" class="form-control" value="' . $booking['meeting_date'] . '"></td>';
            echo '<td><select class="form-control" name="meeting_time">';
            echo '<option value="' . $booking['meeting_time'] . '" selected>' . $booking['meeting_time'] . '</option>';
            echo '<option value="10:00">10:00 AM</option>';
            echo '<option value="11:00">11:00 AM</option>';
            echo '<option value="12:00">12:00 PM</option>';
            echo '<option value="13:00">1:00 PM</option>';
            echo '<option value="15:00">3:00 PM</option>';
            echo '<option value="17:00">5:00 PM</option>';
            echo '</select></td>';
            echo '<td><select class="form-control" name="location">';
            echo '<option value="' . $booking['location'] . '" selected>' . $booking['location'] . '</option>';
            echo '<option value="Pantang">Pantang</option>';
            echo '<option value="Kwabenya">Kwabenya</option>';
            echo '<option value="Dome">Dome</option>';
            echo '<option value="North Legon">North legon</option>';
            echo '<option value="Haatso">Haatso</option>';
            echo '<option value="Appolonia">Appolonia</option>';
            echo '</select></td>';
            echo '<td><button type="submit" class="btn btn-primary btn-sm" name="edit">Edit</button></td>';
            echo '</form>';

            // Form for delete action
            echo '<form action="../stated-master/action/delete_booking_action.php" method="post">';
            echo '<input type="hidden" name="booking_id" value="' . $booking['booking_id'] . '">'; // Add a hidden input field for booking_id
            echo '<td><button type="submit" class="btn btn-primary btn-sm" name="delete">Delete</button></td>';
            echo '</form>';
            
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>





  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-5">
              <h2 class="footer-heading mb-4">About Stated</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
            </div>
            <div class="col-md-3 ml-auto">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#about-section">About Us</a></li>
                <li><a href="#services-section">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#contact-section">Contact Us</a></li>
              </ul>
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-4">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>

          <div class="">
            <h2 class="footer-heading mb-4">Follow Us</h2>
            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
          </div>


        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>

      </div>
    </div>
  </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

</body>

</html>