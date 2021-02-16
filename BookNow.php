<?php

?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Book Now | The Grand Sweden Hotel</title>
  <link rel="icon" href="assets/icon.png">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <link rel="stylesheet" type="text/css" href="css/book-now.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <!-- Nagigation bar -->
  <nav>
    <div class="logo"><a href="index.php">The Grand Sweden Hotel</a></div>
    <input id="nav-toggle" type="checkbox">
    <ul class="links">
      <li><a href="index.php">Home</a></li>
      <li><a href="Accommodations.php">Accommodations</a></li>
      <li><a href="Amenities.php">Amenities</a></li>
      <li><a href="Offers.php">Offers</a></li>
      <li><a href="Gallery.php">Gallery</a></li>
      <li><a href="Destination.php">Destination</a></li>
      <li><a href="ContactUs.php">Contact Us</a></li>
      <li><a href="BookNow.php">Book Now</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

  <!-- Page Content -->
  <section class="index-top">
  </section>
  <!-- Forms -->
  <section class="book-now">
    <form action="book.php" method="POST" id="booking">
      <!-- Form Top -->
      <div class="booking">
        <!-- Check in Check Out Adult Children -->
        <div class="container-1">
          <div class="input-group">
            <label for="check-in" class="input-label">Check in</label>
            <input type="date" class="input" id="check-in" name="check-in" required>
          </div>
          <div class="input-group">
            <label for="check-out" class="input-label">Check out</label>
            <input type="date" class=" input" id="check-out" name="check-out" required>
          </div>
          <div class="input-group">
            <label for="adults" class="input-label">Adults</label>
            <select class="options" id="adults" name="adults" required>
              <option disabled selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <div class="input-group">
            <label for="children" class="input-label">Children</label>
            <select class="options" id="children" name="children" required>
              <option disabled selected>0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
        </div>
      </div>
      <!-- Form Bottom-->
      <div class="booking">
        <div class="container">
          <!-- Content -->
          <div class="form-outer">
            <!-- Step 1: Select a Room -->
            <div class="form-form">
              <div class="page slide-page">
                <div class="title">
                  <h3>Select a Room</h3>
                </div>
                <span class="left">Click the button to select a room</span>
                <div class="container-2">
                  <!-- group -->
                  <div class="output-group room">
                    <img src="assets/accomodation/room1.jpg" alt="image" width="400" height="300">
                    <div class="details">
                      <input type="radio" id="room1" name="room" value="Standard Room">
                      <label for="room1">
                        <h3>Standard Room</h3>
                      </label>
                      <p><b>Size:</b> from 45m2 (484ft2)</p>
                      <p><b>Max guests:</b> 4</p>
                      <p><b>Bed:</b> Twin</p>
                      <p><b>SEK 10,000 / NIGHT</b></p><input type="hidden" name="roomPrice" value="10000">
                    </div>
                  </div>
                  <!-- group -->
                  <div class="output-group">
                    <img src="assets/accomodation/room2.jpg" alt="image" width="400" height="300">
                    <div class="details">
                      <input type="radio" id="room2" name="room" value="Deluxe Room">
                      <label for="room2">
                        <h3>Deluxe Room</h3>
                      </label>
                      <p><b>Size:</b> from 35m2 (376ft2)</p>
                      <p><b>Max guests:</b> 5</p>
                      <p><b>Bed:</b> Queen</p>
                      <p><b>SEK 20,000 / NIGHT</b></p>
                    </div>
                  </div>
                  <!-- group -->
                  <div class="output-group">
                    <img src="assets/accomodation/room3.jpg" alt="image" width="400" height="300">
                    <div class="details">
                      <input type="radio" id="room3" name="room" value="Suite Room">
                      <label for="room3">
                        <h3>Suite Room</h3>
                      </label>
                      <p><b>Size:</b> from 55m2 (592ft2)</p>
                      <p><b>Max guests:</b> 6</p>
                      <p><b>Bed:</b> King</p>
                      <p><b>SEK 30,000 / NIGHT</b></p>
                    </div>
                  </div>
                </div>
                <!-- Step 2 Select add-ons -->
                <div>
                  <div class="title">
                    <h3>Enhance Your Stay</h3>
                  </div>
                  <span class="left">Click the button to select</span>
                  <div class="container-2">
                    <!-- group -->
                    <div class="output-group room">
                      <img src="assets/images/1.jpg" alt="image" width="400" height="300">
                      <div class="details">
                        <input type="checkbox" id="addon1" name="addon1" value="Private Dinner Setup"
                          class="visually-hidden ">
                        <label for="addon1" class="addon">
                          <h3>Private Dinner Setup</h3>
                        </label>
                        <p>Choose to dine on the beach with a candlelit table set for two and a bonfire flickering in
                          the background. A personal waiter will see to your every need and your choice of menu (not
                          included in the setup price) will be prepared by a private chef.</p>
                        <p><b>SEK 4,480</b></p>
                      </div>
                    </div>
                    <!-- group -->
                    <div class="output-group room">
                      <img src="assets/images/2.jpg" alt="image" width="400" height="300">
                      <div class="details">
                        <input type="checkbox" id="addon2" name="addon2" value="Holistic Massage"
                          class="visually-hidden ">
                        <label for="addon2" class="addon">
                          <h3>Holistic Massage</h3>
                        </label>
                        <p>This 60-minute aromatherapy-based oil massage is personalised to the individual. After a
                          comprehensive consultation, your expert therapist will tailor the massage to meet your
                          physical and emotional needs by employing a range of techniques including deep-tissue, Swedish
                          and sports massage.</p>
                        <p><b>SEK 1,800</b></p>
                      </div>
                    </div>
                    <!-- group -->
                    <div class="output-group room">
                      <img src="assets/images/3.jpg" alt="image" width="400" height="300">
                      <div class="details">
                        <input type="checkbox" id="addon3" name="addon3" value="Private water-sports lessons"
                          class="visually-hidden ">
                        <label for="addon3" class="addon">
                          <h3>Private water-sports lessons</h3>
                        </label>
                        <p>On land, the miles of running and hiking trails are complemented by a host of opportunities
                          for coastal outings. This is available for all ages.</p>
                        <p><b>SEK 6,800</b></p>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Step 2 Select add-ons -->
                <div>
                  <div class="title">
                    <h3>Special Rates</h3>
                  </div>
                  <div class="container-2">
                    <!-- group -->
                    <div class="input-group">
                      <select class="options" id="promo" name="promo">
                        <option disabled selected>Promo</option>
                        <option value="none">None</option>
                        <option value="newyearpromo">New Year Promo</option>
                        <option value="valentinespromo">Valentine's Promo</option>
                        <option value="SummerPromo">Summer Promo</option>
                        <option value="winterpromo">Winter Promo</option>
                        <option value="christmaspromo">Christmas Promo</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- Step 3: Contact Info, Select Payment Method, Discount -->
                <div>
                  <!-- Guest Details -->
                  <div class="title">
                    <h3>Contact Information</h3>
                  </div>
                  <div>
                    <div class="container-3">
                      <div class="input-group half">
                        <select class="options" id="prefix" name="prefix" required>
                          <option disabled selected>Prefix</option>
                          <option value="Dr.">Dr.</option>
                          <option value="Ms.">Ms.</option>
                          <option value="MrRev.">Mr.</option>
                          <option value="Mrs.">Mrs.</option>
                          <option value="Pr.">Pr.</option>
                          <option value="Rev.">Rev.</option>
                        </select>
                        <input type="text" class="input" id="firstname" name="firstname" placeholder="First Name"
                          required>
                      </div>
                      <div class="input-group">
                        <input type="text" class="input" id="lastname" name="lastname" placeholder="Last Name" required>
                      </div>
                    </div>
                    <!-- 2 -->
                    <div class="container-3">
                      <div class="input-group">
                        <!-- <label for="phonenumber" class="input-label-form">Phone Number</label> -->
                        <input type="tel" class="input" id="phonenumber" name="phonenumber"
                          placeholder="Phone Number (09XXXXXXXXX)" pattern="[0-9]{11}" required>
                      </div>
                      <div class="input-group">
                        <!-- <label for="email" class="input-label-form">Email Address</label> -->
                        <input type="email" class="input" id="email" name="email"
                          placeholder="Email Address (name@mail.com)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <small>This is the email we will send your confirmation to.</small>
                      </div>
                    </div>
                    <!-- 3 -->
                    <div class="container-3">
                      <div class="input-group">
                        <!-- <label for="address" class="input-label-form">Address</label> -->
                        <input type="text" class="input" id="address" name="address" placeholder="Street Address"
                          required>
                      </div>
                      <div class="input-group half">
                        <input type="text" class="input" id="city" name="city" placeholder="City" required>
                        <input type="text" class="input" id="state" name="state" placeholder="State/Province" required>
                        <input type="text" class="input" id="zipcode" name="zipcode" placeholder="Zip/Postal Code"
                          pattern="[0-9]*" minlength="2" maxlength="4" required>
                      </div>
                    </div>
                  </div>
                  <!-- Payment Information -->
                  <div class="title">
                    <h3>Payment Information</h3>
                  </div>
                  <div>
                    <div class="container-3">
                      <div class="input-group">
                        <input type="text" class="input" id="cardholder" name="cardholder"
                          placeholder="Cardholder Name">
                      </div>
                    </div>
                    <div class="container-3">
                      <div class="input-group half">
                        <input type="text" class="input" id="cardnumber" name="cardnumber" placeholder="Card Number"
                          pattern="[0-9]{16}" required>
                        <input type="text" class="input" id="expiration" name="expiration"
                          placeholder="Expiration Date (MM/YYYY)" pattern="[0-9]{2}/[0-9]{4}" required>
                        <input type="text" class="input" id="cvv" name="cvv" placeholder="CVV" pattern="[0-9]{3}"
                          required>
                      </div>
                    </div>
                  </div>
                  <!-- Prev Next Button -->
                  <div class="field btns">
                    <button class="firstNext">Next</button>
                  </div>
                </div>
              </div>

              <!-- Step 4: Summary -->
              <div class="page">
                <div class="title">
                  <h3>Confirmation</h3><!-- display guest info for confirmation -->
                </div>
                <div>
                  <div class="container-4">
                    <div class="output-group outline">
                      <h4>Name</h4>
                      <span id="disp_name"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Phone number</h4>
                      <span id="disp_phone"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Address</h4>
                      <span id="disp_address"></span>
                    </div>
                  </div>
                  <div class="container-4">
                    <div class="output-group outline">
                      <h4>Check in date</h4>
                      <span id="disp_check_in"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Check out date</h4>
                      <span id="disp_check_out"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Adults</h4>
                      <span id="disp_adults"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Children</h4>
                      <span id="disp_children"></span>
                    </div>
                  </div>
                  <div class="container-4">
                    <div class="output-group outline">
                      <h4>Room</h4>
                      <span id="disp_room"></span>
                    </div>
                    <div class="output-group outline">
                      <h4>Add-ons</h4>
                      <span id="disp_addon"></span>
                    </div>
                  </div>
                  <div class="container-4">
                    <div class="container-5 outline">
                      <div class="output-group ">
                        <h4>Total price</h4>
                        <span id="disp_price"></span>
                      </div>
                      <div class="output-group ">
                        <h4>Discount/s applied</h4>
                        <span id="disp_promo"></span>
                      </div>
                    </div>
                  </div>
                  <div class="container-6 outline-total">
                    <div class="output-group ">
                      <h4>Total amount due</h4>
                    </div>
                    <div class="output-group ">
                      <span id="disp_totalAmtDue"></span>
                    </div>
                  </div>
                </div>
                <!-- Policies-->
                <div class="title">
                  <h3>Policies</h3>
                </div>
                <div>
                  <div class="text-group">
                    <h4>Guarantee Policy</h4>
                    <p>Valid credit card details required to guarantee reservation. Full prepayment required 15 days
                      prior to arrival.</p>
                  </div>
                  <div class="text-group">
                    <h4>Cancel Policy</h4>
                    <p>Cancel by 12 noon, 15 days prior to arrival to avoid 50% of total value of the stay penalty
                      plus tax. Same day cancellation, no-show or early departure, 100% penalty plus tax will be
                      applied. </p>
                  </div>
                </div>
                <!-- Acknowledgement-->
                <div class="title">
                  <h3>Acknowledgement</h3>
                </div>
                <div class="text-group">
                  <label for="news" class="checkbox-text">
                    I would like to receive newsletters and special offers by email.
                    <input type="checkbox" class="check" id="news" name="news" value="news">
                    <span class="checkmark"></span>
                  </label>
                  <label for="terms" class="checkbox-text">
                    I agree with the Privacy Terms.*
                    <input type="checkbox" class="check" id="terms" name="terms" value="terms" checked="checked"
                      required>
                    <span class="checkmark"></span>
                  </label>
                  <label for="conditions" class="checkbox-text">
                    I agree with the Booking Conditions.*
                    <input type="checkbox" class="check" id="conditions" name="conditions" value="conditions"
                      checked="checked" required>
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div><!-- END OF PAGE -->
            </div><!-- END OF FORMFORM -->
          </div><!-- END OF OUTER FORM -->
        </div><!-- END OF CONTAINER -->
      </div><!-- END OF BOOKING -->

      <input type="submit" value="Submit" id="submit" style="visibility: hidden;" />

    </form>
  </section>
  <!-- Footer -->
  <footer>
    <div class="footer-container">
      <div class="row">
        <div class="footer-col col-1">
          <h4>The Grand Sweden Hotel</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="accomoations.php">Accomodation</a></li>
            <li><a href="experiences.php">Experiences</a></li>
            <li><a href="offers.php">Offers</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="destination.php">Destination</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="signin.php">Administrator</a></li>
          </ul>
        </div>
        <div class="footer-col col-2">
          <h4>Get in touch</h4>
          <ul>
            <li>Södra Blasieholmshamnen 8, 103 27 Stockholm, Sweden</li>
            <li>+46 8 679 35 00</li>
            <li>Privacy Policy</li>
          </ul>
        </div>
        <div class="footer-col col-3">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
            <a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="http://www.youtube.com"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="copyright">
        <a>© Copyright 2021. All Rights Reserved.</a>
      </div>
    </div>
  </footer>
  <!-- script -->
  <script src="js/book-now-script.js"></script>

</body>

</html>