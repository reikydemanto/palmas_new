<style>
    .swiper-slide div {
        transition: all 1s;
        transition-timing-function: ease;
    }

    .button-add-to-cart,
    .plus {
        transition: 1s;
    }

    .plus {
        transition-timing-function: ease;
    }

    .no-after::after {
        content: none;
    }

    .responsif-button-position {
        transform: translate(-50%, -100%) !important;
    }

    .button-add-to-cart {
        padding: 0.75rem !important;
    }

    @media (max-width: 992px) {
        .responsif-img-text-malt-og {
            width: 30% !important;
        }

        .responsif-img-text-orange {
            width: 63% !important;
        }

        .responsif-img-text-grape {
            width: 52% !important;
        }

        .responsif-img-bg {
            width: 55% !important;
        }

        .responsif-img-can {
            width: 18% !important;
        }
    }

    @media (max-width: 576px) {
        .button-add-to-cart img {
            width: 34px;
            height: 34px;
        }
    }
</style>
<div class="wrapper position-relative" style="height: 100vh">
    <div class="swiper container-fluid" style="height: 100%">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide position-relative">
                <div class="position-absolute top-50 translate-middle item-1-0 responsif-img-text-malt-og"
                    style="width: 20%; left:50%">
                    <img class="" src="images/Malt_Og_text.png" width="100%" alt="">
                </div>
                <div class="position-absolute top-50 translate-middle item-2-0 responsif-img-bg"
                    style="width: 37%; left:50%">
                    <img class="" src="images/Malt_Og_bg.png" width="100%" alt="">
                </div>
                <div class="position-absolute top-50 translate-middle item-3-0 responsif-img-can"
                    style="width: 12%; left:51%">
                    <img class="" src="images/Malt_Og_can.png" width="100%" alt="">
                </div>
                <div class="position-absolute swiper-button-next no-after responsif-img-can"
                    style="left: 95%; width: 12%" id="buttonOrangeNext">
                    <img src="./images/Orange_can.png" width="100%" alt="OG">
                </div>
            </div>
            <div class="swiper-slide position-relative">
                <div class="position-relative swiper-button-prev no-after responsif-img-can"
                    style="left: -5%; width: 12%" id="buttonOG" hidden>
                    <img src="./images/Malt_Og_can.png" width="100%" alt="OG">
                </div>
                <div class="position-absolute top-50 translate-middle item-1-1 responsif-img-text-orange"
                    style="width: 42%; left:50%">
                    <img class="" src="images/Orange_text.png" width="100%" alt="">
                </div>
                <div class="position-absolute top-50 translate-middle item-2-1 responsif-img-bg"
                    style="width: 37%; left:50%">
                    <img class="" src="images/Orange_bg.png" width="100%" alt="">
                </div>
                <div class="position-absolute top-50 translate-middle item-3-1 responsif-img-can"
                    style="width: 12%; left:51%">
                    <img class="" src="images/Orange_can.png" width="100%" alt="">
                </div>
                <div class="position-absolute swiper-button-next no-after responsif-img-can"
                    style="left: 95%; width: 12%" id="buttonGrape">
                    <img src="./images/Grape_can.png" width="100%" alt="OG">
                </div>
            </div>
            <div class="swiper-slide">
                <div class="position-relative swiper-button-prev no-after responsif-img-can"
                    style="left: -5%; width: 12%" id="buttonOrangePrev" hidden>
                    <img src="./images/Orange_can.png" width="100%" alt="OG">
                </div>
                <div class="position-absolute top-50 translate-middle item-1-2 responsif-img-text-grape"
                    style="width: 35%; left:50%">
                    <img class="" src="images/Grape_text.png" width="100%" alt="">
                </div>
                <div class="position-absolute top-50 translate-middle item-2-2 responsif-img-bg"
                    style="width: 37%; left:50%">
                    <img class="" src="images/Grape_bg.png" width="100%" alt="">
                </div>
                <div class="position-absolute top-50 translate-middle item-3-2 responsif-img-can"
                    style="width: 12%; left:51%">
                    <img class="" src="images/Grape_can.png" width="100%" alt="">
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        {{-- <div class="swiper-pagination"></div> --}}

        <!-- If we need navigation buttons -->
        {{-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> --}}

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    <a href="/product" class="position-absolute start-50 translate-middle z-1 p-3 shadow rounded-circle bottom-0 button-add-to-cart responsif-button-position"
        style="background-color: #FFC008; href=" #">
        <img class="plus w-100" src="images/Add_to_Cart_Button.png" alt="add_to_cart_button">
    </a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',  
    loop: false,
    speed: 1000,

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

    swiper.on('slideChange', function () {
        if(swiper.activeIndex == 0){
            $('#buttonOrangeNext').removeAttr('hidden');
            $('#buttonOG').attr('hidden',true);
            transition(swiper.activeIndex,swiper.previousIndex)
            $(".plus").css('transform', 'rotate(0deg)')
            $(".button-add-to-cart").css('background-color','#FFC008')
        }else if(swiper.activeIndex == 1){
            $('#buttonOG').removeAttr('hidden');
            $('#buttonGrape').removeAttr('hidden');
            $('#buttonOrangeNext').attr('hidden',true);
            $('#buttonOrangePrev').attr('hidden',true);
            transition(swiper.activeIndex,swiper.previousIndex)
            $(".plus").css('transform', 'rotate(180deg)')
            $(".button-add-to-cart").css('background-color','#E86F26')
        }else if(swiper.activeIndex == 2){
            $('#buttonOrangePrev').removeAttr('hidden');
            $('#buttonGrape').attr('hidden',true);
            transition(swiper.activeIndex,swiper.previousIndex)
            $(".plus").css('transform', 'rotate(360deg)')
            $(".button-add-to-cart").css('background-color','#BCD432')
        }
    });

    function transition(active, prev) {
        if(active > prev){
            $(".item-1-" + active).css("left", "60%");
            $(".item-2-" + active).css("left", "70%");
            $(".item-3-" + active).css("left", "60%");
            $(".item-2-" + active).css("opacity", "0");
            $(".item-3-" + active).css("opacity", "0");
            $(".item-1-" + active).css("opacity", "0");
            setTimeout(function() {
                $(".item-1-" + active).css("left", "50%");
                $(".item-2-" + active).css("left", "50%");
                $(".item-3-" + active).css("left", "51%");
                $(".item-1-" + active).css("opacity", "1");
                $(".item-2-" + active).css("opacity", "1");
                $(".item-3-" + active).css("opacity", "1");
            }, 300);
        }else if(active < prev){
            $(".swiper-slide .item-1-" + active).css("left", "40%");
            $(".swiper-slide .item-2-" + active).css("left", "30%");
            $(".swiper-slide .item-3-" + active).css("left", "40%");
            $(".swiper-slide .item-2-" + active).css("opacity", "0");
            $(".swiper-slide .item-3-" + active).css("opacity", "0");
            $(".swiper-slide .item-1-" + active).css("opacity", "0");
            setTimeout(function() {
                $(".swiper-slide .item-1-" + active).css("left", "50%");
                $(".swiper-slide .item-2-" + active).css("left", "50%");
                $(".swiper-slide .item-3-" + active).css("left", "51%");
                $(".swiper-slide .item-1-" + active).css("opacity", "1");
                $(".swiper-slide .item-2-" + active).css("opacity", "1");
                $(".swiper-slide .item-3-" + active).css("opacity", "1");
            }, 300);
        }
    }
</script>