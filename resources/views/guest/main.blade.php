@extends('layouts.app')

@section('title', 'Home')

@section('main-content')
    <section id="container" class="bg-dark text-white">
        <h1>current series</h1>
        <div class="ms-container my-container align-center">
            @foreach ($comics as $index => $item)
                    <div class="card-element">
                        <a href="{{url("detail/$index")}}">
                            <img src={{$item['thumb']}} alt={{$item['title']}} />
                            <h3>
                            {{ $item['title'] }}
                            </h3>
                        </a>
                    </div>
            @endforeach
        </div>
    </section>
    <div class="bg-primary">
        <section id="Icons-dc" class="my-container">
            @foreach ($iconslink as $icon)
                <div class="mini-card">
                <img
                    src={{$icon['image']}}
                    alt={{$icon['text']}}
                />
                <span>{{ $icon['text'] }}</span>
                </div>
            @endforeach
        </section>
    </div>
@endsection
