<style>
    .form-container {
        /* background-color: #f8f9fa; */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    .form-control, .form-control-file {
        border-radius: 5px;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 5px;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .btn-secondary {
        border-radius: 5px;
    }
    .alert {
        border-radius: 5px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .custom-select {
        width: auto;
        display: inline-block;
    }
    .required-label:after {
        content: "*";
        color: red;
        margin-left: 5px;
    }
</style>

<div class="container mt-4">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php echo form_open('admin/berita-misi/anak-anak/store', ['enctype' => 'multipart/form-data', 'class' => 'form-container']); ?>

    <div class="form-group">
        <label for="judul" class="required-label">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" required value="<?= set_value('judul') ?>" placeholder="Masukkan judul berita">
        <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="hari_sabat_id" class="required-label">Hari Sabat</label>
        <select name="hari_sabat_id" class="form-control custom-select" required>
            <?php 
            $bulan = [
                1 => 'Januari', 2 => 'Februari', 3 => 'Maret',
                4 => 'April', 5 => 'Mei', 6 => 'Juni',
                7 => 'Juli', 8 => 'Agustus', 9 => 'September',
                10 => 'Oktober', 11 => 'November', 12 => 'Desember'
            ];
            foreach ($hari_sabat as $index => $sabat): 
                $tanggal = new DateTime($sabat['tanggal']);
                $bulanIndex = $tanggal->format('n');
            ?>
                <option value="<?php echo $sabat['id']; ?>">
                    <?= ($index + 1) . '. ' . $tanggal->format('d') . ' ' . $bulan[$bulanIndex] . ' ' . $tanggal->format('Y'); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?= form_error('hari_sabat_id', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="dikisahkan_oleh">Dikisahkan Oleh</label>
        <input type="text" class="form-control" name="dikisahkan_oleh" id="dikisahkan_oleh" value="<?= set_value('dikisahkan_oleh') ?>" placeholder="Nama pencerita">
        <?= form_error('dikisahkan_oleh', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="asal_negara">Asal Negara</label>
        <input type="text" class="form-control" name="asal_negara" id="asal_negara" value="<?= set_value('asal_negara') ?>" placeholder="Negara asal cerita">
        <?= form_error('asal_negara', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="pendahuluan_teks_cerita">Pendahuluan Teks Cerita</label>
        <textarea class="form-control" name="pendahuluan_teks_cerita" id="pendahuluan_teks_cerita" rows="3" placeholder="Tulis pendahuluan disini"><?= set_value('pendahuluan_teks_cerita') ?></textarea>
        <?= form_error('pendahuluan_teks_cerita', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="container mt-5">
        <div class="form-group">
            <label for="teks_cerita" class="required-label">Teks Cerita</label>
            <textarea id="teks_cerita" class="form-control summernote" name="teks_cerita" required placeholder="Tulis teks cerita disini"><?= set_value('teks_cerita') ?></textarea>
            <?= form_error('teks_cerita', '<small class="text-danger">', '</small>'); ?>
        </div>
    </div>

    <div class="form-group">
        <label for="story_tips">Story Tips</label>
        <textarea class="form-control summernote-short" name="story_tips" id="story_tips" rows="3" placeholder="Tips untuk bercerita"><?= set_value('story_tips') ?></textarea>
        <?= form_error('story_tips', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="fakta_singkat">Fakta Singkat</label>
        <textarea class="form-control summernote-short" name="fakta_singkat" id="fakta_singkat" rows="3" placeholder="Fakta singkat terkait cerita"><?= set_value('fakta_singkat') ?></textarea>
        <?= form_error('fakta_singkat', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="gambar" class="required-label">Gambar</label><br>
        <input type="file" class="form-control-file" name="gambar" id="gambar" accept="image/*"><br>
        <label for="gambar_url" class="mt-3">Atau masukkan URL gambar:</label><br>
        <input type="url" class="form-control" name="gambar_url" id="gambar_url" placeholder="https://example.com/gambar.jpg">
        <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
        <?= form_error('gambar_url', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="file_pdf_url">File PDF (masukkan URL)</label>
        <input type="url" class="form-control" name="file_pdf_url" id="file_pdf_url" placeholder="https://example.com/file.pdf">
        <?= form_error('file_pdf_url', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="file_ppt_url">File PPT (masukkan URL)</label>
        <input type="url" class="form-control" name="file_ppt_url" id="file_ppt_url" placeholder="https://example.com/file.ppt">
        <?= form_error('file_ppt_url', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= site_url('admin/berita-misi/anak-anak') ?>" class="btn btn-secondary">Kembali</a>
    </div>

    <?php echo form_close(); ?>
</div>
