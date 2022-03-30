@extends('layouts.index')

@section('content')

@include('partials.navMobile')

    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
        @include('partials.topbar')

        @include('partials.navbar')


        <!-- ========== PAGE TITLE ========== -->
        <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
            background-size: cover;">
            <div class="container">
                <div class="inner">
                    <h1>GALLERY</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main class="gallery-page">
            <!-- FILTERS -->
            <div class="container">
                <div class="gallery-filters">
                    <a href="#" data-filter="*" class="filter active">ALL</a>
                    @foreach ($categoryImage as $item)
                    <a href="#" data-filter=".{{ $item->filter }}" class="filter">{{ $item->nom }}</a>
                    @endforeach
                    {{-- <a href="#" data-filter=".filter-restaurnat" class="filter">RESTAURANT</a>
                    <a href="#" data-filter=".filter-swimmingpool" class="filter">SWIMMING POOL</a>
                    <a href="#" data-filter=".filter-spa" class="filter">SPA</a>
                    <a href="#" data-filter=".filter-roomview" class="filter">ROOM VIEW</a> --}}
                </div>
            </div>
            <!-- GALLERY -->
            <div class="container">
                <div class="grid image-gallery row">
                    @foreach ($imageAll as $item)
                    <!-- ITEM -->
                    {{-- @dump($item->categorie_image->filter) --}}
                    <div class="gallery-item {{ $item->categorie_image->filter }} col-md-3">
                        <figure class="gradient-overlay image-icon">
                            {{-- <a href="{{ asset('/images/gallery/'. $item->url) }}"> --}}
                                <a href="{{ asset('/storage/images/'. $item->url) }}">


                        {{-- <img src="{{ asset('/images/gallery/'. $item->url) }}" class="img-fluid" alt="Image"> --}}
                        <img src="{{ asset('/storage/images/'. $item->url) }}" class="img-fluid" alt="Image">
                            </a>
                            <figcaption>{{ $item->nom }}</figcaption>
                        </figure>
                    </div>

                    @endforeach
                    <!-- ITEM -->
                    {{-- <div class="gallery-item filter-roomview col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery2.jpg") }}>
                                <img src={{ asset("images/gallery/gallery2.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Room View</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery3.jpg") }}>
                                <img src={{ asset("images/gallery/gallery3.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Cocktail</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item filter-restaurnat col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery4.jpg") }}>
                                <img src={{ asset("images/gallery/gallery4.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Breakfast</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery5.jpg") }}>
                                <img src={{ asset("images/gallery/gallery5.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Playground</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item filter-restaurnat col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery6.jpg") }}>
                                <img src={{ asset("images/gallery/gallery6.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Restaurant</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery7.jpg") }}>
                                <img src={{ asset("images/gallery/gallery7.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Wedding Ceremony</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item filter-roomview col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery8.jpg") }}>
                                <img src={{ asset("images/gallery/gallery8.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Beach</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery9.jpg") }}>
                                <img src={{ asset("images/gallery/gallery9.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Honeymoon Room</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item filter-roomview col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery10.jpg") }}>
                                <img src={{ asset("images/gallery/gallery10.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Sea</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item filter-spa col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery11.jpg") }}>
                                <img src={{ asset("images/gallery/gallery11.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Spa Therapy</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item filter-restaurnat col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery12.jpg") }}>
                                <img src={{ asset("images/gallery/gallery12.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Restaurant</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item filter-roomview filter-restaurnat col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery13.jpg") }}>
                                <img src={{ asset("images/gallery/gallery13.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Restaurant</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery14.jpg") }}>
                                <img src={{ asset("images/gallery/gallery14.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Sea</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item filter-restaurnat col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery15.jpg") }}>
                                <img src={{ asset("images/gallery/gallery15.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Restaurant</figcaption>
                        </figure>
                    </div>
                    <!-- ITEM -->
                    <div class="gallery-item filter-roomview col-md-3">
                        <figure class="gradient-overlay image-icon">
                            <a href={{ asset("images/gallery/gallery16.jpg") }}>
                                <img src={{ asset("images/gallery/gallery16.jpg") }} class="img-fluid" alt="Image">
                            </a>
                            <figcaption>Room View</figcaption>
                        </figure>
                    </div> --}}
                </div>
            </div>
        </main>
        @include('partials.footer')
        {{-- <!-- ========== FOOTER ========== -->
        <footer>
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <img src="images/logo.svg" class="footer-logo" alt="Hotel Himara">
                                <div class="inner">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat
                                        assumenda incidunt dolorem aliquam!</p>
                                    <a href="https://www.tripadvisor.com/" target="_blank">
                                        <div class="tripadvisor-banner">
                                            <span class="review">Recommended</span>
                                            <img src="images/icons/tripadvisor.png" alt="Image">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>LATEST NEWS</h3>
                                <div class="inner">
                                    <ul class="latest-posts">
                                        <li>
                                            <a href="blog-post.html">10 Tips for holiday travel</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Honeymoon at Hotel Himara</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Travel gift ideas for every type of traveler</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Breakfast with coffee and orange juice</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>USEFUL LINKS</h3>
                                <div class="inner">
                                    <ul class="useful-links">
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a href="gallery.html">Himara Gallery</a>
                                        </li>
                                        <li>
                                            <a href="location.html">Our Location</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Contact Info</h3>
                                <div class="inner">
                                    <ul class="contact-details">
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Lorem ipsum dolor, 25, Himara
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            Phone: +1 888 123 4567
                                        </li>
                                        <li>
                                            <i class="fa fa-fax"></i>
                                            Fax: +1 888 123 4567
                                        </li>
                                        <li>
                                            <i class="fa fa-globe"></i>
                                            Web: www.hotelhimara.com
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            Email:
                                            <a href="mailto:info@site.com">contact@hotelhimara.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SUBFOOTER -->
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyrights">&copy; 2018 Hotel Himara. Designed by
                                <a href="https://eagle-themes.com/" target="_blank">Eagle-Themes</a>.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip"
                                    href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> --}}
    </div>
    @include('partials.notification')

    {{-- <div class="back-to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div> --}}

    @endsection
