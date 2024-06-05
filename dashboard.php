<?php include('test_data.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Temperature Panel Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta http-equiv="refresh" content="180">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="dashstyle.css" rel="stylesheet">
    
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>IT Park, Millenium Drive, Malabe, Colombo</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+94 114 486 400</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@cinec.edu</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>ThermoVision</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Temperature</a>
                        <div class="dropdown-menu m-0">
                            <a href="dashboard.php" class="dropdown-item">Temperature Panel</a>
                            <a href="History.php" class="dropdown-item">History</a>
                        </div>
                    </div>

                    <a href="about.html" class="nav-item nav-link">About</a>

                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                    
                    <a href="Help.html" class="nav-item nav-link">Help</a>
                </div>
                </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Temperature & Humidity</h1>
                    <h5 class="display -4 text-white animated zoomIn">View Your Home Temperature Now</h5>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

   

    <section>
        <div class="data">
            <div class="column">
                <h2>Current Temperature</h2>
                <div class="temperature">
                    <p id="temp-display"><i class="fas fa-thermometer-half"></i><?php echo $temperature; ?>&deg;C</p>
                </div>
            </div>
            <div class="column">
                <h2>Current Humidity</h2>
                <div class="humidity">
                    <p class="value"><i class="fas fa-tint"></i><?php echo $humidity; ?>%</p>
                </div>
            </div>
        </div>
    </section>
    
    <div class="temp">

        <button class="Fahrenheit">Fahrenheit</button>
        <button class="Kelvin">Kelvin</button>
        <button class="Celsius">Celsius</button>

    </div>

    
        
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-3 col-md-6 footer-about">
                    </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">IT Park, Millenium Drive, Malabe, Colombo</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">info@cinec.edu</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+94 114 486 400</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.html"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Temperature</a>
                                <a class="text-light mb-2" href="about.html"><i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                                <a class="text-light mb-2" href="contact.html"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                                <a class="text-light mb-2" href="Help.html"><i class="bi bi-arrow-right text-primary me-2"></i>Help</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.html"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Temperature</a>
                                <a class="text-light mb-2" href="about.html"><i class="bi bi-arrow-right text-primary me-2"></i>About</a>
                                <a class="text-light mb-2" href="contact.html"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                                <a class="text-light mb-2" href="Help.html"><i class="bi bi-arrow-right text-primary me-2"></i>Help</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #0b053f;">
        <div class="container justify-content-center">
            <div class="row justify-content-end justify-content-center" style="padding-left: 150px;">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="custom-class2">&copy; <a class="text-white border-bottom" href="#">ThermoVision</a>. All Rights Reserved. 
						Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">ThermoVision</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    
    <script>
     function sendEmail(message) {
          // call the PHP script to send an email
          var xhr = new XMLHttpRequest();
          xhr.open("GET", "email.php?message=" + message, true);
          xhr.send();
        }
        
        function checkTemperature() {
          var temperature = <?php echo $temperature; ?>;/* get the current temperature from your temperature sensor */;
          if (temperature > 30) {
            sendEmail("The temperature is above 30 degrees Celsius.");
          } else if (temperature < 30) {
            sendEmail("The temperature is below 30 degrees Celsius.");
          }
        }
        // call the checkTemperature function every 5 minutes
        setInterval(checkTemperature, 1 * 60 * 1000); 

    const tempDisplay = document.getElementById('temp-display');
    const celsiusBtn = document.querySelector('.Celsius');
    const fahrenheitBtn = document.querySelector('.Fahrenheit');
    const kelvinBtn = document.querySelector('.Kelvin');

    let temperatureCelsius = <?php echo $temperature; ?>;

    function updateTemperature(unit) {
        switch (unit) {
            case 'celsius':
                temperatureCelsius = <?php echo $temperature; ?>;
                tempDisplay.innerHTML = `<i class="fas fa-thermometer-half"></i>${temperatureCelsius}&deg;C`;
                break;
            case 'fahrenheit':
                const temperatureFahrenheit = (temperatureCelsius * 9/5) + 32;
                tempDisplay.innerHTML = `<i class="fas fa-thermometer-half"></i>${temperatureFahrenheit}&deg;F`;
                break;
            case 'kelvin':
                const temperatureKelvin = temperatureCelsius + 273.15;
                tempDisplay.innerHTML = `<i class="fas fa-thermometer-half"></i>${temperatureKelvin}&deg;K`;
                break;
        }
    }

    celsiusBtn.addEventListener('click', () => {
        updateTemperature('celsius');
    });

    fahrenheitBtn.addEventListener('click', () => {
        updateTemperature('fahrenheit');
    });

    kelvinBtn.addEventListener('click', () => {
        updateTemperature('kelvin');
    });
   </script>

   <script src="js/main.js"></script>
</body>

</html>