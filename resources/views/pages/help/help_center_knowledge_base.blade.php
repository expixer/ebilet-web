<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/help_center_knowledge_base.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:51 GMT -->
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

<link href="fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
<link href="OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="ckeditor5/sample/css/sample.css" rel="stylesheet">
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
<div class="col-lg-4 col-md-6">
<a href="help_section_detail_view.html" class="main-card kb-card mt-0 mt-lg-0 mt-md-0">
<div class="help-item d-flex align-center border_bottom">
<div class="help-item-icon">
<i class="fa-solid fa-calendar-days"></i>
</div>
<div class="help-item-content">
<h4>I am an Organiser</h4>
<span>76 Articles</span>
</div>
</div>
<div class="kb-content p-4">
<p>Find everything you need to be an organiser</p>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="help_section_detail_view.html" class="main-card kb-card mt-4 mt-lg-0 mt-md-0">
<div class="help-item d-flex align-center border_bottom">
<div class="help-item-icon">
<i class="fa-solid fa-user-tie"></i>
</div>
<div class="help-item-content">
<h4>I am an Attendee</h4>
<span>15 Articles</span>
</div>
</div>
<div class="kb-content p-4">
<p>Find everything you need to be an attendee on Barren.</p>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="help_section_detail_view.html" class="main-card kb-card mt-4 mt-lg-0">
<div class="help-item d-flex align-center border_bottom">
<div class="help-item-icon">
<i class="fa-solid fa-microphone"></i>
</div>
<div class="help-item-content">
<h4>I am a Speaker</h4>
<span>5 Articles</span>
</div>
</div>
<div class="kb-content p-4">
<p>Find everything you need to be a speaker</p>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="help_section_detail_view.html" class="main-card kb-card mt-4">
<div class="help-item d-flex align-center border_bottom">
<div class="help-item-icon">
<i class="fa-solid fa-paper-plane"></i>
</div>
<div class="help-item-content">
<h4>Promoting an Event</h4>
<span>12 Articles</span>
</div>
</div>
<div class="kb-content p-4">
<p>Quick advice and tips on how to promote your event</p>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="help_section_detail_view.html" class="main-card kb-card mt-4">
<div class="help-item d-flex align-center border_bottom">
<div class="help-item-icon">
<i class="fa-solid fa-gear"></i>
</div>
<div class="help-item-content">
<h4>Troubleshooting</h4>
<span>9 Articles</span>
</div>
</div>
<div class="kb-content p-4">
 <p>Facing an issue using our platform? See if your problem matches any of them.</p>
</div>
</a>
</div>
<div class="col-lg-4 col-md-6">
<a href="help_section_detail_view.html" class="main-card kb-card mt-4">
<div class="help-item d-flex align-center border_bottom">
<div class="help-item-icon">
<i class="fa-solid fa-file-lines"></i>
</div>
<div class="help-item-content">
<h4>I use old Barren</h4>
<span>40 Articles</span>
</div>
</div>
<div class="kb-content p-4">
<p>Click here if you are using old platform.</p>
</div>
</a>
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
<script src="ckeditor5/ckeditor.js"></script>
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

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/help_center_knowledge_base.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:51 GMT -->
</html>