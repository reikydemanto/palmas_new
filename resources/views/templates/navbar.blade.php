<style>
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
        .padding-small{
            padding: 2rem!important;
        }
        .responsif-img-logo {
            max-width: 50%;
        }
        .responsif-img-menu {
            max-width: 80%;
        }
    }
</style>

<nav class="navbar fixed-top">
    <div class="container-fluid p-5 padding-small">
        <img class="navbar-brand responsif-img-logo" src="images/Logo_Black.png" alt="Logo Palmas">
        <div data-bs-toggle="modal" class="d-flex justify-content-end" data-bs-target="#menuModal">
            <img src="images/Menu.png" class="responsif-img-menu" alt="Logo Menu Website Palmas">
        </div>
    </div>
</nav>

<div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModal" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content rounded-5 bg-white overflow-hidden px-3">
            <div class="modal-header position-relative p-3 d-flex justify-content-between">
                <img src="images/Logo_black.png" alt="" class="responsif-img-logo">
                <div data-bs-dismiss="modal" aria-label="Close" class="d-flex justify-content-end">
                    <img id="closeButton" src="images/Close_Menu.png" class="responsif-img-menu">
                </div>
            </div>
            <div class="modal-body row">
                <div class="col-sm-12 col-md-3">
                    <div class="p-0" style="overflow: hidden; border-radius: 25%">
                        <img class="zoom-image" src="images/IMG_Shop.png" class="zoom-image" alt="">
                    </div>
                    <h2 class="text-black py-3" style="font-family: 'Helvetica-roman'">Shop</h2>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="p-0" style="overflow: hidden; border-radius: 25%">
                        <img class="zoom-image" src="images/IMG_Pos.png" class="zoom-image" alt="">
                    </div>
                    <h2 class="text-black py-3" style="font-family: 'Helvetica-roman'">Point of sale</h2>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="p-0" style="overflow: hidden; border-radius: 25%">
                        <img class="zoom-image" src="images/IMG_FAQ.png" class="zoom-image" alt="">
                    </div>
                    <h2 class="text-black py-3" style="font-family: 'Helvetica-roman'">FAQ</h2>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="p-0" style="overflow: hidden; border-radius: 25%">
                        <img class="zoom-image" src="images/IMG_Contact.png" class="zoom-image" alt="">
                    </div>
                    <h2 class="text-black py-3" style="font-family: 'Helvetica-roman'">Contact</h2>
                </div>
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