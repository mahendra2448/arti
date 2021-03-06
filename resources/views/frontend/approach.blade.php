@extends('frontend.layouts.app-arti')
@section('title', 'Our Approach | '.appName())

@section('content')
    <main id="content">
        <div class="section header page" style="background-image: linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.35)), url('{{url('img/bg/pg-approach.webp')}}')">
            <div class="container position-relative d-flex justify-content-center align-self-center">
                <div class="heading-text d-block">
                    <div class="heading">
                        <span>Our Approach</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="section pg-approach">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-5 blue-bg d-flex align-items-center" style="border-bottom: #F3F2E3 solid thin">
                        <div class="head">
                            <h3><i>Action Research/</i></h3>
                            <h3>Penelitian Tindakan</h3>
                        </div>
                        <div class="orn-quarter-circle-912-pink"></div>
                    </div>
                    <div class="col-md-7 desc d-flex align-items-center" style="border-bottom: #0C2941 solid thin">
                        <p>{!! $updates->actres_desc !!}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 blue-bg d-flex align-items-center">
                        <div class="head">
                            <h3><i>Capacity Building/</i> </h3>
                            <h3>Pengembangan Kapasitas</h3>
                        </div>
                        <div class="orn-quarter-circle-69-pink"></div>
                    </div>
                    <div class="col-md-7 desc d-flex align-items-center">
                        <p>{!! $updates->capbuild_desc !!}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section header in-page" style="background-image: linear-gradient(rgba(188,135,153,.5), rgba(188,135,153,.5)), url('{{url('img/bg/pg-approach2.webp')}}')"></div>

        <div class="section train">
            <div class="container trainTypes">
                <div class="title-head text-center">
                    Dalam masa <span>pandemi</span>, <br>
                    pelatihan ini dapat diberikan secara
                </div>
                <div class="trainWrapper">
                    @foreach ($methods as $met)
                        <div class="trainItem">
                            <div class="train-desc">
                                <span>{{ $met->name }}</span>
                                <p>{!! $met->desc !!}</p>
                            </div>
                            <div class="train-img">
                                <img src="{{ $met->image }}" alt="{{ $met->name }} training">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
