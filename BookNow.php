<?php

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Book Now | The Grand Sweden Hotel</title>
    <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
    <link rel="stylesheet" type="text/css" href="css/book-now.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">GRAND SWEDEN HOTEL</div>
        <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li><a href="Accommodations.php">Accommodations</a></li>
            <li><a href="Experiences.php">Experiences</a></li>
            <li><a href="Amenities.php">Amenities</a></li>
            <li><a href="Offers.php">Offers</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Destination.php">Destination</a></li>
            <li><a href="ContactUs.php">Contact Us</a></li>
            <li><a href="BookNow.php" class="btn">Book Now</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <!-- Top -->
    <section class="index-top">
    </section>
    <!-- Forms -->
    <br />
    <section class="book now">
        <section class="booking">
            <form action="" class="">
                <div class="container-1">
                    <div class="input-group">
                        <label for="check-in" class="input-label"> Check in</label>
                        <input type="date" class="input" id="check-in">
                    </div>
                    <div class="input-group">
                        <label for="check-out" class="input-label"> Check out</label>
                        <input type="date" " class=" input" id="check-out">
                    </div>
                    <div class="input-group">
                        <label for="adults" class="input-label"> Adults</label>
                        <select name="adults" id="adults" class="options">
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
                        <label for="children" class="input-label"> Children</label>
                        <select name="children" id="children" class="options">
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
            </form>
        </section>

        <div class="booking">
            <div class="container">
                <!-- Progress Bar -->
                <div class="progress-bar">
                    <div class="step">
                        <p>Rooms</p>
                        <div class="bullet">
                            <span>1</span>
                        </div>
                        <div class="check fas fa-check">
                        </div>
                    </div>
                    <div class="step">
                        <p>Add-ons</p>
                        <div class="bullet">
                            <span>2</span>
                        </div>
                        <div class="check fas fa-check">
                        </div>
                    </div>
                    <div class="step">
                        <p>Guest Details</p>
                        <div class="bullet">
                            <span>3</span>
                        </div>
                        <div class="check fas fa-check">
                        </div>
                    </div>
                    <div class="step">
                        <p>Confirmation</p>
                        <div class="bullet">
                            <span>4</span>
                        </div>
                        <div class="check fas fa-check">
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <div class="form-outer">
                    <!-- Step 1: Select a Room -->
                    <form action="#">
                        <div class="page slide-page">
                            <div class="title">Select a Room</div>
                            <div class="container-2">
                                <!-- group -->
                                <div class="output-group">
                                    <img src="assets/destination/drottningholm.jpg" alt="image" width="250"
                                        height="200">
                                    <div class="details">
                                        <h3>Room 1</h3>
                                        <p>1,356 sq. ft. / 126 sq. m.</p>
                                        <p>Max guests 4</p>
                                        <p>Ocean view</p>
                                        <p>1 Bedroom</p>
                                    </div>
                                </div>
                                <!-- group -->
                                <div class="output-group">
                                    <img src="assets/destination/drottningholm.jpg" alt="image" width="250"
                                        height="200">
                                    <div class="details">
                                        <h3>Room 1</h3>
                                        <p>1,356 sq. ft. / 126 sq. m.</p>
                                        <p>Max guests 4</p>
                                        <p>Ocean view</p>
                                        <p>1 Bedroom</p>
                                    </div>
                                </div>
                                <!-- group -->
                                <div class="output-group">
                                    <img src="assets/destination/drottningholm.jpg" alt="image" width="250"
                                        height="200">
                                    <div class="details">
                                        <h3>Room 1</h3>
                                        <p>1,356 sq. ft. / 126 sq. m.</p>
                                        <p>Max guests 4</p>
                                        <p>Ocean view</p>
                                        <p>1 Bedroom</p>
                                    </div>
                                </div>
                                <!-- group -->
                                <div class="output-group">
                                    <img src="assets/destination/drottningholm.jpg" alt="image" width="250"
                                        height="200">
                                    <div class="details">
                                        <h3>Room 1</h3>
                                        <p>1,356 sq. ft. / 126 sq. m.</p>
                                        <p>Max guests 4</p>
                                        <p>Ocean view</p>
                                        <p>1 Bedroom</p>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <button class="firstNext next">Next</button>
                            </div>
                        </div>
                        <!-- Step 2 Select add-ons -->
                        <div class="page">
                            <div class="title">Experiences:</div>
                            <div class="container-2">
                                <!-- group -->
                                <div class="output-group">
                                    <img src="assets/destination/drottningholm.jpg" alt="image" width="250"
                                        height="200">
                                    <div class="details">
                                        <h3>Room 1</h3>
                                        <p>1,356 sq. ft. / 126 sq. m.</p>
                                        <p>Max guests 4</p>
                                        <p>Ocean view</p>
                                        <p>1 Bedroom</p>
                                    </div>
                                </div>
                                <!-- group -->
                                <div class="output-group">
                                    <img src="assets/destination/drottningholm.jpg" alt="image" width="250"
                                        height="200">
                                    <div class="details">
                                        <h3>Room 1</h3>
                                        <p>1,356 sq. ft. / 126 sq. m.</p>
                                        <p>Max guests 4</p>
                                        <p>Ocean view</p>
                                        <p>1 Bedroom</p>
                                    </div>
                                </div>
                                <!-- group -->
                                <div class="output-group">
                                    <img src="assets/destination/drottningholm.jpg" alt="image" width="250"
                                        height="200">
                                    <div class="details">
                                        <h3>Room 1</h3>
                                        <p>1,356 sq. ft. / 126 sq. m.</p>
                                        <p>Max guests 4</p>
                                        <p>Ocean view</p>
                                        <p>1 Bedroom</p>
                                    </div>
                                </div>
                                <!-- group -->
                                <div class="output-group">
                                    <img src="assets/destination/drottningholm.jpg" alt="image" width="250"
                                        height="200">
                                    <div class="details">
                                        <h3>Room 1</h3>
                                        <p>1,356 sq. ft. / 126 sq. m.</p>
                                        <p>Max guests 4</p>
                                        <p>Ocean view</p>
                                        <p>1 Bedroom</p>
                                    </div>
                                </div>
                            </div>
                            <div class="field btns">
                                <button class="prev-1 prev">Previous</button>
                                <button class="next-1 next">Next</button>
                            </div>
                        </div>
                        <!-- Step 3: Select Payment Method, Discount -->
                        <div class="page">
                            <div class="title">Payment Method:</div>
                            <br /> <br />
                            <div class="field btns">
                                <button class="prev-2 prev">Previous</button>
                                <button class="next-2 next">Next</button>
                            </div>
                        </div>
                        <!-- Step 4: Summary -->
                        <div class="page">
                            <div class="title">Confirmation:</div>
                            <br /> <br />
                            <div class="field btns">
                                <button class="prev-3 prev">Previous</button>
                                <button class="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script src="js/book-now-script.js"></script>

</body>

</html>