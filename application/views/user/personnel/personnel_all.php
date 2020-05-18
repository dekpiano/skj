<div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <div class="heading_main text_align_center text-center">
                            <!-- <img style="width: 150px;" src="<?=base_url('asset/user/img/Logo-SKJ.png');?>"> -->
                            <h2 class="">
                            บุคลากร <span class="theme_color"> <?=$this->uri->segment(2);?> </span>
                            </h2>
                            <p class="large">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class=" team">
    <!-- ======= Team Section ======= -->
      <div class="container">
              <?php  $img_p = base_url('uploads/personnel/');
              $img_e = base_url('asset/img/user-icon.svg');
        foreach ($pers as $key => $v_pers) :
              if($v_pers->posi_name == 'ผู้อำนวยการโรงเรียน'): ?>
        <center>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" style="background: transparent;box-shadow:0px 0px 0px 0px;padding:0px;  ">
              <img  src="<?=$v_pers->pers_img == '' ? $img_e : $img_p.$v_pers->pers_img;?>" alt="" style="border-radius:0">
              <h4><?=$v_pers->pers_prefix.$v_pers->pers_firstname.' '.$v_pers->pers_lastname;?></h4>
              <span><?=$v_pers->posi_name;?></span>
            </div>
          </div>
        </center>
        <?php  endif; endforeach;?>

        <?php foreach ($pers as $key => $v_pers) :
         if($v_pers->posi_name == 'รองผู้อำนวยการโรงเรียน'): ?>
        <center>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" style="background: transparent;box-shadow:0px 0px 0px 0px;padding:0px;  ">
              <img  src="<?=$v_pers->pers_img == '' ? $img_e : $img_p.$v_pers->pers_img;?>" alt="" style="border-radius:0">
              <h4><?=$v_pers->pers_prefix.$v_pers->pers_firstname.' '.$v_pers->pers_lastname;?></h4>
              <span><?=$v_pers->posi_name;?></span>
            </div>
          </div>
        </center>
        <?php endif; endforeach?>
        

        <div class="row">

          <?php  foreach ($pers_type as $key => $v_pers_type): ?>
            <?php if($v_pers_type->posi_name != 'รองผู้อำนวยการโรงเรียน' && $v_pers_type->posi_name != 'ผู้อำนวยการโรงเรียน'): ?>
              <div class="col-lg-3 col-md-4 d-flex align-items-stretch">
                <div class="member" style="background: transparent;box-shadow:0px 0px 0px 0px;padding:0px;  ">
                  <img  src="<?=$img_p.$v_pers_type->pers_img;?>" alt="" style="border-radius:0">
                  <h4><?=$v_pers_type->pers_prefix.$v_pers_type->pers_firstname.' '.$v_pers_type->pers_lastname;?></h4>
                  <span><?=$v_pers_type->posi_name;?></span>
                </div>
              </div>
           <?php endif; ?>
          <?php endforeach; ?>



        </div>

      </div>
    </section><!-- End Team Section -->