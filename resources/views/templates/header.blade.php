<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Drink Palmas</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- Swiper JS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        @font-face {
            font-family: 'Helvetica-light';
            src: url('{{ asset('fonts/HelveticaNeueLTStd-Lt.otf') }}') format('opentype');
        }

        @font-face {
            font-family: 'Helvetica-medium';
            src: url('{{ asset('fonts/HelveticaNeueLTStd-Md.otf') }}') format('opentype');
        }

        @font-face {
            font-family: 'Helvesti-spike-regular';
            src: url('{{ asset('fonts/ABCHelveestiSpikes-Regular.otf') }}') format('opentype');
        }

        @font-face {
            font-family: 'Helvetica-roman';
            src: url('{{ asset('fonts/HelveticaNeueLTStd-Roman.otf') }}') format('opentype');
        }

        @font-face {
            font-family: 'Helvetica-bold-con';
            src: url('{{ asset('fonts/HelveticaNeueLTStd-BdCn.otf') }}') format('opentype');
        }

        @font-face {
            font-family: 'Helvetica-heavy-con';
            src: url('{{ asset('fonts/HelveticaNeueLTStd-HvCn.otf') }}') format('opentype');
        }
        @font-face {
            font-family: 'Helvetica-bold';
            src: url('{{ asset('fonts/HelveticaNeueLTStd-Bd.otf') }}') format('opentype');
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 0px;
            height: 0px;
        }

        .custom-navbar-scrollbar::-webkit-scrollbar {
            width: 8px;
            height: 0px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .custom-navbar-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        .custom-navbar-scrollbar::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .custom-navbar-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        #loading {
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            z-index: 9999;
        }

        #loading.hidden {
            display: none;
        }

        .bounce {
            max-width: 200px; /* Ukuran maksimal gambar */
            opacity: 0; /* Awal transparan */
        }
    </style>
</head>

<body class="antialiased custom-scrollbar">
    <div id="loading">
        <img class="w-100 bounce" src="{{ asset('images/Logo_Black.png') }}" alt="">
    </div>