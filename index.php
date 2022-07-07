<?php include "base.html"; ?>

<head>
  <style>
    .flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #fff;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}
.firstTest {
  height: 60vh;
  box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.3);
  border-radius: 30px;
}
.iconS {
  margin-top: -150px !important;
}
.fontStyle {
  font-size: 14px !important;
  margin-top: 50px !important;
}
.testImg {
  width: 7%;
  border-radius: 60px;
  position: absolute;
  left: 12%;
  margin-top: 30px;
}
.authorProfileName {
  margin-top: 120px;
  font-weight: bold;
  position: absolute;
  margin-left: -52px;
}
.secondImg {
  width: 7%;
  border-radius: 60px;
  margin-top: 30px;
  margin-left: -50px;
  position: absolute;
}

.thirdImg {
  width: 21%;
  border-radius: 60px;
  margin-top: 30px;
  margin-left: -50px;
  position: absolute;
}

/* blog section */
.blogStyle {
    box-shadow: 0px 0px 6px rgb(0 0 0 / 50%);
    background-color: #ffffff !important;
    border-radius:15px;
}
/* flip card section */

.flipCardSection {
  float: left;
  width: 100%;
  position: relative;
  overflow: hidden;
}
.flipCardSection:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  /* background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%23fab516' fill-opacity='1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E"); */
  z-index: 0;
  -webkit-transform: scale(2);
  -ms-transform: scale(2);
  transform: scale(2);
}
h3 {
  margin-bottom: 20px;
  font-weight: bold;
  color: #000;
}
.mb-5 {
  font-size: 48px;
}
.btn-default {
  color: #fff;
  font-weight: 700;
  text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
  font-size: 14px;
}
.card {
  margin-bottom: 30px;
}
.card-01 .card-body {
  position: relative;
  padding-top: 40px;
}
.card-01 .badge-box {
  position: absolute;
  top: -20px;
  left: 50%;
  width: 100px;
  height: 100px;
  margin-left: -50px;
  text-align: center;
}
.borderBottom {
  width: 30%;
  border: 1px groove #4f1a52 !important;
}
/* Dropdown Button */
.dropbtn {
  color: #4f1a52 !important;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: #4f1a52;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {
  color: #4f1a52;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */

.card-01 .badge-box i {
  color: #fff;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  font-size: 20px;
}
.profile-box {
  background-size: cover;
  float: left;
  width: 100%;
  text-align: center;
  padding: 30px 0;
  position: relative;
  overflow: hidden;
}
.profile-box:before {
  background-image: url("https://images.pexels.com/photos/247599/pexels-photo-247599.jpeg?h=350&auto=compress&cs=tinysrgb");
  width: 100%;
  position: absolute;
  content: "";
  left: -10%;
  top: 0;
  z-index: 0;
}
.profile-box img {
  width: 170px;
  height: 170px;
  position: relative;
}
.social-box i {
  color: #dfc717;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  line-height: 30px;
}
.social-box i:hover {
  color: #fff;
}
.social-box a {
  margin: 0 5px;
}

.card-01 .height-fix .fa {
  color: #fff;
  font-size: 22px;
  margin-right: 18px;
}
.card-01 .height-fix .card-img-top {
  width: auto;
  height: 100%;
}
.btnFirst {
  margin-right: 20px !important;
}
/*flipper-card*/
.card-flipper {
  position: relative;
  float: left;
  width: 100%;
  text-align: center;
  height: 370px;
  border: none !important;
}
.card {
  border: none !important;
}
.card__front {
  border: none !important;
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.5);
  border-radius: 15px;
}
.card__front,
.card__back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 90%;
}
.card__back .card {
  width: 100%;
  height: 300px;
  border: none !important;
  box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.5);
}

.card__front,
.card__back {
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: 0.9s;
  transition: 0.9s;
}

.card__back {
  -webkit-transform: rotateY(-180deg);
  -ms-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
}

.card-flipper.effect__hover:hover .card__front {
  -webkit-transform: rotateY(-180deg);
  -ms-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
}

.card-flipper.effect__hover:hover .card__back {
  -webkit-transform: rotateY(0);
  -ms-transform: rotateY(0);
  transform: rotateY(0);
}

.card-flipper.effect__random.flipped .card__front {
  -webkit-transform: rotateY(-180deg);
  -ms-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
}

.card-flipper.effect__random.flipped .card__back {
  -webkit-transform: rotateY(0);
  -ms-transform: rotateY(0);
  transform: rotateY(0);
}


/* End flip card section */
  </style>
</head>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div
        class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1"
        data-aos="fade-up">
        <div>
          <h1 style="color:#4f1a52;">Learn Compare & save on Medicare Supplement</h1>
          <h2 style="color:#000;">Some Plans may offer other benefits such as Dental, Vision, Hearing & Prescription
            Drug Coverage. Plans may differ depending on your region and state.
          </h2>
          <form action="" method="POST">
            <div class="row">
              <div class="col-md-4">
                <input type="text" placeholder="Enter Zip Code" class="form-control">
              </div>
              <div class="col-md-3">
                <input type="submit" class="form-control" style="background-color:#4f1a52; color:#fff;">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
        <img src="assets/img/header_images/slide.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= App Features Section ======= -->
  <!-- <section id="features" class="features">
    <div class="container">

      <div class="section-title">
        <h2 style="color:#4f1a52;">We Help The Way You Want It</h2>
      </div>

      <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 mb-2">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <i style="color:#4f1a52" class="fas fa-hospital-user fa fa-7x iconColor mt-4"></i>
                <hr class="mt-4">
                <h2 class="mt-4" style="color:#4f1a52; font-size:25px;">Free Of Cost Services / Free Services</h2>
              </div>
              <div class="flip-card-back">
                <p class="text-center mt-3 p-4">We can assist you in finding great health insurance plan for your needs and budget at no extra cost, saving you time and money.</p>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                  <a class="btn btn-primary" style="background-color: #4f1a52;" href="#"> Learn More </a>
                </div>
                <div class="col-md-4">
                  <a class="btn btn-primary" style="background-color: #4f1a52;" href="#"> Learn More </a>
                </div>
                <div class="col-md-2"></div>
                </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-2">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <i style="color:#4f1a52;" class="fas fa-hand-holding-medical fa fa-7x iconColor mt-4"></i>
                <hr class="mt-4">
                <h2 class="mt-4" style="color:#4f1a52; font-size:25px;">All You Need At One Place</h2>
              </div>
              <div class="flip-card-back">
                <p class="text-center mt-3 p-4">We can assist you in finding great health insurance plan for your needs and budget at no extra cost, saving you time and money.</p>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                  <a class="btn btn-primary" style="background-color: #4f1a52;" href="#"> Learn More </a>
                </div>
                <div class="col-md-4">
                  <a class="btn btn-primary" style="background-color: #4f1a52;" href="#"> Learn More </a>
                </div>
                <div class="col-md-2"></div>
                </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-2">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <i style="color:#4f1a52;" class="fas fa-plus fa fa-7x iconColor mt-4 firstRow"></i>
                <hr class="mt-4">
                <h2 class="mt-4" style="color:#4f1a52; font-size:25px;">Streamlined Enrollment Process</h2>
              </div>
              <div class="flip-card-back">
                <p class="text-center mt-3 p-4">We can assist you in finding great health insurance plan for your needs and budget at no extra cost, saving you time and money.</p>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                  <a class="btn btn-primary" style="background-color: #4f1a52;" href="#"> Learn More </a>
                </div>
                <div class="col-md-4">
                  <a class="btn btn-primary" style="background-color: #4f1a52;" href="#"> Learn More </a>
                </div>
                <div class="col-md-2"></div>
                </div> 
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-2">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <i style="color:#4f1a52;" class="fas fa-pills fa fa-7x iconColor mt-4 firstRow"></i>
                <hr class="mt-4">
                <h2 class="mt-4" style="color:#4f1a52; font-size:25px;">Expert Insight</h2>
              </div>
              <div class="flip-card-back">
                <p class="text-center mt-3 p-4">We can assist you in finding great health insurance plan for your needs and budget at no extra cost, saving you time and money.</p>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-4">
                  <a class="btn btn-primary" style="background-color: #4f1a52;" href="#"> Learn More </a>
                </div>
                <div class="col-md-4">
                  <a class="btn btn-primary" style="background-color: #4f1a52;" href="#"> Learn More </a>
                </div>
                <div class="col-md-2"></div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> -->

  <!-- new  -->

  <section class="flipCardSection">
    <div class="container">
      <div class="row">
        <div class="d-flex justify-content-center flex-column align-items-center">
           <h1 class="text-center outerClass mb-4 firstRow" style="color:#4f1a52;">
          We Help The Way You Want It 
        </h1>
          <!-- <p class="text-center beforeFlip marginOverflow">Easy Meds Supplement Makes it Easier for Everyone To Find Affordable, Quality Health Insurance, Every day.</p> -->
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-3">
          <div class="card-flipper effect__hover" data-id="1">
            <div class="card__front">
              <div class="card card-01">
                <div class="profile-box-01">
                
<i style="color:#4f1a52" class="fas fa-hospital-user fa fa-7x iconColor mt-4 firstRow"></i>
                </div>
                <div class="card-body text-center">
                  <hr />
                  <h4 class="card-title iconCollor fw-bolder">Free of Cost Services/Free Services</h4>
                </div>
              </div>
            </div>

            <div class="card__back">
              <div class="card card-01">
                <div class="card-body text-center">
                  <p class="card-text">
                  We can assist you in finding great health insurance plan for your needs and budget at no extra cost, saving you time and money.
                  </p>
                  <div
                    class="d-flex justify-content-center align-items-center flex-row flex-wrap align-content-center"
                  >
                    <button class="backCardBtn " style="background-color:#4f1a52; height: 50px; width: 90px; border-radius: 10px; border: none;" >
                      <a href="" class="text-white text-decoration-none">1st btn</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-flipper effect__hover" data-id="1">
            <div class="card__front">
              <div class="card card-01">
                <div class="profile-box-01">
<i style="color:#4f1a52" class="fas fa-hand-holding-medical fa fa-7x iconColor mt-4 firstRow"></i>
                </div>
                <div class="card-body text-center">
                  <hr />
                  <h4 class="card-title iconCollor fw-bolder">	All You Need At One Place</h4>
                </div>
              </div>
            </div>

            <div class="card__back">
              <div class="card card-01">
                <div class="card-body text-center">
                  <p class="card-text">
                   Use one-stop shopping to compare rates from dozens of insurance companies for all of your health and financial protection needs.
                  </p>
                  <div
                    class="d-flex justify-content-center align-items-center flex-row flex-wrap align-content-center"
                  >
                    <button class="backCardBtn "  style="background-color:#4f1a52; height: 50px; width: 90px; border-radius: 10px; border: none;" >
                      <a href="" class="text-white text-decoration-none" >1st btn</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-flipper effect__hover" data-id="1">
            <div class="card__front">
              <div class="card card-01">
                <div class="profile-box-01">
<i style="color:#4f1a52" class="fas fa-plus fa fa-7x iconColor mt-4 firstRow"></i>
                </div>
                <div class="card-body text-center">
                  <hr />
                  <h4 class="card-title iconCollor fw-bolder">Streamlined Enrollment Process </h4>
                </div>
              </div>
            </div>

            <div class="card__back">
              <div class="card card-01">
                <div class="card-body text-center">
                  <p class="card-text iconP">
Once you've chosen a plan, our secure online enrollment will lead you through each stage of the process, getting you on your way to better Medicare Supplement benefits.

                  </p>
                  <div
                    class="d-flex justify-content-center align-items-center flex-row flex-wrap align-content-center"
                  >
                    <button class="backCardBtn"  style="background-color:#4f1a52; height: 50px; width: 90px; border-radius: 10px; border: none;" >
                      <a href="" class="text-white text-decoration-none">1st btn</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card-flipper effect__hover" data-id="1">
            <div class="card__front">
              <div class="card card-01">
                <div class="profile-box-01">
<i style="color:#4f1a52" class="fas fa-pills fa fa-7x iconColor mt-4 firstRow"></i>
                </div>
                <div class="card-body text-center">
                  <hr />
                  <h4 class="card-title iconCollor fw-bolder">Expert Insight</h4>
                </div>
              </div>
            </div>

            <div class="card__back">
              <div class="card card-01">
                <div class="card-body text-center">
                  <p class="card-text iconP">
With the support of our Medicare experience, you can make more informed decisions.
                  </p>
                  <div
                    class="d-flex justify-content-center align-items-center flex-row flex-wrap align-content-center"
                  >
                    <button class="backCardBtn"  style="background-color:#4f1a52; height: 50px; width: 90px; border-radius: 10px; border: none;" >
                      <a href="" class="text-white text-decoration-none">1st btn</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  <!-- End -->
  <!-- End App Features Section -->






  <!-- ======= Details Section ======= -->
  <div id="details" class="details" style="">
    <div class="container">

      <div class="row content d-flex justify-content-center align-items-center">
        <div class="col-md-4" data-aos="fade-right">
          <img src="assets/img/about_section.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-4" data-aos="fade-up">
          <h3 style="color:#4f1a52;">Your Guided Journey to Medicare Supplement!</h3>
          
          <p style="font-weight:700;">Protection Against Excessive Medical Bills.</p>
          <p>
            Medicare Supplement plans offer protection by covering the "gaps" left by Medicare, such as deductibles and co-pays.
          </p>
          <p style="font-weight:700;">Coverage on the Go</p>
          <p>
            Medicare Supplement plans are transferrable and acceptable anyplace in the United States that accepts Medicare.
          </p>
          <p style="font-weight:700;">There is no need for referrals!</p>
          <p>
            You can see any provider who offers Medicare with a Medicare Supplement plan; no prescriptions or referrels are required!</p>
        </div>
      </div>
    </div>
  </div>

 
  <!-- Blog Section -->
    <!-- <div class="container mt-3 mb-3">
      <h2 style="color:#4f1a52; font-size:35px;" class="text-center mt-2 mb-2">Our Blogs</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card blogStyle" style="">
            <img src="./assets/img/blog/blog-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p style="text-align: center;"><a style=" background-color:#4f1a52; border:none;" href="#" class="btn btn-primary">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card blogStyle" style="">
            <img src="./assets/img/blog/blog-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p style="text-align: center;"><a style=" background-color:#4f1a52; border:none;" href="#" class="btn btn-primary">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card blogStyle" style="">
            <img src="./assets/img/blog/blog-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <p style="text-align: center;"><a style=" background-color:#4f1a52; border:none;" href="#" class="btn btn-primary">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div> -->

<!-- new -->
        <!--
Start Call To Action
==================================== -->
<div class="container-fluid">
      <section class="call-to-action section extraCallToActionSection">
              <h3 class="text-center fw-bolder" style="color:#4f1a52 ;">Request A Free Quote</h3>
              <p class="text-dark text-center">We make this simple to select a plan that fits your budget and needs.</p>
              <div class="d-flex justify-content-center align-items-center">
              <button class="btnStyle mt-4" style="background-color: #4f1a52; border: none; width: 130px ; height:50px ; border-radius: 20px;"  >
                <a href="tel:+18889890079" class="text-white text-decoration-none"  >Call To Action</a>
              </button>
              </div>
        <!-- End container -->
      </section>
    </div>
      <!-- End section -->
  
        
        <!----------------------------our Services----------------------->
        <div class="d-flex justify-content-center align-items-center flex-column flex-wrap mt-4  " style="background-color:#4f1a52; border-radius: 15px;" >
          <h2 class="mt-3 text-white">Get Coverage Your Way</h2>
          <p class="text-white">We go all out to get you a great rate. After you've acquired your options, you'll be able to get considerably more than low-cost!</p>
          <div class="container row d-flex mt-4">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="row mt-3">
                <div class="col-sm-12 col-lg-3 col-xs-12 col-md-12 text-center mt-1"><i class="fas fa-quote-left fa-3x text-white"></i></div>
                <div class="col-sm-12 col-lg-9 col-xs-12 d-flex justify-content-center align-items-center flex-column col-md-12 flex-wrap">
                  <h4 class="text-center text-white">FREE to Use</h4>
                  <p class="text-center text-white">Getting a quote is free, and there is no obligation to enroll!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-sm-12 col-lg-3 col-xs-12  col-md-12 text-center mt-1"><i class="fas fa-meteor fa-3x text-white"></i></div>
                <div class="col-sm-12 col-lg-9 col-xs-12 d-flex justify-content-center align-items-center flex-column col-md-12 flex-wrap">
                  <h4 class="text-center text-white">We make it faster.</h4>
                  <p class="text-center text-white">In a matter of minutes, you can compare your Medicare options.</p>
                </div>
              </div>
            </div>
            
          </div>
           <div class="container row d-flex mt-5">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-sm-12 col-lg-3 col-xs-12 col-md-12 text-center mt-1"><i class="fas fa-check-double fa-3x text-white"></i></div>
                <div class="col-sm-12 col-lg-9 col-xs-12 d-flex justify-content-center align-items-center flex-column col-md-12 flex-wrap">
                  <h4 class="text-center text-white">Best Possible Recommendation</h4>
                  <p class="text-center text-white">We suggest no less than the best plan for you based on your location, income, and other considerations.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                <div class="col-sm-12 col-lg-3 col-xs-12 col-md-12 text-center mt-1"><i class="fa fa-phone fa-3x text-white" aria-hidden="true"></i></div>
                <div class="col-sm-12 col-lg-9 col-xs-12 d-flex justify-content-center align-items-center flex-column col-md-12 flex-wrap mb-4">
                  <h4 class="text-center text-white">Talk to our licensed expert</h4>
                  <p class="text-center text-white">Our licensed insurance agents will assist you in finding a plan that best meets both your financial and medical needs.
    </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <!----------------------------End Our Services-------------------->


<section class="blog blogWholeStyle mt-4 mb-4" id="blog" style="background-color: #f2f5fa;">
  <div class="container">
    <div class="row">
      <!-- section title -->
      <div class="col-12 ">
        <div class="title text-center">
          <h2 class="latestPost firstRow fw-bolder" style="color:#4f1a52;">Our <span class="color fw-bolder firstRow latestPost" style="color:#4f1a52;">Blogs</span></h2>
          <div
            class="container d-flex justify-content-center flex-row align-items-center"
          > 
            <hr class="borderBottom"/>
          </div>
          <p>
            Easy Meds Supplement Frequently Covers a Wide Range of Topics in Response to Our Customers' Specific Queries. Depending on Your Niche,  Our Blog Posts Offer in-depth Insights, Perspectives, & Experiences.
          </p>
        </div>
      </div>
      <!-- /section title -->
      <!-- single blog post -->
      <article class="col-md-6 col-sm-6 col-xs-12 clearfix col-lg-4">
        <div class="post-item blogStyle">
          <div class="media-wrapper">
            <img
              src="./assets/img/blog/blog-1.jpg"
              alt="amazing caves coverimage"
              class="img-fluid"
            />
          </div>

          <div class="content">
            <h3 class="blogTitle text-center">
              <a href="./u-turn.html" class="blogTitle text-decoration-none" style="color:#4f1a52;">Lorem ipsum the text wher  ca</a>
            </h3>
            <p class="pCenter">
              Anim pariatur cliche reprehenderit, enim eiusmod high life
              accusamus terry richardson ad squid. 3 wolf moon officia
              aute, non skateboard dolor brunch.
            </p>
            <div class="d-flex justify-content-center align-items-center flex-row">
            <a style="background-color:#4f1a52; border:none;" class="btn btn-main blogBtn btnStyle btn-primary text-white mb-2" href="./firstBlog.php"
              >Read more</a
            >
            </div>
          </div>
        </div>
      </article>
      <!-- /single blog post -->

      <!-- single blog post -->
      <article class="col-md-6 col-sm-6 col-xs-12 clearfix col-lg-4">
        <div class="post-item blogStyle">
          <div class="media-wrapper">
            <img
              src="./assets/img/blog/blog-02.jpg"
              alt="amazing caves coverimage"
              class="img-fluid"
            />
          </div>

          <div class="content">
            <h3 class="blogTitle text-center">
              <a href="single-post.html" class="blogTitle text-decoration-none" style="color:#4f1a52;">Reasons to Smile</a>
            </h3>
            <p class="pCenter">
              Anim pariatur cliche reprehenderit, enim eiusmod high life
              accusamus terry richardson ad squid. 3 wolf moon officia
              aute, non skateboard dolor brunch.
            </p>
            <div class="d-flex justify-content-center align-items-center flex-row">
            <a style="background-color:#4f1a52; border:none;" class="btn btn-main blogBtn btnStyle text-white btn-primary mb-2" href="secondBlog.php"
              >Read more</a
            >
            </div>
          </div>
        </div>
      </article>
      <!-- end single blog post -->

      <!-- single blog post -->
      <article class="col-md-12 col-sm-6 col-xs-12 clearfix col-lg-4">
        <div class="post-item blogStyle">
          <div class="media-wrapper">
            <img
              src="./assets/img/blog/blog-03.jpg"
              alt="amazing caves coverimage"
              class="img-fluid"
            />
          </div>

          <div class="content">
            <h3 class="blogTitle text-center">
              <a href="single-post.html" class="blogTitle text-decoration-none" style="color:#4f1a52;">Reasons to Smile</a>
            </h3>
            <p class="pCenter">
              Anim pariatur cliche reprehenderit, enim eiusmod high life
              accusamus terry richardson ad squid. 3 wolf moon officia
              aute, non skateboard dolor brunch.
            </p>
            <div class="d-flex justify-content-center align-items-center flex-row">
            <a class="btn btn-main blogBtn ExternalBlogBtn btnStyle text-white btn-primary mb-2" style="background-color:#4f1a52; border:none;" href="thirdBlog.php" class="blogTitle"
              >Read more</a
            >
            </div>
          </div>
        </div>
      </article>
      <!-- end single blog post -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end section -->

<!-- end -->

  <!-- End Blog Section -->

  <!-- End Details Section -->
  <!-- ======= Testimonials Section ======= -->
  <!-- <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 style="color:#4f1a52;">Testimonials</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor
                labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim
                dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section> -->
  <!-- for mobile -->

  <div class="container brandCarouselSection d-md-none d-lg-none d-xl-none d-sm-block d-block h-50" style="height:20vh; margin-top:20px;">
    <div class="section-title">
      <h2 class="blogTitle fw-bolder " style="margin-bottom:-30px;">Testimonials</h2>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex flex-row" style="margin-top:30px;">
                
                <div class="col-md-4">
                 
                </div>
                <div class="col-md-4 text-center">
                  <div>
                  <img src="./assets/img/testimonials/testi1.jpg" style="border-radius: 50%; margin-left:-60px;" class="img-fluid" height="200px" width="150px" alt="">
                </div>
                  <span class="iconS">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                  </span>
                  <p class="fontStyle">
                      Excellent Services! The agent was super polite and assisted us throughout the process of selecting the best plan for myself and my husband. She has been a huge help to both of us.
                  </p>
                  <div
                    class="d-flex-justify-content-center align-items-center flex-column"
                  >
                    
                    <p class="authorProfileName">Samantha Arias.</p>
                  </div>
                </div>
                <div class="col-md-4">
                    
                </div>
                
                <div class="col-md-1"></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex flex-row" style="margin-top:30px;">
                
              <div class="col-md-4">
               
              </div>
              <div class="col-md-4 text-center">
                <div>
                <img src="./assets/img/testimonials/testi3.jpg" style="border-radius: 50%; margin-left:-30px; margin-bottom:-30px; margin-top:-30px;" class="img-fluid" height="200px" width="200px" alt="">
              </div>
                <span class="iconS">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                </span>
                <p class="fontStyle">
                    Excellent Services! The agent was super polite and assisted us throughout the process of selecting the best plan for myself and my husband. She has been a huge help to both of us.
                </p>
                <div
                  class="d-flex-justify-content-center align-items-center flex-column"
                >
                  
                  <p class="authorProfileName">Samantha Arias.</p>
                </div>
              </div>
              <div class="col-md-4">
                  
              </div>
              
              <div class="col-md-1"></div>
          </div>   
          </div>
          <div class="carousel-item">
            <div class="d-flex flex-row" style="margin-top:30px;">
                
              <div class="col-md-4">
               
              </div>
              <div class="col-md-4 text-center">
                <div>
                <img src="./assets/img/testimonials/testi7.png" style="border-radius: 50%; margin-left:-50px;" class="img-fluid" height="200px" width="200px" alt="">
              </div>
                <span class="iconS">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                </span>
                <p class="fontStyle">
                    Excellent Services! The agent was super polite and assisted us throughout the process of selecting the best plan for myself and my husband. She has been a huge help to both of us.
                </p>
                <div
                  class="d-flex-justify-content-center align-items-center flex-column"
                >
                  
                  <p class="authorProfileName">Samantha Arias.</p>
                </div>
              </div>
              <div class="col-md-4">
                  
              </div>
              
              <div class="col-md-1"></div>
          </div>   
          </div>

        </div>
      </div>
</div>

  <!-- end -->

  <div class="container d-sm-none d-none d-md-block d-lg-block d-xl-block" data-aos="fade-up">
    <div class="section-title">
      <h2 class="blogTitle fw-bolder" style="color:#4f1a52;">Testimonials</h2>
      <p>
We feel ourselves extremely fortunate to have formed outstanding relationships with our clients. And we've established more than simply working relationships with them; let's see what they think of us.
      </p>
    </div>
    <div class="row">
      <div
        class="col-xs-12 col-md-6 col-lg-4 firstTest d-flex justify-content-center align-items-center flex-column"
      >
        <!-- <div
          class="d-flex justify-content-center align-items-center flex-column"
        > -->
        <span class="iconS">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
        </span>
        <p class="fontStyle">
            Excellent Services! The agent was super polite and assisted us throughout the process of selecting the best plan for myself and my husband. She has been a huge help to both of us.
        </p>
        <div
          class="d-flex-justify-content-center align-items-center flex-column"
        >
          <img
            src="./assets/img/testimonials/testi7.png"
            class="img-fluid testImg"
            alt=""
          />
          <p class="authorProfileName">Samantha Arias.</p>
        </div>

        <!-- </div> -->
      </div>
      <div
        class="col-xs-12 col-md-6 col-lg-4 firstTest d-flex justify-content-center align-items-center flex-column"
      >
        <!-- <div
          class="d-flex justify-content-center align-items-center flex-column"
        > -->
        <span class="iconS">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star "></i>
          <i class="fas fa-star"></i>
        </span>
        <p class="fontStyle">
            Previously, the whole Medicare thing was extremely confusing to me, but the agent’s assistance was immensely beneficial in sorting out my Medigap options. I am highly impressed by her efforts.

        </p>
        <div
          class="d-flex-justify-content-center align-items-center flex-column"
        >
          <img
            src="./assets/img/testimonials/testi1.jpg"
            class="img-fluid secondImg"
            alt=""
          />
          <p class="authorProfileName">Chyler Cassidy</p>
        </div>

        <!-- </div> -->
      </div>
      <div
        class="col-xs-12 col-md-6 col-lg-4 firstTest d-flex justify-content-center align-items-center flex-column position-relative"
      >
        <!-- <div
          class="d-flex justify-content-center align-items-center flex-column"
        > -->
        <span class="iconS">
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star text-warning"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </span>
        <p class="fontStyle">
        The agent was quite useful in getting me signed up for Medicare supplement and Part D coverage. It comes highly recommended. She was available to answer any questions I had.

        </p>
        <div
          class="d-flex-justify-content-center align-items-center flex-column"
        >
          <img
            src="./assets/img/testimonials/testi3.jpg"
            class="img-fluid thirdImg"
            alt=""
          />
          <p class="authorProfileName">Franklin Brooke</p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials Section -->

 

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">

        <h2 style="color:#4f1a52;" class="fw-bold" >Frequently Asked Questions</h2>
        <p>After assessing your concerns, Easy Meds Supplement Customer Service try to respond to your queries. Every day, we receive a plethora of queries, and our aim is to provide you with one of the most relevant answer to your query as soon as possible</p>
      </div>

      <div class="accordion-list">
        <ul>
          <li data-aos="fade-up">
            <i class="bx bx-help-circle icon-help" style="color:#4F1A52;"></i> <a data-bs-toggle="collapse" class="collapse"
              data-bs-target="#accordion-list-1" style="color: #4F1A52;">How do I know if I am eligible for Medicare Supplement Insurance? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">

             <p >  <i class="fas fa-check " style="color: #4F1A52;"  ></i> 
              You must be enrolled in both Medicare Parts A and</p>
              <p >  <i class="fas fa-check " style="color: #4F1A52;"  ></i> 
                You should be at least 65 years old or reside in a state that offers Medigap coverage for individuals under 65 with end-stage renal disease or a qualifying disability. </p>
              
                <p >  <i class="fas fa-check " style="color: #4F1A52;"  ></i> 
                  You should be at least 65 years old or reside in a state that offers Medigap coverage for individuals under 65 with end-stage renal disease or a qualifying disability. </p>
              
                  <p >  <i class="fas fa-check " style="color: #4F1A52;"  ></i> 
                    Not every plan is offered in every state.</p>
              
                      

            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help" style="color:#4F1A52;"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
              class="collapsed" style="color:#4F1A52;">What if I move to a different state or spend a chunk of the year for the another location? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
              <p >  <i class="fas fa-check " style="color: #4F1A52;"  ></i> 
                If you migrate to a different state or take a seasonal trip, your Medigap plan will normally accompany you, although that plan is not available in the new state. It's an advisable to check with your insurance agent to ensure that your Medigap coverage will follow you wherever you go.
               </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <i class="bx bx-help-circle icon-help"  style="color:#4F1A52 ;"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
              class="collapsed" style="color: #4f1a52;">Dolor sit amet consectetur adipiscing elit? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
              <p >  <i class="fas fa-check " style="color: #4F1A52;"  ></i> 
                No, Medicare Supplement is intended to fill "gaps" in Medicare Plans like Part A which includes hospital and skilled care facility care and Part B which covers doctor bills and other medical expenses. Prescription drug coverage is available through a separate Medicare Part D Prescription Drug Plan.</p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <i class="bx bx-help-circle icon-help "  style="color: #4F1A52;"  ></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4"
              class="collapsed"  style="color: #4F1A52;"  >Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i
                class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
              <p >  <i class="fas fa-check " style="color: #4F1A52;"  ></i> 
                A Medicare Supplement Insurance policy can only be utilized in addition to Original Medicare (Part A and Part B). If you are enrolled in a Medicare Advantage plan and want to enroll in a Medicare Supplement Insurance plan, you must terminate your Medicare Advantage plan first.</p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <i class="bx bx-help-circle icon-help "  style="color: #4F1A52;"  ></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5"
              class="collapsed"  style="color: #4F1A52;"  >Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem
              dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">

              <p >  <i class="fas fa-check " style="color: #4F1A52;"  ></i> 
                Make contact with a licensed agent. Because plan rates and availability vary from one insurance company to the next, comparing offerings from numerous insurance providers in your area is the best approach to shop for a plan. Once you reach the age of eligibility, the best way to accomplish this is to have an agent give you with a variety of plan alternatives and pricing quotes.</p>

            </div>
          </li>

        </ul>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->

  <div class="container-fluid">
    <section class="call-to-action section extraCallToActionSection">
            <h3 class="text-center fw-bolder" style="color:#4f1a52 ;">Get help from an agent</h3>
            <p class="text-dark text-center">There's a lot to learn about Medicare We can assist you get through it.</p>
            <div class="d-flex justify-content-center align-items-center">
            <button class="btnStyle mt-4" style="background-color: #4f1a52; border: none; width: 130px ; height:50px ; border-radius: 20px;"  >
              <a href="tel:+18889890079" class="text-white text-decoration-none"  >Get Quote</a>
            </button>
            </div>
      <!-- End container -->
    </section>
  </div>
    <!-- End section -->

 
  <!-- ======= Contact Section ======= -->
  <!-- <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2 style="color:#4f1a52;">Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-6 info">
              <i class="bx bx-map"></i>
              <h4>Address</h4>
              <p>A108 Adam Street,<br>New York, NY 535022</p>
            </div>
            <div class="col-lg-6 info">
              <i class="bx bx-phone"></i>
              <h4>Call Us</h4>
              <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
            </div>
            <div class="col-lg-6 info">
              <i class="bx bx-envelope"></i>
              <h4>Email Us</h4>
              <p>contact@example.com<br>info@example.com</p>
            </div>
            <div class="col-lg-6 info">
              <i class="bx bx-time-five"></i>
              <h4>Working Hours</h4>
              <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
            <div class="form-group">
              <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group mt-3">
              <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="form-group mt-3">
              <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section> -->
  <!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include "footer.html"; ?>