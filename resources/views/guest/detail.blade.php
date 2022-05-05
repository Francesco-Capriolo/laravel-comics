@extends('layouts.app')

@section('title', 'detail')

@section('main-content')
    <section id="container">
        <div class="ms-image">
            <img src={{$comics['thumb']}} alt={{$comics['title']}} />
        </div>
        <div class="ms-container my-container">
                <div class="card-element">
                    <img src={{$comics['thumb']}} alt={{$comics['title']}} />
                    <h3>
                    {{ $comics['title'] }}
                    </h3>
                </div>
        </div>
    </section>
    <div class="bg-light">
        <section id="Icons-dc-detail" class="my-container">
            @foreach ($iconslink as $icon)
                <div class="mini-card">
                    <span>{{ $icon['text'] }}</span>
                <img
                    src={{$icon['image']}}
                    alt={{$icon['text']}}
                />
                </div>
            @endforeach
        </section>
    </div>
@endsection
