<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="YAYASAN ARTI adalah sebuah organisasi non-profit yang berdiri sejak tahun 2001. ARTI lahir dari kepedulian para akademis, pendidik, pegiat hak anak, dan aktivis sosial untuk menciptakan kepedulian masyarakat Indonesia terhadap hak-hak dan kesejahteraan anak, serta penghormatan terhadap martabat manusia.">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>@yield('title')</title>
<link rel="icon" type="image/x-icon" href="{{url('/img/iconified/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{url('/img/iconified/apple-touch-icon.png') }}">
<link rel="apple-touch-icon" sizes="57x57" href="{{url('/img/iconified/apple-touch-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{url('/img/iconified/apple-touch-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{url('/img/iconified/apple-touch-icon-76x76.png') }}">

<link rel="canonical" href="{{route('frontend.index')}}">>
<link rel="stylesheet" href="{{url('/libs/bootstrap-4.6.0/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{url('css/fonts/fonts.css') }}">
<link rel="stylesheet" href="{{url('css/style.css?v=13246525412') }}">
<link rel="stylesheet" href="{{url('/libs/slick-1.8.1/slick/slick.css') }}">
<link rel="stylesheet" href="{{url('/libs/slick-1.8.1/slick/slick-theme.css') }}">
@toastr_css
