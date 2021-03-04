<div class="row">
  <div class="col-lg-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title"><?php echo $judul ?></h5>
        <div class="card-tools">
          <a href="<?php echo base_url('outlet') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <div class="card-body">

        <div class="row">
          <div class="col-md-12">
            <form method="post">
              <div class="form-group">
                <label for="">ID outlet</label>
                <input type="number" name="id_outlet" id="id_outlet" class="form-control" placeholder="ID outlet" required="" value="<?php echo $outlet['id_outlet'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="">Nama outlet</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama outlet" required="" value="<?php echo $outlet['nama'] ?>">
              </div>
              <div class="form-group">
                <label for="">alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="" value="<?php echo $outlet['alamat'] ?>">
              </div>
              <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" name="tlp" id="tlp" class="form-control" placeholder="Telepon" required="" value="<?php echo $outlet['tlp'] ?>">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>

