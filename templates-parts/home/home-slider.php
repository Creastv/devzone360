<?php
$bg = get_field('slider_background_image');
?>

<section id="slider" class="slider">
        <div class="container">
            <div class="row">
                <div class="slider__wraper">
                    <div class="slider__wraper__pointers">
                        pointers
                    </div>
                    <div class="slider__wraper__content">
                        <div class="g-title g-title--big">
                            <span class="g-title__pref" >Digitale Agentur.</span>
                            <h1 class="g-title__title" >Wir entwickeln digitale Erlebnisse.</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <img class="slider__bg" src="<?php echo $bg; ?>" alt="">
</section>