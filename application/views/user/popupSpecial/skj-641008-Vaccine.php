<style>
/* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .skjVaccine img {
        max-width: 73%;
        margin-top: -90px;
    }

    .skjVaccine h1 {
        font-size: 2rem;
        color: #f8488d;
    }

    .skjVaccine h2 {
        font-size: 1.5rem;
        color: #249ffd;
    }

    .skjVaccine h3 {
        font-size: 1.3rem;
    }

    .skjVaccine-setion1 {
        margin-top: 86px;
    }
}

/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {}

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {
    .skjVaccine img {
        max-width: 73%;
        margin-top: 35px;
    }

    .skjVaccine h1 {
        font-size: 3rem;
        color: #f8488d;
    }

    .skjVaccine h2 {
        font-size: 2rem;
        color: #249ffd;
    }

    .skjVaccine h3 {
        font-size: 1.5rem;
    }

    .skjVaccine-setion1 {
        margin-top: 100px;
        text-align: center;
    }
}

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {
    .skjVaccine img {
        max-width: 112%;
        margin-top: 35px;
    }

    .skjVaccine h1 {
        font-size: 3.2rem;
        color: #f8488d;
    }

    .skjVaccine h2 {
        font-size: 1.8rem;
        color: #249ffd;
    }

    .skjVaccine h3 {
        font-size: 1.5rem;
    }

    .skjVaccine-setion1 {

        text-align: center;
    }
}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .skjVaccine {}

    .skjVaccine h1 {
        font-size: 3rem;
        color: #f8488d;
    }

    .skjVaccine h2 {
        font-size: 2rem;
        color: #249ffd;
    }

    .skjVaccine h3 {
        font-size: 1.5rem;
    }

    .skjVaccine .img2{
        position: absolute;
        margin: 94px -211px;
    }
    .skjVaccine .img3{
        position: absolute;
    margin: 290px -755px;
    width: 161px;
    }

}

.bg-holder {
    position: absolute;
    width: 100%;
    min-height: 100%;
    top: 0;
    left: 0;
    background-size: cover;
    background-position: center;
    overflow: hidden;
    will-change: transform, opacity, filter;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    background-repeat: no-repeat;
    z-index: 0;
}
</style>

<div class="skjVaccine" style="">
    <div class="bg-holder"
        style="background-image:url(uploads/banner/64Vaccine/bg.svg);background-position:bottom;background-size:cover;">
    </div>
    <div class="">

        <div class="row vh-100">
            <div
                class="col-md-12 col-lg-8 col-xl-6 align-self-center skjVaccine-setion1 animate__animated animate__fadeInRight animate__delay-2s text-center">
                <div class="">
                    <h2 class=""> การรับวัคซีนเข็มที่ 1 Pfizer </h2>
                    <h1 class=""> วันอังคารที่ 12 ตุลาคม 2564 </h1>
                    <h2 class=""> สำหรับนักเรียน ม.4 - ม.6 </h2>
                    <h2 class=""> ที่ รพ.ส่งเสริมสุขภาพ (ศูนย์อนามัยที่ 3) แม่และเด็ก </h2>
                    <a href="https://skj.ac.th/news/newsDetail/news_104" class="btn btn-outline-danger">ดูเพิ่มเติม</a>
                </div>
            </div>

            <div
                class="col-md-12 col-lg-4 col-xl-6 align-self-center banner animate__animated animate__fadeInLeft animate__delay-1s ">
                <img src="<?=base_url('uploads/banner/64Vaccine/logo1.png');?>" alt="" class="img-fluid float-right">
            </div>


            <div>
                <img src="<?=base_url('uploads/banner/64Vaccine/logo2.png');?>" alt="" class="img-fluid img2">
            </div>
            <div>
                <img src="<?=base_url('uploads/banner/64Vaccine/logo2.png');?>" alt="" class="img-fluid img3">
            </div>

        </div>
    </div>
</div>