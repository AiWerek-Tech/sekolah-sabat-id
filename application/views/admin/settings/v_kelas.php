<?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success">
        <?= $this->session->flashdata('success'); ?>
    </div>
<?php elseif ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <?= $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

<section class="content">
    <div class="container-fluid">
        <div class="card card-default my-shadow mb-4">
            <div class="card-header">
                <div class="card-title">Atur Kelas</div>
                <div class="card-tools">
                    <button type="button" class="btn btn-sm btn-warning" onclick="window.location.reload();">
                        <i class="fa fa-sync"></i> <span class="d-none d-sm-inline-block ml-1">Reload</span>
                    </button>
                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#addClassModal">
                        <i class="fas fa-plus"></i><span class="d-none d-sm-inline-block ml-1">&nbsp;Tambah Kelas</span>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Kelas</th>
                                <th class="text-center">Kategori</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kelas as $key => $kelas): ?>
                                <tr>
                                    <td class="text-center"><?= $key + 1 ?></td>
                                    <td class="text-center"><?= htmlspecialchars($kelas['nama']); ?></td>
                                    <td class="text-center"><?= htmlspecialchars($kelas['kategori']); ?></td>
                                    <td class="text-center">
                                    <button class="btn btn-warning btn-sm edit-btn" 
                                        data-id="<?= $kelas['id'] ?>" 
                                        data-nama="<?= htmlspecialchars($kelas['nama']); ?>" 
                                        data-kategori="<?= $kelas['id_kategori'] ?>" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editModal">Edit
                                    </button>

                                        <form action="<?= base_url('admin/class/delete_class') ?>" method="post" style="display:inline;">
                                            <input type="hidden" name="class_id" value="<?= $kelas['id']; ?>">
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?');">Hapus</button>
                                        </form>
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

<!-- Modal untuk menambah kelas baru -->
<div class="modal fade" id="addClassModal" tabindex="-1" role="dialog" aria-labelledby="addClassModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addClassModalLabel">Tambah Kelas Baru</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/class/add_class') ?>" method="post">
                    <div class="form-group">
                        <label for="class_name">Nama Kelas</label>
                        <input type="text" class="form-control" id="class_name" name="class_name" placeholder="Nama Kelas" required>
                    </div>
                    <div class="form-group">
                        <label for="id_kategori">Kategori</label>
                        <select name="id_kategori" class="form-control" id="id_kategori" required>
                            <?php foreach ($kategori as $kategori): ?>
                                <option value="<?= $kategori['id']; ?>"><?= $kategori['kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Kelas</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Kelas -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kelas</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEdit">
                    <input type="hidden" id="kelasId" name="kelasId">
                    <div class="form-group">
                        <label for="namaKelas">Nama Kelas</label>
                        <input type="text" class="form-control" id="namaKelas" name="namaKelas">
                    </div>
                    <div class="form-group">
                        <label for="kategoriDropdown">Kategori</label>
                        <select id="kategoriDropdown" name="kategoriDropdown" class="form-control">
                            <?php foreach ($kategori as $k): ?>
                                <option value="<?php echo $k->id; ?>"><?php echo $k->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" form="formEdit">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.edit-btn', function() {
        // Ambil data dari atribut data
        var id = $(this).data('id');
        var namaKelas = $(this).data('nama');
        var kategoriId = $(this).data('kategori'); // Ambil kategori_id jika perlu

        // Isi data ke dalam modal
        $('#editModal #kelasId').val(id);
        $('#editModal #namaKelas').val(namaKelas);
        $('#editModal #kategoriDropdown').val(kategoriId); // Pastikan menggunakan ID dropdown yang benar
    });
</script>
