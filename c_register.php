<?php

include 'common/connect.php';


if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];
  $o_name = $_POST['o_name'];
  $e_year = $_POST['e_year'];
  $about = $_POST['about'];
  $address = $_POST['address'];
  $reg_date = date('Y-m-d');

  $filename = $_FILES['f']['name'];
	$filename_array = explode(".", $filename);
	$ext = strtolower(end($filename_array));

	$tmp = $_FILES['f']['tmp_name'];
	$path = "upload/$filename";

  if($pass == $cpass)
  {
    if($ext=='jpg' ||$ext=='gif' ||$ext=='png' ||$ext=='jpeg')
		{
		

		$exe = $obj->query("insert into company(c_name,email,contact,address,about,o_name,logo,reg_date,password,e_year) values('$name','$email','$contact','$address','$about','$o_name','$filename','$reg_date','$pass','$e_year')");
            
        if($exe)
		{
      move_uploaded_file($tmp, $path);

      
			echo "<script>alert('File Uploaded Successfullly & registration succesfully'); </script>";
        header("location:index.php");
		}
		else
		{
			echo "<script>alert(' error');</script>";
		}
    }
  }
  else
  {
    echo "<script>alert('mismatch password');</script>";
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

    <title>Study Course - Education Category Bootstrap Responsive Template | Contact : W3layouts</title>

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
            <h2 class="title mt-5 pt-lg-5 pt-sm-3">Please Register your company</h2>
            <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
                <li><a href="index.html">Home</a></li>
                <li class="active"> /  Register </li>
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
                    <h5 class="mb-sm-4 mb-3">Register</h5>
                    <form  method="post" enctype="multipart/form-data">
                        <div class="twice">
                            <input type="text" class="form-control" name="name" id="name" placeholder="company name"
                                required="">
                        </div>
                        <div class="twice">
                            <input type="text" class="form-control" name="contact" id="contact" placeholder="contact"
                                required="">
                        </div>
                        <div class="twice">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                required="">
                        </div>
                          <div class="twice">                               
                                   <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                                required="">
                        </div>
                        <div class="twice">                               
                                   <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password"
                                required="">
                        </div>
                        <div class="twice">                               
                                   <input type="text" class="form-control" name="o_name" id="o_name" placeholder="Owner name"
                                required="">
                        </div>
                        <div class="twice">                               
                                   <input type="text" class="form-control" name="e_year" id="e_year" placeholder="Esatablish year"
                                required="">
                        </div>
                        <div class="twice">  
                                                           
                                   <input type="text" class="form-control" name="about" id="about" placeholder="About your comapny "
                                required="">
                        </div>
                        <div class="twice">  
                                                           
                                   <textarea name="address" id="address" placeholder="address"></textarea>
                        </div>
                      
                        <div class="twice">  
                                                           
                                   <input type="file" class="form-control" name="f" id="f" placeholder=" "
                                required="">
                        </div>
                        
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-style mt-4" name="submit" id="submit">Submit</button>
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