<!DOCTYPE html>
<html lang="en">
<head>
  <title><? echo $this->title;?> </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="My Info Website" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link href="<?php echo USER_ASSETS;?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="<?php echo USER_ASSETS;?>css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo USER_ASSETS;?>css/lightbox.css" type="text/css" media="all" /><!--gallery-popup-css-->
  <link href="<?php echo USER_ASSETS;?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /><!-- Pop-up -->
  <link href="<?php echo USER_ASSETS;?>css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
  <!-- banner -->
  <div class="banner" id="home" >
    <div class="header">
      <div class="w3_agile_logo">
        <h1><a href="<?php echo URL;?>home">My Info<span>WHO IAM</span></a></h1>
      </div>
      <div class="w3_menu">
        <div class="mobile-nav-button">
          <div class="mobile-nav-button__line"></div>
          <div class="mobile-nav-button__line"></div>
          <div class="mobile-nav-button__line"></div>
        </div>
        <nav class="mobile-menu">
          <ul>
            <li><a href="#home" class="active scroll" >Home</a></li>
            <li><a href="#about" class="scroll" >About</a></li>
            <li><a href="#skills" class="scroll" >Skills</a></li>
            <li><a href="#work" class="scroll" >Education</a></li>
          </ul>
          <div class="clearfix"></div>
          <!-- <div class="search-agileits">
          <form action="#" method="post">
          <input type="search" name="Search" placeholder=" " required="">
          <input type="submit" value="Search">
        </form>
      </div> -->
    </nav>
  </div>
  <div class="clearfix"> </div>
</div>
<div class="agile_banner_info">
  <?php foreach ($this->infos as $info) { ?>
    <h2><span>HI! I'm</span> <? echo $info["fullname"];?></h2>
    <div id="typed-strings" class="agileits_w3layouts_strings">
      <p>LEAD <i>DEVELOPER.</i></p>
      <p>LEAD <i>UI/UX DESIGNER.</i></p>
      <p>LEAD <i>WEB DEVELOPER</i></p>
    </div>
    <span id="typed" style="white-space:pre;"></span>
    <p class="banner-p-w3ls"><? echo $info["summary"];?></p>
  </div>
  <div class="w3_agileits_social_media">
    <ul>
      <li><a href="https://facebook.com/waliy.ayomide" target="_blank" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
      <li><a href="https://github.com/ayomideadekunle" target="_blank" class="wthree_github"><i class="fa fa-github" aria-hidden="true"></i></a></li>
      <li><a href="https://bitbucket.org/dekunle" target="_blank" class="wthree_bitbucket"><i class="fa fa-bitbucket" aria-hidden="true"></i></a></li>
    </ul>
  </div>
  <div class="banner-image-w3layouts">
    <img src="<? echo URL.$info["pix"];?>" alt=" " class="img-responsive" />
  </div>
</div>
<!-- //banner -->
<!-- about -->
<div class="about" id="about">
  <div class="col-md-6 about-left-w3ls">
    <h5>Follow <br>me on <br><span>twitter</span><i class="fa fa-twitter" aria-hidden="true"></i></h5>
  </div>
  <div class="col-md-6 person-info-agileits-w3layouts">
    <h3 class="w3_head w3_head1">About Me <span>I am <? echo $info["fullname"];?></span></h3>
    <p><span>Hi!, I am <? echo $info["fullname"];?></span>  <? echo $info["objective"];?></p>
    <ul>
      <li><span>Name</span>: <? echo $info["fullname"];?></li>
      <li><span>Age</span>: <?php
      $birthDate = $info["age"];
      $birthDate = explode("/", $birthDate);
      //get age from date or birthdate
      $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
      ? ((date("Y") - $birthDate[2]) - 1)
      : (date("Y") - $birthDate[2]));  echo $age . "Years"; ?></li>
      <li><span>Experience</span>: +<? echo $info["experience"];?> Years</li>
      <li><span>Email</span>: <a href="mailto:<? echo $info["email"];?>"><? echo $info["email"];?></a></li>
      <li><span>Phone</span>: <? echo $info["phone"];?></li>
      <li><span>Website</span>: <a href="<? echo $info["webiste"];?>"><? echo $info["website"];?></a></li>
      <li><span>Address</span>: <? echo $info["address"];?></li>
      <li><a href="<? echo URL.$info["cv"];?>" class="botton-w3ls">Download CV</a>
        <a href="#small-dialog" class="play-icon popup-with-zoom-anim botton-w3ls">Watch my video</a>
      </li>
    </ul>
  </div>
  <div class="clearfix"></div>
</div>
<!-- //about-bottom -->

<div id="small-dialog" class="mfp-hide w3ls_small_dialog wthree_pop">
  <div class="agileits_modal_body">
    <iframe src="https://player.vimeo.com/video/18417202"></iframe>
  </div>
</div>
<!-- mid -->
<section class="mid-w3layouts">
  <div class="container">
    <h6>I am available for freelance projects.</h6>
    <h3>Let's <span>work</span> together indeed!</h3>
    <!-- <a href="#contact" class="scroll">Get quotes</a> -->
  </div>
</section>
<?php } ?>
<!-- //mid -->
<!--skills -->
<div class="skills-agileinfo" id="skills">
  <div class="container">
    <h3 class="w3_head w3_head1 white-agile">My Skills <span>My special expertise</span></h3>
    <div class="modal-spa">
      <div class="skills">
        <div class="col-md-6 bar-grids bargrids-left">
          <h4><span class="glyphicon glyphicon-cog"></span> Technical Skills </h4>
          <?php foreach ($this->technicalskills as $techskill) { ?>
            <h6><? echo $techskill["name"];?>  <span> <?php $random = rand(80, 95); echo $random . "%";?> </span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" style="width: 80%">
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="col-md-6 bar-grids  w3-agile">
          <h4><span class="glyphicon glyphicon-briefcase"></span> Professional Skills </h4>
          <?php foreach ($this->profskills as $profskill) { ?>
            <h6><? echo $profskill["name"]; ?><span> <?php $random = rand(85, 95); echo $random . "%";?> </span></h6>
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" style="width: 85%">
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</div>
<!-- //skills -->
<!-- experiences -->

<div class="work" id="work">
  <div class="container">
    <h3 class="w3_head w3_head1">experience & Education <span>More about my past</span></h3>
    <h5>Work experience</h5>
    <?php foreach ($this->work_experiences as $experience) { ?>
      <div class="work-info-agileits">
        <div class="col-md-4 work-left-agileits-w3layouts">
          <?php
          // $date = $experience["start"];
          // $convert = strtotime($date);
          // echo $convert;
          ?>
          <h6><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo $experience["start"] ." - ". $experience["end"];?></h6>
        </div>
        <div class="col-md-8 work-right-w3-agileits">
          <h3><? echo $experience["company"]; ?><span> / <? echo $experience["jobrole"]; ?></span></h3>
          <p><? echo $experience["responsibility"]; ?></p>
        </div>
        <div class="clearfix"> </div>
      </div>
    <?php } ?>
    <h5 class="work2">Education</h5>
    <?php foreach ($this->education_details as $detail) { ?>
      <div class="work-info-agileits">
        <div class="col-md-4 work-left-agileits-w3layouts">
          <h6><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <? echo $detail["start"] ." - ". $detail["end"];?></h6>
        </div>
        <div class="col-md-8 work-right-w3-agileits">
          <h3 style="text-transform: uppercase;"><? echo $detail["institution"];?></h3>
          <p><? echo $detail["qualification"];?></p>
        </div>
        <div class="clearfix"> </div>
      </div>
    <?php } ?>
  </div>
</div>
<!-- //experiences -->
<!-- services -->
<div class="services" id="classes">
  <div class="container">
    <h3 class="w3_head w3_head1">My Services <span>What I can do for you</span></h3>
  </div>
  <div class="agileits_services_grids_bottom">
    <div class="container">
      <div class="col-md-4 agileits_service_grid_btm_left">
        <div class="agileits_service_grid_btm_left1">
          <div class="agileits_service_grid_btm_left2">
            <i class="fa fa-desktop" aria-hidden="true"></i>
            <h5>web development</h5>
            <p>Maecenas sodales eu velit in varius. Phasellus vitae sem vitae urna tempus commodo.</p>
          </div>
          <img src="images/4.jpg" alt=" " class="img-responsive" />
        </div>
      </div>
      <div class="col-md-4 agileits_service_grid_btm_left">
        <div class="agileits_service_grid_btm_left1">
          <div class="agileits_service_grid_btm_left2">
            <i class="fa fa-camera-retro" aria-hidden="true"></i>
            <h5>Photography</h5>
            <p>Maecenas sodales eu velit in varius. Phasellus vitae sem vitae urna tempus commodo.</p>
          </div>
          <img src="images/5.jpg" alt=" " class="img-responsive" />
        </div>
      </div>
      <div class="col-md-4 agileits_service_grid_btm_left">
        <div class="agileits_service_grid_btm_left1">
          <div class="agileits_service_grid_btm_left2">
            <i class="fa fa-apple" aria-hidden="true"></i>
            <h5>Apps development</h5>
            <p>Maecenas sodales eu velit in varius. Phasellus vitae sem vitae urna tempus commodo.</p>
          </div>
          <img src="images/6.jpg" alt=" " class="img-responsive" />
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<!-- //services -->

<!--footer-->

<div class="contact-info">
  <div class="container">
    <div class="col-md-6 contact-grids">
      <h5>Find me</h5>
      <div class="w3_agileits_social_media-footer">
        <ul>
          <li><a href="https://facebook.com/waliy.ayomide" target="_blank" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://github.com/ayomideadekunle" class="wthree_github"><i class="fa fa-github" aria-hidden="true"></i></a></li>
          <li><a href="https://bitbucket.org/dekunle" target="_blank" class="wthree_bitbucket"><i class="fa fa-bitbucket" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-4 contact-grids contact-mid">
      <h5>Contact Info</h5>
      <?php foreach ($this->infos as $info) { ?>
        <ul>
          <li><i class="fa fa-phone" aria-hidden="true"></i><? echo $info["phone"];?></li>
          <li><i class="fa fa-map-marker" aria-hidden="true"></i><? echo $info["address"];?></li>
          <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<? echo $info["email"];?>"><? echo $info["email"];?></a></li>
        </ul>
      <?php } ?>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="copy-w3-agile">
  <p>Copyright <?php echo date("Y");?> My Info. All Rights Reserved | Design By <a href="">Raji Waliyu Adekunle</a></p>
</div>
<!--//footer-->

<!-- js -->
<script type="text/javascript" src="<?php echo USER_ASSETS;?>js/jquery-2.1.4.min.js"></script>


<!-- Navigation-JavaScript -->
<!-- menu -->
<script>
$(document).ready(function () {
  $('.mobile-nav-button').on('click', function() {
    $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
    $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");
    $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");

    $('.mobile-menu').toggleClass('mobile-menu--open');
    return false;
  });
});
</script>
<!-- //menu -->
<!-- Gallery-plugin -->
<script src="<?php echo USER_ASSETS;?>js/jquery.mobile.custom.min.js"></script>
<script src="<?php echo USER_ASSETS;?>js/jquery.cm-overlay.js"></script>
<script>
$(document).ready(function(){
  $('.cm-overlay').cmOverlay();
});
</script>
<!-- //Gallery-plugin -->
<!-- responsiveslides -->
<script src="<?php echo USER_ASSETS;?>js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {
  // Slideshow 4
  $("#slider3").responsiveSlides({
    auto: true,
    pager: false,
    nav: true,
    speed: 500,
    namespace: "callbacks",
    before: function () {
      $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
      $('.events').append("<li>after event fired.</li>");
    }
  });
});
</script>
<!-- //responsiveslides -->

<!-- //Navigation-JavaScript -->
<!--pop-up-box -->
<script src="<?php echo USER_ASSETS;?>js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
$(document).ready(function() {
  $('.popup-with-zoom-anim').magnificPopup({
    type: 'inline',
    fixedContentPos: false,
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-zoom-in'
  });

});
</script>
<!-- //pop-up-box -->

<!-- banner-type-text -->
<script src="<?php echo USER_ASSETS;?>js/typed.js" type="text/javascript"></script>
<script>
$(function(){

  $("#typed").typed({
    // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
    stringsElement: $('#typed-strings'),
    typeSpeed: 30,
    backDelay: 500,
    loop: false,
    contentType: 'html', // or text
    // defaults to false for infinite loop
    loopCount: false,
    callback: function(){ foo(); },
    resetCallback: function() { newTyped(); }
  });

  $(".reset").click(function(){
    $("#typed").typed('reset');
  });

});

function newTyped(){ /* A new typed object */ }

function foo(){ console.log("Callback"); }
</script>
<!-- //banner-type-text -->
<!-- jarallax-js -->
<script src="<?php echo USER_ASSETS;?>js/SmoothScroll.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo USER_ASSETS;?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo USER_ASSETS;?>js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
  $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
  });
});
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
<script type="text/javascript">
$(document).ready(function() {
  /*
  var defaults = {
  containerID: 'toTop', // fading element id
  containerHoverID: 'toTopHover', // fading element hover id
  scrollSpeed: 1200,
  easingType: 'linear'
};
*/
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>

<div class="arr-w3ls">
  <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>
<!-- //smooth scrolling -->


<script type="text/javascript" src="<?php echo USER_ASSETS;?>js/bootstrap-3.1.1.min.js"></script>

</body>
</html>
