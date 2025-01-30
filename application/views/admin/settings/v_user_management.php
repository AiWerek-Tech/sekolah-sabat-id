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
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUserModal">
    <i class="fas fa-plus"></i> Add User
</button>
</div>


<!-- Tabel untuk menampilkan pengguna -->
<div class="table-wrapper">
<table id="example2" class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Peran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['username']; ?></td>
                <td><?= isset($user['email']) ? htmlspecialchars($user['email']) : 'Email tidak tersedia'; ?></td>
                <td><?= $user['role_name']; ?></td>
                <td>
                    <!-- Tombol Edit dengan Ikon -->
                    <a href="<?= base_url('admin/user_management/edit_user/' . $user['id']); ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>
                    <!-- Tombol Hapus dengan Ikon -->
                    <form action="<?= base_url('admin/user_management/delete_user') ?>" method="post" style="display:inline;">
                        <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Tambah Pengguna Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form untuk menambah pengguna baru -->
                <form action="<?= base_url('admin/user_management/add_user') ?>" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="role_id" class="form-label">Peran</label>
                        <select name="role_id" class="form-select" id="role_id" required>
                            <?php foreach ($roles as $role): ?>
                                <option value="<?= $role['id']; ?>"><?= $role['role_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Pengguna</button>
                </form>
            </div>
        </div>
    </div>
</div>
