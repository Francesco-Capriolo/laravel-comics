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
                            <div class="info-price-flex">
                                <span class="price">
                                    U.S. Price: <a href=""> {{$comics['price']}}</a>
                                </span>
                                <span class="price">
                                    AVAILABLE
                                </span>
                            </div>
                            <div class="check">
                                <span>
                                    Check Availability
                                </span>
                            </div>
                        </div>
                        <p>
                            {{$comics['description']}}
                        </p>
                    </div>
                    <div>
                        <h4 class="banner-info">
                            advertisement
                        </h4>
                        <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                    </div>

                </div>
        </div>

        {{-- dettagli comic --}}

        <div class="my-detail">
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

        {{-- icons --}}

        <div class="my-detail">
            <section id="icons-dc-detail" class="my-container">
                <div>
                    <span>
                        digital comics
                    </span>
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div>
                    <span>
                        shop dc
                    </span>
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                </div>
                <div>
                    <span>
                        comic shop locator
                    </span>
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                </div>
                <div>
                    <span>
                        subscriptions
                    </span>
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                </div>
        </section>
        </div>
    </section>
@endsection
