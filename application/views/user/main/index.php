<!-- Banner -->
<?php $this->load->view('user/banner/banner_main.php') ?>
<!--End Banner-->

<style>
    /* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .regis-sm h1{
        font-size:2rem;
    }
    .regis-sm h2{
        font-size:1.5rem;
    }
    .textLeft{
        text-align: center;
    }
    .textRight{
        text-align: center;
    }
}
/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) {
    .textRight{
        text-align: right;
    }
    .regis-sm h1{
        font-size:3rem;
    }
}

</style>
<div class="regis-sm" style="background: #e62e71;    color: white;    padding: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 textRight mb-2">
            <h1>รับสมัครนักเรียน 2564</h1>
             <h2><span style="background: #427bff;padding: 5px;border-radius: 5px;">24 - 28 เมษายน 2564 นี้</span></h2>
            </div>
            <div class="col-md-6 align-self-center textLeft">
                <a href="http://admission.skj.ac.th/" class="btn btn-outline-light">รายละเอียดเพิ่มเติม -></a>
            </div>
        </div>
        
    </div>
</div>

<!-- ประชาสัมพันธ์ -->
<?php $this->load->view('user/news/news_main_v2.php'); ?>

<?php $this->load->view('user/video/video_main.php'); ?>

<?php $this->load->view('user/services/services_skj.php'); ?>

<?php $this->load->view('user/popupSpecial/skj-covid19.php'); ?>

<!-- director_main -->
<?php $this->load->view('user/director/director_main.php'); ?>

<!-- director_main -->
<?php $this->load->view('user/services/services_main.php'); ?>

<!-- journal -->
<?php $this->load->view('user/journal/journal_main.php'); ?>

<!-- SKJ Gellery -->
<?php $this->load->view('user/gellery/gellery_main.php'); ?>

<!-- SKJ หน่วยงาน -->
<?php $this->load->view('user/institution/institution_main.php'); ?>