<style>
    .href-link {
        text-decoration: none;
    }

    .modal-dialog {
        max-width: 98%;
    }

    .modal-header {
        border: 0px;
    }

    .modal-footer {
        border: 0px;
    }

    .zoom-image {
        transition: transform 0.3s ease;
        width: 100%;
    }

    .zoom-image:hover {
        transform: scale(1.1);
        transform-origin: center;
        transition: transform 0.3s ease;
    }

    /* CSS untuk animasi */
    .rotate-in {
        animation: rotate-in 0.5s forwards;
    }

    .rotate-out {
        animation: rotate-out 0.5s forwards;
    }

    .col-custom {
        width: 20%;
    }

    .sosmed {
        box-sizing: border-box;
        border: 8px solid;
        border-color: white;
        transition: 0.3s;
        transition-timing-function: ease;
        padding-top: 3.5rem;
        padding-bottom: 3.5rem;
        padding-left: 3.5rem;
    }

    .sosmed:hover {
        border-color: black;
    }

    .navbar-flex {
        display: flex !important;
        flex-direction: row;
    }

    .responsif-img-menu {
        max-width: 67px !important;
    }

    /* Parent img */
    .hover-transition-img {
        background-image: url('{{ asset("images/NPEW_Button.png") }}');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        width: 364px;
        height: 60px;
        transition: background-image 0.3s ease-in-out;
        cursor: pointer;
    }

    /* Efek hover: Ganti background image */
    .hover-transition-img:hover {
        background-image: url('{{ asset("images/NPEW_Button2.png") }}');
    }

    .carousel {
        transition: transform 0.5s ease-in-out;
    }

    .container-product {
        min-width: 30%;
    }

    .opacity-image-noactive {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .opacity-image-active {
        opacity: 1;
        transition: opacity 0.3s ease-in-out;
    }

    .btn-can-npew-active {
        background: black;
    }

    .btn-can-npew-noactive {
        background: white;
        transition: border 0.1s ease;
    }

    .btn-can-npew-noactive:hover {
        border: solid 4px black !important;
    }

    .btn-label-npew-active {
        background: black;
    }

    .btn-label-npew-noactive {
        background: white;
        transition: border 0.1s ease;
    }

    .btn-label-npew-noactive:hover {
        border: solid 4px black !important;
    }

    .div-container-image {
        width: 40vw;
    }

    .first-image {
        left: 50%;
    }

    .second-image {
        left: 100%;
    }

    .third-image {
        left: 150%;
    }

    .fourth-image {
        left: 200%;
    }

    .button-slide-left {
        background-color: white;
        transition: border 0.5s ease-in-out;
    }

    .button-slide-left:hover {
        border: solid 4px black !important;
    }

    .button-slide-right {
        background-color: white;
        transition: border 0.5s ease-in-out;
    }

    .button-slide-right:hover {
        border: solid 4px black !important;
    }

    .slide-button {
        top: 50%;
        width: 55%;
    }

    #carousel-container {
        transition: transform 0.8s ease-in-out;
    }

    .button-npew-download img {
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }

    .button-npew-download h1 {
        margin: 0;
    }

    .button-npew-download:hover img {
        opacity: 1;
    }

    .text-npew-button {
        transition: color 0.5s ease-in-out;
    }

    .href-link {
        text-decoration: none;
    }

    .text-npew-button:hover {
        color: white !important;
    }

    .move-right {
        left: 50px;
    }

    .move-left {
        right: 50px;
    }

    .move-right:hover {
        border: 3px solid black !important;
    }

    .move-left:hover {
        border: 3px solid black !important;
    }

    .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: none;
    }

    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after {
        content: none;
    }


    @media(max-width:1280px) {
        .slide-button {
            width: 57%;
        }
    }

    @media(max-width:1024px) {
        .sosmed {
            padding-left: 0.5rem !important;
        }

        .slide-button {
            top: 45%;
        }

        .swiper-slide .primary-image {
            width: 75% !important;
        }

        .swiper-slide .secondary-image {
            width: 75% !important;
        }
    }

    @media(max-width:768px) {
        .slide-button {
            width: 70%;
        }

        .first-image {
            left: 50%;
        }

        .second-image {
            left: 150%;
        }

        .third-image {
            left: 250%;
        }

        .fourth-image {
            left: 350%;
        }
    }

    @keyframes rotate-in {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(180deg);
        }
    }

    @keyframes rotate-out {
        from {
            transform: rotate(180deg);
        }

        to {
            transform: rotate(0deg);
        }
    }


    @media (max-width: 576px) {
        .padding-small {
            padding: 2rem !important;
        }

        .padding-khusus {
            padding: 2rem 1.5rem !important;
        }

        .responsif-img-logo {
            max-width: 92px !important;
        }

        .responsif-img-logo-container {
            max-width: 40%;
        }

        .responsif-img-menu-container {
            max-width: 60%;
            gap: 0.5rem !important;
        }

        .responsif-img-menu {
            max-width: 40px !important;
        }

        .col-custom {
            width: 100%;
        }

        .navbar-flex {
            flex-direction: column !important;
        }

        .div-container-image {
            width: 64vw;
        }

        .slide-button {
            width: 90%;
        }

        .button-slide-left {
            width: 40px !important;
            height: 40px !important;
        }

        .button-slide-left img {
            width: 30% !important;
        }

        .button-slide-right {
            width: 40px !important;
            height: 40px !important;
        }

        .button-slide-right img {
            width: 30% !important;
        }

        .move-right {
            width: 40px !important;
            height: 40px !important;
            left: 24px !important;
        }

        .move-left {
            width: 40px !important;
            height: 40px !important;
            right: 24px !important;
        }

        .btn-can-npew-active {
            width: 48px !important;
            height: 48px !important;
        }

        .btn-can-npew-noactive {
            width: 48px !important;
            height: 48px !important;
        }

        .btn-label-npew-noactive {
            width: 48px !important;
            height: 48px !important;
        }

        .btn-label-npew-active {
            width: 48px !important;
            height: 48px !important;
        }

        .swiper-slide .primary-image {
            width: 100% !important;
        }

        .swiper-slide .secondary-image {
            width: 100% !important;
        }

    }
</style>

<nav class="navbar fixed-top p-0">
    <div class="container-fluid p-5 padding-small padding-khusus">
        <a href="/" class="responsif-img-logo-container"><img class="navbar-brand responsif-img-logo"
                src="{{ asset ('images/Logo_Black.png') }}" alt="Logo Palmas"></a>
        <div class="d-flex gap-3 responsif-img-menu-container align-items-center justify-content-end position-relative">
            <?php
        if (Route::current()->uri == '/') {
            ?>
            <div data-bs-toggle="modal" data-bs-target="#npewModal" class="hover-transition-img" alt="Button"></div>
            <?php
        }
        ?>
            <img data-bs-toggle="modal" data-bs-target="#menuModal" class="responsif-img-menu"
                src="{{ asset ('images/Menu.png') }}" alt="Logo Menu Website Palmas">
        </div>
    </div>
</nav>

<div class="modal fade" id="npewModal" tabindex="-1" aria-labelledby="npewModal" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog" style="max-width: 100%!important; margin:0; height:100vh!important;">
        <div class="modal-content bg-white overflow-hidden p-0 h-100"
            style="border-radius:0!important; auto; box-sizing: border-box;">
            <div
                class="modal-body p-0 position-relative w-100 overflow-y-scroll overflow-x-hidden custom-navbar-scrollbar ">
                <div class="position-relative p-5 padding-small d-flex justify-content-between">
                    <a href="/"><img src="{{ asset ('images/Logo_Black.png') }}" alt="" class="responsif-img-logo"></a>
                    <div data-bs-dismiss="modal" aria-label="Close" class="d-flex justify-content-end">
                        <img id="closeButton" src="{{ asset ('images/Close_Menu.png') }}" class="responsif-img-menu">
                    </div>
                </div>
                {{-- <div class="position-relative w-100" style="height: 80vh" id="carousel-container">
                    <div id="papuan-red-pop-div"
                        class="first-image container-product position-absolute translate-middle d-flex justify-content-center  div-container-image"
                        style=" height:50vh; top:40%">
                        <img class="primary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-active"
                            src="{{ asset('/images/Papuan_Red_Pop_NPEW.png') }}" alt="">
                        <img class="secondary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-noactive"
                            src="{{ asset('/images/Papuan_Red_Pop_NPEW2.png') }}" alt="">
                        <div class="w-100 py-5 position-absolute top-100 d-flex justify-content-center">
                            <button onclick="canClicked('papuan-red-pop-div')"
                                class="btn-can-npew-active mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                style="width:68px;height:68px">
                                <img class="img-fluid" src="{{ asset('images/can-active.png') }}" alt="">
                            </button>
                            <button onclick="labelClicked('papuan-red-pop-div')"
                                class="btn-label-npew-noactive mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                style="width:68px;height:68px">
                                <img class="img-fluid" src="{{ asset('images/label-noactive.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                    <div id="salted-papuan-red-pop-div"
                        class="second-image container-product position-absolute translate-middle d-flex justify-content-center  div-container-image"
                        style=" height:50vh; top:40%">
                        <img class="primary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-active"
                            src="{{ asset('/images/Salted_Papuan_Red_Pop_NPEW.png') }}" alt="">
                        <img class="secondary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-noactive"
                            src="{{ asset('/images/Salted_Papuan_Red_Pop_NPEW2.png') }}" alt="">
                        <div class="w-100 py-5 position-absolute top-100 d-flex justify-content-center">
                            <button onclick="canClicked('salted-papuan-red-pop-div')"
                                class="btn-can-npew-active mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                style="width:68px;height:68px">
                                <img class="img-fluid" src="{{ asset('images/can-active.png') }}" alt="">
                            </button>
                            <button onclick="labelClicked('salted-papuan-red-pop-div')"
                                class="btn-label-npew-noactive mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                style="width:68px;height:68px">
                                <img class="img-fluid" src="{{ asset('images/label-noactive.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                    <div id="greentea_orange"
                        class="third-image container-product position-absolute translate-middle d-flex justify-content-center  div-container-image"
                        style=" height:50vh; top:40%">
                        <img class="primary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-active"
                            src="{{ asset('/images/Greentea_Orange_NPEW.png') }}" alt="">
                        <img class="secondary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-noactive"
                            src="{{ asset('/images/Greentea_Orange_NPEW2.png') }}" alt="">
                        <div class="w-100 py-5 position-absolute top-100 d-flex justify-content-center">
                            <button onclick="canClicked('greentea_orange')"
                                class="btn-can-npew-active mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                style="width:68px;height:68px">
                                <img class="img-fluid" src="{{ asset('images/can-active.png') }}" alt="">
                            </button>
                            <button onclick="labelClicked('greentea_orange')"
                                class="btn-label-npew-noactive mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                style="width:68px;height:68px">
                                <img class="img-fluid" src="{{ asset('images/label-noactive.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                    <div id="strawberry_sakura"
                        class="fourth-image container-product position-absolute translate-middle d-flex justify-content-center  div-container-image"
                        style=" height:50vh; top:40%">
                        <img class="primary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-active"
                            src="{{ asset('/images/Strawberry_Sakura_NPEW.png') }}" alt="">
                        <img class="secondary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-noactive"
                            src="{{ asset('/images/Strawberry_Sakura_NPEW2.png') }}" alt="">
                        <div class="w-100 py-5 position-absolute top-100 d-flex justify-content-center">
                            <button onclick="canClicked('strawberry_sakura')"
                                class="btn-can-npew-active mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                style="width:68px;height:68px">
                                <img class="img-fluid" src="{{ asset('images/can-active.png') }}" alt="">
                            </button>
                            <button onclick="labelClicked('strawberry_sakura')"
                                class="btn-label-npew-noactive mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                style="width:68px;height:68px">
                                <img class="img-fluid" src="{{ asset('images/label-noactive.png') }}" alt="">
                            </button>
                        </div>
                    </div>
                </div> --}}

                <div id="swiperNav" class="swiper w-100" style="height: 80%;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide position-relative">
                            <div id="papuan-red-pop-div"
                                class="position-absolute top-50 start-50 translate-middle w-50 h-50">
                                <img class="primary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-active w-50"
                                    src="{{ asset('/images/Papuan_Red_Pop_NPEW.png') }}" alt="">
                                <img class="secondary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-noactive w-50"
                                    src="{{ asset('/images/Papuan_Red_Pop_NPEW2.png') }}" alt="">
                                <div class="w-100 py-5 position-absolute top-100 d-flex justify-content-center">
                                    <button onclick="canClicked('papuan-red-pop-div')"
                                        class="btn-can-npew-active mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                        style="width:68px;height:68px">
                                        <img class="img-fluid h-50" src="{{ asset('images/can-active.png') }}" alt="">
                                    </button>
                                    <button onclick="labelClicked('papuan-red-pop-div')"
                                        class="btn-label-npew-noactive mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                        style="width:68px;height:68px">
                                        <img class="img-fluid h-50" src="{{ asset('images/label-noactive.png') }}"
                                            alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div id="salted-papuan-red-pop-div"
                                class="position-absolute top-50 start-50 translate-middle w-50 h-50">
                                <img class="primary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-active w-50"
                                    src="{{ asset('/images/Salted_Papuan_Red_Pop_NPEW.png') }}" alt="">
                                <img class="secondary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-noactive w-50"
                                    src="{{ asset('/images/Salted_Papuan_Red_Pop_NPEW2.png') }}" alt="">
                                <div class="w-100 py-5 position-absolute top-100 d-flex justify-content-center">
                                    <button onclick="canClicked('salted-papuan-red-pop-div')"
                                        class="btn-can-npew-active mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                        style="width:68px;height:68px">
                                        <img class="img-fluid h-50" src="{{ asset('images/can-active.png') }}" alt="">
                                    </button>
                                    <button onclick="labelClicked('salted-papuan-red-pop-div')"
                                        class="btn-label-npew-noactive mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                        style="width:68px;height:68px">
                                        <img class="img-fluid h-50" src="{{ asset('images/label-noactive.png') }}"
                                            alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div id="greentea_orange"
                                class="position-absolute top-50 start-50 translate-middle w-50 h-50">
                                <img class="primary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-active w-50"
                                    src="{{ asset('/images/Greentea_Orange_NPEW.png') }}" alt="">
                                <img class="secondary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-noactive w-50"
                                    src="{{ asset('/images/Greentea_Orange_NPEW2.png') }}" alt="">
                                <div class="w-100 py-5 position-absolute top-100 d-flex justify-content-center">
                                    <button onclick="canClicked('greentea_orange')"
                                        class="btn-can-npew-active mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                        style="width:68px;height:68px">
                                        <img class="img-fluid h-50" src="{{ asset('images/can-active.png') }}" alt="">
                                    </button>
                                    <button onclick="labelClicked('greentea_orange')"
                                        class="btn-label-npew-noactive mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                        style="width:68px;height:68px">
                                        <img class="img-fluid h-50" src="{{ asset('images/label-noactive.png') }}"
                                            alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide position-relative">
                            <div id="strawberry_sakura"
                                class="position-absolute top-50 start-50 translate-middle w-50 h-50">
                                <img class="primary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-active w-50"
                                    src="{{ asset('/images/Strawberry_Sakura_NPEW.png') }}" alt="">
                                <img class="secondary-image img-fluid position-absolute start-50 top-50 translate-middle opacity-image-noactive w-50"
                                    src="{{ asset('/images/Strawberry_Sakura_NPEW2.png') }}" alt="">
                                <div class="w-100 py-5 position-absolute top-100 d-flex justify-content-center">
                                    <button onclick="canClicked('strawberry_sakura')"
                                        class="btn-can-npew-active mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                        style="width:68px;height:68px">
                                        <img class="img-fluid h-50" src="{{ asset('images/can-active.png') }}" alt="">
                                    </button>
                                    <button onclick="labelClicked('strawberry_sakura')"
                                        class="btn-label-npew-noactive mx-4 d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                                        style="width:68px;height:68px">
                                        <img class="img-fluid h-50" src="{{ asset('images/label-noactive.png') }}"
                                            alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev move-right border border-black rounded-circle"
                        style="height: 68px; width:68px;">
                        <img class="position-absolute img-fluid" src="{{ asset('images/Button_Left.png') }}" alt="">
                    </div>
                    <div class="swiper-button-next move-left border border-black rounded-circle"
                        style="height: 68px; width:68px;">
                        <img class="position-absolute img-fluid" src="{{ asset('images/Button_Right.png') }}" alt="">
                    </div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>

                <?php
                    if (Route::current()->uri == '/') {
                ?>
                @include('templates.mediumCarrouselUs')
                <?php
                    }
                ?>
                <div class="row">
                    <a href="/downloadSaleSheet" class="col-md-6 border border-black p-0 href-link">
                        <div class="text-npew-button button-npew-download text-black position-relative d-flex justify-content-center align-items-center"
                            style="width: 100%; height:100%; padding:3.5rem">
                            <h1 class="text-uppercase z-1"
                                style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                                Download Brochure
                            </h1>
                            <img class="position-absolute w-100 h-100 img-fluid z-0 start-50 top-50 translate-middle"
                                src="{{ asset('images/gradient_background.png') }}" alt="">
                        </div>
                    </a>
                    <a href="/downloadBrochure" class="col-md-6 border border-black p-0 href-link">
                        <div class="text-npew-button button-npew-download text-black position-relative d-flex justify-content-center align-items-center"
                            style="width: 100%; height:100%">
                            <h1 class="text-uppercase z-1"
                                style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                                Download Sale Sheet
                            </h1>
                            <img class="position-absolute w-100 h-100 img-fluid z-0 start-50 top-50 translate-middle"
                                src="{{ asset('images/gradient_background.png') }}" alt="">
                        </div>
                    </a>
                </div>
                {{-- <div
                    class="position-absolute slide-button d-flex justify-content-between start-50 translate-middle">
                    <button onclick="slideLeft()"
                        class="button-slide-left d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                        style="width:68px;height:68px">
                        <img class="img-fluid" src="{{ asset('/images/button-left.png') }}" alt="">
                    </button>
                    <button onclick="slideRight()"
                        class="button-slide-right d-flex justify-content-center align-items-center border border-black rounded-circle overflow-hidden"
                        style="width:68px;height:68px">
                        <img class="img-fluid" src="{{ asset('/images/button-right.png') }}" alt="">
                    </button>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModal" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog" style="max-width: 100%!important; margin:0;">
        <div class="modal-content bg-white overflow-hidden p-0"
            style="border-radius:0!important; auto; box-sizing: border-box;">
            <div class="modal-header position-relative p-5 padding-small d-flex justify-content-between">
                <a href="/"><img src="{{ asset ('images/Logo_Black.png') }}" alt="" class="responsif-img-logo"></a>
                <div data-bs-dismiss="modal" aria-label="Close" class="d-flex justify-content-end">
                    <img id="closeButton" src="{{ asset ('images/Close_Menu.png') }}" class="responsif-img-menu">
                </div>
            </div>
            <div class="modal-body p-0 navbar-flex">
                <a href="/shop" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            Products
                        </h1>
                    </div>
                </a>
                <a href="/about" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            About Palmas
                        </h1>
                    </div>
                </a>
                <a href="/ouractivities" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            Our Activities
                        </h1>
                    </div>
                </a>
                <a href="/pointofsales" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            Shop Location
                        </h1>
                    </div>
                </a>
                <a href="/contact" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            Contact Us
                        </h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
    const swiperNav = new Swiper('#swiperNav', {
        // Optional parameters
        direction: 'horizontal',
        speed: 500,
        loop: false,

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
        });
</script>
<script>
    $(document).ready(function() {
        const $closeButton = $('#closeButton');
        const $modal = $('#menuModal');

        // Animasi saat modal ditampilkan
        $modal.on('show.bs.modal', function () {
            // Memastikan modal terlihat
            $modal.show();
            // Menambahkan kelas rotasi sebelum modal muncul
            $closeButton.addClass('rotate-in');
        });

        // Setelah modal ditampilkan, hapus animasi tombol
        $modal.on('shown.bs.modal', function () {
            $closeButton.removeClass('rotate-in');
        });

        // Animasi saat tombol close diklik
        $closeButton.on('click', function () {
            $closeButton.addClass('rotate-out');

            // Tunggu animasi selesai sebelum menutup modal
            setTimeout(function () {
                $modal.modal('hide'); // Menutup modal setelah animasi
                $closeButton.removeClass('rotate-out'); // Reset animasi
            }, 500); // Waktu yang sama dengan durasi animasi
        });
    });

    let currentIndex = 0;

    function labelClicked(id_div) {
        const divElement = document.getElementById(id_div);

        const btnCan = divElement.querySelector('.btn-can-npew-active, .btn-can-npew-noactive');
        const btnLabel = divElement.querySelector('.btn-label-npew-noactive, .btn-label-npew-active');
        const primaryImage = divElement.querySelector('.primary-image');
        const secondaryImage = divElement.querySelector('.secondary-image');

        if (btnLabel.classList.contains('btn-label-npew-active')) {
            return;
        }else{
            btnLabel.querySelector('img').src = '{{ asset("images/label-active.png") }}';
            btnLabel.classList.remove('btn-label-npew-noactive');
            btnLabel.classList.add('btn-label-npew-active');
            
            btnCan.querySelector('img').src = '{{ asset("images/can-noactive.png") }}';
            btnCan.classList.remove('btn-can-npew-active');
            btnCan.classList.add('btn-can-npew-noactive');

            primaryImage.classList.remove('opacity-image-active');
            primaryImage.classList.add('opacity-image-noactive');

            secondaryImage.classList.remove('opacity-image-noactive');
            secondaryImage.classList.add('opacity-image-active');
        }
    }

    function canClicked(id_div) {
        const divElement = document.getElementById(id_div);

        const btnCan = divElement.querySelector('.btn-can-npew-active, .btn-can-npew-noactive');
        const btnLabel = divElement.querySelector('.btn-label-npew-noactive, .btn-label-npew-active');
        const primaryImage = divElement.querySelector('.primary-image');
        const secondaryImage = divElement.querySelector('.secondary-image');

        if (btnCan.classList.contains('btn-can-npew-active')) {
            return;
        }else{
            btnCan.querySelector('img').src = '{{ asset("images/can-active.png") }}';
            btnCan.classList.remove('btn-can-npew-noactive');
            btnCan.classList.add('btn-can-npew-active');

            btnLabel.querySelector('img').src = '{{ asset("images/label-noactive.png") }}';
            btnLabel.classList.remove('btn-label-npew-active');
            btnLabel.classList.add('btn-label-npew-noactive');

            primaryImage.classList.remove('opacity-image-noactive');
            primaryImage.classList.add('opacity-image-active');

            secondaryImage.classList.remove('opacity-image-active');
            secondaryImage.classList.add('opacity-image-noactive');
        }
    }


    function slideLeft() {
        const screenWidth = window.innerWidth;
        console.log(screenWidth);
        if (currentIndex > 0) {
            currentIndex--;
            if(screenWidth<=768){
                document.getElementById('carousel-container').style.transform = `translateX(-${currentIndex * 100}%)`;
            }else{
                document.getElementById('carousel-container').style.transform = `translateX(-${currentIndex * 50}%)`;
            }
        }
    }

    function slideRight() {
        const screenWidth = window.innerWidth;
        console.log(screenWidth);
        if (currentIndex < document.querySelectorAll('.container-product').length - 1) {
            currentIndex++;
            if(screenWidth<=768){
                document.getElementById('carousel-container').style.transform = `translateX(-${currentIndex * 100}%)`;
            }else{
                document.getElementById('carousel-container').style.transform = `translateX(-${currentIndex * 50}%)`;
            }
        }
    }
</script>