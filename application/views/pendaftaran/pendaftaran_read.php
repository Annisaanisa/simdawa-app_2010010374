<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php
                $this->load->view('/template/notifikasi') //memanggil notifikasi.php
                ?>
                <div class="page-header">
                    <h2 class="pageheader-title">Data Pendaftaran Akun</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('pendaftaran') ?>" class="breadcrumb-link">Pendaftaran Akun</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Pendaftaran Akun</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">Data Pendaftaran Akun
                        <a href="<?= base_url('pendaftaran/daftar') ?>" class="btn btn-sm btn-success float-right">
                            <i class="fas fa-plus"></i> Daftar Data</a>
                        <a href="<?= base_url('pendaftaran/cetak') ?>" target="_blank" class="btn btn-sm btn-info float-right">
                            <i class="fas fa-print"></i> Cetak Data</a>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-secondary">
                            <div>Klik pada photo bukti daftar untuk melihat phto lebih jelas! </div>
                        </div>
                        <table class="table table-bordered" id="mytable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NO. Pendaftaran</th>
                                    <th>Nama Lengkap</th>
                                    <th>NO Handphone</th>
                                    <th>Bukti Daftar</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($pendaftaran as $b) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $b->no_pendaftaran; ?></td>
                                        <td><?= $b->nama_lengkap; ?></td>
                                        <td><?= $b->no_handphone; ?></td>
                                        <td>
                                            <a href="<?= base_url('upload/bukti_daftar/' . $b->bukti_daftar); ?>" target="_blank">
                                                <img src="<?= base_url('upload/bukti_daftar/' . $b->bukti_daftar); ?>" alt="Bukti Daftar" width="25%" height="25%">
                                            </a>
                                        </td>
                                        <?php if ($b->keterangan == "Belum Diverifikasi") : ?>
                                            <td>
                                                <a href="<?= base_url('pendaftaran/verifikasi/acc/' . $b->id); ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-check"></i> Konfirmasi
                                                </a>
                                                <a href="<?= base_url('pendaftaran/verifikasi/batal/' . $b->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus Data ini')">
                                                    <i class="fas fa-ban"></i> Batalkan
                                                </a>
                                            </td>
                                        <?php else : ?>
                                            <td><?= $b->keterangan; ?></td>
                                        <?php endif; ?>
                                    </tr>
                                <?php $no++;
                                endforeach; ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>