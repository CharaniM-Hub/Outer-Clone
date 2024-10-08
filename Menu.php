<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="shortcut icon" href="./Image/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./GlobalStyles.css">
    <link rel="stylesheet" href="./Components.css">
    <link rel="stylesheet" href="Menu.css">
    <!-- aos css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
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
                          <li><a href="./home.php" class="nev__list">Home</a></li>
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

    <!--Specials-->
    <div class = "menu-container">
      <div class = "menu-head">
        <h2>Special Food Menu</h2>
        <p>The Special Food Menu at The Outer Clove presents a curated selection of exquisite dishes crafted with precision and creativity. Featuring seasonal delights and chef-inspired creations, our special menu promises a culinary journey that delights the palate with unique flavors and innovative culinary combinations!</p>
      </div>

      <div class = "menu-title">
        <h3 type = "Sub Title" class = "menu" id = "today-special">today's special</h3>
      </div>

      <div class = "food-items">
        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/Milk Rice.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Milk Rice</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Only Morning</h3>
            <p class = "category">Categories:Sri Lankan Traditional</p><br>
            <p class = "price">Small-Rs.500.00</p><br>
            <a href="Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item today-special">
          <div class = "food-img">
            <img src = "Image/Idi appa.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">String Hoppers</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Morning & Night</h3>
            <p class = "category">Categories:Sri Lankan Traditional</p><br>
            <p class = "price">Small-Rs.300.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item new-arrival">
          <div class = "food-img">
            <img src = "Image/Hoppers.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Hoppers</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Morning & Night</h3>
            <p class = "category">Categories:Sri Lankan Traditional</p><br>
            <p class = "price">Small-Rs.300.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/pol Roti.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Pol Rotti</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Morning & Night</h3>
            <p class = "category">Categories:Sri Lankan Traditional</p><br>
            <p class = "price">Small-Rs.200.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item today-special">
          <div class = "food-img">
            <img src = "Image/Sinisambal Pan.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Breadfast Sandwich</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Any Time</h3>
            <p class = "category">Categories:Today's Aditional</p><br>
            <p class = "price">Small-Rs.200.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item new-arrival">
          <div class = "food-img">
            <img src = "Image/Chicken fried rice.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Chicken Fried Rice</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Breakfast,Lunch & Dinner</h3>
            <p class = "category">Categories:Main Menu</p><br>
            <p class = "price">Small-Rs.800.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/rice and curry.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Rice & Curry</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Breakfast,Lunch & Dinner</h3>
            <p class = "category">Categories:Indian Main Menu</p><br>
            <p class = "price">Small-Rs.800.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item today-special">
          <div class = "food-img">
            <img src = "Image/Chicken Biriyabni.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Chicken Biriyani</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Only Morning</h3>
            <p class = "category">Categories:Indian Main Menu</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item new-arrival">
          <div class = "food-img">
            <img src = "Image/Indian Thai.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Indian Thai</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Breakfast,Lunch & Dinner</h3>
            <p class = "category">Categories:Indian Main Menu</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/Crispy Masala Dosa.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Crispy Masala Dosa</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Only Dinner</h3>
            <p class = "category">Categories:Indian Meal</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item today-special">
          <div class = "food-img">
            <img src = "Image/Spicy Kottu.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Spicy Kottu</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Lunch & Dinner</h3>
            <p class = "category">Categories:Today's Special</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item new-arrival">
          <div class = "food-img">
            <img src = "Image/pizza.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Cheese garlic Pizza</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Only Dinner</h3>
            <p class = "category">Categories:Today's Special</p><br>
            <p class = "price">Small-Rs.1500.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/Lasagna.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Lasagna</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Only Night</h3>
            <p class = "category">Categories:Today's Special</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/Cheese Buger.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Cheese burger</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Only Night</h3>
            <p class = "price">Small-Rs.1000.00</p><br>
            <p class = "category">Categories:Today's Special</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/chichen cheese pasta.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">chichen cheese pasta</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Breadfast, Lunch & Dinner</h3>
            <p class = "category">Categories:Special Menu</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/Creamy Tuscan Chicken Pasta.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Creamy Tuscan Chicken Pasta</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Lunch & Dinner</h3>
            <p class = "category">Categories:Special Menu</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- item -->
        
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/Beef and chicken pie.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Beef and chicken pie</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Lunch</h3>
            <p class = "category">Categories:Special Snack</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/Cheesy Garlic Bread.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Cheesy Garlic Bread</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Any Time</h3>
            <p class = "category">Categories:Today's Aditional</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/Best Chicken Ramen Noodles.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Best Chicken Ramen Noodles</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Any Time</h3>
            <p class = "category">Categories:Today's Aditional Korean Food</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

        <!-- item -->
        <div class = "food-item featured">
          <div class = "food-img">
            <img src = "Image/Dumpling.jpg" alt = "food image">
          </div>
          <div class = "food-content">
            <h2 class = "food-name">Chicken Dumpling</h2>
            <div class = "line"></div>
            <h3 class = "food-time">Only Dinner</h3>
            <p class = "category">Categories:Today's Aditional japanese food</p><br>
            <p class = "price">Small-Rs.1000.00</p><br>
            <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
          </div>
        </div>
        <!-- end of item -->

       <!-- item -->
       <div class = "food-item featured">
        <div class = "food-img">
          <img src = "Image/Korean Kimchi Fried Rice.jpg" alt = "food image">
        </div>
        <div class = "food-content">
          <h2 class = "food-name">Korean Kimchi Fried Rice</h2>
          <div class = "line"></div>
          <h3 class = "food-time">Only Lunch</h3>
          <p class = "category">Categories:Today's Aditional Korean Food</p><br>
          <p class = "price">Small-Rs.1000.00</p><br>
          <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
        </div>
      </div>
      <!-- end of item -->
      
      <!-- item -->
      <div class = "food-item featured">
        <div class = "food-img">
          <img src = "Image/Sushi.jpg" alt = "food image">
        </div>
        <div class = "food-content">
          <h2 class = "food-name">Sushi</h2>
          <div class = "line"></div>
          <h3 class = "food-time">Only Dinner</h3>
          <p class = "category">Categories:Today's Aditionaljapnese Food</p><br>
          <p class = "price">Small-Rs.1000.00</p><br>
          <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
        </div>
      </div>
      <!-- end of item -->

      <!-- item -->
      <div class = "food-item featured">
        <div class = "food-img">
          <img src = "Image/Russian Salad.jpg" alt = "food image">
        </div>
        <div class = "food-content">
          <h2 class = "food-name">Russian Salad</h2>
          <div class = "line"></div>
          <h3 class = "food-time">Any Time</h3>
          <p class = "category">Categories:Today's Aditional</p><br>
          <p class = "price">Small-Rs.1000.00</p><br>
          <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
        </div>
      </div>
      <!-- end of item -->

      <!-- item -->
      <div class = "food-item featured">
        <div class = "food-img">
          <img src = "Image/Vegi Soup.jpg" alt = "food image">
        </div>
        <div class = "food-content">
          <h2 class = "food-name">Vegetable Soup</h2>
          <div class = "line"></div>
          <h3 class = "food-time">Any Time</h3>
          <p class = "category">Categories:Today's Aditional</p><br>
          <p class = "price">Small-Rs.1000.00</p><br>
          <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
        </div>
      </div>
      <!-- end of item -->

      <!-- item -->
      <div class = "food-item featured">
        <div class = "food-img">
          <img src = "Image/Berry Smoothie.jpg" alt = "food image">
        </div>
        <div class = "food-content">
          <h2 class = "food-name">Berry Smoothie</h2>
          <div class = "line"></div>
          <h3 class = "food-time">Any Time</h3>
          <p class = "category">Categories:Today's Aditional Drink</p><br>
          <p class = "price">Small-Rs.1000.00</p><br>
          <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
        </div>
      </div>
      <!-- end of item -->

      <!-- item -->
      <div class = "food-item featured">
        <div class = "food-img">
          <img src = "Image/Classic Italian Tiramisu.jpg" alt = "food image">
        </div>
        <div class = "food-content">
          <h2 class = "food-name">Classic Italian Tiramisu</h2>
          <div class = "line"></div>
          <h3 class = "food-time">Tea Time</h3>
          <p class = "category">Categories:Today's Aditional Snack</p><br>
          <p class = "price">Small-Rs.1000.00</p><br>
          <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
        </div>
      </div>
      <!-- end of item -->

      <!-- item -->
      <div class = "food-item featured">
        <div class = "food-img">
          <img src = "Image/Mango Sago.jpg" alt = "food image">
        </div>
        <div class = "food-content">
          <h2 class = "food-name">Mango Sago</h2>
          <div class = "line"></div>
          <h3 class = "food-time">Only Lunch</h3>
          <p class = "category">Categories:Today's Aditional Drink</p><br>
          <p class = "price">Small-Rs.1000.00</p><br>
          <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
        </div>
      </div>
      <!-- end of item -->

      <!-- item -->
      <div class = "food-item featured">
        <div class = "food-img">
          <img src = "Image/Strwberry Cream Puff.jpg" alt = "food image">
        </div>
        <div class = "food-content">
          <h2 class = "food-name">Strwberry Cream Puff</h2>
          <div class = "line"></div>
          <h3 class = "food-time">Tea Time</h3>
          <p class = "category">Categories:Today's Aditional Snack</p><br>
          <p class = "price">Small-Rs.1000.00</p><br>
          <a href="./Add_to_cart.php"><button class="btn second-btn">Add to Cart</button></a>
        </div>
      </div>
      <!-- end of item -->        
      </div>
    </div>
  <!--End Specials-->

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
                          <a href="./index.php">Feedback</a>
                  </ol>
              </div>
              <div class="footer__col3">
                  <h3 class="footer__text__title">
                      Support
                  </h3>
                  <ol class="footer__text">
                          <a href="./Contact.php">Contact</a><br>
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
    <!-- aos script -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!--custom script-->
    <script src="./main.js"></script>
</body>
</html>
