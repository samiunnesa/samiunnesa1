<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <?php wp_head(); ?>
</head>
<body>
<!-- header part start -->
<header class="cont">
  <div class="row topbar">
    <div class="col-lg-6 topbar_left">
      <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
    </div>
    <div class="col-lg-6 topbar_right d-flex justify-content-end">
      <p>১৩ অগ্রহায়ণ, ১৪২৯  |</p>
      <a href="">English</a>
    </div>
  </div>
</header>
<!-- header part end -->
<!-- logo part start -->
<section class="cont">
  <div class="row logo">
   <div class="col-lg-5 logo_left">
    <a href="">
      <?php the_custom_logo(); ?>
      <img src="./assets/images/header/logo_bn.png"></a>
   </div>
   <div class="col-lg-5 logo_search">
    <input type="text" placeholder="খুঁজুন ">
    <button>অনুসন্ধান</button>
   </div>
   <div class="col-lg-2 logo_right d-flex">
    <div class="logo_right_1">
      <a href=""><img src="./assets/images/header/a2i-logo-footer.png" alt=""></a>
    </div>
    <div class="logo_right_2">
      <p>সাথে থাকুন:</p>
      <a href=""><img src="./assets/images/header/facebook-icon.png" alt=""></a>
      <a href=""><img src="./assets/images/header/twitter-blue-icon.png" alt=""></a>
      <a href=""><img src="./assets/images/header/youtube-icon.png" alt=""></a>
      <a href=""><img src="./assets/images/header/gplus-icon.png" alt=""></a>
    </div>
   </div>
  </div>
</section>
<!-- logo part end -->
<!-- menu part start -->
<section class="cont">
  <div class="row main_menu">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">হোম</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">বাংলাদেশ সম্পর্কিত</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">ই-সেবাসমূহ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">সেবাখাত</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">ব্যবসা-বাণিজ্য</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"> বৈদেশিক বিনিয়োগ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">আইন-বিধি</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">তথ্য বাতায়ন</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">সেবাকুঞ্জ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">ফরমস</a>
            </li>
            
            
            
          </ul>
          
        </div>
      </div>
    </nav>
  </div>
</section>
<!-- menu part end -->
<!-- hero part start -->
<section class="cont">
  <div class="row hero">
    <!-- banner part start -->
    <div class="col-lg-8 hero_main">
      <div class="banner">
        <a href="">
          <?php dynamic_sidebar('banner'); ?>
        <img src="./assets/images/header/padmabanner.jpg" class="d-block w-100" alt="">
      </a>
      </div>
    <!-- banner part end -->
    <!-- slider part start -->
   <div class="row slider ">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/images/slider/0.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="./assets/images/slider/4-02.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="./assets/images/slider/banner-renew-your-passport.png" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="./assets/images/slider/corona_banner.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="./assets/images/slider/myGov Static2(1) (1).jpg" class="d-block w-100" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
   </div>
    <!-- slider part end -->
    <!-- tab part start -->
    <div class="row tab">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">জনপ্রিয় সেবা</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">নতুন সেবা</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">মোবাইল সেবা</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>দপ্তর ভিত্তিক সেবা</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
          <div class="row">
            <div class="col-lg-2">
              <a href=""><img src="./assets/images/tab/agriculture.png" alt=""></a>
              <p> কৃষি</p>
            </div>
            <div class="col-lg-2">
              <a href=""><img src="./assets/images/tab/call_center.png" alt=""></a>
              <p>কল সেন্টার </p>
            </div>
            <div class="col-lg-2">
              <a href=""><img src="./assets/images/tab/helpdesk.png" alt=""></a>
              <p>  মোবাইল সেবা</p>
            </div>
            <div class="col-lg-2">
              <a href=""><img src="./assets/images/tab/mobile_service.png" alt=""></a>
              <p> হেল্পডেস্ক</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
      </div>
    </div>
  </div>
    <!-- tab part end -->
    
   <!-- sidebar part start -->
   <div class="col-lg-4 sidebar">
    <div class="row sidebar_images">
      <a href="">
        <?php dynamic_sidebar('sideimg'); ?>
        <img src="./assets/images/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100" alt="">
      </a>
     
    </div>
    
    
       <h4>সকল বাতায়ন</h4>
       <form action="">
        <select name="" id="">
          
          <option value="">চট্টগ্রাম বিভাগ</option>
          <option value="">রাজশাহী বিভাগ</option>
          <option value="">সিলেট বিভাগ</option>
          <option value="">খুলনা বিভাগ</option>
        </select>
        
    <button>চলুন</button>
       </form>
       <div class="row sidebar_videos">
        <h5>মুজিব১০০ আ্যাপ</h5>
        <?php dynamic_sidebar('sidevideo') ?>
        <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       
    </div>
   </div>
   <!-- sidebar part end -->
  </div>
</section>
<!-- hero part end -->
<!-- list part start -->

<section class="cont">
  <div class="row list">
    <h4>উদ্যোগ</h4>
    <a href="">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
    <a href="">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা। (১১-০৪-২০১৫)</a>
    <a href="">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। (০৭-০৪-২০১৫)</a>
    <a href="">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)।</a>
    <a href="">দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫।</a>
  </div>
</section>
<!-- list part end -->
<!-- footer part start -->
<footer class="cont">
  <div class="footer_main">
  <?php dynamic_sidebar('footermain') ?>
      <img src="./assets/images/footer/download.png" alt="">
    </div>
    <div class="row footer_bottom">
        <div class="col-lg-8 fb_left">
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">ব্যবহারের শর্তাবলি</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">সার্বিক সহযোগিতায়</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">সাইট ম্যাপ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">সচরাচর জিজ্ঞাসা</a>
                  </li>
                  
                  </ul>
                
              </div>
            </div>
          </nav>
          <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
        </div>
        <div class="col-lg-4 fb_right text-end">
          <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
          <img src="./assets/images/footer/np-logo-set.png" alt="">
        </div>
    </div>
  </div>
</footer>
<!-- footer part end -->
<?php wp_footer(); ?>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>