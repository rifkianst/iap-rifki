<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
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

        /* Button Styles */
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
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Detail Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
                        <p class="card-text">NRP: <?= $mahasiswa['nrp']; ?></p>
                        <p class="card-text">Jurusan: <?= $mahasiswa['jurusan']; ?></p>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>