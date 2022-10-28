<?php
$bg = get_field('slider_background_image');
?>

<section id="slider" class="slider" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="slider__wraper">
                    <div class="slider__wraper__pointers">
                        <div class="s-prev">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31.2px"
                                height="22.7px" viewBox="0 0 31.2 22.7" style="enable-background:new 0 0 31.2 22.7;" xml:space="preserve">
                            <rect x="15.2" y="10.8" fill="#FF0000" width="16" height="1"/>
                            <polygon fill="#FF0000" points="11.3,0 12.1,0.7 1.4,11.3 12.1,22 11.3,22.7 0,11.3 "/>
                            </svg>
                        </div>
                        <div class="s-pagination "></div>
                        <div class="s-next">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="31.2px"
                                    height="22.7px" viewBox="0 0 31.2 22.7" style="enable-background:new 0 0 31.2 22.7;" xml:space="preserve">
                            <rect y="10.9" fill="#FF0000" width="16" height="1"/>
                            <polygon fill="#FF0000" points="19.9,22.7 19.1,22 29.8,11.4 19.1,0.7 19.9,0 31.2,11.4 "/>
                            </svg>
                        </div>
                    </div>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slider__wraper__content">
                                        <div class="g-title g-title--big">
                                            <span class="g-title__pref" >Digitale Agentur.</span>
                                            <h1 class="g-title__title" >Wir entwickeln digitale Erlebnisse.</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__wraper__content">
                                        <div class="g-title g-title--big">
                                            <span class="g-title__pref" >Digitale Agentur.</span>
                                            <h1 class="g-title__title" >Wir lorem ipsum entwickeln digitale Erlebnisse.</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__wraper__content">
                                        <div class="g-title g-title--big">
                                            <span class="g-title__pref" >Digitale Agentur.</span>
                                            <h1 class="g-title__title" >Wir entwickeln digitale Erlebnisse.</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slider__wraper__content">
                                        <div class="g-title g-title--big">
                                            <span class="g-title__pref" >Digitale Agentur.</span>
                                            <h1 class="g-title__title" >Wir lorem ipsum entwickeln digitale Erlebnisse.</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    <img class="slider__bg" src="<?php echo $bg; ?>" alt="">
</section>