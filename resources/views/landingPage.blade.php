<div class="container-fluid overflow-hidden p-0">
    @include('templates.navbar')
    {{-- @include('templates.bigCarrousel') --}}
    @include('templates.bigImageLandingPage')
    @include('templates.cool_box')
    @include('templates.bigImage')
    @include('templates.bigText')
    @include('templates.mediumCarrousel')
    {{-- @include('templates.palmasVarietyPack') --}}
    @include('templates.contacts',['type' => 'sosmed'])
</div>