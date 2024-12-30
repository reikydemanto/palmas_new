<style>
    .swiper-big-image {
        width: 100%;
        height: auto;
    }
</style>
<section class="container-fluid z-0 p-0 position-relative" style="box-sizing: border-box;">
    <!-- Slider main container -->
    <div id="swiper_big_image" class="swiper w-100">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper w-100">
            <!-- Slides -->
            <div class="swiper-slide w-100 bg-danger col-md-12 d-flex justify-content-center">
                <img class="w-100" src="{{ asset('images/header_photo_slide1.png') }}" alt="">
            </div>
            <div class="swiper-slide col-md-12 d-flex justify-content-center">
                <img class="w-100" src="{{ asset('images/header_photo_slide2.png') }}" alt="">
            </div>
            <div class="swiper-slide col-md-12 d-flex justify-content-center">
                <img class="w-100" src="{{ asset('images/header_photo_slide3.png') }}" alt="">
            </div>
            <div class="swiper-slide col-md-12 d-flex justify-content-center">
                <img class="w-100" src="{{ asset('images/header_photo_slide4.png') }}" alt="">
            </div>
            <div class="swiper-slide col-md-12 d-flex justify-content-center">
                <img class="w-100" src="{{ asset('images/header_photo_slide5.png') }}" alt="">
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    {{-- <div class="row">
        <div class="col-md-6 col-sm-12 p-0 border border-black">
            <img class="img-fluid" width="100%" src="{{ asset('images/Left_Photos.png') }}" alt="left_photos_palmas">
        </div>
        <div class="col-md-6 col-sm-12 p-0 border border-black">
            <img class="img-fluid" width="100%" src="{{ asset('images/Right_Photos.png') }}" alt="left_photos_palmas">
        </div>
    </div> --}}
</section>

<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
    const swiper = new Swiper('#swiper_big_image', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        enabled: false,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        enabled: false,
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
        enabled: false,
    },
    autoplay: {
        delay: 4000,
    },
    });
</script>