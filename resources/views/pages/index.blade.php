@extends('layouts.app')

@section('content')
    <div class="wrapper">
        {{--<div class="hero-banner">
        <div class="container">
        <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 col-md-10">
        <div class="hero-banner-content">
        <h2>The Easiest and Most Powerful Online Event Booking and Ticketing System</h2>
        <p>Barren is an all-in-one event ticketing platform for event organisers, promoters, and managers. Easily create, promote and manage your events of any type and size.</p>
        <a href="create.html" class="main-btn btn-hover">Etkinlik Oluştur <i class="fa-solid fa-arrow-right ms-3"></i></a>
        </div>
        </div>
        </div>
        </div>
        </div>--}}
        <div class="explore-events p-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="main-title">
                            <h3>Etkinlikleri Keşfet</h3>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-filter-items">
                            <div class="featured-controls">
                                <div class="filter-tag">
                                    <a href="{{route('home')}}" class="active">All</a>
                                    <a href="{{route('home', ['date' => 'today'])}}">Bugün</a>
                                    <a href="{{route('home', ['date' => 'tomorrow'])}}">Yarın</a>
                                    <a href="{{route('home', ['date' => 'this_week'])}}">Bu Hafta içi</a>
                                    <a href="{{route('home', ['date' => 'this_weekend'])}}">Bu Hafta sonu</a>
                                    <a href="{{route('home', ['date' => 'next_week'])}}">Önümüzdeki Hafta İçi</a>
                                    <a href="{{route('home', ['date' => 'next_weekend'])}}">Önümüzdeki Hafta Sonu</a>
                                    <a href="{{route('home', ['date' => 'this_month'])}}">Bu Ay</a>
                                    <a href="{{route('home', ['date' => 'next_month'])}}">Önümüzdeki Ay</a>
                                    <a href="{{route('home', ['date' => 'this_year'])}}">Bu Yıl</a>
                                    <a href="{{route('home', ['date' => 'next_year'])}}">Önümüzdeki Yıl</a>
                                </div>
                                <div class="controls">
                                    <button type="button" class="control" data-filter="all">Hepsi</button>
                                    <button type="button" class="control" data-filter=".arts">Sanat</button>
                                    <button type="button" class="control" data-filter=".business">İş</button>
                                    <button type="button" class="control" data-filter=".concert">Konser</button>
                                    <button type="button" class="control" data-filter=".workshops">El İşleri</button>
                                    <button type="button" class="control" data-filter=".coaching_consulting">Fitness</button>
                                    <button type="button" class="control" data-filter=".gym">GYM</button>
                                    <button type="button" class="control" data-filter=".volunteer">Gönüllü</button>
                                    <button type="button" class="control" data-filter=".sports">Spor</button>
                                    <button type="button" class="control" data-filter=".free">Ücretsiz</button>
                                </div>
                                <div class="row" data-ref="event-filter-content">
                                    @foreach($events as $event)
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix {{ is_array($event->tags) ? implode(' ', $event->tags) : '' }}" data-ref="mixitup-target">
                                            <div class="main-card mt-4">
                                                <div class="event-thumbnail">
                                                    <a href="{{ route('events.show', ['event' => $event->id]) }}" class="thumbnail-img">
                                                        <img src="{{ $event->image }}" alt="">
                                                    </a>
                                                    <span class="bookmark-icon" title="Bookmark"></span>
                                                </div>
                                                <div class="event-content">
                                                    <a href="{{ route('events.show', ['event' => $event->id]) }}" class="event-title">{{$event->name}}</a>
                                                    <div class="duration-price-remaining">
                                                        <span class="duration-price">@if($event->min_price != 0)₺ {{$event->min_price}} @else Ücretsiz @endif</span>
                                                        <span class="remaining"></span>
                                                    </div>
                                                </div>
                                                <div class="event-footer">
                                                    <div class="event-timing">
                                                        <div class="publish-date">
                                                            <span><i class="fa-solid fa-calendar-day me-2"></i>{{$event->start_date->translatedFormat('j M y')}}</span>
                                                            <span class="dot"><i class="fa-solid fa-circle"></i></span>
                                                            <span>{{$event->start_date->diffForHumans()}}</span>
                                                        </div>
                                                        <span class="publish-time"><i class="fa-solid fa-clock me-1"></i>{{ $event->end_date->diffForHumans($event->start_date, true) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="browse-btn">
                                    <a href="explore_events.html" class="main-btn btn-hover ">Tümünü Görüntüle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="host-engaging-event-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="main-title">
                            <h3>Host Engaging Online and Venue Events with Barren</h3>
                            <p>Organise venue events and host online events with unlimited possibilities using our built-in virtual event platform. Build a unique event experience for you and your attendees.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="engaging-block">
                            <div class="owl-carousel engaging-slider owl-theme">
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="assets/images/icons/venue-events.png" alt="">
                                            </div>
                                            <h4>Venue Events</h4>
                                            <p>Create outstanding event page for your venue events, attract attendees and sell more tickets.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="assets/images/icons/webinar.png" alt="">
                                            </div>
                                            <h4>Webinar</h4>
                                            <p>Webinars tend to be one-way events. Barren helps to make them more engaging.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="assets/images/icons/training-workshop.png" alt="">
                                            </div>
                                            <h4>Training & Workshop </h4>
                                            <p>Create and host profitable workshops and training sessions online, sell tickets and earn money.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="assets/images/icons/online-class.png" alt="">
                                            </div>
                                            <h4>Online Class</h4>
                                            <p>Try our e-learning template to create a fantastic e-learning event page and drive engagement. </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="host-item">
                                            <div class="host-img">
                                                <img src="assets/images/icons/talk-show.png" alt="">
                                            </div>
                                            <h4>Talk Show</h4>
                                            <p>Use our intuitive built-in event template to create and host an engaging Talk Show.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="main-title">
                            <h3>No Feature Overload, Get Exactly What You Need</h3>
                            <p>As well as being the most affordable online-based event registration tool and one of the best online event ticketing systems in Australia, Barren is super easy-to-use and built with a simplistic layout which is totally convenient for the organisers to operate.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="feature-group-list">
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-1.png" alt="">
                                        </div>
                                        <h4>Online Events</h4>
                                        <p>Built-in video conferencing platform to save you time and cost.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-2.png" alt="">
                                        </div>
                                        <h4>Venue Event</h4>
                                        <p>Easy-to-use features to create and manage your venue events.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-3.png" alt="">
                                        </div>
                                        <h4>Engaging Event Page</h4>
                                        <p>Create engaging event pages with your logo and our hero image collage gallery.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-4.png" alt="">
                                        </div>
                                        <h4>Marketing Automation</h4>
                                        <p>Use our marketing automation tools to promote your events on social media and email.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-5.png" alt="">
                                        </div>
                                        <h4>Sell Tickets</h4>
                                        <p>Start monetising your online and venue events, sell unlimited* tickets.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-6.png" alt="">
                                        </div>
                                        <h4>Networking</h4>
                                        <p>Engage your attendees with the speakers using our interactive tools and build your own network.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-7.png" alt="">
                                        </div>
                                        <h4>Recording</h4>
                                        <p>Securely record your online events and save on the cloud of your choice*.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-8.png" alt="">
                                        </div>
                                        <h4>Live Streaming</h4>
                                        <p>Livestream your online events on Facebook, YouTube and other social networks.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-9.png" alt="">
                                        </div>
                                        <h4>Engagement Metrics</h4>
                                        <p>Track your event engagement metrics like visitors, ticket sales, etc. from your dashboard.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-10.png" alt="">
                                        </div>
                                        <h4>Security & Support</h4>
                                        <p>Secure data and payment processing backed by a team eager to see you succeed.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-11.png" alt="">
                                        </div>
                                        <h4>Reports & Analytics</h4>
                                        <p>Get useful reports and insights to boost your sales and marketing activities.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div class="feature-item mt-46">
                                        <div class="feature-icon">
                                            <img src="assets/images/icons/feature-icon-12.png" alt="">
                                        </div>
                                        <h4>Mobile & Desktop App</h4>
                                        <p>Stay on top of things, manage and monitor your events using the organiser app.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="host-step-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="main-title">
                            <h3>Be a Star Event Host in 4 Easy Steps</h3>
                            <p>Use early-bird discounts, coupons and group ticketing to double your ticket sale. Get paid quickly and securely.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="easy-steps-tab">
                            <div class="nav step-tabs" role="tablist">
                                <button class="step-link active" data-bs-toggle="tab" data-bs-target="#step-01" type="button" role="tab" aria-controls="step-01" aria-selected="true">Step 01<span>Create Your Event</span></button>
                                <button class="step-link" data-bs-toggle="tab" data-bs-target="#step-02" type="button" role="tab" aria-controls="step-02" aria-selected="false">Step 02<span>Sell Tickets and Get Paid</span></button>
                                <button class="step-link" data-bs-toggle="tab" data-bs-target="#step-03" type="button" role="tab" aria-controls="step-03" aria-selected="false">Step 03<span>Finally, Host Your Event</span></button>
                                <button class="step-link" data-bs-toggle="tab" data-bs-target="#step-04" type="button" role="tab" aria-controls="step-04" aria-selected="false">Step 04<span>Repeat and Grow</span></button>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="step-01" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="step-text">Sign up for free and create your event easily in minutes.</div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-1.png" alt="">
                                                </div>
                                                <h4>Sign up for free</h4>
                                                <p>Sign up easily using your Google or Facebook account or email and create your events in minutes.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-2.png" alt="">
                                                </div>
                                                <h4>Use built-in event page template</h4>
                                                <p>Choose from our customised page templates specially designed to attract attendees.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-3.png" alt="">
                                                </div>
                                                <h4>Customise your event page as you like</h4>
                                                <p>Add logo, collage hero assets/images, and add details to create an outstanding event page.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step-02" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="step-text">Use our multiple ticketing features & marketing automation tools to boost ticket sales.</div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-4.png" alt="">
                                                </div>
                                                <h4>Promote your events on social media & email</h4>
                                                <p>Use our intuitive event promotion tools to reach your target audience and sell tickets.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-5.png" alt="">
                                                </div>
                                                <h4>Use early-bird discounts, coupons & group ticketing</h4>
                                                <p>Double your ticket sales using our built-in discounts, coupons and group ticketing features.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-6.png" alt="">
                                                </div>
                                                <h4>Get paid quickly & securely</h4>
                                                <p>Use our PCI compliant payment gateways to collect your payment securely.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step-03" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="step-text">Use Barren to host any types of online events for free.</div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-7.png" alt="">
                                                </div>
                                                <h4>Free event hosting</h4>
                                                <p>Use Eventbookings to host any types of online events for free.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-8.png" alt="">
                                                </div>
                                                <h4>Built-in video conferencing platform</h4>
                                                <p>No need to integrate with ZOOM or other 3rd party apps, use our built-in video conferencing platform for your events.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-9.png" alt="">
                                                </div>
                                                <h4>Connect your attendees with your event</h4>
                                                <p>Use our live engagement tools to connect with attendees during the event.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step-04" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="step-text">Create more events and earn more money.</div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-10.png" alt="">
                                                </div>
                                                <h4>Create multiple sessions & earn more</h4>
                                                <p>Use our event scheduling features to create multiple sessions for your events & earn more money.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-11.png" alt="">
                                                </div>
                                                <h4>Clone past event to create similar events</h4>
                                                <p>Use our event cloning feature to clone past event and create a new one easily within a few clicks.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="step-item">
                                                <div class="step-icon">
                                                    <img src="assets/images/icons/step-icon-12.png" alt="">
                                                </div>
                                                <h4>Get support like nowhere else</h4>
                                                <p>Our dedicated on-boarding coach will assist you in becoming an expert in no time.</p>
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
        <div class="testimonial-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="main-title">
                            <h3>Transforming Thousands of Event Hosts Just Like You</h3>
                            <p>Be part of a winning team. We are continuously thriving to bring the best to our customers. Be that a new product feature, help in setting up your events or even supporting your customers so that they can easily buy tickets and participate your in events. Here is what some of the clients have to say,</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="testimonial-slider-area">
                            <div class="owl-carousel testimonial-slider owl-theme">
                                <div class="item">
                                    <div class="main-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
                                            </div>
                                            <div class="testimonial-user-dt">
                                                <h5>Madeline S.</h5>
                                                <span>Events Co-ordinator</span>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
                                            </div>
                                            <div class="testimonial-user-dt">
                                                <h5>Gabrielle B.</h5>
                                                <span>Administration</span>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
                                            </div>
                                            <div class="testimonial-user-dt">
                                                <h5>Piyush G.</h5>
                                                <span>Application Developer</span>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
                                            </div>
                                            <div class="testimonial-user-dt">
                                                <h5>Joanna P.</h5>
                                                <span>Event manager</span>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
                                            </div>
                                            <div class="testimonial-user-dt">
                                                <h5>Romo S.</h5>
                                                <span>Admin</span>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="main-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus maximus arcu et ligula maximus vehicula. Phasellus at luctus lacus, quis eleifend nibh. Nam vitae convallis nisi, vitae tempus risus.</p>
                                            </div>
                                            <div class="testimonial-user-dt">
                                                <h5>Christopher F.</h5>
                                                <span>Online Marketing Executive</span>
                                                <ul>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <span class="quote-icon"><i class="fa-solid fa-quote-right"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-organisations-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title text-center">
                            <h3>321+ events created by thousands of organisations around the globe</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="organisations-area">
                            <div class="owl-carousel organisations-slider owl-theme">
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="{{asset('assets/images/icons/sponsor-1.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="{{asset('assets/images/icons/sponsor-2.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="{{asset('assets/images/icons/sponsor-3.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="{{asset('assets/images/icons/sponsor-4.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="{{asset('assets/images/icons/sponsor-5.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="{{asset('assets/images/icons/sponsor-6.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="sponsor">
                                        <a href="#"><img src="{{asset('assets/images/icons/sponsor-7.png')}}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="{{asset('mixitup/dist/mixitup.min.js')}}"></script>
    <script>
        var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

        var mixer = mixitup(containerEl, {
            selectors: {
                target: '[data-ref~="mixitup-target"]'
            }
        });
    </script>
@endsection
