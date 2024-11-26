<style>
    .gambar-bckg {
        opacity: 1;
    }

    .gambar-hvr {
        opacity: 0;
    }

    .shop:hover .gambar-bckg {
        opacity: 0;
    }

    .shop:hover .gambar-hvr {
        opacity: 1;
        left: 0;
        animation: fadeIn 0.7s ease forwards;
    }

    .img-remove {
        display: block;
        opacity: 1;
    }

    .shop:hover .img-remove {
        display: none;
        opacity: 0;
    }

    .shop:hover .white {
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

    .shop:hover .plus_hover {
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
<div class="position-relative z-0 overflow-hidden" style="width: 100%; height: auto">
    <div class="row">
        <div class="col-md-4 col-sm-12 p-0 shop position-relative overflow-hidden border border-black">
            <a href="/product">
                <img class="position-relative gambar-bckg" style="width: 100%;" src="images/Carousell_bg.png"
                    alt="Carousell_bg">
                <img class="position-absolute gambar-hvr" style="width: 100%;" src="images/Og_Hover.png"
                    alt="Carousell_bg">
                <div class="position-absolute text-center white text-black text-uppercase"
                    style="left: 50%; top: 5%; transform: translateX(-50%);">
                    <h1 class="font-size-small" style="font-family: 'Helvetica-bold-con';">MALT</h1>
                    <h1 class="font-size-medium" style="font-family: 'Helvetica-roman';">THE O.G</h1>
                </div>
                <img class="position-absolute"
                    style="width: 33.333333%;left: 52%; top: 57%; transform: translate(-50%, -43%);"
                    src="images/Malt_Og_can.png" alt="">
                <img class="position-absolute plus_hover" src="images/Button_Plus_Hover.png" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-12 p-0 shop position-relative overflow-hidden border border-black">
            <a href="/product">
                <img class="position-relative gambar-bckg" style="width: 100%;" src="images/Carousell_bg.png"
                    alt="Carousell_bg">
                <img class="position-absolute gambar-hvr" style="width: 100%;" src="images/Orange_Hover.png"
                    alt="Carousell_bg">
                <div class="position-absolute text-center text-black text-uppercase"
                    style="left: 50%; top: 5%; transform: translateX(-50%);">
                    <h1 class="font-size-small" style="font-family: 'Helvetica-bold-con';">MALT</h1>
                    <h1 class="font-size-medium" style="font-family: 'Helvetica-roman';">Orange bitter</h1>
                </div>
                <img class="position-absolute"
                    style="width: 33.333333%;left: 52%; top: 57%; transform: translate(-50%, -43%);"
                    src="images/Orange_can.png" alt="">
                <img class="position-absolute plus_hover" src="images/Button_Plus_Hover.png" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-12 p-0 shop position-relative overflow-hidden border border-black">
            <a href="/product">
                <img class="position-relative gambar-bckg" style="width: 100%;" src="images/Carousell_bg.png"
                    alt="Carousell_bg">
                <img class="position-absolute gambar-hvr" style="width: 100%;" src="images/Grape_Hover.png"
                    alt="Carousell_bg">
                <div class="position-absolute text-center text-black text-uppercase"
                    style="left: 50%; top: 5%; transform: translateX(-50%);">
                    <h1 class="font-size-small" style="font-family: 'Helvetica-bold-con';">MALT</h1>
                    <h1 class="font-size-medium" style="font-family: 'Helvetica-roman';">White Grape</h1>
                </div>
                <img class="position-absolute"
                    style="width: 33.333333%;left: 52%; top: 57%; transform: translate(-50%, -43%);"
                    src="images/Grape_can.png" alt="">
                <img class="position-absolute plus_hover" src="images/Button_Plus_Hover.png" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-12 p-0 shop position-relative overflow-hidden border border-black">
            <a href="/product">
                <img class="position-relative gambar-bckg" style="width: 100%;" src="images/Carousell_bg.png"
                    alt="Carousell_bg">
                <img class="position-absolute gambar-hvr" style="width: 100%;" src="images/Coconut_Hover.png"
                    alt="Carousell_bg">
                <div class="position-absolute text-center text-black white text-uppercase"
                    style="left: 50%; top: 5%; transform: translateX(-50%);">
                    <h1 class="font-size-small" style="font-family: 'Helvetica-bold-con';">power charge</h1>
                    <h1 class="font-size-medium" style="font-family: 'Helvetica-roman';">coconut greentea orange</h1>
                </div>
                <img class="position-absolute"
                    style="width: 33.333333%;left: 52%; top: 57%; transform: translate(-50%, -43%);"
                    src="images/Coconut_Greentea_Orange_can.png" alt="">
                <img class="position-absolute plus_hover" src="images/Button_Plus_Hover.png" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-12 p-0 shop position-relative overflow-hidden border border-black">
            <a href="/product">
                <img class="position-relative gambar-bckg" style="width: 100%;" src="images/Carousell_bg.png"
                    alt="Carousell_bg">
                <img class="position-absolute gambar-hvr" style="width: 100%;" src="images/Enamel_Hover.png"
                    alt="Carousell_bg">
                <div class="position-absolute text-center text-black white text-uppercase z-1"
                    style="left: 50%; top: 5%; transform: translateX(-50%);">
                    <h1 class="font-size-small" style="font-family: 'Helvetica-bold-con';">merch</h1>
                    <h1 class="font-size-medium" style="font-family: 'Helvetica-roman';">enamel bracelet</h1>
                </div>
                <img class="position-absolute z-0 img-remove" style="width: 100%; bottom: 0%"
                    src="images/Enamel_Bracelet.png" alt="">
                <img class="position-absolute plus_hover" src="images/Button_Plus_Hover.png" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-12 p-0 shop position-relative overflow-hidden border border-black">
            <a href="/product">
                <img class="position-relative gambar-bckg" style="width: 100%;" src="images/Carousell_bg.png"
                    alt="Carousell_bg">
                <img class="position-absolute gambar-hvr" style="width: 100%;" src="images/P_Enamel_bracelet_Hover.png"
                    alt="Carousell_bg">
                <div class="position-absolute text-center text-black white text-uppercase z-1"
                    style="left: 50%; top: 5%; transform: translateX(-50%);">
                    <h1 class="font-size-small" style="font-family: 'Helvetica-bold-con';">Merch</h1>
                    <h1 class="font-size-medium" style="font-family: 'Helvetica-roman';">the p Bracelet</h1>
                </div>
                <img class="position-absolute z-0 img-remove" style="width: 100%; bottom: 0%"
                    src="images/P_Enamel_bracelet.png" alt="">
                <img class="position-absolute plus_hover" src="images/Button_Plus_Hover.png" alt="">
            </a>
        </div>
        <div class="col-md-4 col-sm-12 p-0 shop position-relative overflow-hidden border border-black">
            <a href="/product">
                <img class="position-relative gambar-bckg" style="width: 100%;" src="images/Sling_bag_bg.png"
                    alt="Carousell_bg">
                <img class="position-absolute gambar-hvr" style="width: 100%;" src="images/Sling_Hover.png"
                    alt="Carousell_bg">
                <div class="position-absolute text-center text-black white text-uppercase z-1"
                    style="left: 50%; top: 5%; transform: translateX(-50%);">
                    <h1 class="font-size-small" style="font-family: 'Helvetica-bold-con';">Merch</h1>
                    <h1 class="font-size-medium" style="font-family: 'Helvetica-roman';">sling bag</h1>
                </div>
                <img class="position-absolute z-0 img-remove"
                    style="width: 80%; bottom: 10%; left: 50%; transform: translateX(-50%);" src="images/Sling_bag.png"
                    alt="">
                <img class="position-absolute plus_hover" src="images/Button_Plus_Hover.png" alt="">
            </a>
        </div>
    </div>
</div>