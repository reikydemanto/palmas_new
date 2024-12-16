<style>
    .text-big {
        font-size: 92px;
    }

    .text-small {
        font-size: 24px;
    }

    @media (max-width:576px) {
        .text-big {
            font-size: 40px;
        }

        .text-small {
            font-size: 12px;
        }
    }
</style>
@if(!empty($title))
<div class="d-flex justify-content-center align-items-center" style="width: 100%; height:80vh;">
    <div class="text-center text-uppercase text-black">
        <h1 class="p-5 text-big" style="font-family: 'Helvetica-light';"><?=$title?></h1>
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