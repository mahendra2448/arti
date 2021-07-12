@extends('frontend.layouts.app-arti')
@section('title',appName())

@section('content')
    <main id="content">
        <div id="carousel-arti" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="section header" style="background-image: linear-gradient(to left, rgba(12,41,65,.75) 20%, transparent 70%), url('{{url('img/bg/homepic.webp')}}')">
                        <div class="container small-device-home position-relative">
                            <div class="d-block heading-text">
                                <div class="heading">
                                    <span>Yayasan ARTI</span>
                                </div>
                                <div class="sub-heading mb-5">
                                    <span>Helping others striving for the best</span>
                                </div>
                                <a href="about" class="text-decoration-none btn-secondary">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="section header" style="background-image: linear-gradient(to left, rgba(12,41,65,.75) 20%, transparent 70%), url('{{url('img/bg/home1.jpg')}}')">
                        <div class="container small-device-home position-relative">
                            <div class="d-block heading-text">
                                <div class="heading">
                                    <span>Yayasan ARTI</span>
                                </div>
                                <div class="sub-heading mb-5">
                                    <span>Helping others striving for the best</span>
                                </div>
                                <a href="about" class="text-decoration-none btn-secondary">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="section header" style="background-image: linear-gradient(to left, rgba(12,41,65,.75) 20%, transparent 70%), url('{{url('img/bg/home2.jpg')}}')">
                        <div class="container small-device-home position-relative">
                            <div class="d-block heading-text">
                                <div class="heading">
                                    <span>Yayasan ARTI</span>
                                </div>
                                <div class="sub-heading mb-5">
                                    <span>Helping others striving for the best</span>
                                </div>
                                <a href="about" class="text-decoration-none btn-secondary">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section desc">
            <div class="container">
                <div class="row about">
                    <div class="col-md-7 d-flex align-items-center">
                        <p><strong>YAYASAN ARTI</strong> hadir untuk memperjuangkan hak atas martabat, kehidupan yang layak, dan keadilan sosial bagi kelompok marjinal, anak, dan remaja melalui <strong>Penelitian dan Pelatihan</strong>.</p>
                        <div class="bg-desc"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-desc"></div>
                    </div>
                </div>
                <div class="row about two">
                    <div class="col-12 py-4">
                        <div class="bg-desc two"></div>
                        <p>
                            Yayasan ARTI memiliki fokus untuk melakukan Penelitian Tindakan (Action Research) dan Pengembangan Kapasitas (Capacity Building), dengan mengggunakan pendekatan partisipatoris.
                        </p>
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
                <figure class="effect-jazz blue">
                    <img src="{{url('img/exp/exp1.webp')}}" alt="exp1">
                    <figcaption>
                        <h2 class="m-auto">
                            Mental Health <br> First Aid
                        </h2>
                    </figcaption>			
                </figure>
                <figure class="effect-jazz red">
                    <img src="{{url('img/exp/exp2.webp')}}" alt="exp2">
                    <figcaption>
                        <h2 class="m-auto">
                            Training <br> of Trainers
                        </h2>
                    </figcaption>			
                </figure>
                <figure class="effect-jazz blue">
                    <img src="{{url('img/exp/exp3.webp')}}" alt="exp3">
                    <figcaption>
                        <h2 class="m-auto">
                            Module <br>Development
                        </h2>
                    </figcaption>			
                </figure>
            </div>
            <div class="row row-cols-sm-1 row-cols-md-3 exp-thumbs">
                <figure class="effect-jazz red">
                    <img src="{{url('img/exp/exp4.webp')}}" alt="exp4">
                    <figcaption>
                        <h2 class="m-auto">
                        Mental Health & <br> Psychosocial Support
                        </h2>
                    </figcaption>			
                </figure>
                <figure class="effect-jazz blue">
                    <img src="{{url('img/exp/exp5.webp')}}" alt="exp5">
                    <figcaption>
                        <h2 class="m-auto">
                            Action <br> Research
                        </h2>
                    </figcaption>			
                </figure>
                <figure class="effect-jazz red">
                    <img src="{{url('img/exp/exp6.webp')}}" alt="exp6">
                    <figcaption>
                        <h2 class="m-auto">
                            Capacity <br> Building
                        </h2>
                    </figcaption>			
                </figure>
            </div>
        </div>

        <div class="testi">
            <h1>What They Say</h1>
            <div class="container">
                <div class="testi-wrapper">
                    <div class="quotes open"></div>
                    <div class="quotes close"></div>
                    <div class="testi-slide m-auto">
                        <div class="testi-text">
                            <p>Dengan mengikuti collaborative learning mengenai kesehatan mental dengan Yayasan ARTI, saya jadi memahami kalau kesehatan secara teori merupakan hal yang kompleks. Dalam sesi collaborative learning ini Yayasan ARTI tidak hanya membawakan teori, tetapi juga kasus-kasus di kehidupan nyata yang sangat menarik dan menyentuh.</p>

                            <div class="testee">
                                <p><strong>Bani Risset</strong></p>
                                <span>IT & Public Communication, <br>Indonesia AIDS Coalition (IAC)</span>
                            </div>
                        </div>
                        <div class="testi-text">
                            <p>Dengan mengikuti collaborative learning mengenai kesehatan mental dengan Yayasan ARTI, saya jadi memahami kalau kesehatan secara teori merupakan hal yang kompleks. Dalam sesi collaborative learning ini Yayasan ARTI tidak hanya membawakan teori, tetapi juga kasus-kasus di kehidupan nyata yang sangat menarik dan menyentuh.</p>

                            <div class="testee">
                                <p><strong>Bani Risset</strong></p>
                                <span>IT & Public Communication, <br>Indonesia AIDS Coalition (IAC)</span>
                            </div>
                        </div>
                        <div class="testi-text">
                            <p>Dengan mengikuti collaborative learning mengenai kesehatan mental dengan Yayasan ARTI, saya jadi memahami kalau kesehatan secara teori merupakan hal yang kompleks. Dalam sesi collaborative learning ini Yayasan ARTI tidak hanya membawakan teori, tetapi juga kasus-kasus di kehidupan nyata yang sangat menarik dan menyentuh.</p>

                            <div class="testee">
                                <p><strong>Bani Risset</strong></p>
                                <span>IT & Public Communication, <br>Indonesia AIDS Coalition (IAC)</span>
                            </div>
                        </div>
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