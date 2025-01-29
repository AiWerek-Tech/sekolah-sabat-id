<h2>Manajemen Peran Pengguna</h2>
<?php if ($this->session->flashdata('success')): ?>
    <p style="color:green;"><?= $this->session->flashdata('success'); ?></p>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
    <p style="color:red;"><?= $this->session->flashdata('error'); ?></p>
<?php endif; ?>


<!-- Tabel Manajemen Pengguna -->
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Peran Saat Ini</th>
            <th>Ganti Peran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $user['username']; ?></td>
                <td><?= $user['role_name']; ?></td>
                <td>
                    <form action="<?= base_url('admin/roles/update_user_role') ?>" method="post">
                        <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                        <select name="role_id">
                            <?php foreach ($roles as $role): ?>
                                <option value="<?= $role['id']; ?>" <?= ($user['role_id'] == $role['id']) ? 'selected' : ''; ?>>
                                    <?= $role['role_name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                </td>
                <td>
                    <button type="submit">Ubah Peran</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Form untuk Mengatur Permission Role -->
<h3>Manage Role Permissions</h3>
<form action="<?= base_url('admin/roles/update_role_permissions') ?>" method="post">
    <div class="form-group">
        <label for="role">Select Role:</label>
        <select name="role_id" id="role" class="form-control" required onchange="loadPermissions(this.value)">
            <option value="">Select Role</option>
            <?php foreach ($roles as $role): ?>
                <option value="<?= $role['id'] ?>"><?= $role['role_name'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <h4>Permissions:</h4>
    <div class="form-group" id="permissionsContainer">
        <!-- Permissions will be loaded here via AJAX -->
    </div>

    <button type="submit" class="btn btn-primary">Save Permissions</button>
</form>

<script>
function loadPermissions(roleId) {
    if (roleId) {
        $.ajax({
            url: '<?= base_url('admin/roles/get_permissions_by_role/') ?>' + roleId,
            type: 'GET',
            success: function(response) {
                $('#permissionsContainer').html(response);
            }
        });
    } else {
        $('#permissionsContainer').empty(); // Clear permissions if no role is selected
    }
}
</script>
