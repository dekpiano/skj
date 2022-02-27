<style>
/* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .skjClassSchedule .banner{
        padding-top: 0px;
    }
    .skjClassSchedule .setion1{
        padding-top: 100px;
    }
    .skjClassSchedule h1{
        font-size: 2rem;
    }
    .skjClassSchedule h2{
        font-size: 1.5rem;
    }
    .skjClassSchedule h3{
        font-size: 1.3rem;
    }
}

/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {
    .skjClassSchedule img {
        max-width: 45%;
        position: absolute;
        margin: -150px 0px;
    }

    .skjClassSchedule h1 {
        font-size: 3rem;
        color: #fbd54a;
        ;
    }

    .skjClassSchedule h2 {
        font-size: 1.5rem;
        color: #f8f9fa;
    }

    .skjClassSchedule h3 {
        font-size: 1rem;
        color: #f8f9fa;
    }

    .skjClassSchedule .setion1 {
        margin-top: 40px;
    }
}

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {
   
    .skjClassSchedule h1 {
        font-size: 4rem;
        color: #fbd54a;
        ;
    }

    .skjClassSchedule h2 {
        font-size: 2rem;
        color: #f8f9fa;
    }

    .skjClassSchedule h3 {
        font-size: 1.5rem;
        color: #f8f9fa;
    }

    .skjClassSchedule .setion1 {
        margin-top: 120px;
        text-align: center;
    }

    .skjClassSchedule img {
        max-width: 100%;
    margin-top: 95px;
    }
}

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {
    

    .skjClassSchedule h1 {
        font-size: 4rem;
        color: #fbd54a;
    }

    .skjClassSchedule h2 {
        font-size: 2rem;
        color: #f8f9fa;
    }

    .skjClassSchedule h3 {
        font-size: 1.3rem;
        color: #f8f9fa;
    }

    .skjClassSchedule .setion1 {

        text-align: center;
    }
}


/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .skjClassSchedule {}

    .skjClassSchedule h1 {
        font-size: 5rem;
    }

}
</style>

<div class="skjClassSchedule" style=" background-image: linear-gradient(180deg, #293649, #293649);">
    <div class="container ">
        <div class="row vh-100">
        <div class="col-md-12 col-lg-8 col-xl-7 align-self-md-center setion1  animate__animated animate__fadeInLeft animate__delay-1s">
                <div >
                    <h1 class="text-white"> ตารางเรียนออนไลน์</h1>
                    <h2 class="text-white"> 
                        ภาคเรียนที่ 2 ปีการศึกษา 2564 <br>
                        ใช้เรียนตั้งแต่ 1 พฤศจิกายน 2564
                    </h2>
                    <a href="http://academic.skj.ac.th/ClassSchedule" target="_blank"
                        class="btn btn-primary mb-2">ค้นหาตารางเรียน</a>
                        <a href="https://academic.skj.ac.th/LearningOnline" target="_blank"
                        class="btn btn-primary mb-2">ห้องเรียนออนไลน์</a>
                </div>
            </div>
        <div class="col-md-12 col-lg-4g col-xl-5 align-self-md-center banner animate__animated animate__fadeInRight animate__delay-1s">
                <img src="<?=base_url('uploads/banner/64ClassSchedule/logo.svg');?>" alt="" class="img-fluid">
            </div>
           
           

        </div>
    </div>
</div>