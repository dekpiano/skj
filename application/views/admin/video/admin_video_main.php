
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">จัดการข้อมูล<?=$title;?></h1>
          </div>

           <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 ">
              <h6 class="m-0 font-weight-bold text-primary ">ตารางข้อมูล<?=$title;?> <a href="<?=base_url('admin/video/add');?>" class="btn btn-primary btn-sm float-right"> <i class="far fa-plus-square"></i> เพิ่ม<?=$title;?></a></h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">

              <table class="table table-bordered " id="dataTable_facebook" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ชื่อ<?=$title;?></th>
                      <th>คำสั่ง</th>
                    </tr>
                  </thead>  
                  <tbody class="sort_video">
                  <?php foreach ($video as $key => $v_video) : ?>             
                    <tr rank="<?=$v_video->video_id;?>">
                      
                      <td><?=$v_video->video_name;?></td>
                      <td>
                        <a  href="<?=base_url('admin/control_admin_video/edit_video/').$v_video->video_id?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> แก้ไข</a>
                        <a  href="<?=base_url('admin/control_admin_video/delete_video/').$v_video->video_id;?>" class="btn btn-danger btn-sm" onClick="return confirm('ต้องการลบข้อมูลหรือไม่?')"><i class="fas fa-trash-alt"></i> ลบ</a>
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
      <!-- End of Main Content -->

