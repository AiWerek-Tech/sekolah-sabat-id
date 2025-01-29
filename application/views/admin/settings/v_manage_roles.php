<div class="container my-4">

    <!-- Notifikasi untuk aksi yang berhasil -->
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color:green;"><?= $this->session->flashdata('success'); ?></p>
    <?php endif; ?>
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red;"><?= $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-dark">
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
                        <td><?= htmlspecialchars($user['username']); ?></td>
                        <td><?= htmlspecialchars($user['role_name']); ?></td>
                        <td>
                            <form action="<?= base_url('admin/roles/update_user_role') ?>" method="post">
                                <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                                <select name="role_id" class="form-control">
                                    <?php foreach ($roles as $role): ?>
                                        <option value="<?= $role['id']; ?>" <?= ($user['role_id'] == $role['id']) ? 'selected' : ''; ?>>
                                            <?= htmlspecialchars($role['role_name']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">Ubah Peran</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
