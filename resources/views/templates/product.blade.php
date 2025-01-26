<style>
    .swiper {
        width: 100%;
        height: auto;
    }

    .top-box {
        height: 13vh;
    }

    .first-text-product {
        font-size: 52px;
    }

    .second-text-product {
        font-size: 151px;
    }

    .third-text-product {
        font-size: 40px;
    }

    .fourth-text-product {
        font-size: 24px;
    }

    .standard-width-input {
        width: 64%;
        height: 64px;
    }

    .button_number {
        display: block;
    }

    .plus-nut {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: block;
        width: 64px;
        height: 64px;
        background-color: #FFC008;
        border-radius: 50%;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .plus-nut:hover {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .5) !important;
    }

    .plus-nut img {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: transform 0.5s ease;
    }

    .nut-fact {
        transition: transform 0.3s ease;
        transform: scale(0);
        transform-origin: top left;
        position: absolute;
        left: 15%;
        top: 50%;
    }

    .nut-fact.active {
        transform: scale(1);
    }

    .plus-img {
        transition-timing-function: ease;
        transition: 1s;
    }

    .hover-circle:hover {
        cursor: pointer;
        background-color: black;
        color: white;
    }

    @media (max-width: 1024px) {

        .first-text-product {
            font-size: 42px;
        }

        .second-text-product {
            font-size: 120px;
        }

        .third-text-product {
            font-size: 36px;
        }

        .fourth-text-product {
            font-size: 22px;
        }

        .top-box {
            height: 10vh;
        }

        .standard-width-input {
            width: 56%;
            height: 56px;
        }
    }

    @media (max-width: 768px) {
        .first-text-product {
            font-size: 32px;
        }

        .second-text-product {
            font-size: 90px;
        }

        .third-text-product {
            font-size: 30px;
        }

        .fourth-text-product {
            font-size: 20px;
        }

        .standard-width-input {
            width: 48%;
            height: 48px;
        }
    }

    @media (max-width: 576px) {
        .nut-fact {
            width: 70%;
        }

        .button_number {
            display: none !important;
        }

        .first-text-product {
            font-size: 26px;
        }

        .second-text-product {
            font-size: 60px;
        }

        .third-text-product {
            font-size: 24px;
        }

        .fourth-text-product {
            font-size: 18px;
        }

        .standard-width-input {
            width: 100%;
            height: 36px;
        }

        .top-box {
            height: 6vh;
        }
    }
</style>
<div class="w-100 top-box"></div>
<div class="row p-5">
    <div class="col-md-12 col-lg-4 p-0">
        <div class="swiper" style="width: 100%; height:100%">
            <div class="swiper-wrapper">
                <div class="swiper-slide position-relative" style="width:100%; aspect-ratio: 2/3">
                    <img class="position-absolute z-1 start-50 translate-middle" style="width:35%; top: 50%;"
                        src="{{ asset('images/' . $product_detail->CAN_CARROUSEL_IMG) }}" alt="">
                    <img class="position-absolute z-0 top-50 start-50 translate-middle w-100 img-fluid"
                        src="{{ asset('images/' . $product_detail->BG_CARROUSEL_IMG) }}" alt="Carousell_bg">
                </div>
                @if($image_slider[0] != "")
                @foreach($image_slider as $image)
                    <div class="swiper-slide d-flex align-items-center">
                        <img style="width:100% ;object-fit: cover;" src="{{ asset('images/'.$image) }}"
                            alt="variant_1">
                    </div>
                @endforeach
                @endif
                <!-- <div class="swiper-slide">
                    <img style="width:100%; height:100% ;object-fit: cover;" src="{{ asset('images/Variant_2.png') }}"
                        alt="variant_1">
                </div>
                <div class="swiper-slide">
                    <img style="width:100%; height:100% ;object-fit: cover;" src="{{ asset('images/Variant_3.png') }}"
                        alt="variant_1">
                </div>
                <div class="swiper-slide">
                    <img style="width:100%; height:100% ;object-fit: cover;" src="{{ asset('images/Variant_4.png') }}"
                        alt="variant_1">
                </div> -->
            </div>
            <div class="swiper-button-prev">
                <img class="position-absolute" style="left: 10%;" src="{{ asset('images/Button_Left.png') }}" alt="">
            </div>
            <div class="swiper-button-next">
                <img class="position-absolute" style="right: 10%;" src="{{ asset('images/Button_Right.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-8 d-flex flex-column text-center justify-content-center align-items-center py-4">
        {{-- <h1 class="text-uppercase first-text-product" style="font-family:'Helvetica-roman'">zero proof
            malt brew</h1> --}}
        <h1 class="text-uppercase second-text-product" style="font-family:'Helvesti-spike-regular'">{{
    $product_detail->NAME }}</h1>
        {{-- <p class="third-text-product" style="font-family:'Helvetica-roman'" id="price-per-can">IDR 26.000,-/can</p>
        <p class="fourth-text-product" style="font-family:'Helvetica-roman'; width:70%">Sed ut perspiciatis unde omnis
            iste natus
            error sit
            voluptatem accusantium doloremque laudantium, totam rem aperiam.</p> --}}
        {{-- <div class="d-flex justify-content-center gap-3 mt-4 mx-auto third-text-product container-input"
            style="font-family: 'Helvetica-roman'; font-size:40px; width: 100%">
            <div class="button_number d-flex gap-3">
                <div class="border border-black rounded-circle mr-2 hover-circle" id="quantity-4"
                    style="width: 64px; height:64px">4</div>
                <div class="border border-black rounded-circle mr-2 hover-circle" id="quantity-6"
                    style="width: 64px; height:64px;">6</div>
                <div class="border border-black rounded-circle mr-2 hover-circle" id="quantity-12"
                    style="width: 64px; height:64px;">12</div>
            </div>
            <div class="border border-black rounded-pill d-flex justify-content-between standard-width-input"
                style="height:64px;">
                <div class="px-4 minus">
                    <img class="m-auto" src="{{ asset('images/minus.png') }}" alt="">
                </div>
                <input type="text" id="quantity" class="quantity bg-transparent text-center border-0"
                    style="outline-width: 0; width:50%" value="0">
                <div class="px-4 plus">
                    <img class="m-auto" src="{{ asset('images/plus.png') }}" alt="">
                </div>
            </div>
        </div> --}}
    </div>
</div>
<div class="mx-auto p-3" style="width: 94%; height:auto; margin-top: 150px; margin-bottom: 150px">
    <div class="row">
        <div class="col-lg-6 col-xl-7">
            <h2 class="text-black" style="font-family: 'Helvetica-roman'">{{ $product_detail->DESCRIPTION }}</h2>
        </div>
        <div class="col-md-2 d-flex align-items-center position-relative">
            <a id="plus-nut" class="z-2 rounded-circle shadow button-add-to-cart position-relative plus-nut"
                style="background-color: #FFC008; width:64px; height:64px; display:block;" href="">
                <img class="z-2 position-absolute plus-img" style="left: 50%; top:50%; transform: translate(-50%, -50%)"
                    src="{{ asset('images/Add_to_Cart_Button.png') }}" alt="add_to_cart_button">
            </a>
            <img class="z-1 position-absolute nut-fact" style="left:15%; top: 50%"
                src="{{ asset('images/' . $product_detail->NUT_IMAGE) }}" alt="">
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    $(document).ready(function () {

        var open = false;
        $('#plus-nut').click(function (event) {
            event.preventDefault(); // Mencegah link default
            $('.nut-fact').toggleClass('active');
            if (open) {
                $(".plus-img").css('transform', 'translate(-50%, -50%) rotate(0deg)')
                // $(".plus-img").css('transform', '')
                open = false
            } else {
                $(".plus-img").css('transform', 'translate(-50%, -50%) rotate(135deg)')
                // $(".plus-img").css('transform', '')
                open = true
            }
        });

        $('.minus').click(function (event) {
            minus_button()
            calculate_price()
        })
        $('.plus').click(function (event) {
            plus_button()
            calculate_price()
        })
        $('#quantity-4').click(function (event) {
            $('.quantity').val(4)
            calculate_price()
        })
        $('#quantity-6').click(function (event) {
            $('.quantity').val(6)
            calculate_price()
        })
        $('#quantity-12').click(function (event) {
            $('.quantity').val(12)
            calculate_price()
        })
    });

    function minus_button() {
        if ($('.quantity').val() != 0) {
            $('.quantity').val(parseInt($('.quantity').val()) - 1)
        }
    }

    function plus_button() {
        $('.quantity').val(parseInt($('.quantity').val()) + 1)

    }

    function calculate_price() {
        var pricePerCan = 26000;
        var quantity = $('.quantity').val()
        if (quantity == 0) {
            $('#price-per-can').text('IDR 26.000,-/can');
        } else {
            var totalPrice = quantity * pricePerCan
            var formattedPrice = totalPrice.toLocaleString('id-ID');
            $('#price-per-can').text('IDR ' + formattedPrice + ',-');
        }
    }

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>