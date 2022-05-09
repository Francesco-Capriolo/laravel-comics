@extends('layouts.app')

@section('title', 'detail')

@section('main-content')
    <section id="container" class="bg-white">
        <div class="color-blue"></div>
        <div class="ms-image">
            <span class="label">comic book</span>
            <img src={{$comics['thumb']}} alt={{$comics['title']}} />
            <p class="label">view gallery</p>
        </div>
        <div class="ms-container my-container">
                <div class="info">
                    <div class="info-text">
                        <h2>
                            {{$comics['title']}}
                        </h2>
                        <div class="info-price">
                            <span class="price">
                                U.S. Price: <a href=""> {{$comics['price']}}</a>
                            </span>
                            <span class="price">
                                AVAILABLE
                            </span>
                        </div>
                        <p>
                            {{$comics['description']}}
                        </p>
                    </div>
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
        </div>
        <div id="my-detail">
            <div class="my-container ms-container d-flex">
                <div class="partial-info">
                    <h4>
                        Talent
                    </h4>
                    <div class="info-name">
                        <div class="title-name">
                            <p >
                            Art by:
                        </p>
                        </div>
                        <div class="font-artist text-blue">
                            @foreach ($comics['artists'] as $artist)
                            <span>{{$artist}}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="info-name">
                        <div class="title-name">
                            <p >
                            Written by:
                        </p>
                        </div>
                        <div class="font-artist text-blue">
                            @foreach ($comics['writers'] as $writer)
                            <span>{{$writer}}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="partial-info">
                    <h4>
                        Specs
                    </h4>
                    <div class="info-name">
                        <div class="title-name">
                            <p >
                                Series:
                            </p>
                        </div>
                        <div class="font-artist text-blue">
                            <span>{{$comics['series']}}</span>
                        </div>
                    </div>

                    <div class="info-name">
                        <div class="title-name">
                            <p >
                            U.S. Price:
                        </p>
                        </div>
                        <div class="font-artist">
                            <span>{{$comics['price']}}</span>
                        </div>
                    </div>
                    <div class="info-name">
                        <div class="title-name">
                            <p >
                            On Sales Date:
                        </p>
                        </div>
                        <div class="font-artist">
                            <span>{{$comics['sale_date']}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    {{-- <div class="bg-light">
        <section id="Icons-dc-detail" class="my-container">
            @foreach ($iconslink as $icon)
                <div class="mini-card">
                    <span>{{ $icon['text'] }}</span>
                <img
                    src={{asset($icon['image'])}}
                    alt={{$icon['text']}}
                />
                </div>
            @endforeach
        </section>
    </div> --}}
@endsection
