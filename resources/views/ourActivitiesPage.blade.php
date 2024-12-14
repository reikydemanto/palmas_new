<style>
    .front-images {
        opacity: 0;
        width: 100%;
        transition: opacity 0.3s ease-in-out;
    }

    .article-hover {
        color: black;
        transition: color 0.3s ease-in-out;
    }

    .article-hover h1 {
        font-size: clamp(1.5rem, 2rem + 1vw, 3rem) !important;
        z-index: 2;
        transition: color 0.3s ease-in-out;
    }

    .article-hover:hover .front-images {
        opacity: 1;
    }

    .article-hover:hover h1 {
        color: white;
    }


    .col-md-4:not(:last-child) {
        border-right: none !important;
        /* Hapus border kanan */
    }

    .row:not(:last-child) .col-md-4 {
        border-bottom: none !important;
        /* Hapus border bawah */
    }
</style>
<div class="container-fluid overflow-hidden p-0">
    @include('templates.navbar')
    @include('templates.bigTextShop')
    <div class="w-100" style="box-sizing: border-box; height: auto;">
        <div class="row text-center text-uppercase" style="font-family: 'Helvetica-roman'">
            @foreach ($articles as $item)
            <a href="#" class="col-md-4 p-0 border border-black position-relative article-hover">
                <img src="images/{{ $item->FRONT_IMAGES }}" class="img-fluid front-images" alt="">
                <h1 class="position-absolute top-50 start-50 translate-middle">
                    <?=$item->TITLE?>
                </h1>
            </a>
            @endforeach
        </div>
    </div>
    @include('templates.contacts',['type' => 'sosmed'])
</div>