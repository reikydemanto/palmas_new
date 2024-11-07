<style>
    .font-cool-box-small {
        font-size: clamp(1rem, 1.5vw, 2rem);
    }

    @media (max-width: 1200px) {
        .cool-box-img {
            bottom: -80px !important;
            width: 60% !important;
        }

        .font-cool-box-big {
            font-size: 8vw !important;
        }
    }

    @media (max-width: 576px) {
        .cool-box-img {
            bottom: -40px !important;
            width: 70% !important;
        }

        .font-cool-box-big {
            font-size: 9vw !important;
        }
    }
</style>
<section class="container-fluid mt-5 z-0">
    <h1 class="text-uppercase text-center p-1 font-cool-box-big" style="font-family: 'Helvetica-light';font-size: 5vw;">
        Is this
        softdrink?</h1>
    <p class="text-uppercase text-center pt-2 font-cool-box-small" style="font-family: 'Helvetica-medium">this is
        another experience of drinking games</p>
    <img class="position-relative start-50 translate-middle-x z-0 cool-box-img" style="width:45%; bottom: -130px;"
        src="./images/Cool_Box.png">
</section>