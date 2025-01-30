<style>
    .table-wrapper {
    padding: 20px; /* Atur jarak sisi kiri dan kanan */
    background-color: #f8f9fa; /* Warna background untuk kontras */
    }

    table.dataTable {
        border-collapse: separate;
        border-spacing: 0 10px; /* Jarak antar baris */
    }

    table.dataTable thead th {
        background-color: #007bff;
        color: white;
        padding: 10px;
    }

    table.dataTable tbody tr {
        background-color: white;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1); /* Tambah bayangan */
    }

    table.dataTable tbody td {
        padding: 10px; /* Atur jarak antar sel */
    }

    table.dataTable thead {
    background-color: #343a40; /* Warna header */
    color: white;              /* Warna teks header */
    }

    table.dataTable tbody tr:nth-child(odd) {
        background-color: #f2f2f2; /* Warna untuk baris ganjil */
    }

    table.dataTable tbody tr:nth-child(even) {
        background-color: white; /* Warna untuk baris genap */
    }

    table.dataTable tbody tr:hover {
        background-color: #e2e6ea; /* Warna saat baris dihover */
    }
    .btn-sm i {
    margin-right: 0; /* Hilangkan margin default dari ikon */
    font-size: 14px; /* Sesuaikan ukuran ikon */
    }

    td form {
        display: inline-block; /* Agar form hapus tidak menyebabkan baris turun */
    }
</style>
<!-- Notifikasi untuk aksi yang berhasil -->
<?php if ($this->session->flashdata('success')): ?>
    <p style="color:green;"><?= $this->session->flashdata('success'); ?></p>
<?php endif; ?>

<!-- Tombol untuk membuka modal -->
<div class="d-flex justify-content-end mb-3">
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addClassModal">
    <i class="fas fa-plus"></i> Add Kelas
</button>
</div>


<!-- Tabel untuk menampilkan pengguna -->
<div class="table-wrapper">
<table id="example2" class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Nama Kelas</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kelas as $kelas): ?>
            <tr>
                <td><?= htmlspecialchars($kelas['nama']); ?></td>
                <td><?= htmlspecialchars($kelas['kategori']); ?></td> <!-- Menampilkan nama kategori -->
                <td>
                    <a href="<?= base_url('admin/class/edit_class/' . $kelas['id']); ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="<?= base_url('admin/class/delete_class') ?>" method="post" style="display:inline;">
                        <input type="hidden" name="class_id" value="<?= $kelas['id']; ?>">
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?');">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<!-- Modal untuk menambah kelas baru -->
<div class="modal fade" id="addClassModal" tabindex="-1" role="dialog" aria-labelledby="addClassModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addClassModalLabel">Tambah Kelas Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk menambah kelas baru -->
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