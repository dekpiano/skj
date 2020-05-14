<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full center">
                    <div class="heading_main text_align_center">
                        <h2 class="text-center">
                            <span class="theme_color"><i class="fas fa-bullhorn"></i> ประกาศผลการสมัครสอบ
                            </span>ปีการศึกษา <?=(date('Y')+543);?>
                        </h2>
                        <p class="large">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
.accordion .card-header:after {
    font-family: 'FontAwesome';
    content: "\f068";
    float: right;
}

.accordion .card-header.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\f067";
}

.bs-example {
    margin: 20px;
}
</style>
<div class="bs-example">
    <div id="accordion" class="accordion">
        <div class="card mb-0 bg-primary">
            <div class="card-header">
                <button class="text-white btn btn-link cool" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-bullhorn"></i> ประกาศผลการสมัครสอบ <b>ชั้นมัธยมศึกษาปีที่ 1</b>
                </button>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordion">
                <div class="card-body">
                    <section style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    <h2>
                                        <b><u>วันเสาร์ที่ 30 พฤษภาคม 2563</u></b>
                                        นักเรียนสอบเข้าศึกษาต่อระดับชั้นมัธยมศึกษาปีที่ 1 </h2>
                                </p>
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">เวลา</th>
                                            <th scope="col">วิชา</th>
                                            <th scope="col">หมายเหตุ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>เวลา 08.30 -09.30 น.</td>
                                            <td>วิทยาศาสตร์และเทคโนโลยี </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>เวลา 09.30 -10.30 น.</td>
                                            <td>คณิตศาสตร์</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>เวลา 10.30 -11.10 น.</td>
                                            <td>ภาษาไทย</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>เวลา 11.10 –11.50 น.</td>
                                            <td>ภาษาอังกฤษ</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h3>หลักสูตรที่ต้องสอบข้อเขียน</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">1) ห้องความเป็นเลิศทางด้านวิชาการ ( Science
                                        Match and Technology Program) </li>
                                    <li class="list-group-item">2) ห้องความเป็นเลิศทางด้านภาษา ( Chinese English
                                        Program) </li>
                                    <li class="list-group-item">3) ห้องความเป็นเลิศทางด้านดนตรี ศิลปะ การแสดง (
                                        Performing Art Program)</li>
                                    <li class="list-group-item">4) ห้องการงานอาชีพ (Home economics Program)</li>
                                </ul>


                                <div class="text-center pt-5 h3">รายชื่อผู้มีสิทธิ์สอบ</div>
                                <div id="accordion1">

                                    <?php $AtpyeRoom = array('ห้องเรียนความเป็นเลิศทางด้านวิชาการ (Science Match and Technology Program)','ห้องเรียนความเป็นเลิศทางด้านภาษา (Chinese English Program)','ห้องเรียนความเป็นเลิศทางด้านดนตรี ศิลปะ การแสดง (Preforming Art Program)','ห้องเรียนความเป็นเลิศด้านการงานอาชีพ (Career Program)' );  ?>
                                    <?php foreach ($AtpyeRoom as $key => $v_Room) : ?>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <button class="btn btn-link" data-toggle="collapse"
                                                data-target="#stdOne<?=$key?>" aria-expanded="true"
                                                aria-controls="stdOne<?=$key?>">
                                                <?=$v_Room;?>
                                            </button>
                                        </div>

                                        <div id="stdOne<?=$key?>" class="collapse " aria-labelledby="headingOne"
                                            data-parent="#accordion1">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover ">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">เลขที่สมัคร</th>
                                                                <th scope="col">ชื่อสกุล</th>
                                                                <th scope="col">สถานะตรวจสอบการสมัคร</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php  foreach ($m1 as $key => $v_m1) : ?>
                                                            <?php if($v_Room == $v_m1->recruit_tpyeRoom) : ?>
                                                            <tr>
                                                                <th scope="row">
                                                                    <?=sprintf('%04d',$v_m1->recruit_id);?></th>
                                                                <td><?=$v_m1->recruit_prefix.$v_m1->recruit_firstName.' '.$v_m1->recruit_lastName;?>
                                                                </td>
                                                                <td class="h5">
                                                                    <?php if($v_m1->recruit_status == 'ผ่านการตรวจสอบ'): ?>
                                                                    <span class="text-success"><i class="icofont-check-circled"></i>
                                                                        <?=$v_m1->recruit_status?></span>
                                                                    <span class="badge badge-secondary badge-pill"><i class="icofont-print"></i>
                                                                            <a href="#"  stuid="<?=$v_m1->recruit_id;?>"
                                                                            target="_blank" data-toggle="modal"
                                                                            data-target="#staticBackdrop"
                                                                            class="text-white stu_id">พิมพ์ใบสมัครสอบ</a>
                                                                        <!-- <?=base_url('control_recruitstudent/pdf/').$v_m1->recruit_id;?> -->
                                                                    </span>
                                                                    <?php else : ?>
                                                                    <span class="text-warning"><i class="icofont-exclamation-circle"></i>
                                                                        <?=$v_m1->recruit_status?></span>
                                                                    <span class="badge badge-danger badge-pill"><i class="icofont-edit"></i>
                                                                        <a href="<?=base_url('checkRegister?edit=0');?>"
                                                                            class="text-white">กลับไปแก้ไข</a>
                                                                    </span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>


                    </section>
                </div>
            </div>
        </div>

        <div class="card mb-0 bg-primary">
            <div class="card-header">
                <button class="text-white btn btn-link cool" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-bullhorn"></i> ประกาศผลการสมัครสอบ <b>ชั้นมัธยมศึกษาปีที่ 4</b>
                </button>
            </div>
            <div id="collapseTwo" class="collapse " data-parent="#accordion">
                <div class="card-body">
                    <section style="margin-top: 20px;">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    <h2>วันเสาร์ที่ 30 พฤษภาคม 2563
                                        นักเรียนสอบเข้าศึกษาต่อระดับชั้นมัธยมศึกษาปีที่ 4</h2>
                                </p>
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">เวลา</th>
                                            <th scope="col">วิชา</th>
                                            <th scope="col">หมายเหตุ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>เวลา 08.30 -09.30 น.</td>
                                            <td>วิทยาศาสตร์และเทคโนโลยี </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>เวลา 09.30 -10.30 น.</td>
                                            <td>คณิตศาสตร์</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>เวลา 10.30 -11.10 น.</td>
                                            <td>ภาษาไทย</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>เวลา 11.10 –11.50 น.</td>
                                            <td>ภาษาอังกฤษ</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h3>หลักสูตรที่ต้องสอบข้อเขียน</h3>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">1) ห้องความเป็นเลิศทางด้านวิชาการ ( Science
                                        Match and Technology Program) </li>
                                    <li class="list-group-item">2) ห้องความเป็นเลิศทางด้านภาษา ( Chinese English
                                        Program) </li>
                                    <li class="list-group-item">3) ห้องความเป็นเลิศทางด้านดนตรี ศิลปะ การแสดง (
                                        Performing Art Program)</li>
                                    <li class="list-group-item">4) ห้องการงานอาชีพ (Home economics Program)</li>
                                </ul>

                                <div class="text-center pt-5 h3">รายชื่อผู้มีสิทธิ์สอบ</div>
                                <div id="accordion2">

                                    <?php $AtpyeRoom = array('ห้องเรียนความเป็นเลิศทางด้านวิชาการ (Science Match and Technology Program)','ห้องเรียนความเป็นเลิศทางด้านภาษา (Chinese English Program)','ห้องเรียนความเป็นเลิศทางด้านดนตรี ศิลปะ การแสดง (Preforming Art Program)','ห้องเรียนความเป็นเลิศด้านการงานอาชีพ (Career Program)' );  ?>
                                    <?php foreach ($AtpyeRoom as $key => $v_Room) : ?>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <button class="btn btn-link" data-toggle="collapse"
                                                data-target="#stdTwo<?=$key?>" aria-expanded="true"
                                                aria-controls="stdTwo<?=$key?>">
                                                <?=$v_Room;?>
                                            </button>
                                        </div>

                                        <div id="stdTwo<?=$key?>" class="collapse " aria-labelledby="headingOne"
                                            data-parent="#accordion2">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover ">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">เลขที่สมัคร</th>
                                                                <th scope="col">ชื่อสกุล</th>
                                                                <th scope="col">สถานะตรวจสอบการสมัคร</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php  foreach ($m4 as $key => $v_m4) : ?>
                                                            <?php if($v_Room == $v_m4->recruit_tpyeRoom) : ?>
                                                            <tr>
                                                                <th scope="row">
                                                                    <?=sprintf('%04d',$v_m4->recruit_id);?></th>
                                                                <td><?=$v_m4->recruit_prefix.$v_m4->recruit_firstName.' '.$v_m4->recruit_lastName;?>
                                                                </td>
                                                                <td class="h5">
                                                                    <?php if($v_m4->recruit_status == 'ผ่านการตรวจสอบ'): ?>
                                                                    <span class="text-success"><i class="icofont-check-circled"></i>
                                                                        <?=$v_m4->recruit_status?></span>
                                                                    <span class="badge badge-secondary badge-pill"><i class="icofont-print"></i>
                                                                            <a href="#"  stuid="<?=$v_m4->recruit_id;?>"
                                                                            target="_blank" data-toggle="modal"
                                                                            data-target="#staticBackdrop"
                                                                            class="text-white stu_id">พิมพ์ใบสมัครสอบ</a>
                                                                        <!-- <?=base_url('control_recruitstudent/pdf/').$v_m4->recruit_id;?> -->
                                                                    </span>
                                                                    <?php else : ?>
                                                                    <span class="text-warning"><i class="icofont-exclamation-circle"></i>
                                                                        <?=$v_m4->recruit_status?></span>
                                                                    <span class="badge badge-danger badge-pill"><i class="icofont-edit"></i>
                                                                        <a href="<?=base_url('checkRegister?edit=0');?>"
                                                                            class="text-white">กลับไปแก้ไข</a>
                                                                    </span>
                                                                    <?php endif; ?>
                                                                </td>
                                                            </tr>
                                                            <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                    </section>
                </div>
            </div>
        </div>


    </div>
    <div class="alert alert-warning mt-5" role="alert">
        <h4 class="alert-heading">หมายเหตุ</h4>
        <p> นักเรียนโควตามัธยมศึกษาปีที่ ๓ โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์
            ไม่ต้องทำการทดสอบข้อเขียน ให้มารายงานตัวและมอบตัวตามวันและเวลาที่กำหนด</p>
        <hr>
        <p class="mb-0">โรงเรียนสวนกุหลาบวิทยาลัย (จิรประวัติ) นครสวรรค์</p>
    </div>
</div>





</div>
</div>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ยืนยันด้วยวันเกิด</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                    <input hidden type="text"  id="idstu">
                        <div class="col">
                            <select class="form-control" id="recruit_birthdayD" name="recruit_birthdayD" required>
                                <option value="">วันที่...</option>
                                <?php for ($i=1; $i <=31 ; $i++) : ?>
                                <option value="<?=sprintf("%02d",$i);?>"><?=$i;?></option>
                                <?php endfor; ?>
                            </select>
                            <div class="invalid-feedback">
                                เลือกวันเกิด
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-control" id="recruit_birthdayM" name="recruit_birthdayM" required>
                                <option value="">เดือน...</option>
                                <?php $thaimonth=array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"); 
                                foreach ($thaimonth as $key => $v_m) : ?>
                                <option value="<?=sprintf("%02d",$key+1);?>"><?=$v_m;?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                เลือกเดือนเกิด
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-control" id="recruit_birthdayY" name="recruit_birthdayY" required>
                                <option value="">ปี...</option>
                                <?php $year=Date("Y")+543; echo "$year"; 
                      for ($i=($year-30);$i<=($year);$i++) : ?>
                                <option value="<?=$i;?>"><?=$i;?></option>
                                <?php endfor; ?>
                            </select>
                            <div class="invalid-feedback">
                                เลือกปีเกิด
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                <button type="button" id="report_stu" class="btn btn-primary " > พิมพ์ใบสมัครสอบ</button>
            </div>
        </div>
    </div>
</div>