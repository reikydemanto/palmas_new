<style>
    .active-tab {
        color: white;
        background-color: black;
    }

    .size-font {
        font-size: clamp(1rem, 2vw + 1rem, 2.5rem);
    }

    .size-font-button-send {
        font-size: clamp(1.125rem, 0.75vw + 1.125rem, 2.25rem);
    }

    .size-font-button-faq {
        font-size: clamp(1rem, 1.1vw, 1.5rem);
    }

    .tab-faq {
        transition: transform 0.5s ease, background-color 0.5s ease;
    }

    .tab-faq:hover {
        cursor: pointer;
        color: white;
        background-color: black;
    }

    .tab-faq-active {
        background-color: black !important;
        color: white !important;
    }

    .collapse-content {
        max-height: 1px;
        overflow: hidden;
        transition: max-height 0.5s ease;
    }

    .collapse-content.expanded {
        max-height: 2000px;
        transition: max-height 1s ease;
    }

    .plus-sign {
        position: relative;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .plus-sign::before,
    .plus-sign::after {
        content: '';
        position: absolute;
        background-color: black;
        transition: all 0.5s ease;
    }

    .plus-sign::before {
        width: 40px;
        height: 3px;
    }

    .plus-sign::after {
        height: 40px;
        width: 3px;
    }

    .plus-sign.minus::before {
        width: 40px;
        height: 3px;
    }

    .plus-sign.minus::after {
        height: 3px;
        width: 3px;
    }

    @media (max-width:1024px) {
        .border-line {
            padding-left: 1.75rem !important;
            padding-right: 1.75rem !important;
        }

        .contact {
            width: 75% !important;
        }
    }
</style>
<div class="w-100">
    <div class="mt-4 d-flex flex-wrap justify-content-center gap-3 size-font" style="font-family: Helvetica-roman">
        <div class="border border-black rounded-pill px-5 py-2 border-line ordering tab-faq">
            <h1>ordering</h1>
        </div>
        <div class="border border-black rounded-pill px-5 py-2 border-line press tab-faq">
            <h1>press</h1>
        </div>
        <div class="border border-black rounded-pill px-5 py-2 border-line feedback tab-faq">
            <h1>feedback</h1>
        </div>
        <div class="border border-black rounded-pill px-5 py-2 border-line other tab-faq">
            <h1>other</h1>
        </div>
    </div>
    <div id="contact" style="font-family: Helvetica-roman">
        <div class="contact mx-auto w-50 mt-4" style="margin-bottom: 20vh">
            <div class="row">
                <div class="col-sm-12 col-md-6 p-2">
                    <input class="border rounded p-4 w-100 bg-white" type="text" placeholder="First Name">
                </div>
                <div class="col-sm-12 col-md-6 p-2">
                    <input class="border rounded p-4 w-100 bg-white" type="text" placeholder="Last Name">
                </div>
                <div class="col-sm-12 p-2">
                    <input class="border rounded p-4 w-100 bg-white" type="email" placeholder="Email">
                </div>
                <div class="col-sm-12 p-2">
                    <textarea class="border rounded p-4 w-100 bg-white" type="text" placeholder="Message"
                        rows="5"></textarea>
                </div>
                <div class="col-sm-12 p-2">
                    <button class="bg-black text-white size-font-button-send rounded-pill w-100 py-2">
                        Send Message
                    </button>
                </div>
            </div>
        </div>
        @include('templates.contacts',['kiri' => 'Contact Us <br>Directly','tengah'=>'whatsapp<br>business'])
    </div>
    <div id="faq-ordering" class="contact mx-auto w-50 mt-4 size-font-button-faq" style="font-family: Helvetica-roman"
        hidden>
        <div class="row p-2">
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Lorem ipsum dolor sit amet?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Ut enim ad minim veniam?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Excepteur sint occaecat cupidatat non proident?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Sed ut perspiciatis?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Ex ea commodi consequatur?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="faq-press" class="contact mx-auto w-50 mt-4 size-font-button-faq" style="font-family: Helvetica-roman"
        hidden>
        <div class="row p-2">
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Excepteur sint occaecat cupidatat non proident?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Sed ut perspiciatis?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Lorem ipsum dolor sit amet?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Ut enim ad minim veniam?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Ex ea commodi consequatur?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="faq-feedback" class="contact mx-auto w-50 mt-4 size-font-button-faq" style="font-family: Helvetica-roman"
        hidden>
        <div class="row p-2">
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Ex ea commodi consequatur?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Ut enim ad minim veniam?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Lorem ipsum dolor sit amet?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Excepteur sint occaecat cupidatat non proident?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Sed ut perspiciatis?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="faq-other" class="contact mx-auto w-50 mt-4 size-font-button-faq" style="font-family: Helvetica-roman"
        hidden>
        <div class="row p-2">
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Lorem ipsum dolor sit amet?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Excepteur sint occaecat cupidatat non proident?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Sed ut perspiciatis?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Ut enim ad minim veniam?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 button-collapse border border-black rounded p-4 mt-3">
                <div class="w-100 bg-white d-flex justify-content-between">
                    <p class="m-0">Ex ea commodi consequatur?</p>
                    <div class="plus-sign"></div>
                </div>
                <div class="collapse-content">
                    <br>
                    <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.button-collapse').click(function() {
        const content = $(this).find('.collapse-content'); // Menemukan .collapse-content dalam elemen yang diklik
        const plusSign = $(this).find('.plus-sign'); // Menemukan .plus-sign dalam elemen yang diklik

        // Toggle class untuk .collapse-content
        content.toggleClass('expanded');

        // Toggle class untuk .plus-sign
        plusSign.toggleClass('minus'); // Menambahkan atau menghapus kelas 'minus'
    });


    $('.ordering').click(function() {
        if ($(this).hasClass('tab-faq-active')) {
            $(this).removeClass('tab-faq-active');
            $('#faq-ordering').attr("hidden", true);
            $('#contact').removeAttr("hidden")
        } else {
            $("[id^='faq-']").attr("hidden", true);
            $('.border-line').each(function() {
                $(this).removeClass('tab-faq-active')
            })
            $(this).addClass('tab-faq-active');
            $('#faq-ordering').removeAttr("hidden")
            $('#contact').attr("hidden", true);
        }
    })
    $('.press').click(function() {
        if ($(this).hasClass('tab-faq-active')) {
            $(this).removeClass('tab-faq-active');
            $('#faq-press').attr("hidden", true);
            $('#contact').removeAttr("hidden")
        } else {
            $("[id^='faq-']").attr("hidden", true);
            $('.border-line').each(function() {
                $(this).removeClass('tab-faq-active')
            })
            $(this).addClass('tab-faq-active');
            $('#faq-press').removeAttr("hidden")
            $('#contact').attr("hidden", true);
        }
    })
    $('.feedback').click(function() {
        if ($(this).hasClass('tab-faq-active')) {
            $(this).removeClass('tab-faq-active');
            $('#faq-feedback').attr("hidden", true);
            $('#contact').removeAttr("hidden")
        } else {
            $("[id^='faq-']").attr("hidden", true);
            $('.border-line').each(function() {
                $(this).removeClass('tab-faq-active')
            })
            $(this).addClass('tab-faq-active');
            $('#faq-feedback').removeAttr("hidden")
            $('#contact').attr("hidden", true);
        }
    })
    $('.other').click(function() {
        if ($(this).hasClass('tab-faq-active')) {
            $(this).removeClass('tab-faq-active');
            $('#faq-other').attr("hidden", true);
            $('#contact').removeAttr("hidden")
        } else {
            $("[id^='faq-']").attr("hidden", true);
            $('.border-line').each(function() {
                $(this).removeClass('tab-faq-active')
            })
            $(this).addClass('tab-faq-active');
            $('#faq-other').removeAttr("hidden")
            $('#contact').attr("hidden", true);
        }
    })
</script>