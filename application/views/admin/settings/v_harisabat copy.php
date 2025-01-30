<!-- Tombol untuk membuka modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#settingModal">
    Atur Tanggal Hari Sabat
</button>

<!-- Modal -->
<div class="modal fade" id="settingModal" tabindex="-1" role="dialog" aria-labelledby="settingModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="settingModalLabel">Atur Tanggal Hari Sabat</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editHariSabatForm" method="POST" action="<?= base_url('HariSabat/update') ?>">
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    <input type="hidden" name="triwulan_id" value="<?= $triwulan_id ?>"> <!-- Tambahkan triwulan_id -->
                    <div class="form-group">
                        <label for="editTanggal">Tanggal Sabat</label>
                        <input type="date" class="form-control" name="tanggal" id="editTanggal" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<h3 class="mt-4">Daftar Hari Sabat</h3>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Sabat Ke</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($sabat as $key => $s): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td>Sabat Ke <?= $s['sabat_ke'] ?></td>
                <td><?= $s['tanggal'] ?></td>
                <td>
                    <!-- Tombol Edit -->
                    <button class="btn btn-warning edit-btn" data-id="<?= $s['id'] ?>" data-tanggal="<?= $s['tanggal'] ?>" data-bs-toggle="modal" data-bs-target="#editHariSabatModal">Edit</button>
                    <a href="<?= base_url('HariSabat/delete/' . $s['id'] . '/' . $triwulan_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script>
    // Script untuk mengisi data pada modal edit
    $(document).on('click', '.edit-btn', function () {
        var id = $(this).data('id');
        var tanggal = $(this).data('tanggal');

        $('#editId').val(id);
        $('#editTanggal').val(tanggal);
    });
</script>
