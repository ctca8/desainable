  <div class="row">
    <div class="col-xs-12">
    <?php 
	  if ($this->session->userdata('message_success')) {
	  ?>
	    <div class="alert alert-success alert-dismissible">
	      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	      <?php echo $this->session->userdata('message_success') ?>
	    </div>
	  <?php
	    }
	    elseif($this->session->userdata('message_danger')) {
	  ?>
	    <div class="alert alert-danger alert-dismissible">
	      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	      <?php echo $this->session->userdata('message_danger') ?>
	    </div>
	  <?php
	    }
	  ?>
      <!-- <div class="box"> -->
      <div class="box box-primary">
      	<div class="box-header">
              <h3 class="box-title">Data Portfolio</h3>
              <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal_add_portfolio"><i class="fa fa-plus"></i> add portfolio</button>
            </div>
        <div class="box-body">
          <div class="clearfix"></div>
          <div class="table-responsive">
          <table class="table table-bordered table-striped example1">
                <thead>
                <tr>
                <th width="30px">No</th>
                <th>Nama Portfolio</th>
                <th>Kategori</th>
                <th>Date Created</th>
                <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $start = 0;
                foreach ($portfolio as $portfolio)
                {
              	?>
                <tr>
                  <td><?php echo ++$start ?></td>
                  <td><?php echo $portfolio->portfolio_name ?></td>
                  <td><?php echo $portfolio->category_name ?></td>
                  <td><?php echo $portfolio->date_created ?></td>
                  <td style="text-align:center" width="60px">
                   <a href="<?php echo base_url('admin/Portfolio/read/'.$portfolio->id_portfolio)?>" class="btn btn-social-icon "><i class="fa fa-eye"></i></a>
                  </td>
                  </tr>
                  <?php
                    }
                   ?>
                </tbody>
              </table>
        </div>
       </div>
      </div>
     </div>
    </div>

<!-- MODAL FORM TAMBAH PORTFOLIO -->
<div class="modal fade" id="modal_add_portfolio">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="<?php echo base_url('admin/Portfolio/insert_portfolio_action') ?>" method="POST" enctype="multipart/form-data" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">form tambah portfolio</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama Portfolio</label>
          <input type="text" class="form-control" name="portfolio_name" placeholder="nama portfolio" required="">
        </div>
        <div class="form-group">
          <label>Service kategori</label>
          <?php
            $style = 'class="form-control"';
            foreach ($service_category as $row) {
                $options[$row->id_service_category] = $row->category_name;
            }
            echo form_dropdown('id_service_category', $options, '',$style);
          ?>
        </div>
        <div class="form-group">
          <label>File Portfolio</label>
          <input type="file" name="file_portfolio" placeholder="file portfolio" required="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>