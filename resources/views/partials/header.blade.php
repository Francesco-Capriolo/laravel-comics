<header>
    <section id="head" class="my-container">
        <div class="image-dc">
        <img src={{asset("img/dc-logo.png")}} alt="DC logo" />
            </div>
        <div>
        <ul>
            {{-- class="{ active: element.current }"> --}}
            @foreach ($linkheader as $element)
            <li>
                <a  href="">{{$element['text']}}</a>
            </li>
            @endforeach
{{-- class="{ active: element.current }" --}}
        </ul>
        </div>
    </section>
</header>
