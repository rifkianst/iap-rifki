<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #e9ecef;
        }

        /* Container */
        .container {
            padding: 20px;
            max-width: 800px;
            margin: auto;
        }

        /* Alert Styles */
        .alert {
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Button Styles */
        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
            display: inline-block;
        }

        .btn:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        /* List Group */
        .list-group {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .list-group-item {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            background-color: white;
            position: relative;
            transition: box-shadow 0.3s, transform 0.3s;
        }

        .list-group-item:hover {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .badge {
            border-radius: 5px;
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            position: absolute;
            top: 10px;
        }

        .badge-danger {
            background-color: #dc3545;
            right: 80px;
        }

        .badge-success {
            background-color: #28a745;
            right: 140px;
        }

        .badge-primary {
            background-color: #007bff;
            right: 10px;
        }

        h3 {
            margin-bottom: 15px;
            color: #343a40;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="alert alert-success">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
            </div>
        <?php endif; ?>

        <div class="row mt-3">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn">Tambah Data Mahasiswa</a>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-6">
                <h3>Daftar Mahasiswa</h3>
                <?php if (empty($mahasiswa)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data mahasiswa tidak ditemukan.
                    </div>
                <?php endif; ?>
                <ul class="list-group">
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']; ?>
                            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right tombol-hapus">Hapus</a>
                            <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right">Ubah</a>
                            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">Detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>