<style>
    .variety-pack {
        border-style: solid;
        border-width: 7px;
        border-color: white;
        transition: border-color 0.3s ease;
    }

    .variety-pack:hover {
        border-color: black;
    }

    .og_hover {
        width: 10%;
        height: 100%;
        left: 0%;
        bottom: -50%;
        transform: rotate(-45deg);
        opacity: 0;
        transition: opacity 0.5s ease, bottom 0.5s ease, transform 0.5s ease;
    }

    .variety-pack:hover .og_hover {
        bottom: -30%;
        transform: rotate(0deg);
        opacity: 1;
    }

    .o_hover {
        width: 10%;
        height: 100%;
        left: 18%;
        top: 0%;
        transform: rotate(45deg);
        opacity: 0;
        transition: opacity 0.5s ease, top 0.5s ease, transform 0.5s ease;
    }

    .variety-pack:hover .o_hover {
        top: -20%;
        transform: rotate(0deg);
        opacity: 1;
    }


    .g_hover {
        width: 10%;
        height: 100%;
        left: 32%;
        top: 75%;
        transform: rotate(-45deg);
        opacity: 0;
        transition: opacity 0.5s ease, top 0.5s ease, transform 0.5s ease;
    }

    .variety-pack:hover .g_hover {
        top: 55%;
        transform: rotate(0deg);
        opacity: 1;
    }

    .rr_hover {
        width: 10%;
        height: 100%;
        left: 50.5%;
        top: 30%;
        transform: rotate(45deg);
        opacity: 0;
        transition: opacity 0.5s ease, top 0.5s ease, transform 0.5s ease;
    }

    .variety-pack:hover .rr_hover {
        top: 10%;
        transform: rotate(0deg);
        opacity: 1;
    }

    .bt_hover {
        width: 10%;
        height: 100%;
        left: 70%;
        top: -9%;
        transform: rotate(-45deg);
        opacity: 0;
        transition: opacity 0.5s ease, top 0.5s ease, transform 0.5s ease;
    }

    .variety-pack:hover .bt_hover {
        top: -29%;
        transform: rotate(0deg);
        opacity: 1;
    }

    .ga_hover {
        width: 10%;
        height: 100%;
        left: 91%;
        top: 40%;
        transform: rotate(45deg);
        opacity: 0;
        transition: opacity 0.5s ease, top 0.5s ease, transform 0.5s ease;
    }

    .variety-pack:hover .ga_hover {
        top: 20%;
        transform: rotate(0deg);
        opacity: 1;
    }

    @media (max-width: 576px) {
        .text-palmas-variety {
            font-size: 60px!important;
        }
    }
</style>

<section class="text-center border border-black border-top-o position-relative" style="width: 100%">
    <div class="p-5 variety-pack position-relative" style="width: 100%; height:100%;">
        <h1 class="position-relative text-uppercase text-black z-2 text-palmas-variety"
            style="font-family: 'Helvesti-spike-regular'; font-size:151px">
            PALMAS VARIETY PACK</h1>
        <div class="position-absolute z-3 og_hover" style="">
            <img src="images/VP_OG.png" alt="">
        </div>
        <div class="position-absolute o_hover z-1" style="">
            <img src="images/VP_O.png" alt="">
        </div>
        <div class="position-absolute z-3 g_hover" style="">
            <img src="images/VP_G.png" alt="">
        </div>
        <div class="position-absolute z-1 rr_hover" style="">
            <img src="images/VP_RR.png" alt="">
        </div>
        <div class="position-absolute z-1 bt_hover" style="">
            <img src="images/VP_BT.png" alt="">
        </div>
        <div class="position-absolute z-3 ga_hover" style="">
            <img src="images/VP_GA.png" alt="">
        </div>
    </div>
</section>