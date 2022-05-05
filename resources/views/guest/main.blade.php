@extends('layouts.app')

@section('title', 'Home')

@section('main-content')
    <div class="jumbo"></div>
    <section id="container">
        <h1>current series</h1>
        <div class="ms-container">
            @foreach ($comics as $item)
                <div class="card-element">
                    <img src={{$item['thumb']}} alt={{$item['title']}} />
                    <h3>
                    {{ $item['title'] }}
                    </h3>
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
