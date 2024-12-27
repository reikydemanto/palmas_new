<style>
    .swiper2 {
        width: 100%;
    }

    .move-right {
        left: 50px;
    }

    .move-left {
        right: 50px;
    }

    .gambar-bckg {
        display: block;
    }

    .gambar-hvr {
        display: none;
    }

    .swiper-slide:hover .gambar-bckg {
        display: none;
    }

    .swiper-slide:hover .gambar-hvr {
        display: block;
        animation: fadeIn 0.7s ease forwards;
    }

    .swiper-slide:hover .white {
        color: white!important;
    }

    .plus_hover {
        position: absolute;
        width: 13%;
        bottom: -12%;
        right: 4%;
        opacity: 0;
        transition: opacity 0.5s ease, bottom 0.5s ease;
    }

    .swiper-slide:hover .plus_hover {
        bottom: 2%;
        opacity: 1;
    }

    .font-size-small {
        font-size: clamp(20px, 3.5vw, 32px);
    }

    .font-size-medium {
        font-size: clamp(28px, 4.5vw, 48px);
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            /* Mulai dengan opacity 0 */
        }

        to {
            opacity: 1;
            /* Akhiri dengan opacity 1 */
        }
    }
</style>
<!-- Slider main container -->
<section class="position-relative z-0 mt-5" style="height:auto">
    <div class="swiper2 overflow-hidden" style="height:auto">
        <div class="swiper-wrapper" style="height:auto">
            <!-- Slides -->
            <div class="swiper-slide position-relative border border-end-0 border-black border-1"
                style="width: 100%; height:auto">
                <a href="/product/3">
                    <img class="position-relative gambar-bckg" style="width: 100%;" src="{{ asset('images/Carousell_bg.png') }}"
                        alt="Carousell_bg">
                    <img class="position-absolute gambar-hvr" style="width: 100%;" src="{{ asset('images/malt-og-bg.png') }}"
                        alt="Carousell_bg">
                    <div class="position-absolute text-center white w-75 text-black"
                        style="left: 50%; top: 5%; transform: translateX(-50%);">
                        <h1 class="text-uppercase font-size-small" style="font-family: 'Helvetica-bold-con';">MALT</h1>
                        <h1 class="text-uppercase font-size-medium" style="font-family: 'Helvetica-roman';">THE O.G</h1>
                    </div>
                    <img class="position-absolute"
                        style="width: 33.333333%;left: 52%; top: 57%; transform: translate(-50%, -43%);"
                        src="{{ asset('images/malt-og-can.png') }}" alt="">
                    <img class="position-absolute plus_hover" src="{{ asset('images/Button_Plus_Hover.png') }}" alt="">
                </a>
            </div>
            <div class="swiper-slide position-relative border border-end-0 border-black border-1"
                style="width: 100%; height:auto">
                <a href="/product/2">
                    <img class="position-relative gambar-bckg" style="width: 100%;" src="{{ asset('images/Carousell_bg.png') }}"
                        alt="Carousell_bg">
                    <img class="position-absolute gambar-hvr" style="width: 100%;" src="{{ asset('images/malt-white-grape-bg.png') }}"
                        alt="Carousell_bg">
                    <div class="position-absolute text-center white w-75 text-black"
                        style="left: 50%; top: 5%; transform: translateX(-50%);">
                        <h1 class="text-uppercase font-size-small" style="font-family: 'Helvetica-bold-con'">MALT</h1>
                        <h1 class="text-uppercase font-size-medium" style="font-family: 'Helvetica-roman'">White Grape
                        </h1>
                    </div>
                    <img class="position-absolute"
                        style="width: 33.333333%;left: 52%; top: 57%; transform: translate(-50%, -43%);"
                        src="{{ asset('images/malt-white-grape-can.png') }}" alt="">
                    <img class="position-absolute plus_hover" src="{{ asset('images/Button_Plus_Hover.png') }}" alt="">
                </a>
            </div>
            <div class="swiper-slide position-relative border border-end-0 border-black border-1"
                style="width: 100%; height:auto">
                <a href="/product/4">
                    <img class="position-relative gambar-bckg" style="width: 100%;" src="{{ asset('images/Carousell_bg.png') }}"
                        alt="Carousell_bg">
                    <img class="position-absolute gambar-hvr" style="width: 100%;" src="{{ asset('images/malt-orange-bitter-bg.png') }}"
                        alt="Carousell_bg">
                    <div class="position-absolute text-center white w-75 text-black"
                        style="left: 50%; top: 5%; transform: translateX(-50%);">
                        <h1 class="text-uppercase font-size-small" style="font-family: 'Helvetica-bold-con';">MALT</h1>
                        <h1 class="text-uppercase font-size-medium" style="font-family: 'Helvetica-roman'">Orange Bitter
                        </h1>
                    </div>
                    <img class="position-absolute"
                        style="width: 33.333333%;left: 52%; top: 57%; transform: translate(-50%, -43%);"
                        src="{{ asset('images/malt-orange-bitter-can.png') }}" alt="">
                    <img class="position-absolute plus_hover" src="{{ asset('images/Button_Plus_Hover.png') }}" alt="">
                </a>
            </div>
            <div class="swiper-slide position-relative border border-end-0 border-black border-1"
                style="width: 100%; height:auto">
                <a href="/product/10">
                    <img class="position-relative gambar-bckg" style="width: 100%;" src="{{ asset('images/Carousell_bg.png') }}"
                        alt="Carousell_bg">
                    <img class="position-absolute gambar-hvr" style="width: 100%;" src="{{ asset('images/coconut-green-tea-orange-bg.png') }}"
                        alt="Carousell_bg">
                    <div class="position-absolute text-center white w-75 text-black"
                        style="left: 50%; top: 5%; transform: translateX(-50%);">
                        <h1 class="text-uppercase font-size-small" style="font-family: 'Helvetica-bold-con'">power
                            charge
                        </h1>
                        <h1 class="text-uppercase font-size-medium" style="font-family: 'Helvetica-roman'">Coconut
                            Greentea
                            Orange</h1>
                    </div>
                    <img class="position-absolute"
                        style="width: 33.333333%;left: 52%; top: 57%; transform: translate(-50%, -43%);"
                        src="{{ asset('images/coconut-green-tea-orange-can.png') }}" alt="">
                    <img class="position-absolute plus_hover" src="{{ asset('images/Button_Plus_Hover.png') }}" alt="">
                </a>
            </div>
        </div>
        <!-- If we need pagination -->
        {{-- <div class="swiper-pagination"></div> --}}

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev move-right">
            <img class="position-absolute" src="{{ asset('images/Button_Left.png') }}" alt="">
        </div>
        <div class="swiper-button-next move-left">
            <img class="position-absolute" src="{{ asset('images/Button_Right.png') }}" alt="">
        </div>

        <!-- If we need scrollbar -->
        {{-- <div class="swiper-scrollbar"></div> --}}
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper2 = new Swiper('.swiper2', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        slidesPerGroup: 1,
        direction: 'horizontal',
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: { // Untuk layar dengan lebar 0px hingga 767px
                slidesPerView: 1,
            },
            768: { // Untuk layar di atas 768px
                slidesPerView: 3,
            }
        }

    });
</script>