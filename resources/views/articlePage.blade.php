<style>
    .swiper {
        width: 100%;
        height: auto;
    }

    .href-link {
        text-decoration: none;
    }

    .move-right {
        left: 50px;
    }

    .move-left {
        right: 50px;
    }

    .content {
        box-sizing: border-box;
        border: 8px solid;
        border-color: white;
        transition: 0.3s;
        transition-timing-function: ease;
        padding-top: 3.5rem;
        padding-bottom: 3.5rem;
    }

    .content:hover {
        border-color: black;
    }

    .prev-content {
        padding-left: 2rem;
    }

    .next-content {
        padding-right: 2rem;
    }

    @media(max-width:768px) {
        .move-right {
            scale: 0.8;
            left: 36px;
        }

        .move-left {
            scale: 0.8;
            right: 36px;
        }

        .prev-content {
            padding-left: 1rem;
        }

        .next-content {
            padding-right: 1rem;
        }
    }
</style>
<div class="container-fluid overflow-hidden p-0">
    @include('templates.navbar')
    @include('templates.bigTextShop',['title'=>$article->TITLE])
    <div class="w-100">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="{{ asset('images/article_images_1.png') }}" class="w-100" style="" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/article_images_2.png') }}" class="w-100" style="" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('images/article_images_3.png') }}" class="w-100" style="" alt="">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev move-right">
                <img class="position-absolute" src="{{ asset('images/Button_Left.png') }}" alt="">
            </div>
            <div class="swiper-button-next move-left">
                <img class="position-absolute" src="{{ asset('images/Button_Right.png') }}" alt="">
            </div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12 col-lg-8 p-5">
            <p style="font-size: clamp(1rem, 1.2rem + 1vw, 2rem); font-family:'Helvetica-bold'; line-height: 110%;">
                Elevate your moments with our Handcrafted Zero Proof Carbonated Malt Brew! Crafted for pure joy, this
                    bubbly sensation is all about big flavors without the alcohol. Grab a can, share the cheer, and
                    raise your drink to memorable, guilt-free moments.</p>
            <p class="mt-5"
                style="font-size: clamp(1rem, 1.2rem + 1vw, 2rem); font-family:'Helvetica-roman'; line-height: 130%;">{{
                $article->DESCRIPTION }}</p>
        </div>
        <div class="col-md-1 col-lg-4"></div>
    </div>
    <div class="w-100" style="box-sizing: border-box;">
        <div class="row">
            <a href="/ouractivities/{{ $previous->ID_ARTICLE }}" class="col-6 border border-black p-0 href-link">
                <div class="content d-flex justify-contet-start align-items-center prev-content"
                    style="width: 100%; height:100%;">
                    <h1 class="text-uppercase text-black"
                        style="font-family: 'Helvetica-bold-con'; font-size: clamp(1rem, 1.2rem + 1vw, 1.5rem); line-height: 32px">
                        {{ str_replace('<br>',' ',$previous->TITLE) }}
                    </h1>
                </div>
            </a>
            <a href="/ouractivities/{{ $next->ID_ARTICLE }}" class="col-6 border border-black p-0 href-link">
                <div class="content d-flex justify-content-end align-items-center next-content"
                    style="width: 100%; height:100%;">
                    <h1 class="text-uppercase text-black"
                        style="font-family: 'Helvetica-bold-con'; font-size: clamp(1rem, 1.2rem + 1vw, 1.5rem); line-height: 32px">
                        {{ str_replace('<br>',' ',$next->TITLE) }}
                    </h1>
                </div>
            </a>
        </div>
    </div>
    @include('templates.contacts',['type' => 'sosmed'])
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 2,
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
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
            enabled: false,
        },

        breakpoints: {
            0: { // Untuk layar dengan lebar 0px hingga 767px
                slidesPerView: 1,
            },
            768: { // Untuk layar di atas 768px
                slidesPerView: 2,
            }
        }
    });
</script>