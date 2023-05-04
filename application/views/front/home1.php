
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Card Slider</title>

    <!-- Swiper CSS -->     
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/swiper-bundle.min.css?>" />
     <!-- css link -->
    <link rel = "stylesheet" type = "text/css"  href ="<?php echo base_url(); ?>assets/css/style.css">
      <!-- js link -->
      <script type = 'text/javascript' src = "<?php echo base_url();?>assets/js/script.js"></script>
      
    <style>
 
.slide-container {
  margin: 0 30px;
  overflow: hidden;
}
.card {
  background: #fff;
  border-radius: 8px;
}
.card .image-box {
  height: 200px;
}
.card .image-box img {
  width: 100%;
  height: 100%;
  border-radius: 8px 8px 0 0;
}
.card .profile-details {
  display: flex;
  align-items: center;
  column-gap: 12px;
  padding: 15px;
}
.card .profile-details img {
  height: 40px;
  width: 40px;
  border-radius: 50%;
}
.profile-details .name {
  font-size: 15px;
  font-weight: 500;
}
.profile-details .job {
  font-size: 12px;
  font-weight: 500;
  color: #4d4d4d;
}

.swiper-navBtn {
  color: #000;
  height: 40px;
  width: 40px;
  background: #fff;
  border-radius: 50%;
}
.swiper-navBtn::before,
.swiper-navBtn::after {
  font-size: 18px;
}

.swiper-pagination-bullet {
  background-color: #000;
}

@media screen and (max-width: 768px) {
  .swiper-navBtn {
    display: none;
  }
}


    </style>
  </head>






















  <body>


  





  
   <div class="container swiper">
      <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="<?php echo base_url();?>assets/images/bike1.png" alt="" />
            </div>
            <div class="profile-details">
              <img src="<?php echo base_url();?>assets/images/profile/profile1.jpg" alt="" />
              <div class="name-job">
                <h3 class="name">David Cardlos</h3>
                <h4 class="job">Full Stack Developer</h4>
              </div>
            </div>
          </div>
          <!-- <div class="card swiper-slide">
            <div class="image-box">
              <img src="<?php echo base_url();?>assets/images/bike2.png" alt="" />
            </div>
            <div class="profile-details">
              <img src="<?php echo base_url();?>assets/images/profile/profile2.jpg" alt="" />
              <div class="name-job">
                <h3 class="name">Siliana Ramis</h3>
                <h4 class="job">Photographer</h4>
              </div>
            </div>
          </div> -->
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="<?php echo base_url();?>assets/images/bike3.png" alt="" />
            </div>
            <div class="profile-details">
              <img src="<?php echo base_url();?>assets/images/profile/profile3.jpg" alt="" />
              <div class="name-job">
                <h3 class="name">Richard Bond</h3>
                <h4 class="job">Data Analyst</h4>
              </div>
            </div>
          </div>
          <!-- <div class="card swiper-slide">
            <div class="image-box">
              <img src="<?php echo base_url();?>assets/images/bike1.png" alt="" />
            </div>
            <div class="profile-details">
              <img src="<?php echo base_url();?>assets/images/profile/profile4.jpg" alt="" />
              <div class="name-job">
                <h3 class="name">Priase</h3>
                <h4 class="job">App Developer</h4>
              </div>
            </div>
          </div> -->
          <div class="card swiper-slide">
            <div class="image-box">
              <img src="<?php echo base_url();?>assets/images/bike2.png" alt="" />
            </div>
            <div class="profile-details">
              <img src="<?php echo base_url();?>assets/images/profile/profile5.jpg" alt="" />
              <div class="name-job">
                <h3 class="name">James Laze</h3>
                <h4 class="job">Blogger</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>

    <script src="<?php echo base_url();?>assets/js/swiper-bundle.min.js"></script>
    <script src=" <?php echo base_url();?>assets/js/script.js">
    </script>
    <script>
      var swiper = new Swiper(".slide-container", {
  slidesPerView: 3,
  spaceBetween: 30,
  sliderPerGroup: 3,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
    // 1000: {
    //   slidesPerView: 4,
    // },
  },
});
    </script>
  </body>
</html>
