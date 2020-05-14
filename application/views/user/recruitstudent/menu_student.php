<?php $active = $this->input->get('a'); ?>
<div class="list-group mt-5">
    <a href="<?=base_url('Admissions?a=1');?>"
        class="list-group-item list-group-item-action <?=$active == 1 ? 'active' : ''?> ">
        <i class="icofont-ui-home"></i> หน้าแรก
    </a>
    <a href="<?=base_url('Admissions/RegStudent?a=2');?>"
        class="list-group-item list-group-item-action disabled <?=$active == 2 ? 'active' : ''?>" ><i class="icofont-contact-add"></i> สมัครเรียน (ปิดรับสมัคร)</a>
    <a href="<?=base_url('checkRegister?a=3');?>"
        class="list-group-item list-group-item-action <?=$active == 3 ? 'active' : ''?>"><i class="icofont-ui-edit"></i> ตรวจสอบและแก้ไขการสมัคร</a>
    <a href="<?=base_url('Announce?a=4');?>"
        class="list-group-item list-group-item-action  <?=$active == 4 ? 'active' : ''?>"><i class="icofont-bullhorn"></i> ประกาศรายชื่อผู้มีสิทธิ์สอบ (รอ...)</a>

</div>