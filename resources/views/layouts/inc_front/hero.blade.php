{{--style=" background-image: url({{ asset('front')}}/img/hero-bg.jpg)--}}
<section id="hero" class="d-flex flex-column justify-content-center align-items-center" style=" background-image: url(<?php echo $home->bg_img; ?>)">
    <div class="hero-container" data-aos="fade-in">
        <h1>{{$home->name}}</h1>
        <p>I'm <span class="typed" data-typed-items="Full Stack Web Developer, Android Java Developer"></span></p>
    </div>
</section>
