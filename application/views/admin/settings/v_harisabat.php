<section class="content">
    <div class="container-fluid">
        <div class="card card-default my-shadow mb-4">
            <div class="card-header">
                <div class="card-title">Atur Tanggal Hari Sabat</div>
                <div class="card-tools">
                    <button type="button" class="btn btn-sm btn-warning" onclick="window.location.reload();">
                        <i class="fa fa-sync"></i> <span class="d-none d-sm-inline-block ml-1">Reload</span>
                    </button>
                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#settingModal">
                        <i class="fas fa-plus"></i><span class="d-none d-sm-inline-block ml-1">&nbsp;Atur Tanggal</span>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Sabat Ke</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sabat as $key => $s): ?>
                                <tr>
                                    <td class="text-center"><?= $key + 1 ?></td>
                                    <td class="text-center">Sabat Ke <?= $s['sabat_ke'] ?></td>
                                    <td class="text-center"><?= $s['tanggal'] ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-warning btn-sm edit-btn" data-id="<?= $s['id'] ?>" data-bs-toggle="modal" data-bs-target="#editHariSabatModal">Edit</button>
                                        <a href="<?= base_url('HariSabat/delete/' . $s['id'] . '/' . $triwulan_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal untuk Atur Tanggal Hari Sabat -->
<div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="settingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="settingModalLabel">Atur Tanggal Hari Sabat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('HariSabat/add') ?>" method="post">
                    <input type="hidden" name="triwulan_id" value="<?= $triwulan_id ?>">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sabat Ke</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 1; $i <= 13; $i++): ?>
                                <tr>
                                    <td>Sabat Ke <?= $i ?></td>
                                    <td>
                                        <?php
                                        // Mencari tanggal yang sudah ada
                                        $existingDate = isset($sabat[$i - 1]) ? $sabat[$i - 1]['tanggal'] : '';
                                        ?>
                                        <input type="date" name="tanggal_<?= $i ?>" class="form-control" value="<?= $existingDate ?>" <?= $existingDate ? '' : 'required' ?>>
                                    </td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Hari Sabat -->
<div class="modal fade" id="editHariSabatModal" tabindex="-1" role="dialog" aria-labelledby="editHariSabatModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editHariSabatModalLabel">Edit Hari Sabat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editHariSabatForm" method="POST" action="<?= base_url('HariSabat/update') ?>">
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    <div class="form-group">
                        <label for="editTanggal">Tanggal Sabat</label>
                        <input type="date" class="form-control" name="tanggal" id="editTanggal" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    // Script untuk mengisi data pada modal edit
    $(document).on('click', '.edit-btn', function () {
        var id = $(this).data('id');
        var tanggal = $(this).data('tanggal');

        $('#editId').val(id);
        $('#editTanggal').val(tanggal);
    });
</script>
