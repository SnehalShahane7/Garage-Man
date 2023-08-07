<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-warning px-lg-3 py=lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5" href="index.php">
        <img src="img/logo-2 (3).png" alt="" width="120" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav , me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="nav-link active me-2 fs-5" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link me-2 fs-5 " href="#services">Service</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link me-2 fs-5" href="#reviews">Reviews</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link me-2 fs-5" href="#how">How it work</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link  fs-5" href="#Contact">Contact Us</a>
          </li>
        </ul>

        <div class=" me-auto mb-3 mb-lg-2 fs-5 ">
          <label for="city name"></label>
          <select name="city" id="city select" class="shadow-none bg-light" onclick=>
            <option value="">choose an City</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Gandinagar">Gandinagar</option>
            <option value="Bhavnagar">Bhavnagar</option>
          </select>
        </div>

        <div class="d-flex ">
          <button type="button" class="btn btn-light me-3 shadow-none" data-bs-toggle="modal"
            data-bs-target="#login">Login</button>
          <button type="button" class="btn btn-light shadow-none" data-bs-toggle="modal"
            data-bs-target="#register">Register</button>
        </div>
      </div>
  </nav>

  <!-- login-popup  -->
  <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="login.php" method="post">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>
              User-Login</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none" id="email" name="email">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none" id="password" name="password">
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <button class="btn-dark shadow-none" type="submit">Login</button>
              <a href="javascript: void(0)">Forgot Password</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- register-popup -->
  <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="reg.php" method="post">
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center"><i class="bi bi-person-circle fs-3 me-2"></i>
              User-Register</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control shadow-none" id="fullname" name="fullname">
            </div>
            <div class="mb-3">
              <label class="form-label">Phone Number</label>
              <input type="number" class="form-control shadow-none" id="phonenumber" name="phonenumber">
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control shadow-none" id="email" name="email">
            </div>
            <div class="mb-3">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control shadow-none" id="Confirmpass" name="Confirmpass">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none" id="password" name="password">
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <button class="btn btn-dark shadow-none" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- home  -->
  <div class="home">
    <section class="Home" id="home">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="img/g1.jpg" alt="">
          </div>
          <div class="swiper-slide">
            <img src="img/bike.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="img/car.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="img/g2.jpg" />
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5>Garage men</h5>
            <form action="">
              <div class="row align-items-end">
                <div class="col-lg-3 mt-3">
                  <label class="form-label" style="font-weight: 500;"> Select brand</label>
                  <select name="brand">
                    <option value="0">Select Vehicle type</option>
                    <option value="2">Car</option>
                    <option value="4">Bike</option>
                  </select>
                </div>
                <div class="col-lg-3 mt-3 ">
                  <label class="form-label" style="font-weight: 500;"> Select Model</label>
                  <select name="model">
                    <option value="0">Select Brand</option>
                    <option value="2">Car</option>
                    <option value="4">Bike</option>
                  </select>
                </div>
                <div class="col-lg-3 mt-3 ">
                  <label class="form-label" style="font-weight: 500;"> Select Model</label>
                  <select name="model">
                    <option value="0">Select Model</option>
                    <option value="2">Car</option>
                    <option value="4">Bike</option>
                  </select>
                </div>
                <div class="col-lg-3 mt-3">
                  <label class="form-label" style="font-weight: 500;"> Select Fuel</label>
                  <select name="type">
                    <option value="0">Select Fuel Type</option>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="electric">Electric</option>
                    <option value="cng">CNG</option>
                    <option value="lpg">LPG</option>
                  </select>
                </div>
                <input type="submit" class="mt-3 bg-warning" name="book" value="Book an Appointment">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Service  -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Service</h2>
  <section class="services" id="services">
    <div class="row justify-content-evently px-lg-0 px-md-0 px-5">
      <div class="service">
        <h2 class="tertiary-heading">General Service</h2>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum laudantium asperiores
          maxime quae deleniti excepturi praesentium debitis harum dolores quo. Cupiditate eveniet provident recusandae
          ratione earum error soluta inventore repellendus.</p>
      </div>

      <div class="service">
        <h2 class="tertiary-heading">Engine & Transmission</h2>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem omnis veritatis
          eaque error laudantium dolor possimus atque, animi nisi ipsa ratione perferendis commodi reprehenderit maxime,
          nemo accusantium qui, officiis consequuntur?</p>
      </div>

      <div class="service">
        <h2 class="tertiary-heading">Major Repairs</h2>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates reprehenderit veniam
          nemo autem fugiat repudiandae omnis explicabo, enim reiciendis corporis itaque laborum fuga ipsum quae ullam,
          error, cum asperiores impedit!</p>
      </div>

      <div class="service">
        <h2 class="tertiary-heading">Washing Services</h2>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nisi velit optio pariatur
          voluptatibus dolor molestiae ullam eligendi, unde aut quaerat, corporis aperiam assumenda ea vitae id labore
          temporibus? Earum.</p>
      </div>

      <div class="service">
        <h2 class="tertiary-heading">Essential Fluids</h2>
        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi excepturi omnis ipsam
          laboriosam tenetur incidunt quidem aspernatur voluptas. Quos esse reprehenderit ipsam omnis obcaecati
          voluptatibus expedita, vitae soluta ratione. Odio.</p>
      </div>

      <div class="service">
        <h2 class="tertiary-heading">Fluids</h2>
        <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi excepturi omnis ipsam
          laboriosam tenetur incidunt quidem aspernatur voluptas. Quos esse reprehenderit ipsam omnis obcaecati
          voluptatibus expedita, vitae soluta ratione. Odio.</p>
      </div>
    </div>
  </section>





  <!-- Reviews  -->
   <h2 class="mt-2 pt-2 mb-2 text-center fw-bold h-font">Reviews</h2>
  <section class="reviews" id="reviews">
    <div class="row justify-content-evently px-lg-0 px-md-0 px-5">
      <div class="swiper review">
        <div class="swiper-wrapper ">
          <div class="swiper-slide">
            <p> He reached on time and was knowledgeable. He was good at what he was doing. I got it done in an hour.
            </p>
            <p> Thomas A. Edison</p>
          </div>
          <div class="swiper-slide">
            <p> He reached on time and was knowledgeable. He was good at what he was doing. I got it done in an hour.
            </p>
            <p> Ernest Hemingway </p>
          </div>
          <div class="swiper-slide">
            <p> He reached on time and was knowledgeable. He was good at what he was doing. I got it done in an hour.
            </p>
            <p> Maria Bosco </p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- how it work  -->
  <h2 class="mt-2 pt-2 mb-2 text-center fw-bold h-font">How it work</h2>
  <section class="how" id="how">
    <div class="container">
      <div class="row ">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow-none py-4 my-3">
          <ion-icon class="step-icon" name="location-sharp"></ion-icon>
          <h5 class="step-text">Select Location</h5>
          <span class="arrow">&rarr;</span>

        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow-none py-4 my-3">
          <ion-icon class="step-icon" name="car-sport-sharp"></ion-icon>
          <h5 class="step-text">Select Vehicle Details</h5>
          <span class="arrow">&rarr;</span>

        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow-none py-4 my-3">
          <ion-icon class="step-icon" name="alarm-sharp"></ion-icon>
          <h5 class="step-text">Book an Appointment</h5>
          <span class="arrow">&rarr;</span>

        </div>
      </div>
    </div>
  </section>

  <!-- <footer class="footer">
    <div class="embargo">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15000.265692468385!2d73.75955285!3d19.96370865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1
            !4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sin!4v1647217994188!5m2!1sen!2sin" height="320" loading="lazy"></iframe> </div>
      <div class="address">Grage Man</div>
      <div class="contact">+91-8000474612</div>
    </div>
    <div class="footer-menu">
      <div class="footer-menu-heading">Links</div>
      <ul class="footer-links">
        <li><a class="footer-link" href="">Home</a></li>
        <li><a class="footer-link" href="">Services</a></li>
        <li><a class="footer-link" href="">Reviews</a></li>
        <li><a class="footer-link" href="">How it works</a></li>
        <li><a class="footer-link" href="">Book an Appointment</a></li>
      </ul>
    </div>
    <div class="socials">
      <div class="footer-menu-heading">Socials</div>
      <a href="https://fb.me/garageman.in"><ion-icon class="social-icon" name="logo-facebook"></ion-icon></a>
      <a href="https://www.instagram.com/garageman.in/"><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a>
      <a href=""><ion-icon class="social-icon" name="logo-snapchat"></ion-icon></a>
    </div> -->

  </footer>
  <span class="copyline">&copy; Proudly created and managed by <a href="https://virtualskyit.com/">Virtual Sky IT Services LLP</a></span>

    <h2 class="mt-2 pt-2 mb-2 text-center fw-bold h-font">Contact Us</h2>
  <section class="Contact" id="Contact">
    <div class="container">
      <div class="ro">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15000.265692468385!2d73.75955285!3d19.96370865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1
              !4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sin!4v1647217994188!5m2!1sen!2sin" height="320" loading="lazy"></iframe> -
          <div class="address">Grage Man</div> 
        </div>
        <div class="footer-menu">
          <div class="footer-menu-heading">Links</div>
          <ul class="footer-links">
            <li><a class="footer-link" href="#home">Home</a></li>
            <li><a class="footer-link" href="#serivices">Services</a></li>
            <li><a class="footer-link" href="#review">Reviews</a></li>
            <li><a class="footer-link" href="#how">How it works</a></li>
            <li><a class="footer-link" href="Contact">contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>call us</h5>
            <a href="tel: +91901827522" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i>+91901827522</a>
            <br>
            <a href="tel: +91901827876" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i>+91901827876</a>
          </div>
          <div class="socials ">
            <a href="https://fb.me/garageman.in "><ion-icon class="social-icon " name="logo-facebook"></ion-icon></a>
            <a href="https://www.instagram.com/garageman.in/"><ion-icon class="social-icon" name="logo-instagram"></ion-icon></a>
            <a href=""><ion-icon class="social-icon" name="logo-snapchat"></ion-icon></a>
          </div>
        </div>
      </div>
  </footer>
  <span class="copyline">&copy; Proudly created and managed by <a href="https://virtualskyit.com/">Virtual Sky IT -->
      Services LLP</a></span>--> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="index.js"></script>
</body>

</html>