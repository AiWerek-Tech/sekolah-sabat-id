<div class="container">
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
    <?php endif; ?>
    
    <?php if (!empty($berita_misi)): ?>
    <div class="card card-default my-shadow mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="card-title">Daftar Berita Misi Anak</div>
                <div class="card-tools">
                    <a href="#" onclick="window.location.reload();">
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-sync"></i> <span class="d-none d-sm-inline-block ml-1">Reload</span>
                        </button>
                    </a>
                    <a href="<?php echo site_url('admin/berita-misi/anak-anak/create'); ?>" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah Baru
                    </a>
                </div>
            </div>
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">Sabat ke</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            // Array untuk nama bulan dalam Bahasa Indonesia
                            $bulan = [
                                1 => 'Januari', 2 => 'Februari', 3 => 'Maret',
                                4 => 'April', 5 => 'Mei', 6 => 'Juni',
                                7 => 'Juli', 8 => 'Agustus', 9 => 'September',
                                10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                            ];

                            foreach ($berita_misi as $index => $berita): 
                                // Mengonversi tanggal ke format yang diinginkan
                                $tanggal = new DateTime($berita->tanggal_sabat);
                                $formattedDate = $tanggal->format('j') . ' ' . $bulan[(int)$tanggal->format('n')] . ' ' . $tanggal->format('Y');
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $index + 1; ?></td>
                                <td><?php echo $berita->judul; ?></td>
                                <td class="text-center"><?php echo $formattedDate; ?></td>
                                <td class="text-center">
                                    <a href="<?php echo site_url('admin/berita-misi/anak-anak/edit/' . $berita->id); ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="<?php echo site_url('admin/berita-misi/anak-anak/delete/' . $berita->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</a>
                                    <a href="<?php echo site_url('berita-misi/anak-anak/' . $berita->id); ?>" class="btn btn-sm btn-warning" target="_blank">Lihat</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
        <p>Tidak ada berita misi anak ditemukan.</p>
    <?php endif; ?>
</div>
