@extends('frontend.layouts.app-arti')
@section('title', 'Contact Us | '.appName())

@section('content')
    <main id="content">
        <div class="section header page" style="background-image: linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.35)), url('{{url('img/bg/homepic.webp')}}')">
            <div class="container position-relative d-flex justify-content-center align-self-center">
                <div class="heading-text d-block">
                    <div class="heading">
                        <span>Contact Us</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="medsos">
                            <a href="#"><img src="{{url('img/iconified/ic-mail.png')}}" alt="Email Yayasan ARTI"></a>
                            <a href="#"><img src="{{url('img/iconified/ic-fb.png')}}" alt="Facebook Yayasan ARTI"></a>
                            <a href="#"><img src="{{url('img/iconified/ic-ig.png')}}" alt="Instagram Yayasan ARTI"></a>
                        </div>
                        <div class="details">
                            <a href="mailto:adminsupport@yayasanarti.com">adminsupport@yayasanarti.com</a><br>
                            <a href="tel:0217360856">021 - 7360856</a>   <br>
                            Jalan Kutilang Raya L7 no.14 Bintaro Raya - Sektor 2, Kota Tanggerang Selatan 15412
                            <p>
                            </p>
                            <div class="addon">
                                <span>Pertanyaan, Kritik dan Saran</span>
                                <p>
                                Yayasan ARTI berkomitmen untuk memberikan informasi yang akurat dan jelas kepada para rekan kerja, pendonor, dan publik. Apabila terdapat pertanyaan untuk bekerjasama, saran untuk ide-ide baru yang bisa digagas bersama, atau masukan mengenai kinerja kami, silahkan beritahu kami melalui email kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-block maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7999958649757!2d106.74940511531962!3d-6.289998363317616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f04078f3a439%3A0xd02192425a67abcc!2sMasjid%20Al-Hidayah%2C%20Jl.%20Punai%20Raya%20-%20Kutilang%20V%20Sektor%20II%20Bintaro%20Jaya!5e0!3m2!1sen!2sfr!4v1613811941692!5m2!1sen!2sfr"  frameborder="0" aria-hidden="false" tabindex="0" loading="lazy"></iframe>
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
