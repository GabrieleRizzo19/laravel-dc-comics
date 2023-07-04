<footer>
    
    <div class="footer-top">
        <div class="container pos-relative">
            <div class="d-flex">
                <div class="footer-top-column">
                    <strong class="footer-list-title">DC COMICS</strong>
                    <ul>
                        @foreach ($footerColumnLinks['DC_Comics'] as $link)
                            <li>
                                <small>
                                    <a href="">
                                        {{ $link }}
                                    </a>
                                </small>
                            </li>
                        @endforeach
                    </ul>
                    <strong class="footer-list-title">SHOP</strong>
                    <ul>
                        @foreach ($footerColumnLinks['Shop'] as $link)
                            <li>
                                <small>
                                    <a href="">
                                        {{ $link }}
                                    </a>
                                </small>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer-top-column">
                    <strong class="footer-list-title">DC</strong>
                    <ul>
                        @foreach ($footerColumnLinks['DC'] as $link)
                            <li>
                                <small>
                                    <a href="">
                                        {{ $link }}
                                    </a>
                                </small>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer-top-column">
                    <strong class="footer-list-title">SITES</strong>
                    <ul>
                        @foreach ($footerColumnLinks['Sites'] as $link)
                            <li>
                                <small>
                                    <a href="">
                                        {{ $link }}
                                    </a>
                                </small>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <img class="pos-absolute" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
        </div> 
    </div>

    <div class="footer-bottom">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <button><strong>SIGN-UP NOW!</strong></button>
            </div>
            <div class="d-flex align-items-center social-link-container">
                <h4>FOLLOW US</h4>
                <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
            </div>
        </div>
    </div>

</footer>