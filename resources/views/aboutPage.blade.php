<style>
    .text-small-about-below{
        padding: 10rem 0rem;
    }
    @media(max-width:768px) {
        .text-small-about-below {
            padding: 4rem 0rem!important;
        }
    }
</style>
<div class="container-fluid overflow-hidden p-0">
    @include('templates.navbar')
    @include('templates.bigTextShop',['aboutPage' => true])
    <div class="w-100">
        <img src="{{ asset('/images/About_Us_Image.png') }}" class="w-100 img-fluid" alt="">
    </div>
    <div class="w-100 text-small-about-below">
        <h1 class="text-small text-small-about text-center" style="font-family: 'Helvetica-medium';">At Palmas, we
            create multiple
            product categories, each tailored with unique characteristics and functions, allowing us to serve all market
            segments—whether for relaxation, post-exercise, or during activities. We've actively engaged with the Bali
            community, contributing to both general well-being and specific local initiatives, strengthening our
            connection with the island.</h1>
    </div>
    <div class="w-100 mb-5">
        <img src="{{ asset('/images/About_Us_Image_Activities.png') }}" class="w-100 img-fluid" alt="">
    </div>
    @include('templates.contacts',['type' => 'sosmed'])
</div>