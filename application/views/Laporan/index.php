<div class="row">
  <div class="col-lg-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title"><?php echo $judul ?></h5>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="dari">Dari</label>
                    <input type="date" name="dari" id="dari" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="sampai">Sampai</label>
                    <input type="date" name="sampai" id="sampai" class="form-control">
                  </div>
                   <div class="form-group">
                    <label for="id_paket">Paket</label>
                    <select name="id_paket" id="id_paket" class="form-control">
                      <option value="">Semua paket</option>
                      <?php foreach ($paket as $row): ?>
                        <option value="<?php echo $row['id_paket'] ?>"><?php echo $row['nama_paket'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="id_outlet">Outlet</label>
                    <select name="id_outlet" id="id_outlet" class="form-control">
                      <option value="">Semua Outlet</option>
                      <?php foreach ($outlet as $row): ?>
                        <option value="<?php echo $row['id_outlet'] ?>"><?php echo $row['nama'] ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </form>
            <hr>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama Paket</th>
                  <th>Outlet</th>
                  <th>Harga</th>
                  <th>Terjual</th>
                  <th>Pendapatan</th>
                </tr>
              </thead>
              <tbody>
                <?php $index=1; foreach ($laporan as $row): ?>
                  <tr>
                    <td><?php echo $index++ ?></td>
                    <td><?php echo $row['tgl'] ?></td>
                    <td><?php echo $row['nama_paket'] ?></td>
                    <td><?php echo $row['nama_outlet'] ?></td>
                    <td><?php echo "Rp." . number_format($row['harga']) ?></td>
                    <td><?php echo $row['terjual'] ?></td>
                    <td><?php echo "Rp." . number_format($row['pendapatan']) ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

