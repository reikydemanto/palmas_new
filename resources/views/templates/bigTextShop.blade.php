<style>
    .text-big {
        font-size: 92px;
    }

    .text-small {
        font-size: 24px;
    }

    .text-small-about {
        padding: 0rem 20rem;
    }

    .top-box {
        height: 15vh;
    }

    @media(max-width:1280px) {
        .text-small-about {
            padding: 0rem 10rem;
        }
    }

    @media(max-width:1024px) {
        .text-small-about {
            padding: 0rem 6rem;
        }

        .top-box {
            height: 15vh;
        }
    }

    @media (max-width:576px) {
        .text-big {
            font-size: 40px;
        }

        .text-small {
            font-size: 12px;
        }

        .text-small-about {
            padding: 0rem 3rem;
        }

        .top-box {
            height: 10vh;
        }
    }
</style>
@if(!empty($title))
<div class="d-flex justify-content-center align-items-center" style="width: 100%; height:80vh;">
    <div class="text-center text-uppercase text-black">
        <h1 class="p-5 text-big" style="font-family: 'Helvetica-light';">
            <?=$title?>
        </h1>
    </div>
</div>
@elseif($aboutPage)
<div class="w-100 top-box"></div>
<div class="d-flex justify-content-center align-items-center" style="width: 100%; height:84vh;">
    <div class="text-center text-black">
        <h1 class="p-5 text-big text-uppercase" style="font-family: 'Helvetica-light';">Lorem Ipsum Dolor
            sit amet
            consectetur adipiscing</h1>
        <h1 class="text-small text-small-about" style="font-family: 'Helvetica-medium';">Palmas, founded in 2021, is a
            research and
            development company in the beverage industry. We specialize in creating a soda drink with a unique
            Indonesian taste as our signature. After two years of dedicated research and development, our refreshing
            drink was officially launched in Bali, Indonesia, in 2023, offering consumers a distinct and flavorful
            experience inspired by Indonesia's rich resources.</h1>
    </div>
</div>
@else
<div class="d-flex justify-content-center align-items-center" style="width: 100%; height:100vh;">
    <div class="text-center text-uppercase text-black">
        <h1 class="p-5 text-big" style="font-family: 'Helvetica-light';">Lorem Ipsum Dolor
            sit amet
            consectetur adipiscing</h1>
        <h1 class="p-5 text-small" style="font-family: 'Helvetica-medium';">tempor incidunt ut labore et dolore
            magna aliqua</h1>
    </div>
</div>
@endif