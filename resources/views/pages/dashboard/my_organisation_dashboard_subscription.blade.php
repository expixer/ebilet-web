﻿<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/my_organisation_dashboard_subscription.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:52 GMT -->
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
<link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/night-mode.css" rel="stylesheet">

<link href="fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
<link href="OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">

<div class="modal fade" id="billinginfoModal" tabindex="-1" aria-labelledby="billinginfoModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="billinginfoModalLabel">Billing Information</h5>
<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
</div>
<div class="modal-body">
<div class="model-content main-form">
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="form-group mt-4">
<label class="form-label">Address 1*</label>
<input class="form-control h_40" type="text" placeholder="" value="140 St">
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group mt-4">
<label class="form-label">Address 2*</label>
<input class="form-control h_40" type="text" placeholder="" value="Kilda Rd">
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group main-form mt-4">
<label class="form-label">Country*</label>
<select class="selectpicker" data-size="5" title="Nothing selected" data-live-search="true">
<option value="Algeria">Algeria</option>
<option value="Argentina">Argentina</option>
<option value="Australia" selected>Australia</option>
<option value="Austria">Austria (Österreich)</option>
<option value="Belgium">Belgium (België)</option>
<option value="Bolivia">Bolivia</option>
<option value="Brazil">Brazil</option>
<option value="Canada">Canada</option>
<option value="Chile">Chile</option>
<option value="Colombia">Colombia</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Estonia">Estonia</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Germany">Germany</option>
<option value="Greece">Greece</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Japan">Japan</option>
<option value="Latvia">Latvia</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Malaysia">Malaysia</option>
<option value="Mexico">Mexico</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="New Zealand">New Zealand</option>
<option value="Norway">Norway</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="South Africa">South Africa</option>
<option value="South Korea">South Korea</option>
<option value="Spain">Spain</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Turkey">Turkey</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="Vietnam">Vietnam</option>
</select>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group mt-4">
<label class="form-label">State*</label>
<input class="form-control h_40" type="text" placeholder="" value="Melbourne">
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group mt-4">
<label class="form-label">City/Suburb*</label>
<input class="form-control h_40" type="text" placeholder="" value="Victoria">
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group mt-4">
<label class="form-label">Zip/Post Code*</label>
<input class="form-control h_40" type="text" placeholder="" value="3000">
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
<button type="button" class="main-btn min-width btn-hover h_40">Update</button>
</div>
</div>
</div>
</div>


<div class="modal fade" id="paymentinfoModal" tabindex="-1" aria-labelledby="paymentinfoModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="paymentinfoModalLabel">Add Credit or Debit Card</h5>
<button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
</div>
<div class="modal-body">
<div class="model-content main-form">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="form-group mt-4">
<label class="form-label d-flex justify-content-between align-items-center">Card Number<img class="c-img" src="assets/images/visa-master-card.png" alt=""></label>
<input class="form-control h_40" type="text" placeholder="" value="">
</div>
</div>
<div class="col-lg-6 col-md-12">
 <div class="form-group mt-4">
<label class="form-label">Expiry date*</label>
<input class="form-control h_40" type="text" placeholder="MM/YY" value="">
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="form-group mt-4">
<label class="form-label">CVV*</label>
<input class="form-control h_40" type="text" placeholder="" value="">
</div>
</div>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
<button type="button" class="main-btn min-width btn-hover h_40">Add</button>
</div>
</div>
</div>
</div>


@include('includes.dashboard_header')
@include('includes.dashboard_navbar')


<div class="wrapper wrapper-body">
<div class="dashboard-body">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="d-main-title">
<h3><i class="fa-solid fa-bahai me-3"></i>Subscription</h3>
</div>
</div>
<div class="col-md-12">
<div class="main-card subscription-bg mt-5">
<div class="d-md-flex d-sm-block justify-content-between align-items-center">
<div class="s-info">
<h3>Basic</h3>
<p>All the tools you need to organise your free online and venue events, absolutely free!</p>
</div>
<div class="s-price">
<h3>Free<span class="font-15 font-weight-semibold"></span></h3>
</div>
</div>
<div class="since-text">Member since 026/04/2022</div>
</div>
<div class="main-card mt-4 p-4">
<div class="subscription-title">
<h3 class="mb-4 mt-3">Premium plan includes all of these great features :</h3>
</div>
<div class="subscription-feature-lists">
<div class="row">
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-item text-start p_30 mt-4 subscription-item">
<div class="feature-icon">
<img src="assets/images/icons/feature-icon-1.png" alt="">
</div>
<h4>Remove the Restrictions</h4>
<p>No restriction on free events. Host large venue and online events.</p>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-item text-start p_30 mt-4 subscription-item">
<div class="feature-icon">`
<img src="assets/images/icons/feature-icon-12.png" alt="">
</div>
<h4>Organiser App</h4>
<p>Stay on top of things, manage and monitor your events using the organiser app.</p>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-item text-start p_30 mt-4 subscription-item">
<div class="feature-icon">
<img src="assets/images/icons/feature-icon-9.png" alt="">
</div>
<h4>Advanced Tools</h4>
<p>Turbo charge your sales, marketing and attendee management with the premium only tools.</p>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-item text-start p_30 mt-4 subscription-item">
<div class="feature-icon">
<img src="assets/images/icons/feature-icon-8.png" alt="">
</div>
<h4>Live Streaming</h4>
<p>Livestream your online events on Facebook, YouTube and other social networks.</p>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-item text-start p_30 mt-4 subscription-item">
<div class="feature-icon">
<img src="assets/images/icons/online-class.png" alt="">
</div>
<h4>Messaging and Sharing</h4>
<p>Exchange instant messages, securely share screens and files in your online events.</p>
</div>
</div>
<div class="col-xl-4 col-lg-6 col-md-6">
<div class="feature-item text-start p_30 mt-4 subscription-item">
<div class="feature-icon">
<img src="assets/images/icons/feature-icon-7.png" alt="">
</div>
<h4>Recording</h4>
<p>Securely record your online events and save on the cloud of your choice.</p>
</div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12">
<div class="text-center mt-5">
<a href="checkout_premium.html" class="main-btn btn-hover">Upgrade to Premium<i class="fa-solid fa-arrow-right ms-2"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="main-card mt-4 p-4 d-flex justify-content-between align-items-center">
<div class="bp-info">
<h4>Billing Information</h4>
<p class="mb-0">140 St Kilda Rd, Melbourne, Victoria, 3000, Australia</p>
</div>
<button class="pe-4 ps-4 text-center co-main-btn h_40 d-inline-block" data-bs-toggle="modal" data-bs-target="#billinginfoModal">Edit</button>
</div>
<div class="main-card mt-4 p-4 d-flex justify-content-between align-items-center">
<div class="bp-info">
<h4>Payment Information</h4>
<p class="mb-0">No payment information added yet.</p>
</div>
<button class="pe-4 ps-4 text-center co-main-btn h_40 d-inline-block" data-bs-toggle="modal" data-bs-target="#paymentinfoModal">Edit</button>
</div>
<div class="main-card mt-4 p-4">
<div class="bp-info">
<h4>Payment History</h4>
</div>
<div class="table-card mt-4">
<div class="main-table">
<div class="table-responsive">
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">ID</th>
<th scope="col">Details</th>
<th scope="col">Amount</th>
<th scope="col">Status</th>
<th scope="col">Invoice</th>
</tr>
</thead>
<tbody>
<tr>
<td>INV-0QAXMJ-0000</td>
<td>Basic</td>
<td>$0.00</td>
<td>N/A</td>
<td>
<a href="#" class="btn-gray no-bg ml-1">
<svg width="28" height="24" viewBox="0 0 28 24" fill="none">
<path d="M20.3023 18V21H6.76796V18H5.07617V21C5.07617 21.3978 5.25441 21.7794 5.57169 22.0607C5.88896 22.342 6.31927 22.5 6.76796 22.5H20.3023C20.751 22.5 21.1813 22.342 21.4986 22.0607C21.8158 21.7794 21.9941 21.3978 21.9941 21V18H20.3023Z" fill="#FF2116"></path>
<path d="M17.7636 15.75L16.5675 14.6895L14.3801 16.629V10.5H12.6883V16.629L10.5008 14.6895L9.30469 15.75L13.5342 19.5L17.7636 15.75Z" fill="#FF2116"></path>
<path d="M23.6847 3V1.5H18.6094V9H20.3012V6H22.8389V4.5H20.3012V3H23.6847Z" fill="#FF2116"></path>
<path d="M14.3797 9H10.9961V1.5H14.3797C15.0525 1.5006 15.6976 1.73784 16.1733 2.15967C16.6491 2.5815 16.9167 3.15345 16.9174 3.75V6.75C16.9167 7.34655 16.6491 7.9185 16.1733 8.34033C15.6976 8.76216 15.0525 8.9994 14.3797 9ZM12.6879 7.5H14.3797C14.604 7.4998 14.819 7.42072 14.9776 7.28011C15.1362 7.1395 15.2253 6.94885 15.2256 6.75V3.75C15.2253 3.55115 15.1362 3.3605 14.9776 3.21989C14.819 3.07928 14.604 3.0002 14.3797 3H12.6879V7.5Z" fill="#FF2116"></path>
<path d="M7.61229 1.5H3.38281V9H5.0746V6.75H7.61229C8.06077 6.7494 8.49069 6.59118 8.80782 6.31C9.12495 6.02883 9.30341 5.64764 9.30408 5.25V3C9.30363 2.6023 9.12524 2.221 8.80807 1.93978C8.49089 1.65856 8.06084 1.5004 7.61229 1.5ZM5.0746 5.25V3H7.61229L7.61313 5.25H5.0746Z" fill="#FF2116"></path>
</svg>
</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vertical-responsive-menu.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="OwlCarousel/owl.carousel.js"></script>
<script src="bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/night-mode.js"></script>
</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/my_organisation_dashboard_subscription.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:52 GMT -->
</html>