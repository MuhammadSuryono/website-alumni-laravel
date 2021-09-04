<section class="slider-active" id="slider-part">
    @if(isset($banners))
        @foreach($banners as $banner)
            <div class="single-slider bg_cover pt-150" style="background-image: url({{ $banner["cover"] }})"
                 data-overlay="4">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 col-lg-9">
                            <div class="slider-cont">
                                <h1 data-animation="bounceInLeft" data-delay="1s">{{ $banner["title"] }}</h1>
                                <p data-animation="fadeInUp" data-delay="1.3s">{{ $banner["subTitle"]  }}</p>
                                <ul>
                                    <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{ $banner["readMore"] }}">Selengkapnya</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->
        @endforeach
    @endif
</section>
