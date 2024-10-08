
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="./Image/Logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>The Outer Clove Restaurant</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./GlobalStyles.css">
    <link rel="stylesheet" href="./Components.css">
    <link rel="stylesheet" href="./Home.css">
    <!-- aos css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
    <!-- Navigation -->
    <div class="nav">
        <div class="container">
            <div class="nav__wrapper">
                <a href="./Home.php" class="logo">
                    <img src="./Image/Logo0.png" alt="Logo">
                </a>
                <nav>
                    <div class="nav__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-menu">
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="18" x2="21" y2="18" />
                        </svg>
                    </div>
                    <div class="nav__bgOverlay"></div>
                    <ul class="nav__list">
                        <div class="nav__close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </div>
                        <div class="nev__list__wrapper">
                            <li><a href="./Home.php" class="nev__list">Home</a></li>
                            <li><a href="./About.php" class="nev__list">About</a></li>
                            <li><a href="./Services.php" class="nev__list">Services</a></li>
                            <li><a href="./Menu.php" class="nev__list">Menu</a></li>
                            <li><a href="./Reservation.php" class="nev__list">Reservation</a></li>
                            <li><a href="./index.php" class="nev__list">Feedback</a></li>
                            <li><a href="./SignUp.php"><span class="btn primary-btn">Sign Up</span></a></li>
                            <li><a href="./login.php"><span class="btn primary-btn">Sign In</span></a></li>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navigation -->

    <div class="topic">
    Outer Clove Restaurant
    </div>

    <!-- Hero Section -->
    <section id="hero" data-aos="fade-up">
        <div class="container">
            <div class="hero__wrapper">
                <div class="hero__left">
                    <div class="hero__left__wrapper">
                        <h1 class="hero__heading">Where Taste Becomes Memorable</h1>
                        <p class="hero__into">Add unforgettable experiences at hotels, resorts, restaurants and
                            more. Dive into the heart of hospitality where memories are made.</p>
                        <div class="button__wrapper">
                            <a href="./Menu.php" class="btn primary-btn">Explore Menu</a>
                            <a href="./Reservation.php" class="btn primary-btn">Reservation</a>
                        </div>
                    </div>
                </div>
                <div class="hero__right" >
                    <div class="hero__imgWrapper">
                        <img src="./Image/Logo.png" alt="Logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->
   
    <!--Dishes-->
    <section id="dishGrid">
        <div class="container">
            <h2 class="dishGrid__title">
               Popular Dishes <br>
               Dine-In / TakeOut / Delivery available Here
            </h2>
            <div class="dishGrid__wrapper">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/rice.jpg" alt="rice img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Special Prawns Rice
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Small-Rs:800.00<br> 
                            Full-Rs:1200.00    
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Korean Kimchi Fried Rice.jpg" alt="Korean Kimchi Fried Rice img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Korean Kimchi Fried Rice
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Small-Rs:1000.00<br> 
                            Full-Rs:2000.00    
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Spicy Kottu.jpg" alt="Spicy Kottu img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Spicy Prawns Kottu
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Small-Rs:800.00<br> 
                            Full-Rs:1550.00    
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/chichen cheese pasta.jpg" alt="chichen cheese pasta img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            chichen cheese pasta
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Small-Rs:800.00<br> 
                            Full-Rs:1500.00    
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Russian Salad.jpg" alt="Russian Salad img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Russian Salad
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Small-Rs:500.00<br> 
                            Full-Rs:800.00    
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Classic Italian Tiramisu.jpg" alt="Classic Italian Tiramisu img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Classic Italian Tiramisu
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Small-Rs:800.00<br> 
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Berry Smoothie.jpg" alt="Image/Berry Smoothie img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Image/Berry Smoothie
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Small-Rs:800.00  
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="dishGrid__title">
                Restaurant Facilities
             </h2>
             <div class="dishGrid__wrapper">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/view.jpg" alt="view img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Restaurent View
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Beautiful view   
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Beautiful Garden.jpg" alt="Photo Shoot Area img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Photo Shoot Area
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Exquisite venes for your special Events   
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/bed Room.jpg" alt="Bed Room img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Confertable Bed Rooms
                        </h3>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Meeting Banquet Facilities.jpg" alt="Meeting Banquet Facilities img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Meeting Banquet Facilities
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Event halls are reserved for the meeting,graduation ceremony.   
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/relaxing Area.jpg" alt="relaxing area img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Relaxing Area
                        </h3>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Parking Area.jpg" alt="Parking Area img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Parking Facilities
                        </h3>
                        <h4 class="dishGrid__item__price">
                            Outdoor and Indoor Parking Area 
                        </h4>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/party6.jpg" alt="Party Decoration img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Party Decoration Team
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="dishGrid__title">
                Tourist places near our retuarent
             </h2>
             <div class="dishGrid__wrapper">
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Walk to World’s End near Nuwara Eliya.jpg" alt="Walk to World’s End near Nuwara Eliya img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Walk to World's End near Nuwara Eliya
                        </h3>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Waterfalls-Srilanka.jpg" alt="Waterfalls-Srilanka img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                           Most Beautiful Waterfalls-Nuwara Eliya
                        </h3>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/beautiful train ride.jpg" alt="train ride img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            beautiful train ride
                        </h3>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Peak.jpg" alt="Adam’s Peak img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Climb Adam's Peak
                        </h3>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Explore Galway Land National Park.jpg" alt="Explore Galway’s Land National Park img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Explore Galway's Land National Park
                        </h3>
                    </div>
                </div>
                <div class="dishGrid__item">
                    <div class="dishGrid__item__img">
                        <img src="./Image/Hakgala Botanical Garden.jpg" alt="Hakgala Botanical Garden img">
                    </div>
                    <div class="dishGrid__item__info">
                        <h3 class="dishGrid__item__title">
                            Hakgala Botanical Garden
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Dishes-->

   <!-- Our Season Discount -->
   <section id="OurSeasonSpecials">
    <div class="container">
        <div class="OurSeasonSpecials__wrapper">
            <div class="OurSeasonSpecials__left">
                <div class="OurSeasonSpecials__item">
                    <div class="OurSeasonSpecials__item__img">
                        <img src="./Image/party3.jpg" alt="event img1">
                    </div>
                    <h2 class="OurSeasonSpecials__Special__Event">Special Event Discount</h2>
                    <h1 class="OurSeasonSpecials__Special__Discount">20% Discount</h1>
                    <p class="OurSeasonSpecials__special__dec">We have decided to offer a 20% discount on your totalbill for selected special occasions including birthday celebrations, anniversaries and festive celebrations.</p>
                </div>
            </div>
            <div class="OurSeasonSpecials__right">
                <div class="OurSeasonSpecials__item">
                    <div class="OurSeasonSpecials__item__img">
                        <img src="./Image/meals.jpg" alt="Event img">
                    </div>
                    <h2 class="OurSeasonSpecials__Special__Meal">Special Daily Meal</h2>
                    <h1 class="OurSeasonSpecials__Special__Discount">Meals From Different Countries</h1>
                    <p class="OurSeasonSpecials__special__dec">The Outer Clove's dynamic daily menu offers a
                        tantalizing array of international cuisines, ensuring a diverse and flavorful dining
                        experience.</p>
                    </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Our Season Discount -->

<!-- Video -->
<section id="Video">
    <div class="container">
        <div class="eventMedia__wrapper">
            <div class="eventMedia__1">
                <video autoplay loop muted id="Video">
                    <source src="Image/View.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>
<!-- End Video -->

  <!-- Events Info -->
  <section id="eventsInfo" data-aos="fade-left">
    <div class="container">
      <div class="eventsInfo__wrapper">
        <div class="eventsInfo__left">
          <div class="eventsInfo__item">
            <div class="eventsInfo__item__img">
              <img src="./Image/hotelroom.jpg" alt="Online Reservation">
            </div>
            <div class="eventsInfo__item__info">
              <h2 class="eventsInfo__item__title">Online Reservation</h2>
              <p class="eventsInfo__item__text">
                Streamline your dining experience and comfortable vacation with our 'Call Reservation' service. Call us to quickly secure your table and your room. Enjoy hassle-free reservations, personalized service, and guarantee your spot at The Outer Clove. Elevate your dining experience with ease - where reservations meet seamless convenience.
              </p>
            </div>
          </div>
          <div class="eventsInfo__item" >
            <div class="eventsInfo__item__img">
              <img src="./Image/party4.jpg" alt="event Reservation">
            </div>
            <div class="eventsInfo__item__info">
              <h2 class="eventsInfo__item__title">Event reservation</h2>
              <p class="eventsInfo__item__text">
                Event Reservation at The Outer Clove ensures seamless planning for your special occasions. From intimate gatherings to grand celebrations, our dedicated team assists in securing the perfect venue, coordinating personalized menus, and managing every detail. Elevate your events with exceptional service and a memorable ambiance at The Outer Clove.
              </p>
            </div>
          </div>
        </div>
        <div class="eventsInfo__left" data-aos="fade-right">
          <h2 class="eventsInfo__title">Book For Events</h2>
          <p class="eventsInfo__text">Book your private event or corporate function at Oter Clove to experience a truly unique experience.</p>
          <a href="./index.php" class="btn primary-btn">Contact Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Events Info -->

    <!--Why You are Choose Us-->
    <section id="ChooseUs">
        <div class="container">
            <div class="ChooseUs__wrapper">
                <div class="ChooseUs__left">
                    <h2 class="ChooseUs__title">Why you are choose us</h2>
                    <p class="ChooseUs__text">"Our selection of services ensures an unparalleled experience. From our exquisite culinary offerings to impeccable customer service, we prioritize excellence in every aspect. Committed to innovation and quality, we create unforgettable moments that guarantee your satisfaction and loyalty. Choose us for a journey."</p>
                </div>
                <div class="ChooseUs__right">
                    <div class="ChooseUs__items__wrapper">
                        <div class="ChooseUs__items">
                            <div class="ChooseUs__items__icon">
                                <img src="./Image/Cuisine.jpg" alt="Cooking">
                            </div>
                            <p class="ChooseUs__items__text" >Cuisine</p>
                        </div>
                    </div>
                    <div class="ChooseUs__items__wrapper">
                        <div class="ChooseUs__items">
                            <div class="ChooseUs__items__icon">
                                <img src="./Image/Friendly Staff.jpg" alt="Staff">
                            </div>
                            <p class="ChooseUs__items__text" >Friendly Staff</p>
                        </div>
                    </div>
                    <div class="ChooseUs__items__wrapper">
                        <div class="ChooseUs__items">
                            <div class="ChooseUs__items__icon">
                                <img src="./Image/unparalleled hospitality.jpg" alt="unparalleled hospitality">
                            </div>
                            <p class="ChooseUs__items__text" >unparalleled hospitality</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Why You are Choose Us-->
    
    <!-- Store Info Section -->
    <section id="storeInfo" data-aos="fade-up">
        <div class="container">
            <div class="storeInfo__wrapper">
                <div class="storeInfo__item">
                    <div class="storeInfo__icon">
                        <img src="./Image/clock.png" alt="icon">
                    </div>
                    <h3 class="storeInfo__title">8.00AM - 10.00PM
                    </h3>
                    <p class="storeInfo__text">Opening time
                    </p>
                </div>
                <div class="storeInfo__item">
                    <div class="storeInfo__icon">
                        <img src="./Image/location.png" alt="icon">
                    </div>
                    <h3 class="storeInfo__title">No.3, Park Road, Nuwara Eliya.
                    </h3>
                    <p class="storeInfo__text">Address
                    </p>
                </div>
                <div class="storeInfo__item">
                    <div class="storeInfo__icon">
                        <img src="./Image/phone.png" alt="icon">
                    </div>
                    <h3 class="storeInfo__title">0112283050
                    </h3>
                    <p class="storeInfo__text">Call Us
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Store Info Section -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__col1">
                    <div class="footer__logo">
                        <img src="./Image/Logo0.png" alt="Outer Clove">
                    </div>
                    <p class="footer__desc">
                        Explore fine dining, seamless reservations, and delectable menus at The Outer Clove Restaurant.
                    </p>
                    <div class="footer__socials">
                        <h4 class="footer__socials__title">Follow Us</h4>
                        <ol>
                            <li>
                                <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-instagram">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-twitter">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="footer__col2">
                    <h3 class="footer__text__title">
                        Links
                    </h3>
                    <ol class="footer__text">
                            <a href="./Home.php">Home</a><br>
                            <a href="./About.php">About</a><br>
                            <a href="./Services.php">Our Services</a><br>
                            <a href="./Menu.php">Our Menu</a><br>
                            <a href="./index.php">Contact Us</a><br>
                            <a href="./Reservation.php">Reservations</a><br>
                            <a href="./index.php">Feedback</a><br>
                    </ol>
                </div>
                <div class="footer__col3">
                    <h3 class="footer__text__title">
                        Support
                    </h3>
                    <ol class="footer__text">
                            <a href="./index.php">Contact</a><br>
                            <a href="./index.php">Support Center</a><br>
                            <a href="./index.php">Feedback</a>
                    </ol>
                </div>
                <div class="footer__col4">
                    <h3 class="footer__text__title">
                        Contact
                    </h3>
                    <ol class="footer__text">
                            <a href="tel:0112283050">0112283050</a>
                            <a href="mailto:outerclove@gmail.com">outerclove@gmail.com</a>
                            <a href="Address">No.3, Park Road, Nuwara Eliya.</a>
                    </ol>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <?php
session_start();  

$role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : '';

if ($role == 'Customer') {
    header("Location: ./Home.php");
    exit();
} elseif ($role == 'Outer Clove Staff') {
    include('includes/staff-Menu.php');
    exit();
} elseif ($role == 'admin') {
    include('admin_dashboard.php');
    exit();
}
    ?>
 
    <!-- aos script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!--custom script-->
    <script src="./main.js"></script>

</body>
</html>
