@extends('layouts.index')

@section('content')
    @include('partials.navMobile')

    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        @include('partials.topbar')

        @include('partials.navbar')


        <!-- ========== PAGE TITLE ========== -->
        <div class="page-title gradient-overlay op5" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
                                         background-size: cover;">
            <div class="container">
                <div class="inner">
                    <h1>{{ $room->titre }}</h1>
                    <div class="room-details-price">
                        {{ $room->prix }}
                    </div>
                    <ol class="breadcrumb">
                        <li>
                            {{-- <a href="index.html">Home</a> --}}
                            <a href={{ 'index.html' }}}}>Home</a>
                        </li>
                        <li>
                            {{-- <a href="index.html">Rooms</a> --}}
                            <a href="index.html">Rooms</a>
                        </li>
                        <li>Istanbul</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main class="room">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <!-- ROOM SLIDER -->
                        <div class="room-slider">
                            <div id="room-main-image" class="owl-carousel image-gallery">
                                <!-- ITEM -->
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">

                                        <a href="{{ asset('/storage/images/' . $room->img) }}">
                                            {{-- <a href={{ asset("images/rooms/single/single1.jpg") }}> --}}
                                            <img class="img-fluid" src="{{ asset('/storage/images/' . $room->img) }}"
                                                alt="Image">
                                            {{-- <img class="img-fluid" src={{ asset("images/rooms/single/single1.jpg") }}
                                                alt="Image"> --}}
                                        </a>
                                    </figure>
                                </div>
                                {{-- <!-- ITEM -->
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href={{ asset("images/rooms/single/single2.jpg") }}>
                                            <img class="img-fluid" src={{ asset("images/rooms/single/single2.jpg") }}
                                                alt="Image">
                                        </a>
                                    </figure>
                                </div>
                                <!-- ITEM -->
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href={{ asset("images/rooms/single/single3.jpg") }}>
                                            <img class="img-fluid" src={{ asset("images/rooms/single/single3.jpg") }}
                                                alt="Image">
                                        </a>
                                    </figure>
                                </div>
                                <!-- ITEM -->
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href={{ asset("images/rooms/single/single4.jpg") }}>
                                            <img class="img-fluid" src={{ asset("images/rooms/single/single4.jpg") }}
                                                alt="Image">
                                        </a>
                                    </figure>
                                </div>
                                <!-- ITEM -->
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href={{ asset("images/rooms/single/single5.jpg") }}>
                                            <img class="img-fluid" src={{ asset("images/rooms/single/single5.jpg") }}
                                                alt="Image">
                                        </a>
                                    </figure>
                                </div>
                                <!-- ITEM -->
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href={{ asset("images/rooms/single/single6.jpg") }}>
                                            <img class="img-fluid" src={{ asset("images/rooms/single/single6.jpg") }}
                                                alt="Image">
                                        </a>
                                    </figure>
                                </div>
                                <!-- ITEM -->
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href={{ asset("images/rooms/single/single7.jpg") }}>
                                            <img class="img-fluid" src={{ asset("images/rooms/single/single7.jpg") }}
                                                alt="Image">
                                        </a>
                                    </figure>
                                </div>
                                <!-- ITEM -->
                                <div class="item">
                                    <figure class="gradient-overlay-hover image-icon">
                                        <a href={{ asset("images/rooms/single/single8.jpg") }}>
                                            <img class="img-fluid" src={{ asset("images/rooms/single/single8.jpg") }}
                                                alt="Image">
                                        </a>
                                    </figure>
                                </div> --}}
                            </div>

                            <div id="room-thumbs" class="room-thumbs owl-carousel">
                                <!-- ITEM -->
                                <div class="item"><img class="img-fluid"
                                        src={{ asset('images/rooms/single/single1.jpg') }} alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-fluid"
                                        src={{ asset('images/rooms/single/single2.jpg') }} alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-fluid"
                                        src={{ asset('images/rooms/single/single3.jpg') }} alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-fluid"
                                        src={{ asset('images/rooms/single/single4.jpg') }} alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-fluid"
                                        src={{ asset('images/rooms/single/single5.jpg') }} alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-fluid"
                                        src={{ asset('images/rooms/single/single6.jpg') }} alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-fluid"
                                        src={{ asset('images/rooms/single/single7.jpg') }} alt="Image"></div>
                                <!-- ITEM -->
                                <div class="item"><img class="img-fluid"
                                        src={{ asset('images/rooms/single/single8.jpg') }} alt="Image"></div>
                            </div>
                        </div>
                        <p class="dropcap">{{ $room->description }}
                        </p>
                        <p>
                            {{ $room->description }}

                        </p>
                        <div class="section-title sm">
                            <h4>ROOM SERVICES</h4>
                            <p class="section-subtitle">Istanbul Includes</p>
                        </div>
                        <div class="room-services-list">
                            <div class="row">
                                @foreach ($features->chunk(4) as $chunk)
                                    <div class="col-sm-4">
                                        <ul class="list-unstyled">
                                            @foreach ($chunk as $item)
                                                <li>
                                                    @if ($item->statut_id == 1)
                                                        <i class="fa fa-check"></i>
                                                    @else
                                                        <i class="fa fa-times text-danger"></i>
                                                    @endif
                                                    {{ $item->feature->nom }}
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <p> {{ $room->description }}
                        </p>
                        <p> {{ $room->description }}
                        </p>
                        <!-- ROOM REVIEWS -->
                        <div id="room-reviews" class="room-reviews">
                            <div class="section-title sm">
                                <h4>ROOM REVIEWS</h4>
                                <p class="section-subtitle">What our guests are saying about us</p>
                            </div>
                            <div class="rating-details">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="review-summary">
                                            <div class="average">
                                                @if (count($reviews) != 0)
                                                    {{ number_format($reviews->sum('note') / count($reviews), 2) }}
                                                @else
                                                    0
                                                @endif
                                            </div>
                                            <div class="rating">
                                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </div>
                                            <small>Based on {{ count($reviews) }} ratings</small>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <!-- ITEM -->
                                        <div class="progress-item">
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-2 col-3">
                                                    <div class="progress-stars">5 star</div>
                                                </div>
                                                <div class="col-lg-9 col-sm-9 col-8">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 5)) }}%"
                                                            aria-valuenow="{{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 5)) }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-1">
                                                    <div class="progress-value">
                                                        {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 5)) }}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ITEM -->
                                        <div class="progress-item">
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-2 col-3">
                                                    <div class="progress-stars">4 star</div>
                                                </div>
                                                <div class="col-lg-9 col-sm-9 col-8">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 4)) }}%"
                                                            aria-valuenow="{{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 4)) }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-1">
                                                    <div class="progress-value">
                                                        {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 4)) }}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ITEM -->
                                        <div class="progress-item">
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-2 col-3">
                                                    <div class="progress-stars">3 star</div>
                                                </div>
                                                <div class="col-lg-9 col-sm-2 col-8">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 3)) }}%"
                                                            aria-valuenow="{{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 3)) }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-1">
                                                    <div class="progress-value">
                                                        {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 3)) }}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ITEM -->
                                        <div class="progress-item">
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-2 col-3">
                                                    <div class="progress-stars">2 star</div>
                                                </div>
                                                <div class="col-lg-9 col-sm-9 col-8">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 2)) }}%"
                                                            aria-valuenow="{{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 2)) }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-1">
                                                    <div class="progress-value">
                                                        {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 2)) }}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ITEM -->
                                        <div class="progress-item">
                                            <div class="row">
                                                <div class="col-lg-2 col-sm-2 col-3">
                                                    <div class="progress-stars">1 star</div>
                                                </div>
                                                <div class="col-lg-9 col-sm-9 col-8">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 1)) }}%"
                                                            aria-valuenow="{{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 1)) }}"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1 col-sm-1 col-1">
                                                    <div class="progress-value">
                                                        {{ App\Helper\PercentReview::percent($reviews, $reviews->where('note', 1)) }}%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach ($reviews as $item)
                                <div class="review-box">
                                    <figure class="review-author">
                                        <img src={{ asset('storage/'.$item->image) }} alt="Image">
                                    </figure>
                                    <div class="review-contentt">
                                        <div class="rating">
                                            @for ($i = 0; $i < $item->note-1; $i++)
                                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                            @endfor
                                            <i class="fa fa-star voted" aria-hidden="true"></i>
                                            @for ($i = 0; $i < (5 - $item->note); $i++)
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            @endfor
                                        </div>
                                        <div class="review-info">
                                            {{$item->nom}} – {{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}
                                        </div>
                                        <div class="review-text">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quis rem
                                                esse quaerat eius labore repellendus, odit officia, quas provident
                                                reprehenderit magnam adipisci inventore quibusdam est architecto nisi.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="similar-rooms">
                            <div class="section-title sm">
                                <h4>SIMILAR ROOMS</h4>
                                <p class="section-subtitle">Leave your review</p>
                            </div>
                            <div class="row">
                                 @foreach ($roomListAll->shuffle()->take(3) as $item)
                                <!-- ITEM -->
                                <div class="col-lg-4">
                                    <div class="room-grid-item">
                                        <figure class="gradient-overlay-hover link-icon">
                                            <a href="room.html">
                                                {{-- <img src={{ asset('images/rooms/single/single1.jpg') }}
                                                    class="img-fluid" alt="Image"> --}}
                                                <img src="{{ asset('/storage/images/' . $item->img) }}" }}
                                                class="img-fluid" alt="Image">

                                            </a>
                                            <div class="room-services">
                                                <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                    data-placement="right" data-trigger="hover"
                                                    data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                                <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                    data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                    data-original-title="WiFi"></i>
                                                <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                    data-trigger="hover" data-content="Plasma TV with cable channels"
                                                    data-original-title="TV"></i>
                                            </div>
                                            <div class="room-price">{{ $item->prix }}</div>
                                        </figure>
                                        <div class="room-info">
                                            <h2 class="room-title">
                                                <a href="room.html">{{ $item->category_room->nom }}</a>
                                            </h2>
                                            <p>Enjoy our single room</p>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                {{-- <!-- ITEM -->
                                <div class="col-lg-4">
                                    <div class="room-grid-item">
                                        <figure class="gradient-overlay-hover link-icon">
                                            <a href="room.html">
                                                <img src={{ asset('images/rooms/double/double.jpg') }}
                                                    class="img-fluid" alt="Image">
                                            </a>
                                            <div class="room-services">
                                                <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                    data-placement="right" data-trigger="hover"
                                                    data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                                <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                    data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                    data-original-title="WiFi"></i>
                                                <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                    data-trigger="hover" data-content="Plasma TV with cable channels"
                                                    data-original-title="TV"></i>
                                            </div>
                                            <div class="room-price">€129 / night</div>
                                        </figure>
                                        <div class="room-info">
                                            <h2 class="room-title">
                                                <a href="room.html">Paris</a>
                                            </h2>
                                            <p>Enjoy our double room</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- ITEM -->
                                <div class="col-lg-4">
                                    <div class="room-grid-item">
                                        <figure class="gradient-overlay-hover link-icon">
                                            <a href="room.html">
                                                <img src={{ asset('images/rooms/deluxe/deluxe.jpg') }}
                                                    class="img-fluid" alt="Image">
                                            </a>
                                            <div class="room-services">
                                                <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                                    data-placement="right" data-trigger="hover"
                                                    data-content="Breakfast Included" data-original-title="Breakfast"></i>
                                                <i class="fa fa-bath" data-toggle="popover" data-placement="right"
                                                    data-trigger="hover" data-content="2 Bathrooms"
                                                    data-original-title="Bathroom"></i>
                                                <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                                    data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                                    data-original-title="WiFi"></i>
                                                <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                                    data-trigger="hover" data-content="Plasma TV with cable channels"
                                                    data-original-title="TV"></i>
                                            </div>
                                            <div class="room-price">€189 / night</div>
                                        </figure>
                                        <div class="room-info">
                                            <h2 class="room-title">
                                                <a href="room.html">Tokyo</a>
                                            </h2>
                                            <p>Enjoy our delux room</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- SIDEBAR -->
                    <div class="col-lg-3 col-12">
                        <div class="sidebar">
                            <!-- WIDGET -->
                            <aside class="widget noborder">
                                <div class="vertical-booking-form">
                                    <div id="booking-notification" class="notification"></div>
                                    <h3 class="form-title">BOOK YOUR ROOM</h3>
                                    <div class="inner">
                                        <form action="{{ route('reservation.store') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input class="form-control" name="nom" type="text"
                                                    placeholder="Your name">
                                            </div>
                                            <!-- EMAIL -->
                                            <div class="form-group">
                                                <input class="form-control" name="email" type="email"
                                                    placeholder="Your Email Address">
                                            </div>
                                            <!-- ROOM TYPE -->
                                            <div class="form-group">
                                                <select class="form-control" name="category_room_id"
                                                    title="Select Room Type" data-header="Room Type" disabled="disabled">
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}" selected="selected">
                                                            {{ $item->nom }}</option>
                                                    @endforeach
                                                    {{-- <option value="Double">Double Room</option>
                                                    <option value="Deluxe">Deluxe Room</option> --}}
                                                </select>
                                            </div>
                                            <!-- DATE -->
                                            <div class="form-group">
                                                <div class="form_date">
                                                    <input type="text" class="datepicker form-control" name="booking_date"
                                                        placeholder="Slect Arrival & Departure Date" readonly="readonly">
                                                </div>
                                            </div>
                                            <!-- GUESTS -->
                                            <div class="form-group">
                                                <div class="panel-dropdown">
                                                    <div class="form-control guestspicker">Guests
                                                        <span class="gueststotal"></span>
                                                    </div>
                                                    <div class="panel-dropdown-content">
                                                        <div class="guests-buttons">
                                                            <label>Adults
                                                                <a href="#" title="" data-toggle="popover"
                                                                    data-placement="top" data-trigger="hover"
                                                                    data-content="18+ years" data-original-title="Adults">
                                                                    <i class="fa fa-info-circle"></i>
                                                                </a>
                                                            </label>
                                                            <div class="guests-button">
                                                                <div class="minus"></div>
                                                                <input type="text" name="adult" class="booking-guests"
                                                                    value="0">
                                                                <div class="plus"></div>
                                                            </div>
                                                        </div>
                                                        <div class="guests-buttons">
                                                            <label>Cildren
                                                                <a href="#" title="" data-toggle="popover"
                                                                    data-placement="top" data-trigger="hover"
                                                                    data-content="Under 18 years"
                                                                    data-original-title="Children">
                                                                    <i class="fa fa-info-circle"></i>
                                                                </a>
                                                            </label>
                                                            <div class="guests-button">
                                                                <div class="minus"></div>
                                                                <input type="text" name="enfant" class="booking-guests"
                                                                    value="0">
                                                                <div class="plus"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- BOOKING BUTTON -->
                                            <button type="submit" class="btn btn-dark btn-fw mt20 mb20">BOOK A
                                                ROOM</button>
                                        </form>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @include('partials.footer')

    </div>
    @include('partials.notification')
@endsection
