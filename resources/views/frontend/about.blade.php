@extends('frontend.layouts.app-arti')
@section('title', 'About Us | '.appName())

@section('content')

<main id="content">
    <div class="section header page" style="background-image: linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.35)), url('{{url('img/bg/pg-about.webp')}}')">
        <div class="container position-relative d-flex justify-content-center align-self-center">
            <div class="heading-text d-block">
                <div class="heading">
                    <span>About Us</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section about-us">
        <div class="container d-flex position-relative">
            <div class="img-custom"">
                <img src="{{url('img/bg/bg-about.webp')}}" alt="Yayasan ARTI" class="ab-banner">
            </div>
            <div class="orn-pink-box"></div>
            <div class="row about-desc d-flex align-items-center">
                <div class="col-md-5">
                    <div class="when-small"></div>
                </div>
                <div class="col-md-7">
                    <p><strong>Yayasan ARTI</strong> lahir dari kepedulian akademisi, pendidik, dan aktivis hak anak dan sosial untuk menciptakan kesadaran masyarakat tentang <strong>hak dan kesejahteraan anak dan kelompok marjinal</strong>, serta penghormatan terhadap martabat manusia. Kami hadir untuk membantu peningkatan kapasitas pada LSM, organisasi berbasis komunitas, dan lembaga lainnya.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section arti-vision">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 vis-desc d-flex align-items-center">
                    <div class="wrapper">
                        <h1>Visi</h1>
                        <p>Menjadi sebuah lembaga ahli dalam <strong>bidang penelitian aksi dan pelatihan</strong> yang menitikberatkan pada pendekatan partisipatif sebagai metode dalam membangun kesadaran masyarakat Indonesia terhadap <strong>hak-hak dan kesejahteraan anak</strong> juga penghormatan terhadap <strong>martabat manusia</strong>.</p>
                    </div>
                </div>
                <div class="col-md-6 vis-img">
                    <img src="{{url('img/bg/arti-kids-play.webp')}}" alt="anak-anak yayasan arti foundation" class="w-100">
                    <div class="orn-pink-circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section arti-mission">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 miss-img">
                    <img src="{{url('img/bg/arti-kids.webp')}}" alt="anak yayasan arti foundation" class="w-100">
                    <div class="orn-pink-triangle"></div>
                </div>
                <div class="col-md-6 miss-desc d-flex align-items-center">
                    <div class="wrapper">
                        <h1>Misi</h1>
                        <p>Secara berkesinambungan aktif dalam <strong>meningkatkan kapasitas</strong> lembaga dan kapasitas dalam diri individu <br><br>
                        Melakukan penelitian tindakan maupun pelatihan, <strong>berdasarkan pemahaman akan konteks masalah dan komunitas</strong> <br><br>
                        Membangun <strong>kepedulian</strong> yang senantiasa kritis dan <strong>mengembangkan keterampilan- keterampilan transformatif</strong> sebagai jalan untuk memperkuat komunitas <br><br>
                        Mengusahakan terciptanya <strong>perubahan struktural</strong> dengan peningkatan kesadaran yang kritis pada komunitas- komunitas di Indonesia terhadap hak - hak anak dan martabat manusia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section arti-prinspec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-4">
                    <h1 class="pb-3">Prinsip</h1>
                    <div class="row">
                        <div class="col-3">
                            <div class="orn-grad-blue-pink"></div>
                        </div>
                        <div class="col-9">
                            <ul>
                                <li><strong>Persamaan</strong></li>
                                <li><strong>Akuntabilitas</strong></li>
                                <li><strong>Non-diskriminasi</strong></li>
                                <li><strong>Professionalisme</strong></li>
                                <li><strong>Kesetiaan</strong></li>
                                <li><strong>Penghormatan</strong></li>
                                <li><strong>Keadilan</strong></li>
                                <li><strong>Keterbukaan</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-4">
                    <h1 class="pb-3">Spesialisasi</h1>
                    <div class="row">
                        <div class="col-3">
                            <div class="orn-grad-pink-blue"></div>
                        </div>
                        <div class="col-9">
                            <ul>
                                <li><strong>Psikologi Sosial</strong></li>
                                <li><strong>Kesehatan Mental</strong></li>
                                <li><strong>Komunitas Marjinal</strong></li>
                                <li><strong>Disabilitas</strong></li>
                                <li><strong>Perlindungan Anak</strong></li>
                                <li><strong>Anak dengan Situasi Krisis</strong></li>
                                <li><strong>Penyalahgunaan Zat</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section arti-approach">
        <div class="container">
            <h1 class="text-center pb-5">Our Approach</h1>
            <div class="row">
                <div class="col-md-6 py-3">
                    <div class="row">
                        <div class="col-4 col-md-3">
                            <div class="orn-half-circle-pink d-flex align-items-center justify-content-center">
                                <span>1</span>
                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Penelitian</h2>
                            <p>Penelitian kuantitatif dan kualitatif, dengan fokus pada pendekatan kualitatif. <br><br>
                                Evaluasi dan metode-metode dalam penelitian aksi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="row">
                        <div class="col-4 col-md-3">
                            <div class="orn-half-circle-pink d-flex align-items-center justify-content-center">
                                <span>2</span>
                            </div>
                        </div>
                        <div class="col-8">
                            <h2>Edukasi &  Pelatihan</h2>
                            <p>Metode-metode pelatihan partisipatoris. <br><br> Pembelajaran eksperiensial.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
