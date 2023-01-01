<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/help_section_detail_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:51 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, shrink-to-fit=9">
<meta name="description" content="Gambolthemes">
<meta name="author" content="Gambolthemes">
<title>Barren - Simple Online Event Ticketing System</title>

<link rel="icon" type="image/png" href="images/fav.png">

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/night-mode.css" rel="stylesheet">

<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="vendor/ckeditor5/sample/css/sample.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">

<div class="modal fade" id="supportTicketModal" tabindex="-1" aria-labelledby="supportTicketModalLabel" aria-hidden="false">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="supportTicketModalLabel">Submit a ticket</h5>
<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
</div>
<div class="modal-body">
<div class="model-content main-form">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="form-group mt-4">
<label class="form-label">Contact Name*</label>
<input class="form-control h_40" type="text" placeholder="" value="">
</div>
<div class="form-group mt-4">
<label class="form-label">Email*</label>
<input class="form-control h_40" type="text" placeholder="" value="">
</div>
<div class="form-group mt-4">
<label class="form-label">Subject*</label>
<input class="form-control h_40" type="text" placeholder="" value="">
</div>
<div class="form-group mt-4">
<label class="form-label">Description*</label>
<div class="text-editor">
<div id="tk_editor"></div>
</div>
</div>
<div class="form-group mt-4">
<label class="form-label">Priority*</label>
<select class="selectpicker" title="None">
<option value="High">High</option>
<option value="Medium">Medium</option>
<option value="Low">Low</option>
</select>
</div>
<div class="form-group mt-4">
<label class="form-label">Classifications*</label>
<select class="selectpicker" title="None">
<option value="Question">Question</option>
<option value="Problem">Problem</option>
<option value="Feature">Feature</option>
<option value="Others">Others</option>
</select>
</div>
<div class="form-group mt-4">
<label class="form-label">Attechments*</label>
<div class="upload-file-dt">
<div class="upload-btn">
<input class="uploadBtn-input" type="file" accept="image/*, application/pdf" id="upload" multiple="">
<label for="upload" title="Image">Upload Files</label>
</div>
<span class="uploadBtn-file-name">Attach a file</span>
<small>(Up to 20 MB )</small>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
<button type="button" class="main-btn min-width btn-hover h_40">Save</button>
</div>
</div>
</div>
</div>

@include('includes.help_header')

<div class="wrapper">
<div class="hero-banner">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8 col-md-12">
<div class="hero-banner-content text-center">
<h2>How can we help?</h2>
<p class="ps-0">Search our knowledge base or submit a ticket.</p>
<div class="">
<input class="form-control h_50 w-100" type="text" placeholder="Search articles">
</div>
</div>
</div>
</div>
</div>
</div>
<div class="explore-events p-80">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="main-title checkout-title">
<h3>I am an Organiser</h3>
</div>
</div>
<div class="col-lg-8 col-md-12">
<div class="main-card mt-5">
<a href="help_article_detail_view.html" class="help-item-link">How is your service charge calculated?</a>
<a href="help_article_detail_view.html" class="help-item-link">Where is my event's name being used?</a>
<a href="help_article_detail_view.html" class="help-item-link">Where can I find the information entered by my attendees?</a>
<a href="help_article_detail_view.html" class="help-item-link">How do I build my own attendee details form?</a>
<a href="help_article_detail_view.html" class="help-item-link">What is the 'Refer a friend' feature?</a>
<a href="help_article_detail_view.html" class="help-item-link">Can I see a list of all attendee’s emails?</a>
<a href="help_article_detail_view.html" class="help-item-link">How can I track my ticket sales?</a>
<a href="help_article_detail_view.html" class="help-item-link">Can I download the recordings of my event?</a>
<a href="help_article_detail_view.html" class="help-item-link">How can I refund my attendees?</a>
<a href="help_article_detail_view.html" class="help-item-link">Image Dimensions in Barren </a>
<a href="help_article_detail_view.html" class="help-item-link">How do I get paid?</a>
<a href="help_article_detail_view.html" class="help-item-link">How do I use your platform?</a>
<a href="help_article_detail_view.html" class="help-item-link">Can we make tickets free for a selected group of people?</a>
<a href="help_article_detail_view.html" class="help-item-link">How do I respond to a refund request from my attendee?</a>
<a href="help_article_detail_view.html" class="help-item-link">How does choosing an event banner help my event?</a>
</div>
<div class="help-pagination d-flex align-item-center justify-content-between">
<a href="#" class="help-pagination-link"><i class="fa-solid fa-circle-left me-2"></i>Previous</a>
<a href="#" class="help-pagination-link">Next<i class="fa-solid fa-circle-right ms-2"></i></a>
</div>
</div>
<div class="col-lg-4 col-md-12">
<div class="main-card mt-5">
<div class="bp-title">
<h4>Popular Articles</h4>
</div>
<div class="help-faq-content">
<a href="help_article_detail_view.html" class="help-faq-link">Where is my event's name being used?</a>
<a href="help_article_detail_view.html" class="help-faq-link">How to build my own survey?</a>
<a href="help_article_detail_view.html" class="help-faq-link">How can I refund my attendees?</a>
<a href="help_article_detail_view.html" class="help-faq-link">How do I choose a suitable template for my event?I am hosting a large online event. What do you recommend?</a>
<a href="help_article_detail_view.html" class="help-faq-link">I am hosting a large online event. What do you recommend?</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

@include('includes.footer')

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.6.0.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/OwlCarousel/owl.carousel.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="vendor/ckeditor5/ckeditor.js"></script>
<script src="js/custom.js"></script>
<script src="js/night-mode.js"></script>
<script>
		ClassicEditor
		.create( document.querySelector( '#tk_editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
	</script>
</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/help_section_detail_view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:51 GMT -->
</html>