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
<div class="mb-3" style="width: 100%;">
    <button type="button" class="btn btn-success float-right" data-bs-toggle="modal" data-bs-target="#addPermissionModal">
        <i class="fas fa-plus"></i> Tambah Izin Baru
    </button>
</div>

<!-- Tabel untuk menampilkan izin -->
<div class="table-wrapper">
<table id="example2" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nama Izin</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($permissions as $permission): ?>
            <tr>
                <td><?= htmlspecialchars($permission['permission_name']); ?></td>
                <td><?= htmlspecialchars($permission['description']); ?></td>
                <td>
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editPermissionModal" data-id="<?= $permission['id']; ?>" data-name="<?= htmlspecialchars($permission['permission_name']); ?>" data-description="<?= htmlspecialchars($permission['description']); ?>">
                    <i class="fas fa-edit"></i>
                </button>

                    <form action="<?= base_url('admin/permission_management/delete_permission') ?>" method="post" style="display:inline;">
                        <input type="hidden" name="permission_id" value="<?= $permission['id']; ?>">
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus izin ini?');">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<!-- Modal untuk menambah izin baru -->
<div class="modal fade" id="addPermissionModal" tabindex="-1" role="dialog" aria-labelledby="addPermissionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPermissionModalLabel">Tambah Izin Baru</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk menambah izin baru -->
                <form action="<?= base_url('admin/permission_management/add_permission') ?>" method="post">
                    <div class="form-group">
                        <label for="permission_name">Nama Izin</label>
                        <input type="text" class="form-control" id="permission_name" name="permission_name" placeholder="Nama Izin" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Keterangan</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Keterangan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Izin</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk mengedit izin -->
<div class="modal fade" id="editPermissionModal" tabindex="-1" role="dialog" aria-labelledby="editPermissionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPermissionModalLabel">Edit Izin</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editPermissionForm" action="<?= base_url('admin/permission_management/update_permission') ?>" method="post">
                    <input type="hidden" id="edit_permission_id" name="permission_id">
                    <div class="form-group">
                        <label for="edit_permission_name">Nama Izin</label>
                        <input type="text" class="form-control" id="edit_permission_name" name="permission_name" placeholder="Nama Izin" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_description">Keterangan</label>
                        <input type="text" class="form-control" id="edit_description" name="description" placeholder="Keterangan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Izin</button>
                </form>
            </div>
        </div>
    </div>
</div>
