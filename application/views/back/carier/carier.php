<?php $this->load->view('back/include/header');?>
<?php $this->load->view('back/include/left_menu');?>

    <div class="card mb-3">
        <div class="card-header">
            <span style="color: red"> <u><b>Karier ust kisim ekle</b></u></span> <a href="<?php echo base_url('back/cariertitle');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>  Ekle</a>

            <div style="float: right;margin-right: 150px;" class="pull-right">
                <a href="<?php echo base_url('back/carieradd');?>" type="button" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>  Elave et</a>

            </div>
        </div>

        <?php echo $this->session->flashdata('success');  ?>

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>S.no</th>
                        <th>Karyer Baslik</th>
                        <th>Karyer ayrinti</th>
                        <th>Karyer fotosu</th>

                        <th>Islem</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $say=1;
                    foreach ($melumat as $melumat):  ?>
                        <tr>
                            <td><?php echo $say++; ?></td>
                            <td><?php  echo  $melumat->carier_desc_title_tr;?></td>
                            <td><?php  echo  substr($melumat->carier_desc_tr,0,50);?></td>
                            <td><img  src="<?php echo base_url();echo $melumat->carier_image;?> "style="width: 80px; height: 60px;"></td>

                            <td>
                                <a href="<?php echo base_url('back/carieredit/'.$melumat->id); ?>"> <button class="btn btn-warning ">Deyisdir</button></a>
                                <a href="<?php echo base_url('back/carierdelete/'.$melumat->id.'/id/carier'); ?>" <button class="btn btn-danger">Sil</button>



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