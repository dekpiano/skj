<style>
/* // Extra small devices (portrait phones, less than 576px) */
@media (max-width: 575.98px) {
    .slide {
        margin-top: 37px;
    }
}

/* // Small devices (landscape phones, 576px and up) */
@media (min-width: 576px) and (max-width: 767.98px) {}

/* // Medium devices (tablets, 768px and up) */
@media (min-width: 768px) and (max-width: 991.98px) {
    .slide {
        margin-top: 60px;
    }
}

/* // Large devices (desktops, 992px and up) */
@media (min-width: 992px) and (max-width: 1199.98px) {
    .slide {
        margin-top: 60px;
    }
}

/* // Extra large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    .skjChcekMain {}

    .skjChcekMain h1 {
        font-size: 3rem;
    }

    .slide {
        margin-top: 56px;
    }

}
</style>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php foreach ($banner as $key => $v_banner) :?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?=$key;?>" <?=$key==0?" class='active'":""?>></li>

        <?php endforeach; ?>
    </ol>
    <div class="carousel-inner">
        <?php foreach ($banner as $key => $v_banner) :?>
        <div class="carousel-item <?=$key==0?"active":""?> ">
            <?php if($v_banner->banner_linkweb == ""): ?>
            <img src="<?=base_url('uploads/banner/all/'.$v_banner->banner_img)?>" class="d-block w-100"
                alt="<?=$v_banner->banner_name?>">
            <?php else : ?>
            <a href="<?=$v_banner->banner_linkweb?>">
                <img src="<?=base_url('uploads/banner/all/'.$v_banner->banner_img)?>" class="d-block w-100"
                    alt="<?=$v_banner->banner_name?>">
            </a>
            <?php endif; ?>

        </div>
        <?php endforeach; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>