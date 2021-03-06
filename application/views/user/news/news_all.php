<main role="main">

    <section class="jumbotron text-center bg_headertitel">
        <div class="container">
            <h1>ข่าวประชาสัมพันธ์</h1>
            <p class="lead text-muted mb-5">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>

        </div>
    </section>

    <style>
    @media (max-width: 575.98px) {
        .card-columns {
            -webkit-column-count: 1;
            -moz-column-count: 1;
            column-count: 1;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .card-columns {
            -webkit-column-count: 2;
            -moz-column-count: 2;
            column-count: 2;
        }
    }

    @media (min-width: 1366px) {
        .card-columns {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
        }
    }

       /* Laptop */
       @media (min-width: 1024px) {
            img.img_news {
                height: 453px;
            }

            img.img_news_small {
                height: 222px;
            }

            h2.post-title {
                font-size: 26px;
            }

            .hvrbox-text {
                font-size: 21px;
            }
        }

        /* โทรศัพท์ 55*/
        @media screen and (max-width: 576px) {
            h2.post-title {
                font-size: 14px;
            }

            .more-services .card-title a {
                color: #222222;
                font-size: 14px;
            }
        }
    </style>

    <div class="album bg-light ">
        <div class="container">
        <div class="row">
                    <?php foreach ($news as $key => $v_news): ?>
                    <?php if ($v_news->news_facebook !== ''): ?>

                    <div class="mb-2">
                        <div loading="lazy" class="fb-post" data-href="<?= $v_news->news_facebook ?>" data-width="100%"
                            data-show-text="true"></div>
                    </div>

                    <?php else: ?>
                    <?php if ($v_news->news_img == ''): ?>
                    <div class="col-md-4 d-flex align-items-stretch mt-4">
                        <article class="card w-100">

                            <header class="card__thumb"
                                style="background-image: url(<?= base_url('asset/user/img/banner_main.jpg') ?>);">
                                <a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"></a>
                            </header>
                            <div class="card__date">
                                <span class="card__date__day"> <?=date('d',strtotime($v_news->news_date));?></span>
                                <span class="card__date__month"> <?=date('M',strtotime($v_news->news_date));?></span>
                            </div>
                            <div class="card__body">
                                <div class="card__category"><a href="#"><?= $v_news->news_category ?></a></div>
                                <div class="card__title"><a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"><?=$v_news->news_topic;?></a></div>
                                <!-- <div class="card__subtitle">Donec posuere vulputate</div> -->
                                <p class="card__description">
                                <?=strip_tags($v_news->news_content);;?>
                                </p>
                            </div>
                            <footer class="card__footer">
                                <span><?php echo $time_elapsed = $this->timeago->timeAgo_T(
                                        $v_news->news_date
                                    ); ?></span>
                                <span><i class="icofont-eye-alt"> <?= $v_news->news_view ?></i></span>
                            </footer>
                        </article>
                    </div>
                    <?php else: ?>
                    <div class="col-md-4 d-flex align-items-stretch mt-4">
                        <article class="card w-100">
                            <header class="card__thumb"
                                style="background-image: url(<?= base_url('uploads/news/').$v_news->news_img ?>);">
                                <a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"></a>
                            </header>
                            <div class="card__date">
                                <span class="card__date__day"> <?=date('d',strtotime($v_news->news_date));?></span>
                                <span class="card__date__month"> <?=date('M',strtotime($v_news->news_date));?></span>
                            </div>
                            <div class="card__body">
                                <div class="card__category"><a href="#"><?= $v_news->news_category ?></a></div>
                                <div class="card__title"><a href="<?= base_url('news/newsDetail/') .
                        $v_news->news_id ?>"><?=$v_news->news_topic?></a></div>
                                <!-- <div class="card__subtitle">Donec posuere vulputate</div> -->
                                <p class="card__description">
                                    <?=strip_tags($v_news->news_content);;?>

                                </p>
                            </div>
                            <footer class="card__footer">
                                <span><?php echo $time_elapsed = $this->timeago->timeAgo_T(
                                        $v_news->news_date
                                    ); ?></span>
                                <span><i class="icofont-eye-alt"> <?= $v_news->news_view ?></i></span>
                            </footer>
                        </article>


                    </div>
                    <?php endif; ?>


                    <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            <p>
            <nav aria-label="Page navigation example">
            <?php echo $links; ?>
            </nav>
            </p>
         
        </div>
    </div>

</main>