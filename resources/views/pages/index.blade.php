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
                                                        <span title="{{ $event->end_date->diffForHumans($event->start_date, true) }} sürecek" class="publish-time"><i class="fa-solid fa-clock me-1"></i>{{ $event->end_date->diffForHumans($event->start_date, true) }}</span>
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
