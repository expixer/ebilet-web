<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/explore_events.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:17 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, shrink-to-fit=9">
<meta name="description" content="Gambolthemes">
<meta name="author" content="Gambolthemes">
<title>Barren - Simple Online Event Ticketing System</title>

<link rel="icon" type="image/png" href="assets/images/fav.png">

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
<link href='unicons-2.0.1/css/unicons.css' rel='stylesheet'>
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/night-mode.css" rel="stylesheet">

<link href="  ""fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
<link href="OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">

@include('includes.header')


<div class="wrapper">
<div class="hero-banner">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-8 col-lg-8 col-md-10">
<div class="hero-banner-content">
<h2>Discover Events For All The Things You Love</h2>
<div class="search-form main-form">
<div class="row g-3">
<div class="col-lg-5 col-md-12">
<div class="form-group search-category">
<select class="selectpicker" data-width="100%" data-size="5">
<option value="browse_all" data-icon="fa-solid fa-tower-broadcast" selected>Browse All</option>
<option value="online_events" data-icon="fa-solid fa-video">Online Events</option>
<option value="venue_events" data-icon="fa-solid fa-location-dot">Venue Events</option>
</select>
</div>
</div>
<div class="col-lg-5 col-md-12">
<div class="form-group">
<select class="selectpicker" data-width="100%" data-size="5" data-live-search="true">
<option value="01" selected>All</option>
<option value="02">Arts</option>
<option value="03">Business</option>
<option value="04">Coaching and Consulting</option>
<option value="05">Community and Culture</option>
<option value="06">Education and Training</option>
<option value="07">Family and Friends</option>
<option value="08">Fashion and Beauty</option>
<option value="09">Film and Entertainment</option>
<option value="10">Food and Drink</option>
<option value="11">Free</option>
<option value="12">Health and Wellbeing</option>
<option value="13">Hobbies and Interest</option>
<option value="14">Music and Theater</option>
<option value="15">Religion and Spirituality</option>
<option value="16">Science and Technology</option>
<option value="17">Sports and Fitness</option>
<option value="18">Travel and Outdoor</option>
<option value="19">Visual Arts</option>
</select>
</div>
</div>
<div class="col-lg-2 col-md-12">
<a href="#" class="main-btn btn-hover w-100">Find</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="explore-events p-80">
<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12">
<div class="event-filter-items">
<div class="featured-controls">
<div class="filter-tag">
<a href="explore_events_by_date.html" class="active">All</a>
<a href="explore_events_by_date.html">Today</a>
<a href="explore_events_by_date.html">Tomorrow</a>
<a href="explore_events_by_date.html">This Week</a>
<a href="explore_events_by_date.html">This Weekend</a>
<a href="explore_events_by_date.html">Next Week</a>
<a href="explore_events_by_date.html">Next Weekend</a>
<a href="explore_events_by_date.html">This Month</a>
<a href="explore_events_by_date.html">Next Month</a>
<a href="explore_events_by_date.html">This Year</a>
<a href="explore_events_by_date.html">Next Year</a>
</div>
<div class="controls">
<button type="button" class="control" data-filter="all">All</button>
<button type="button" class="control" data-filter=".arts">Arts</button>
<button type="button" class="control" data-filter=".business">Business</button>
<button type="button" class="control" data-filter=".concert">Concert</button>
<button type="button" class="control" data-filter=".workshops">Workshops</button>
<button type="button" class="control" data-filter=".coaching_consulting">Coaching and Consulting</button>
<button type="button" class="control" data-filter=".health_Wellness">Health and Wellbeing</button>
<button type="button" class="control" data-filter=".volunteer">Volunteer</button>
<button type="button" class="control" data-filter=".sports">Sports</button>
<button type="button" class="control" data-filter=".free">Free</button>
</div>
<div class="row" data-ref="event-filter-content">
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness" data-ref="mixitup-target">
<div class="main-card mt-4">
<div class="event-thumbnail">
<a href="venue_event_detail_view.html" class="thumbnail-img">
<img src="assets/images/event-imgs/img-1.jpg" alt="">
</a>
<span class="bookmark-icon" title="Bookmark"></span>
</div>
<div class="event-content">
<a href="venue_event_detail_view.html" class="event-title">A New Way Of Life</a>
<div class="duration-price-remaining">
<span class="duration-price">AUD $100.00*</span>
<span class="remaining"></span>
</div>
</div>
<div class="event-footer">
<div class="event-timing">
<div class="publish-date">
<span><i class="fa-solid fa-calendar-day me-2"></i>15 Apr</span>
<span class="dot"><i class="fa-solid fa-circle"></i></span>
<span>Fri, 3.45 PM</span>
</div>
<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix business workshops volunteer sports health_Wellness" data-ref="mixitup-target">
<div class="main-card mt-4">
<div class="event-thumbnail">
<a href="online_event_detail_view.html" class="thumbnail-img">
<img src="assets/images/event-imgs/img-2.jpg" alt="">
</a>
<span class="bookmark-icon" title="Bookmark"></span>
</div>
<div class="event-content">
<a href="online_event_detail_view.html" class="event-title">Earrings Workshop with Bronwyn David</a>
<div class="duration-price-remaining">
<span class="duration-price">AUD $75.00*</span>
<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>6 Remaining</span>
</div>
</div>
<div class="event-footer">
<div class="event-timing">
<div class="publish-date">
<span><i class="fa-solid fa-calendar-day me-2"></i>30 Apr</span>
<span class="dot"><i class="fa-solid fa-circle"></i></span>
<span>Sat, 11.20 PM</span>
</div>
<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>2h</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix coaching_consulting free concert volunteer health_Wellness bussiness" data-ref="mixitup-target">
<div class="main-card mt-4">
<div class="event-thumbnail">
<a href="venue_event_detail_view.html" class="thumbnail-img">
<img src="assets/images/event-imgs/img-3.jpg" alt="">
</a>
<span class="bookmark-icon" title="Bookmark"></span>
</div>
<div class="event-content">
<a href="venue_event_detail_view.html" class="event-title">Spring Showcase Saturday April 30th 2022 at 7pm</a>
<div class="duration-price-remaining">
<span class="duration-price">Free*</span>
<span class="remaining"></span>
</div>
</div>
<div class="event-footer">
<div class="event-timing">
<div class="publish-date">
<span><i class="fa-solid fa-calendar-day me-2"></i>1 May</span>
<span class="dot"><i class="fa-solid fa-circle"></i></span>
<span>Sun, 4.30 PM</span>
</div>
<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>3h</span>
</div>
</div>
</div>
</div>
<div class=" col-xl-3 col-lg-4 col-md-6 col-sm-12 mix health_Wellness concert volunteer sports free business" data-ref="mixitup-target">
<div class="main-card mt-4">
<div class="event-thumbnail">
<a href="online_event_detail_view.html" class="thumbnail-img">
<img src="assets/images/event-imgs/img-4.jpg" alt="">
</a>
<span class="bookmark-icon" title="Bookmark"></span>
</div>
<div class="event-content">
<a href="online_event_detail_view.html" class="event-title">Shutter Life</a>
<div class="duration-price-remaining">
<span class="duration-price">AUD $85.00</span>
<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>7 Remaining</span>
</div>
</div>
<div class="event-footer">
<div class="event-timing">
<div class="publish-date">
<span><i class="fa-solid fa-calendar-day me-2"></i>1 May</span>
<span class="dot"><i class="fa-solid fa-circle"></i></span>
<span>Sun, 5.30 PM</span>
</div>
<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix concert sports health_Wellness free arts" data-ref="mixitup-target">
<div class="main-card mt-4">
<div class="event-thumbnail">
<a href="venue_event_detail_view.html" class="thumbnail-img">
<img src="assets/images/event-imgs/img-5.jpg" alt="">
</a>
<span class="bookmark-icon" title="Bookmark"></span>
</div>
<div class="event-content">
<a href="venue_event_detail_view.html" class="event-title">Friday Night Dinner at The Old Station May 27 2022</a>
<div class="duration-price-remaining">
<span class="duration-price">AUD $41.50*</span>
<span class="remaining"></span>
</div>
</div>
<div class="event-footer">
 <div class="event-timing">
<div class="publish-date">
<span><i class="fa-solid fa-calendar-day me-2"></i>27 May</span>
<span class="dot"><i class="fa-solid fa-circle"></i></span>
<span>Fri, 12.00 PM</span>
</div>
<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>5h</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix workshops concert arts volunteer sports" data-ref="mixitup-target">
<div class="main-card mt-4">
<div class="event-thumbnail">
<a href="venue_event_detail_view.html" class="thumbnail-img">
<img src="assets/images/event-imgs/img-6.jpg" alt="">
</a>
<span class="bookmark-icon" title="Bookmark"></span>
</div>
<div class="event-content">
<a href="venue_event_detail_view.html" class="event-title">Step Up Open Mic Show</a>
<div class="duration-price-remaining">
<span class="duration-price">AUD $200.00*</span>
<span class="remaining"></span>
</div>
</div>
<div class="event-footer">
<div class="event-timing">
<div class="publish-date">
<span><i class="fa-solid fa-calendar-day me-2"></i>30 Jun</span>
<span class="dot"><i class="fa-solid fa-circle"></i></span>
<span>Thu, 4.30 PM</span>
</div>
<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix volunteer free health_Wellness" data-ref="mixitup-target">
<div class="main-card mt-4">
<div class="event-thumbnail">
<a href="online_event_detail_view.html" class="thumbnail-img">
<img src="assets/images/event-imgs/img-7.jpg" alt="">
</a>
<span class="bookmark-icon" title="Bookmark"></span>
</div>
<div class="event-content">
<a href="online_event_detail_view.html" class="event-title">Tutorial on Canvas Painting for Beginners</a>
<div class="duration-price-remaining">
<span class="duration-price">AUD $50.00*</span>
<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>17 Remaining</span>
</div>
</div>
<div class="event-footer">
<div class="event-timing">
<div class="publish-date">
<span><i class="fa-solid fa-calendar-day me-2"></i>17 Jul</span>
<span class="dot"><i class="fa-solid fa-circle"></i></span>
<span>Sun, 5.30 PM</span>
</div>
<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix sports concert volunteer arts" data-ref="mixitup-target">
<div class="main-card mt-4">
<div class="event-thumbnail">
<a href="venue_event_detail_view.html" class="thumbnail-img">
<img src="assets/images/event-imgs/img-8.jpg" alt="">
</a>
<span class="bookmark-icon" title="Bookmark"></span>
</div>
<div class="event-content">
<a href="venue_event_detail_view.html" class="event-title">Trainee Program on Leadership' 2022</a>
<div class="duration-price-remaining">
<span class="duration-price">AUD $120.00*</span>
<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>7 Remaining</span>
</div>
</div>
<div class="event-footer">
<div class="event-timing">
<div class="publish-date">
<span><i class="fa-solid fa-calendar-day me-2"></i>20 Jul</span>
<span class="dot"><i class="fa-solid fa-circle"></i></span>
<span>Wed, 11.30 PM</span>
</div>
<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>12h</span>
</div>
</div>
</div>
</div>
</div>
<div class="browse-btn">
<a href="#" class="main-btn btn-hover ">See More</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


@include('includes.footer')

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.6.0.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="OwlCarousel/owl.carousel.js"></script>
<script src="bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="mixitup/dist/mixitup.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/night-mode.js"></script>
<script>
		var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

		var mixer = mixitup(containerEl, {
			selectors: {
				target: '[data-ref~="mixitup-target"]'
			}
		});
	</script>
</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/explore_events.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:17 GMT -->
</html>