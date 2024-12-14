<style>
    .href-link {
        text-decoration: none;
    }

    .modal-dialog {
        max-width: 98%;
    }

    .modal-header {
        border: 0px;
    }

    .modal-footer {
        border: 0px;
    }

    .zoom-image {
        transition: transform 0.3s ease;
        width: 100%;
    }

    .zoom-image:hover {
        transform: scale(1.1);
        transform-origin: center;
        transition: transform 0.3s ease;
    }

    /* CSS untuk animasi */
    .rotate-in {
        animation: rotate-in 0.5s forwards;
    }

    .rotate-out {
        animation: rotate-out 0.5s forwards;
    }

    .col-custom {
        width: 20%;
    }

    .sosmed {
        box-sizing: border-box;
        border: 8px solid;
        border-color: white;
        transition: 0.3s;
        transition-timing-function: ease;
        padding-top: 3.5rem;
        padding-bottom: 3.5rem;
        padding-left: 3.5rem;
    }

    .sosmed:hover {
        border-color: black;
    }

    .navbar-flex {
        display: flex !important;
        flex-direction: row;
    }

    @media(max-width:1024px) {
        .sosmed {
            padding-left: 0.5rem !important;
        }
    }

    @keyframes rotate-in {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(180deg);
        }
    }

    @keyframes rotate-out {
        from {
            transform: rotate(180deg);
        }

        to {
            transform: rotate(0deg);
        }
    }

    @media (max-width: 576px) {
        .padding-small {
            padding: 2rem !important;
        }

        .responsif-img-logo {
            max-width: 40%;
        }

        .responsif-img-menu {
            max-width: 60%;
        }

        .col-custom {
            width: 100%;
        }

        .navbar-flex {
            flex-direction: column !important;
        }
    }
</style>

<nav class="navbar fixed-top p-0">
    <div class="container-fluid p-5 padding-small">
        <a href="/"><img class="navbar-brand responsif-img-logo" src="images/Logo_Black.png" alt="Logo Palmas"></a>
        <div data-bs-toggle="modal" class="d-flex justify-content-end" data-bs-target="#menuModal">
            <img src="images/Menu.png" class="responsif-img-menu" alt="Logo Menu Website Palmas">
        </div>
    </div>
</nav>

<div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModal" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog" style="max-width: 100%!important; margin:0;">
        <div class="modal-content bg-white overflow-hidden p-0"
            style="border-radius:0!important; auto; box-sizing: border-box;">
            <div class="modal-header position-relative p-5 padding-small d-flex justify-content-between">
                <a href="/"><img src="images/Logo_Black.png" alt="" class="responsif-img-logo"></a>
                <div data-bs-dismiss="modal" aria-label="Close" class="d-flex justify-content-end">
                    <img id="closeButton" src="images/Close_Menu.png" class="responsif-img-menu">
                </div>
            </div>
            <div class="modal-body p-0 navbar-flex">
                <a href="/shop" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            Products
                        </h1>
                    </div>
                </a>
                <a href="#" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            About Palmas
                        </h1>
                    </div>
                </a>
                <a href="#" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            Our Activities
                        </h1>
                    </div>
                </a>
                <a href="/pointofsales" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            Shop Location
                        </h1>
                    </div>
                </a>
                <a href="/contact" class="col-custom border border-black p-0 href-link">
                    <div class="sosmed d-flex justify-contet-center align-items-center"
                        style="width: 100%; height:100%">
                        <h1 class="text-uppercase text-black"
                            style="font-family: 'Helvetica-bold-con'; font-size: 24px; line-height: 32px">
                            Contact Us
                        </h1>
                    </div>
                </a>

                {{-- OLD NAVBAR --}}
                {{-- <div class="col-sm-12 col-md-3">
                    <a class="href-link" href="/shop">
                        <div class="p-0" style="overflow: hidden; border-radius: 25%">
                            <img class="zoom-image" src="images/IMG_Shop.png" class="zoom-image" alt="">
                        </div>
                        <h2 class="text-black py-3" style="font-family: 'Helvetica-roman'">Shop</h2>
                    </a>
                </div>
                <div class="col-sm-12 col-md-3">
                    <a class="href-link" href="/pointofsales">
                        <div class="p-0" style="overflow: hidden; border-radius: 25%">
                            <img class="zoom-image" src="images/IMG_Pos.png" class="zoom-image" alt="">
                        </div>
                        <h2 class="text-black py-3" style="font-family: 'Helvetica-roman'">Point of sale</h2>
                    </a>
                </div>
                <div class="col-sm-12 col-md-3">
                    <a class="href-link" href="/contact">
                        <div class="p-0" style="overflow: hidden; border-radius: 25%">
                            <img class="zoom-image" src="images/IMG_FAQ.png" class="zoom-image" alt="">
                        </div>
                        <h2 class="text-black py-3" style="font-family: 'Helvetica-roman'">FAQ</h2>
                    </a>
                </div>
                <div class="col-sm-12 col-md-3">
                    <a class="href-link" href="/contact">
                        <div class="p-0" style="overflow: hidden; border-radius: 25%">
                            <img class="zoom-image" src="images/IMG_Contact.png" class="zoom-image" alt="">
                        </div>
                        <h2 class="text-black py-3" style="font-family: 'Helvetica-roman'">Contact</h2>
                    </a>
                </div> --}}

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        const $closeButton = $('#closeButton');
        const $modal = $('#menuModal');

        // Animasi saat modal ditampilkan
        $modal.on('show.bs.modal', function () {
            // Memastikan modal terlihat
            $modal.show();
            // Menambahkan kelas rotasi sebelum modal muncul
            $closeButton.addClass('rotate-in');
        });

        // Setelah modal ditampilkan, hapus animasi tombol
        $modal.on('shown.bs.modal', function () {
            $closeButton.removeClass('rotate-in');
        });

        // Animasi saat tombol close diklik
        $closeButton.on('click', function () {
            $closeButton.addClass('rotate-out');

            // Tunggu animasi selesai sebelum menutup modal
            setTimeout(function () {
                $modal.modal('hide'); // Menutup modal setelah animasi
                $closeButton.removeClass('rotate-out'); // Reset animasi
            }, 500); // Waktu yang sama dengan durasi animasi
        });
    });
</script>