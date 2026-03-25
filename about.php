<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | About Us </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<!-- <div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">About Us</li>
			</ol>
		</div>
	</div> -->
	<!-- //page details -->

	<!-- about -->
	<section class="about">
		<div class="container py-xl-2 py-lg-2">
		<div class="w3ls-titles text-center mb-md-5 mb-4">
				<h3 class="title">Who We Are?</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="py-3">
Our mission is to create a centralized blood donation platform that connects blood donors with hospitals and patients in Yaoundé, Cameroon. 
This system helps people quickly find blood donors in emergency situations within the city. 
Through this website, we aim to promote awareness about blood donation in Yaoundé and encourage citizens to become regular donors. 
By using technology to connect donors and recipients in real-time, this platform helps save lives across hospitals and communities in Yaoundé.
</p>
			</div>		
		</div>
	</section>
	
	<!-- our teams -->
	<section class="p-5">
	<h3 class="title py-xl-2 py-lg-2">Behind This Project?</h3>
	<div class="card-deck">
	<div class="card">
    <img src="images\saad.jpeg" class="card-img-top team-img" alt="yann ebele" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">YANN EBELE</h4>
      <p class="card-text">Yann Ebele is a dedicated student with growing skills in web development and system design. As a student working on this project, he focuses on building practical solutions that can solve real-life problems, especially in the healthcare sector. With knowledge in PHP, HTML, CSS, and database management, he is committed to improving his skills and learning new technologies. Yann is passionate about using technology to make a positive impact, particularly by developing systems that can help save lives and improve services in his community.</p>      
	  <div class="row p-2">
	  <ul class="top-right-info">
                                <li>
                                    <a href="https://github.com/Saad-Khanzada">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>                                
                            </ul>
	  </div>
    </div>
  </div>

    
</section>
	<!-- //about -->



	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
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
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>