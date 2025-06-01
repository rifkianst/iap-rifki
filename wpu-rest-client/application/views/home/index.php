<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
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

        /* Jumbotron */
        .jumbotron {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 50px 0;
        }

        .jumbotron img {
            width: 150px;
            height: 150px;
            border: 4px solid white;
        }

        /* Portfolio Section */
        .portfolio {
            padding: 60px 0;
        }

        .portfolio h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #333;
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        /* Contact Section */
        .contact {
            padding: 60px 0;
            background-color: #e9ecef;
        }

        .contact h2 {
            margin-bottom: 30px;
        }

        .card.bg-primary {
            border-radius: 10px;
        }

        /* Form Styles */
        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .jumbotron {
                padding: 30px 0;
            }

            .portfolio h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="jumbotron" id="home">
        <div class="container">
            <div class="text-center">
                <img src="<?= base_url(); ?>assets/img/profile3.png" class="rounded-circle img-thumbnail">
                <h1 class="display-4">Rifki Ananda</h1>
                <h3 class="lead">Leader | Programmer | Gamer</h3>
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/maxresdefault.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">TTL, Tabuyung 23 Juni 2004.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/th.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">SD di SDN 381 Tabuyung dan MTSs Hubbul Wathan Tabuyung.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/man.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Sekolah Menengah Atas di MAN 1 Mandailing Natal dengan Jurusan MIA dan Lulus di Tahun 2022.</p>
                        </div>
                    </div>
                </div>   
            </div>

            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/uin.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Kuliah di Universitas Islam Negeri Imam Bonjol Padang angkatan 2022.</p>
                        </div>
                    </div>
                </div> 
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/fst.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Fakultas Sains dan Teknologi dengan Program Studi Sistem Informasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/dema.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Hobi saya Berinteraksi dengan orang, Berorganisasi. Dan melihat sunset</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="contact bg-light" id="contact">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Contact</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card bg-primary text-white mb-4 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Contact Me</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    
                    <ul class="list-group mb-4">
                        <li class="list-group-item"><h3>Location</h3></li>
                        <li class="list-group-item">My boarding house</li>
                        <li class="list-group-item">Jl Manunggal pagai, Koto Panjang Ikua Koto, Kec. Koto Tangah, Kota Padang, Sumatera Barat </li>
                        <li class="list-group-item">West Sumatera, Indonesia</li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>