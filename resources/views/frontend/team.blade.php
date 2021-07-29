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
            $iteTeam = [];
            foreach ($lead as $tim) {
                array_push($iteTeam,$tim);
            }
        @endphp
        <div class="section teamLead"> //first row is different
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
                                <img src="{{$first->image}}" alt="{{$first->surname}}" class="rounded-circle w-auto">
                                <div class="name">
                                    {{$first->name}}<span> ({{$first->surname}})</span>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <p>{!!$first->desc!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="orn-half-circle-up-pink"></div>
            </div>
        </div>
        @foreach ($iteTeam as $ite)
        <div class="section teamLead">
            <div class="boxGrey @if($loop->odd) gleft @else gright @endif"></div>
            <div class="container">
                <div class="row">
                    @foreach ($ite as $it)
                        <div class="col-md-6">
                            <div class="row py-4 teamPerson">
                                <div class="col-md-4 col-sm-12">
                                    <img src="{{$it->image}}" alt="{{$it->surname}}" class="rounded-circle w-auto">
                                    <div class="name">
                                        {{$it->name}}<span> ({{$it->surname}})</span>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <p>{!!$it->desc!!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>            
        @endforeach
        
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
