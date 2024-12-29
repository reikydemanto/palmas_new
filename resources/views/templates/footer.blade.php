<style>
    .footer_container {
        width: 100%;
        padding-left: 64px;
        padding-bottom: 64px;
        padding-right: 64px;
        padding-top: 224px;
    }

    .footer_container p {
        font-family: 'Helvetica-heavy-con';
        font-size: 20px;
        display: inline-block;
        color: #DEDEDE;
        vertical-align: bottom;
    }
</style>
<section class="position-relative" style="width: 100%; height: 100%">
    <div class="row footer_container">
        <div class="col-sm-12 col-md-6 mb-3">
            <img src="{{ asset('/images/Logo_transparent_dasb.png') }}" alt="palmas logo">
        </div>
        <div class="col-sm-12 col-md-6 d-flex justify-content-end align-items-end">
            <div class="d-flex">
                <p class="text-uppercase me-5">privacy policy</p>
                <p class="text-uppercase"> Terms & conditions</p>
            </div>
        </div>
    </div>
</section>
{{-- Bootstrap --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
{{-- Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    window.onload = function() {
    // Cari elemen loading
    const loadingScreen = document.getElementById('loading');
    
    // Tambahkan kelas 'hidden' untuk menyembunyikan loading screen
    loadingScreen.classList.add('hidden');
};
</script>
<script>
    gsap.to(".bounce", {
            opacity: 1,           // Fade-in
            scale: 1.2,           // Membesar sedikit
            duration: 1.5,        // Durasi animasi
            ease: "power3.out",   // Efek easing yang halus
            repeat: -1,           // Animasi terus menerus
            yoyo: true            // Animasi balik ke posisi awal
        });
</script>
</body>

</html>