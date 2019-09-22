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
                        <th>Isimi</th>
                        <th>Numarasi</th>
                        <th>Mail adresi</th>
                        <th>Mesaji</th>
                        <th>Tarih</th>
                        <th>Status</th>
                        <th>Islem</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $say=1;
                    foreach ($melumat as $melumat):  ?>
                        <tr>
                            <td><?php echo $say++; ?></td>
                            <td><?php  echo  $melumat->name;?></td>
                            <td><?php  echo  $melumat->phone;?></td>
                            <td><?php  echo  $melumat->mail;?></td>
                            <td><?php  echo  $melumat->message;?></td>
                            <td><?php  echo  $melumat->message_date?></td>
                            <td><?php if ($melumat->message_status==1) {?>
                                    <a class="btn btn-success">Mesaj oxundu</a>

                                <?php }else{?>
                                    <a class="btn btn-danger">Mesaj oxunmamis</a>

                                <?php  } ?>
                            </td>

                            <td>
                                <a href="<?php echo base_url('back/messageread/'.$melumat->id); ?>"> <button class="btn btn-warning ">Oku</button></a>
                                <a href="<?php echo base_url('back/messagedelete/'.$melumat->id.'/id/message'); ?>" <button class="btn btn-danger">Sil</button>


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