<div class="container-fluid overflow-hidden p-0">
    @include('templates.navbar')
    @include('templates.searchBarPos')
    @include('templates.maps')
    <div style="height:10vh"></div>
    @include('templates.contacts',['kiri' => 'OTHER PLATFORM <br> FOR YOUR convenience','atas'=>'tokopedia','bawah'=>'shopee','tengah'=>null])
</div>