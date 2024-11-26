<style>
    .top-box {
        height: 20vh;
    }

    .fontPos {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        ;
    }

    .inputan-search{
            width: 60%!important;
        }

    @media(max-width:576px){
        .inputan-search{
            width: 70%!important;
        }
        .top-box{
            height: 10vh;
        }
    }
</style>
<div class="w-100 top-box"></div>
<div class="container-fluid px-5 py-4">
    <h1 class="text-uppercase fontPos" style="font-family: Helvetica-roman">our point of sales</h1>
    <div class="d-flex align-items-center gap-3 mt-3">
        <input class="border rounded-pill py-4 px-4 inputan-search" style="width: 60%;font-family: Helvetica-roman"
            placeholder="ex. Bali, Jakarta" type="text" name="location" id="location">
        <img class="img-fluid" style="object-fit: contain;width:74px; height: 74px" src="images/Search_Button.png"
            alt="">
    </div>
</div>