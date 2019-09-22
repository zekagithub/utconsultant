<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>

    <div class="card mb-3">
        <div class="card-header">
            <span style="color: red"> <u><b>Hizmetler ust kisim ekle</b></u></span> <a href="<?php echo base_url('back/servicestitle');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>  Ekle</a>

            <div style="float: right;margin-right: 150px;" class="pull-right">
                <a href="<?php echo base_url('back/servicesadd');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>  Elave et</a>

            </div>
        </div>

        <?php echo $this->session->flashdata('success');  ?>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Hizmet Isimi</th>
                        <th>Hizmet ayrinti</th>
                        <th>Hizmet fotosu</th>

                        <th>Islem</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $say=1;
                    foreach ($melumat as $melumat):  ?>
                        <tr>
                            <td><?php echo $say++; ?></td>
                            <td><?php  echo  $melumat->services_name_tr;?></td>
                            <td><?php  echo  $melumat->services_desc_tr;?></td>
                            <td><img  src="<?php echo base_url();echo $melumat->services_image;?> "style="width: 80px; height: 60px;"></td>

                            <td>
                                <a href="<?php echo base_url('back/servicesedit/'.$melumat->id); ?>"> <button class="btn btn-warning ">Deyisdir</button></a>
                                <a href="<?php echo base_url('back/servicesdelete/'.$melumat->id.'/id/services'); ?>" <button class="btn btn-danger">Sil</button>


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