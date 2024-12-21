<style>
    .font-size-small {
        font-size: clamp(1rem, 1.5vw, 2rem);
    }

    @media (max-width: 576px) {
        .button-text-see-all-product {
            font-size: 12px !important;
        }

        #container-bigtext{
            padding-left: 1rem!important;
            padding-right: 1rem!important;
        }
    }
</style>
<section class="container-fluid position-relative pt-3 px-5" id="container-bigtext">
    <h1 class="text-uppercase text-black position-relative m-0"
        style="font-family: 'Helvesti-spike-regular'; font-size:20vw;">flavors</h1>
    <div class="position-relative pe-1">
        <p class="text-uppercase text-black pb-4 pe-2 font-size-small" style="font-family: 'Helvetica-roman'">discover
            new flavors in every
            can of palmas</p>
        <div class="d-flex justify-content-between">
            <a href="/shop"><button
                    class="bg-black px-3 pt-2 pb-3 font-Helvetica-roman rounded-pill text-light border-0">
                    <p class="m-0 button-text-see-all-product" style="font-size: 24px">See all our product</p>
                </button></a>
            {{-- <a href="/salessheetnpew2025"><button
                    class="bg-black px-3 pt-2 pb-3 font-Helvetica-roman rounded-pill text-light border-0">
                    <p class="m-0 button-text-see-all-product" style="font-size: 24px">Download Sales Sheet</p>
                </button></a> --}}
        </div>
    </div>
</section>