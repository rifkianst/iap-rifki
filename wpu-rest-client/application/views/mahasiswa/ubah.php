<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
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
            background-color: #f4f4f4;
        }

        /* Container */
        .container {
            padding: 20px;
        }

        /* Card Styles */
        .card {
            border-radius: 10px;
            border: 1px solid #ddd;
            background-color: white;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 15px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
        }

        .btn {
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .form-text {
            margin-top: 5px;
        }

        .text-danger {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Form Ubah Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input type="text" name="nrp" class="form-control" id="nrp" value="<?= $mahasiswa['nrp']; ?>">
                                <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
                                <small class="form-text text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <?php foreach( $jurusan as $j ) : ?>
                                        <?php if( $j == $mahasiswa['jurusan'] ) : ?>
                                            <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j; ?>"><?= $j; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>