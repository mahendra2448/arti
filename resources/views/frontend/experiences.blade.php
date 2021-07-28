@extends('frontend.layouts.app-arti')
@section('title', 'Our Experiences | '.appName())

@section('content')
<main id="content">
    <div class="section header page" style="background-image: linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.35)), url('{{url('img/bg/pg-experience.webp')}}')">
        <div class="container position-relative d-flex justify-content-center align-self-center">
            <div class="heading-text d-block">
                <div class="heading">
                    <span>Our Experiences</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section" style="background-color:#F3F2E3">
        <div class="container pg-experiences">
            <div class="text-center font-weight-bold mb-5">
                Aktivitas kami meliputi penelitian, pendidikan & pelatihan, serta publikasi.
            </div>
            <div id="penelitian" class="observeWrapper">
                <div class="head"><h1>Penelitian</h1></div>
                <div class="observeArticle">
                    <div class="row">
                        <div class="col-md-4 pr-0 when-small">
                            <div class="ob-image">
                                <img src="{{url('img/bg/arti-mother-daughter.webp')}}" alt="ibu dan anak">
                            </div>
                        </div>
                        <div class="col-md-8 pl-0 col-12">
                            <div class="articleSlide d-flex">
                                @php
                                    $iteRes = [];
                                    foreach ($research as $res) {
                                        array_push($iteRes,$res);
                                    }
                                @endphp

                                @foreach ($iteRes as $ir)
                                    <div class="side norm">
                                        @foreach ($ir as $res)
                                        <div class="article">
                                            <div class="titleYear">
                                                <div class="title">{{$res->title}}</div>
                                                <div class="year">{{$res->year}}</div>
                                            </div>
                                            <div class="art-desc">
                                                <p>{{$res->desc}}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="pendidikan" class="educationWrapper">
                <div class="head"><h1>Pendidikan & Pelatihan</h1></div>
                <div class="observeArticle">
                    <div class="row">
                        <div class="col-md-4 pr-0 when-small">
                            <div class="ob-image">
                                <img src="{{url('img/bg/arti-kids-learning.webp')}}" alt="anak-anak belajar">
                            </div>
                        </div>
                        <div class="col-md-8 pl-0 col-12">
                            <div class="eduSlide d-flex">
                                @php
                                    $iteStudy = [];
                                    foreach ($study as $st) {
                                        array_push($iteStudy,$st);
                                    }
                                @endphp

                                @foreach ($iteStudy as $is)
                                    <div class="side norm">
                                        @foreach ($is as $stud)
                                            <div class="article">
                                                <div class="titleYear">
                                                    <div class="title">{{$stud->title}}</div>
                                                    <div class="year">{{$stud->year}}</div>
                                                </div>
                                                <div class="art-desc">
                                                    <p>{!!$stud->desc!!}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="publikasi" class="publicationWrapper">
                <div class="head"><h1>Publikasi</h1></div>
                <div class="observeArticle">
                    <div class="row">
                        <div class="col-12">
                            <div class="publicSlide publication d-flex">
                                @php
                                    $itePublic = [];
                                    foreach ($public as $pb) {
                                        array_push($itePublic,$pb);
                                    }
                                @endphp
                                @foreach ($itePublic as $ip)
                                    <div class="side publikasi">
                                        @foreach ($ip as $pub)
                                            <div class="article">
                                                <div class="titleYear">
                                                    <div class="title">
                                                        <a href="#" data-title="{{$pub->title}}" data-toggle="modal" data-target="#publicrequest">
                                                            <i class="fas fa-file-pdf mr-1"></i> {{$pub->title}}
                                                        </a>
                                                    </div>
                                                    <div class="year">{{$pub->year_desc}}</div>
                                                </div>
                                                <div class="art-desc">
                                                    <p>{!!$pub->by!!}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div id="partnership" class="partnershipWrapper">
                <div class="head"><h1>Partnership</h1></div>
                <div class="observeArticle partnership">
                    @foreach ($partners as $part)                        
                        <div class="p-image">
                            <img src="{{$part->image}}" alt="{{$part->name}}" data-toggle="tooltip" data-placement="bottom" title="{{$part->name}}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</main>

<!-- Modal -->
<div class="modal fade" id="publicrequest" role="dialog" aria-labelledby="publicrequestTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded">
            <div id="requestBody" class="modal-body px-4 py-5"> 
                {{-- auto generated --}}
            </div>
        </div>
    </div>
</div>
   
@endsection
