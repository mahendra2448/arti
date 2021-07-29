@extends('frontend.layouts.app-arti')
@section('title',appName())

@section('content')
    <main id="content">
        <div id="carousel-arti" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousel as $key=>$car)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <div class="section header" style="background-image: linear-gradient(to left, rgba(12,41,65,.75) 20%, transparent 70%), url({{ $car->image }})">
                            <div class="container small-device-home position-relative">
                                <div class="d-block heading-text">
                                    <div class="heading">
                                        <span>{{ $car->heading_text }}</span>
                                    </div>
                                    <div class="sub-heading mb-5">
                                        <span>{{ $car->caption }}</span>
                                    </div>
                                    <a href="about" class="text-decoration-none btn-secondary">About Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="section desc">
            <div class="container">
                <div class="row about">
                    <div class="col-md-7 d-flex align-items-center">
                        <p>{!! $homedesc->desc_one !!}</p>
                        <div class="bg-desc"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-desc"></div>
                    </div>
                </div>
                <div class="row about two">
                    <div class="col-12 py-4">
                        <div class="bg-desc two"></div>
                        <p>{!! $homedesc->desc_two !!}</p>
                    </div>
                    <div class="col-md-6 research">
                        <div class="ic"></div>
                        <span class="title">Research</span>
                    </div>
                    <div class="col-md-6 training">
                        <div class="ic"></div>
                        <span class="title">Capacity Building</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="experiences">
            <h1>Our Experiences</h1>
            <div class="row row-cols-sm-1 row-cols-md-3 exp-thumbs">
                @foreach ($expthumb as $exp)
                    <a href="{{route('frontend.experiences')}}" class="text-white">
                        <figure class="effect-jazz @if($loop->odd) blue @else red @endif">
                            <img src="{{ $exp->image }}" alt="{{ $exp->heading_text }}">
                            <figcaption>
                                <h2 class="m-auto">
                                    {!! $exp->heading_text !!}
                                </h2>
                            </figcaption>			
                        </figure>
                    </a>                    
                @endforeach
            </div>
        </div>

        <div class="testi">
            <h1>What They Say</h1>
            <div class="container">
                <div class="testi-wrapper">
                    <div class="quotes open"></div>
                    <div class="quotes close"></div>
                    <div class="testi-slide m-auto">
                        @foreach ($testi as $tes)
                            <div class="testi-text">
                                <p>{!! $tes->desc !!}</p>

                                <div class="testee">
                                    <p><strong>{{ $tes->name }}</strong></p>
                                    <span>{!! $tes->position !!}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <div class="container">
                <div class="row row-cols-md-2">
                    <div class="col-md-7 d-flex align-self-center justify-content-center text-center">
                        <h1>Get in touch <br>with us!</h1>
                    </div>
                    <div class="col-md-5 the-form">
                        <form action="{{ route('frontend.contact.submit') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="frm">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Michael James" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="frm">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="michael@somemail.com" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="frm">
                                    <label for="msg">Message</label>
                                    <textarea name="message" id="msg" class="form-control" rows="5" placeholder="Hello. I'm interested in your ..." required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="frm b-submit">
                                    <button type="submit" class="btn-secondary float-right">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection