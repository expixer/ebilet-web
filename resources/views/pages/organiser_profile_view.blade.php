﻿<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/organiser_profile_view by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:43 GMT -->
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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link href='unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/night-mode.css" rel="stylesheet">

    <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">

<div class="modal fade" id="FFModal" tabindex="-1" aria-labelledby="FFModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="FFModalLabel">Following & Followers</h5>
                <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                        class="uil uil-multiply"></i></button>
            </div>
            <div class="modal-body">
                <div class="model-content follow-people-content">
                    <div class="">
                        <ul class="nav nav-pills ff-tablist mb-2" role="tablist">
                            <li class="nav-item d-flex me-4">
                                <a class="nav-link px-0 pt-0 pb-3 active" id="pills-following-tab" data-bs-toggle="pill"
                                   href="#following" role="tab" aria-controls="following" aria-selected="true">Following
                                    <span class="following_count">(2)</span></a>
                            </li>
                            <li class="nav-item d-flex">
                                <a class="nav-link px-0 pt-0 pb-3" id="pills-followers-tab" data-bs-toggle="pill"
                                   href="#followers" role="tab" aria-controls="followers" aria-selected="false">Followers </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-4">
                            <div class="tab-pane fade active show" id="following" role="tabpanel"
                                 aria-labelledby="pills-following-tab">
                                <div class="users-list min-height-430">
                                    <div class="user-follow-card mb-4">
                                        <div class="follow-card-left">
                                            <div class="follow-avatar">
                                                <img src="assets/images/profile-imgs/img-2.jpg" alt="">
                                            </div>
                                            <div class="follow-name">
                                                <h5>Jassica William</h5>
                                                <span>1 Follower</span>
                                            </div>
                                        </div>
                                        <div class="follow-card-btn">
                                            <button class="follow-btn">Following</button>
                                        </div>
                                    </div>
                                    <div class="user-follow-card mb-4">
                                        <div class="follow-card-left">
                                            <div class="follow-avatar">
                                                <img src="assets/images/profile-imgs/img-1.jpg" alt="">
                                            </div>
                                            <div class="follow-name">
                                                <h5>Rock Smith</h5>
                                                <span>3 Followers</span>
                                            </div>
                                        </div>
                                        <div class="follow-card-btn">
                                            <button class="follow-btn">Following</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="followers" role="tabpanel"
                                 aria-labelledby="pills-followers-tab">
                                <div id="followers-empty-state"
                                     class="d-flex align-items-center justify-content-center flex-column min-height-430">
<span>
<svg width="60" height="47" viewBox="0 0 60 47" fill="none">
<path
    d="M41.8884 39.501C41.2649 38.8161 41.1572 37.7618 41.9808 37.0461L48.8852 30.1433C50.44 28.5811 52.8108 30.9436 51.2559 32.4981L47.1225 36.6306H56.1899C56.467 35.6917 56.644 35.0145 56.644 34.0064C56.644 28.0732 50.5247 24.6256 45.152 24.6256C40.9724 24.6256 36.4387 26.5956 34.5067 30.4819C36.5234 33.0521 37.7088 36.138 37.7088 39.4702C37.7088 41.6788 37.1623 43.8566 36.1693 45.8267C35.1918 47.7967 32.1976 46.3038 33.1828 44.3337C33.9525 42.8023 34.3528 41.1863 34.3528 39.4702C34.3528 31.4515 26.1321 26.7188 18.8505 26.7188C11.5767 26.7188 3.36369 31.4515 3.36369 39.4702C3.36369 41.2017 3.74856 42.7793 4.52598 44.326C5.51892 46.2961 2.5247 47.7967 1.53945 45.8344C0.546504 43.8643 0 41.6711 0 39.4702C0 32.3749 5.23412 26.8573 11.6228 24.5948C7.8127 22.1322 5.49583 17.9151 5.49583 13.3594C5.49583 5.98709 11.4843 0 18.8505 0C26.2322 0 32.2207 5.98709 32.2207 13.3594C32.2207 17.9228 29.8961 22.1322 26.086 24.5948C28.3412 25.3874 30.3656 26.5495 32.0744 27.9808C33.6369 25.4798 36.0616 23.6098 38.7787 22.5016C36.1001 20.4854 34.5221 17.3533 34.5221 13.9904C34.5221 8.11875 39.2867 3.35524 45.152 3.35524C51.0327 3.35524 55.7896 8.11105 55.7896 13.9904C55.7896 17.3533 54.2117 20.4931 51.5253 22.5016C56.2668 24.4332 60 28.6811 60 34.0064C60 34.8683 59.8922 35.7379 59.6921 36.5921C59.492 37.4386 59.1841 38.262 58.7838 39.0623C58.4913 39.6472 57.9063 39.9858 57.2906 39.9858L47.1302 39.9935L51.2559 44.1183C52.8185 45.6805 50.4477 48.0507 48.8852 46.4885L41.8884 39.501ZM18.8505 3.36293C13.3239 3.36293 8.85183 7.83401 8.85183 13.3594C8.85183 18.9001 13.3085 23.3481 18.8505 23.3481C24.3926 23.3481 28.857 18.9001 28.857 13.3594C28.857 7.84171 24.3772 3.36293 18.8505 3.36293ZM45.152 6.71047C41.1418 6.71047 37.8781 9.97336 37.8781 13.9904C37.8781 18.0152 41.1341 21.255 45.1597 21.255C49.1931 21.255 52.4336 18.0228 52.4336 13.9904C52.4336 9.97336 49.1777 6.71047 45.152 6.71047Z"
    fill="#6ac045"></path>
</svg>
</span>
                                    <p class="font-16 mt-4 text-light3">No followers yet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="aboutModalLabel">Edit Details</h5>
                <button type="button" class="close-model-btn" data-bs-dismiss="modal" aria-label="Close"><i
                        class="uil uil-multiply"></i></button>
            </div>
            <div class="modal-body">
                <div class="model-content main-form">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">First Name*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="John">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Last Name*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="Doe">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Bio*</label>
                                <textarea class="form-textarea" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Email*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="Johndoe@example.com">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Phone*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Website*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Facebook*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Instagram*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Twitter*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">LinkedIn*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Youtube*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <h4 class="address-title">Address</h4>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Address 1*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Address 2*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group main-form mt-4">
                                <label class="form-label">Country*</label>
                                <select class="selectpicker" data-size="5" title="Nothing selected"
                                        data-live-search="true">
                                    <option value="Algeria">Algeria</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Australia">Australia</option>
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
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">City/Suburb*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group mt-4">
                                <label class="form-label">Zip/Post Code*</label>
                                <input class="form-control h_40" type="text" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="co-main-btn min-width btn-hover h_40" data-bs-target="#aboutModal"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Cancel
                </button>
                <button type="button" class="main-btn min-width btn-hover h_40">Update</button>
            </div>
        </div>
    </div>
</div>


@include('includes.header')

<div class="wrapper">
    <div class="profile-banner">
        <div class="hero-cover-block">
            <div class="hero-cover">
                <div class="hero-cover-img"></div>
            </div>
            {{--
            dashboard image sayfasında değiştirme butonu
            <div class="upload-cover">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="cover-img-btn">
                                <input type="file" id="cover-img">
                                <label for="cover-img"><i class="fa-solid fa-panorama me-3"></i>Change Image</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
        <div class="user-dt-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="main-card user-left-dt">
                            <div class="user-avatar-img">
                                <img src="assets/images/profile-imgs/img-13.jpg" alt="">
                                <div class="avatar-img-btn">
                                    <input type="file" id="avatar-img">
                                    <label for="avatar-img"><i class="fa-solid fa-camera"></i></label>
                                </div>
                            </div>
                            <div class="user-dts">
                                <h4 class="user-name">{{$user->name}}<span class="verify-badge"><i
                                            class="fa-solid fa-circle-check"></i></span></h4>
                                <span class="user-email"><a href="mailto: {{$user->email}}">{{$user->email}}</a> </span>
                            </div>

                            <div class="user-description">
                                <p>{{$user->bio}}</p>
                            </div>
                            {{--<div class="user-btns">
                                <a href="my_organisation_dashboard.html"
                                   class="co-main-btn co-btn-width min-width d-inline-block h_40">My Organisation<i
                                        class="fa-solid fa-right-left ms-3"></i></a>
                            </div>--}}
                            <div class="profile-social-link">
                                <h6>Bana ulaşabileceğiniz linkler</h6>
                                <div class="social-links">
                                    <a href="{{$user->facebook}}" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="Facebook"><i class="fab fa-facebook-square"></i></a>
                                    <a href="{{$user->instagram}}" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="Instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="{{$user->twitter}}" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="{{$user->linkedin}}" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="{{$user->youtube}}" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="Youtube"><i class="fab fa-youtube"></i></a>
                                    <a href="{{$user->website}}" class="social-link" data-bs-toggle="tooltip" data-bs-placement="top"
                                       title="Website"><i class="fa-solid fa-globe"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="right-profile">
                            <div class="profile-tabs">
                                <ul class="nav nav-pills nav-fill p-2 garren-line-tab" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="feed-tab" data-bs-toggle="tab" href="#feed"
                                           role="tab" aria-controls="feed" aria-selected="false"><i
                                                class="fa-solid fa-house"></i>Ana Sayfa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
                                           aria-controls="about" aria-selected="true"><i
                                                class="fa-solid fa-circle-info"></i>Hakkımda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="setting-tab" data-bs-toggle="tab" href="#setting"
                                           role="tab" aria-controls="setting" aria-selected="false"><i
                                                class="fa-solid fa-gear"></i>Ayarlar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders"
                                           role="tab" aria-controls="orders" aria-selected="false"><i
                                                class="fa-solid fa-box"></i>Ödemelerim</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="feed" role="tabpanel"
                                         aria-labelledby="feed-tab">
                                        <div class="nav my-event-tabs mt-4" role="tablist">
                                            <button class="event-link active" data-bs-toggle="tab"
                                                    data-bs-target="#saved" type="button" role="tab"
                                                    aria-controls="saved" aria-selected="true"><span
                                                        class="event-count">1</span><span>Kayıtlı Etkinlikler</span></button>
                                            @if($user->isMerchant())
                                                <button class="event-link" data-bs-toggle="tab" data-bs-target="#organised"
                                                        type="button" role="tab" aria-controls="organised"
                                                        aria-selected="false"><span class="event-count">2</span><span>Oluşturduğum Etkinlikler</span>
                                                </button>
                                            @endif
                                            <button class="event-link" data-bs-toggle="tab" data-bs-target="#attending"
                                                    type="button" role="tab" aria-controls="attending"
                                                    aria-selected="false"><span class="event-count">1</span><span>Katılacağım/Katıldığım Etkinlikler</span>
                                            </button>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="saved" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @foreach($bookmarkedEvents as $event)
                                                            <div class="main-card mt-4">
                                                                <div class="card-top p-4">
                                                                    <div class="card-event-img">
                                                                        <img src="{{asset($event->event->image)}}"
                                                                             alt="">
                                                                    </div>
                                                                    <div class="card-event-dt">
                                                                        <h5>{{$event->event->name}}</h5>
                                                                        <div class="evnt-time"><b>Başlangıç Tarihi:</b> {{$event->event->start_date->format('m-d-Y H:i')}}</div>
                                                                        <br>
                                                                        <div class="evnt-time"><b>Bitiş Tarihi:</b> {{$event->event->end_date->format('m-d-Y H:i')}}</div>
                                                                        <div class="event-btn-group">
                             {{--                                               <button class="esv-btn saved-btn me-2"><i
                                                                                    class="fa-regular fa-bookmark me-2"></i>Kaydet
                                                                            </button>--}}
                                                                            <button class="esv-btn me-2"
                                                                                    onclick="window.location.href='{{ route('events.show', ['event' => $event->event->id]) }}'">
                                                                                <i class="fa-solid fa-arrow-up-from-bracket me-2"></i>Etkinliği Görüntüle
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="organised" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="main-card mt-4">
                                                            <div class="card-top p-4">
                                                                <div class="card-event-img">
                                                                    <img src="assets/images/event-imgs/img-6.jpg"
                                                                         alt="">
                                                                </div>
                                                                <div class="card-event-dt">
                                                                    <h5>Step Up Open Mic Show</h5>
                                                                    <div class="evnt-time">Thu, Jun 30, 2022 4:30 AM
                                                                    </div>
                                                                    <div class="event-btn-group">
                                                                        <button class="esv-btn me-2"
                                                                                onclick="window.location.href='create_online_event.html'">
                                                                            <i class="fa-solid fa-gear me-2"></i>Manage
                                                                            Event
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="main-card mt-4">
                                                            <div class="card-top p-4">
                                                                <div class="card-event-img">
                                                                    <img src="assets/images/event-imgs/img-7.jpg"
                                                                         alt="">
                                                                </div>
                                                                <div class="card-event-dt">
                                                                    <h5>Tutorial on Canvas Painting for Beginners</h5>
                                                                    <div class="evnt-time">Sun, Jul 17, 2022 5:30 AM
                                                                    </div>
                                                                    <div class="event-btn-group">
                                                                        <button class="esv-btn me-2"
                                                                                onclick="window.location.href='create_online_event.html'">
                                                                            <i class="fa-solid fa-gear me-2"></i>Manage
                                                                            Event
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="attending" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        @foreach($recentlyEvents as $event)
                                                            <div class="main-card mt-4">
                                                                <div class="card-top p-4">
                                                                    <div class="card-event-img">
                                                                        <img src="{{asset($event->event->image)}}"
                                                                             alt="">
                                                                    </div>
                                                                    <div class="card-event-dt">
                                                                        <h5>{{$event->event->name}}</h5>
                                                                        <div class="evnt-time"><b>Başlangıç Tarihi:</b> {{$event->event->start_date->format('m-d-Y H:i')}}</div>
                                                                        <br>
                                                                        <div class="evnt-time"><b>Alınan Bilet Adedi:</b> {{$event->seatCount}}</div>
                                                                        <div class="event-btn-group">

                                                                            <button class="esv-btn me-2"
                                                                                    onclick="window.location.href='{{ route('events.show', ['event' => $event->event->id]) }}'">
                                                                                <i class="fa-solid fa-arrow-up-from-bracket me-2"></i>Bileti Görüntüle
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="about-tab">
                                        <div class="main-card mt-4">
                                            <div class="bp-title position-relative">
                                                <h4>Hakkımda</h4>
                                                <button class="main-btn btn-hover ms-auto edit-btn me-3 pe-4 ps-4 h_40"
                                                        data-bs-toggle="modal" data-bs-target="#aboutModal">
                                                    <i class="fa-regular fa-pen-to-square me-2"></i>Düzenle
                                                </button>
                                            </div>
                                            <div class="about-details">
                                                <div class="about-step">
                                                    <h5>Name</h5>
                                                    <span>{{$user->name}}</span>
                                                </div>
                                                <div class="about-step">
                                                    <h5>Tell us about yourself and let people know who you are</h5>
                                                    <p class="mb-0">{{$user->bio}}</p>
                                                </div>
                                                <div class="about-step">
                                                    <h5>Find me on</h5>
                                                    <div class="social-links">
                                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" title="Facebook"><i
                                                                class="fab fa-facebook-square"></i></a>
                                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" title="Instagram"><i
                                                                class="fab fa-instagram"></i></a>
                                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" title="Twitter"><i
                                                                class="fab fa-twitter"></i></a>
                                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" title="LinkedIn"><i
                                                                class="fab fa-linkedin-in"></i></a>
                                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" title="Youtube"><i
                                                                class="fab fa-youtube"></i></a>
                                                        <a href="#" class="social-link" data-bs-toggle="tooltip"
                                                           data-bs-placement="top" title="Website"><i
                                                                class="fa-solid fa-globe"></i></a>
                                                    </div>
                                                </div>
                                                {{--<div class="about-step">
                                                    <h5>Address</h5>
                                                    <p class="mb-0">00 Challis St, Newport, Victoria, 0000,
                                                        Australia</p>
                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="setting" role="tabpanel"
                                         aria-labelledby="setting-tab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="main-card mt-4 p-0">
                                                    <div class="nav custom-tabs" role="tablist">
                                                        <button class="tab-link active" data-bs-toggle="tab"
                                                                data-bs-target="#tab-01" type="button" role="tab"
                                                                aria-controls="tab-01" aria-selected="true"><i
                                                                class="fa-solid fa-envelope me-3"></i>Email Preferences
                                                        </button>
                                                        <button class="tab-link" data-bs-toggle="tab"
                                                                data-bs-target="#tab-02" type="button" role="tab"
                                                                aria-controls="tab-02" aria-selected="false"><i
                                                                class="fa-solid fa-key me-3"></i>Password Settings
                                                        </button>
                                                        <button class="tab-link" data-bs-toggle="tab"
                                                                data-bs-target="#tab-03" type="button" role="tab"
                                                                aria-controls="tab-03" aria-selected="false"><i
                                                                class="fa-solid fa-gear me-3"></i>Privacy Settings
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="main-card mt-4">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="tab-01"
                                                             role="tabpanel">
                                                            <div class="bp-title">
                                                                <h4>Email Preferences</h4>
                                                            </div>
                                                            <div class="profile-setting p-4">
                                                                <div class="setting-step">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Receive order
                                                                            confirmation</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">On purchasing an event you will
                                                                        receive an order confirmation email.</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Receive communication
                                                                            from event organisers for my purchased
                                                                            events</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">The organisations whose events
                                                                        you have bought will be able send you further
                                                                        follow up emails.</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Receive event
                                                                            invitations from event organisers sent to my
                                                                            email address</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">Organisations will be able to
                                                                        send you Invitations in their events.</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Receive reminder from
                                                                            Barren for my purchased events</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">After purchasing event you will
                                                                        receive reminder emails before the event starts
                                                                        so that you can get prepared.</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Receive critical
                                                                            notifications on Barren service status and
                                                                            product updates</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">Get updates on new features and
                                                                        insights so that you can make the best use of
                                                                        Barren.</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Receive newsletters
                                                                            from Barren with general and other
                                                                            information</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">Get more insights on Barren
                                                                        that can help to boost your event business.</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Receive notification
                                                                            when someone follows me</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">We will notify you when someone
                                                                        starts following you or your organisation.</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Review review
                                                                            notification when someone shares my
                                                                            events</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-0">We will notify you when someone
                                                                        shares event created by your organisation.</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Receive notification
                                                                            on review related activities</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-0">We will notify you when someone
                                                                        leaves review for your organisation.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab-02" role="tabpanel">
                                                            <div class="bp-title">
                                                                <h4>Password Settings</h4>
                                                            </div>
                                                            <div class="password-setting p-4">
                                                                <div class="password-des">
                                                                    <h4>Change password</h4>
                                                                    <p>You can update your password from here. If you
                                                                        can't remember your current password, just log
                                                                        out and click on Forgot password.</p>
                                                                </div>
                                                                <div class="change-password-form">
                                                                    <div class="form-group mt-4">
                                                                        <label class="form-label">Current
                                                                            password*</label>
                                                                        <div class="loc-group position-relative">
                                                                            <input class="form-control h_50"
                                                                                   type="password"
                                                                                   placeholder="Enter your password">
                                                                            <span class="pass-show-eye"><i
                                                                                    class="fas fa-eye-slash"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mt-4">
                                                                        <label class="form-label">New password*</label>
                                                                        <div class="loc-group position-relative">
                                                                            <input class="form-control h_50"
                                                                                   type="password"
                                                                                   placeholder="Enter your password">
                                                                            <span class="pass-show-eye"><i
                                                                                    class="fas fa-eye-slash"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group mt-4">
                                                                        <label class="form-label">Confirm new
                                                                            password*</label>
                                                                        <div class="loc-group position-relative">
                                                                            <input class="form-control h_50"
                                                                                   type="password"
                                                                                   placeholder="Enter your password">
                                                                            <span class="pass-show-eye"><i
                                                                                    class="fas fa-eye-slash"></i></span>
                                                                        </div>
                                                                    </div>
                                                                    <button class="main-btn btn-hover w-100 mt-5"
                                                                            type="submit">Update Password
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab-03" role="tabpanel">
                                                            <div class="bp-title">
                                                                <h4>Privacy Settings</h4>
                                                            </div>
                                                            <div class="privacy-setting p-4">
                                                                <div class="setting-step">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Lock my user
                                                                            profile</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">Locking profile hides all kinds
                                                                        of user information, activities and interaction
                                                                        from public profile</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Allow people to
                                                                            contact me</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">People will be able to send you
                                                                        emails through Barren who visits your
                                                                        profile</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Allow people to find
                                                                            and invite me to relevant events</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">Based on your preferences event
                                                                        organisers will be able to send you invitations
                                                                        in their events</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Allow people to follow
                                                                            me</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">People will be able to follow
                                                                        you</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Allow people to see my
                                                                            followings</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">People will be able to see whom
                                                                        and which organisations you are following</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Allow people to see my
                                                                            join date</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">People will be able to see when
                                                                        you have started using Barren</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Allow people to see
                                                                            the events I attend</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-4">People will be able to see the
                                                                        events you have purchased</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Allow people to see
                                                                            the events I join as speaker</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-0">People will be able to see the
                                                                        events you have joined as Speaker</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Allow people to see
                                                                            the events I share</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox" checked="">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-0">People will be able to see the
                                                                        events you have shared in Barren</p>
                                                                </div>
                                                                <div class="setting-step pt-4">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h3 class="setting-title">Hide review
                                                                            interactions from public</h3>
                                                                        <label class="btn-switch m-0 ml-2">
                                                                            <input type="checkbox">
                                                                            <span class="checkbox-slider"></span>
                                                                        </label>
                                                                    </div>
                                                                    <p class="mt-1 mb-0">The reviews and ratings given
                                                                        by you will not appear in your public
                                                                        profile</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                        <div class="main-card mt-4">
                                            <div class="card-top p-4">
                                                <div class="card-event-img">
                                                    <img src="assets/images/event-imgs/img-7.jpg" alt="">
                                                </div>
                                                <div class="card-event-dt">
                                                    <h5>Tutorial on Canvas Painting for Beginners</h5>
                                                    <div class="invoice-id">Invoice ID : <span>BRCCRW-11111111</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <div class="card-bottom-item">
                                                    <div class="card-icon">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </div>
                                                    <div class="card-dt-text">
                                                        <h6>Event Starts on</h6>
                                                        <span>01 June 2022</span>
                                                    </div>
                                                </div>
                                                <div class="card-bottom-item">
                                                    <div class="card-icon">
                                                        <i class="fa-solid fa-ticket"></i>
                                                    </div>
                                                    <div class="card-dt-text">
                                                        <h6>Total Tickets</h6>
                                                        <span>1</span>
                                                    </div>
                                                </div>
                                                <div class="card-bottom-item">
                                                    <div class="card-icon">
                                                        <i class="fa-solid fa-money-bill"></i>
                                                    </div>
                                                    <div class="card-dt-text">
                                                        <h6>Paid Amount</h6>
                                                        <span>AUD $50.00</span>
                                                    </div>
                                                </div>
                                                <div class="card-bottom-item">
                                                    <div class="card-icon">
                                                        <i class="fa-solid fa-money-bill"></i>
                                                    </div>
                                                    <div class="card-dt-text">
                                                        <h6>Invoice</h6>
                                                        <a href="invoice.html">Download</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('includes.footer')
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="OwlCarousel/owl.carousel.js"></script>
<script src="bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/night-mode.js"></script>
</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/organiser_profile_view by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:43 GMT -->
</html>
