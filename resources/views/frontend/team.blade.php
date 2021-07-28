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

        @php 
            $count  = count($lead); 
            $it     = [];
            for ($i=0; $i<$count; $i++) {
                array_push($it,$i);
            }
        @endphp
        
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
                                <img src="{{$lead[0]->image}}" alt="{{$lead[0]->surname}}" class="rounded-circle w-auto">
                                <div class="name">
                                    {{$lead[0]->name}}<span>({{$lead[0]->surname}})</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>{{$lead[0]->desc}}</p>
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
                                <img src="{{$lead[1]->image}}" alt="{{$lead[1]->surname}}" class="rounded-circle w-auto">
                                <div class="name">
                                    {{$lead[1]->name}}<span>({{$lead[1]->surname}})</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>{{$lead[1]->desc}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row py-4 teamPerson">
                            <div class="col-md-4 col-sm-12">
                                <img src="{{$lead[2]->image}}" alt="{{$lead[2]->surname}}" class="rounded-circle w-auto">
                                <div class="name">
                                    {{$lead[2]->name}}<span>({{$lead[2]->surname}})</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>{{$lead[2]->desc}}</p>
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
                                <img src="{{$lead[3]->image}}" alt="{{$lead[3]->surname}}" class="rounded-circle w-auto">
                                <div class="name">
                                    {{$lead[3]->name}}<span>({{$lead[3]->surname}})</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>{{$lead[3]->desc}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row py-4 teamPerson">
                            <div class="col-md-4 col-sm-12">
                                <img src="{{$lead[4]->image}}" alt="{{$lead[4]->surname}}" class="rounded-circle w-auto">
                                <div class="name">
                                    {{$lead[4]->name}}<span>({{$lead[4]->surname}})</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>{{$lead[4]->desc}}</p>
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
                    @foreach ($assist as $ast)
                        <div class="col-md-6 trainerPerson">
                            <div class="name">
                                {{ $ast->name }} <br> <span>({{ $ast->surname }})</span>
                            </div>
                            <div class="img">
                                <img src="{{ $ast->image }}" alt="{{ $ast->name }}" class="w-100">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main> 
@endsection
