
<footer id="contact" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 top">
                <div class="logo-arti"></div>
                <h2>YAYASAN ARTI</h2>
                <span>Action Research & Training Institute</span>

                <p>{!! $foota->address !!}
                    {{ $foota->email }}<br>
                </p>
            </div>
            <div class="col-12 bottom d-flex justify-content-center">
                <a href="mailto:{{ $foota->email }}"><img src="{{url('img/iconified/ic-mail.png')}}" alt="Email Yayasan ARTI"></a>
                <a href="{{ $foota->fb }}"><img src="{{url('img/iconified/ic-fb.png')}}" alt="Facebook Yayasan ARTI"></a>
                <a href="{{ $foota->ig }}"><img src="{{url('img/iconified/ic-ig.png')}}" alt="Instagram Yayasan ARTI"></a>
            </div>
        </div>
    </div>
</footer>