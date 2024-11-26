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

    .size-font{
        font-size: clamp(2.5rem, 2.5vw + 1rem, 3.25rem);
    }
</style>
<section class="z-0 row position-relative mx-auto" style="width: 100%; height: auto; box-sizing: border-box;">
    <div class="col-md-6 col-sm-12 p-5 border border-black">
        <h1 class="text-uppercase text-black size-font" style="font-family: 'Helvetica-roman' ; line-height: 1.25">
            <?=$kiri?>
        </h1>
    </div>
    <?php if($tengah != null) { ?>
    <div class="col-md-6 col-sm-12 p-0 border border-black">
        <div class="sosmed d-flex justify-contet-center align-items-center" style="width: 100%; height:100%">
            <h1 class="text-uppercase text-black" style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                <?=$tengah?>
            </h1>
        </div>
    </div>
    <?php }else { ?>
    <div class="col-md-6 col-sm-12 p-0 d-flex flex-column">
        <div class="border border-black flex-grow-1 d-flex align-items-center">
            <div class="sosmed" style="width: 100%">
                <h1 class="text-uppercase text-black"
                    style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                    {{ $atas }}</h1>
            </div>
        </div>
        <div class="border border-black flex-grow-1 d-flex align-items-center">
            <div class="sosmed" style="width: 100%">
                <h1 class="text-uppercase text-black"
                    style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                    {{ $bawah }}</h1>
            </div>
        </div>
    </div>
    <?php }?>
</section>