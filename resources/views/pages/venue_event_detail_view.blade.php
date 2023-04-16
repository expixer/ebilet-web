@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="breadcrumb-block">

        </div>
        <div class="event-dt-block p-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="event-top-dts">
                            <div class="event-top-date">
                                <span class="event-month">{{ $event->start_date->translatedFormat('M') }}</span>
                                <span class="event-date">{{ $event->start_date->format('d') }}</span>
                            </div>
                            <div class="event-top-dt">
                                <h3 class="event-main-title">{{$event->name}}</h3>
                                <div class="event-top-info-status">
                                    <span class="event-type-name"><i class="fa-solid fa-location-dot"></i>{{ $event->location }}</span>
                                    {{--<span class="event-type-name details-hr">Başlangıcı <span
                                            class="ev-event-date">{{$event->start_date->translatedFormat('jS F l Y H:i')}}</span></span>--}}
                                    <span
                                        class="event-type-name details-hr">{{ $event->end_date->diffForHumans($event->start_date, true) }} sürecek</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12">
                        <div class="main-event-dt">
                            <div class="event-img">
                                <img src="{{asset('assets/images/event-imgs/big-2.jpg')}}" alt="">
                            </div>
                            <div class="share-save-btns dropdown">
                                <button class="sv-btn me-2"><i class="fa-regular fa-bookmark me-2"></i>Kaydet</button>
                                <button class="sv-btn" data-bs-toggle="dropdown" aria-expanded="false"><i
                                        class="fa-solid fa-share-nodes me-2"></i>Paylaş
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fa-brands fa-facebook me-3"></i>Facebook</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-brands fa-twitter me-3"></i>Twitter</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-brands fa-linkedin-in me-3"></i>LinkedIn</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-regular fa-envelope me-3"></i>Email</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-event-content">
                                <h4>Etkinlik Hakkında</h4>
                                <p>{{$event->description}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="main-card event-right-dt">
                            <div class="bp-title">
                                <h4>Etkinlik Detayları</h4>
                            </div>
                            <div class="time-left">
                                <div hidden id="start-date">{{$event->start_date->format('m.d.Y H:i:s')}}</div>
                                <div class="countdown">
                                    <div class="countdown-item">
                                        <span id="day"></span>Gün
                                    </div>
                                    <div class="countdown-item">
                                        <span id="hour"></span>Saat
                                    </div>
                                    <div class="countdown-item">
                                        <span id="minute"></span>Dakika
                                    </div>
                                    <div class="countdown-item">
                                        <span id="second"></span>Saniye
                                    </div>
                                </div>
                            </div>
                            <div class="event-dt-right-group mt-5">
                                <div class="event-dt-right-icon">
                                    <i class="fa-solid fa-circle-user"></i>
                                </div>
                                <div class="event-dt-right-content">
                                    <h4>Kim tarafından?</h4>
                                    <h5>{{$event->merchant->merchant_name}}</h5>
                                    {{--<a href="attendee_profile_view.html">View Profile</a>--}}
                                </div>
                            </div>
                            <div class="event-dt-right-group">
                                <div class="event-dt-right-icon">
                                    <i class="fa-solid fa-calendar-day"></i>
                                </div>
                                <div class="event-dt-right-content">
                                    <h4>Ne zaman?</h4>
                                    <h5>Başlangıç: </h5>
                                    <p>{{ $event->start_date }}</p>
                                    <h5>Bitiş: </h5>
                                    <p>{{ $event->end_date }}</p>
                                    {{--<div class="add-to-calendar">
                                        <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-regular fa-calendar-days me-3"></i>Add to Calendar
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><i class="fa-brands fa-windows me-3"></i>Outlook</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-brands fa-apple me-3"></i>Apple</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-brands fa-google me-3"></i>Google</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="fa-brands fa-yahoo me-3"></i>Yahoo</a></li>
                                        </ul>
                                    </div>--}}
                                </div>
                            </div>
                            <div class="event-dt-right-group">
                                <div class="event-dt-right-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="event-dt-right-content">
                                    <h4>Nerede?</h4>
                                    <h5 class="mb-0">{{ $event->location }}</h5>
{{--                                    <a href="#"><i class="fa-solid fa-location-dot me-2"></i>Haritada Gör</a>--}}
                                </div>
                            </div>
                            @if($event->isSeat)
                                <div class="select-tickets-block" style="max-height: 400px;overflow-y: scroll;">
                                    <h6>Biletini Seç</h6>
                                    @foreach($event->products as $ticket)
                                        <div class="ticket">
                                            <div class="select-ticket-action">
                                                ₺
                                                <div class="ticket-price">{{$ticket->price}}</div>
                                                <div class="quantity">
                                                    <div class="counter">
                                                        <span class="down" onClick='decreaseCount(event, this)'>-</span>
                                                        <input type="text" value="0">
                                                        <span class="up" onClick='increaseCount(event, this)'>+</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>{{$ticket->description}}</p>
                                            <hr>
                                        </div>
                                    @endforeach
                                    <div class="xtotel-tickets-count">
                                        {{--                                        <div class="x-title">1x Bilet</div>--}}
                                        {{--                                        ₺<h4><span>0.00</span></h4>--}}
                                    </div>
                                </div>
                            @else
                                <form id="checkout" action="{{route('checkout.index')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="event_id" value="{{$event->id}}">
                                    <input type="hidden" name="product_id" value="{{$event->products[0]->id ?? 0}}">
                                    <div class="container container-seat">
                                        <div class="screen"></div>

                                        <div style="margin-left: 12px">
                                            @if(is_array($event->seats))
                                                @for($i=0; $i<6; $i++)
                                                    <div class="row">
                                                        <div class="seat {{$event->seats[($i * 8)] ? 'sold' : ''}}"><input type="hidden" name="seats[]" value="{{ ($i * 8) + 1  }}" > </div>
                                                        <div class="seat {{$event->seats[($i * 8) + 1] ? 'sold' : ''}}"><input type="hidden" name="seats[]" value="{{ ($i * 8) + 2  }}" > </div>
                                                        <div class="seat {{$event->seats[($i * 8) + 2] ? 'sold' : ''}}"><input type="hidden" name="seats[]" value="{{ ($i * 8) + 3  }}" > </div>
                                                        <div class="seat {{$event->seats[($i * 8) + 3] ? 'sold' : ''}}"><input type="hidden" name="seats[]" value="{{ ($i * 8) + 4  }}" > </div>
                                                        <div class="seat {{$event->seats[($i * 8) + 4] ? 'sold' : ''}}"><input type="hidden" name="seats[]" value="{{ ($i * 8) + 5  }}" > </div>
                                                        <div class="seat {{$event->seats[($i * 8) + 5] ? 'sold' : ''}}"><input type="hidden" name="seats[]" value="{{ ($i * 8) + 6  }}" > </div>
                                                        <div class="seat {{$event->seats[($i * 8) + 6] ? 'sold' : ''}}"><input type="hidden" name="seats[]" value="{{ ($i * 8) + 7  }}" > </div>
                                                        <div class="seat {{$event->seats[($i * 8) + 7] ? 'sold' : ''}}"><input type="hidden" name="seats[]" value="{{ ($i * 8) + 8  }}" > </div>
                                                    </div>
                                                @endfor
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                    <div class="booking-btn">
                                        <button type="submit" href="{{route('checkout.index')}}"
                                                class="main-btn btn-hover w-100">Bilet Al
                                        </button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-css')
    <link rel="stylesheet" href="{{asset('css/seat-style.css')}}"/>
@endsection
@section('custom-js')
    <script src="{{asset('js/timer.js')}}"></script>
    <script src="{{asset('js/seat-script.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#checkout').submit(function (e) {
                e.preventDefault();
                $('.seat.sold').each(function () {
                    $(this).find('input').val(0);
                });
                $('.seat:not(.selected)').each(function () {
                    $(this).find('input').val(0);
                });
                $(this).unbind('submit').submit();
            });
        });
    </script>
@endsection
