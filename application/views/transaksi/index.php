<div class="row">
  <div class="col-lg-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h5 class="card-title"><?php echo $judul ?></h5>
      </div>
      <div class="card-body">

        <div class="row">
          <div class="col-md-12">

            <?php if ($message = $this->session->flashdata('message')): ?>
              <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p><?php echo $message ?></p>
              </div>
            <?php endif ?>

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tgl</th>
                  <th>Invoice</th>
                  <th>Outlet</th>
                  <th>Member</th>
                  <th>User</th>
                  <th>Batas Waktu</th>
                  <th>Tgl Bayar</th>
                  <th>Status</th>
                  <th>Total</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $index = 1; foreach ($transaksi as $row): ?>
                <tr>
                  <td><?php echo $index++ ?></td>
                  <td><?php echo $row['tgl'] ?></td>
                  <td><?php echo $row['kd_invoice'] ?></td>
                  <td><?php echo $row['nama_outlet'] ?></td>
                  <td><?php echo $row['nama_member'] ?></td>
                  <td><?php echo $row['nama_user'] ?></td>
                  <td><?php echo $row['batas_waktu'] ?></td>
                  <td><?php echo $row['tgl_bayar'] ?></td>
                  <td><?php echo $row['status'] ?></td>
                  <td><?php echo "Rp." . number_format($row['total_bayar']) ?></td>
                  <td>
                    <a class="btn btn-warning" href="<?php echo base_url('transaksi/ubah/') . $row['id_transaksi'] ?>"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')" href="<?php echo base_url('transaksi/hapus/') . $row['id_transaksi'] ?>"><i class="fa fa-trash"></i></a>
                  </td>
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

