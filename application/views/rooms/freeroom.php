
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-book" aria-hidden="true"></i> List Ruangan
      </h1>
    </section>
    <section class="content">
        <br>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Ruangan</h3>
                    <div class="box-tools">
                        <a class="btn btn-primary" href="<?= base_url(); ?>addNewBooking"><i class="fa fa-plus" aria-hidden="true"></i> Pesan Ruangan</a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <!-- <th>No</th> -->
                      <th>Nama Ruangan</th>
                      <th>Kapasitas Ruangan</th>
                      <th>Deskripsi Ruangan</th>
                      <th>Lantai</th>

                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($freeroom))
                    {
                        foreach($freeroom as $record)
                        {
                    ?>
                    <tr>
                      <!-- <td><?php echo $record->roomId ?></td> -->
                      <td><?php echo $record->roomNumber ?></td>
                      <td><?php echo $record->sizeTitle ?></td>
                      <td><?php echo $record->sizeDescription ?></td>
                      <td><?php echo $record->floorCode." - ".$record->floorName; ?></td>
                      
                      <td class="text-center">
                          <!-- <a href="<?php echo base_url().'editOldBooking/'.$record->bookingId; ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a> -->
                          <a href="#" id="roomId" data-roomId="<?php echo $record->roomId; ?>" class="deleteabsen btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                      </td>   
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?= base_url() ?>assets/js/common.js" charset="utf-8"></script>
