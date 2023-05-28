<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:37 GMT -->
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

@include('includes.header')


<div class="wrapper">
    <div class="breadcrumb-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-10">
                    <div class="barren-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">

                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="event-dt-block p-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="main-title checkout-title">
                                    <h3>Sipariş Onayı</h3>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-12 col-md-12">
                                <div class="checkout-block">
                                    <div class="main-card">
                                        <div class="bp-title">
                                            <h4>Faturalandırma</h4>
                                        </div>
                                        <div class="bp-content bp-form">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">İsim*</label>
                                                        <input class="form-control h_50" type="text" placeholder=""
                                                               value="{{$user->name}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Eposta*</label>
                                                        <input class="form-control h_50" type="text" placeholder=""
                                                               value="{{$user->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Adres</label>
                                                        <input class="form-control h_50" type="text" placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group main-form mt-4">
                                                        <label class="form-label">Ülke</label>
                                                        <select class="selectpicker" data-size="5"
                                                                title="Seçim Yapılmadı" data-live-search="true">
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria (Österreich)</option>
                                                            <option value="Belgium">Belgium (België)</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Turkey">Türkiye</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Şehir</label>
                                                        <input class="form-control h_50" type="text" placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">İlçe/Mahalle</label>
                                                        <input class="form-control h_50" type="text" placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Posta Kodu</label>
                                                        <input class="form-control h_50" type="text" placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-card mt-5">
                                        <div class="bp-title">
                                            <h4>Toplam Ödenecek Tutar : ₺{{50 * $seatCount}}</h4>
                                        </div>
                                        <div class="bp-content bp-form">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Kart Numarası*</label>
                                                        <input class="form-control h_50" type="text" placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">Bitiş Tarihi*</label>
                                                        <input class="form-control h_50" type="text" placeholder="MM/YY"
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="form-group mt-4">
                                                        <label class="form-label">CVV*</label>
                                                        <input class="form-control h_50" type="text" placeholder=""
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <button class="main-btn btn-hover h_50 w-100 mt-5" type="button"
                                                            onclick="window.location.href='booking_confirmed.html'">
                                                        Onayla & Öde
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12">
                                <div class="main-card order-summary">
                                    <div class="bp-title">
                                        <h4>Fatura Bilgileri</h4>
                                    </div>
                                    <div class="order-summary-content p_30">
                                        <div class="event-order-dt">
                                            <div class="event-thumbnail-img">
                                                <img src="{{asset($event->image)}}" alt="">
                                            </div>
                                            <div class="event-order-dt-content">
                                                <h5>{{$event->name}}</h5>
                                                <span>{{$event->start_date->format('m.d.Y H:i')}}</span>
                                                {{--                                                <div class="category-type">Online Event</div>--}}
                                            </div>
                                        </div>
                                        <div class="order-total-block">
                                            <div class="order-total-dt">
                                                <div class="order-text">Toplam Bilet</div>
                                                <div class="order-number">{{$seatCount}}</div>
                                            </div>
                                            <div class="order-total-dt">
                                                <div class="order-text">Alt Toplam</div>
                                                <div class="order-number">₺{{$price}} * {{$seatCount}}</div>
                                            </div>
                                            <div class="divider-line"></div>
                                            <div class="order-total-dt">
                                                <div class="order-text">Toplam</div>
                                                <div class="order-number ttl-clr">₺{{$price * $seatCount}}</div>
                                            </div>
                                        </div>
                                        {{--<div class="coupon-code-block">
                                            <div class="form-group mt-4">
                                                <label class="form-label">Coupon Code*</label>
                                                <div class="position-relative">
                                                    <input class="form-control h_50" type="text" placeholder="Code"
                                                           value="">
                                                    <button class="apply-btn btn-hover" type="button">Apply</button>
                                                </div>
                                            </div>
                                        </div>--}}
                                        <div class="confirmation-btn">
                                            <form action="{{route('booking.store')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="event_id" value="{{$event->id}}">
                                                <input type="hidden" name="seat_count" value="{{$seatCount}}">
                                                <input type="hidden" name="seats" value="{{implode(',' ,$seats)}}">
                                                <input type="hidden" name="price" value="{{$price * $seatCount}}">
                                                <button class="main-btn btn-hover h_50 w-100 mt-5" type="submit">Onayla & Öde</button>
                                            </form>
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

<script data-cfasync="false"
        src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="OwlCarousel/owl.carousel.js"></script>
<script src="bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/night-mode.js"></script>
</body>

<!-- Mirrored from www.gambolthemes.net/html-items/barren-html/disable-demo-link/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Dec 2022 13:37:37 GMT -->
</html>
