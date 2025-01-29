<div class="container mt-4">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php endif; ?>

    <?php echo form_open('admin/berita-misi/anak-anak/update/' . $berita->id, ['enctype' => 'multipart/form-data', 'class' => 'form-container']); ?>

    <div class="form-group">
        <label for="judul" class="required-label">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" required value="<?= set_value('judul', $berita->judul) ?>" placeholder="Masukkan judul berita">
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
                <option value="<?= $sabat['id']; ?>" <?= $sabat['id'] == $berita->hari_sabat_id ? 'selected' : '' ?>>
                    <?= ($index + 1) . '. ' . $tanggal->format('d') . ' ' . $bulan[$bulanIndex] . ' ' . $tanggal->format('Y'); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?= form_error('hari_sabat_id', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="dikisahkan_oleh">Dikisahkan Oleh</label>
        <input type="text" class="form-control" name="dikisahkan_oleh" id="dikisahkan_oleh" value="<?= set_value('dikisahkan_oleh', $berita->dikisahkan_oleh) ?>" placeholder="Nama pencerita">
        <?= form_error('dikisahkan_oleh', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="asal_negara">Asal Negara</label>
        <input type="text" class="form-control" name="asal_negara" id="asal_negara" value="<?= set_value('asal_negara', $berita->asal_negara) ?>" placeholder="Negara asal cerita">
        <?= form_error('asal_negara', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="pendahuluan_teks_cerita">Pendahuluan Teks Cerita</label>
        <textarea class="form-control" name="pendahuluan_teks_cerita" id="pendahuluan_teks_cerita" rows="3" placeholder="Tulis pendahuluan disini"><?= set_value('pendahuluan_teks_cerita', $berita->pendahuluan_teks_cerita) ?></textarea>
        <?= form_error('pendahuluan_teks_cerita', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="teks_cerita" class="required-label">Teks Cerita</label>
        <textarea class="form-control summernote" name="teks_cerita" id="teks_cerita" rows="5" required placeholder="Tulis teks cerita disini"><?= set_value('teks_cerita', $berita->teks_cerita) ?></textarea>
        <?= form_error('teks_cerita', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="story_tips">Story Tips</label>
        <textarea class="form-control summernote-short" name="story_tips" id="story_tips" rows="3" placeholder="Tips untuk bercerita"><?= set_value('story_tips', $berita->story_tips) ?></textarea>
        <?= form_error('story_tips', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="fakta_singkat">Fakta Singkat</label>
        <textarea class="form-control summernote-short" name="fakta_singkat" id="fakta_singkat" rows="3" placeholder="Fakta singkat terkait cerita"><?= set_value('fakta_singkat', $berita->fakta_singkat) ?></textarea>
        <?= form_error('fakta_singkat', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="gambar" class="required-label">Gambar</label><br>
        <input type="file" class="form-control-file" name="gambar" id="gambar" accept="image/*"><br>
        <?php if (!empty($berita->gambar)): ?>
            <small>Gambar saat ini: <a href="<?= $berita->gambar ?>" target="_blank">Lihat</a></small><br>
        <?php endif; ?>
        <label for="gambar_url" class="mt-3">Atau masukkan URL gambar:</label><br>
        <input type="url" class="form-control" name="gambar_url" id="gambar_url" value="<?= set_value('gambar_url', $berita->gambar) ?>" placeholder="https://example.com/gambar.jpg">
        <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
        <?= form_error('gambar_url', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="file_pdf_url">File PDF (masukkan URL)</label>
        <input type="url" class="form-control" name="file_pdf_url" id="file_pdf_url" value="<?= set_value('file_pdf_url', $berita->file_pdf) ?>" placeholder="https://example.com/file.pdf">
        <?= form_error('file_pdf_url', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="form-group">
        <label for="file_ppt_url">File PPT (masukkan URL)</label>
        <input type="url" class="form-control" name="file_ppt_url" id="file_ppt_url" value="<?= set_value('file_ppt_url', $berita->file_ppt) ?>" placeholder="https://example.com/file.ppt">
        <?= form_error('file_ppt_url', '<small class="text-danger">', '</small>'); ?>
    </div>

    <div class="d-flex justify-content-between mt-4">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= site_url('admin/berita-misi/anak-anak') ?>" class="btn btn-secondary">Kembali</a>
    </div>

    <?php echo form_close(); ?>
</div>
