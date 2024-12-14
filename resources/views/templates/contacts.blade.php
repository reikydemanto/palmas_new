<style>
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

    .size-font {
        font-size: clamp(2.5rem, 2.5vw + 1rem, 3.25rem);
    }

    .col-custom{
        width: 20%;
    }

    @media(max-width:1024px) {
        .sosmed {
            padding-left: 1rem;
        }
    }

    @media(max-width:576px) {
        .col-custom {
            width: 100%;
        }
    }
    
</style>
<section class="z-0 row position-relative mx-auto" style="width: 100%; height: auto; box-sizing: border-box;">

    @if($type == "sosmed")
    <div class="col-12 p-5 border border-black">
        <h1 class="text-uppercase text-black size-font" style="font-family: 'Helvetica-roman' ; line-height: 1.25">
            For a dose of freshness in your feed
        </h1>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-custom border border-black p-0">
                <div class="sosmed d-flex justify-contet-center align-items-center" style="width: 100%; height:100%">
                    <h1 class="text-uppercase text-black"
                        style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                        Instagram
                    </h1>
                </div>
            </div>
            <div class="col-custom border border-black p-0">
                <div class="sosmed d-flex justify-contet-center align-items-center" style="width: 100%; height:100%">
                    <h1 class="text-uppercase text-black"
                        style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                        Tiktok
                    </h1>
                </div>
            </div>
            <div class="col-custom border border-black p-0">
                <div class="sosmed d-flex justify-contet-center align-items-center" style="width: 100%; height:100%">
                    <h1 class="text-uppercase text-black"
                        style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                        Youtube
                    </h1>
                </div>
            </div>
            <div class="col-custom border border-black p-0">
                <div class="sosmed d-flex justify-contet-center align-items-center" style="width: 100%; height:100%">
                    <h1 class="text-uppercase text-black"
                        style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                        X
                    </h1>
                </div>
            </div>
            <div class="col-custom border border-black p-0">
                <div class="sosmed d-flex justify-contet-center align-items-center" style="width: 100%; height:100%">
                    <h1 class="text-uppercase text-black"
                        style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                        Facebook
                    </h1>
                </div>
            </div>

        </div>
    </div>
    @elseif($type == 'ecommerce')
    <div class="col-md-6 col-sm-12 p-5 border border-black">
        <h1 class="text-uppercase text-black size-font" style="font-family: 'Helvetica-roman' ; line-height: 1.25">
            OTHER PLATFORM FOR YOUR convenience
        </h1>
    </div>
    <div class="col-md-6 col-sm-12 p-0 border border-black">
        <div class="sosmed d-flex justify-contet-center align-items-center" style="width: 100%; height:100%">
            <h1 class="text-uppercase text-black"
                style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                Tokopedia
            </h1>
        </div>
    </div>
    @else
        <div class="col-md-6 col-sm-12 p-5 border border-black">
            <h1 class="text-uppercase text-black size-font" style="font-family: 'Helvetica-roman' ; line-height: 1.25">
                Contact Us <br>Directly
            </h1>
        </div>
        <div class="col-md-6 col-sm-12 p-0 border border-black">
            <div class="sosmed d-flex justify-contet-center align-items-center" style="width: 100%; height:100%">
                <h1 class="text-uppercase text-black"
                    style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                    whatsapp business
                </h1>
            </div>
        </div>
    @endif
</section>