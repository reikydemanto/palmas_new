<div class="container-fluid overflow-hidden p-0">
    @include('templates.navbar')
    @include('templates.product')
    @include('templates.bigImage')
    <div class="container-fluid p-5 position-relative" style="margin-top: 5vh">
        <h1 class="text-black pb-4 text-center" style="font-family: 'Helvetica-roman'">Recomended products</h1>
        <button class="bg-black px-3 pt-2 pb-3 font-Helvetica-roman rounded-pill text-light border-0"><p class="m-0 button-text-see-all-product" style="font-size: 24px">See all our product</p></button>
    </div>
    @include('templates.mediumCarrousel')
</div>