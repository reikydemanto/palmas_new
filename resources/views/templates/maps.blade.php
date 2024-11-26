<style>
    .custom-spacing {
        letter-spacing: 1px;
        /* Mengatur jarak antar huruf */
    }

    .custom-rounded {
        border-radius: 16px;
        /* Mengatur jarak antar huruf */
    }

    .small-screen {
        height: 100%;
    }

    .pointer-button:hover {
        cursor: pointer;
        outline: 2px solid black;
    }

    .active-tab {
        color: white;
        background-color: black;
    }

    @media(max-width:576px) {
        .small-screen {
            height: 50vh !important;
            margin-bottom: 20px;
        }
    }
</style>
<div class="container-fluid px-5">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <iframe id="google-map" class="w-100 small-screen" style="border-radius: 20px; height:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3309287006005!2d115.2396983!3d-8.660043300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241553a20bdc7%3A0x491e328b6eb9083e!2sRTB%20-%20Rumah%20Tanjung%20Bungkak!5e0!3m2!1sen!2sid!4v1732647240639!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-4 col-sm-12 d-flex flex-column gap-3 mb-2">
            <div class="w-100 border border-black custom-rounded p-4 pointer-button" id="location-1">
                <h5 class="custom-spacing font-weight-bold text-uppercase" style="font-family: Helvetica-roman">POTATO HEAD BEACH CLUB</h5>
                <p class="mt-3 mb-0" style="font-family: Helvetica-roman">Petitenget St No.51B, Seminyak, Kuta Utara, Badung Regency, Bali</p>
            </div>
            <div class="w-100 border border-black custom-rounded p-4 pointer-button" id="location-2">
                <h5 class="custom-spacing font-weight-bold text-uppercase" style="font-family: Helvetica-roman">Mrs Sippy Bali</h5>
                <p class="mt-3 mb-0" style="font-family: Helvetica-roman">Jl. Taman Ganesha, Gang Gagak 8 Kerobokan. Seminyak, Kec. Kuta Utara, Bali</p>
            </div>
            <div class="w-100 border border-black custom-rounded p-4 pointer-button" id="location-3">
                <h5 class="custom-spacing font-weight-bold text-uppercase" style="font-family: Helvetica-roman">Motel Mexicola</h5>
                <p class="mt-3 mb-0" style="font-family: Helvetica-roman">Jl. Kayu Jati No.9X, Kerobokan Kelod, Kec. Kuta Utara, Kabupaten Badung, Bali</p>
            </div>
            <div class="w-100 border border-black custom-rounded p-4 pointer-button" id="location-4">
                <h5 class="custom-spacing font-weight-bold text-uppercase" style="font-family: Helvetica-roman">FINNS Beach Club</h5>
                <p class="mt-3 mb-0" style="font-family: Helvetica-roman">Jl. Pantai Berawa No.99, Canggu, Kec. Kuta Utara, Kabupaten Badung, Bali</p>
            </div>
            <div class="w-100 border border-black custom-rounded p-4 pointer-button" id="location-5">
                <h5 class="custom-spacing font-weight-bold text-uppercase" style="font-family: Helvetica-roman">FINNS Recreation Club</h5>
                <p class="mt-3 mb-0" style="font-family: Helvetica-roman">Jl. Pantai Berawa No.15, Canggu, Tibubeneng, Kec. Kuta Utara, Kabupaten Badung, Bali</p>
            </div>
        </div>
    </div>
</div>

<script>
    const defaultLocation = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3309287006005!2d115.2396983!3d-8.660043300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241553a20bdc7%3A0x491e328b6eb9083e!2sRTB%20-%20Rumah%20Tanjung%20Bungkak!5e0!3m2!1sen!2sid!4v1732647240639!5m2!1sen!2sid'
    $('#location-1').click(function() {
        if ($(this).hasClass('active-tab')) {
            $(this).removeClass('active-tab')
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3309287006005!2d115.2396983!3d-8.660043300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241553a20bdc7%3A0x491e328b6eb9083e!2sRTB%20-%20Rumah%20Tanjung%20Bungkak!5e0!3m2!1sen!2sid!4v1732647240639!5m2!1sen!2sid')
        } else {
            $('.pointer-button').each(function() {
                $(this).removeClass('active-tab')
            })
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1274313182166!2d115.14735927583534!3d-8.679429988375944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24711ff4b76fd%3A0x1b9dac1a58048d4e!2sPotato%20Head%20Beach%20Club!5e0!3m2!1sen!2sid!4v1732648912719!5m2!1sen!2sid')
            $(this).addClass('active-tab')
        }
    })
    $('#location-2').click(function() {
        if ($(this).hasClass('active-tab')) {
            $(this).removeClass('active-tab')
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3309287006005!2d115.2396983!3d-8.660043300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241553a20bdc7%3A0x491e328b6eb9083e!2sRTB%20-%20Rumah%20Tanjung%20Bungkak!5e0!3m2!1sen!2sid!4v1732647240639!5m2!1sen!2sid')
        } else {
            $('.pointer-button').each(function() {
                $(this).removeClass('active-tab')
            })
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.1274313182166!2d115.14735927583534!3d-8.679429988375944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2470dd8749eab%3A0x329f9432dee17526!2sMrs%20Sippy%20Bali!5e0!3m2!1sen!2sid!4v1732649951211!5m2!1sen!2sid')
            $(this).addClass('active-tab')
        }
    })
    $('#location-3').click(function() {
        if ($(this).hasClass('active-tab')) {
            $(this).removeClass('active-tab')
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3309287006005!2d115.2396983!3d-8.660043300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241553a20bdc7%3A0x491e328b6eb9083e!2sRTB%20-%20Rumah%20Tanjung%20Bungkak!5e0!3m2!1sen!2sid!4v1732647240639!5m2!1sen!2sid')
        } else {
            $('.pointer-button').each(function() {
                $(this).removeClass('active-tab')
            })
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0980188429803!2d115.1512969758354!3d-8.682228488412797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd247102a7b7f25%3A0x7bc3bd199203e28b!2sMotel%20Mexicola!5e0!3m2!1sen!2sid!4v1732649993994!5m2!1sen!2sid')
            $(this).addClass('active-tab')
        }
    })
    $('#location-4').click(function() {
        if ($(this).hasClass('active-tab')) {
            $(this).removeClass('active-tab')
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3309287006005!2d115.2396983!3d-8.660043300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241553a20bdc7%3A0x491e328b6eb9083e!2sRTB%20-%20Rumah%20Tanjung%20Bungkak!5e0!3m2!1sen!2sid!4v1732647240639!5m2!1sen!2sid')
        } else {
            $('.pointer-button').each(function() {
                $(this).removeClass('active-tab')
            })
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.260477420531!2d115.1368234758351!3d-8.666759888209308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd247e34ed21a49%3A0x4993b9f229a9b15f!2sFINNS%20Beach%20Club!5e0!3m2!1sen!2sid!4v1732650049119!5m2!1sen!2sid')
            $(this).addClass('active-tab')
        }
    })
    $('#location-5').click(function() {
        if ($(this).hasClass('active-tab')) {
            $(this).removeClass('active-tab')
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3309287006005!2d115.2396983!3d-8.660043300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241553a20bdc7%3A0x491e328b6eb9083e!2sRTB%20-%20Rumah%20Tanjung%20Bungkak!5e0!3m2!1sen!2sid!4v1732647240639!5m2!1sen!2sid')
        } else {
            $('.pointer-button').each(function() {
                $(this).removeClass('active-tab')
            })
            $('#google-map').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.305545043117!2d115.14526987583498!3d-8.662463888152798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd239942b306afb%3A0x35a92bd5189298d!2sFINNS%20Recreation%20Club!5e0!3m2!1sen!2sid!4v1732650080427!5m2!1sen!2sid')
            $(this).addClass('active-tab')
        }
    })
</script>