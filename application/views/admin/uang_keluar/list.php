<!DOCTYPE html>
<head>
  <?php $this->load->view("admin/partials/head.php") ?>
</head>
<body>
  <?php $this->load->view("admin/partials/sidebar.php") ?>
  <?php $this->load->view("admin/partials/navbar.php") ?>


        <!-- DataTables -->
        <div class="card-body">
        <?php $this->load->view("admin/partials/breadcrumb.php") ?>

       <div class="content">
       <div class="card-body">
       <div class="row">
          <div class="col-md-12">
          <div class="card strpied-tabled-with-hover">
            <br>
          <div class="card-header ">
            <h4 class="card-title">Data Uang Keluar</h4>
            <a href="<?php echo site_url('admin/Uang_keluar/add') ?>">Add New</a>
          </div>
          <div class="card-body table-full-width table-responsive">
          <table class="table table-hover table-striped">
             <thead class="thead-light">
                    <tr>
                    <th>Nomor Transaksi</th> 
                    <th>Tanggal Uang Keluar</th>
                    <th>Nominal</th>
                    <th>Keterangan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($uang_keluar as $uang_keluarr): ?>
                  <tr>
                     <td>
                      <?php echo $uang_keluarr->no_transaksi ?>
                    </td>
                    <td>
                      <?php echo $uang_keluarr->tanggal ?>
                    </td>
                    <td>
                      <?php echo $uang_keluarr->nominal ?>
                    </td>
                    <td>
                      <?php echo $uang_keluarr->keterangan ?>
                    </td>
                    
              
                    <td>
                      <a href="<?php echo site_url('admin/Uang_keluar/edit/'.$uang_keluarr->id_pengeluaran) ?>"
                       class="btn btn-success"><i class="fas fa-edit"></i></a>
                      <a onclick="deleteConfirm('<?php echo site_url('admin/Uang_keluar/delete/'.$uang_keluarr->id_pengeluaran) ?>')"
                       href="#!" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
                </div>
              </div>
            </div>
          </div>
      </div>
      <?php $this->load->view("admin/partials/footer.php") ?>
                                
      <!-- /.container-fluid -->
      <?php $this->load->view("admin/partials/scrolltop.php") ?>
            <?php $this->load->view("admin/partials/modal.php") ?>
      <?php $this->load->view("admin/partials/js.php") ?>
            <script>
function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>
   
</body>


</html>
  