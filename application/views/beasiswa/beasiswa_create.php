<div class="dashboard-wrapper">
    <div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Tambah Data Beasiswa</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="<?= base_url('beasiswa') ?>" class="breadcrumb-link">Beasiswa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Beasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group row">
                                <label for="nama" class="col-md-2">Nama Beasiswa</label>
                                <div class="col-md-10">
                                    <input type="text" name="nama_beasiswa" id="nama" class="form-control" required placeholder="Nama Beasiswa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mulai" class="col-md-2">Tanggal Mulai</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_mulai" id="mulai" class="form-control" required placeholder="Tanggal Mulai">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="selesai" class="col-md-2">Tanggal Selesai</label>
                                <div class="col-md-10">
                                    <input type="date" name="tanggal_selesai" id="selesai" class="form-control" required placeholder="Tanggal Masuk">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mulai" class="col-md-2">Nama Jenis Beasiswa</label>
                                <div class="col-md-10">
                                    <select name="jenis_id" id="jenis_id" class="form-control" require>
                                        <option value="" disabled selected>Pilih Jenis Beasiswa</option>
                                        <?php foreach ($jenis as $j) : ?>
                                            <option value="<?= $j->id ?>"><?= $j->nama_jenis ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <a href="<?= base_url('beasiswa') ?>" class="btn btn-sm btn-danger float-right">Batal</a>
                            <button type="submit" name="create" class="btn btn-sm btn-info float-right mr-1">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>