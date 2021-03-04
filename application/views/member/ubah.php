<div class="row">
  <div class="col-lg-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title"><?php echo $judul ?></h5>
        <div class="card-tools">
          <a href="<?php echo base_url('member') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <div class="card-body">

        <div class="row">
          <div class="col-md-12">
            <form method="post">
              <div class="form-group">
                <label for="">ID member</label>
                <input type="number" name="id_member" id="id_member" class="form-control" placeholder="ID member" required="" value="<?php echo $member['id_member'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="">Nama member</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama member" required="" value="<?php echo $member['nama'] ?>">
              </div>
              <div class="form-group">
                <label for="">alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required="" value="<?php echo $member['alamat'] ?>">
              </div>
              <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" name="tlp" id="tlp" class="form-control" placeholder="Telepon" required="" value="<?php echo $member['tlp'] ?>">
              </div>
              <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                  <option <?php echo $member['jenis_kelamin'] == 'L' ? 'selected' : '' ?> value="L">Laki - Laki</option>
                  <option <?php echo $member['jenis_kelamin'] == 'P' ? 'selected' : '' ?> value="P">Perempuan</option>
                </select>
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

