@extends('frontend.layouts.app-arti')
@section('title', 'Our Team | '.appName())

@section('content')
    <main id="content"> 
        <div class="section header page" style="background-image: linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.35)), url('{{url('img/bg/pg-team.webp')}}')">
            <div class="container position-relative d-flex justify-content-center align-self-center">
                <div class="heading-text d-block">
                    <div class="heading">
                        <span>Our Team</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section teamLead">
            <div class="boxGrey gright"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="boxTitle">
                            <h1>Lead <br>Researchers</h1>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row py-4 teamPerson">
                            <div class="col-md-4 col-sm-12">
                                <img src="{{url('img/team/team1.webp')}}" alt="Prof. Irwanto" class="rounded-circle w-auto">
                                <div class="name">
                                    Prof. Irwanto, Ph.D., Psikolog <span>(Irwanto)</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>
                                    Fokus Penelitian: <strong>HIV/AIDS, Perlindungan anak, Narkoba, Intervensi dan kebijakan bagi kelompok marjinal.</strong> <br><br>
                                    Salah satu pendiri dan pimpinan Yayasan ARTI. Psikolog lulusan UGM (1982) dan penerima beasiswa Fulbright-Hays untuk menyelesaikan PhD dalam bidang keluarga dan perkembangan Anak di Purdue University, USA (1988-1992). Ia adalah Pionir dalam bidang perlindungan anak, penganggulangan narkotika, dan analisis kebijakan penanggulangan. Penulis, pelatih, dan peneliti yang produktif.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="orn-half-circle-up-pink"></div>
            </div>
        </div>
        <div class="section teamLead">
            <div class="boxGrey gleft"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row py-4 teamPerson">
                            <div class="col-md-4 col-sm-12">
                                <img src="{{url('img/team/team2.webp')}}" alt="Prof. Irwanto" class="rounded-circle w-auto">
                                <div class="name">
                                Dr. Yohana Ratrin Hestyanti, Psikolog<span> (Jo) </span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>
                                    Fokus Penelitian: <strong>Trauma & Resilience, Mental Health dan Psychosocial Support in Disaster, Developmental Psychology.</strong> <br><br>
                                    Salah satu pendiri Yayasan ARTI. Alumni Fakultas Psikologi Universitas Gadjah Mada (S1: 1996, Profesi Psikolog: 1998) dan menyelesaikan studi doktoral bidang Psikologi di Radboud University, Nijmegen, Belanda (2014). Menaruh perhatian yang sangat besar pada resiliensi anak dan keluarga dalam situasi krisis, isu perlindungan dan perkembangan anak, pengalaman trauma dan pemulihannya.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row py-4 teamPerson">
                            <div class="col-md-4 col-sm-12">
                                <img src="{{url('img/team/team3.webp')}}" alt="Prof. Irwanto" class="rounded-circle w-auto">
                                <div class="name">
                                    N. Indra Nurpatria, M.Si., Psikolog <span>(Indra)</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>
                                    Fokus Penelitian: <strong>Capacity development, mental health & psychosocial support in disaster.</strong>
                                    <br><br>
                                    Menyelesaikan studi S1 dan Profesi Psikolog di Fakultas Psikologi Unika Atma Jaya Jakarta. Terlibat dalam berbagai kegiatan penguatan kapasitas (capacity development) bagi anak, remaja, guru, orang tua dan masyarakat sejak tahun 1993, mulai dari perancangan program, pembuatan kurikulum dan modul, sampai dengan pemantauan dan evaluasi. Pasca lulus dari Program Psikologi Terapan Fakultas Psikologi Universitas Indonesia di tahun 2012, mendalami tentang penanggulangan situasi krisis, antara lain adalah bencana, pandemi, krisis di lembaga pendidikan maupun di masyarakat. Saat ini ia aktif sebagai mitra peneliti dan dosen honorer di Fakultas Psikologi Unika Atma Jaya Jakarta
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section teamLead">
            <div class="boxGrey gright"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row py-4 teamPerson">
                            <div class="col-md-4 col-sm-12">
                                <img src="{{url('img/team/team4.webp')}}" alt="Prof. Irwanto" class="rounded-circle w-auto">
                                <div class="name">
                                    Dr. Zahrasari Lukita Dewi, M.Si., Psikolog<span> (Aya)</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>
                                    Fokus Penelitian: <strong>Psikologi Klinis, Emosi, Trauma, Psikopatologi, Attachment, Emotional Intelligence, Cross-cultural.</strong> <br><br>
                                    Seorang dosen dan praktisi kesehatan mental (Psikolog Klinis) yang dikenal keahliannya di bidang konseling klinis dan psikoterapi, khususnya masalah emosi. Alumni Fakultas Psikologi Universitas Padjajaran (1997), kemudian menyelesaikan. Program Magister Sains Psikologi Klinis Dewasa, Fakultas Psikologi Universitas Indonesia (2004), dan juga menyelesaikan program doktoral di Radboud University Nijmegen, Clinical Psychology Department di Nijmegen, Belanda (2018).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row py-4 teamPerson">
                            <div class="col-md-4 col-sm-12">
                                <img src="{{url('img/team/team5.webp')}}" alt="Prof. Irwanto" class="rounded-circle w-auto">
                                <div class="name">
                                    Dr. Harla Sara Octarra, M.Sc.<span> (Harla)</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>
                                    Fokus Penelitian: <strong>Hak-hak anak, Perlindungan anak, Kebijakan dan layanan publik untuk anak.</strong>
                                    <br><br>
                                    Setelah menyelesaikan S1 di Fakultas Psikologi Unika Atma Jaya, Jakarta, Ia menjadi peneliti dan kemudian Direktur ARTI hingga tahun 2012. Penerima Chevening Scholarship dan Beasiswa Pendidikan Indonesia, Ia melanjutkan studi paska sarjana di The University of Edinburgh, UK, dimana Ia mendapatkan gelar Masters in Childhood Studies dan Doctor in Social Policy (2018). Sekarang ini ia aktif sebagai peneliti dan konsultan, salah satunya sebagai tim ahli Kabupaten/Kota Layak Anak di Kementerian Pemberdayaan Perempuan dan Perlindungan Anak RI.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section trainingAssistant">
            <div class="orn-half-circle-down-pink"></div>
            <div class="container">
                <h1>Research and Training Assistant</h1>
                <div class="row trainerWrapper">
                    <div class="col-md-6 trainerPerson">
                        <div class="name">
                            Hani Kumala, M.Psi., Psikolog. <br> <span>(Hani)</span>
                        </div>
                        <div class="img">
                            <img src="{{url('/img/team/trainer1.webp')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 trainerPerson">
                        <div class="name">
                            Kartika Anggita, M. InterDev Practice <br> <span>(Tika)</span>
                        </div>
                        <div class="img">
                            <img src="{{url('/img/team/trainer2.webp')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 trainerPerson">
                        <div class="name">
                        Sylvidire Maharani Hayu Pertiwi, S.Psi  <br> <span>(Ayu)</span>
                        </div>
                        <div class="img">
                            <img src="{{url('/img/team/trainer3.webp')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 trainerPerson">
                        <div class="name">
                            Richella Faby Loverian, S.Psi  <br> <span>(Richella)</span>
                        </div>
                        <div class="img">
                            <img src="{{url('/img/team/trainer4.webp')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 trainerPerson">
                        <div class="name">
                        Shahnaz Aliani Alyssa Abidin S.Psi.,  <br> <span>(Alyssa)</span>
                        </div>
                        <div class="img">
                            <img src="{{url('/img/team/trainer5.webp')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 trainerPerson">
                        <div class="name">
                            Joanna Gloria D. FV., S.Psi., MM. <br> <span> (Anna)</span>
                        </div>
                        <div class="img">
                            <img src="{{url('/img/team/trainer6.webp')}}" alt="" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6 trainerPerson">
                        <div class="name">
                            Agnes Christy WIjaya, S.Psi. <br> <span>(Agnes)</span>
                        </div>
                        <div class="img">
                            <img src="{{url('/img/team/trainer7.webp')}}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> 
@endsection
