<div class="row">
  <div class="col-lg-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title"><?php echo $judul ?></h5>
        <div class="card-tools">
          <a href="<?php echo base_url('user') ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <div class="card-body">

        <div class="row">
          <div class="col-md-12">
            <form method="post">
              <div class="form-group">
                <label for="">ID user</label>
                <input type="number" name="id_user" id="id_user" class="form-control" placeholder="ID user" required="" value="<?php echo $user['id_user'] ?>" readonly>
              </div>
              <div class="form-group">
                <label for="">ID Outlet</label>
                <select name="id_outlet" id="id_outlet" class="form-control" required="">
                  <option value="">Pilih Outlet</option>
                  <?php foreach ($outlet as $row): ?>
                    <option <?php echo $row['id_outlet'] == $user['id_outlet'] ? 'selected' : '' ?> value="<?php echo $row['id_outlet'] ?>"><?php echo $row['nama'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="form-group">
                <label for="">Nama user</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama user" required="" value="<?php echo $user['nama'] ?>">
              </div>
              <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="username" required="" value="<?php echo $user['username'] ?>">
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="password">
              </div>
              <div class="form-group">
                <label for="">Role</label>
                <select name="role" id="role" class="form-control">
                  <option <?php echo $user['role'] == 'admin' ? 'selected' : '' ?> value="admin">admin</option>
                  <option <?php echo $user['role'] == 'kasir' ? 'selected' : '' ?> value="kasir">kasir</option>
                  <option <?php echo $user['role'] == 'owner' ? 'selected' : '' ?> value="owner">owner</option>
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

