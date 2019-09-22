<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
           </div>
        <?php echo $this->session->flashdata('success');  ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Hakkimizda baslik</th>
                        <th>hakkimizda</th>
                        <th>hakkimizda fotograf</th>
                        <th>Islem</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
$say=1;
                    foreach ($melumat as $melumat):  ?>
                    <tr>
                        <td><?php echo $say++; ?></td>
                        <td><?php  echo  $melumat->about_title_tr;?></td>
                        <td><?php  echo  $melumat->about_text_tr;?></td>
                        <td><img  src="<?php echo base_url();echo $melumat->about_image;?> "style="width: 80px; height: 60px;"></td>

                        <td>
                            <a href="<?php echo base_url('back/aboutedit/'.$melumat->id); ?>"> <button class="btn btn-warning ">Deyisdir</button></a>
                           <a href="<?php echo base_url('back/aboutdelete/'.$melumat->id.'/id/about'); ?>" <button class="btn btn-danger">Sil</button>


                        </td>
                    </tr>
<?php endforeach;  ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

<?php $this->load->view('back/include/footer');?>