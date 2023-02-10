<?php
session_start();
include 'common/connect.php'; 

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $type = $_POST['type'];
    $num = $_POST['no'];
    $m_salary = $_POST['m_salary'];
    $max_salary = $_POST['max_salary'];
    $exp = $_POST['exp'];
    $user_id = $_SESSION['com_id'];
    $date = date('Y-m-d');

    $exe = $obj->query("insert into job(title,description,job_type,no_of_vacancy,min_salary,exp,max_salary,com_id,date) values
     ('$title','$desc','$type','$num','$m_salary','$exp','$max_salary','$user_id','$date')");
     if($exe)
     {
       echo "<script>alert('Job posted successfully..');</script>";
     }
     else
     {
       echo "<script>alert('Something went wrong!..');</script>";
     }
}


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Post job</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    
  </head>
  <body>
<!--header-->
<?php include 'common/header.php'; ?>
<!--/header-->
<!-- about breadcrumb -->
<section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
            <h2 class="title mt-5 pt-lg-5 pt-sm-3">Please post job</h2>
            <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
                <li><a href="index.html">Home</a></li>
                <li class="active"> /  post job </li>
            </ul>
        </div>
    </div>
    <div class="waveWrapper waveAnimation">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none">
            <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none;"></path>
        </svg>
    </div>
</section>
<!-- //about breadcrumb -->
<!-- contact block -->
<!-- contact1 -->
<section class="w3l-contact-1 pb-5" id="contact">
    <div class="contacts-12 py-lg-12 py-md-12">
        <div class="col-lg-12 ">
            <div class="col-lg-12 contact-view">
                
            <div class="map-content-9">
                    <h5 class="mb-sm-4 mb-3">Post job</h5>
                    <form  method="post">
                        <div class="twice">
                            <input type="text" name="title" id="title" placeholder="Title">
                        </div>
                        <div class="twice">
                            <input type="text" name="desc" id="desc" placeholder="Description">
                        </div>
                        <div class="twice">
                        <select class="form-control"  id="type" name="type">
                          <option value="job-type">--Select Job-type--</option>
                          <option value="On-site">On-site</option>
                          <option value="Work from home">Work from home</option>
                              
                          </select>
                          
                        </div>
                        <div class="twice">
                            <input type="text" name="no" id="no" placeholder="Number of vacancy">
                        </div>
                        <div class="twice">
                            <input type="text" name="m_salary" id="m_salary" placeholder="Minimum salary">
                        </div>
                        <div class="twice">
                            <input type="text" name="max_salary" id="max_salary" placeholder="Maximum salary">
                        </div>
                        <div class="twice">
                        <select class="form-control"  id="exp" name="exp">
                          <option value="job-type">--Select Experience--</option>
                          <option value="Fresher">Fresher</option>
                          <option value="Experinced">Experinced</option>
                              
                          </select>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-style mt-4" name="submit" id="submit">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact1 -->

<!-- //contact block -->
<!-- footer -->
<?php include 'common/footer.php'; ?>
<!-- //footer -->

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
      $("#owl-demo1").owlCarousel({
          loop: true,
          margin: 20,
          nav: false,
          responsiveClass: true,
          responsive: {
              0: {
                  items: 1,
                  nav: false
              },
              768: {
                  items: 2,
                  nav: false
              },
              1000: {
                  items: 3,
                  nav: false,
                  loop: false
              }
          }
      })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script>


</body>

</html>