<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <!-- Begin Page Content -->
        <div class="container-xl">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูล<?=$title;?></h1>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 ">
                    <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?> <a
                            href="<?=base_url('admin/banner/add');?>"
                            class="btn btn-primary btn-sm float-end text-white"> <i class="far fa-plus-square"></i>
                            เพิ่ม<?=$title;?></a></h6>

                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>สถานะ</th>
                                    <th>รูป</th>
                                    <th>ชื่อ<?=$title;?></th>
                                    <th>วันที่ลง</th>
                                    <th>คำสั่ง</th>
                                </tr>
                            </thead>
                            <?php foreach ($banner as $key => $v_banner) : ?>
                            <tr>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" ban-id="<?=$v_banner->banner_id?>" name="banner_status" type="checkbox" id="banner_status"
                                          <?=$v_banner->banner_status=="on"?"checked":""?>   value="<?=$v_banner->banner_status?>">
                                        <label class="form-check-label" for="banner_status"></label>
                                    </div>
                                </td>
                                <td><img src="<?=base_url()?>uploads/banner/all/<?=$v_banner->banner_img;?>"
                                        class="img-fluid" alt="Responsive image"></td>
                                <td><?=$v_banner->banner_name;?></td>
                                <td><?=$v_banner->banner_date;?></td>
                                <td>
                                    <a href="<?=base_url('admin/banner/update/').$v_banner->banner_id.'/'.$v_banner->banner_img;?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                                    <a href="<?=base_url('admin/control_admin_banner/delete_banner/').$v_banner->banner_id.'/'.$v_banner->banner_img;?>"
                                        class="btn btn-danger btn-sm"
                                        onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i
                                            class="fas fa-trash-alt"></i> ลบ</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
</div>