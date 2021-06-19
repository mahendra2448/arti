
<header>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('frontend.index')}}">
                <img class="img-brand" src="{{url('img/logo/logo.png')}}" alt="Yayasan ARTI logo">
            </a>
            
            <div class="mobile-menu">
                <button class="m-toggle" aria-label="menu"></button>

                <div class="menu">
                    <div class="overlay"></div>
                    <div class="menu-wrapper d-flex">
                        <div class="accordion align-self-center m-auto text-center navigasi" id="menu-item">
                            
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" href="{{route('frontend.about')}}">About Us</a></h2>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" href="{{route('frontend.approach')}}">Our Approach</a></h2>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" href="{{route('frontend.team')}}">Our Teams</a></h2>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" href="{{route('frontend.experiences')}}">Our Experiences</a></h2>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0"><a class="btn-link btn" href="{{route('frontend.contact')}}">Contact</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ activeClass(Route::is('frontend.about')) }}" href="{{route('frontend.about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ activeClass(Route::is('frontend.approach')) }}" href="{{route('frontend.approach')}}">Our Approach</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ activeClass(Route::is('frontend.team')) }}" href="{{route('frontend.team')}}">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ activeClass(Route::is('frontend.experiences')) }}" href="{{route('frontend.experiences')}}">Our Experiences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-ctc {{ activeClass(Route::is('frontend.contact')) }}" href="{{route('frontend.contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        @if (Route::is('frontend.experiences'))
            <div class="pg-experiences-nav">
                <ul class="sub-nav">
                    <li><a href="#penelitian">Penelitian</a></li>
                    <li><a href="#pendidikan">Pendidikan & Pelatihan</a></li>
                    <li><a href="#publikasi">Publikasi</a></li>
                    <li><a href="#partnership">Partnership</a></li>
                </ul>
            </div>
        @endif
    </nav>
</header>