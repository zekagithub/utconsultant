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
                        <th>Site Ismi</th>
                        <th>Site url</th>
                        <th>Site adres1</th>
                        <th>Site adres2</th>
                        <th>Site mail</th>
                        <th>Site telefon</th>
                        <th>Site description</th>
                        <th>Site keywords</th>
                        <th>Islem</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $say=1;
                    foreach ($melumat as $melumat):  ?>
                        <tr>
                            <td><?php echo $say++; ?></td>
                            <td><?php  echo  $melumat->site_title;?></td>
                            <td><?php  echo  $melumat->site_url;?></td>
                            <td><?php  echo  $melumat->adress;?></td>
                            <td><?php  echo  $melumat->adress2;?></td>
                            <td><?php  echo  $melumat->mail;?></td>
                            <td><?php  echo  $melumat->phone?></td>
                            <td><?php  echo  $melumat->site_desc?></td>
                            <td><?php  echo  $melumat->site_keywords?></td>

                            <td>
                                <a href="<?php echo base_url('back/settingsedit/'.$melumat->id); ?>"> <button class="btn btn-warning ">Deyisdir</button></a>
                                <a href="<?php echo base_url('back/settingsdelete/'.$melumat->id.'/id/settings'); ?>" <button class="btn btn-danger">Sil</button>


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