<div class="row">
  <div class="col-lg-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title"><?php echo $judul ?></h5>
        <div class="card-tools">
          <a href="<?php echo base_url('paket') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <div class="card-body">

        <div class="row">
          <div class="col-md-12">
            <form method="post">
              <div class="form-group">
                <label for="">ID Paket</label>
                <input type="number" name="id_paket" id="id_paket" class="form-control" placeholder="ID Paket" required="" value="<?php echo id('tb_paket', 'id_paket') ?>" readonly>
              </div>
              <div class="form-group">
                <label for="">Outlet</label>
                <select name="id_outlet" id="id_outlet" class="form-control" required="">
                    <option value="">Pilih Outlet</option>
                  <?php foreach ($outlet as $row): ?>
                    <option value="<?php echo $row['id_outlet'] ?>"><?php echo $row['nama'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="">Nama Paket</label>
                <input type="text" name="nama_paket" id="nama_paket" class="form-control" placeholder="Nama Paket" required="">
              </div>
              <div class="form-group">
                <label for="">Jenis</label>
                <select name="jenis" id="jenis" class="form-control" required="">
                  <option value="">Pilih Jenis</option>
                  <option value="kiloan">kiloan</option>
                  <option value="selimut">selimut</option>
                  <option value="bed_cover">bed cover</option>
                  <option value="kaos">kaos</option>
                  <option value="lainnya">lainnya</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" placeholder="Harga" required="">
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

