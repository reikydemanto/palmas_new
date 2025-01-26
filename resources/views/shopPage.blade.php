<div class="container-fluid overflow-hidden p-0">
    @include('templates.navbar')
    @include('templates.bigTextShop',['title'=>'Our Product','aboutPage' => false])
    @include('templates.allProduct')
    {{-- @include('templates.palmasVarietyPack') --}}
    @include('templates.contacts',['type' => 'ecommerce'])
</div>