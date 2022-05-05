<footer>
    <div id="dc-footer">
    <div class="footer-list my-container">
        <div class="list list-comics">
        <ul>
            <h4>dc comics</h4>
            @foreach ($contentslink as $content)
            <li>
            {{$content['text']}}
            </li>
            @endforeach
        </ul>
        <ul class="list-shop">
            <h4>shop</h4>
            <li>Shop DC</li>
            <li>Shop DC Collectibles</li>
        </ul>
        </div>
        <div class="list">
            <ul>
                <h4>DC</h4>
                <li>Term Of Use</li>
                <li>Privacy policy</li>
                <li>Term Of Use</li>
                <li>Privacy policy</li>
                <li>Term Of Use</li>
                <li>Privacy policy</li>
                <li>Term Of Use</li>
                <li>Privacy policy</li>
                <li>Term Of Use</li>
                <li>Privacy policy</li>
                <li>Term Of Use</li>
            </ul>
        </div>
        <div class="list">
            <ul>
                <h4>sites</h4>
                <li>Term Of Use</li>
                <li>Privacy policy</li>
                <li>Term Of Use</li>
                <li>Privacy policy</li>
                <li>Term Of Use</li>
            </ul>
        </div>
    </div>
    </div>
    <section class="bg-dark">
        <div id="footer-bottom" class="my-container">
            <button class="button-signUp">sign-Up now!</button>
            <div class="follow">
                <h3>follow us</h3>
                    <img src={{asset("img/footer-facebook.png")}} alt="" />
                    <img src={{asset("img/footer-twitter.png")}} alt="" />
                    <img src={{asset("img/footer-youtube.png")}} alt="" />
                    <img src={{asset("img/footer-pinterest.png")}} alt="" />
                    <img src={{asset("img/footer-periscope.png")}} alt="" />
            </div>
        </div>
    </section>
</footer>
