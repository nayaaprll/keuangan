<!DOCTYPE html>
<head>
  <?php $this->load->view("admin/partials/head.php") ?>
</head>
<body>
  <?php $this->load->view("admin/partials/sidebar.php") ?>
  <?php $this->load->view("admin/partials/navbar.php") ?>

   <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/Uang_keluar/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php base_url('admin/Uang_keluar/add') ?>" method="post" enctype="multipart/form-data" >


              <div class="form-group">
                <label for="no_transaksi">Nomor Transaksi :</label>
                <input class="form-control <?php echo form_error('no_transaksi') ? 'is-invalid':'' ?>"
                 type="text" name="no_transaksi" placeholder="" />
                <div class="invalid-feedback">
                  <?php echo form_error('no_transaksi') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="tanggal">Tanggal Uang Keluar :</label>
                <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
                 type="text" name="tanggal" placeholder="" />
                <div class="invalid-feedback">
                  <?php echo form_error('tanggal') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="nominal">Nominal :</label>
                <input class="form-control <?php echo form_error('nominal') ? 'is-invalid':'' ?>"
                 type="text" name="nominal" min="0" placeholder="" />
                <div class="invalid-feedback">
                  <?php echo form_error('nominal') ?>
                </div>
              </div>

                <div class="form-group">
                <label for="keterangan">Keterangan :</label>
                <input class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
                 type="text" name="keterangan" min="0" placeholder="" />
                <div class="invalid-feedback">
                  <?php echo form_error('keterangan') ?>
                </div>
              </div>

              

              
               
              
              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


        </div>

    <?php $this->load->view("admin/partials/footer.php") ?>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <?php $this->load->view("admin/partials/modal.php") ?>
    <?php $this->load->view("admin/partials/js.php") ?>
   
</body>


</html>
