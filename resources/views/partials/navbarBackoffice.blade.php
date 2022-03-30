<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href={{ route("home") }}><img style="height: 200px; width: 200px; border-radius: 50%;" src="{{ asset("images/logo.svg") }}" alt="Logo" srcset=""></a>
                    <h3>Bonjour: {{ Auth::user()->name}}</h3>
                </div>

                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>


            </div>
            <p><form action="{{ route("logout") }}" method="POST">
                @csrf
                <button class="btn btn-primary">Deconnexion</button>

                </form>
            {{-- </div> --}}
            </p>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Request::is('/') ? 'active' : ''; }} ">
                    <a href={{ route("home") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Retour au site</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Request::is('admin/dashboard') ? 'active' : ''; }} ">
                    <a href={{ route("dashboard") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                @editor
                <li class="sidebar-item {{ Request::is('dashboard/room') ? 'active' : ''; }} ">
                    <a href={{ route("room.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>room</span>
                    </a>
                </li>
                @endeditor

                @admin
                <li class="sidebar-item {{ Request::is('dashboard/staff') ? 'active' : ''; }}">
                    <a href={{ route("team.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Team</span>
                    </a>
                </li>
                @endadmin

                @webmaster
                <li class="sidebar-item {{ Request::is('dashboard/blog') ? 'active' : ''; }}">
                    <a href={{ route("blog.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Blog</span>
                    </a>
                </li>
                @endwebmaster

                @admin
                <li class="sidebar-item {{ Request::is('dashboard/gallery') ? 'active' : ''; }}">
                    <a href={{ route("gallery.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Gallery</span>
                    </a>
                </li>
                @endadmin

                @admin
                <li class="sidebar-item {{ Request::is('dashboard/categoryImage/gallery') ? 'active' : ''; }}">
                    <a href={{ route("categoryImage.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Category Image</span>
                    </a>
                </li>
                @endadmin

                @admin
                <li class="sidebar-item {{ Request::is('dashboard/contact') ? 'active' : ''; }}">
                    <a href={{ route("contact.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Contact</span>
                    </a>
                </li>
                @endadmin

                @webmaster
                <li class="sidebar-item {{ Request::is('dashboard/comment') ? 'active' : ''; }}">
                    <a href={{ route("commentaire.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Comment</span>
                    </a>
                </li>
                @endwebmaster

                @admin
                <li class="sidebar-item {{ Request::is('dashboard/carousel') ? 'active' : ''; }}">
                    <a href={{ route("carousel.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Carousel</span>
                    </a>
                </li>
                @endadmin

                @admin
                <li class="sidebar-item {{ Request::is('dashboard/videos') ? 'active' : ''; }}">
                    <a href={{ route("video.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Video</span>
                    </a>
                </li>
                @endadmin

                @admin
                <li class="sidebar-item {{ Request::is('dashboard/reservation') ? 'active' : ''; }}">
                    <a href={{ route("reservation.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Reservation</span>
                    </a>
                </li>
                @endadmin

                @admin
                <li class="sidebar-item {{ Request::is('dashboard/mailbox') ? 'active' : ''; }}">
                    <a href={{ route("mailbox.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Mailbox</span>
                    </a>
                </li>
                @endadmin

                @admin
                <li class="sidebar-item {{ Request::is('dashboard/user') ? 'active' : ''; }}">
                    <a href={{ route("user.index") }} class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>User</span>
                    </a>
                </li>
                @endadmin

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
