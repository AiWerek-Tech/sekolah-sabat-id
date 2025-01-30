<section class="content">
    <div class="container-fluid">
        <div class="card card-default my-shadow mb-4">
            <div class="card-header">
                <div class="card-title">Atur Tahun Pelayanan & Triwulan</div>
                <div class="card-tools">
                    <a href="#" onclick="window.location.reload();">
                        <button type="button" class="btn btn-sm btn-warning">
                            <i class="fa fa-sync"></i> <span class="d-none d-sm-inline-block ml-1">Reload</span>
                        </button>
                    </a>
                    <button type="button" data-from="add" data-bs-toggle="modal" data-bs-target="#createTahunModal" class="btn btn-sm btn-success">
                        <i class="fas fa-plus"></i><span class="d-none d-sm-inline-block ml-1">&nbsp;Tahun</span>
                    </button>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#createTriwulanModal" class="btn btn-sm btn-primary">
                        <i class="fas fa-plus"></i><span class="d-none d-sm-inline-block ml-1">&nbsp;Triwulan</span>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <!-- Tabel Tahun Pelayanan -->
                    <div class="col-md-7 mb-4 table-responsive">
                        <label>Tahun Pelayanan</label>
                        <table id="tahun" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">No.</th>
                                    <th class="text-center">Tahun Pelayanan</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tahun as $key => $t): ?>
                                    <tr>
                                        <td class="text-center"><?= $key + 1 ?></td>
                                        <td class="text-center"><?= $t['tahun'] ?></td>
                                        <td class="text-center">
                                            <?= $t['aktif'] 
                                                ? '<span class="text-success"><i class="fa fa-check"></i> AKTIF</span>' 
                                                : '<button type="button" class="btn btn-xs btn-primary" onclick="window.location.href=\''. base_url('TahunTriwulan/activateTahun/' . $t['id']) . '\'">AKTIFKAN</button>' ?>
                                        </td>

                                        <td class="text-center">
                                            <button type="button" class="btn btn-xs btn-danger" onclick="window.location.href='deleteTahun/<?= $t['id'] ?>'">Hapus</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tabel Triwulan -->
                    <div class="col-md-5">
                        <label>Triwulan</label>
                        <table id="triwulan" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">No.</th>
                                    <th class="text-center">Triwulan</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($triwulan as $key => $t): ?>
                                    <tr>
                                        <td class="text-center"><?= $key + 1 ?></td>
                                        <td class="text-center"><?= 'Triwulan ' . $t['triwulan_ke'] ?></td>
                                        <td class="text-center">
                                            <?= $t['aktif'] 
                                                ? '<span class="text-success"><i class="fa fa-check"></i> AKTIF</span>' 
                                                : '<button type="button" class="btn btn-xs btn-primary" onclick="window.location.href=\''. base_url('TahunTriwulan/activateTriwulan/' . $t['id']) . '\'">AKTIFKAN</button>' ?>
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
</section>


<!-- Modal Tambah Tahun -->
<div class="modal fade" id="createTahunModal" tabindex="-1" role="dialog" aria-labelledby="createTahunLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('tahuntriwulan/addTahun') ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="createTahunLabel">Tambah Tahun Pelayanan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Tambah Triwulan -->
<div class="modal fade" id="createTriwulanModal" tabindex="-1" role="dialog" aria-labelledby="createTriwulanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?= base_url('tahuntriwulan/addTriwulan') ?>" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="createTriwulanLabel">Tambah Triwulan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="tahun_id">Tahun Pelayanan</label>
            <select class="form-control" id="tahun_id" name="tahun_id" required>
              <?php foreach ($tahun as $t): ?>
                <option value="<?= $t['id'] ?>"><?= $t['tahun'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="triwulan_ke">Triwulan Ke</label>
            <input type="number" class="form-control" id="triwulan_ke" name="triwulan_ke" min="1" max="4" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

