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
                    <h1>Blog</h1>
                    <ol class="breadcrumb">
                        <li>
                            <a href={{ route('home') }}>Home</a>
                        </li>
                        <li>Blog</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- ========== MAIN ========== -->
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <!-- POSTS -->
                        <div class="blog-posts">
                            @foreach ($blog as $item)
                                <!-- POST -->
                                <article class="post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="post-thumbnail">
                                                <figure class="gradient-overlay-hover link-icon">
                                                    <a href={{ route("blogLast",$item->id)  }}>
                                                        <img src="{{ asset('/storage/images/'. $item->img) }}"
                                                            class="img-fluid" alt="Image">
                                                            {{-- <img src="{{ asset('/images/blog/'. $item->img) }}"
                                                            class="img-fluid" alt="Image"> --}}
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="post-details">
                                                <h2 class="post-title">
                                                    <a href={{ route("blogLast",$item->id)  }}>{{ $item->title }}</a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span class="author">
                                                <a href="#"><img src={{ asset('images/users/admin.jpg') }} width="16" alt="Image">{{ $item->auteur }}</a>
                                                {{-- <a href="#"><img src={{ asset('images/users/admin.jpg') }} width="16" alt="Image">{{ $item->auteur }}</a> --}}


                                                    {{-- <a href="#"><img src={{ asset('images/users/admin.jpg') }} width="16" alt="Image">{{ $item->auteur }}</a> --}}
                                                    </span>
                                                    <span class="date">
                                                        <a href="#">
                                                            <i class="fa fa-clock-o"></i>{{ $item->creation }}</a>
                                                    </span>
                                                    <span class="comments">
                                                        <a href="#">
                                                            <i class="fa fa-commenting-o"></i>1 Comment</a>
                                                    </span>
                                                    <span class="category">
                                                        <i class="fa fa-folder-open-o"></i>IN
                                                        <a href="#">News</a>,
                                                        <a href="#">Events</a>
                                                    </span>
                                                </div>
                                                <p>{{ Str::limit($item->description, 250) }}</p>

                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach


                            {{-- <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src={{ asset("images/blog/blog-post2.jpg") }} class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src={{ asset("images/users/admin.jpg") }} width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>August 16, 2017</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>5 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam impedit
                                                nihil est modi amet, sapiente sed hic quaerat suscipit sunt labore, ea
                                                quas ut cumque, cum nam accusantium molestiae ipsum ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src={{ asset("images/blog/blog-post3.jpg") }} class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src={{ asset("images/users/admin.jpg") }} width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>January 03, 2018</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>3 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci
                                                assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias
                                                nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione
                                                vitae doloribus ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src={{ asset("images/blog/blog-post4.jpg") }} class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Travel Gift Ideas for Every Type of
                                                    Traveler</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src={{ asset("images/users/admin.jpg") }} width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>February 03, 2018</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>2 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                                                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                                                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                                                dignissimos ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src={{ asset("images/blog/blog-post5.jpg") }} class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Breakfast with coffee and orange juice</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src={{ asset("images/users/admin.jpg") }} width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>February 23, 2018</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>7 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                                                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                                                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                                                dignissimos ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="blog-post.html">
                                                    <img src={{ asset("images/blog/blog-post6.jpg") }} class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="blog-post.html">Running On Sand</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src={{ asset("images/users/admin.jpg") }} width="16"
                                                            alt="Image">JANE Doe</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>March 04, 2018</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i>0 Comments</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    <a href="#">News</a>,
                                                    <a href="#">Events</a>
                                                </span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                                                reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                                                officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                                                dignissimos ...</p>
                                        </div>
                                    </div>
                                </div>
                            </article> --}}
                        </div>

                        @if (count($blog) >= 2)
                        {{ $blog->links('pagination::bootstrap-4') }}

                        @endif

                        {{-- <!-- ========== PAGINATION ========== -->
                        <nav class="pagination">
                            <ul>
                                <li class="prev-pagination">
                                    <a href="#">
                                        &nbsp;<i class="fa fa-angle-left"></i>
                                        Previous &nbsp;</a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>...</li>
                                <li>
                                    <a href="#">18</a>
                                </li>
                                <li>
                                    <a href="#">19</a>
                                </li>
                                <li>
                                    <a href="#">20</a>
                                </li>
                                <li class="next_pagination">
                                    <a href="#">
                                        &nbsp; Next
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                    <!-- SIDEBAR -->
                    <div class="col-lg-3 col-12">

                        <div class="sidebar">
                            {{-- research --}}

                            <aside class="widget noborder">
                                <div class="search">
                                    <form class="widget-search" action="{{ route('search') }}">
                                    @csrf
                                        <input type="search" placeholder="Search" onfocus="this.placeholder ='' " onblur="this.placeholder='Search' " name="data">

                                        <button class="btn-search" id="searchsubmit" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </aside>

                            <!-- WIDGlateET -->
                            <aside class="widget">
                                <h4 class="widget-title">CATEGORIES</h4>
                                <ul class="categories">
                                    @foreach ($categoryArticle as $item)
                                    {{-- @foreach ($item->categorie_article as $items) --}}
                                    <li>
                                        {{-- <a href="#">Travel<span class="posts-num">51</span></a> --}}
                                        <a href={{ route("blogCategorie",$item->id)  }}> {{ $item->nom }}<span class="posts-num">{{ count($item->articles) }}</span></a>
                                    </li>
                                    {{-- @endforeach --}}

                                    @endforeach
                                    {{-- <li>
                                        <a href="#">Rooms<span class="posts-num">24</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Holidays
                                            <span class="posts-num">9</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Travel<span class="posts-num">12</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Events<span class="posts-num">28</span></a>
                                    </li> --}}
                                </ul>
                            </aside>
                            <!-- WIDGET -->
                            <aside class="widget">
                                <htag4 class="widget-title">Latest Posts</h4>
                                <div class="latest-posts">
                                    @foreach ($blogLast as $item)
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    {{-- @dump( route("blogLast",$item->id)  ) --}}
                                                    <a href={{ route("blogLast",$item->id)  }}>
                                                        <img src="{{ asset('/images/blog/'. $item->img) }}"
                                                            class="img-fluid" alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href={{ route("blogLast",$item->id)  }}>{{ $item->title }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                    {{-- <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset('images/blog/blog-post2.jpg') }}
                                                            class="img-fluid" alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Are you ready to enjoy your
                                                            holidays</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset('images/blog/blog-post3.jpg') }}
                                                            class="img-fluid" alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset('images/blog/blog-post4.jpg') }}
                                                            class="img-fluid" alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Travel Gift Ideas for Every Type of
                                                            Traveler</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="blog-post.html">
                                                        <img src={{ asset('images/blog/blog-post5.jpg') }}
                                                            class="img-fluid" alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="blog-post.html">Breakfast with coffee and orange
                                                            juic</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </aside>
                            <!-- WIDGET -->
                            <aside class="widget">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tagcloud">
                                    @foreach ($tag as $item)
                                    <a href={{ route("tagCategorie",$item->id)  }}>
                                        <span class="tag">{{ $item->nom }}</span></a>

                                    @endforeach
                                    {{-- <a href="#">
                                        <span class="tag">Travel</span></a>
                                    <a href="#">
                                        <span class="tag">Wedding</span></a>
                                    <a href="#">
                                        <span class="tag">Food</span></a>
                                    <a href="#">
                                        <span class="tag">Music</span></a>
                                    <a href="#">
                                        <span class="tag">City</span></a>
                                    <a href="#">
                                        <span class="tag">Image</span></a>
                                    <a href="#">
                                        <span class="tag">Hotel</span></a> --}}
                                </div>
                            </aside>
                        </div>
                    </div>
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
